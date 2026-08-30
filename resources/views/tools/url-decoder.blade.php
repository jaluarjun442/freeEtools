@extends('layouts.app')

@section('title', 'URL Decoder Online - Free URL Decoding Tool')
@section('meta_description', 'Decode URLs and percent-encoded text online for free. Convert encoded characters back to readable text instantly with this simple URL Decoder.')
@section('canonical', url('/url-decoder'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>URL Decoder</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">URL Decoder</h1>
        <p class="text-muted mb-0">Decode URLs and percent-encoded text instantly with this free online URL Decoder.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="urlInput" class="fw-semibold mb-2">Enter or paste encoded URL or text</label>

            <textarea id="urlInput" class="form-control rounded-0" rows="10"
                placeholder="https%3A%2F%2Fexample.com%2Fsearch%3Fq%3Dhello%2520world"></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="decodeBtn" class="btn btn-primary rounded-0">
                    Decode URL
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="urlOutput" class="fw-semibold mb-2">Decoded URL</label>
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

        <h2 class="h4 fw-bold">About URL Decoder</h2>
        <p>URL Decoder converts percent-encoded characters back into their readable form. It is useful when working with encoded URLs, query parameters, web development and API data.</p>

        <h2 class="h4 fw-bold mt-4">How to Use URL Decoder</h2>
        <p>Paste your encoded URL or text into the input box and click Decode URL. The tool will decode the value instantly and display the readable result, which you can copy when needed.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This URL Decoder?</h2>
        <p>This free URL Decoder is fast and simple and works directly in your browser. No account, backend API or file upload is required.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="urlFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is URL decoding?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">URL decoding converts percent-encoded characters back into their original readable representation.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this URL Decoder free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Yes. This URL Decoder is free to use online.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I decode a URL?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Paste the encoded URL into the input box and click Decode URL to get the decoded result.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        What does %20 mean in a URL?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">%20 is the percent-encoded representation commonly used for a space character in a URL.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does URL decoding change the data?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Proper URL decoding converts encoded characters back to their corresponding characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">No. The URL decoding is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my URL uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">No. The entered URL is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I decode query parameters?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#urlFaq">
                    <div class="accordion-body">Yes. Percent-encoded query parameter values can be decoded using this tool.</div>
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

    document.getElementById('decodeBtn').addEventListener('click', function () {

        if (!input.value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        try {
            output.value = decodeURIComponent(input.value);
        } catch (error) {
            output.value = 'Invalid encoded URL or text.';
        }

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