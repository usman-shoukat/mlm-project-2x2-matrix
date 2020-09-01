@extends('layouts.app')

@section('title', ' | Dashboard')


@section('content')
    <div class="main-grid">

        <div class="social grid">
            <div class="grid-info">
                <div class="col-md-3 top-comment-grid">
                    <div class="comments likes">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info likes-info">
                            <h3> {{auth()->user()->btcx}}</h3>
                            <a href="#">Btcx</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div class="col-md-3 top-comment-grid">
                    <div class="comments">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info">
                            <h3>{{auth()->user()->balance}}</h3>
                            <a href="#">Total Balances</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 top-comment-grid">
                    <div class="comments tweets">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info tweets-info">
                            <h3>0</h3>
                            <a href="#">Right Side Business</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 top-comment-grid">
                    <div class="comments">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info">
                            <h3>0</h3>
                            <a href="#">Left Side Business</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>


                <div class="clearfix"> </div>
            </div>
        </div>
        <h1>Withdraw</h1><br><br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Withdraw
        </button>
       <br><br>

        <h1>Withdraw Records</h1><br><br>
        <table class="table">
            <thead>
            <tr>

                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Amount</th>
                <th scope="col">Date & Time</th>
            </tr>
            </thead>
            <tbody>



            </tbody>
        </table>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Withdraw Form</h4>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <p>Withdraw Form Show Only When Month Is Close.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Drop</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Apply For Withdraw</button>
                </div>

            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
