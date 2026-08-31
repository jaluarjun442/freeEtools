@extends('layouts.app')

@section('title', 'Binary to Text Converter - Decode Binary Online')
@section('meta_description', 'Convert binary to text online for free. Enter binary values and decode them into readable text instantly with this Binary to Text Converter.')
@section('canonical', url('/binary-to-text'))

@section('content')

<div class="border-bottom bg-light"><div class="container py-2"><a href="{{ url('/') }}" class="text-decoration-none">Home</a><span class="mx-2 text-muted">/</span><span>Binary to Text</span></div></div>

<section class="tool-hero text-center py-4"><div class="container"><span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Developer Tools</span><h1 class="fw-bold mb-2">Binary to Text Converter</h1><p class="text-muted mb-0">Decode binary values into readable text instantly.</p></div></section>

<section class="bg-light border-top"><div class="container py-4"><div class="tool-box bg-white border p-3 mx-auto">

<label for="input" class="fw-semibold mb-2">Enter binary</label>
<textarea id="input" class="form-control rounded-0" rows="8" placeholder="Example: 01001000 01101001"></textarea>

<div class="d-flex gap-2 mt-3"><button type="button" id="convert" class="btn btn-primary rounded-0">Convert</button><button type="button" id="clear" class="btn btn-outline-secondary rounded-0">Clear</button></div>

<div id="box" class="mt-3 d-none"><label for="output" class="fw-semibold mb-2">Text Result</label><textarea id="output" class="form-control rounded-0" rows="6" readonly></textarea><button type="button" id="copy" class="btn btn-outline-primary rounded-0 mt-2">Copy</button></div>

</div></div></section>

<section class="container py-4"><div class="tool-content">
<h2 class="h4 fw-bold">About Binary to Text Converter</h2>
<p>This tool converts binary values back into readable text. It is useful for learning binary representation and basic encoding concepts.</p>
<h2 class="h4 fw-bold mt-4">How to Use</h2>
<p>Enter binary values separated by spaces and click Convert. The decoded text will appear below.</p>
<h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
<div class="accordion mt-3" id="faq">

<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f1">What does this tool convert?</button></h3><div id="f1" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">It converts binary values into readable characters.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">Is it free?</button></h3><div id="f2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. It is free to use.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-parent="#faq" data-bs-target="#f3">How should binary values be separated?</button></h3><div id="f3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Separate individual binary values with spaces.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">Can I decode words?</button></h3><div id="f4" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Words and sentences can be decoded.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">Does it need an API?</button></h3><div id="f5" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No API is required.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f6">Is my input uploaded?</button></h3><div id="f6" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No. Processing happens in your browser.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f7">Can I copy the decoded text?</button></h3><div id="f7" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Use the Copy button.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f8">Is it useful for learning?</button></h3><div id="f8" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. It is useful for understanding binary and text conversion.</div></div></div>

</div></div></section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('input');
    const output = document.getElementById('output');
    const box = document.getElementById('box');

    document.getElementById('convert').addEventListener('click', function () {
        const parts = input.value.trim().split(/\s+/);

        if (!input.value.trim() || parts.some(x => !/^[01]{8}$/.test(x))) {
            input.focus();
            return;
        }

        output.value = parts.map(x => String.fromCharCode(parseInt(x, 2))).join('');
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