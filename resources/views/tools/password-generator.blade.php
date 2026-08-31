@extends('layouts.tool')

@section('title', 'Password Generator Online - Create Strong Passwords')

@section('meta_description', 'Generate strong and secure random passwords online with this free Password Generator. Customize password length, numbers, symbols and letters instantly.')

@section('canonical', url('/password-generator'))

@section('og_title', 'Password Generator Online - Create Strong Passwords')

@section('og_description', 'Create strong random passwords with customizable length, letters, numbers and symbols using this free online Password Generator.')

@section('og_url', url('/password-generator'))

@section('twitter_title', 'Password Generator Online - Create Strong Passwords')

@section('twitter_description', 'Generate strong random passwords online with custom length, numbers, symbols and letters.')

@section('tool_name', 'Password Generator')

@section('breadcrumb', 'Password Generator')

@section('tool_badge', 'Free Security Tool')


@section('tool_content')

<div class="tool-box">

    <div class="mb-4">

        <label for="passwordLength" class="form-label fw-semibold">
            Password Length
        </label>

        <div class="d-flex align-items-center gap-3">

            <input
                type="range"
                id="passwordLength"
                class="form-range"
                min="4"
                max="64"
                value="16"
                aria-label="Password length">

            <span
                id="passwordLengthValue"
                class="fw-bold"
                style="min-width:35px;">
                16
            </span>

        </div>

    </div>


    <div class="row g-3 mb-4">

        <div class="col-md-6">

            <div class="form-check">

                <input
                    class="form-check-input"
                    type="checkbox"
                    id="includeUppercase"
                    checked>

                <label
                    class="form-check-label"
                    for="includeUppercase">
                    Uppercase Letters (A-Z)
                </label>

            </div>

        </div>


        <div class="col-md-6">

            <div class="form-check">

                <input
                    class="form-check-input"
                    type="checkbox"
                    id="includeLowercase"
                    checked>

                <label
                    class="form-check-label"
                    for="includeLowercase">
                    Lowercase Letters (a-z)
                </label>

            </div>

        </div>


        <div class="col-md-6">

            <div class="form-check">

                <input
                    class="form-check-input"
                    type="checkbox"
                    id="includeNumbers"
                    checked>

                <label
                    class="form-check-label"
                    for="includeNumbers">
                    Numbers (0-9)
                </label>

            </div>

        </div>


        <div class="col-md-6">

            <div class="form-check">

                <input
                    class="form-check-input"
                    type="checkbox"
                    id="includeSymbols"
                    checked>

                <label
                    class="form-check-label"
                    for="includeSymbols">
                    Symbols (!@#$...)
                </label>

            </div>

        </div>

    </div>


    <div class="mb-4">

        <label
            for="generatedPassword"
            class="form-label fw-semibold">
            Generated Password
        </label>

        <div class="input-group">

            <input
                type="text"
                id="generatedPassword"
                class="form-control"
                readonly
                aria-label="Generated password">

            <button
                type="button"
                id="copyPassword"
                class="btn btn-outline-secondary">
                Copy
            </button>

        </div>

    </div>


    <div class="d-flex flex-wrap gap-2">

        <button
            type="button"
            id="generatePassword"
            class="btn btn-primary">
            Generate Password
        </button>

        <button
            type="button"
            id="clearPassword"
            class="btn btn-outline-secondary">
            Clear
        </button>

    </div>


    <div
        id="passwordMessage"
        class="small text-muted mt-3"
        aria-live="polite">
    </div>

</div>

@endsection


@section('seo_content')

<div class="tool-content-section">

    <h2>Password Generator</h2>

    <p>
        A Password Generator is an online tool that creates random passwords
        using a combination of letters, numbers and special characters. Strong
        passwords are an important part of protecting online accounts because
        they make it more difficult for unauthorized users to guess or
        repeatedly try common password combinations. This free Password
        Generator provides a quick way to create a random password whenever
        you need one.
    </p>

    <p>
        Using the generator is simple. Choose the password length and select
        the types of characters you want to include. You can use uppercase
        letters, lowercase letters, numbers and symbols. After selecting your
        preferences, click the Generate Password button and a new random
        password will be created. You can generate another password whenever
        you want a different combination.
    </p>

    <p>
        Password length is an important part of password strength. A longer
        password generally provides a larger number of possible combinations
        than a short password. This tool allows you to choose a password length
        between 4 and 64 characters, giving you flexibility for different
        account requirements. When a website supports longer passwords, using
        a sufficiently long and unique password can be helpful.
    </p>

    <p>
        Adding different character types can also increase the number of
        possible password combinations. Depending on the requirements of the
        website or application, you can include uppercase letters, lowercase
        letters, numbers and symbols. Some websites have specific password
        rules, so you should always make sure that the generated password
        follows the requirements of the service where you intend to use it.
    </p>

    <p>
        A password generator can be useful when creating passwords for email
        accounts, social media accounts, online services, websites,
        applications and other systems that require authentication. Instead
        of creating a predictable password based on a name, date or familiar
        word, a random password can provide a less obvious combination of
        characters.
    </p>

    <p>
        It is generally a good practice to use a different password for each
        important account. Reusing the same password across multiple services
        can create additional risk if one service experiences a data breach.
        If the same password is used elsewhere, an exposed password could
        potentially be attempted against other accounts. Unique passwords
        reduce the impact of a compromised password.
    </p>

    <p>
        Password managers can also make it easier to use strong and unique
        passwords. Remembering many long random passwords can be difficult,
        so a reputable password manager can store credentials and help fill
        them when required. For important accounts, enabling multi-factor
        authentication where available can provide an additional layer of
        account protection.
    </p>

    <p>
        This Password Generator works directly in your browser and does not
        require an account or software installation. The generator creates
        passwords using JavaScript in the browser. This makes it convenient
        for quickly creating passwords on a desktop, laptop, tablet or mobile
        device. You can generate a password, copy it and use it where required.
    </p>


    <h2>How to Use the Password Generator</h2>

    <p>
        Start by selecting the desired password length using the length
        slider. Longer passwords can contain more characters and are usually
        preferable when the website or application allows them. The selected
        length is displayed next to the slider so you can easily confirm the
        size of the password before generating it.
    </p>

    <p>
        Next, choose the character types you want to include. You can enable
        uppercase letters, lowercase letters, numbers and symbols. For a
        general strong-password setup, using a combination of multiple
        character types can provide a wider range of possible passwords.
        Finally, click Generate Password to create the password.
    </p>

    <p>
        After the password is generated, it appears in the password field.
        You can use the Copy button to copy the generated value to your
        clipboard. If you want another password, simply click Generate
        Password again. The Clear button removes the generated password and
        resets the output field.
    </p>

    <h2>Why Use a Random Password?</h2>

    <p>
        Predictable passwords can be easier to guess because they may contain
        common words, names, dates or simple patterns. A randomly generated
        password avoids many of these predictable patterns by selecting
        characters from the character sets you choose. The result is useful
        when you need a password that is difficult to create manually.
    </p>

    <p>
        A strong password is only one part of good account security. You
        should also keep passwords private, avoid sharing credentials with
        others and use additional security features such as multi-factor
        authentication when they are available. For particularly important
        accounts, consider using a password manager to create and store unique
        credentials.
    </p>


    <h2>Frequently Asked Questions</h2>

    <div class="tool-faq">

        <div class="faq-item mb-3">

            <h3>What is a Password Generator?</h3>

            <p>
                A Password Generator creates random passwords using selected
                combinations of letters, numbers and symbols.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>How long should a password be?</h3>

            <p>
                Password length depends on the service, but longer passwords
                generally provide more possible combinations. Always follow
                the password requirements of the website or application.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can I include numbers in the password?</h3>

            <p>
                Yes. You can enable the Numbers option to include digits from
                0 through 9 in the generated password.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Can I include special characters?</h3>

            <p>
                Yes. Enable the Symbols option to include special characters
                in the generated password.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Should I use the same password everywhere?</h3>

            <p>
                It is better to use unique passwords for different important
                accounts so that one compromised password does not affect
                multiple services.
            </p>

        </div>


        <div class="faq-item mb-3">

            <h3>Is this Password Generator free?</h3>

            <p>
                Yes. This Password Generator is free to use online and does
                not require registration or software installation.
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
    "name": "Password Generator",
    "url": "{{ url('/password-generator') }}",
    "description": "Free online Password Generator for creating random passwords with letters, numbers and symbols.",
    "applicationCategory": "SecurityApplication",
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
            "name": "What is a Password Generator?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A Password Generator creates random passwords using selected combinations of letters, numbers and symbols."
            }
        },
        {
            "@@type": "Question",
            "name": "How long should a password be?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Password length depends on the service, but longer passwords generally provide more possible combinations. Always follow the password requirements of the website or application."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I include numbers in the password?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "@@type": "Answer",
                "text": "Yes. You can enable the Numbers option to include digits from 0 through 9 in the generated password."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I include special characters?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Enable the Symbols option to include special characters in the generated password."
            }
        },
        {
            "@@type": "Question",
            "name": "Should I use the same password everywhere?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "It is better to use unique passwords for different important accounts so that one compromised password does not affect multiple services."
            }
        },
        {
            "@@type": "Question",
            "name": "Is this Password Generator free?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. This Password Generator is free to use online and does not require registration or software installation."
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
            "name": "Password Generator",
            "item": "{{ url('/password-generator') }}"
        }
    ]
}
</script>

