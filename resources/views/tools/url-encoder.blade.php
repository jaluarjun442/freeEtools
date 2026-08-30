@extends('layouts.app')

@section('title', 'URL Encoder Online - Free URL Encoding Tool')
@section('meta_description', 'Encode URLs and text online for free. Convert special characters into URL-safe encoded format instantly with this simple URL Encoder.')
@section('canonical', url('/url-encoder'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>URL Encoder</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">URL Encoder</h1>
        <p class="text-muted mb-0">Encode URLs and special characters instantly with this free online URL Encoder.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="urlInput" class="fw-semibold mb-2">Enter or paste URL or text</label>

            <textarea id="urlInput" class="form-control rounded-0" rows="10"
                placeholder="https://example.com/search?q=hello world"></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="encodeBtn" class="btn btn-primary rounded-0">
                    Encode URL
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="urlOutput" class="fw-semibold mb-2">Encoded URL</label>
                <textarea id="urlOutput" class="form-control rounded-0" rows="6" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About URL Encoder</h2>
        <p>URL Encoder converts characters in a URL or text into percent-encoded format so they can be safely used in web addresses. It is useful when URLs contain spaces, special characters or other characters that need encoding.</p>

        <h2 class="h4 fw-bold mt-4">How to Use URL Encoder</h2>
        <p>Paste your URL or text into the input box and click Encode URL. The tool will encode the value instantly and display the encoded result. You can then copy the result for use in your website, application or API request.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This URL Encoder?</h2>
        <p>This free URL Encoder is quick and easy to use and works directly in your browser. No account, backend API or file upload is required.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="urlFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is URL encoding?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">URL encoding converts characters into a format that can be safely included in a URL.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this URL Encoder free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Yes. You can use this URL Encoder online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I encode a URL?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Enter or paste your URL and click Encode URL to generate the encoded version.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Why should URLs be encoded?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Encoding helps represent spaces and special characters in a URL-safe format.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does URL encoding change the original meaning?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Proper percent-encoding represents characters differently while preserving the intended URL data.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">No. URL encoding is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my URL uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">No. The entered text is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I decode an encoded URL?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Yes. You can use a URL Decoder to convert percent-encoded text back into its readable form.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('urlInput');
    const output = document.getElementById('urlOutput');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('encodeBtn').addEventListener('click', function () {

        if (!input.value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        output.value = encodeURI(input.value);
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