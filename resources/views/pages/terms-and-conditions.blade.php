@extends('layouts.app')

@section('title', 'Terms and Conditions - FreeTools.online')

@section('meta_description', 'Read the Terms and Conditions for using FreeTools.online and its free online tools and services.')

@section('canonical', url('/terms-and-conditions'))

@section('content')

<div class="tool-seo-content container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="tool-content-section">

                <h1>Terms and Conditions</h1>

                <p>
                    By accessing and using <strong>FreeTools.online</strong>, you
                    agree to comply with these Terms and Conditions. If you do not
                    agree with these terms, please do not use the website.
                </p>

                <h2>Use of the Website</h2>

                <p>
                    FreeTools.online provides online tools for general informational,
                    educational and utility purposes. You may use the website only
                    for lawful purposes.
                </p>

                <h2>Tool Results</h2>

                <p>
                    Our tools are provided for convenience. While we aim to provide
                    accurate and useful results, we do not guarantee that every result
                    will always be complete, accurate or suitable for a particular
                    purpose.
                </p>

                <p>
                    You are responsible for reviewing and verifying results before
                    relying on them for important decisions or activities.
                </p>

                <h2>Acceptable Use</h2>

                <p>
                    You agree not to misuse the website, interfere with its operation,
                    attempt unauthorized access, introduce malicious code or use the
                    website for unlawful activities.
                </p>

                <h2>Intellectual Property</h2>

                <p>
                    The website design, branding, original content and other website
                    materials may be protected by applicable intellectual property
                    laws. You may not reproduce or redistribute protected website
                    materials without appropriate permission.
                </p>

                <h2>Third-Party Links</h2>

                <p>
                    FreeTools.online may provide links to third-party websites.
                    These websites operate independently and we are not responsible
                    for their content, availability or policies.
                </p>

                <h2>Availability</h2>

                <p>
                    We may modify, suspend or discontinue any tool or part of the
                    website at any time without prior notice.
                </p>

                <h2>Limitation of Liability</h2>

                <p>
                    To the maximum extent permitted by applicable law, FreeTools.online
                    shall not be responsible for losses or damages resulting from the
                    use of the website or reliance on tool results.
                </p>

                <h2>Changes to These Terms</h2>

                <p>
                    These Terms and Conditions may be updated from time to time.
                    Continued use of the website after changes are published means
                    you accept the updated terms.
                </p>

                <h2>Contact</h2>

                <p>
                    For questions about these terms, please visit our
                    <a href="{{ url('/contact-us') }}">Contact Us</a> page.
                </p>

            </div>

        </div>
    </div>
</div>

@endsection