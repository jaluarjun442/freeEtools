@extends('layouts.app')


@section('title')
FreeeTools Online - Free Online Tools for Everyone
@endsection


@section('meta_description')
FreeeTools Online offers free online tools for text, SEO, developers, converters, generators, formatting, encoding and everyday tasks. Fast, simple and easy-to-use tools with no complicated setup.
@endsection


@section('canonical', url('/'))


@section('og_title')
FreeeTools Online - Free Online Tools for Everyone
@endsection


@section('og_description')
Free online tools for text, SEO, developers, converters, generators, formatting, encoding and everyday tasks.
@endsection


@section('og_url', url('/'))


@section('twitter_title')
FreeeTools Online - Free Online Tools for Everyone
@endsection


@section('twitter_description')
Free online tools for text, SEO, developers, converters, generators and everyday tasks.
@endsection


@section('content')

    {{-- =========================================================
         HERO
    ========================================================== --}}

    <section class="home-hero">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">

                    <span class="hero-badge">
                        200+ Free Online Tools
                    </span>

                    <h1 class="hero-title">
                        Free Online Tools for Everyone
                    </h1>

                 

                </div>
            </div>

        </div>
    </section>


    {{-- =========================================================
         TOOL GRID
    ========================================================== --}}

    <section class="tools-section">
        <div class="container">

            <div class="section-heading">
                <div>
                    <h2 class="section-title">
                        All Online Tools
                    </h2>

                    <p class="section-description">
                        Choose a free tool to get started.
                    </p>
                </div>

                <div class="tool-count">
                    <span id="toolCount">0</span> Tools
                </div>
            </div>


            {{-- =================================================
                 TOOLS
            ================================================== --}}

            <div class="row g-3" id="toolsGrid">
                @php
                    $tools = config('tools');
                @endphp


                @foreach($tools as $tool)

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 tool-item"
                         data-tool-name="{{ strtolower($tool['name']) }}"
                         data-tool-category="{{ strtolower($tool['category']) }}">

                        <a href="{{ url('/' . $tool['slug']) }}"
                           class="tool-card"
                           aria-label="Open {{ $tool['name'] }}">

                            <div class="tool-icon" aria-hidden="true">
                                {{ $tool['icon'] }}
                            </div>

                            <h3 class="tool-name">
                                {{ $tool['name'] }}
                            </h3>

                            <p class="tool-description">
                                {{ $tool['description'] }}
                            </p>

                        </a>

                    </div>

                @endforeach

            </div>


            {{-- No Search Results --}}

            <div id="noToolsFound"
                 class="text-center py-5 d-none">

                <div class="empty-icon">
                    ⌕
                </div>

                <h3 class="h5 fw-bold">
                    No tools found
                </h3>

                <p class="text-muted mb-0">
                    Try searching for another tool.
                </p>

            </div>

        </div>
    </section>


    {{-- =========================================================
         ABOUT / SEO CONTENT
    ========================================================== --}}

    <section class="home-info-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <h2>
                        Free Online Tools
                    </h2>

                    <p>
                        FreeeTools Online provides a growing collection of
                        simple and useful online tools that can be used directly
                        from your browser. Whether you need to work with text,
                        format data, generate values, convert information or
                        perform common developer and SEO tasks, you can find
                        a suitable tool here.
                    </p>

                    <p>
                        Our tools are designed to be quick and easy to use.
                        Most tools work directly in your browser without
                        requiring complicated software, registration or
                        unnecessary setup. This makes FreeeTools Online useful
                        for students, developers, writers, SEO professionals,
                        designers and everyday internet users.
                    </p>

                    <p>
                        The collection includes text tools, developer tools,
                        SEO tools, converters, encoders, generators, formatting
                        tools and many other utilities. New tools can be added
                        regularly so the website can continue to provide a
                        convenient collection of free online utilities in one
                        place.
                    </p>

                </div>
            </div>

        </div>
    </section>

@endsection


{{-- =============================================================
     HOMEPAGE STRUCTURED DATA
============================================================= --}}

@section('schema')

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "FreeeTools Online",
    "url": "{{ url('/') }}",
    "description": "Free online tools for text, SEO, developers, converters, generators and everyday tasks.",
    "inLanguage": "en-US",
    "potentialAction": {
        "@@type": "SearchAction",
        "target": "{{ url('/') }}?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>


<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Organization",
    "name": "FreeeTools Online",
    "url": "{{ url('/') }}"
}
</script>

@endsection


{{-- =============================================================
     HOMEPAGE JAVASCRIPT
============================================================= --}}

@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('toolSearch');
    const toolItems = document.querySelectorAll('.tool-item');
    const toolCount = document.getElementById('toolCount');
    const noToolsFound = document.getElementById('noToolsFound');

    function updateToolCount() {
        let visibleCount = 0;

        toolItems.forEach(function (item) {
            if (!item.classList.contains('d-none')) {
                visibleCount++;
            }
        });

        toolCount.textContent = visibleCount;

        if (visibleCount === 0) {
            noToolsFound.classList.remove('d-none');
        } else {
            noToolsFound.classList.add('d-none');
        }
    }

    updateToolCount();

  
});
</script>

@endpush