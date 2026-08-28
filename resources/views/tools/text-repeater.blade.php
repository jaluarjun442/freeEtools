@extends('layouts.tool')


@section('title', 'Text Repeater Online - Repeat Text Multiple Times')


@section('meta_description', 'Repeat text multiple times online with this free Text Repeater. Enter text and choose how many times to repeat it with a fast and simple browser-based tool.')


@section('canonical', url('/text-repeater'))


@section('og_title', 'Text Repeater Online - Free Text Repeater Tool')


@section('og_description', 'Free online Text Repeater to repeat any text multiple times quickly and easily.')


@section('og_url', url('/text-repeater'))


@section('twitter_title', 'Text Repeater Online - Free Text Repeater Tool')


@section('twitter_description', 'Repeat text multiple times instantly with this free online Text Repeater tool.')


@section('tool_name', 'Text Repeater')


@section('breadcrumb', 'Text Repeater')


@section('tool_badge', 'Free Text Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="textRepeaterInput" class="form-label fw-semibold">
            Enter your text
        </label>

        <textarea
            id="textRepeaterInput"
            class="form-control"
            rows="8"
            placeholder="Enter or paste the text you want to repeat..."
            aria-label="Text to repeat"></textarea>

    </div>


    <div class="row g-2 mb-3">

        <div class="col-12 col-md-5">

            <label for="repeatCount" class="form-label fw-semibold">
                Repeat Count
            </label>

            <input
                type="number"
                id="repeatCount"
                class="form-control"
                value="5"
                min="1"
                max="1000"
                aria-label="Number of times to repeat text">

        </div>

        <div class="col-12 col-md-7">

            <label for="separatorType" class="form-label fw-semibold">
                Separator
            </label>

            <select
                id="separatorType"
                class="form-select"
                aria-label="Text repetition separator">

                <option value="newline">New Line</option>
                <option value="space">Space</option>
                <option value="comma">Comma</option>
                <option value="none">No Separator</option>

            </select>

        </div>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            id="repeatTextBtn"
            class="btn btn-primary tool-action-btn">
            Repeat Text
        </button>

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


    <div class="row g-2">

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Repeat Count</div>
                <div id="repeatStat" class="tool-stat-value">5</div>
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
                <div class="tool-stat-label">Characters</div>
                <div id="characterCount" class="tool-stat-value">0</div>
            </div>
        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>About This Text Repeater</h2>

    <p>
        This free Text Repeater lets you repeat any text multiple times
        without manually copying and pasting it again and again. Enter your
        text, choose the number of repetitions and select a separator to
        generate the repeated text instantly.
    </p>

    <p>
        The tool is useful for testing text, creating repeated lines,
        preparing sample content and other tasks where the same text needs
        to appear multiple times. It works directly in your browser.
    </p>


    <h2>How to Use This Text Repeater</h2>

    <ol>
        <li>Enter or paste the text you want to repeat.</li>
        <li>Enter the number of times you want the text repeated.</li>
        <li>Select a separator such as a new line, space or comma.</li>
        <li>Click Repeat Text.</li>
        <li>Review the generated repeated text.</li>
        <li>Click Copy Text to copy the result.</li>
    </ol>


    <h2>Text Repeater Features</h2>

    <p>
        The Text Repeater supports up to 1,000 repetitions and provides
        different separator options. You can repeat text on separate lines,
        with spaces, with commas or without a separator.
    </p>

    <p>
        The tool also displays the selected repetition count and basic
        statistics for the generated text. Processing happens directly in
        your browser without requiring an account or file upload.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a Text Repeater?</h3>
            <p>
                A Text Repeater is an online tool that generates multiple
                copies of the same text automatically.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I repeat text multiple times?</h3>
            <p>
                Enter your text, choose the repeat count and click Repeat
                Text. The tool generates the repeated result instantly.
            </p>
        </div>

        <div class="faq-item">
            <h3>How many times can I repeat text?</h3>
            <p>
                You can repeat text up to 1,000 times using this tool.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I repeat text on separate lines?</h3>
            <p>
                Yes. Select New Line as the separator to place each repeated
                copy on its own line.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I repeat text with spaces or commas?</h3>
            <p>
                Yes. The tool provides Space and Comma separator options in
                addition to the new-line option.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I copy the repeated text?</h3>
            <p>
                Yes. Click Copy Text after generating the result to copy it
                to your clipboard.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                No file upload is required. Text repetition is performed
                directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Text Repeater free?</h3>
            <p>
                Yes. The Text Repeater is free to use directly from your
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
    "name": "Text Repeater",
    "url": "{{ url('/text-repeater') }}",
    "description": "Free online Text Repeater for repeating text multiple times with different separator options.",
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
            "name": "What is a Text Repeater?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Text Repeater is an online tool that generates multiple copies of the same text automatically."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I repeat text multiple times?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Enter your text, choose the repeat count and click Repeat Text. The tool generates the repeated result instantly."
            }
        },
        {
            "@@type": "Question",
            "name": "How many times can I repeat text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "You can repeat text up to 1,000 times using this tool."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I repeat text on separate lines?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Select New Line as the separator to place each repeated copy on its own line."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I repeat text with spaces or commas?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The tool provides Space and Comma separator options in addition to the new-line option."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I copy the repeated text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Click Copy Text after generating the result to copy it to your clipboard."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No file upload is required. Text repetition is performed directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Text Repeater free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Text Repeater is free to use directly from your web browser."
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
            "name": "Text Repeater",
            "item": "{{ url('/text-repeater') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea =
        document.getElementById('textRepeaterInput');

    const repeatCount =
        document.getElementById('repeatCount');

    const separatorType =
        document.getElementById('separatorType');

    const repeatStat =
        document.getElementById('repeatStat');

    const wordCount =
        document.getElementById('wordCount');

    const characterCount =
        document.getElementById('characterCount');

    const repeatTextBtn =
        document.getElementById('repeatTextBtn');

    const copyTextBtn =
        document.getElementById('copyTextBtn');

    const clearTextBtn =
        document.getElementById('clearTextBtn');


    function updateStats() {

        const text = textarea.value.trim();

        const words = text
            ? text.split(/\s+/).filter(Boolean)
            : [];

        wordCount.textContent =
            words.length.toLocaleString();

        characterCount.textContent =
            textarea.value.length.toLocaleString();

        repeatStat.textContent =
            repeatCount.value || '0';
    }


    function getSeparator() {

        switch (separatorType.value) {

            case 'space':
                return ' ';

            case 'comma':
                return ', ';

            case 'none':
                return '';

            default:
                return '\n';
        }
    }


    repeatTextBtn.addEventListener(
        'click',
        function () {

            const text = textarea.value;

            let count =
                parseInt(repeatCount.value, 10);

            if (!text || isNaN(count)) {
                return;
            }

            count = Math.max(
                1,
                Math.min(count, 1000)
            );

            repeatCount.value = count;

            textarea.value =
                Array(count)
                    .fill(text)
                    .join(getSeparator());

            updateStats();
        }
    );


    repeatCount.addEventListener(
        'input',
        updateStats
    );


    textarea.addEventListener(
        'input',
        updateStats
    );


    copyTextBtn.addEventListener(
        'click',
        async function () {

            if (!textarea.value) {
                return;
            }

            try {

                await navigator.clipboard.writeText(
                    textarea.value
                );

                const originalText =
                    copyTextBtn.textContent;

                copyTextBtn.textContent =
                    'Copied!';

                setTimeout(function () {

                    copyTextBtn.textContent =
                        originalText;

                }, 1500);

            } catch (error) {

                textarea.select();

                document.execCommand('copy');

            }

        }
    );


    clearTextBtn.addEventListener(
        'click',
        function () {

            textarea.value = '';

            updateStats();

            textarea.focus();

        }
    );


    updateStats();

});
</script>

@endpush