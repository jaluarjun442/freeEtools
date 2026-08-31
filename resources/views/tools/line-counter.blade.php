@extends('layouts.app')

@section('title', 'Line Counter Online - Count Lines in Text')
@section('meta_description', 'Count lines in text online for free. Quickly count total lines, non-empty lines and empty lines with this simple Line Counter.')
@section('canonical', url('/line-counter'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Line Counter</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Line Counter</h1>
        <p class="text-muted mb-0">Count total, empty and non-empty lines in your text.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter your text</label>
            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Paste or type your text here..."></textarea>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="countBtn" class="btn btn-primary rounded-0">Count Lines</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="row g-2 mt-3 d-none">
                <div class="col-md-4"><div class="border p-3 text-center"><div class="text-muted small">Total Lines</div><strong id="totalLines">0</strong></div></div>
                <div class="col-md-4"><div class="border p-3 text-center"><div class="text-muted small">Non-Empty Lines</div><strong id="nonEmptyLines">0</strong></div></div>
                <div class="col-md-4"><div class="border p-3 text-center"><div class="text-muted small">Empty Lines</div><strong id="emptyLines">0</strong></div></div>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">
        <h2 class="h4 fw-bold">About Line Counter</h2>
        <p>Line Counter helps you quickly find the number of lines in a block of text. It also separates non-empty lines from empty lines.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Line Counter</h2>
        <p>Paste your text into the input box and click Count Lines. The tool will display total, non-empty and empty line counts.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
        <div class="accordion mt-3" id="lineFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What does Line Counter count?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">It counts total lines, non-empty lines and empty lines.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is Line Counter free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">Yes. The tool is free to use online.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Does it count empty lines?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">Yes. Empty lines are counted separately.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Does it count blank lines?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">Yes. Blank lines are included in the total count.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Can I count lines from copied text?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">Yes. Paste copied text directly into the input box.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Is my text uploaded?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">No. Counting is performed directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Does it need an API?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">No. No API is required.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Can I use it for large text?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#lineFaq"><div class="accordion-body">Yes. It can count lines in large blocks of text directly in your browser.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('textInput');

    document.getElementById('countBtn').addEventListener('click', function () {
        if (!input.value) {
            input.focus();
            return;
        }

        const lines = input.value.split(/\r?\n/);

        document.getElementById('totalLines').textContent = lines.length;
        document.getElementById('nonEmptyLines').textContent = lines.filter(line => line.trim() !== '').length;
        document.getElementById('emptyLines').textContent = lines.filter(line => line.trim() === '').length;

        document.getElementById('resultBox').classList.remove('d-none');
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        input.value = '';
        document.getElementById('resultBox').classList.add('d-none');
        input.focus();
    });
});
</script>

@endsection