@extends('layouts.tool')


@section('title', 'JSON Formatter Online - Format & Beautify JSON')


@section('meta_description', 'Format, beautify and validate JSON online with this free JSON Formatter. Quickly make JSON readable, organized and easy to understand.')


@section('canonical', url('/json-formatter'))


@section('og_title', 'JSON Formatter Online - Free JSON Beautifier')


@section('og_description', 'Format, beautify and validate JSON data instantly with this free online JSON Formatter.')


@section('og_url', url('/json-formatter'))


@section('twitter_title', 'JSON Formatter Online - Free JSON Beautifier')


@section('twitter_description', 'Free online JSON Formatter to format, beautify and validate JSON data.')


@section('tool_name', 'JSON Formatter')


@section('breadcrumb', 'JSON Formatter')


@section('tool_badge', 'Free Developer Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="jsonInput" class="form-label fw-semibold">
            Enter or paste JSON
        </label>

        <textarea
            id="jsonInput"
            class="form-control"
            rows="12"
            spellcheck="false"
            placeholder='{"name":"John","age":30,"active":true}'
            aria-label="JSON input"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            id="formatBtn"
            class="btn btn-primary tool-action-btn">
            Format JSON
        </button>

        <button
            type="button"
            id="minifyBtn"
            class="btn btn-outline-primary tool-action-btn">
            Minify
        </button>

        <button
            type="button"
            id="validateBtn"
            class="btn btn-outline-primary tool-action-btn">
            Validate
        </button>

        <button
            type="button"
            id="copyBtn"
            class="btn btn-dark tool-action-btn">
            Copy
        </button>

        <button
            type="button"
            id="clearBtn"
            class="btn btn-outline-secondary tool-action-btn">
            Clear
        </button>

    </div>


    <div id="jsonStatus"
         class="small fw-semibold mb-3"
         role="status"
         aria-live="polite"></div>


    <div class="row g-2">

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Characters</div>
                <div id="characterCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Lines</div>
                <div id="lineCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Status</div>
                <div id="statusCount" class="tool-stat-value">Ready</div>
            </div>
        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>About This JSON Formatter</h2>

    <p>
        This free JSON Formatter helps you format, beautify and validate JSON
        data online. It converts compact or difficult-to-read JSON into a
        properly indented and organized format that is easier to read and
        understand.
    </p>

    <p>
        The tool is useful for developers, students, API users and anyone
        working with JSON data. You can also minify JSON when you need a
        compact version without unnecessary spaces and line breaks.
    </p>


    <h2>How to Use This JSON Formatter</h2>

    <ol>
        <li>Paste or enter your JSON into the input box.</li>
        <li>Click Format JSON to make the JSON readable.</li>
        <li>Use Minify to create a compact JSON version.</li>
        <li>Click Validate to check whether the JSON syntax is valid.</li>
        <li>Use Copy to copy the processed JSON.</li>
    </ol>


    <h2>JSON Formatter Features</h2>

    <p>
        The tool supports JSON formatting, JSON minification and syntax
        validation in one simple interface. Proper indentation makes nested
        objects and arrays much easier to inspect.
    </p>

    <p>
        JSON processing is performed directly in your browser. No file upload
        or account is required, making it convenient for quick development
        and debugging tasks.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a JSON Formatter?</h3>
            <p>
                A JSON Formatter converts JSON into a properly indented and
                readable structure.
            </p>
        </div>

        <div class="faq-item">
            <h3>What does JSON beautify mean?</h3>
            <p>
                JSON beautification adds indentation and line breaks to make
                JSON data easier to read.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can this tool validate JSON?</h3>
            <p>
                Yes. Click Validate to check whether the entered JSON has
                valid syntax.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I minify JSON?</h3>
            <p>
                Yes. The Minify option removes unnecessary spaces and line
                breaks from valid JSON.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does the formatter support arrays?</h3>
            <p>
                Yes. JSON objects, arrays, strings, numbers, booleans and
                null values are supported.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this JSON Formatter free?</h3>
            <p>
                Yes. You can format, validate and minify JSON for free.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my JSON uploaded to a server?</h3>
            <p>
                No file upload is required. JSON processing happens directly
                in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I copy formatted JSON?</h3>
            <p>
                Yes. Click the Copy button to copy the current JSON to your
                clipboard.
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
    "name": "JSON Formatter",
    "url": "{{ url('/json-formatter') }}",
    "description": "Free online JSON Formatter to format, beautify, validate and minify JSON data.",
    "applicationCategory": "DeveloperApplication",
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
            "name": "What is a JSON Formatter?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A JSON Formatter converts JSON into a properly indented and readable structure."
            }
        },
        {
            "@@type": "Question",
            "name": "What does JSON beautify mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "JSON beautification adds indentation and line breaks to make JSON data easier to read."
            }
        },
        {
            "@@type": "Question",
            "name": "Can this tool validate JSON?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Click Validate to check whether the entered JSON has valid syntax."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I minify JSON?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Minify option removes unnecessary spaces and line breaks from valid JSON."
            }
        },
        {
            "@@type": "Question",
            "name": "Does the formatter support arrays?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. JSON objects, arrays, strings, numbers, booleans and null values are supported."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this JSON Formatter free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can format, validate and minify JSON for free."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my JSON uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No file upload is required. JSON processing happens directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I copy formatted JSON?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Click the Copy button to copy the current JSON to your clipboard."
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
            "name": "JSON Formatter",
            "item": "{{ url('/json-formatter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('jsonInput');
    const status = document.getElementById('jsonStatus');
    const characterCount = document.getElementById('characterCount');
    const lineCount = document.getElementById('lineCount');
    const statusCount = document.getElementById('statusCount');


    function updateStats() {

        characterCount.textContent =
            input.value.length.toLocaleString();

        lineCount.textContent =
            input.value
                ? input.value.split(/\r?\n/).length.toLocaleString()
                : '0';
    }


    function parseJSON() {

        try {

            return {
                valid: true,
                data: JSON.parse(input.value)
            };

        } catch (error) {

            return {
                valid: false,
                error: error
            };
        }
    }


    function showStatus(message, success = true) {

        status.textContent = message;

        statusCount.textContent =
            success ? 'Valid' : 'Invalid';

        status.className =
            success
                ? 'small fw-semibold mb-3 text-success'
                : 'small fw-semibold mb-3 text-danger';
    }


    document.getElementById('formatBtn')
        .addEventListener('click', function () {

            const result = parseJSON();

            if (!result.valid) {

                showStatus(
                    'Invalid JSON: ' + result.error.message,
                    false
                );

                return;
            }

            input.value =
                JSON.stringify(result.data, null, 4);

            updateStats();

            showStatus(
                'JSON formatted successfully.',
                true
            );
        });


    document.getElementById('minifyBtn')
        .addEventListener('click', function () {

            const result = parseJSON();

            if (!result.valid) {

                showStatus(
                    'Invalid JSON: ' + result.error.message,
                    false
                );

                return;
            }

            input.value =
                JSON.stringify(result.data);

            updateStats();

            showStatus(
                'JSON minified successfully.',
                true
            );
        });


    document.getElementById('validateBtn')
        .addEventListener('click', function () {

            const result = parseJSON();

            if (!result.valid) {

                showStatus(
                    'Invalid JSON: ' + result.error.message,
                    false
                );

                return;
            }

            showStatus(
                'Valid JSON.',
                true
            );
        });


    document.getElementById('copyBtn')
        .addEventListener('click', async function () {

            if (!input.value) {
                return;
            }

            try {

                await navigator.clipboard.writeText(
                    input.value
                );

                const button = this;
                const original = button.textContent;

                button.textContent = 'Copied!';

                setTimeout(function () {
                    button.textContent = original;
                }, 1500);

            } catch (error) {

                input.select();
                document.execCommand('copy');

            }
        });


    document.getElementById('clearBtn')
        .addEventListener('click', function () {

            input.value = '';

            status.textContent = '';

            statusCount.textContent = 'Ready';

            status.className =
                'small fw-semibold mb-3';

            updateStats();

            input.focus();
        });


    input.addEventListener(
        'input',
        updateStats
    );


    updateStats();

});
</script>

@endpush