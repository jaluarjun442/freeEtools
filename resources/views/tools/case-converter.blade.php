@extends('layouts.tool')


@section('title', 'Case Converter Online - Free Text Case Converter')


@section('meta_description', 'Convert text to uppercase, lowercase, title case, sentence case and alternating case online with our free Case Converter. Fast, simple and easy to use.')


@section('canonical', url('/case-converter'))


@section('og_title', 'Case Converter Online - Free Text Case Converter')


@section('og_description', 'Free online Case Converter to change text into uppercase, lowercase, title case, sentence case and more.')


@section('og_url', url('/case-converter'))


@section('twitter_title', 'Case Converter Online - Free Text Case Converter')


@section('twitter_description', 'Convert text to uppercase, lowercase, title case, sentence case and more with this free online Case Converter.')


@section('tool_name', 'Case Converter')


@section('breadcrumb', 'Case Converter')


@section('tool_badge', 'Free Text Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="caseConverterInput" class="form-label fw-semibold">
            Enter or paste your text
        </label>

        <textarea
            id="caseConverterInput"
            class="form-control"
            rows="10"
            placeholder="Type or paste your text here..."
            aria-label="Text to convert letter case"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            class="btn btn-primary tool-action-btn"
            data-case="upper">
            UPPERCASE
        </button>

        <button
            type="button"
            class="btn btn-outline-primary tool-action-btn"
            data-case="lower">
            lowercase
        </button>

        <button
            type="button"
            class="btn btn-outline-primary tool-action-btn"
            data-case="title">
            Title Case
        </button>

        <button
            type="button"
            class="btn btn-outline-primary tool-action-btn"
            data-case="sentence">
            Sentence case
        </button>

        <button
            type="button"
            class="btn btn-outline-primary tool-action-btn"
            data-case="alternate">
            aLtErNaTe
        </button>

    </div>


    <div class="d-flex flex-wrap gap-2">

        <button
            type="button"
            id="copyTextBtn"
            class="btn btn-dark tool-action-btn">
            Copy Text
        </button>

        <button
            type="button"
            id="clearTextBtn"
            class="btn btn-outline-secondary tool-action-btn">
            Clear
        </button>

    </div>


    <div class="row g-2 mt-3">

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Characters</div>
                <div id="characterCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Words</div>
                <div id="wordCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Lines</div>
                <div id="lineCount" class="tool-stat-value">0</div>
            </div>
        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>About This Case Converter</h2>

    <p>
        This free Case Converter makes it easy to change the capitalization
        of your text. You can convert text to uppercase, lowercase, title
        case, sentence case or alternating case without manually editing
        every letter.
    </p>

    <p>
        The tool is useful for students, writers, bloggers, developers,
        content creators and anyone who needs to quickly change the format
        of text. It works directly in your browser and does not require
        software installation or registration.
    </p>


    <h2>How to Use This Case Converter</h2>

    <ol>
        <li>Type or paste your text into the text box.</li>
        <li>Select the case format you want to use.</li>
        <li>Your text will be converted instantly.</li>
        <li>Use Copy Text to copy the converted result.</li>
        <li>Use Clear to remove the text and start again.</li>
    </ol>


    <h2>Case Converter Features</h2>

    <p>
        The Case Converter supports several common text formats including
        uppercase, lowercase, title case, sentence case and alternating
        case. It also displays basic text statistics such as character,
        word and line counts.
    </p>

    <p>
        The conversion happens directly in your browser, making the tool
        fast and convenient for formatting text for documents, websites,
        assignments, notes and other projects.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a Case Converter?</h3>
            <p>
                A Case Converter is an online tool that changes the
                capitalization of text into different formats such as
                uppercase, lowercase and title case.
            </p>
        </div>

        <div class="faq-item">
            <h3>What does uppercase mean?</h3>
            <p>
                Uppercase converts letters into capital letters. For example,
                "hello world" becomes "HELLO WORLD".
            </p>
        </div>

        <div class="faq-item">
            <h3>What does lowercase mean?</h3>
            <p>
                Lowercase converts letters into small letters. For example,
                "HELLO WORLD" becomes "hello world".
            </p>
        </div>

        <div class="faq-item">
            <h3>What is Title Case?</h3>
            <p>
                Title Case capitalizes the main words in a title or heading,
                making it useful for articles, headings and document titles.
            </p>
        </div>

        <div class="faq-item">
            <h3>What is Sentence Case?</h3>
            <p>
                Sentence case uses a capital letter at the beginning of
                sentences while keeping the remaining letters lowercase
                where appropriate.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I convert large amounts of text?</h3>
            <p>
                Yes. You can paste longer text into the tool and convert
                the capitalization directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                No file upload is required. The text conversion is performed
                directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Case Converter free?</h3>
            <p>
                Yes. The Case Converter is free to use directly from your
                web browser.
            </p>
        </div>

    </div>

</div>

@endsection


@section('tool_schema')

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebApplication",
    "name": "Case Converter",
    "url": "{{ url('/case-converter') }}",
    "description": "Free online Case Converter for changing text to uppercase, lowercase, title case, sentence case and alternating case.",
    "applicationCategory": "UtilitiesApplication",
    "operatingSystem": "Any",
    "browserRequirements": "Requires JavaScript",
    "offers": {
        "@@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "isAccessibleForFree": true
}
</script>


<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "What is a Case Converter?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Case Converter is an online tool that changes the capitalization of text into different formats such as uppercase, lowercase and title case."
            }
        },
        {
            "@@type": "Question",
            "name": "What does uppercase mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Uppercase converts letters into capital letters."
            }
        },
        {
            "@@type": "Question",
            "name": "What does lowercase mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Lowercase converts letters into small letters."
            }
        },
        {
            "@@type": "Question",
            "name": "What is Title Case?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Title Case capitalizes the main words in a title or heading."
            }
        },
        {
            "@@type": "Question",
            "name": "What is Sentence Case?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Sentence case uses a capital letter at the beginning of sentences while keeping the remaining letters lowercase where appropriate."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I convert large amounts of text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can paste longer text into the tool and convert the capitalization directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No file upload is required. The text conversion is performed directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Case Converter free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Case Converter is free to use directly from your web browser."
            }
        }
    ]
}
</script>

