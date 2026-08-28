@extends('layouts.tool')


@section('title', 'Word Counter Online - Free Word Count Tool')


@section('meta_description', 'Count words, characters, sentences and paragraphs online with our free Word Counter. Get reading time and text statistics instantly with no registration required.')


@section('canonical', url('/word-counter'))


@section('og_title', 'Word Counter Online - Free Word Count Tool')


@section('og_description', 'Free online word counter to count words, characters, sentences, paragraphs and reading time instantly.')


@section('og_url', url('/word-counter'))


@section('twitter_title', 'Word Counter Online - Free Word Count Tool')


@section('twitter_description', 'Count words, characters, sentences, paragraphs and reading time instantly with this free online tool.')


@section('tool_name', 'Word Counter')


@section('breadcrumb', 'Word Counter')


@section('tool_badge', 'Free Text Tool')



@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="wordCounterInput" class="form-label fw-semibold">
            Enter or paste your text
        </label>

        <textarea
            id="wordCounterInput"
            class="form-control"
            rows="10"
            placeholder="Type or paste your text here..."
            aria-label="Text to count words and characters"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-3">

        <button
            type="button"
            id="copyTextBtn"
            class="btn btn-primary tool-action-btn">
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

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Characters Without Spaces</div>
                <div id="characterNoSpaceCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Sentences</div>
                <div id="sentenceCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Paragraphs</div>
                <div id="paragraphCount" class="tool-stat-value">0</div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="tool-stat-card">
                <div class="tool-stat-label">Reading Time</div>
                <div id="readingTime" class="tool-stat-value">0 min</div>
            </div>
        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>About This Word Counter</h2>

    <p>
        This free Word Counter helps you quickly count the number of words
        in any text. You can type or paste text into the tool and instantly
        see the total word count, character count, sentence count,
        paragraph count and estimated reading time.
    </p>

    <p>
        It is useful for students, writers, bloggers, content creators,
        editors and professionals who need to check the length of written
        content. The tool works directly in your browser and does not
        require registration or software installation.
    </p>


    <h2>How to Use This Word Counter</h2>

    <ol>
        <li>Type or paste your text into the text box.</li>
        <li>The word and character statistics update automatically.</li>
        <li>Check the words, characters, sentences and paragraphs.</li>
        <li>Check the estimated reading time of your text.</li>
        <li>Click Copy Text to copy your content.</li>
        <li>Click Clear to remove the text and start again.</li>
    </ol>


    <h2>Word Counter Features</h2>

    <p>
        The tool provides multiple text statistics in one place. It counts
        words and characters, shows characters without spaces, estimates
        sentences and paragraphs, and calculates approximate reading time.
        This makes it useful for essays, assignments, articles, blog posts,
        social media content and other written material.
    </p>

    <p>
        All calculations are performed directly in your browser, making the
        tool quick and convenient for everyday text-counting tasks.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a word counter?</h3>
            <p>
                A word counter is an online tool that calculates the number
                of words in a piece of text and helps you check content length.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I count words online?</h3>
            <p>
                Paste or type your text into the Word Counter above. The tool
                automatically calculates the word count.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does this tool count characters?</h3>
            <p>
                Yes. It shows total characters as well as characters without
                spaces.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I use this Word Counter for essays?</h3>
            <p>
                Yes. Students can use it to check essays, assignments,
                reports, applications and other academic content.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does the Word Counter require registration?</h3>
            <p>
                No. The tool can be used directly without creating an account
                or registering.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                The counting functionality works directly in your browser.
                No file upload or server-side processing is required for
                the text statistics.
            </p>
        </div>

        <div class="faq-item">
            <h3>How is reading time calculated?</h3>
            <p>
                Reading time is estimated using an average reading speed of
                approximately 200 words per minute. Actual reading time can
                vary depending on the reader and content.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Word Counter free?</h3>
            <p>
                Yes. The Word Counter is free to use directly from your
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
    "name": "Word Counter",
    "url": "{{ url('/word-counter') }}",
    "description": "Free online word counter for counting words, characters, sentences, paragraphs and estimated reading time.",
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
            "name": "What is a word counter?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A word counter is an online tool that calculates the number of words in a piece of text and helps you check content length."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I count words online?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Paste or type your text into the Word Counter. The tool automatically calculates the word count."
            }
        },
        {
            "@@type": "Question",
            "name": "Does this tool count characters?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. It shows total characters as well as characters without spaces."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I use this Word Counter for essays?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Students can use it to check essays, assignments, reports, applications and other academic content."
            }
        },
        {
            "@@type": "Question",
            "name": "Does the Word Counter require registration?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. The tool can be used directly without creating an account or registering."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The counting functionality works directly in your browser. No file upload or server-side processing is required for the text statistics."
            }
        },
        {
            "@@type": "Question",
            "name": "How is reading time calculated?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Reading time is estimated using an average reading speed of approximately 200 words per minute."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Word Counter free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Word Counter is free to use directly from your web browser."
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
            "name": "Word Counter",
            "item": "{{ url('/word-counter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea = document.getElementById('wordCounterInput');

    const wordCount = document.getElementById('wordCount');
    const characterCount = document.getElementById('characterCount');
    const characterNoSpaceCount = document.getElementById('characterNoSpaceCount');
    const sentenceCount = document.getElementById('sentenceCount');
    const paragraphCount = document.getElementById('paragraphCount');
    const readingTime = document.getElementById('readingTime');

    const copyTextBtn = document.getElementById('copyTextBtn');
    const clearTextBtn = document.getElementById('clearTextBtn');


    function countText() {

        const text = textarea.value;
        const trimmedText = text.trim();

        const words = trimmedText
            ? trimmedText.split(/\s+/).filter(Boolean)
            : [];

        const totalWords = words.length;

        const totalCharacters = text.length;

        const charactersWithoutSpaces =
            text.replace(/\s/g, '').length;

        const sentences = trimmedText
            ? trimmedText
                .split(/[.!?]+/)
                .filter(sentence => sentence.trim().length > 0)
            : [];

        const totalSentences = sentences.length;

        const paragraphs = trimmedText
            ? trimmedText
                .split(/\n\s*\n/)
                .filter(paragraph => paragraph.trim().length > 0)
            : [];

        const totalParagraphs = paragraphs.length;

        const wordsPerMinute = 200;

        const minutes = totalWords > 0
            ? Math.ceil(totalWords / wordsPerMinute)
            : 0;


        wordCount.textContent =
            totalWords.toLocaleString();

        characterCount.textContent =
            totalCharacters.toLocaleString();

        characterNoSpaceCount.textContent =
            charactersWithoutSpaces.toLocaleString();

        sentenceCount.textContent =
            totalSentences.toLocaleString();

        paragraphCount.textContent =
            totalParagraphs.toLocaleString();

        readingTime.textContent =
            minutes + ' min';
    }


    textarea.addEventListener('input', countText);


    copyTextBtn.addEventListener('click', async function () {

        if (!textarea.value) {
            return;
        }

        try {

            await navigator.clipboard.writeText(textarea.value);

            const originalText = copyTextBtn.textContent;

            copyTextBtn.textContent = 'Copied!';

            setTimeout(function () {
                copyTextBtn.textContent = originalText;
            }, 1500);

        } catch (error) {

            textarea.select();
            document.execCommand('copy');

        }

    });


    clearTextBtn.addEventListener('click', function () {

        textarea.value = '';

        countText();

        textarea.focus();

    });


    countText();

});
</script>

@endpush