@extends('layouts.app')

@section('title', 'Base64 Decoder Online - Free Base64 Decoder')
@section('meta_description', 'Decode Base64 online for free. Convert Base64 encoded text back to readable text instantly with our fast and simple Base64 Decoder.')
@section('canonical', url('/base64-decoder'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Base64 Decoder</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">Base64 Decoder</h1>
        <p class="text-muted mb-0">Decode Base64 text instantly with this free and simple online Base64 Decoder.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="base64Input" class="fw-semibold mb-2">Enter or paste Base64 text</label>

            <textarea id="base64Input" class="form-control rounded-0" rows="10"
                placeholder="Paste Base64 encoded text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="decodeBtn" class="btn btn-primary rounded-0">
                    Decode
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="decodedOutput" class="fw-semibold mb-2">Decoded Output</label>
                <textarea id="decodedOutput" class="form-control rounded-0" rows="6" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Base64 Decoder</h2>
        <p>Base64 Decoder converts Base64 encoded data back into readable text. It is useful for developers, students and anyone working with encoded text, web applications, APIs and data formats.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Base64 Decoder</h2>
        <p>Paste your Base64 encoded text into the input box and click the Decode button. The tool will process the encoded value in your browser and display the decoded text instantly.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Base64 Decoder?</h2>
        <p>This decoder is fast, simple and works directly in your browser. No account, backend API or file upload is required, making it convenient for quick Base64 decoding tasks.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="base64Faq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is Base64 decoding?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Base64 decoding converts Base64 encoded data back into its original text representation.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Base64 Decoder free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Yes. This Base64 Decoder is free to use online.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I decode Base64 text?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Paste the Base64 value into the input box and click Decode to convert it back to readable text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Is Base64 encryption?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">No. Base64 is an encoding method and does not provide encryption or data security.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does the decoder need an API?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">No. The decoding process happens directly in your browser without an external API.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Is my Base64 data uploaded?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">No. The tool processes the entered data directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Can Base64 contain Unicode text?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">Yes. Base64 can represent UTF-8 encoded Unicode text when it was encoded correctly.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        What happens with invalid Base64?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#base64Faq">
                    <div class="accordion-body">The tool will show an error when the entered value cannot be decoded as valid Base64 data.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('base64Input');
    const output = document.getElementById('decodedOutput');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('decodeBtn').addEventListener('click', function () {

        const value = input.value.trim();

        if (!value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        try {
            const binary = atob(value);
            const bytes = Uint8Array.from(binary, char => char.charCodeAt(0));
            output.value = new TextDecoder().decode(bytes);
            resultBox.classList.remove('d-none');
        } catch (error) {
            resultBox.classList.remove('d-none');
            output.value = 'Invalid Base64 data.';
        }
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