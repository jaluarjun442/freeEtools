@extends('layouts.app')

@section('title', 'Line Break Remover Online - Remove Line Breaks')
@section('meta_description', 'Remove line breaks from text online for free. Convert multi-line text into clean continuous text instantly with this simple Line Break Remover.')
@section('canonical', url('/line-break-remover'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Line Break Remover</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Line Break Remover</h1>
        <p class="text-muted mb-0">Remove line breaks from text and create clean continuous content instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter or paste your text</label>

            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste multi-line text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="removeBtn" class="btn btn-primary rounded-0">
                    Remove Line Breaks
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Result</label>

                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>

                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">
                    Copy
                </button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Line Break Remover</h2>
        <p>Line Break Remover removes unnecessary line breaks from text and combines separate lines into continuous content. It can be useful when cleaning copied text, paragraphs, notes and content from documents.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Line Break Remover</h2>
        <p>Paste your multi-line text into the input box and click Remove Line Breaks. The tool will remove line breaks and create a cleaner continuous version of your text.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Line Break Remover?</h2>
        <p>This free online tool makes it easy to clean text without manually deleting every line break. It works directly in your browser without an account, backend API or file upload.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="lineBreakFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What does a Line Break Remover do?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">It removes line breaks from text and combines separate lines into continuous text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Line Break Remover free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">Yes. You can remove line breaks online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I remove line breaks from text?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">Paste your text into the tool and click Remove Line Breaks to generate the cleaned text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Can I remove line breaks from copied text?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">Yes. You can paste copied multi-line text into the tool and remove its line breaks.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Does the tool remove spaces too?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">The tool focuses on removing line breaks while keeping the text content readable.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">No. The text is processed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my text uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">No. Your text is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I copy the cleaned text?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#lineBreakFaq">
                    <div class="accordion-body">Yes. Click the Copy button after removing the line breaks to copy the result.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('removeBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            resultBox.classList.add('d-none');
            input.focus();
            return;
        }

        output.value = input.value
            .replace(/\r\n/g, ' ')
            .replace(/\n/g, ' ')
            .replace(/\r/g, ' ')
            .replace(/[ \t]+/g, ' ')
            .trim();

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