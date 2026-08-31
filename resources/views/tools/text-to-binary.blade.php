@extends('layouts.app')

@section('title', 'Text to Binary Converter - Convert Text to Binary')
@section('meta_description', 'Convert text to binary online for free. Enter text and instantly convert it into binary values using this simple Text to Binary Converter.')
@section('canonical', url('/text-to-binary'))

@section('content')

<div class="border-bottom bg-light"><div class="container py-2"><a href="{{ url('/') }}" class="text-decoration-none">Home</a><span class="mx-2 text-muted">/</span><span>Text to Binary</span></div></div>

<section class="tool-hero text-center py-4"><div class="container"><span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tools</span><h1 class="fw-bold mb-2">Text to Binary Converter</h1><p class="text-muted mb-0">Convert text into binary values instantly.</p></div></section>

<section class="bg-light border-top"><div class="container py-4"><div class="tool-box bg-white border p-3 mx-auto">

<label for="input" class="fw-semibold mb-2">Enter text</label>
<textarea id="input" class="form-control rounded-0" rows="8" placeholder="Enter text here..."></textarea>

<div class="d-flex gap-2 mt-3"><button type="button" id="convert" class="btn btn-primary rounded-0">Convert</button><button type="button" id="clear" class="btn btn-outline-secondary rounded-0">Clear</button></div>

<div id="box" class="mt-3 d-none"><label for="output" class="fw-semibold mb-2">Binary Result</label><textarea id="output" class="form-control rounded-0" rows="8" readonly></textarea><button type="button" id="copy" class="btn btn-outline-primary rounded-0 mt-2">Copy</button></div>

</div></div></section>

<section class="container py-4"><div class="tool-content">
<h2 class="h4 fw-bold">About Text to Binary Converter</h2>
<p>Text to Binary Converter changes regular text into binary representation. It is useful for learning, coding and basic data conversion.</p>
<h2 class="h4 fw-bold mt-4">How to Use</h2>
<p>Enter or paste text and click Convert. The corresponding binary values will be generated instantly.</p>
<h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
<div class="accordion mt-3" id="faq">

<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f1">What is binary text?</button></h3><div id="f1" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Binary represents data using combinations of 0 and 1.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">Is this converter free?</button></h3><div id="f2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. It is free to use.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f3">Can I convert sentences?</button></h3><div id="f3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. You can convert words, sentences and larger text.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">Does it support spaces?</button></h3><div id="f4" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Spaces are converted as part of the text.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">Does it require an API?</button></h3><div id="f5" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No. Conversion is performed in the browser.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f6">Is my text uploaded?</button></h3><div id="f6" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No. The conversion happens locally.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f7">Can I copy the result?</button></h3><div id="f7" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Use the Copy button.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f8">Is it useful for coding?</button></h3><div id="f8" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. It can be useful for learning and basic programming tasks.</div></div></div>

</div></div></section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('input');
    const output = document.getElementById('output');
    const box = document.getElementById('box');

    document.getElementById('convert').addEventListener('click', function () {
        if (!input.value) return input.focus();

        output.value = Array.from(input.value)
            .map(char => char.codePointAt(0).toString(2).padStart(8, '0'))
            .join(' ');

        box.classList.remove('d-none');
    });

    document.getElementById('copy').addEventListener('click', async function () {
        await navigator.clipboard.writeText(output.value);
        this.textContent = 'Copied';
        setTimeout(() => this.textContent = 'Copy', 1500);
    });

    document.getElementById('clear').addEventListener('click', function () {
        input.value = '';
        output.value = '';
        box.classList.add('d-none');
        input.focus();
    });
});
</script>

@endsection