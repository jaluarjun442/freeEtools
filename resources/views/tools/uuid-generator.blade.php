@extends('layouts.tool')

@section('title', 'UUID Generator Online - Generate Random UUIDs')

@section('meta_description', 'Generate random UUIDs online with this free UUID Generator. Create unique UUID v4 identifiers instantly and copy them with one click.')

@section('canonical', url('/uuid-generator'))

@section('og_title', 'UUID Generator Online')

@section('og_description', 'Generate unique random UUIDs instantly with this free online UUID Generator.')

@section('og_url', url('/uuid-generator'))

@section('twitter_title', 'UUID Generator Online')

@section('twitter_description', 'Generate random UUIDs instantly with this free online UUID Generator.')

@section('tool_name', 'UUID Generator')

@section('breadcrumb', 'UUID Generator')

@section('tool_badge', 'Developer Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-4">

        <label for="uuidOutput" class="form-label fw-semibold">
            Generated UUID
        </label>

        <textarea
            id="uuidOutput"
            class="form-control"
            rows="4"
            readonly
            aria-label="Generated UUID"
            placeholder="Your UUID will appear here..."></textarea>

    </div>


    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <label for="uuidQuantity" class="form-label fw-semibold">
                Number of UUIDs
            </label>

            <select
                id="uuidQuantity"
                class="form-select"
                aria-label="Number of UUIDs">

                <option value="1">1 UUID</option>
                <option value="5">5 UUIDs</option>
                <option value="10">10 UUIDs</option>
                <option value="20">20 UUIDs</option>
                <option value="50">50 UUIDs</option>

            </select>

        </div>

        <div class="col-md-6">

            <label for="uuidCase" class="form-label fw-semibold">
                Letter Case
            </label>

            <select
                id="uuidCase"
                class="form-select"
                aria-label="UUID letter case">

                <option value="lower">Lowercase</option>
                <option value="upper">Uppercase</option>

            </select>

        </div>

    </div>


    <div class="d-flex flex-wrap gap-2">

        <button
            type="button"
            id="generateUuid"
            class="btn btn-primary">
            Generate UUID
        </button>

        <button
            type="button"
            id="copyUuid"
            class="btn btn-outline-primary">
            Copy
        </button>

        <button
            type="button"
            id="clearUuid"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="uuidMessage"
        class="small text-muted mt-3"
        aria-live="polite">
    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>UUID Generator Online</h2>

    <p>
        UUID Generator is a free online developer tool that allows you to
        generate universally unique identifiers quickly and easily. UUID
        stands for Universally Unique Identifier and is commonly used in
        software applications, databases, APIs, distributed systems and
        development projects. A UUID is represented as a sequence of
        hexadecimal characters separated into groups, making it easy for
        applications to use as an identifier for records and resources.
    </p>

    <p>
        Developers often need unique identifiers when creating database
        records, API resources, application objects, sessions and other
        entities. Instead of manually creating identifiers, a UUID generator
        can create random UUID values instantly. This tool generates UUID
        version 4 values, which are based on randomly generated data and are
        suitable for many general-purpose development scenarios.
    </p>

    <p>
        A UUID is normally displayed using a 36-character textual format,
        including four hyphens. A typical UUID contains hexadecimal
        characters arranged in five groups. The standardized representation
        makes UUIDs easy to store as text and pass between different
        applications and systems. The generated values can be copied and
        used in development environments, database records, API testing and
        other technical workflows.
    </p>

    <p>
        This UUID Generator allows you to generate one or multiple UUIDs at
        once. You can select the number of identifiers you need and choose
        whether the generated UUID values should use lowercase or uppercase
        letters. This can be useful when preparing test data, creating sample
        identifiers or quickly generating unique-looking values for a
        development task.
    </p>

    <p>
        UUIDs are particularly useful in applications where identifiers need
        to be generated independently. Unlike sequential numeric IDs, UUIDs
        can be generated by different application servers without requiring a
        central counter. This characteristic makes them useful in distributed
        applications and systems where multiple services may need to create
        identifiers independently.
    </p>

    <p>
        The UUID Generator works directly in your browser and does not require
        you to install additional software. You can generate UUIDs whenever
        you need them and copy the results with a single click. The simple
        interface is designed for developers, students, testers and anyone
        who needs UUID values for a programming or technical project.
    </p>


    <h2>What Is a UUID?</h2>

    <p>
        A UUID is a Universally Unique Identifier designed to provide an
        identifier with a very low probability of collision. UUIDs are widely
        used by software systems to identify objects, records, resources and
        other entities without depending on a simple sequential number.
    </p>

    <p>
        UUIDs are represented using hexadecimal characters and are commonly
        written in a five-group format separated by hyphens. The standard
        textual representation contains 32 hexadecimal characters and four
        hyphens. Because the format is consistent, UUID values can easily be
        transmitted between applications and stored in databases.
    </p>


    <h2>What Is UUID Version 4?</h2>

    <p>
        UUID version 4 is a commonly used UUID format based primarily on
        randomly generated values. It is useful when an application needs an
        identifier without relying on a timestamp, machine address or
        sequential numbering system.
    </p>

    <p>
        Version 4 UUIDs include specific bits that identify the UUID version
        and variant. The remaining available bits provide the random portion
        of the identifier. This gives version 4 UUIDs a very large identifier
        space and makes accidental collisions extremely unlikely when
        generated using a suitable random source.
    </p>


    <h2>Common Uses of UUIDs</h2>

    <p>
        UUIDs are frequently used as database identifiers. A database table
        can use a UUID as the identifier for a user, order, document, product
        or other record. This can be useful when identifiers need to be
        generated across multiple systems without depending on one central
        sequence.
    </p>

    <p>
        APIs also commonly use unique identifiers to identify resources. For
        example, an API may assign a UUID to each newly created record. The
        identifier can then be included in URLs, requests and responses to
        reference that specific resource.
    </p>

    <p>
        UUIDs can also be useful for testing and development. Developers may
        need sample identifiers while building database schemas, testing API
        endpoints or creating demonstration data. Generating several UUIDs
        at once can save time when preparing test records.
    </p>

    <p>
        Distributed applications can benefit from UUIDs because separate
        services can generate identifiers independently. This can reduce the
        need for a central ID-generation service in situations where globally
        unique identifiers are more convenient than sequential numbers.
    </p>


    <h2>UUID Format</h2>

    <p>
        A standard textual UUID is commonly written in the form
        8-4-4-4-12. This means the hexadecimal characters are divided into
        groups containing 8, 4, 4, 4 and 12 characters, with a hyphen between
        each group. The complete textual representation therefore contains
        36 characters including the four hyphens.
    </p>

    <p>
        UUID formatting is case-insensitive in many applications, meaning
        uppercase and lowercase hexadecimal letters can represent the same
        UUID value. This tool provides both lowercase and uppercase output so
        you can choose the format that fits your development workflow.
    </p>


    <h2>How to Generate a UUID</h2>

    <p>
        To generate a UUID, select how many UUID values you need and choose
        your preferred letter case. Then click the Generate UUID button. The
        tool creates the requested UUID values and displays them in the result
        area.
    </p>

    <p>
        After generating the identifiers, you can use the Copy button to copy
        the results to your clipboard. This makes it convenient to move UUIDs
        into source code, database tools, API testing applications,
        configuration files or other development environments.
    </p>


    <h2>UUIDs for Development and Testing</h2>

    <p>
        During software development, temporary unique identifiers are often
        required for testing forms, APIs, databases and application logic.
        A UUID generator provides a convenient way to create these values
        without manually constructing them.
    </p>

    <p>
        Generated UUIDs can be useful as sample values, but developers should
        still follow the identifier requirements of the application they are
        building. Some systems require a particular UUID version, database
        type, formatting convention or cryptographically secure source of
        randomness.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What does UUID stand for?</h3>

            <p>
                UUID stands for Universally Unique Identifier. It is a
                standardized identifier format commonly used by software
                applications and databases.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What type of UUID does this tool generate?</h3>

            <p>
                This tool generates UUID version 4 identifiers using randomly
                generated values.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>How long is a UUID?</h3>

            <p>
                A UUID contains 32 hexadecimal characters and is commonly
                displayed with four hyphens, resulting in 36 characters in
                its standard textual representation.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can I generate multiple UUIDs?</h3>

            <p>
                Yes. You can select the number of UUIDs you want to generate
                and create multiple identifiers at the same time.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can UUIDs use uppercase letters?</h3>

            <p>
                Yes. The tool supports both lowercase and uppercase
                hexadecimal UUID output.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Are UUIDs guaranteed to be unique?</h3>

            <p>
                UUIDs are designed to make collisions extremely unlikely,
                but no randomly generated identifier should be described as
                mathematically guaranteed to never collide.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Is this UUID Generator free?</h3>

            <p>
                Yes. The UUID Generator is free to use online and does not
                require an account or software installation.
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
    "name": "UUID Generator",
    "url": "{{ url('/uuid-generator') }}",
    "description": "Free online UUID Generator for generating random UUID version 4 identifiers.",
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
            "name": "What does UUID stand for?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "UUID stands for Universally Unique Identifier. It is a standardized identifier format commonly used by software applications and databases."
            }
        },
        {
            "@@type": "Question",
            "name": "What type of UUID does this tool generate?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "This tool generates UUID version 4 identifiers using randomly generated values."
            }
        },
        {
            "@@type": "Question",
            "name": "How long is a UUID?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A UUID contains 32 hexadecimal characters and is commonly displayed with four hyphens, resulting in 36 characters in its standard textual representation."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I generate multiple UUIDs?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. You can select the number of UUIDs you want to generate and create multiple identifiers at the same time."
            }
        },
        {
            "@@type": "Question",
            "name": "Can UUIDs use uppercase letters?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The tool supports both lowercase and uppercase hexadecimal UUID output."
            }
        },
        {
            "@@type": "Question",
            "name": "Are UUIDs guaranteed to be unique?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "UUIDs are designed to make collisions extremely unlikely, but no randomly generated identifier should be described as mathematically guaranteed to never collide."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this UUID Generator free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The UUID Generator is free to use online and does not require an account or software installation."
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
            "name": "UUID Generator",
            "item": "{{ url('/uuid-generator') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const output =
        document.getElementById('uuidOutput');

    const quantity =
        document.getElementById('uuidQuantity');

    const uuidCase =
        document.getElementById('uuidCase');

    const generateButton =
        document.getElementById('generateUuid');

    const copyButton =
        document.getElementById('copyUuid');

    const clearButton =
        document.getElementById('clearUuid');

    const message =
        document.getElementById('uuidMessage');


    function generateSingleUUID() {

        if (
            typeof crypto !== 'undefined' &&
            typeof crypto.randomUUID === 'function'
        ) {

            return crypto.randomUUID();

        }


        const bytes =
            new Uint8Array(16);

        crypto.getRandomValues(bytes);


        bytes[6] =
            (bytes[6] & 0x0f) | 0x40;

        bytes[8] =
            (bytes[8] & 0x3f) | 0x80;


        const hex =
            Array.from(bytes, function (byte) {

                return byte
                    .toString(16)
                    .padStart(2, '0');

            }).join('');


        return (
            hex.substring(0, 8) +
            '-' +
            hex.substring(8, 12) +
            '-' +
            hex.substring(12, 16) +
            '-' +
            hex.substring(16, 20) +
            '-' +
            hex.substring(20)
        );

    }


    function generateUUIDs() {

        const count =
            Number(quantity.value);

        const selectedCase =
            uuidCase.value;

        const uuids = [];


        for (let i = 0; i < count; i++) {

            let uuid =
                generateSingleUUID();


            if (selectedCase === 'upper') {

                uuid =
                    uuid.toUpperCase();

            }


            uuids.push(uuid);

        }


        output.value =
            uuids.join('\n');


        message.textContent =
            count === 1
                ? 'UUID generated successfully.'
                : count + ' UUIDs generated successfully.';

    }


    generateButton.addEventListener(
        'click',
        generateUUIDs
    );


    copyButton.addEventListener(
        'click',
        async function () {

            if (!output.value) {

                message.textContent =
                    'Generate a UUID first.';

                return;

            }


            try {

                await navigator.clipboard.writeText(
                    output.value
                );

                message.textContent =
                    'UUID copied to clipboard.';

            } catch (error) {

                output.select();

                document.execCommand('copy');

                message.textContent =
                    'UUID copied to clipboard.';

            }

        }
    );


    clearButton.addEventListener(
        'click',
        function () {

            output.value = '';

            message.textContent = '';

        }
    );


    uuidCase.addEventListener(
        'change',
        function () {

            if (!output.value) {
                return;
            }


            const lines =
                output.value.split('\n');


            if (uuidCase.value === 'upper') {

                output.value =
                    lines
                        .map(function (uuid) {
                            return uuid.toUpperCase();
                        })
                        .join('\n');

            } else {

                output.value =
                    lines
                        .map(function (uuid) {
                            return uuid.toLowerCase();
                        })
                        .join('\n');

            }

        }
    );


    generateUUIDs();

});
</script>

@endpush