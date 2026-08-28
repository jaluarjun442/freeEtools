@extends('layouts.tool')


@section('title', 'Duplicate Line Remover Online - Remove Duplicate Lines')


@section('meta_description', 'Remove duplicate lines from text online with this free Duplicate Line Remover. Quickly find and delete repeated lines while keeping your unique text clean.')


@section('canonical', url('/duplicate-line-remover'))


@section('og_title', 'Duplicate Line Remover Online - Free Text Tool')


@section('og_description', 'Free online Duplicate Line Remover to delete repeated lines and keep only unique lines from your text.')


@section('og_url', url('/duplicate-line-remover'))


@section('twitter_title', 'Duplicate Line Remover Online - Free Text Tool')


@section('twitter_description', 'Remove repeated and duplicate lines from text instantly with this free online tool.')


@section('tool_name', 'Duplicate Line Remover')


@section('breadcrumb', 'Duplicate Line Remover')


@section('tool_badge', 'Free Text Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="duplicateLineInput" class="form-label fw-semibold">
            Enter or paste your text
        </label>

        <textarea
            id="duplicateLineInput"
            class="form-control"
            rows="10"
            placeholder="Enter or paste text with duplicate lines..."
            aria-label="Text to remove duplicate lines"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            id="removeDuplicatesBtn"
            class="btn btn-primary tool-action-btn">
            Remove Duplicates
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
                <div class="tool-stat-label">Total Lines</div>
                <div id="totalLineCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Unique Lines</div>
                <div id="uniqueLineCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Duplicates</div>
                <div id="duplicateLineCount" class="tool-stat-value">0</div>
            </div>
        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>About This Duplicate Line Remover</h2>

    <p>
        This free Duplicate Line Remover helps you find and remove repeated
        lines from text. Paste a list, copied content, names, keywords or
        other line-based text into the tool and remove duplicate entries
        quickly.
    </p>

    <p>
        The tool keeps the first occurrence of each line and removes
        subsequent duplicate lines. It is useful for cleaning lists,
        preparing text, organizing data and removing repeated content
        without manually checking every line.
    </p>


    <h2>How to Use This Duplicate Line Remover</h2>

    <ol>
        <li>Paste or type your line-based text into the text box.</li>
        <li>Click Remove Duplicates.</li>
        <li>The repeated lines will be removed automatically.</li>
        <li>Review the unique lines in the text box.</li>
        <li>Click Copy Text to copy the cleaned result.</li>
        <li>Click Clear to start with new text.</li>
    </ol>


    <h2>Duplicate Line Remover Features</h2>

    <p>
        The tool quickly compares lines and removes repeated entries while
        preserving the original order of the first occurrences. It also
        displays the total number of lines, unique lines and duplicate
        lines found in the text.
    </p>

    <p>
        It can be useful for students, writers, developers, researchers,
        bloggers and anyone working with lists or repeated line-based
        content. The processing happens directly in your browser.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a Duplicate Line Remover?</h3>
            <p>
                A Duplicate Line Remover is an online tool that finds repeated
                lines in text and keeps only unique occurrences.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I remove duplicate lines?</h3>
            <p>
                Paste your text into the tool and click Remove Duplicates.
                Repeated lines will be removed automatically.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does the tool keep the original order?</h3>
            <p>
                Yes. The first occurrence of each line is retained and the
                remaining duplicate occurrences are removed.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I use it for large lists?</h3>
            <p>
                Yes. You can paste a large line-based list into the text box
                and process it directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does it count duplicate lines?</h3>
            <p>
                Yes. The tool displays total lines, unique lines and the
                number of duplicate lines detected.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I copy the cleaned result?</h3>
            <p>
                Yes. After removing duplicate lines, click Copy Text to copy
                the cleaned text to your clipboard.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                No file upload is required. Duplicate line processing is
                performed directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Duplicate Line Remover free?</h3>
            <p>
                Yes. The Duplicate Line Remover is free to use directly from
                your web browser.
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
    "name": "Duplicate Line Remover",
    "url": "{{ url('/duplicate-line-remover') }}",
    "description": "Free online tool for removing duplicate and repeated lines from text.",
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
            "name": "What is a Duplicate Line Remover?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Duplicate Line Remover is an online tool that finds repeated lines in text and keeps only unique occurrences."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I remove duplicate lines?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Paste your text into the tool and click Remove Duplicates. Repeated lines will be removed automatically."
            }
        },
        {
            "@@type": "Question",
            "name": "Does the tool keep the original order?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The first occurrence of each line is retained and the remaining duplicate occurrences are removed."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I use it for large lists?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can paste a large line-based list into the text box and process it directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Does it count duplicate lines?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The tool displays total lines, unique lines and the number of duplicate lines detected."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I copy the cleaned result?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. After removing duplicate lines, click Copy Text to copy the cleaned text to your clipboard."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No file upload is required. Duplicate line processing is performed directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Duplicate Line Remover free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Duplicate Line Remover is free to use directly from your web browser."
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
            "name": "Duplicate Line Remover",
            "item": "{{ url('/duplicate-line-remover') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea =
        document.getElementById('duplicateLineInput');

    const totalLineCount =
        document.getElementById('totalLineCount');

    const uniqueLineCount =
        document.getElementById('uniqueLineCount');

    const duplicateLineCount =
        document.getElementById('duplicateLineCount');

    const removeDuplicatesBtn =
        document.getElementById('removeDuplicatesBtn');

    const copyTextBtn =
        document.getElementById('copyTextBtn');

    const clearTextBtn =
        document.getElementById('clearTextBtn');


    function getLines() {

        return textarea.value
            .split(/\r?\n/)
            .filter(line => line.trim() !== '');

    }


    function updateStats() {

        const lines = getLines();

        const uniqueLines = [
            ...new Set(
                lines.map(line => line.trim())
            )
        ];

        totalLineCount.textContent =
            lines.length.toLocaleString();

        uniqueLineCount.textContent =
            uniqueLines.length.toLocaleString();

        duplicateLineCount.textContent =
            Math.max(
                lines.length - uniqueLines.length,
                0
            ).toLocaleString();
    }


    function removeDuplicates() {

        const lines = textarea.value.split(/\r?\n/);

        const seen = new Set();

        const result = [];

        lines.forEach(function (line) {

            const trimmedLine = line.trim();

            if (!trimmedLine) {
                return;
            }

            if (!seen.has(trimmedLine)) {

                seen.add(trimmedLine);

                result.push(line);

            }

        });

        textarea.value = result.join('\n');

        updateStats();
    }


    textarea.addEventListener(
        'input',
        updateStats
    );


    removeDuplicatesBtn.addEventListener(
        'click',
        removeDuplicates
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

                copyTextBtn.textContent = 'Copied!';

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