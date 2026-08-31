@extends('layouts.tool')

@section('title', 'Regex Tester Online - Test Regular Expressions')

@section('meta_description', 'Test and debug regular expressions online with this free Regex Tester. Enter a regex pattern and test it against sample text instantly.')

@section('canonical', url('/regex-tester'))

@section('og_title', 'Regex Tester Online - Test Regular Expressions')

@section('og_description', 'Test regular expressions against text, find matches and inspect results with this free online Regex Tester.')

@section('og_url', url('/regex-tester'))

@section('twitter_title', 'Regex Tester Online - Test Regular Expressions')

@section('twitter_description', 'Test and debug regular expressions online with this free Regex Tester.')

@section('tool_name', 'Regex Tester')

@section('breadcrumb', 'Regex Tester')

@section('tool_badge', 'Developer Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="regexPattern" class="form-label fw-semibold">
            Regular Expression
        </label>

        <input
            type="text"
            id="regexPattern"
            class="form-control"
            placeholder="Example: \b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b"
            aria-label="Regular expression">

    </div>


    <div class="row g-3 mb-3">

        <div class="col-md-8">

            <label for="regexTestText" class="form-label fw-semibold">
                Test Text
            </label>

            <textarea
                id="regexTestText"
                class="form-control"
                rows="8"
                placeholder="Enter the text you want to test your regular expression against..."
                aria-label="Text to test"></textarea>

        </div>


        <div class="col-md-4">

            <label class="form-label fw-semibold">
                Regex Flags
            </label>

            <div class="border rounded p-3">

                <div class="form-check mb-2">

                    <input
                        class="form-check-input regex-flag"
                        type="checkbox"
                        value="g"
                        id="regexGlobal"
                        checked>

                    <label
                        class="form-check-label"
                        for="regexGlobal">
                        Global (g)
                    </label>

                </div>


                <div class="form-check mb-2">

                    <input
                        class="form-check-input regex-flag"
                        type="checkbox"
                        value="i"
                        id="regexIgnoreCase">

                    <label
                        class="form-check-label"
                        for="regexIgnoreCase">
                        Ignore Case (i)
                    </label>

                </div>


                <div class="form-check mb-2">

                    <input
                        class="form-check-input regex-flag"
                        type="checkbox"
                        value="m"
                        id="regexMultiline">

                    <label
                        class="form-check-label"
                        for="regexMultiline">
                        Multiline (m)
                    </label>

                </div>


                <div class="form-check mb-2">

                    <input
                        class="form-check-input regex-flag"
                        type="checkbox"
                        value="s"
                        id="regexDotAll">

                    <label
                        class="form-check-label"
                        for="regexDotAll">
                        Dot All (s)
                    </label>

                </div>

            </div>

        </div>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-4">

        <button
            type="button"
            id="testRegexButton"
            class="btn btn-primary">
            Test Regex
        </button>

        <button
            type="button"
            id="clearRegexButton"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="regexError"
        class="alert alert-danger d-none"
        role="alert">
    </div>


    <div class="row g-3 mb-3">

        <div class="col-md-6">

            <div class="tool-stat-card h-100">

                <div class="tool-stat-label">
                    Match Status
                </div>

                <div
                    id="regexMatchStatus"
                    class="tool-stat-value">
                    —
                </div>

            </div>

        </div>


        <div class="col-md-6">

            <div class="tool-stat-card h-100">

                <div class="tool-stat-label">
                    Total Matches
                </div>

                <div
                    id="regexMatchCount"
                    class="tool-stat-value">
                    —
                </div>

            </div>

        </div>

    </div>


    <div class="mb-3">

        <label
            for="regexMatchesOutput"
            class="form-label fw-semibold">
            Matches
        </label>

        <textarea
            id="regexMatchesOutput"
            class="form-control"
            rows="6"
            readonly
            aria-label="Regular expression matches"></textarea>

    </div>


    <div
        id="regexMessage"
        class="small text-muted"
        aria-live="polite">
    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>Regex Tester</h2>

    <p>
        A Regex Tester is an online tool that allows developers, programmers
        and other users to test regular expressions against sample text.
        Regular expressions, commonly called regex or regexp, are patterns used
        to search for, match and work with specific text or character
        sequences. This free Regex Tester provides a convenient way to enter
        a pattern, select commonly used flags and check whether the pattern
        matches the supplied text.
    </p>

    <p>
        Regular expressions can be useful for finding emails, numbers, URLs,
        dates, words, whitespace and many other text patterns. Instead of
        manually checking a large amount of text, a regex pattern can describe
        the type of content that should be found. The Regex Tester makes it
        easier to experiment with these patterns before using them in a
        website, application, script or other programming project.
    </p>

    <p>
        To use this tool, enter a regular expression in the pattern field and
        provide some sample text in the test area. You can then select the
        regex flags you need and click Test Regex. The tool checks the pattern
        using the browser's JavaScript regular expression engine and displays
        whether a match was found along with the matching text.
    </p>

    <p>
        Regex flags change how a regular expression behaves. The global flag,
        represented by g, allows the expression to find multiple matches
        instead of stopping after the first match. The ignore-case flag, i,
        makes matching case-insensitive. The multiline flag, m, changes the
        behavior of line anchors, while the dot-all flag, s, allows the dot
        character to match newline characters.
    </p>

    <p>
        Regular expressions are made from ordinary characters and special
        pattern characters. For example, a period can represent any character
        in many regex contexts, while brackets can define a character class.
        Quantifiers can specify how many times a character or group should
        appear. Because regex syntax can become complex, testing a pattern
        against representative sample text is an important part of building
        and debugging regular expressions.
    </p>

    <p>
        Developers often use regex when validating or extracting structured
        text. Common examples include checking whether an input resembles an
        email address, extracting numbers from a document, finding repeated
        words or identifying specific formats. The exact validation rules
        required by an application depend on the data being processed, so a
        regex should be tested with both valid and invalid examples.
    </p>

    <p>
        This Regex Tester runs directly in the browser and does not require an
        account or software installation. Your test pattern and sample text
        are processed by the JavaScript running on the page. The tool is
        designed for quick testing and experimentation and can be used on
        desktop computers, laptops, tablets and compatible mobile browsers.
    </p>


    <h2>How to Use the Regex Tester</h2>

    <p>
        Begin by entering your regular expression in the Regular Expression
        field. You can enter a simple pattern such as a word or use more
        advanced regex syntax involving character classes, groups, anchors and
        quantifiers. Make sure that the expression follows the syntax supported
        by the JavaScript regular expression engine used by your browser.
    </p>

    <p>
        Next, enter the sample content you want to test in the Test Text area.
        The sample should contain examples of the information you expect the
        expression to match. Including both matching and non-matching examples
        can make it easier to understand whether the pattern behaves as
        expected.
    </p>

    <p>
        Select any flags that are appropriate for your pattern. For example,
        enable Ignore Case when uppercase and lowercase letters should be
        treated the same. Enable Global when you want to identify multiple
        matches throughout the supplied text. After choosing the required
        options, click Test Regex to run the test.
    </p>

    <p>
        The results section shows whether the regular expression found a
        match and displays the total number of matches. When multiple matches
        are found, they are displayed separately so you can review the output.
        If the pattern contains invalid syntax, the tool displays an error
        instead of attempting to process the invalid expression.
    </p>


    <h2>Common Regex Flags</h2>

    <p>
        The global flag g is commonly used when you want to find all matching
        occurrences in a string. Without the global flag, JavaScript regular
        expression matching generally returns the first matching occurrence
        when using the relevant matching methods. Global matching is useful
        for extraction and search tasks where several occurrences may exist.
    </p>

    <p>
        The ignore-case flag i allows the expression to match letters without
        distinguishing between uppercase and lowercase forms. The multiline
        flag m changes how the caret and dollar-sign anchors work with
        multiple lines. The dot-all flag s allows the dot character to match
        newline characters, which can be useful when a pattern needs to work
        across line breaks.
    </p>


    <h2>Examples of Regex Use</h2>

    <p>
        A regular expression can be used to locate numbers inside a block of
        text. A simple pattern can search for consecutive digits, while a more
        specific pattern can be designed for a particular number format.
        Testing different sample values helps ensure that the expression
        matches the intended format without unintentionally matching unrelated
        content.
    </p>

    <p>
        Regex can also be useful for finding email-like strings, URLs or
        identifiers. However, complex real-world formats can have many valid
        variations, so a simple regular expression may not represent every
        possible valid value. For production applications, patterns should be
        carefully tested against realistic data and application requirements.
    </p>

    <p>
        Text extraction is another common use. For example, a developer might
        need to find all numbers, specific words or formatted identifiers in a
        long document. A global regular expression can return multiple
        matching occurrences, making it easier to process the extracted
        information programmatically.
    </p>


    <h2>Tips for Writing Better Regular Expressions</h2>

    <p>
        Start with the simplest pattern that correctly describes the data you
        need to match. Test it against short examples first and then gradually
        add additional conditions. This approach makes debugging easier because
        you can identify which part of the expression changes the matching
        behavior.
    </p>

    <p>
        It is also useful to test edge cases. Include empty values, unexpected
        characters, uppercase and lowercase variations, spaces, punctuation
        and longer inputs when they are relevant to your application. A regex
        that works for one example may still produce unexpected results when
        used against different input.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What is a Regex Tester?</h3>

            <p>
                A Regex Tester allows you to enter a regular expression and
                test it against sample text to find matching content.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What does the g flag mean?</h3>

            <p>
                The g flag enables global matching so the regular expression
                can find multiple matching occurrences in the supplied text.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What does the i flag mean?</h3>

            <p>
                The i flag makes regular expression matching case-insensitive,
                allowing uppercase and lowercase letters to match.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What does the m flag do?</h3>

            <p>
                The m flag changes the behavior of line anchors such as the
                caret and dollar sign when working with multiline text.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What happens if my regex is invalid?</h3>

            <p>
                The tool displays an error message when the entered regular
                expression contains invalid JavaScript regex syntax.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Is this Regex Tester free?</h3>

            <p>
                Yes. The Regex Tester is free to use online and does not
                require registration or additional software.
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
    "name": "Regex Tester",
    "url": "{{ url('/regex-tester') }}",
    "description": "Free online Regex Tester for testing regular expressions against sample text.",
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
            "name": "What is a Regex Tester?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Regex Tester allows you to enter a regular expression and test it against sample text to find matching content."
            }
        },
        {
            "@@type": "Question",
            "name": "What does the g flag mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The g flag enables global matching so the regular expression can find multiple matching occurrences in the supplied text."
            }
        },
        {
            "@@type": "Question",
            "name": "What does the i flag mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The i flag makes regular expression matching case-insensitive, allowing uppercase and lowercase letters to match."
            }
        },
        {
            "@@type": "Question",
            "name": "What does the m flag do?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The m flag changes the behavior of line anchors such as the caret and dollar sign when working with multiline text."
            }
        },
        {
            "@@type": "Question",
            "name": "What happens if my regex is invalid?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The tool displays an error message when the entered regular expression contains invalid JavaScript regex syntax."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Regex Tester free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Regex Tester is free to use online and does not require registration or additional software."
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
            "name": "Regex Tester",
            "item": "{{ url('/regex-tester') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const patternInput =
        document.getElementById('regexPattern');

    const textInput =
        document.getElementById('regexTestText');

    const testButton =
        document.getElementById('testRegexButton');

    const clearButton =
        document.getElementById('clearRegexButton');

    const statusOutput =
        document.getElementById('regexMatchStatus');

    const countOutput =
        document.getElementById('regexMatchCount');

    const matchesOutput =
        document.getElementById('regexMatchesOutput');

    const errorBox =
        document.getElementById('regexError');

    const message =
        document.getElementById('regexMessage');


    const flagInputs =
        document.querySelectorAll('.regex-flag');


    function getFlags() {

        let flags = '';

        flagInputs.forEach(function (input) {

            if (input.checked) {
                flags += input.value;
            }

        });

        return flags;

    }


    function testRegex() {

        errorBox.classList.add('d-none');

        errorBox.textContent = '';

        message.textContent = '';

        statusOutput.textContent = '—';

        countOutput.textContent = '—';

        matchesOutput.value = '';


        const pattern =
            patternInput.value;

        const text =
            textInput.value;


        if (!pattern) {

            errorBox.textContent =
                'Please enter a regular expression.';

            errorBox.classList.remove('d-none');

            return;

        }


        try {

            const flags =
                getFlags();

            const regex =
                new RegExp(pattern, flags);


            if (!flags.includes('g')) {

                const match =
                    regex.exec(text);

                if (match) {

                    statusOutput.textContent =
                        'Match Found';

                    countOutput.textContent =
                        '1';

                    matchesOutput.value =
                        match[0];

                } else {

                    statusOutput.textContent =
                        'No Match';

                    countOutput.textContent =
                        '0';

                }

            } else {

                const matches =
                    text.match(regex);


                if (matches && matches.length) {

                    statusOutput.textContent =
                        'Match Found';

                    countOutput.textContent =
                        matches.length;

                    matchesOutput.value =
                        matches.join('\n');

                } else {

                    statusOutput.textContent =
                        'No Match';

                    countOutput.textContent =
                        '0';

                }

            }


            message.textContent =
                'Regular expression tested successfully.';

        } catch (error) {

            errorBox.textContent =
                'Invalid regular expression: ' +
                error.message;

            errorBox.classList.remove('d-none');

        }

    }


    testButton.addEventListener(
        'click',
        testRegex
    );


    clearButton.addEventListener(
        'click',
        function () {

            patternInput.value = '';

            textInput.value = '';

            statusOutput.textContent = '—';

            countOutput.textContent = '—';

            matchesOutput.value = '';

            errorBox.textContent = '';

            errorBox.classList.add('d-none');

            message.textContent = '';

            flagInputs.forEach(function (input) {

                input.checked =
                    input.value === 'g';

            });

        }
    );


    patternInput.addEventListener(
        'input',
        function () {

            if (patternInput.value &&
                textInput.value) {

                testRegex();

            }

        }
    );


    textInput.addEventListener(
        'input',
        function () {

            if (patternInput.value) {

                testRegex();

            }

        }
    );


    flagInputs.forEach(function (input) {

        input.addEventListener(
            'change',
            function () {

                if (patternInput.value) {

                    testRegex();

                }

            }
        );

    });

});
</script>

@endpush