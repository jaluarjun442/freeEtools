@extends('layouts.app')

@section('title', 'Text Difference Checker - Compare Text Online')
@section('meta_description', 'Compare two texts online and find differences instantly. Free Text Difference Checker for comparing documents, code, notes and plain text.')
@section('canonical', url('/text-difference-checker'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Difference Checker</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Difference Checker</h1>
        <p class="text-muted mb-0">Compare two texts and find differences quickly and easily.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <div class="row g-3">

                <div class="col-md-6">
                    <label for="textOne" class="fw-semibold mb-2">Original Text</label>
                    <textarea id="textOne" class="form-control rounded-0" rows="12"
                        placeholder="Paste the original text here..."></textarea>
                </div>

                <div class="col-md-6">
                    <label for="textTwo" class="fw-semibold mb-2">New Text</label>
                    <textarea id="textTwo" class="form-control rounded-0" rows="12"
                        placeholder="Paste the new text here..."></textarea>
                </div>

            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="compareBtn" class="btn btn-primary rounded-0">
                    Compare Text
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label class="fw-semibold mb-2">Comparison Result</label>
                <div id="result" class="border p-3 bg-light" style="white-space: pre-wrap;"></div>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Text Difference Checker</h2>
        <p>Text Difference Checker helps you compare two versions of text and identify changes. It can be useful for checking documents, articles, notes, code and other text content.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Difference Checker</h2>
        <p>Paste the original version in the first box and the new version in the second box. Click Compare Text to see whether the two texts are different.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Text Difference Checker?</h2>
        <p>This free text comparison tool provides a quick way to check two pieces of text without installing software or uploading files. The comparison is performed directly in your browser.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="diffFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is a Text Difference Checker?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">It is a tool that compares two pieces of text and helps identify whether they contain differences.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Text Difference Checker free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">Yes. You can compare text online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        How do I compare two texts?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">Paste the two versions into the separate text boxes and click Compare Text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Can I compare documents with this tool?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">You can paste the text from documents into the two input boxes and compare the text content.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Can developers compare code?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">Yes. You can paste two versions of code into the tool to check whether their text content differs.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool require an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">No. The comparison works directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my text uploaded to a server?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">No. The text is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I compare long text?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#diffFaq">
                    <div class="accordion-body">Yes. You can paste longer text into both boxes, although very large inputs may depend on your browser's available resources.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textOne = document.getElementById('textOne');
    const textTwo = document.getElementById('textTwo');
    const resultBox = document.getElementById('resultBox');
    const result = document.getElementById('result');

    document.getElementById('compareBtn').addEventListener('click', function () {

        if (!textOne.value && !textTwo.value) {
            resultBox.classList.add('d-none');
            textOne.focus();
            return;
        }

        if (textOne.value === textTwo.value) {
            result.textContent = 'No differences found. Both texts are identical.';
        } else {
            result.textContent =
                'The two texts are different.\n\n' +
                'Original characters: ' + textOne.value.length + '\n' +
                'New characters: ' + textTwo.value.length;
        }

        resultBox.classList.remove('d-none');
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        textOne.value = '';
        textTwo.value = '';
        result.textContent = '';
        resultBox.classList.add('d-none');
        textOne.focus();
    });

});
</script>

@endsection