@extends('layouts.app')

@section('title', 'HTML Encoder Online - Free HTML Encoding Tool')
@section('meta_description', 'Encode HTML characters online for free. Convert special characters into HTML entities instantly with this fast and simple HTML Encoder.')
@section('canonical', url('/html-encoder'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>HTML Encoder</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tool</span>
        <h1 class="fw-bold mb-2">HTML Encoder</h1>
        <p class="text-muted mb-0">Encode HTML special characters into HTML entities instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="htmlInput" class="fw-semibold mb-2">Enter or paste HTML or text</label>

            <textarea id="htmlInput" class="form-control rounded-0" rows="10"
                placeholder="<div>Hello & welcome</div>"></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="encodeBtn" class="btn btn-primary rounded-0">
                    Encode HTML
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="htmlOutput" class="fw-semibold mb-2">Encoded Output</label>
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

        <h2 class="h4 fw-bold">About HTML Encoder</h2>
        <p>HTML Encoder converts special HTML characters into their corresponding HTML entities. It is useful when displaying HTML code as plain text or working with characters that have special meaning in HTML.</p>

        <h2 class="h4 fw-bold mt-4">How to Use HTML Encoder</h2>
        <p>Paste your HTML code or text into the input box and click Encode HTML. The tool will convert characters such as angle brackets, ampersands and quotation marks into HTML-safe entities.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This HTML Encoder?</h2>
        <p>This free HTML Encoder is fast, simple and works directly in your browser. No account, backend API or file upload is required.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="htmlFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is HTML encoding?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">HTML encoding converts special characters into HTML entities so they can be represented safely in HTML.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this HTML Encoder free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Yes. This HTML Encoder is completely free to use online.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Which HTML characters are encoded?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Common special characters such as &amp;, &lt;, &gt;, quotation marks and apostrophes can be represented using HTML entities.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Why encode HTML?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Encoding helps display HTML syntax as text instead of allowing the browser to interpret it as markup.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does HTML encoding change my text?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">It changes special characters into their entity representations while preserving the intended text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">No. HTML encoding is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my HTML uploaded?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">No. Your input is processed locally in the browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can encoded HTML be decoded?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#htmlFaq">
                    <div class="accordion-body">Yes. HTML entities can be converted back into their original characters using an HTML Decoder.</div>
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

    document.getElementById('encodeBtn').addEventListener('click', function () {

        if (!input.value) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        const div = document.createElement('div');
        div.textContent = input.value;
        output.value = div.innerHTML;

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