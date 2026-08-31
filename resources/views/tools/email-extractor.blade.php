@extends('layouts.app')

@section('title', 'Email Extractor Online - Extract Email Addresses')
@section('meta_description', 'Extract email addresses from text online for free. Find and collect email addresses quickly with this simple Email Extractor tool.')
@section('canonical', url('/email-extractor'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Email Extractor</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Email Extractor</h1>
        <p class="text-muted mb-0">Find and extract email addresses from text instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter or paste your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste text containing email addresses..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="extractBtn" class="btn btn-primary rounded-0">
                    Extract Emails
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Email Addresses</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">Copy</button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Email Extractor</h2>
        <p>Email Extractor finds email addresses inside a block of text and lists them separately. It can be useful when working with copied text, contact lists and other plain-text content.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Email Extractor</h2>
        <p>Paste your text into the input box and click Extract Emails. The tool identifies email-like addresses and displays unique results in the output box.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="emailFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What is an Email Extractor?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">An Email Extractor finds email addresses contained within a block of text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is this Email Extractor free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">Yes. You can extract email addresses online for free.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can it extract multiple emails?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">Yes. The tool can find multiple email addresses in the supplied text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Does it remove duplicate emails?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">Yes. Duplicate matching email addresses are shown only once in the result.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I extract emails from copied text?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">Yes. Paste copied text into the input box and extract the email addresses it contains.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does this tool need an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">No. Email extraction happens directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">No. Your text is processed locally in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I copy the extracted emails?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#emailFaq"><div class="accordion-body">Yes. Click Copy to copy all extracted email addresses.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('extractBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            input.focus();
            return;
        }

        const matches = input.value.match(
            /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/gi
        ) || [];

        const emails = [...new Set(matches)];

        output.value = emails.length
            ? emails.join('\n')
            : 'No email addresses found.';

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