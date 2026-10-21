<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#132e28">
    <meta name="description" content="Small weekend Tally and Excel classes with industry-led, real-data practice at 5StarAcadem.">
    <title>@yield('title', '5StarAcadem | Tally + Excel Training')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="{{ route('home') }}" aria-label="5StarAcadem home">
                <span class="brand-mark"><span>5</span></span>
                <span class="brand-name">5Star<span>Academ</span></span>
            </a>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="{{ route('home') }}#programs">Programs</a>
                <a href="{{ route('home') }}#format">Class format</a>
                <a href="{{ route('home') }}#about">Our approach</a>
            </nav>
            <div class="nav-actions">
                @auth
                    @if (auth()->user()->isAdmin())
                        <a class="button button-outline button-small" href="{{ route('admin.approvals') }}">Admin console</a>
                    @elseif (auth()->user()->isApproved())
                        <a class="button button-outline button-small" href="{{ route('dashboard') }}">My learning</a>
                    @elseif (auth()->user()->hasCompletedProfile())
                        <a class="button button-outline button-small" href="{{ route('approval.pending') }}">Application status</a>
                    @else
                        <a class="button button-outline button-small" href="{{ route('profile.complete') }}">Continue application</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">@csrf<button class="text-button" type="submit">Sign out</button></form>
                @else
                    <a class="text-button nav-login" href="{{ route('login') }}">Log in</a>
                    <a class="button button-dark button-small" href="{{ route('google.redirect') }}">Apply for a seat <span aria-hidden="true">↗</span></a>
                @endauth
            </div>
        </div>
    </header>

    @if (session('success') || session('error'))
        <div class="container flash-wrap">
            @if (session('success')) <div class="flash flash-success" role="status">{{ session('success') }}</div> @endif
            @if (session('error')) <div class="flash flash-error" role="alert">{{ session('error') }}</div> @endif
        </div>
    @endif

    <main>@yield('content')</main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <a class="brand brand-footer" href="{{ route('home') }}"><span class="brand-mark"><span>5</span></span><span class="brand-name">5Star<span>Academ</span></span></a>
            <p>Practical skills. Personal attention. Real work.</p>
        </div>
        <div class="container footer-legal"><span>© {{ date('Y') }} 5StarAcadem</span><span>Tally + Excel weekend training</span></div>
    </footer>
</body>
</html>
