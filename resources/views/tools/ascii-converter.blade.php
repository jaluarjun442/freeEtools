@extends('layouts.app')

@section('title', 'ASCII Converter Online - Text to ASCII')
@section('meta_description', 'Convert text to ASCII codes online for free. Enter text to get ASCII values instantly with this simple ASCII Converter.')
@section('canonical', url('/ascii-converter'))

@section('content')

<div class="border-bottom bg-light"><div class="container py-2"><a href="{{ url('/') }}" class="text-decoration-none">Home</a><span class="mx-2 text-muted">/</span><span>ASCII Converter</span></div></div>

<section class="tool-hero text-center py-4"><div class="container"><span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tools</span><h1 class="fw-bold mb-2">ASCII Converter</h1><p class="text-muted mb-0">Convert text characters into ASCII codes instantly.</p></div></section>

<section class="bg-light border-top"><div class="container py-4"><div class="tool-box bg-white border p-3 mx-auto">

<label for="input" class="fw-semibold mb-2">Enter text</label>
<textarea id="input" class="form-control rounded-0" rows="8" placeholder="Enter text here..."></textarea>

<div class="d-flex gap-2 mt-3"><button type="button" id="convert" class="btn btn-primary rounded-0">Convert to ASCII</button><button type="button" id="clear" class="btn btn-outline-secondary rounded-0">Clear</button></div>

<div id="box" class="mt-3 d-none"><label for="output" class="fw-semibold mb-2">ASCII Result</label><textarea id="output" class="form-control rounded-0" rows="6" readonly></textarea><button type="button" id="copy" class="btn btn-outline-primary rounded-0 mt-2">Copy</button></div>

</div></div></section>

<section class="container py-4"><div class="tool-content">
<h2 class="h4 fw-bold">About ASCII Converter</h2>
<p>ASCII Converter changes supported text characters into their numeric ASCII values. It is useful for developers, students and anyone learning character encoding.</p>
<h2 class="h4 fw-bold mt-4">How to Use</h2>
<p>Enter your text and click Convert to ASCII. The numeric character codes will be displayed instantly.</p>
<h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
<div class="accordion mt-3" id="faq">

<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f1">What is ASCII?</button></h3><div id="f1" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">ASCII is a character encoding standard used to represent common characters with numeric codes.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">Is the converter free?</button></h3><div id="f2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. It is free to use online.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f3">Can I convert complete sentences?</button></h3><div id="f3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. You can enter words or complete sentences.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">Are spaces included?</button></h3><div id="f4" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Standard ASCII spaces are included in the output.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">Does it need an API?</button></h3><div id="f5" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No API is required.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f6">Is my text uploaded?</button></h3><div id="f6" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No. Conversion takes place in your browser.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f7">Can I copy the result?</button></h3><div id="f7" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Click Copy to copy the ASCII values.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f8">Does ASCII support every language?</button></h3><div id="f8" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Standard ASCII covers a limited set of characters and does not represent every Unicode character.</div></div></div>

</div></div></section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('input');
    const output = document.getElementById('output');
    const box = document.getElementById('box');

    document.getElementById('convert').addEventListener('click', function () {
        if (!input.value) return input.focus();

        output.value = Array.from(input.value)
            .map(char => char.charCodeAt(0))
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