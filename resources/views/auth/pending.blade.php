@extends('layouts.site')
@section('title', 'Application under review | 5StarAcadem')
@section('content')
<section class="status-page section-pad">
    <div class="container status-card">
        <div class="status-icon"><span>✓</span></div>
        <span class="section-kicker">APPLICATION RECEIVED</span>
        <h1>You’re in the<br><em>review queue.</em></h1>
        <p class="status-lede">Thanks, {{ auth()->user()->name }}. Your details are with the 5StarAcadem team. Your learning dashboard will become available as soon as an administrator approves your application.</p>
        <div class="status-steps"><div class="step-done"><span>01</span><p><strong>Details submitted</strong><small>Your application is saved</small></p><b>✓</b></div><div class="step-current"><span>02</span><p><strong>Team review</strong><small>Waiting for approval</small></p><i></i></div><div><span>03</span><p><strong>Start learning</strong><small>Dashboard access opens</small></p><i></i></div></div>
        <div class="status-meta"><span><small>APPLIED WITH</small><strong>{{ auth()->user()->email }}</strong></span><span><small>STATUS</small><strong class="status-pill"><i></i> Pending review</strong></span></div>
        <form method="POST" action="{{ route('logout') }}">@csrf<button class="text-button" type="submit">Sign out</button></form>
    </div>
</section>
@endsection
