@extends('layouts.tool')

@section('title', 'Percentage Change Calculator - Calculate Percent Change')

@section('meta_description', 'Calculate percentage change between two numbers instantly with this free Percentage Change Calculator. Find percentage increase or decrease online.')

@section('canonical', url('/percentage-change-calculator'))

@section('og_title', 'Percentage Change Calculator - Calculate Percent Change')

@section('og_description', 'Calculate the percentage increase or decrease between two values quickly with this free online Percentage Change Calculator.')

@section('og_url', url('/percentage-change-calculator'))

@section('twitter_title', 'Percentage Change Calculator - Calculate Percent Change')

@section('twitter_description', 'Calculate percentage change, increase or decrease between two values with this free online calculator.')

@section('tool_name', 'Percentage Change Calculator')

@section('breadcrumb', 'Percentage Change Calculator')

@section('tool_badge', 'Free Calculator Tool')


@section('tool_content')

<div class="tool-box">

    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <label for="percentageOldValue" class="form-label fw-semibold">
                Original Value
            </label>

            <input
                type="number"
                id="percentageOldValue"
                class="form-control"
                placeholder="Example: 100"
                step="any"
                aria-label="Original value">

        </div>


        <div class="col-md-6">

            <label for="percentageNewValue" class="form-label fw-semibold">
                New Value
            </label>

            <input
                type="number"
                id="percentageNewValue"
                class="form-control"
                placeholder="Example: 125"
                step="any"
                aria-label="New value">

        </div>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-4">

        <button
            type="button"
            id="calculatePercentageChange"
            class="btn btn-primary">
            Calculate Percentage Change
        </button>

        <button
            type="button"
            id="clearPercentageChange"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="percentageChangeError"
        class="alert alert-danger d-none"
        role="alert">
    </div>


    <div class="row g-3">

        <div class="col-md-6">

            <div class="tool-stat-card h-100">

                <div class="tool-stat-label">
                    Percentage Change
                </div>

                <div
                    id="percentageChangeResult"
                    class="tool-stat-value">
                    —
                </div>

            </div>

        </div>


        <div class="col-md-6">

            <div class="tool-stat-card h-100">

                <div class="tool-stat-label">
                    Change Type
                </div>

                <div
                    id="percentageChangeType"
                    class="tool-stat-value">
                    —
                </div>

            </div>

        </div>

    </div>


    <div class="mt-3">

        <div class="tool-stat-card">

            <div class="tool-stat-label">
                Numerical Difference
            </div>

            <div
                id="percentageDifference"
                class="tool-stat-value">
                —
            </div>

        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>Percentage Change Calculator</h2>

    <p>
        A Percentage Change Calculator is a useful online tool for finding the
        percentage difference between an original value and a new value. It
        helps determine how much a number has increased or decreased relative
        to its original value. Percentage change is commonly used in
        mathematics, finance, business, statistics, education, pricing and
        everyday calculations where two values need to be compared.
    </p>

    <p>
        To use this calculator, enter the original value and the new value in
        the two input fields. After entering both numbers, click the Calculate
        Percentage Change button. The calculator determines the numerical
        difference between the values and calculates the percentage change
        based on the original value. The result also indicates whether the
        value increased or decreased.
    </p>

    <p>
        The standard formula for percentage change is the difference between
        the new value and original value divided by the original value,
        multiplied by 100. In mathematical form, percentage change can be
        represented as ((New Value - Original Value) / Original Value) × 100.
        This formula allows you to compare the relative size of a change
        rather than only looking at the numerical difference.
    </p>

    <p>
        For example, if a value changes from 100 to 125, the numerical
        difference is 25. Dividing 25 by the original value of 100 and
        multiplying by 100 gives a percentage change of 25 percent. Since the
        new value is greater than the original value, this represents a
        percentage increase. The calculator performs this calculation
        automatically so you do not have to work through the formula manually.
    </p>

    <p>
        Percentage change is particularly helpful when comparing prices,
        measurements, sales figures, test results and other numerical data.
        A simple difference tells you how many units a value changed, while
        percentage change shows the size of that change relative to the
        starting point. This makes percentage-based comparisons easier across
        datasets where the original values may be different.
    </p>

    <p>
        Students can use a percentage change calculator when learning
        percentages, statistics and basic mathematics. It can also be useful
        for checking homework calculations, understanding changes in values
        and practicing percentage formulas. Teachers and tutors may use the
        calculator as a quick way to verify examples involving percentage
        increases and decreases.
    </p>

    <p>
        Percentage change is also frequently used in business and finance. A
        company may compare sales from one period with another, compare
        expenses between two periods or measure changes in prices. Investors
        may also look at percentage movements when comparing the change in
        prices of financial assets. The meaning of the percentage should
        always be considered together with the original and new values.
    </p>

    <p>
        It is important to identify the original value correctly when
        calculating percentage change. The original value acts as the
        reference point in the standard percentage change formula. If the
        original value is zero, the standard percentage change calculation is
        undefined because division by zero is not possible. This calculator
        therefore requires a non-zero original value.
    </p>


    <h2>How to Calculate Percentage Change</h2>

    <p>
        Start by identifying the original value and the new value. Subtract
        the original value from the new value to find the numerical change.
        Next, divide that change by the original value. Finally, multiply the
        result by 100 to convert the decimal value into a percentage.
        Positive results indicate an increase, while negative results indicate
        a decrease.
    </p>

    <p>
        For example, suppose a number changes from 200 to 160. The difference
        is -40. Dividing -40 by 200 gives -0.20, and multiplying by 100 gives
        -20 percent. This means the value decreased by 20 percent compared
        with the original value. The calculator displays the change type
        separately so the result is easy to understand.
    </p>

    <p>
        Another example is a change from 50 to 75. The difference is 25.
        Dividing 25 by 50 gives 0.5, which becomes 50 percent after
        multiplication by 100. Therefore, the new value represents a 50
        percent increase compared with the original value.
    </p>


    <h2>Percentage Increase and Decrease</h2>

    <p>
        A percentage increase occurs when the new value is greater than the
        original value. For example, if a price increases from 80 to 100, the
        percentage change is positive. A percentage decrease occurs when the
        new value is lower than the original value. For example, if a value
        decreases from 100 to 80, the percentage change is negative.
    </p>

    <p>
        The numerical difference and percentage change provide different
        information. A change of 10 units may be significant when the original
        value is 20, but relatively small when the original value is 1,000.
        Percentage change accounts for the starting value and therefore makes
        relative comparisons more meaningful.
    </p>


    <h2>Common Uses of Percentage Change</h2>

    <p>
        Percentage change calculations are used in many everyday situations.
        You may use them to compare product prices, monthly expenses, website
        traffic, sales numbers, exam scores, population figures, measurements
        or other values that change over time. The calculation is especially
        useful when the absolute difference alone does not provide enough
        context.
    </p>

    <p>
        Businesses can use percentage change to compare performance across
        different periods. Students can use it for mathematical exercises and
        data analysis. Researchers and analysts may use percentage changes to
        describe movements in datasets. Because the formula is straightforward,
        percentage change is one of the most commonly used ways to express
        relative numerical change.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What is percentage change?</h3>

            <p>
                Percentage change measures how much a value has increased or
                decreased relative to its original value.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What is the percentage change formula?</h3>

            <p>
                The standard formula is ((New Value - Original Value) /
                Original Value) × 100.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What does a positive percentage change mean?</h3>

            <p>
                A positive percentage change means that the new value is higher
                than the original value and represents an increase.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What does a negative percentage change mean?</h3>

            <p>
                A negative percentage change means that the new value is lower
                than the original value and represents a decrease.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can the original value be zero?</h3>

            <p>
                The standard percentage change formula cannot calculate a
                percentage change when the original value is zero because it
                requires division by the original value.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Is this Percentage Change Calculator free?</h3>

            <p>
                Yes. This Percentage Change Calculator is free to use online
                and does not require registration or additional software.
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
    "name": "Percentage Change Calculator",
    "url": "{{ url('/percentage-change-calculator') }}",
    "description": "Free online Percentage Change Calculator for calculating percentage increases and decreases between two values.",
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
            "name": "What is percentage change?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Percentage change measures how much a value has increased or decreased relative to its original value."
            }
        },
        {
            "@@type": "Question",
            "name": "What is the percentage change formula?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The standard formula is ((New Value - Original Value) / Original Value) × 100."
            }
        },
        {
            "@@type": "Question",
            "name": "What does a positive percentage change mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A positive percentage change means that the new value is higher than the original value and represents an increase."
            }
        },
        {
            "@@type": "Question",
            "name": "What does a negative percentage change mean?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A negative percentage change means that the new value is lower than the original value and represents a decrease."
            }
        },
        {
            "@@type": "Question",
            "name": "Can the original value be zero?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "The standard percentage change formula cannot calculate a percentage change when the original value is zero because it requires division by the original value."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Percentage Change Calculator free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. This Percentage Change Calculator is free to use online and does not require registration or additional software."
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
            "name": "Percentage Change Calculator",
            "item": "{{ url('/percentage-change-calculator') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const originalInput =
        document.getElementById('percentageOldValue');

    const newInput =
        document.getElementById('percentageNewValue');

    const calculateButton =
        document.getElementById('calculatePercentageChange');

    const clearButton =
        document.getElementById('clearPercentageChange');

    const result =
        document.getElementById('percentageChangeResult');

    const changeType =
        document.getElementById('percentageChangeType');

    const difference =
        document.getElementById('percentageDifference');

    const errorBox =
        document.getElementById('percentageChangeError');


    calculateButton.addEventListener('click', function () {

        errorBox.classList.add('d-none');

        errorBox.textContent = '';


        const original =
            parseFloat(originalInput.value);

        const newValue =
            parseFloat(newInput.value);


        if (!Number.isFinite(original) ||
            !Number.isFinite(newValue)) {

            errorBox.textContent =
                'Please enter both original and new values.';

            errorBox.classList.remove('d-none');

            return;

        }


        if (original === 0) {

            errorBox.textContent =
                'Percentage change cannot be calculated when the original value is zero.';

            errorBox.classList.remove('d-none');

            return;

        }


        const numericalDifference =
            newValue - original;


        const percentageChange =
            (numericalDifference / original) * 100;


        result.textContent =
            percentageChange.toFixed(2) + '%';


        difference.textContent =
            numericalDifference.toFixed(2);


        if (percentageChange > 0) {

            changeType.textContent =
                'Increase';

        } else if (percentageChange < 0) {

            changeType.textContent =
                'Decrease';

        } else {

            changeType.textContent =
                'No Change';

        }

    });


    clearButton.addEventListener('click', function () {

        originalInput.value = '';

        newInput.value = '';

        result.textContent = '—';

        changeType.textContent = '—';

        difference.textContent = '—';

        errorBox.textContent = '';

        errorBox.classList.add('d-none');

    });

});
</script>

@endpush