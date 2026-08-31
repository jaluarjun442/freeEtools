@extends('layouts.app')

@section('title', 'Whitespace Remover Online - Remove Extra Spaces')
@section('meta_description', 'Remove extra whitespace from text online for free. Clean multiple spaces, tabs and unnecessary whitespace instantly with this simple tool.')
@section('canonical', url('/whitespace-remover'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Whitespace Remover</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Whitespace Remover</h1>
        <p class="text-muted mb-0">Remove extra spaces, tabs and unnecessary whitespace from your text.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter or paste your text</label>

            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste your text here..."></textarea>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="keepLines">
                <label class="form-check-label" for="keepLines">
                    Keep line breaks
                </label>
            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="removeBtn" class="btn btn-primary rounded-0">
                    Remove Whitespace
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Cleaned Text</label>

                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>

                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Whitespace Remover</h2>
        <p>Whitespace Remover cleans unnecessary spaces, tabs and repeated whitespace from text. It is useful for cleaning copied content, lists, notes and plain text.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Whitespace Remover</h2>
        <p>Paste your text into the input box and click Remove Whitespace. You can choose to keep line breaks while cleaning extra spaces and tabs.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Whitespace Remover?</h2>
        <p>This free online tool makes text cleanup quick and simple. It works directly in your browser without an account, backend API or file upload.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="whitespaceFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What does a Whitespace Remover do?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">It removes repeated and unnecessary whitespace from your text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Whitespace Remover free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">Yes. You can clean whitespace from text online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Does it remove multiple spaces?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">Yes. Multiple consecutive spaces are converted into a single space.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Can I keep line breaks?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">Yes. Enable the Keep Line Breaks option to preserve line breaks while removing extra spaces and tabs.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does it remove tabs?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">Yes. Tab characters are cleaned and converted to normal spacing.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">No. Whitespace cleaning is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my text uploaded?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">No. Your text is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I copy the cleaned text?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#whitespaceFaq">
                    <div class="accordion-body">Yes. Click Copy to copy the cleaned text to your clipboard.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const keepLines = document.getElementById('keepLines');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('removeBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        let text = input.value;

        if (keepLines.checked) {
            text = text
                .replace(/[ \t]+/g, ' ')
                .replace(/ *\n */g, '\n')
                .trim();
        } else {
            text = text
                .replace(/\s+/g, ' ')
                .trim();
        }

        output.value = text;
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
        keepLines.checked = false;
        resultBox.classList.add('d-none');
        input.focus();
    });

});
</script>

@endsection