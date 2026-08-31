@extends('layouts.app')

@section('title', 'Number to Words Converter - Convert Numbers to Words')
@section('meta_description', 'Convert numbers into words online for free. Enter a number and instantly get its written word format with this simple converter.')
@section('canonical', url('/number-to-words'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Number to Words</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Number Tool</span>
        <h1 class="fw-bold mb-2">Number to Words Converter</h1>
        <p class="text-muted mb-0">Convert numbers into written words instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="numberInput" class="fw-semibold mb-2">Enter a number</label>
            <input type="number" id="numberInput" class="form-control rounded-0" placeholder="Example: 1250">

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="convertBtn" class="btn btn-primary rounded-0">Convert</button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">Clear</button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label class="fw-semibold mb-2">Result</label>
                <div id="result" class="border p-3"></div>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">
        <h2 class="h4 fw-bold">About Number to Words Converter</h2>
        <p>This tool converts numeric values into their written word format. It is useful for documents, invoices, forms and other text-based content.</p>

        <h2 class="h4 fw-bold mt-4">How to Use</h2>
        <p>Enter a number in the input field and click Convert. The written version of the number will appear instantly.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>
        <div class="accordion mt-3" id="numberFaq">

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">What does this tool do?</button></h3><div id="faq1" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">It converts numbers into written words.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">Is it free?</button></h3><div id="faq2" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">Yes. The converter is free to use.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">Can I convert large numbers?</button></h3><div id="faq3" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">Yes, within the supported browser number range.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">Does it work online?</button></h3><div id="faq4" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">Yes. It works directly in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">Does it need an API?</button></h3><div id="faq5" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">No API is required.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">Is my data uploaded?</button></h3><div id="faq6" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">No. The conversion happens in your browser.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">Can I use the result in documents?</button></h3><div id="faq7" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">Yes. You can copy the generated words into documents.</div></div></div>

            <div class="accordion-item rounded-0"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">Does it support negative numbers?</button></h3><div id="faq8" class="accordion-collapse collapse" data-bs-parent="#numberFaq"><div class="accordion-body">Yes, negative numbers are handled with a minus prefix.</div></div></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('numberInput');
    const result = document.getElementById('result');
    const box = document.getElementById('resultBox');

    const ones = ['zero','one','two','three','four','five','six','seven','eight','nine'];
    const teens = ['ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen'];
    const tens = ['','','twenty','thirty','forty','fifty','sixty','seventy','eighty','ninety'];

    function words(n) {
        if (n < 10) return ones[n];
        if (n < 20) return teens[n - 10];
        if (n < 100) return tens[Math.floor(n / 10)] + (n % 10 ? '-' + ones[n % 10] : '');
        if (n < 1000) return ones[Math.floor(n / 100)] + ' hundred' + (n % 100 ? ' ' + words(n % 100) : '');
        if (n < 1000000) return words(Math.floor(n / 1000)) + ' thousand' + (n % 1000 ? ' ' + words(n % 1000) : '');
        if (n < 1000000000) return words(Math.floor(n / 1000000)) + ' million' + (n % 1000000 ? ' ' + words(n % 1000000) : '');
        return words(Math.floor(n / 1000000000)) + ' billion' + (n % 1000000000 ? ' ' + words(n % 1000000000) : '');
    }

    document.getElementById('convertBtn').addEventListener('click', function () {
        const value = Number(input.value);

        if (!input.value || !Number.isSafeInteger(value)) {
            input.focus();
            return;
        }

        result.textContent = value < 0
            ? 'minus ' + words(Math.abs(value))
            : words(value);

        box.classList.remove('d-none');
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        input.value = '';
        result.textContent = '';
        box.classList.add('d-none');
        input.focus();
    });

});
</script>

@endsection