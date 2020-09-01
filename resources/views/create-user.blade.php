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
            <div class="col-md-12">
                @if ($errors->any())

                    <ul class="form-error-list-on-top">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif
            </div>
            <div class="col-md-6">
    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class="form-grids widget-shadow" data-example-id="basic-forms">
                <div class="form-title">
                    <h4>Add Member :</h4>
                </div>
                <div class="form-body">
                    <form method="post" action="{{ route('user.save') }}" enctype="multipart/form-data" id="create-user-form">
                        @csrf
                        <div class="form-group">
                            <label for="token">Token</label>
                            <input type="text" class="form-control" name="token" id="token" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" id="password" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Phone</label>
                            <input  type="tel" pattern="^\d{3}\d{3}\d{4}$" class="form-control" name="mobile" id="password" placeholder="" required>
                        </div>
                        <button type="submit" class="btn btn-default w3ls-button" style="width: 20%;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">

            <div class="form-group row">
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

            </div>
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
