@extends('layouts.app')

@section('title', 'Slug Generator Online - Free URL Slug Generator')
@section('meta_description', 'Generate SEO-friendly URL slugs online for free. Convert titles and text into clean, lowercase, URL-friendly slugs instantly.')
@section('canonical', url('/slug-generator'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Slug Generator</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">SEO Tool</span>
        <h1 class="fw-bold mb-2">Slug Generator</h1>
        <p class="text-muted mb-0">Generate clean and SEO-friendly URL slugs from text instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="slugInput" class="fw-semibold mb-2">Enter your title or text</label>

            <textarea id="slugInput" class="form-control rounded-0" rows="8"
                placeholder="Enter your page title here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="generateBtn" class="btn btn-primary rounded-0">
                    Generate Slug
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="slugOutput" class="fw-semibold mb-2">Generated Slug</label>
                <input id="slugOutput" class="form-control rounded-0" readonly>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Slug Generator</h2>
        <p>Slug Generator converts titles and text into clean, readable and URL-friendly slugs. A slug is commonly used as the readable part of a web page URL.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Slug Generator</h2>
        <p>Enter your page title or text into the input box and click Generate Slug. The tool converts the text to lowercase, removes unnecessary characters and replaces spaces with hyphens.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Slug Generator?</h2>
        <p>This free online Slug Generator helps create short and clean URLs quickly. It works directly in your browser without an account, backend API or file upload.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="slugFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is a URL slug?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">A URL slug is the readable part of a web address that usually identifies a specific page or article.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Slug Generator free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">Yes. You can generate URL slugs online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I create an SEO-friendly slug?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">Use short, descriptive words, keep the slug readable and separate words with hyphens.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Should URL slugs be lowercase?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">Lowercase slugs are commonly preferred because they provide a consistent and clean URL format.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Should spaces be used in a URL slug?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">Spaces are normally replaced with hyphens when creating readable URL slugs.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">No. Slug generation is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my text uploaded?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">No. Your text is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I edit the generated slug?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#slugFaq">
                    <div class="accordion-body">Yes. You can copy the generated slug and make any additional changes before using it on your website.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('slugInput');
    const output = document.getElementById('slugOutput');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('generateBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        output.value = input.value
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .replace(/^-|-$/g, '');

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