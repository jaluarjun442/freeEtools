@extends('layouts.tool')

@section('title', 'JWT Decoder Online - Decode JSON Web Tokens')

@section('meta_description', 'Decode JWT tokens online and view the header and payload in readable JSON format. Free JWT Decoder for developers and API testing.')

@section('canonical', url('/jwt-decoder'))

@section('og_title', 'JWT Decoder Online - Decode JSON Web Tokens')

@section('og_description', 'Decode JSON Web Tokens and inspect JWT headers and payloads with this free online JWT Decoder.')

@section('og_url', url('/jwt-decoder'))

@section('twitter_title', 'JWT Decoder Online - Decode JSON Web Tokens')

@section('twitter_description', 'Decode and inspect JWT header and payload data quickly with this free online JWT Decoder.')

@section('tool_name', 'JWT Decoder')

@section('breadcrumb', 'JWT Decoder')

@section('tool_badge', 'Free Developer Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-3">

        <label for="jwtInput" class="form-label fw-semibold">
            Enter JWT Token
        </label>

        <textarea
            id="jwtInput"
            class="form-control"
            rows="8"
            placeholder="Paste your JWT token here..."
            aria-label="Enter JWT token"></textarea>

        <div class="form-text">
            Paste a JWT token containing a header, payload and signature.
        </div>

    </div>


    <div class="d-flex flex-wrap gap-2 mb-4">

        <button
            type="button"
            id="jwtDecode"
            class="btn btn-primary">
            Decode JWT
        </button>

        <button
            type="button"
            id="jwtClear"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div id="jwtError"
         class="alert alert-danger d-none"
         role="alert">
    </div>


    <div class="row g-3">

        <div class="col-lg-6">

            <div class="tool-stat-card h-100">

                <div class="tool-stat-label mb-2">
                    Header
                </div>

                <pre
                    id="jwtHeader"
                    class="mb-0"
                    style="white-space:pre-wrap;word-break:break-word;">—</pre>

            </div>

        </div>


        <div class="col-lg-6">

            <div class="tool-stat-card h-100">

                <div class="tool-stat-label mb-2">
                    Payload
                </div>

                <pre
                    id="jwtPayload"
                    class="mb-0"
                    style="white-space:pre-wrap;word-break:break-word;">—</pre>

            </div>

        </div>

    </div>


    <div class="mt-3">

        <div class="tool-stat-card">

            <div class="tool-stat-label mb-2">
                Signature
            </div>

            <div
                id="jwtSignature"
                style="word-break:break-all;">
                —
            </div>

        </div>

    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>JWT Decoder Online</h2>

    <p>
        A JWT Decoder is an online developer tool that allows you to decode a
        JSON Web Token and inspect its readable header and payload information.
        JSON Web Tokens, commonly known as JWTs, are widely used in modern web
        applications, APIs and authentication systems. When a JWT is available,
        this tool can make its encoded structure easier to inspect without
        requiring a separate software application.
    </p>

    <p>
        A JSON Web Token normally consists of three sections separated by
        periods. These sections are the header, payload and signature. The
        header generally contains information about the token type and signing
        algorithm, while the payload contains claims or other data. The
        signature is used as part of the token's integrity and authentication
        mechanism. This decoder separates these sections and displays the
        header and payload in a more readable JSON format.
    </p>

    <p>
        To use the JWT Decoder, paste your token into the input field and click
        the Decode JWT button. The tool reads the token structure and attempts
        to decode the Base64URL-encoded header and payload. If the token has a
        valid basic JWT structure, the decoded information is displayed in the
        corresponding sections. You can clear the current token and inspect
        another JWT whenever required.
    </p>

    <p>
        JWT decoding is particularly useful during application development and
        API debugging. Developers may need to inspect claims such as issuer,
        subject, audience, expiration time or other application-specific data.
        Looking at the decoded payload can help developers understand what data
        is contained inside a token while troubleshooting authentication and
        authorization flows.
    </p>

    <p>
        It is important to understand that decoding a JWT is not the same as
        verifying it. A JWT payload can generally be decoded without knowing
        the secret key used to sign the token. Therefore, the information shown
        by a decoder should not automatically be considered authentic or
        trustworthy. Signature verification requires the appropriate algorithm,
        key and verification process.
    </p>

    <p>
        JWTs are often used in applications that communicate through APIs.
        After successful authentication, an application may issue a token that
        contains claims describing the authenticated session or user context.
        The client can then send the token with subsequent requests. During
        development, decoding the token can help identify whether expected
        claims and values are present.
    </p>

    <p>
        The JWT Decoder works directly in the browser for the decoding
        operation. It does not require a separate desktop application,
        registration or complicated setup. This makes it convenient when you
        need to quickly inspect a token during development, testing or API
        troubleshooting.
    </p>

    <p>
        You should still take care when working with JWTs. Tokens can contain
        sensitive information depending on how an application creates them.
        Avoid pasting production authentication tokens into websites or tools
        unless you understand the privacy implications and have permission to
        inspect the token. For sensitive environments, local development tools
        may be preferable.
    </p>


    <h2>What Is a JWT?</h2>

    <p>
        JSON Web Token is a compact token format used to securely transmit
        information between parties in a JSON-based structure. A JWT commonly
        contains three parts: header, payload and signature. Each part is
        separated by a period, producing a token that can be transmitted
        conveniently through HTTP requests and other application protocols.
    </p>

    <p>
        The header describes metadata about the token, including information
        such as the signing algorithm and token type. The payload contains
        claims. Claims can represent information such as an issuer, subject,
        audience, expiration timestamp or application-specific values. The
        exact claims depend on the application that generated the token.
    </p>


    <h2>JWT Decoder vs JWT Verification</h2>

    <p>
        Decoding and verification are two different operations. A decoder
        simply transforms the encoded header and payload into readable data.
        Verification checks whether the token's signature is valid according
        to the expected signing algorithm and cryptographic key. A token that
        can be decoded is not necessarily a token that should be trusted.
    </p>

    <p>
        This distinction is important when testing authentication systems.
        Developers can use a decoder to inspect token contents, but production
        applications should always perform appropriate server-side validation
        and signature verification before trusting security-sensitive claims.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What is a JWT Decoder?</h3>

            <p>
                A JWT Decoder is a tool that decodes the readable header and
                payload sections of a JSON Web Token.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>What are the three parts of a JWT?</h3>

            <p>
                A JWT normally contains a header, payload and signature,
                separated by periods.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Does decoding a JWT verify the token?</h3>

            <p>
                No. Decoding only makes the encoded data readable. It does not
                verify the token signature or prove that the token is authentic.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can I decode a JWT without the secret key?</h3>

            <p>
                Yes. The header and payload can generally be decoded without
                knowing the secret key because JWT encoding is not the same as
                encryption.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can JWTs contain sensitive information?</h3>

            <p>
                Yes. Depending on the application, a JWT payload may contain
                information that should not be publicly exposed. Avoid sharing
                sensitive production tokens unnecessarily.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Is this JWT Decoder free?</h3>

            <p>
                Yes. The JWT Decoder is free to use online and does not require
                registration or additional software.
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
    "name": "JWT Decoder",
    "url": "{{ url('/jwt-decoder') }}",
    "description": "Free online JWT Decoder for decoding JSON Web Token headers and payloads.",
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
            "name": "What is a JWT Decoder?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A JWT Decoder is a tool that decodes the readable header and payload sections of a JSON Web Token."
            }
        },
        {
            "@@type": "Question",
            "name": "What are the three parts of a JWT?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A JWT normally contains a header, payload and signature, separated by periods."
            }
        },
        {
            "@@type": "Question",
            "name": "Does decoding a JWT verify the token?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. Decoding only makes the encoded data readable. It does not verify the token signature or prove that the token is authentic."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I decode a JWT without the secret key?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The header and payload can generally be decoded without knowing the secret key because JWT encoding is not the same as encryption."
            }
        },
        {
            "@@type": "Question",
            "name": "Can JWTs contain sensitive information?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Depending on the application, a JWT payload may contain information that should not be publicly exposed. Avoid sharing sensitive production tokens unnecessarily."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this JWT Decoder free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. The JWT Decoder is free to use online and does not require registration or additional software."
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
            "name": "JWT Decoder",
            "item": "{{ url('/jwt-decoder') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('jwtInput');

    const decodeButton = document.getElementById('jwtDecode');

    const clearButton = document.getElementById('jwtClear');

    const headerOutput = document.getElementById('jwtHeader');

    const payloadOutput = document.getElementById('jwtPayload');

    const signatureOutput = document.getElementById('jwtSignature');

    const errorBox = document.getElementById('jwtError');


    function base64UrlDecode(value) {

        let base64 = value
            .replace(/-/g, '+')
            .replace(/_/g, '/');

        while (base64.length % 4 !== 0) {
            base64 += '=';
        }

        const binary = atob(base64);

        const bytes = Uint8Array.from(
            binary,
            function (char) {
                return char.charCodeAt(0);
            }
        );

        return new TextDecoder('utf-8').decode(bytes);
    }


    function formatJson(value) {

        try {

            return JSON.stringify(
                JSON.parse(value),
                null,
                4
            );

        } catch (error) {

            return value;

        }

    }


    decodeButton.addEventListener('click', function () {

        errorBox.classList.add('d-none');

        errorBox.textContent = '';

        headerOutput.textContent = '—';

        payloadOutput.textContent = '—';

        signatureOutput.textContent = '—';


        const token = input.value.trim();


        if (!token) {

            errorBox.textContent = 'Please enter a JWT token.';

            errorBox.classList.remove('d-none');

            return;

        }


        const parts = token.split('.');


        if (parts.length !== 3) {

            errorBox.textContent =
                'Invalid JWT structure. A JWT should contain three parts separated by periods.';

            errorBox.classList.remove('d-none');

            return;

        }


        try {

            const header = base64UrlDecode(parts[0]);

            const payload = base64UrlDecode(parts[1]);


            headerOutput.textContent = formatJson(header);

            payloadOutput.textContent = formatJson(payload);

            signatureOutput.textContent = parts[2];


        } catch (error) {

            errorBox.textContent =
                'Unable to decode the JWT. Please check the token format.';

            errorBox.classList.remove('d-none');

        }

    });


    clearButton.addEventListener('click', function () {

        input.value = '';

        headerOutput.textContent = '—';

        payloadOutput.textContent = '—';

        signatureOutput.textContent = '—';

        errorBox.textContent = '';

        errorBox.classList.add('d-none');

    });

});
</script>

@endpush