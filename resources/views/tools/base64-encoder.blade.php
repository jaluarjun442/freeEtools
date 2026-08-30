@extends('layouts.app')

@section('title', 'Base64 Encoder Online - Free Base64 Encoder')
@section('meta_description', 'Encode text to Base64 online for free. Fast and simple Base64 Encoder to convert text into Base64 encoded data instantly.')
@section('canonical', url('/base64-encoder'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Base64 Encoder</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">Base64 Encoder</h1>
        <p class="text-muted mb-0">Encode text to Base64 instantly with this free and simple online Base64 Encoder.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="base64Input" class="fw-semibold mb-2">Enter or paste your text</label>

            <textarea id="base64Input" class="form-control rounded-0" rows="10"
                placeholder="Type or paste text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="encodeBtn" class="btn btn-primary rounded-0">
                    Encode
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="base64Output" class="fw-semibold mb-2">Base64 Output</label>
                <textarea id="base64Output" class="form-control rounded-0" rows="6" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Base64 Encoder</h2>
        <p>Base64 Encoder converts text into Base64 encoded data using the standard Base64 encoding format. It is useful for developers working with data, APIs, web applications and encoded text.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Base64 Encoder</h2>
        <p>Enter or paste your text into the input box and click the Encode button. The tool will instantly convert the text into Base64 format. You can then copy the generated result for use in your project.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Base64 Encoder?</h2>
        <p>This online Base64 Encoder is fast, simple and works directly in your browser. No account, backend API or file upload is required. It can be useful for developers, students and anyone who needs quick Base64 encoding.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="base64Faq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is Base64 encoding?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Base64 encoding converts data into a text format using a set of 64 characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Base64 Encoder free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Yes. You can use this Base64 Encoder online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I encode text to Base64?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Paste your text into the input box and click Encode to generate the Base64 result.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Does Base64 encryption protect data?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">No. Base64 is an encoding method, not encryption, and encoded data can be decoded easily.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">No. The encoding is performed directly in your browser without an external API.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Is my text uploaded to a server?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">No. The tool processes the text directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Can I encode special characters?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Yes. The encoder uses UTF-8 compatible browser encoding so normal Unicode text can be encoded.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I decode Base64 data?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Yes. Use a Base64 Decoder to convert Base64 encoded data back into readable text.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('base64Input');
    const output = document.getElementById('base64Output');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('encodeBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        const bytes = new TextEncoder().encode(input.value);
        let binary = '';

        bytes.forEach(byte => binary += String.fromCharCode(byte));

        output.value = btoa(binary);
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