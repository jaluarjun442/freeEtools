@extends('layouts.app')

@section('title', 'Word Frequency Counter - Count Word Occurrences')
@section('meta_description', 'Count word frequency online for free. Find how many times each word appears in your text with this simple Word Frequency Counter.')
@section('canonical', url('/word-frequency'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Word Frequency Counter</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Word Frequency Counter</h1>
        <p class="text-muted mb-0">Find how often each word appears in your text.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste your text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="countBtn" class="btn btn-primary rounded-0">Count Frequency</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label class="fw-semibold mb-2">Word Frequency</label>
                <div id="result" class="border p-3"></div>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">
        <h2 class="h4 fw-bold">About Word Frequency Counter</h2>
        <p>Word Frequency Counter shows how many times individual words occur in your text. It can help with content analysis and basic text research.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Word Frequency Counter</h2>
        <p>Paste your content into the input box and click Count Frequency. The tool will list each word along with its number of occurrences.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
        <div class="accordion mt-3" id="frequencyFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What is word frequency?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">Word frequency is the number of times a particular word appears in text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is this tool free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">Yes. You can count word frequency for free.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Does uppercase affect counting?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">No. Words are counted without treating uppercase and lowercase versions as different.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Can I analyze copied text?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">Yes. Paste any plain text into the input area.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Are punctuation marks counted?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">Punctuation is removed when identifying individual words.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does it require an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">No. The calculation happens in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">No. Your text remains in the browser while processing.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I use it for long text?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#frequencyFaq"><div class="accordion-body">Yes. It can process substantial amounts of plain text in the browser.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const result = document.getElementById('result');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('countBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            input.focus();
            return;
        }

        const words = input.value.toLowerCase().match(/[\p{L}\p{N}]+/gu) || [];
        const frequency = {};

        words.forEach(word => {
            frequency[word] = (frequency[word] || 0) + 1;
        });

        const sorted = Object.entries(frequency).sort((a, b) => b[1] - a[1]);

        result.innerHTML = sorted.length
            ? sorted.map(([word, count]) =>
                `<div class="d-flex justify-content-between border-bottom py-2">
                    <span>${word}</span><strong>${count}</strong>
                </div>`
              ).join('')
            : 'No words found.';

        resultBox.classList.remove('d-none');
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        input.value = '';
        result.innerHTML = '';
        resultBox.classList.add('d-none');
        input.focus();
    });

});
</script>

@endsection