@endsection


@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const lengthInput = document.getElementById('passwordLength');

    const lengthValue = document.getElementById('passwordLengthValue');

    const uppercase = document.getElementById('includeUppercase');

    const lowercase = document.getElementById('includeLowercase');

    const numbers = document.getElementById('includeNumbers');

    const symbols = document.getElementById('includeSymbols');

    const output = document.getElementById('generatedPassword');

    const generateButton = document.getElementById('generatePassword');

    const copyButton = document.getElementById('copyPassword');

    const clearButton = document.getElementById('clearPassword');

    const message = document.getElementById('passwordMessage');


    const upperChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    const lowerChars = 'abcdefghijklmnopqrstuvwxyz';

    const numberChars = '0123456789';

    const symbolChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';


    lengthInput.addEventListener('input', function () {

        lengthValue.textContent = lengthInput.value;

    });


    function generatePassword() {

        let characters = '';

        let password = '';


        if (uppercase.checked) {
            characters += upperChars;
        }

        if (lowercase.checked) {
            characters += lowerChars;
        }

        if (numbers.checked) {
            characters += numberChars;
        }

        if (symbols.checked) {
            characters += symbolChars;
        }


        if (!characters.length) {

            message.textContent =
                'Please select at least one character type.';

            output.value = '';

            return;

        }


        const length = parseInt(lengthInput.value, 10);


        if (window.crypto && window.crypto.getRandomValues) {

            const randomValues =
                new Uint32Array(length);

            window.crypto.getRandomValues(randomValues);


            for (let i = 0; i < length; i++) {

                password +=
                    characters[randomValues[i] % characters.length];

            }

        } else {

            for (let i = 0; i < length; i++) {

                password +=
                    characters[Math.floor(
                        Math.random() * characters.length
                    )];

            }

        }


        output.value = password;

        message.textContent =
            'Password generated successfully.';

    }


    generateButton.addEventListener(
        'click',
        generatePassword
    );


    copyButton.addEventListener('click', async function () {

        if (!output.value) {

            message.textContent =
                'Generate a password first.';

            return;

        }


        try {

            await navigator.clipboard.writeText(
                output.value
            );

            message.textContent =
                'Password copied to clipboard.';

        } catch (error) {

            output.select();

            document.execCommand('copy');

            message.textContent =
                'Password copied to clipboard.';

        }

    });


    clearButton.addEventListener('click', function () {

        output.value = '';

        message.textContent = '';

    });


    generatePassword();

});
</script>

@endpush