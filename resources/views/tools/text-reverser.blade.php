@extends('layouts.app')

@section('title', 'Text Reverser Online - Reverse Text Instantly')
@section('meta_description', 'Reverse text online for free. Quickly reverse letters, words or lines with this simple online Text Reverser.')
@section('canonical', url('/text-reverser'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Reverser</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Reverser</h1>
        <p class="text-muted mb-0">Reverse letters, words or lines in your text instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Enter or paste text here..."></textarea>

            <div class="d-flex flex-wrap gap-2 mt-3">
                <button type="button" id="reverseChars" class="btn btn-primary rounded-0">Reverse Characters</button>
                <button type="button" id="reverseWords" class="btn btn-outline-primary rounded-0">Reverse Words</button>
                <button type="button" id="reverseLines" class="btn btn-outline-primary rounded-0">Reverse Lines</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Result</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">Copy</button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Text Reverser</h2>
        <p>Text Reverser allows you to reverse characters, words or individual lines quickly. It is useful for text experiments, puzzles, formatting tasks and other simple text operations.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Reverser</h2>
        <p>Enter your text and choose whether you want to reverse characters, words or lines. The reversed result will be displayed immediately.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="reverseFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What does Text Reverser do?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">It reverses characters, words or lines according to the selected option.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is Text Reverser free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">Yes. The tool is free to use online.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can I reverse individual characters?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">Yes. Use Reverse Characters to reverse the complete character sequence.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Can I reverse words?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">Yes. Reverse Words changes the order of words in your text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I reverse lines?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">Yes. Reverse Lines changes the order of separate lines.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does it require an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">No. The tool runs directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">No. Your text is processed locally in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I copy the reversed text?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#reverseFaq"><div class="accordion-body">Yes. Use the Copy button to copy the result.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    function showResult(text) {
        if (!input.value) {
            input.focus();
            return;
        }

        output.value = text;
        resultBox.classList.remove('d-none');
    }

    document.getElementById('reverseChars').addEventListener('click', function () {
        showResult([...input.value].reverse().join(''));
    });

    document.getElementById('reverseWords').addEventListener('click', function () {
        showResult(input.value.trim().split(/\s+/).reverse().join(' '));
    });

    document.getElementById('reverseLines').addEventListener('click', function () {
        showResult(input.value.split(/\r?\n/).reverse().join('\n'));
    });

    document.getElementById('copyBtn').addEventListener('click', async function () {
        await navigator.clipboard.writeText(output.value);
        this.textContent = 'Copied';
        setTimeout(() => this.textContent = 'Copy', 1500);
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        input.value = '';
        output.value = '';
        resultBox.classList.add('d-none');
        input.focus();
    });

});
</script>

@endsection