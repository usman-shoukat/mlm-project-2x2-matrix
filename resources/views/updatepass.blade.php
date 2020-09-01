@extends('layouts.app')

@section('title', ' | Add Member')



@section('content')
    <div class="main-grid">
        <div class="row">
            <div class="col-md-12">
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                @endif
            </div>
            <div class="col-md-12">
                @if(\Illuminate\Support\Facades\Session::has('error'))
                    <div class="alert alert-danger">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                @endif
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <form method="POST" action="{{ route('changePassword') }}">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <label> <b>Old Password</b></label>
                                        <input type="password" name="oldpassword" class="form-control {{ $errors->has('oldpassword') ? 'is-invalid' : '' }}"">
                                        <div class="input-group-append">
                                            <div class="input-group-text">

                                            </div>
                                        </div>
                                        @if($errors->has('oldpassword'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('oldpassword') }}</strong>
                                            </div>
                                        @endif
                                    </div>



                                    {{-- Password field --}}
                                    <div class="input-group mb-3">
                                        <label> <b>Password</b></label>
                                        <input type="password" name="password"
                                               class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        ">
                                        <div class="input-group-append">
                                            <div class="input-group-text">

                                            </div>
                                        </div>
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Confirm password field --}}
                                    <div class="input-group mb-3">
                                        <label> <b>Password Confirmation</b></label>
                                        <input type="password" name="password_confirmation"
                                               class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                        ">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                            </div>
                                        </div>
                                        @if($errors->has('password_confirmation'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <br>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Update Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">


            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')
    <script>

        $(function () {
            // $('#create-user-form').validate();
        })

    </script>
@stop