@endsection


@section('breadcrumb_schema')

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "Case Converter",
            "item": "{{ url('/case-converter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea =
        document.getElementById('caseConverterInput');

    const characterCount =
        document.getElementById('characterCount');

    const wordCount =
        document.getElementById('wordCount');

    const lineCount =
        document.getElementById('lineCount');

    const copyTextBtn =
        document.getElementById('copyTextBtn');

    const clearTextBtn =
        document.getElementById('clearTextBtn');


    function updateStats() {

        const text = textarea.value;
        const trimmedText = text.trim();

        const words = trimmedText
            ? trimmedText.split(/\s+/).filter(Boolean)
            : [];

        characterCount.textContent =
            text.length.toLocaleString();

        wordCount.textContent =
            words.length.toLocaleString();

        lineCount.textContent =
            text ? text.split(/\r?\n/).length.toLocaleString() : '0';
    }


    function titleCase(text) {

        return text.toLowerCase().replace(
            /\b\w/g,
            function (char) {
                return char.toUpperCase();
            }
        );
    }


    function sentenceCase(text) {

        return text
            .toLowerCase()
            .replace(
                /(^\s*[a-z])|([.!?]\s*[a-z])/g,
                function (match) {
                    return match.toUpperCase();
                }
            );
    }


    function alternateCase(text) {

        let index = 0;

        return text.replace(/[a-zA-Z]/g, function (char) {

            const result =
                index % 2 === 0
                    ? char.toUpperCase()
                    : char.toLowerCase();

            index++;

            return result;
        });
    }


    document.querySelectorAll('[data-case]').forEach(
        function (button) {

            button.addEventListener('click', function () {

                const type = button.dataset.case;
                const text = textarea.value;

                if (!text) {
                    return;
                }


                if (type === 'upper') {
                    textarea.value =
                        text.toUpperCase();
                }


                if (type === 'lower') {
                    textarea.value =
                        text.toLowerCase();
                }


                if (type === 'title') {
                    textarea.value =
                        titleCase(text);
                }


                if (type === 'sentence') {
                    textarea.value =
                        sentenceCase(text);
                }


                if (type === 'alternate') {
                    textarea.value =
                        alternateCase(text);
                }


                updateStats();
            });

        }
    );


    textarea.addEventListener('input', updateStats);


    copyTextBtn.addEventListener('click', async function () {

        if (!textarea.value) {
            return;
        }

        try {

            await navigator.clipboard.writeText(
                textarea.value
            );

            const originalText =
                copyTextBtn.textContent;

            copyTextBtn.textContent = 'Copied!';

            setTimeout(function () {

                copyTextBtn.textContent =
                    originalText;

            }, 1500);

        } catch (error) {

            textarea.select();

            document.execCommand('copy');

        }

    });


    clearTextBtn.addEventListener('click', function () {

        textarea.value = '';

        updateStats();

        textarea.focus();

    });


    updateStats();

});
</script>

@endpush