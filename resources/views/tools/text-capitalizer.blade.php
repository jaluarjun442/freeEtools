@extends('layouts.app')

@section('title', 'Text Capitalizer Online - Capitalize Text')
@section('meta_description', 'Capitalize text online for free. Convert your text to uppercase, lowercase, title case and sentence case instantly.')
@section('canonical', url('/text-capitalizer'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Capitalizer</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Capitalizer</h1>
        <p class="text-muted mb-0">Capitalize and change the case of your text instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Enter or paste your text here..."></textarea>

            <div class="d-flex flex-wrap gap-2 mt-3">
                <button type="button" class="btn btn-primary rounded-0" data-case="sentence">Sentence Case</button>
                <button type="button" class="btn btn-outline-primary rounded-0" data-case="title">Title Case</button>
                <button type="button" class="btn btn-outline-primary rounded-0" data-case="upper">UPPERCASE</button>
                <button type="button" class="btn btn-outline-primary rounded-0" data-case="lower">lowercase</button>
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

        <h2 class="h4 fw-bold">About Text Capitalizer</h2>
        <p>Text Capitalizer helps you quickly change the capitalization of your text. Convert text to uppercase, lowercase, sentence case or title case without manually editing every word.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Capitalizer</h2>
        <p>Paste your text into the input box and choose the capitalization style you need. The converted text will appear instantly in the result box.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="capitalizerFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What is a Text Capitalizer?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">It is a tool that changes the capitalization of text into different formats.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is this Text Capitalizer free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">Yes. You can change text capitalization online for free.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">What is sentence case?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">Sentence case normally capitalizes the first letter of each sentence.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">What is title case?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">Title case capitalizes the first letter of words to create a title-style format.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I convert text to uppercase?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">Yes. Select the UPPERCASE option to convert all letters to uppercase.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Can I convert text to lowercase?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">Yes. Select the lowercase option to convert all letters to lowercase.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">No. Text processing takes place directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Does this tool need an API?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#capitalizerFaq"><div class="accordion-body">No. The tool works directly in your browser without an API.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    document.querySelectorAll('[data-case]').forEach(function (button) {
        button.addEventListener('click', function () {

            let text = input.value;

            if (!text.trim()) {
                input.focus();
                return;
            }

            const type = this.dataset.case;

            if (type === 'upper') {
                text = text.toUpperCase();
            }

            if (type === 'lower') {
                text = text.toLowerCase();
            }

            if (type === 'title') {
                text = text.toLowerCase().replace(/\b\w/g, char => char.toUpperCase());
            }

            if (type === 'sentence') {
                text = text.toLowerCase().replace(/(^\s*\w|[.!?]\s+\w)/g, char => char.toUpperCase());
            }

            output.value = text;
            resultBox.classList.remove('d-none');
        });
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