@extends('layouts.tool')

@section('title', 'Random Number Generator - Generate Random Numbers')

@section('meta_description', 'Generate random numbers instantly with this free Random Number Generator. Set a minimum and maximum value and create random numbers online.')

@section('canonical', url('/random-number-generator'))

@section('og_title', 'Random Number Generator - Generate Random Numbers')

@section('og_description', 'Generate random numbers between any minimum and maximum value with this free online Random Number Generator.')

@section('og_url', url('/random-number-generator'))

@section('twitter_title', 'Random Number Generator - Generate Random Numbers')

@section('twitter_description', 'Generate random numbers online by setting your minimum and maximum values.')

@section('tool_name', 'Random Number Generator')

@section('breadcrumb', 'Random Number Generator')

@section('tool_badge', 'Free Number Tool')


@section('tool_content')

<div class="tool-box">

    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <label for="randomMin" class="form-label fw-semibold">
                Minimum Value
            </label>

            <input
                type="number"
                id="randomMin"
                class="form-control"
                value="1"
                step="any"
                placeholder="Example: 1"
                aria-label="Minimum value">

        </div>


        <div class="col-md-6">

            <label for="randomMax" class="form-label fw-semibold">
                Maximum Value
            </label>

            <input
                type="number"
                id="randomMax"
                class="form-control"
                value="100"
                step="any"
                placeholder="Example: 100"
                aria-label="Maximum value">

        </div>

    </div>


    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <label for="randomCount" class="form-label fw-semibold">
                Number of Results
            </label>

            <input
                type="number"
                id="randomCount"
                class="form-control"
                value="1"
                min="1"
                max="100"
                step="1"
                aria-label="Number of random numbers">

        </div>


        <div class="col-md-6 d-flex align-items-end">

            <div class="form-check mb-2">

                <input
                    class="form-check-input"
                    type="checkbox"
                    id="allowDuplicates">

                <label
                    class="form-check-label"
                    for="allowDuplicates">
                    Allow duplicate numbers
                </label>

            </div>

        </div>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-4">

        <button
            type="button"
            id="generateRandomNumbers"
            class="btn btn-primary">
            Generate Random Numbers
        </button>

        <button
            type="button"
            id="clearRandomNumbers"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="randomNumberError"
        class="alert alert-danger d-none"
        role="alert">
    </div>


    <div class="mb-3">

        <label
            for="randomNumberOutput"
            class="form-label fw-semibold">
            Generated Numbers
        </label>

        <textarea
            id="randomNumberOutput"
            class="form-control"
            rows="5"
            readonly
            aria-label="Generated random numbers"></textarea>

    </div>


    <button
        type="button"
        id="copyRandomNumbers"
        class="btn btn-outline-primary">
        Copy Results
    </button>


    <div
        id="randomNumberMessage"
        class="small text-muted mt-3"
        aria-live="polite">
    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>Random Number Generator</h2>

    <p>
        A Random Number Generator is an online tool that creates numbers
        randomly within a range selected by the user. It can be useful whenever
        you need a quick number without manually choosing one. Simply enter a
        minimum value and maximum value, select how many numbers you need, and
        generate the results instantly. The tool is designed to be simple,
        fast and convenient for everyday calculations and random selection
        tasks.
    </p>

    <p>
        The minimum value defines the lower boundary of the range, while the
        maximum value defines the upper boundary. For example, if you enter 1
        as the minimum and 100 as the maximum, the generator can produce a
        random number within that range. You can also request multiple results
        at once when you need several random numbers instead of generating
        them individually.
    </p>

    <p>
        Random numbers can be useful in many different situations. Students
        can use them for mathematics exercises, classroom activities and
        probability experiments. Developers can use random values when
        testing applications or creating sample data. Users can also use the
        generator for games, random selections, practice exercises and other
        situations where choosing a number manually would be inconvenient.
    </p>

    <p>
        This Random Number Generator also provides an option to allow or
        prevent duplicate results. When duplicate numbers are allowed, the
        same number may appear more than once when multiple values are
        generated. When duplicates are disabled, the generator attempts to
        produce unique numbers within the selected range. This can be useful
        for tasks such as creating a random list where every generated number
        should be different.
    </p>

    <p>
        The number of results can be adjusted according to your requirement.
        You can generate a single random number or request multiple numbers
        in one operation. The tool supports up to 100 results in a single
        generation, making it suitable for both quick one-number selections
        and small random datasets. Results are displayed together so they can
        easily be reviewed or copied.
    </p>

    <p>
        Random number generation is commonly used in probability and
        statistics. A random value from a defined range can help demonstrate
        concepts such as possible outcomes, distributions and repeated trials.
        While a simple random number generator is useful for general purposes,
        specialized statistical or cryptographic applications may require
        purpose-built randomization methods and should not rely solely on a
        basic browser-based generator.
    </p>

    <p>
        The tool runs directly in your web browser and does not require an
        account, registration or software installation. You can enter your
        values, generate results and copy them whenever required. This makes
        the Random Number Generator convenient to use on desktop computers,
        laptops, tablets and mobile devices.
    </p>


    <h2>How to Use the Random Number Generator</h2>

    <p>
        Start by entering the minimum value in the first input field. Then
        enter the maximum value in the second field. The generator uses these
        two values as the boundaries of the random-number range. Make sure
        that the minimum value is not greater than the maximum value before
        generating the results.
    </p>

    <p>
        Next, enter the number of results you want to generate. If you only
        need one random number, leave the number of results set to 1. If you
        need several values, enter the required quantity. The generator can
        produce up to 100 results at one time.
    </p>

    <p>
        If you want every result to be different, leave the Allow duplicate
        numbers option unchecked. If repeated values are acceptable, enable
        the option. Finally, click the Generate Random Numbers button. The
        generated values will appear in the results box.
    </p>

    <p>
        After generating the numbers, you can use the Copy Results button to
        copy all generated values to your clipboard. If you want to start a
        completely new calculation, click Clear and enter a different range
        or number of results.
    </p>


    <h2>Random Numbers With and Without Duplicates</h2>

    <p>
        When duplicate numbers are allowed, every generated result is selected
        independently from the specified range. This means that the same
        number can appear multiple times. For example, a range from 1 to 10
        could produce results such as 3, 7, 3, 10 and 7.
    </p>

    <p>
        When duplicate numbers are disabled, each generated result must be
        different from the previous results. This is useful when randomly
        selecting unique numbers from a range. The selected range must contain
        enough possible values to produce the requested number of unique
        results.
    </p>


    <h2>Common Uses of Random Number Generation</h2>

    <p>
        Random numbers can be used for classroom games, quizzes, practice
        exercises, simple selections and demonstrations. For example, a
        teacher can generate numbers for a mathematics activity, or a student
        can create random values for practicing addition, subtraction,
        multiplication and other calculations.
    </p>

    <p>
        Developers may also use random numbers while testing software. Random
        test values can help check how an application handles different input
        values. For more advanced software development requirements, however,
        developers should choose a randomization method appropriate to the
        security and reliability requirements of their application.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What is a Random Number Generator?</h3>

            <p>
                A Random Number Generator creates numbers within a range
                specified by the user without requiring manual selection.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can I generate multiple random numbers?</h3>

            <p>
                Yes. You can specify the number of results you need and
                generate multiple random numbers at the same time.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can random numbers contain duplicates?</h3>

            <p>
                Yes. You can choose whether duplicate numbers are allowed when
                generating multiple results.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What happens if duplicates are disabled?</h3>

            <p>
                The generator creates unique results. The selected range must
                contain enough possible values for the requested number of
                unique results.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can I generate numbers between 1 and 100?</h3>

            <p>
                Yes. Enter 1 as the minimum value and 100 as the maximum value,
                then generate the required number of results.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Is this Random Number Generator free?</h3>

            <p>
                Yes. The Random Number Generator is free to use online and
                does not require registration or software installation.
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
    "name": "Random Number Generator",
    "url": "{{ url('/random-number-generator') }}",
    "description": "Free online Random Number Generator for generating random numbers within a selected range.",
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
            "name": "What is a Random Number Generator?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Random Number Generator creates numbers within a range specified by the user without requiring manual selection."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I generate multiple random numbers?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can specify the number of results you need and generate multiple random numbers at the same time."
            }
        },
        {
            "@@type": "Question",
            "name": "Can random numbers contain duplicates?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can choose whether duplicate numbers are allowed when generating multiple results."
            }
        },
        {
            "@@type": "Question",
            "name": "What happens if duplicates are disabled?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The generator creates unique results. The selected range must contain enough possible values for the requested number of unique results."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I generate numbers between 1 and 100?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Enter 1 as the minimum value and 100 as the maximum value, then generate the required number of results."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Random Number Generator free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The Random Number Generator is free to use online and does not require registration or software installation."
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
            "name": "Random Number Generator",
            "item": "{{ url('/random-number-generator') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const minInput =
        document.getElementById('randomMin');

    const maxInput =
        document.getElementById('randomMax');

    const countInput =
        document.getElementById('randomCount');

    const duplicateInput =
        document.getElementById('allowDuplicates');

    const generateButton =
        document.getElementById('generateRandomNumbers');

    const clearButton =
        document.getElementById('clearRandomNumbers');

    const copyButton =
        document.getElementById('copyRandomNumbers');

    const output =
        document.getElementById('randomNumberOutput');

    const errorBox =
        document.getElementById('randomNumberError');

    const message =
        document.getElementById('randomNumberMessage');


    function getRandomInteger(min, max) {

        if (window.crypto && window.crypto.getRandomValues) {

            const range = max - min + 1;

            if (range <= 0) {
                return min;
            }

            const maxUint = 4294967295;

            const limit =
                maxUint - (maxUint % range);

            const randomArray =
                new Uint32Array(1);

            let randomValue;

            do {

                window.crypto.getRandomValues(randomArray);

                randomValue = randomArray[0];

            } while (randomValue >= limit);

            return min + (randomValue % range);

        }

        return Math.floor(
            Math.random() * (max - min + 1)
        ) + min;

    }


    function calculate() {

        errorBox.classList.add('d-none');

        errorBox.textContent = '';

        message.textContent = '';

        const min =
            Number(minInput.value);

        const max =
            Number(maxInput.value);

        const count =
            Number(countInput.value);


        if (!Number.isFinite(min) ||
            !Number.isFinite(max)) {

            errorBox.textContent =
                'Please enter valid minimum and maximum values.';

            errorBox.classList.remove('d-none');

            return;

        }


        if (!Number.isInteger(min) ||
            !Number.isInteger(max)) {

            errorBox.textContent =
                'Please enter whole numbers for the minimum and maximum values.';

            errorBox.classList.remove('d-none');

            return;

        }


        if (min > max) {

            errorBox.textContent =
                'Minimum value cannot be greater than maximum value.';

            errorBox.classList.remove('d-none');

            return;

        }


        if (!Number.isInteger(count) ||
            count < 1 ||
            count > 100) {

            errorBox.textContent =
                'Number of results must be between 1 and 100.';

            errorBox.classList.remove('d-none');

            return;

        }


        const availableNumbers =
            max - min + 1;


        if (!duplicateInput.checked &&
            count > availableNumbers) {

            errorBox.textContent =
                'There are not enough unique numbers in the selected range.';

            errorBox.classList.remove('d-none');

            return;

        }


        const numbers = [];


        if (duplicateInput.checked) {

            for (let i = 0; i < count; i++) {

                numbers.push(
                    getRandomInteger(min, max)
                );

            }

        } else {

            const used = new Set();

            while (used.size < count) {

                used.add(
                    getRandomInteger(min, max)
                );

            }

            numbers.push(...used);

        }


        output.value =
            numbers.join('\n');

        message.textContent =
            numbers.length +
            ' random number' +
            (numbers.length === 1 ? '' : 's') +
            ' generated successfully.';

    }


    generateButton.addEventListener(
        'click',
        calculate
    );


    clearButton.addEventListener(
        'click',
        function () {

            minInput.value = '1';

            maxInput.value = '100';

            countInput.value = '1';

            duplicateInput.checked = false;

            output.value = '';

            errorBox.textContent = '';

            errorBox.classList.add('d-none');

            message.textContent = '';

        }
    );


    copyButton.addEventListener(
        'click',
        async function () {

            if (!output.value) {

                message.textContent =
                    'Generate random numbers first.';

                return;

            }


            try {

                await navigator.clipboard.writeText(
                    output.value
                );

                message.textContent =
                    'Results copied to clipboard.';

            } catch (error) {

                output.select();

                document.execCommand('copy');

                message.textContent =
                    'Results copied to clipboard.';

            }

        }
    );


    calculate();

});
</script>

@endpush