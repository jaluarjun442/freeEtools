@extends('layouts.app')

@section('title', 'JSON Validator Online - Free JSON Checker')
@section('meta_description', 'Validate JSON online for free. Check JSON syntax, find errors and verify your JSON data instantly with our simple JSON Validator.')
@section('canonical', url('/json-validator'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>JSON Validator</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">JSON Validator</h1>
        <p class="text-muted mb-0">Validate JSON syntax and find errors instantly with our free online JSON Validator.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="jsonInput" class="fw-semibold mb-2">Enter or paste JSON</label>

            <textarea id="jsonInput" class="form-control rounded-0" rows="12"
                placeholder='Paste your JSON here...'></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="validateBtn" class="btn btn-primary rounded-0">
                    Validate JSON
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="result" class="mt-3"></div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About JSON Validator</h2>
        <p>JSON Validator is a free online tool that checks whether your JSON data is correctly formatted and follows valid JSON syntax. It helps you quickly identify common errors such as missing commas, incorrect quotation marks, invalid brackets and improperly formatted values.</p>

        <h2 class="h4 fw-bold mt-4">How to Use JSON Validator</h2>
        <p>Paste your JSON data into the input box above and click the Validate JSON button. The tool will check the JSON instantly and show whether the data is valid. If an error is found, the tool will display the browser's JSON parsing error so you can locate and correct the problem.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This JSON Validator?</h2>
        <p>This tool is useful for developers, students and anyone working with JSON data. It works directly in your browser, requires no account and does not need an API or file upload. You can quickly test JSON responses, configuration data and API-related content.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="jsonFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is JSON validation?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">JSON validation checks whether JSON data follows the correct JSON syntax and structure.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this JSON Validator free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">Yes. You can use this JSON Validator online for free without creating an account.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I validate JSON?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">Paste your JSON into the input box and click Validate JSON. The tool will immediately check its syntax.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        What errors can JSON validation find?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">It can detect syntax problems such as missing commas, invalid quotes, incorrect brackets and invalid JSON values.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does this tool require an API?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">No. JSON validation is performed directly in your browser, so no external API is required.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Can I validate API response JSON?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">Yes. You can paste an API response or any other JSON data into the validator to check its syntax.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my JSON uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">No. This tool validates the entered JSON in your browser and does not require a file upload or external API.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I use this tool on mobile?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#jsonFaq">
                    <div class="accordion-body">Yes. The JSON Validator works in modern mobile and desktop web browsers.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('jsonInput');
    const result = document.getElementById('result');

    document.getElementById('validateBtn').addEventListener('click', function () {
        const value = input.value.trim();

        if (!value) {
            result.innerHTML = '<div class="alert alert-warning rounded-0">Please enter JSON data.</div>';
            return;
        }

        try {
            JSON.parse(value);
            result.innerHTML = '<div class="alert alert-success rounded-0 mb-0"><strong>Valid JSON</strong> — Your JSON syntax is correct.</div>';
        } catch (error) {
            result.innerHTML = '<div class="alert alert-danger rounded-0 mb-0"><strong>Invalid JSON</strong><br>' +
                error.message.replace(/</g, '&lt;').replace(/>/g, '&gt;') +
                '</div>';
        }
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        input.value = '';
        result.innerHTML = '';
        input.focus();
    });
});
</script>

@endsection