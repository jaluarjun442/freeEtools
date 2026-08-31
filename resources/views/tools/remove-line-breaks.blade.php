@extends('layouts.app')

@section('title', 'Remove Line Breaks Online - Join Text Lines')
@section('meta_description', 'Remove line breaks from text online for free. Join multiple lines into one paragraph quickly with this simple Remove Line Breaks tool.')
@section('canonical', url('/remove-line-breaks'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Remove Line Breaks</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Remove Line Breaks</h1>
        <p class="text-muted mb-0">Join multiple lines of text into a single paragraph.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste text with line breaks here..."></textarea>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="preserveParagraphs">
                <label class="form-check-label" for="preserveParagraphs">Preserve paragraph breaks</label>
            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="removeBtn" class="btn btn-primary rounded-0">Remove Line Breaks</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Result</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">Copy</button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">
        <h2 class="h4 fw-bold">About Remove Line Breaks</h2>
        <p>Remove Line Breaks joins text that has been separated by unnecessary line breaks. It is useful when copied content contains unwanted breaks between sentences or lines.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Remove Line Breaks</h2>
        <p>Paste your text into the input box and click Remove Line Breaks. You can optionally preserve paragraph breaks while joining individual lines.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
        <div class="accordion mt-3" id="breakFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What does Remove Line Breaks do?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">It joins separate lines of text and removes unnecessary line breaks.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is this tool free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">Yes. It is free to use online.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can I join text into one paragraph?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">Yes. The tool can join multiple lines into continuous text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Can paragraph breaks be preserved?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">Yes. Enable Preserve Paragraphs to keep larger paragraph separation.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Is it useful for copied PDF text?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">Yes. It can help clean text that contains unwanted line breaks after copying.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does it need an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">No. The tool works directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">No. Processing happens locally in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I copy the result?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#breakFaq"><div class="accordion-body">Yes. Use the Copy button to copy the processed text.</div></div></div>

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
            input.focus();
            return;
        }

        const preserve = document.getElementById('preserveParagraphs').checked;

        output.value = preserve
            ? input.value.replace(/[ \t]*\n[ \t]*/g, ' ').replace(/\n{2,}/g, '\n\n').trim()
            : input.value.replace(/\s*\n\s*/g, ' ').replace(/ +/g, ' ').trim();

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
        document.getElementById('preserveParagraphs').checked = false;
        resultBox.classList.add('d-none');
        input.focus();
    });

});
</script>

@endsection