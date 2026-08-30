@extends('layouts.app')

@section('title', 'Text Replacer Online - Find and Replace Text')
@section('meta_description', 'Find and replace text online for free. Quickly replace words, phrases or characters in your text with this simple online Text Replacer.')
@section('canonical', url('/text-replacer'))

@section('content')

<div class="border-bottom bg-light">
    <div class="container py-2">
        <a href="{{ url('/') }}" class="text-decoration-none">Home</a>
        <span class="mx-2 text-muted">/</span>
        <span>Text Replacer</span>
    </div>
</div>

<section class="tool-hero text-center py-4">
    <div class="container">
        <span class="badge bg-light text-primary border rounded-0 px-3 py-2 mb-2">Text Tool</span>
        <h1 class="fw-bold mb-2">Text Replacer</h1>
        <p class="text-muted mb-0">Find and replace words, phrases or characters instantly.</p>
    </div>
</section>

<section class="bg-light border-top">
    <div class="container py-4">
        <div class="tool-box bg-white border p-3 mx-auto">

            <label for="textInput" class="fw-semibold mb-2">Enter or paste your text</label>

            <textarea id="textInput" class="form-control rounded-0" rows="10"
                placeholder="Enter your text here..."></textarea>

            <div class="row g-2 mt-2">
                <div class="col-md-6">
                    <label for="findText" class="small fw-semibold">Find</label>
                    <input type="text" id="findText" class="form-control rounded-0"
                        placeholder="Text to find">
                </div>

                <div class="col-md-6">
                    <label for="replaceText" class="small fw-semibold">Replace With</label>
                    <input type="text" id="replaceText" class="form-control rounded-0"
                        placeholder="Replacement text">
                </div>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="caseSensitive">
                <label class="form-check-label" for="caseSensitive">
                    Case sensitive
                </label>
            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="button" id="replaceBtn" class="btn btn-primary rounded-0">
                    Replace Text
                </button>
                <button type="button" id="clearBtn" class="btn btn-outline-secondary rounded-0">
                    Clear
                </button>
            </div>

            <div id="resultBox" class="mt-3 d-none">
                <label for="resultText" class="fw-semibold mb-2">Result</label>
                <textarea id="resultText" class="form-control rounded-0" rows="8" readonly></textarea>

                <div class="d-flex gap-2 align-items-center mt-2">
                    <button type="button" id="copyBtn" class="btn btn-outline-primary rounded-0">
                        Copy
                    </button>
                    <span id="replaceCount" class="small text-muted"></span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="container py-4">
    <div class="tool-content">

        <h2 class="h4 fw-bold">About Text Replacer</h2>
        <p>Text Replacer is a simple online tool for finding and replacing words, phrases or characters in text. It is useful when you need to make repeated text changes quickly.</p>

        <h2 class="h4 fw-bold mt-4">How to Use Text Replacer</h2>
        <p>Paste your text into the input box, enter the text you want to find and provide the replacement text. Click Replace Text to generate the updated content.</p>

        <h2 class="h4 fw-bold mt-4">Why Use This Text Replacer?</h2>
        <p>This free tool makes repeated text changes faster and easier. It works directly in your browser without an account, backend API or file upload.</p>

        <h2 class="h4 fw-bold mt-4">Frequently Asked Questions</h2>

        <div class="accordion mt-3" id="replaceFaq">

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        What is a Text Replacer?
                    </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">A Text Replacer finds specific words or phrases in your text and replaces them with new text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Is this Text Replacer free?
                    </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">Yes. You can use this Text Replacer online for free.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Can I replace multiple occurrences?
                    </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">Yes. The tool replaces all matching occurrences of the text you enter.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        What does case sensitive mean?
                    </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">Case sensitive matching treats uppercase and lowercase letters as different characters.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                        Can I replace words with spaces?
                    </button>
                </h3>
                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">Yes. You can search for text containing spaces and replace it with other text.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                        Does this tool need an API?
                    </button>
                </h3>
                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">No. Text replacement is performed directly in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                        Is my text uploaded?
                    </button>
                </h3>
                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">No. Your text is processed locally in your browser.</div>
                </div>
            </div>

            <div class="accordion-item rounded-0">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                        Can I replace text with an empty value?
                    </button>
                </h3>
                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#replaceFaq">
                    <div class="accordion-body">Yes. Leaving the replacement field empty allows you to remove matching text.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('textInput');
    const find = document.getElementById('findText');
    const replace = document.getElementById('replaceText');
    const output = document.getElementById('resultText');
    const resultBox = document.getElementById('resultBox');
    const countText = document.getElementById('replaceCount');
    const caseSensitive = document.getElementById('caseSensitive');

    document.getElementById('replaceBtn').addEventListener('click', function () {

        if (!input.value || !find.value) {
            resultBox.classList.add('d-none');
            if (!input.value) input.focus();
            else find.focus();
            return;
        }

        const flags = caseSensitive.checked ? 'g' : 'gi';
        const escaped = find.value.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const regex = new RegExp(escaped, flags);

        const matches = input.value.match(regex);
        const count = matches ? matches.length : 0;

        output.value = input.value.replace(regex, replace.value);
        countText.textContent = count + (count === 1 ? ' replacement' : ' replacements');

        resultBox.classList.remove('d-none');
    });

    document.getElementById('copyBtn').addEventListener('click', async function () {
        await navigator.clipboard.writeText(output.value);
        this.textContent = 'Copied';
        setTimeout(() => this.textContent = 'Copy', 1500);
    });

    document.getElementById('clearBtn').addEventListener('click', function () {
        input.value = '';
        find.value = '';
        replace.value = '';
        output.value = '';
        countText.textContent = '';
        resultBox.classList.add('d-none');
        input.focus();
    });

});
</script>

@endsection