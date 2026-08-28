<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @if(app()->environment('production'))
        <meta name="google-site-verification" content="eHfdtNyzIOcsld7FRSwSNqFI0ORt5CzgmvbRc3l4W3c">
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    <title>@yield('title', 'FreeeTools Online - Free Online Tools')</title>

    <meta name="description"
          content="@yield('meta_description', 'Free online tools for text, SEO, developers, converters, generators and everyday tasks. Fast, simple and easy-to-use tools.')">

    <meta name="robots"
          content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    <meta name="googlebot"
          content="@yield('googlebot', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    <meta name="bingbot"
          content="@yield('bingbot', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

    <link rel="canonical" href="@yield('canonical', url()->current())">

    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <meta name="application-name" content="FreeeTools Online">
    <meta name="apple-mobile-web-app-title" content="FreeeTools Online">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="FreeeTools Online">
    <meta property="og:title" content="@yield('og_title', 'FreeeTools Online - Free Online Tools')">
    <meta property="og:description" content="@yield('og_description', 'Free online tools for text, SEO, developers, converters, generators and everyday tasks.')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:locale" content="en_US">

    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @else
        <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    @endif

    <meta property="og:image:alt"
          content="@yield('og_image_alt', 'FreeeTools Online - Free Online Tools')">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
          content="@yield('twitter_title', 'FreeeTools Online - Free Online Tools')">
    <meta name="twitter:description"
          content="@yield('twitter_description', 'Free online tools for text, SEO, developers, converters, generators and everyday tasks.')">
    <meta name="twitter:image"
          content="@yield('twitter_image', asset('assets/images/og-image.jpg'))">

    {{-- Author --}}
    <meta name="author" content="FreeeTools Online">

    {{-- DNS / Performance --}}
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    {{-- Bootstrap --}}
    <link rel="stylesheet"
          href="{{ asset('assets/css/bootstrap.min.css') }}">

    {{-- Main Custom CSS --}}
    <link rel="stylesheet"
          href="{{ asset('assets/css/custom.css') }}">

    @stack('head')

    {{-- Website Structured Data --}}
    @hasSection('schema')
        @yield('schema')
    @else
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "WebSite",
            "name": "FreeeTools Online",
            "url": "{{ url('/') }}",
            "description": "Free online tools for text, SEO, developers, converters, generators and everyday tasks.",
            "potentialAction": {
                "@@type": "SearchAction",
                "target": {
                    "@@type": "EntryPoint",
                    "urlTemplate": "{{ url('/') }}?q={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }
        }
        </script>
    @endif
</head>

<body>

    {{-- Header --}}
    <header class="site-header border-bottom">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">

                <a class="navbar-brand fw-bold"
                   href="{{ url('/') }}"
                   aria-label="FreeeTools Online Home">
                    FreeeTools<span class="brand-dot">.</span>Online
                </a>

                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mainNavbar"
                        aria-controls="mainNavbar"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ url('/about-us') }}">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ url('/contact-us') }}">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>


    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>


    {{-- Footer --}}
   <footer class="site-footer border-top bg-white mt-5">
    <div class="container py-4">

        <div class="row align-items-center">

            <div class="col-md-6">
              <div class="small mb-2">
                    <a href="{{ url('/about-us') }}" class="btm_link text-muted text-decoration-none me-3">
                        About Us
                    </a>

                    <a href="{{ url('/contact-us') }}" class="btm_link text-muted text-decoration-none me-3">
                        Contact Us
                    </a>

                    <a href="{{ url('/privacy-policy') }}" class="btm_link text-muted text-decoration-none me-3">
                        Privacy Policy
                    </a>

                    <a href="{{ url('/terms-and-conditions') }}" class="btm_link text-muted text-decoration-none me-3">
                        Terms
                    </a>

                    <a href="{{ url('/disclaimer') }}" class="btm_link text-muted text-decoration-none me-3">
                        Disclaimer
                    </a>
                    <a href="{{ url('/sitemap.xml') }}" class="btm_link text-muted text-decoration-none">
                        Sitemap
                    </a>
                </div>
            </div>

            <div class="col-md-6 text-md-end mt-3 mt-md-0">

                

                <div class="small text-muted">
                    © {{ date('Y') }} FreeTools Online. All rights reserved.
                </div>

            </div>

        </div>

    </div>
</footer>


    {{-- Bootstrap JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>
</html>