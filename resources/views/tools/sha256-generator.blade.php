@extends('layouts.app')

@section('title', 'SHA-256 Generator Online - Free SHA256 Hash Generator')
@section('meta_description', 'Generate SHA-256 hashes online for free. Create a secure 256-bit SHA256 hash from text instantly using this simple browser-based tool.')
@section('canonical', url('/sha256-generator'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>SHA-256 Generator</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">SHA-256 Generator</h1>
        <p class="text-muted mb-0">Generate a SHA-256 hash from text instantly with this free online SHA256 Generator.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="shaInput" class="fw-semibold mb-2">Enter or paste your text</label>

            <textarea id="shaInput" class="form-control rounded-0" rows="10"
                placeholder="Type or paste text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="generateBtn" class="btn btn-primary rounded-0">
                    Generate SHA-256
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="shaOutput" class="fw-semibold mb-2">SHA-256 Hash</label>
                <input id="shaOutput" class="form-control rounded-0" readonly>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About SHA-256 Generator</h2>
        <p>SHA-256 Generator creates a SHA-256 cryptographic hash from the text you enter. SHA-256 produces a fixed-length 256-bit hash that is commonly represented as 64 hexadecimal characters.</p>

        <h2 class="h4 fw-bold mt-4">How to Use SHA-256 Generator</h2>
        <p>Enter or paste your text into the input box and click Generate SHA-256. The tool calculates the hash instantly and displays the result, which you can copy for your project or testing needs.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This SHA-256 Generator?</h2>
        <p>This online SHA-256 Generator is fast, simple and works directly in your browser. No account, backend API or file upload is required, making it useful for developers, students and everyday hashing tasks.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="shaFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is SHA-256?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">SHA-256 is a cryptographic hash algorithm that produces a fixed 256-bit hash value from input data.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this SHA-256 Generator free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">Yes. You can generate SHA-256 hashes online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I generate a SHA-256 hash?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">Enter your text and click Generate SHA-256. The generated hash will appear instantly.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        How long is a SHA-256 hash?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">A SHA-256 hash contains 256 bits and is normally displayed as 64 hexadecimal characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Is SHA-256 encryption?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">No. SHA-256 is a one-way cryptographic hashing algorithm, not an encryption algorithm.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool use an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">No. SHA-256 hashing is performed directly in your browser using the Web Crypto API.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my text uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">No. The text is processed locally in your browser and does not need to be uploaded.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can SHA-256 hashes be reversed?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#shaFaq">
                    <div class="accordion-body">SHA-256 is designed as a one-way function, although weak or predictable input values can sometimes be guessed.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('shaInput');
    const output = document.getElementById('shaOutput');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('generateBtn').addEventListener('click', async function () {

        if (!input.value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        const data = new TextEncoder().encode(input.value);
        const hashBuffer = await crypto.subtle.digest('SHA-256', data);
        const hashArray = Array.from(new Uint8Array(hashBuffer));

        output.value = hashArray
            .map(byte => byte.toString(16).padStart(2, '0'))
            .join('');

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