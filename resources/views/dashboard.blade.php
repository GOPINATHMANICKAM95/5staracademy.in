@extends('layouts.site')
@section('title', 'Your learning dashboard | 5StarAcadem')
@section('content')
<section class="dashboard-page section-pad">
    <div class="container">
        <div class="dashboard-welcome"><div><span class="section-kicker">YOUR 5STARACADEM SPACE</span><h1>Welcome in,<br><em>{{ auth()->user()->name }}.</em></h1><p>Your application is approved. Explore your learning path and get ready to practise.</p></div><div class="approved-badge"><span>✓</span><p><strong>Access approved</strong><small>You're ready to learn</small></p></div></div>
        <div class="dashboard-grid">
            <article class="dashboard-course dashboard-course-dark"><span class="course-label">YOUR LEARNING PATH · 01</span><span class="course-icon">T</span><h2>Tally training</h2><p>Build confidence in accounts, GST workflows, inventory and business reporting.</p><div class="dashboard-tags"><span>Accounting basics</span><span>GST & e-invoicing</span><span>MIS reports</span></div><div class="course-status"><span>WEEKEND BATCH</span><span class="status-pill status-pill-light"><i></i> Approved</span></div></article>
            <article class="dashboard-course dashboard-course-lime"><span class="course-label">YOUR LEARNING PATH · 02</span><span class="course-icon">X</span><h2>Excel training</h2><p>Move from everyday spreadsheets to modern analysis and clear business reports.</p><div class="dashboard-tags"><span>Formulas & lookups</span><span>PivotTables</span><span>Excel 365</span></div><div class="course-status"><span>WEEKEND BATCH</span><span class="status-pill"><i></i> Approved</span></div></article>
        </div>
        <div class="dashboard-note"><span class="note-number">i</span><p><strong>Batch details will be shared by the 5StarAcadem team.</strong><br>Each batch is limited to 10–12 learners, with two-hour weekend morning sessions and hands-on practice.</p></div>
        <div class="dashboard-profile"><div><span class="section-kicker">YOUR PROFILE</span><h2>Application details</h2></div><dl><div><dt>Phone</dt><dd>{{ auth()->user()->phone }}</dd></div><div><dt>Education</dt><dd>{{ auth()->user()->education }}</dd></div><div><dt>Location</dt><dd>{{ auth()->user()->location }}</dd></div></dl></div>
    </div>
</section>
@endsection
