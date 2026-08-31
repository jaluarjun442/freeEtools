@extends('layouts.app')

@section('title', 'Text Extractor Online - Extract Text Easily')
@section('meta_description', 'Extract useful text such as emails, URLs and numbers from content online for free with this simple Text Extractor tool.')
@section('canonical', url('/text-extractor'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Extractor</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Extractor</h1>
        <p class="text-muted mb-0">Extract emails, URLs and numbers from text instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste text containing emails, URLs or numbers..."></textarea>

            <div class="d-flex flex-wrap gap-2 mt-3">
                <button type="button" id="emailsBtn" class="btn btn-primary rounded-0">Extract Emails</button>
                <button type="button" id="urlsBtn" class="btn btn-outline-primary rounded-0">Extract URLs</button>
                <button type="button" id="numbersBtn" class="btn btn-outline-primary rounded-0">Extract Numbers</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Extracted Results</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">Copy</button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Text Extractor</h2>
        <p>Text Extractor helps find specific types of information inside plain text. You can quickly extract email addresses, website URLs or numbers from a larger block of content.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Extractor</h2>
        <p>Paste your content into the input box and select the type of information you want to extract. Matching items will be displayed in the result box.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="extractFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What can this Text Extractor find?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">It can extract email addresses, URLs and numbers from plain text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is this Text Extractor free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">Yes. The tool is free to use online.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can I extract email addresses?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">Yes. Select Extract Emails to find email addresses in the supplied text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Can I extract website URLs?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">Yes. The URL option finds common website addresses in your text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I extract numbers?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">Yes. The Numbers option extracts numeric sequences from the text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does the tool need an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">No. Extraction is performed directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">No. Your text is processed locally in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I copy extracted results?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#extractFaq"><div class="accordion-body">Yes. Click Copy to copy the extracted results.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    function extract(regex) {
        if (!input.value.trim()) {
            input.focus();
            return;
        }

        const matches = input.value.match(regex) || [];
        output.value = [...new Set(matches)].join('\n') || 'No matching results found.';
        resultBox.classList.remove('d-none');
    }

    document.getElementById('emailsBtn').addEventListener('click', function () {
        extract(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/gi);
    });

    document.getElementById('urlsBtn').addEventListener('click', function () {
        extract(/https?:\/\/[^\s]+|www\.[^\s]+/gi);
    });

    document.getElementById('numbersBtn').addEventListener('click', function () {
        extract(/\b\d+(?:[.,]\d+)?\b/g);
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