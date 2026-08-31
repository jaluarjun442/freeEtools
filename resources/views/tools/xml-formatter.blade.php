@extends('layouts.tool')

@section('title', 'XML Formatter Online - Beautify XML')

@section('meta_description', 'Format and beautify XML online with this free XML Formatter. Clean messy XML, add indentation and make XML data easier to read.')

@section('canonical', url('/xml-formatter'))

@section('og_title', 'XML Formatter Online')

@section('og_description', 'Beautify and format XML data instantly with this free online XML Formatter.')

@section('og_url', url('/xml-formatter'))

@section('twitter_title', 'XML Formatter Online')

@section('twitter_description', 'Format and beautify XML data instantly with this free online XML Formatter.')

@section('tool_name', 'XML Formatter')

@section('breadcrumb', 'XML Formatter')

@section('tool_badge', 'Developer Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-4">

        <label for="xmlInput" class="form-label fw-semibold">
            Enter XML
        </label>

        <textarea
            id="xmlInput"
            class="form-control"
            rows="12"
            placeholder="Paste your XML here..."
            aria-label="XML input"></textarea>

    </div>


    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <label for="xmlIndent" class="form-label fw-semibold">
                Indentation
            </label>

            <select
                id="xmlIndent"
                class="form-select"
                aria-label="XML indentation">

                <option value="2">2 Spaces</option>
                <option value="4">4 Spaces</option>
                <option value="tab">Tab</option>

            </select>

        </div>

        <div class="col-md-6 d-flex align-items-end">

            <button
                type="button"
                id="formatXml"
                class="btn btn-primary w-100">
                Format XML
            </button>

        </div>

    </div>


    <div
        id="xmlError"
        class="alert alert-danger d-none"
        role="alert">
    </div>


    <div class="mb-3">

        <label for="xmlOutput" class="form-label fw-semibold">
            Formatted XML
        </label>

        <textarea
            id="xmlOutput"
            class="form-control"
            rows="14"
            readonly
            aria-label="Formatted XML"></textarea>

    </div>


    <div class="d-flex flex-wrap gap-2">

        <button
            type="button"
            id="copyXml"
            class="btn btn-outline-primary">
            Copy
        </button>

        <button
            type="button"
            id="useOutputXml"
            class="btn btn-outline-secondary">
            Use Output
        </button>

        <button
            type="button"
            id="clearXml"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="xmlMessage"
        class="small text-muted mt-3"
        aria-live="polite">
    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>XML Formatter Online</h2>

    <p>
        XML Formatter is a free online tool for formatting and beautifying
        XML documents. XML is widely used for storing, transporting and
        exchanging structured data between applications and systems. When XML
        is compressed into a single line or has inconsistent indentation, it
        can become difficult to read. This formatter adds proper indentation
        and line breaks so the structure of the XML becomes easier to inspect.
    </p>

    <p>
        Developers frequently work with XML while building APIs, configuration
        files, web services and data exchange systems. Raw XML returned by an
        application may contain very little spacing, making nested elements
        difficult to understand. Formatting the document does not change the
        actual XML structure or data; it simply presents the existing markup
        in a cleaner and more readable form.
    </p>

    <p>
        This XML Formatter can be useful when debugging XML responses,
        reviewing configuration files or checking the structure of a document.
        You can paste XML into the input area and format it with a selected
        indentation size. The formatted result can then be copied and used
        in your development workflow.
    </p>

    <p>
        Proper indentation is especially helpful when an XML document contains
        many nested elements. Parent and child relationships become much
        easier to recognize when each level is displayed on its own line.
        This can save time when reading large XML documents and locating
        particular elements or sections.
    </p>

    <p>
        The formatter runs directly in your browser, making it convenient for
        quick formatting tasks. You do not need to install an XML editor or
        create an account. Simply paste your XML, choose the desired
        indentation and format the document.
    </p>

    <p>
        XML formatting is different from XML validation. Formatting focuses
        primarily on readability, while validation checks whether the XML
        follows the required syntax rules. If you are unsure whether the XML
        is structurally valid, an XML Validator can be used before relying on
        the formatted result.
    </p>


    <h2>What Is XML?</h2>

    <p>
        XML stands for Extensible Markup Language. It is a markup language
        designed to represent structured information using elements and
        attributes. Unlike HTML, which is primarily designed to describe the
        structure of web pages, XML is commonly used to store and transport
        structured data.
    </p>

    <p>
        XML documents use opening and closing tags to describe data. Elements
        can be nested inside other elements, creating a hierarchical structure.
        This structure makes XML suitable for representing complex information
        that needs to be exchanged between different systems.
    </p>


    <h2>Why Format XML?</h2>

    <p>
        Formatting XML improves readability. A document without indentation
        may place hundreds of elements on one line, making it difficult to
        understand the relationship between parent and child elements.
        Indentation and line breaks provide a visual representation of the
        document hierarchy.
    </p>

    <p>
        Developers can also use formatted XML when debugging applications.
        When an API returns an unexpected response, a readable XML document
        makes it easier to locate relevant elements and inspect their values.
    </p>


    <h2>Common Uses of XML Formatting</h2>

    <p>
        XML formatting is commonly used for API responses, configuration
        files, SOAP messages, data exchange documents and application
        settings. It can also be useful when reviewing XML generated by
        another application or service.
    </p>

    <p>
        Students and developers can use a formatter when learning XML or
        working on programming assignments. Instead of manually adding spaces
        and line breaks, the formatter can organize the document automatically.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What does an XML Formatter do?</h3>

            <p>
                An XML Formatter organizes XML with indentation and line breaks
                so that the document structure is easier to read.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Does formatting change XML data?</h3>

            <p>
                Formatting normally changes the presentation of XML rather
                than the underlying element structure and values.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Can I format large XML files?</h3>

            <p>
                You can paste XML into the tool and format it directly in your
                browser. Very large documents may depend on your browser's
                available resources.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>What indentation options are available?</h3>

            <p>
                The tool provides common indentation choices including two
                spaces, four spaces and tabs.
            </p>

        </div>

        <div class="faq-item mb-3">

            <h3>Is XML Formatter free?</h3>

            <p>
                Yes. This XML Formatter is free to use online and does not
                require software installation.
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
    "name": "XML Formatter",
    "url": "{{ url('/xml-formatter') }}",
    "description": "Free online XML Formatter for formatting and beautifying XML documents.",
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
            "name": "XML Formatter",
            "item": "{{ url('/xml-formatter') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('xmlInput');
    const output = document.getElementById('xmlOutput');
    const indent = document.getElementById('xmlIndent');
    const error = document.getElementById('xmlError');
    const message = document.getElementById('xmlMessage');

    const formatButton = document.getElementById('formatXml');
    const copyButton = document.getElementById('copyXml');
    const useOutputButton = document.getElementById('useOutputXml');
    const clearButton = document.getElementById('clearXml');


    function showError(text) {

        error.textContent = text;
        error.classList.remove('d-none');
        message.textContent = '';

    }


    function clearError() {

        error.textContent = '';
        error.classList.add('d-none');

    }


    function getIndentation() {

        if (indent.value === 'tab') {
            return '\t';
        }

        return ' '.repeat(
            Number(indent.value)
        );

    }


    function formatXML(xml) {

        const parser =
            new DOMParser();

        const documentXml =
            parser.parseFromString(
                xml,
                'application/xml'
            );


        const parserError =
            documentXml.querySelector('parsererror');


        if (parserError) {
            throw new Error('Invalid XML syntax.');
        }


        const serializer =
            new XMLSerializer();

        let raw =
            serializer.serializeToString(
                documentXml
            );


        raw =
            raw.replace(
                />\s*</g,
                '><'
            );


        const tokens =
            raw
                .replace(/(>)(<)(\/*)/g, '$1\n$2$3')
                .split('\n');


        let level = 0;

        const space =
            getIndentation();

        const result = [];


        tokens.forEach(function (token) {

            token =
                token.trim();


            if (!token) {
                return;
            }


            if (
                /^<\//.test(token) &&
                level > 0
            ) {
                level--;
            }


            result.push(
                space.repeat(level) + token
            );


            if (
                /^<[^!?\/][^>]*[^\/]>$/.test(token) &&
                !/<\/[^>]+>$/.test(token)
            ) {
                level++;
            }

        });


        return result.join('\n');

    }


    formatButton.addEventListener(
        'click',
        function () {

            clearError();

            output.value = '';

            const value =
                input.value.trim();


            if (!value) {

                showError(
                    'Please enter XML to format.'
                );

                return;

            }


            try {

                output.value =
                    formatXML(value);

                message.textContent =
                    'XML formatted successfully.';

            } catch (e) {

                showError(
                    e.message
                );

            }

        }
    );


    copyButton.addEventListener(
        'click',
        async function () {

            if (!output.value) {

                message.textContent =
                    'Format XML first.';

                return;

            }


            try {

                await navigator.clipboard.writeText(
                    output.value
                );

                message.textContent =
                    'Formatted XML copied.';

            } catch (e) {

                output.select();

                document.execCommand('copy');

                message.textContent =
                    'Formatted XML copied.';

            }

        }
    );


    useOutputButton.addEventListener(
        'click',
        function () {

            if (!output.value) {
                return;
            }

            input.value =
                output.value;

            message.textContent =
                'Output moved to input.';

        }
    );


    clearButton.addEventListener(
        'click',
        function () {

            input.value = '';
            output.value = '';

            clearError();

            message.textContent = '';

            input.focus();

        }
    );

});
</script>

@endpush