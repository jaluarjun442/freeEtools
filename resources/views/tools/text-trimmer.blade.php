@extends('layouts.app')

@section('title', 'Text Trimmer Online - Remove Spaces From Text')
@section('meta_description', 'Trim text online for free. Remove spaces from the beginning and end of lines or your entire text quickly and easily.')
@section('canonical', url('/text-trimmer'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Trimmer</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Trimmer</h1>
        <p class="text-muted mb-0">Remove unnecessary spaces from the beginning and end of text.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste your text here..."></textarea>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="trimLines">
                <label class="form-check-label" for="trimLines">Trim each line separately</label>
            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="trimBtn" class="btn btn-primary rounded-0">Trim Text</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Trimmed Text</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>
                <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0 mt-2">Copy</button>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">
        <h2 class="h4 fw-bold">About Text Trimmer</h2>
        <p>Text Trimmer removes unwanted spaces at the beginning and end of text. It is useful for cleaning copied text and preparing content for further use.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Trimmer</h2>
        <p>Paste your text, choose whether each line should be trimmed separately, and click Trim Text. The cleaned result will appear below.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
        <div class="accordion mt-3" id="trimFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What does Text Trimmer do?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">It removes leading and trailing whitespace from your text.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is Text Trimmer free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">Yes. It is free to use online.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can I trim every line?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">Yes. Enable the option to trim each line separately.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Does trimming remove words?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">No. Trimming removes whitespace at the beginning and end.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I trim copied content?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">Yes. Paste copied content and trim its unnecessary surrounding spaces.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Does it need an API?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">No. It works directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Is my text uploaded?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">No. The text is processed locally in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I copy the result?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#trimFaq"><div class="accordion-body">Yes. Use the Copy button to copy the trimmed text.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');

    document.getElementById('trimBtn').addEventListener('click', function () {

        if (!input.value.trim()) {
            input.focus();
            return;
        }

        output.value = document.getElementById('trimLines').checked
            ? input.value.split(/\r?\n/).map(line => line.trim()).join('\n')
            : input.value.trim();

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