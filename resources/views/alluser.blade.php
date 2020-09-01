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

            <form  method="get" action="{{ route('sreach') }}">

                {{csrf_field()}}

                <input type="text" name="search" value="">
                <button type="submit" class="btn btn-default w3ls-button" style="width: 20%;">Submit</button>
            </form>





            <br><br><br>






            <br><br><br>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Add balances</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>

                    <th scope="row"> {{ $user->id }}</th>
                    <td>   {{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td> {{ $user->mobile }}</td>
                    <td>  <form  method="post" action="{{ url('/add', [$user->id]) }}">

                            {{csrf_field()}}

                            <input type="text" name="balance" value="{{ $user->balance }}">
                            <button type="submit" class="btn btn-default w3ls-button" style="width: 20%;">Add balances</button>
                        </form></td>
                </tr>
                @endforeach
                </tbody>
            </table>

        {{ $users->links() }}
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
