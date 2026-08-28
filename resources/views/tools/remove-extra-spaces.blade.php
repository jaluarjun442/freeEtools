@extends('layouts.tool')


@section('title', 'Remove Extra Spaces Online - Free Space Remover')


@section('meta_description', 'Remove extra spaces, multiple spaces and unnecessary blank lines from text online with this free Remove Extra Spaces tool. Clean and format text instantly.')


@section('canonical', url('/remove-extra-spaces'))


@section('og_title', 'Remove Extra Spaces Online - Free Space Remover')


@section('og_description', 'Free online tool to remove extra spaces, multiple spaces and unnecessary blank lines from text instantly.')


@section('og_url', url('/remove-extra-spaces'))


@section('twitter_title', 'Remove Extra Spaces Online - Free Space Remover')


@section('twitter_description', 'Clean text by removing extra spaces, multiple spaces and unnecessary blank lines with this free online tool.')


@section('tool_name', 'Remove Extra Spaces')


@section('breadcrumb', 'Remove Extra Spaces')


@section('tool_badge', 'Free Text Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="extraSpacesInput" class="form-label fw-semibold">
            Enter or paste your text
        </label>

        <textarea
            id="extraSpacesInput"
            class="form-control"
            rows="10"
            placeholder="Type or paste your text here..."
            aria-label="Text to remove extra spaces"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            id="removeSpacesBtn"
            class="btn btn-primary tool-action-btn">
            Remove Extra Spaces
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

    <h2>About This Remove Extra Spaces Tool</h2>

    <p>
        This free Remove Extra Spaces tool helps you clean text by removing
        unnecessary spaces, multiple spaces and unwanted blank lines. It is
        useful when text has been copied from documents, websites, emails or
        other sources and needs quick formatting.
    </p>

    <p>
        Instead of manually deleting repeated spaces, you can paste your text
        into the tool and clean it instantly. The tool works directly in your
        browser and does not require registration or software installation.
    </p>


    <h2>How to Use This Tool</h2>

    <ol>
        <li>Type or paste your text into the text box.</li>
        <li>Click the Remove Extra Spaces button.</li>
        <li>The tool removes repeated spaces and unnecessary blank lines.</li>
        <li>Review the cleaned text.</li>
        <li>Click Copy Text to copy the final result.</li>
        <li>Use Clear to start with new text.</li>
    </ol>


    <h2>Remove Extra Spaces Features</h2>

    <p>
        This tool is designed for quick text cleanup. It can reduce repeated
        spaces between words and remove unnecessary whitespace at the
        beginning and end of lines. It also helps clean repeated blank lines
        so that pasted text becomes easier to read and reuse.
    </p>

    <p>
        The tool is useful for students, writers, developers, bloggers,
        content creators and anyone who regularly works with copied or
        formatted text.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What does Remove Extra Spaces do?</h3>
            <p>
                It cleans text by removing repeated spaces and unnecessary
                whitespace while keeping the text readable.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I remove multiple spaces from text?</h3>
            <p>
                Paste your text into the tool and click Remove Extra Spaces.
                The repeated spaces will be cleaned automatically.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can this tool remove blank lines?</h3>
            <p>
                Yes. The tool removes unnecessary repeated blank lines from
                the text during the cleanup process.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I use this tool for copied text?</h3>
            <p>
                Yes. It is useful for cleaning text copied from websites,
                documents, emails and other sources.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does this tool change the words?</h3>
            <p>
                No. The purpose of the tool is to clean unnecessary spacing
                and whitespace rather than change the actual words.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                No file upload is required. The text cleanup is performed
                directly in your browser.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I copy the cleaned text?</h3>
            <p>
                Yes. After cleaning your text, click Copy Text to copy the
                result to your clipboard.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Remove Extra Spaces tool free?</h3>
            <p>
                Yes. The tool is free to use directly from your web browser.
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
    "name": "Remove Extra Spaces",
    "url": "{{ url('/remove-extra-spaces') }}",
    "description": "Free online tool for removing extra spaces, multiple spaces and unnecessary blank lines from text.",
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
            "name": "What does Remove Extra Spaces do?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "It cleans text by removing repeated spaces and unnecessary whitespace while keeping the text readable."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I remove multiple spaces from text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Paste your text into the tool and click Remove Extra Spaces. The repeated spaces will be cleaned automatically."
            }
        },
        {
            "@@type": "Question",
            "name": "Can this tool remove blank lines?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The tool removes unnecessary repeated blank lines from the text during the cleanup process."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I use this tool for copied text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. It is useful for cleaning text copied from websites, documents, emails and other sources."
            }
        },
        {
            "@@type": "Question",
            "name": "Does this tool change the words?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. The purpose of the tool is to clean unnecessary spacing and whitespace rather than change the actual words."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No file upload is required. The text cleanup is performed directly in your browser."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I copy the cleaned text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. After cleaning your text, click Copy Text to copy the result to your clipboard."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Remove Extra Spaces tool free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The tool is free to use directly from your web browser."
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
            "name": "Remove Extra Spaces",
            "item": "{{ url('/remove-extra-spaces') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea =
        document.getElementById('extraSpacesInput');

    const characterCount =
        document.getElementById('characterCount');

    const wordCount =
        document.getElementById('wordCount');

    const lineCount =
        document.getElementById('lineCount');

    const removeSpacesBtn =
        document.getElementById('removeSpacesBtn');

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
            text
                ? text.split(/\r?\n/).length.toLocaleString()
                : '0';
    }


    function cleanText() {

        let text = textarea.value;

        text = text
            .replace(/[ \t]+/g, ' ')
            .replace(/\n[ \t]+/g, '\n')
            .replace(/[ \t]+\n/g, '\n')
            .replace(/\n{3,}/g, '\n\n')
            .trim();

        textarea.value = text;

        updateStats();
    }


    removeSpacesBtn.addEventListener(
        'click',
        cleanText
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