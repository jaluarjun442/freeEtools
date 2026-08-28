@extends('layouts.tool')


@section('title', 'Text Sorter Online - Sort Lines Alphabetically')


@section('meta_description', 'Sort lines of text alphabetically or reverse alphabetically with this free online Text Sorter. Quickly organize lists, names, keywords and other text.')


@section('canonical', url('/text-sorter'))


@section('og_title', 'Text Sorter Online - Free Text Sorting Tool')


@section('og_description', 'Free online Text Sorter to sort text lines alphabetically, reverse alphabetically and organize lists quickly.')


@section('og_url', url('/text-sorter'))


@section('twitter_title', 'Text Sorter Online - Free Text Sorting Tool')


@section('twitter_description', 'Sort text lines alphabetically or in reverse order with this free online Text Sorter.')


@section('tool_name', 'Text Sorter')


@section('breadcrumb', 'Text Sorter')


@section('tool_badge', 'Free Text Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="textSorterInput" class="form-label fw-semibold">
            Enter or paste your text
        </label>

        <textarea
            id="textSorterInput"
            class="form-control"
            rows="10"
            placeholder="Enter one item per line..."
            aria-label="Text to sort"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            id="sortAZBtn"
            class="btn btn-primary tool-action-btn">
            Sort A-Z
        </button>

        <button
            type="button"
            id="sortZABtn"
            class="btn btn-outline-primary tool-action-btn">
            Sort Z-A
        </button>

        <button
            type="button"
            id="sortLengthBtn"
            class="btn btn-outline-primary tool-action-btn">
            Sort by Length
        </button>

        <button
            type="button"
            id="reverseBtn"
            class="btn btn-outline-primary tool-action-btn">
            Reverse
        </button>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

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
                <div class="tool-stat-label">Lines</div>
                <div id="lineCount" class="tool-stat-value">0</div>
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

    <h2>About This Text Sorter</h2>

    <p>
        This free Text Sorter helps you organize lines of text quickly and
        easily. You can paste a list of names, words, keywords, titles or
        other line-based content and sort it alphabetically, in reverse
        alphabetical order or by line length.
    </p>

    <p>
        The tool is useful for students, writers, developers, researchers,
        bloggers and anyone who needs to organize text without manually
        rearranging every line.
    </p>


    <h2>How to Use This Text Sorter</h2>

    <ol>
        <li>Enter or paste one item per line into the text box.</li>
        <li>Choose Sort A-Z to arrange lines alphabetically.</li>
        <li>Choose Sort Z-A to arrange lines in reverse alphabetical order.</li>
        <li>Use Sort by Length to arrange lines from shortest to longest.</li>
        <li>Use Reverse to reverse the current line order.</li>
        <li>Click Copy Text to copy the sorted result.</li>
    </ol>


    <h2>Text Sorter Features</h2>

    <p>
        The Text Sorter provides several useful sorting options in one simple
        tool. You can arrange lines alphabetically, reverse their order or
        sort them according to their character length. Basic line, word and
        character statistics are also displayed.
    </p>

    <p>
        Text processing happens directly in your browser, so the tool is
        convenient for organizing lists, keywords, notes, names and other
        text-based information.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a Text Sorter?</h3>
            <p>
                A Text Sorter is an online tool that arranges lines of text
                into a selected order, such as alphabetical or reverse order.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I sort text alphabetically?</h3>
            <p>
                Paste your text into the tool and click Sort A-Z. Each line
                will be arranged in alphabetical order.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I sort text in reverse alphabetical order?</h3>
            <p>
                Yes. Click Sort Z-A to arrange the lines in reverse
                alphabetical order.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I sort lines by length?</h3>
            <p>
                Yes. The Sort by Length option arranges the lines from the
                shortest line to the longest line.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I sort a list of names?</h3>
            <p>
                Yes. You can enter one name per line and use the alphabetical
                sorting options to organize the list.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does this tool remove duplicate lines?</h3>
            <p>
                No. The Text Sorter is designed to arrange lines. Duplicate
                lines remain in the text after sorting.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                No file upload is required. The sorting process is performed
                directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Text Sorter free?</h3>
            <p>
                Yes. The Text Sorter is free to use directly from your
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
    "name": "Text Sorter",
    "url": "{{ url('/text-sorter') }}",
    "description": "Free online Text Sorter for arranging lines alphabetically, in reverse order and by length.",
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
            "name": "What is a Text Sorter?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Text Sorter is an online tool that arranges lines of text into a selected order, such as alphabetical or reverse order."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I sort text alphabetically?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Paste your text into the tool and click Sort A-Z. Each line will be arranged in alphabetical order."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I sort text in reverse alphabetical order?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Click Sort Z-A to arrange the lines in reverse alphabetical order."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I sort lines by length?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Sort by Length option arranges the lines from the shortest line to the longest line."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I sort a list of names?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can enter one name per line and use the alphabetical sorting options to organize the list."
            }
        },
        {
            "@@type": "Question",
            "name": "Does this tool remove duplicate lines?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. The Text Sorter is designed to arrange lines. Duplicate lines remain in the text after sorting."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No file upload is required. The sorting process is performed directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Text Sorter free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Text Sorter is free to use directly from your web browser."
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
            "name": "Text Sorter",
            "item": "{{ url('/text-sorter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea =
        document.getElementById('textSorterInput');

    const lineCount =
        document.getElementById('lineCount');

    const wordCount =
        document.getElementById('wordCount');

    const characterCount =
        document.getElementById('characterCount');

    const sortAZBtn =
        document.getElementById('sortAZBtn');

    const sortZABtn =
        document.getElementById('sortZABtn');

    const sortLengthBtn =
        document.getElementById('sortLengthBtn');

    const reverseBtn =
        document.getElementById('reverseBtn');

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

        const text = textarea.value;

        const lines = getLines();

        const words = text.trim()
            ? text.trim().split(/\s+/).filter(Boolean)
            : [];

        lineCount.textContent =
            lines.length.toLocaleString();

        wordCount.textContent =
            words.length.toLocaleString();

        characterCount.textContent =
            text.length.toLocaleString();
    }


    function setLines(lines) {

        textarea.value = lines.join('\n');

        updateStats();

    }


    sortAZBtn.addEventListener('click', function () {

        const lines = getLines();

        lines.sort(function (a, b) {
            return a.localeCompare(
                b,
                undefined,
                {
                    sensitivity: 'base'
                }
            );
        });

        setLines(lines);

    });


    sortZABtn.addEventListener('click', function () {

        const lines = getLines();

        lines.sort(function (a, b) {
            return b.localeCompare(
                a,
                undefined,
                {
                    sensitivity: 'base'
                }
            );
        });

        setLines(lines);

    });


    sortLengthBtn.addEventListener('click', function () {

        const lines = getLines();

        lines.sort(function (a, b) {

            return a.length - b.length;

        });

        setLines(lines);

    });


    reverseBtn.addEventListener('click', function () {

        const lines = getLines();

        lines.reverse();

        setLines(lines);

    });


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