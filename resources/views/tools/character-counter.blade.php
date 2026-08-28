@extends('layouts.tool')


@section('title', 'Character Counter Online - Free Character Count Tool')


@section('meta_description', 'Count characters, characters without spaces, words, sentences and paragraphs online with our free Character Counter. Get instant text statistics without registration.')


@section('canonical', url('/character-counter'))


@section('og_title', 'Character Counter Online - Free Character Count Tool')


@section('og_description', 'Free online character counter to count characters, words, sentences and paragraphs instantly.')


@section('og_url', url('/character-counter'))


@section('twitter_title', 'Character Counter Online - Free Character Count Tool')


@section('twitter_description', 'Count characters, words, sentences and paragraphs instantly with this free online Character Counter.')


@section('tool_name', 'Character Counter')


@section('breadcrumb', 'Character Counter')


@section('tool_badge', 'Free Text Tool')


@section('tool_description')
Count characters, words, sentences and paragraphs instantly. Check your text length with a fast and simple online character counter.
@endsection


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="characterCounterInput" class="form-label fw-semibold">
            Enter or paste your text
        </label>

        <textarea
            id="characterCounterInput"
            class="form-control"
            rows="10"
            placeholder="Type or paste your text here..."
            aria-label="Text to count characters and words"></textarea>

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
                <div class="tool-stat-label">Words</div>
                <div id="wordCount" class="tool-stat-value">0</div>
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

    <h2>About This Character Counter</h2>

    <p>
        This free Character Counter helps you quickly find the total number
        of characters in any text. You can type or paste text into the tool
        and instantly see characters with spaces, characters without spaces,
        words, sentences, paragraphs and estimated reading time.
    </p>

    <p>
        A character counter is useful when you need to stay within a specific
        text length. Students, writers, bloggers, content creators and
        professionals can use it to check text limits for essays, forms,
        social media posts, descriptions and other written content.
    </p>


    <h2>How to Use This Character Counter</h2>

    <ol>
        <li>Type or paste your text into the text box.</li>
        <li>The character count updates automatically as you type.</li>
        <li>Check characters including spaces and characters without spaces.</li>
        <li>Check the additional word, sentence and paragraph statistics.</li>
        <li>Use Copy Text to copy your entered content.</li>
        <li>Use Clear to remove the text and start again.</li>
    </ol>


    <h2>Character Counter Features</h2>

    <p>
        The tool provides instant character counting along with additional
        text statistics. You can see the total number of characters including
        spaces and the number of characters after removing whitespace.
        It also provides word, sentence and paragraph counts.
    </p>

    <p>
        The Character Counter works directly in your browser and does not
        require an account or software installation. It is suitable for
        checking short messages as well as longer documents and articles.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item">
            <h3>What is a character counter?</h3>
            <p>
                A character counter is an online tool that calculates the
                number of characters contained in a text, including or
                excluding spaces depending on the statistic selected.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I count characters in text?</h3>
            <p>
                Paste or type your text into the Character Counter above.
                The tool automatically displays the total character count.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does character count include spaces?</h3>
            <p>
                The tool provides both counts. Characters shows the total
                including spaces, while Characters Without Spaces excludes
                whitespace characters.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I use this tool for social media posts?</h3>
            <p>
                Yes. You can use the Character Counter to check the length
                of social media posts, captions, descriptions and other
                content with character limits.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can students use this Character Counter?</h3>
            <p>
                Yes. Students can use it to check the length of assignments,
                essays, applications, reports and other academic writing.
            </p>
        </div>

        <div class="faq-item">
            <h3>Does this Character Counter require registration?</h3>
            <p>
                No. You can use the tool directly in your browser without
                creating an account or registering.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is my text uploaded to a server?</h3>
            <p>
                The character-counting functionality works directly in your
                browser. No file upload or server-side processing is required
                for calculating the displayed text statistics.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is this Character Counter free?</h3>
            <p>
                Yes. The Character Counter is free to use directly from
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
    "name": "Character Counter",
    "url": "{{ url('/character-counter') }}",
    "description": "Free online character counter for counting characters, words, sentences, paragraphs and reading time.",
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
            "name": "What is a character counter?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A character counter is an online tool that calculates the number of characters contained in a text, including or excluding spaces depending on the statistic selected."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I count characters in text?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Paste or type your text into the Character Counter. The tool automatically displays the total character count."
            }
        },
        {
            "@@type": "Question",
            "name": "Does character count include spaces?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The tool provides both counts. Characters shows the total including spaces, while Characters Without Spaces excludes whitespace characters."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I use this tool for social media posts?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can use the Character Counter to check the length of social media posts, captions, descriptions and other content with character limits."
            }
        },
        {
            "@@type": "Question",
            "name": "Can students use this Character Counter?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Students can use it to check the length of assignments, essays, applications, reports and other academic writing."
            }
        },
        {
            "@@type": "Question",
            "name": "Does this Character Counter require registration?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. You can use the tool directly in your browser without creating an account or registering."
            }
        },
        {
            "@@type": "Question",
            "name": "Is my text uploaded to a server?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The character-counting functionality works directly in your browser. No file upload or server-side processing is required for calculating the displayed text statistics."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Character Counter free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Character Counter is free to use directly from your web browser."
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
            "name": "Character Counter",
            "item": "{{ url('/character-counter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const textarea =
        document.getElementById('characterCounterInput');

    const characterCount =
        document.getElementById('characterCount');

    const characterNoSpaceCount =
        document.getElementById('characterNoSpaceCount');

    const wordCount =
        document.getElementById('wordCount');

    const sentenceCount =
        document.getElementById('sentenceCount');

    const paragraphCount =
        document.getElementById('paragraphCount');

    const readingTime =
        document.getElementById('readingTime');

    const copyTextBtn =
        document.getElementById('copyTextBtn');

    const clearTextBtn =
        document.getElementById('clearTextBtn');


    function countText() {

        const text = textarea.value;
        const trimmedText = text.trim();


        const totalCharacters = text.length;


        const charactersWithoutSpaces =
            text.replace(/\s/g, '').length;


        const words = trimmedText
            ? trimmedText.split(/\s+/).filter(Boolean)
            : [];

        const totalWords = words.length;


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


        characterCount.textContent =
            totalCharacters.toLocaleString();

        characterNoSpaceCount.textContent =
            charactersWithoutSpaces.toLocaleString();

        wordCount.textContent =
            totalWords.toLocaleString();

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

        countText();

        textarea.focus();

    });


    countText();

});
</script>

@endpush