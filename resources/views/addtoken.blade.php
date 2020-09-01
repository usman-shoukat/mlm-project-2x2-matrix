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
            <form name="randform">
                <input type="button" value="Genrate Token Code" onClick="randomString();">&nbsp;
                <input type="text" name="randomfield" value="">
            </form><br><br><br>
            <script language="javascript" type="text/javascript">
                function randomString() {
                    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
                    var string_length = 8;
                    var randomstring = '';
                    for (var i=0; i<string_length; i++) {
                        var rnum = Math.floor(Math.random() * chars.length);
                        randomstring += chars.substring(rnum,rnum+1);
                    }
                    document.randform.randomfield.value = randomstring;
                }
            </script>

            <div class="col-md-6">
                <div class="panel panel-widget forms-panel">
                    <div class="forms">
                        <div class="form-grids widget-shadow" >
                            <div class="form-title">
                                <h4>Add User Token :</h4>
                            </div>
                            <div class="form-body">
                                <form method="post" action="{{ route('token.save') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="token">User_Id</label>
                                        <input type="text" class="form-control" name="user_id"  placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Token</label>
                                        <input type="text" class="form-control" name="token"  placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name"  placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email </label>
                                        <input type="email" class="form-control"  name="email" required>
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

@stop
