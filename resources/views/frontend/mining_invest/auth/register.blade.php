@extends('frontend::layouts.auth')

@section('title')
    {{ __('Register') }}
@endsection

@section('content')

    <!-- Registration Section -->
    <section class="section-style site-auth grad-overlay" style="background: url({{ asset('frontend/theme_base/mining_invest/materials/banners/auth-banner.jpg') }}) no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-md-12">
                    <div class="auth-content">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset(setting('site_logo', 'global')) }}" alt="Site Logo" /></a>
                        </div>
                        <div class="title">
                            <h2>{{ $data['title'] }}</h2>
                            <p>{{ $data['bottom_text'] }}</p>
                        </div>
                        
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <strong>{{ __('Error:') }} {{ $error }}</strong><br>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="site-auth-form">
                            <form method="POST" action="{{ route('register') }}" class="row">
                                @csrf

                                <!-- First Name -->
                                <div class="col-md-6">
                                    <div class="single-field">
                                        <label for="first_name">{{ __('First Name') }}<span class="required-field">*</span></label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="box-input" required />
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6">
                                    <div class="single-field">
                                        <label for="last_name">{{ __('Last Name') }}<span class="required-field">*</span></label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="box-input" required />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="single-field">
                                        <label for="email">{{ __('Email Address') }}<span class="required-field">*</span></label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="box-input" required />
                                    </div>
                                </div>

                                <!-- Username (Optional) -->
                                @if (getPageSetting('username_show'))
                                    <div class="col-md-6">
                                        <div class="single-field">
                                            <label for="username">{{ __('Username') }}<span class="required-field">*</span></label>
                                            <input type="text" name="username" value="{{ old('username') }}" class="box-input" required />
                                        </div>
                                    </div>
                                @endif

                                <!-- Country Selection -->
                                @if (getPageSetting('country_show'))
                                    <div class="col-md-6">
                                        <div class="single-field">
                                            <label for="country">{{ __('Select Country') }}<span class="required-field">*</span></label>
                                            <select name="country" id="countrySelect" class="site-nice-select">
                                                @foreach(getCountries() as $country)
                                                    <option value="{{ $country['name'] . ':' . $country['dial_code'] }}" @if($location->country_code === $country['code']) selected @endif>
                                                        {{ $country['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif

                                <!-- Phone Number -->
                                @if (getPageSetting('phone_show'))
                                    <div class="col-md-6">
                                        <div class="single-field">
                                            <label for="phone">{{ __('Phone Number') }}<span class="required-field">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="dial-code">{{ $location->dial_code }}</span>
                                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- Referral Code -->
                                @if (getPageSetting('referral_code_show'))
                                    <div class="col-md-6">
                                        <div class="single-field">
                                            <label for="invite">{{ __('Referral Code') }}</label>
                                            <input type="text" name="invite" value="{{ request('invite') ?? old('invite') }}" class="box-input" />
                                        </div>
                                    </div>
                                @endif

                                <!-- Password -->
                                <div class="col-md-6">
                                    <div class="single-field">
                                        <label for="password">{{ __('Password') }}<span class="required-field">*</span></label>
                                        <input type="password" name="password" class="box-input" required />
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-md-6">
                                    <div class="single-field">
                                        <label for="password_confirmation">{{ __('Confirm Password') }}<span class="required-field">*</span></label>
                                        <input type="password" name="password_confirmation" class="box-input" required />
                                    </div>
                                </div>

                                

                                <!-- Agreement -->
                                <div class="col-md-12">
                                    <div class="single-field">
                                        <input type="checkbox" name="i_agree" value="yes" id="agree" required />
                                        <label for="agree">
                                            {{ __('I agree with') }} 
                                            <a href="{{ url('/privacy-policy') }}">{{ __('Privacy & Policy') }}</a> 
                                            {{ __('and') }} 
                                            <a href="{{ url('/terms-and-conditions') }}">{{ __('Terms & Condition') }}</a>.
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-md-12">
                                    <button type="submit" class="site-btn-big primary-btn w-100">{{ __('Create Account') }}</button>
                                </div>
                            </form>

                            <!-- Already have an account -->
                            <div class="signup-text">
                                <p>{{ __('Already have an account?') }} <a href="{{ route('login') }}">{{ __('Login') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Registration Section End -->

@endsection

@section('script')
    <!-- Cloudflare Turnstile Script -->
    
    <script>
        $('#countrySelect').on('change', function () {
            var country = $(this).val();
            $('#dial-code').html(country.split(':')[1]);
        });
    </script>
@endsection