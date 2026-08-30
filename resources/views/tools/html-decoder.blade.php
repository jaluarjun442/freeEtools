@extends('layouts.app')

@section('title', 'HTML Decoder Online - Free HTML Decoding Tool')
@section('meta_description', 'Decode HTML entities online for free. Convert encoded HTML characters back to readable text instantly with this fast and simple HTML Decoder.')
@section('canonical', url('/html-decoder'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>HTML Decoder</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">HTML Decoder</h1>
        <p class="text-muted mb-0">Decode HTML entities and special characters instantly with this free online HTML Decoder.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="htmlInput" class="fw-semibold mb-2">Enter or paste encoded HTML</label>

            <textarea id="htmlInput" class="form-control rounded-0" rows="10"
                placeholder="&lt;div&gt;Hello &amp;amp; welcome&lt;/div&gt;"></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="decodeBtn" class="btn btn-primary rounded-0">
                    Decode HTML
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="htmlOutput" class="fw-semibold mb-2">Decoded Output</label>
                <textarea id="htmlOutput" class="form-control rounded-0" rows="6" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About HTML Decoder</h2>
        <p>HTML Decoder converts HTML entities back into their original characters. It is useful for developers who need to read encoded HTML, special characters and HTML entity values.</p>

        <h2 class="h4 fw-bold mt-4">How to Use HTML Decoder</h2>
        <p>Paste your encoded HTML or text into the input box and click Decode HTML. The tool will convert HTML entities back into readable characters and display the result instantly.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This HTML Decoder?</h2>
        <p>This free HTML Decoder is fast, simple and works directly in your browser. No account, backend API or file upload is required.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="htmlFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is HTML decoding?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">HTML decoding converts HTML entities back into their corresponding characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this HTML Decoder free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Yes. This HTML Decoder is free to use online.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I decode HTML entities?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Paste the encoded HTML into the input box and click Decode HTML to convert the entities back to readable characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        What does &amp;amp; mean?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">&amp;amp; is the HTML entity representation of the ampersand character.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Can HTML entities represent special characters?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Yes. HTML entities can represent characters that have special meaning in HTML or are difficult to type directly.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">No. HTML decoding is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my HTML uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">No. Your entered content is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I encode the decoded HTML again?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Yes. You can use the HTML Encoder to convert special characters back into HTML entities.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('htmlInput');
    const output = document.getElementById('htmlOutput');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('decodeBtn').addEventListener('click', function () {

        if (!input.value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        const textarea = document.createElement('textarea');
        textarea.innerHTML = input.value;
        output.value = textarea.value;

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