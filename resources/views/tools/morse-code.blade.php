@extends('layouts.app')

@section('title', 'Morse Code Translator - Text to Morse Code')
@section('meta_description', 'Translate text to Morse code online for free. Convert letters and numbers into Morse code instantly with this simple translator.')
@section('canonical', url('/morse-code'))

@section('content')

<div class="border-bottom bg-light"><div class="container py-2"><a href="{{ url('/') }}" class="text-decoration-none">Home</a><span class="mx-2 text-muted">/</span><span>Morse Code Translator</span></div></div>

<section class="tool-hero text-center py-4"><div class="container"><span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tools</span><h1 class="fw-bold mb-2">Morse Code Translator</h1><p class="text-muted mb-0">Convert text into Morse code instantly.</p></div></section>

<section class="bg-light border-top"><div class="container py-4"><div class="tool-box bg-white border p-3 mx-auto">

<label for="input" class="fw-semibold mb-2">Enter text</label>
<textarea id="input" class="form-control rounded-0" rows="8" placeholder="Enter text here..."></textarea>

<div class="d-flex gap-2 mt-3"><button type="button" id="convert" class="btn btn-primary rounded-0">Convert</button><button type="button" id="clear" class="btn btn-outline-secondary rounded-0">Clear</button></div>

<div id="box" class="mt-3 d-none"><label for="output" class="fw-semibold mb-2">Morse Code</label><textarea id="output" class="form-control rounded-0" rows="8" readonly></textarea><button type="button" id="copy" class="btn btn-outline-primary rounded-0 mt-2">Copy</button></div>

</div></div></section>

<section class="container py-4"><div class="tool-content">
<h2 class="h4 fw-bold">About Morse Code Translator</h2>
<p>Morse Code Translator converts letters and numbers into Morse code using dots and dashes. It can be useful for learning and experimenting with Morse code.</p>
<h2 class="h4 fw-bold mt-4">How to Use</h2>
<p>Enter your text and click Convert. The corresponding Morse code will be generated instantly.</p>
<h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
<div class="accordion mt-3" id="faq">

<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f1">What is Morse code?</button></h3><div id="f1" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Morse code represents letters and numbers using dots and dashes.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">Is this tool free?</button></h3><div id="f2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. It is free to use.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f3">Can I convert sentences?</button></h3><div id="f3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Letters, numbers and sentences can be converted.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">What do dots and dashes mean?</button></h3><div id="f4" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Different combinations of dots and dashes represent different characters.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">Does it require an API?</button></h3><div id="f5" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No. Translation runs in your browser.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f6">Is my text uploaded?</button></h3><div id="f6" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">No. Processing happens locally in the browser.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f7">Can I copy the result?</button></h3><div id="f7" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Use the Copy button.</div></div></div>
<div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f8">Does it support numbers?</button></h3><div id="f8" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Yes. Standard Morse code representations for numbers are supported.</div></div></div>

</div></div></section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const map = {
        A:'.-', B:'-...', C:'-.-.', D:'-..', E:'.', F:'..-.',
        G:'--.', H:'....', I:'..', J:'.---', K:'-.-', L:'.-..',
        M:'--', N:'-.', O:'---', P:'.--.', Q:'--.-', R:'.-.',
        S:'...', T:'-', U:'..-', V:'...-', W:'.--', X:'-..-',
        Y:'-.--', Z:'--..',
        0:'-----', 1:'.----', 2:'..---', 3:'...--', 4:'....-',
        5:'.....', 6:'-....', 7:'--...', 8:'---..', 9:'----.'
    };

    const input = document.getElementById('input');
    const output = document.getElementById('output');
    const box = document.getElementById('box');

    document.getElementById('convert').addEventListener('click', function () {

        if (!input.value.trim()) return input.focus();

        output.value = input.value
            .toUpperCase()
            .split('')
            .map(char => char === ' ' ? '/' : (map[char] || char))
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