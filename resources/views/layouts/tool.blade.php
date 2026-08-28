<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @if(app()->environment('production'))
        <meta name="google-site-verification" content="eHfdtNyzIOcsld7FRSwSNqFI0ORt5CzgmvbRc3l4W3c">
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    <title>@yield('title') | FreeeTools Online</title>

    <meta name="description" content="@yield('meta_description')">

    <meta name="robots"
          content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <link rel="canonical" href="@yield('canonical', url()->current())">

    <meta name="author" content="FreeeTools Online">

    <meta name="theme-color" content="#ffffff">

    <meta name="application-name" content="FreeeTools Online">

    <meta name="apple-mobile-web-app-title" content="FreeeTools Online">

    <meta name="mobile-web-app-capable" content="yes">

    {{-- Open Graph --}}

    <meta property="og:type" content="website">

    <meta property="og:site_name" content="FreeeTools Online">

    <meta property="og:title"
          content="@yield('og_title', trim($__env->yieldContent('title')) . ' | FreeeTools Online')">

    <meta property="og:description"
          content="@yield('og_description', trim($__env->yieldContent('meta_description')))">

    <meta property="og:url"
          content="@yield('og_url', url()->current())">

    <meta property="og:locale" content="en_US">

    <meta property="og:image"
          content="@yield('og_image', asset('assets/images/og-image.jpg'))">

    <meta property="og:image:alt"
          content="@yield('og_image_alt', trim($__env->yieldContent('title')))">


    {{-- Twitter --}}

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title"
          content="@yield('twitter_title', trim($__env->yieldContent('title')) . ' | FreeeTools Online')">

    <meta name="twitter:description"
          content="@yield('twitter_description', trim($__env->yieldContent('meta_description')))">

    <meta name="twitter:image"
          content="@yield('twitter_image', asset('assets/images/og-image.jpg'))">


    {{-- Bootstrap --}}

    <link rel="stylesheet"
          href="{{ asset('assets/css/bootstrap.min.css') }}">

    {{-- Custom Theme --}}

    <link rel="stylesheet"
          href="{{ asset('assets/css/custom.css') }}">


    @stack('head')


    {{-- Tool Schema --}}

    @hasSection('tool_schema')

        @yield('tool_schema')

    @endif


    {{-- Breadcrumb Schema --}}

    @hasSection('breadcrumb_schema')

        @yield('breadcrumb_schema')

    @endif

</head>


<body>


<header class="site-header border-bottom bg-white">

    <nav class="navbar navbar-expand-lg bg-white">

        <div class="container">

            <a class="navbar-brand fw-bold"
               href="{{ url('/') }}"
               aria-label="FreeeTools Online Home">

                FreeeTools<span class="brand-dot">.</span>Online

            </a>


            <button
                class="navbar-toggler"
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


<main>

    {{-- Breadcrumb --}}

    <div class="container">

        <nav class="tool-breadcrumb"
             aria-label="Breadcrumb">

            <ol class="breadcrumb mb-0">

                <li class="breadcrumb-item">

                    <a href="{{ url('/') }}">
                        Home
                    </a>

                </li>

                <li class="breadcrumb-item active"
                    aria-current="page">

                    @yield('breadcrumb', trim($__env->yieldContent('tool_name')))

                </li>

            </ol>

        </nav>

    </div>


    {{-- Tool Header --}}

    <section class="tool-page-header">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-9 text-center">

                    @hasSection('tool_badge')

                        <div class="tool-page-badge">
                            @yield('tool_badge')
                        </div>

                    @endif


                    <h1 class="tool-page-title">

                        @yield('tool_name')

                    </h1>


                    <p class="tool-page-description">

                        @yield('tool_description')

                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- Tool Area --}}

    <section class="tool-workspace">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-9">

                    @yield('tool_content')

                </div>

            </div>

        </div>

    </section>


    {{-- SEO Content --}}

    @hasSection('seo_content')

        <section class="tool-seo-content">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-9">

                        @yield('seo_content')

                    </div>

                </div>

            </div>

        </section>

    @endif


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


<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

@stack('scripts')

</body>
</html>