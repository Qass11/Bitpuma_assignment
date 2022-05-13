@extends('records.layout')
@section('content')

    <div class="container p-3">
        <div class="card">
            <div class="card-header text-center">
                <h3>Update het gegevens</h3>
            </div>

            <div class="card-body">
                <form action="{{ url('records/' .$records->id) }}" method="post">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$records->id}}" id="id"/>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                       id="firstname" name="firstname" placeholder="firstname"
                                       value="{{$records->firstname}}" aria-describedby="firstnameHelp" required>
                                <label for="floatingInput">Firstname</label>

                                @error('firstname')
                                <div id="firstnameHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('lastname') is-invalid @enderror"
                                       id="lastname" name="firstname" placeholder="lastname"
                                       value="{{$records->lastname}}" aria-describedby="lastnameHelp" required>
                                <label for="floatingInput">Lastname</label>

                                @error('lastname')
                                <div id="lastnameHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                       name="email" placeholder="email" value="{{$records->email}}"
                                       aria-describedby="emailHelp" required>
                                <label for="floatingInput">E-mail</label>

                                @error('email')
                                <div id="emailHelp" class="form-text color-red">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <select class="form-select" name="city" required autocomplete="city" autofocus>
                                    <option name="{{$records->city}}" selected>
                                        {{$records->city}}
                                    </option>
                                    {{--                                    <option selected>Chose a City</option>--}}
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

                        <div class="row mb-5">
                            <div class="form-group"
                                 style="display: flex; justify-content: space-around; width:75%; margin: auto;">
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

                        <br>
                        <div class="d-grid col-6 mx-auto">
                            <input type="submit" value="Update" class="btn btn-success"></br>
                        </div>
                </form>
            </div>
        </div>
    </div>
@stop
