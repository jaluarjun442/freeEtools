@extends('layouts.app')

@section('title', 'Text Cleaner Online - Clean Text Easily')
@section('meta_description', 'Clean text online for free by removing extra spaces, blank lines and unnecessary whitespace. Simple and fast Text Cleaner.')
@section('canonical', url('/text-cleaner'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Cleaner</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Cleaner</h1>
        <p class="text-muted mb-0">Clean extra spaces, blank lines and unnecessary whitespace from text.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste your text here..."></textarea>

            <div class="d-flex flex-wrap gap-2 mt-3">
                <button type="button" id="cleanBtn" class="btn btn-primary rounded-0">Clean Text</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Cleaned Text</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">Copy</button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Text Cleaner</h2>
        <p>Text Cleaner helps remove common formatting problems from plain text. It can clean repeated spaces, unnecessary tabs and excessive blank lines to make text easier to use.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Cleaner</h2>
        <p>Paste your text into the input box and click Clean Text. The tool automatically removes repeated whitespace and unnecessary blank lines.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="cleanFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What is a Text Cleaner?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">A Text Cleaner removes common unnecessary whitespace and formatting from plain text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is this Text Cleaner free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">Yes. You can clean text online for free.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can it remove extra spaces?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">Yes. Repeated spaces and unnecessary whitespace are cleaned.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Can it remove blank lines?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">Yes. Excessive blank lines are removed while keeping normal line breaks.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I clean copied text?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">Yes. You can paste copied content and clean unnecessary whitespace.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does it need an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">No. Text cleaning is performed directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">No. The text stays in your browser during processing.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I copy the cleaned result?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#cleanFaq"><div class="accordion-body">Yes. Click Copy to copy the cleaned text.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('cleanBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            input.focus();
            return;
        }

        output.value = input.value
            .replace(/[ \t]+/g, ' ')
            .replace(/\n[ \t]*\n+/g, '\n')
            .trim();

        resultBox.classList.remove('d-none');
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