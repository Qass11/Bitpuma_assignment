@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="firstname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Firstname') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text"
                                           class="form-control @error('firstname') is-invalid @enderror"
                                           name="firstname" value="{{ old('firstname') }}" required
                                           autocomplete="firstname" autofocus>

                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lastname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Lastname') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                           class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                           value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                                <div class="col-md-6">

                                    <select class="form-select" name="city" required autocomplete="city" autofocus>
                                        <option selected>Chose a City</option>
                                        <option value="utrecht">Utrecht</option>
                                        <option value="amsterdam">Amsterdam</option>
                                        <option value="denhaag">DenHaag</option>
                                    </select>

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-3">

                            </div>

                            <div class="row mb-5">
                                <div class="form-group" style="display: flex; justify-content: space-around; width:75%; margin: auto;">
                                    <label for="animal col-md-4 col-form-label text-md-end">
                                        Favourite animal
                                    </label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                               id="cat" name="animal" value="cat">
                                        <label class="form-check-label" for="cat">
                                            Cat
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                               id="dog" name="animal" value="dog">
                                        <label class="form-check-label" for="dog">
                                            Dog
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                               id="fish" name="animal" value="fish">
                                        <label class="form-check-label" for="fish">
                                            Fish
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-5">
                                    <button type="submit" class="btn btn-outline-info">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
