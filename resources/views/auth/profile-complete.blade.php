@extends('layouts.site')
@section('title', 'Complete your learner profile | 5StarAcadem')
@section('content')
<section class="form-page section-pad">
    <div class="container form-layout">
        <div class="form-story"><span class="section-kicker">STEP 1 · YOUR APPLICATION</span><h1>Let’s get to<br><em>know you.</em></h1><p>Share a few details so our team can review your request and help you find the right weekend batch.</p><div class="form-promise"><span>✳</span><p><strong>Your details stay with our team.</strong><br>We use this information to review your 5StarAcadem application.</p></div></div>
        <form class="form-card" method="POST" action="{{ route('profile.save') }}">
            @csrf
            <div class="form-card-heading"><span class="section-kicker">LEARNER DETAILS</span><h2>Complete your profile</h2><p>All fields are required.</p></div>
            <label for="name">Full name</label><input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" autocomplete="name" required maxlength="120">
            @error('name') <span class="field-error">{{ $message }}</span> @enderror
            <label for="email">Google account</label><input id="email" type="email" value="{{ auth()->user()->email }}" disabled>
            <label for="phone">Phone number</label><input id="phone" name="phone" type="tel" value="{{ old('phone', auth()->user()->phone) }}" autocomplete="tel" placeholder="Include country code if useful" required maxlength="30">
            @error('phone') <span class="field-error">{{ $message }}</span> @enderror
            <label for="education">Education</label><input id="education" name="education" type="text" value="{{ old('education', auth()->user()->education) }}" placeholder="Your current or highest qualification" required maxlength="150">
            @error('education') <span class="field-error">{{ $message }}</span> @enderror
            <label for="location">Location</label><input id="location" name="location" type="text" value="{{ old('location', auth()->user()->location) }}" autocomplete="address-level2" placeholder="City or town" required maxlength="150">
            @error('location') <span class="field-error">{{ $message }}</span> @enderror
            <button class="button button-dark form-submit" type="submit">Submit for review <span aria-hidden="true">↗</span></button>
            <p class="form-footnote">Your course dashboard opens after an administrator approves your application.</p>
        </form>
    </div>
</section>
@endsection
