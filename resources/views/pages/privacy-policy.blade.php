@extends('layouts.app')

@section('title', 'Privacy Policy - FreeTools.online')

@section('meta_description', 'Read the FreeTools.online Privacy Policy to understand how information, cookies and website usage data may be handled.')

@section('canonical', url('/privacy-policy'))

@section('content')

<div class="tool-seo-content container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="tool-content-section">

                <h1>Privacy Policy</h1>

                <p>
                    At <strong>FreeTools.online</strong>, we respect your privacy.
                    This Privacy Policy explains how information may be handled when
                    you use our website and online tools.
                </p>

                <h2>Information We Collect</h2>

                <p>
                    Most tools on FreeTools.online are designed to work directly in
                    your browser. Depending on how you use the website, we may
                    receive limited technical information such as browser type,
                    device information, approximate location, pages visited and
                    general usage information.
                </p>

                <h2>Information You Enter Into Tools</h2>

                <p>
                    Many tools process text or other information directly in your
                    browser. We do not require an account simply to use these tools.
                    You should avoid entering sensitive, confidential or personal
                    information into any online tool unless you are comfortable
                    doing so.
                </p>

                <h2>Cookies</h2>

                <p>
                    FreeTools.online may use cookies or similar technologies for
                    essential website functionality, preferences, analytics and
                    advertising purposes.
                </p>

                <h2>Advertising</h2>

                <p>
                    We may use third-party advertising services to display
                    advertisements on the website. These services may use cookies
                    or similar technologies to provide and measure advertisements
                    according to their own policies.
                </p>

                <h2>Analytics</h2>

                <p>
                    We may use analytics services to understand general website
                    traffic, popular pages and how visitors interact with the
                    website. This information helps us improve our tools and
                    website experience.
                </p>

                <h2>Third-Party Websites</h2>

                <p>
                    Our website may contain links to third-party websites. We are
                    not responsible for the privacy practices, content or policies
                    of external websites.
                </p>

                <h2>Children's Privacy</h2>

                <p>
                    FreeTools.online is intended for general internet users. We do
                    not knowingly request personal information from children for
                    registration or account creation.
                </p>

                <h2>Changes to This Privacy Policy</h2>

                <p>
                    We may update this Privacy Policy from time to time. Any changes
                    will be published on this page.
                </p>

                <h2>Contact</h2>

                <p>
                    If you have questions about this Privacy Policy, please contact
                    us through our
                    <a href="{{ url('/contact-us') }}">Contact Us</a> page.
                </p>

            </div>

        </div>
    </div>
</div>

@endsection