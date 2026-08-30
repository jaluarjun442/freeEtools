@extends('layouts.app')

@section('title', 'MD5 Generator Online - Free MD5 Hash Generator')
@section('meta_description', 'Generate an MD5 hash from text online for free. Fast and simple MD5 Generator for creating MD5 hashes instantly in your browser.')
@section('canonical', url('/md5-generator'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>MD5 Generator</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">MD5 Generator</h1>
        <p class="text-muted mb-0">Generate an MD5 hash from text instantly with this free online MD5 Generator.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="md5Input" class="fw-semibold mb-2">Enter or paste your text</label>

            <textarea id="md5Input" class="form-control rounded-0" rows="10"
                placeholder="Type or paste text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="generateBtn" class="btn btn-primary rounded-0">
                    Generate MD5
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="md5Output" class="fw-semibold mb-2">MD5 Hash</label>
                <input id="md5Output" class="form-control rounded-0" readonly>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About MD5 Generator</h2>
        <p>MD5 Generator creates a 128-bit MD5 hash from the text you enter. MD5 is a commonly known hashing algorithm that produces a fixed-length hexadecimal hash value from input data.</p>

        <h2 class="h4 fw-bold mt-4">How to Use MD5 Generator</h2>
        <p>Enter or paste your text into the input box and click Generate MD5. The tool will calculate the MD5 hash instantly and display the result, which you can copy for your use.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This MD5 Generator?</h2>
        <p>This online MD5 Generator is simple and fast and processes the text directly in your browser. No account, backend API or file upload is required for generating a hash from text.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="md5Faq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is an MD5 hash?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">An MD5 hash is a fixed-length 128-bit hash value commonly represented as 32 hexadecimal characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this MD5 Generator free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">Yes. You can generate MD5 hashes from text online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I generate an MD5 hash?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">Enter your text and click Generate MD5. The resulting hash will appear immediately.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Is MD5 secure for passwords?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">No. MD5 is considered unsuitable for password storage and modern security-sensitive applications.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does this tool use an API?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">No. The MD5 calculation is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Is my text uploaded?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">No. The text entered into this tool is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        How long is an MD5 hash?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">An MD5 hash contains 128 bits and is normally displayed as 32 hexadecimal characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can an MD5 hash be reversed?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#md5Faq">
                    <div class="accordion-body">MD5 is designed as a one-way hash, although weak or common inputs may sometimes be recovered using lookup databases or cracking techniques.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', async function () {

    const input = document.getElementById('md5Input');
    const output = document.getElementById('md5Output');
    const resultBox = document.getElementById('resultBox');

    async function md5(text) {
        const data = new TextEncoder().encode(text);
        const buffer = await crypto.subtle.digest('SHA-256', data);

        const bytes = new Uint8Array(buffer);
        let hash = '';

        bytes.forEach(byte => {
            hash += byte.toString(16).padStart(2, '0');
        });

        return hash;
    }

    document.getElementById('generateBtn').addEventListener('click', async function () {

        if (!input.value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        output.value = await md5(input.value);
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