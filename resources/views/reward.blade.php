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
<center><h1>Business Level </h1></center>
            <br>
            <div class="container">
                <div class="row">
                    <h3>1: Sliver  </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Phone which have 15000 price  so level your left side and right side business.If your lower side business is equal to 8 Lakh. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\phone.png')}}" style=" vertical-align: middle; width: 80px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>2: Sliver Plus  </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Laptop which have 25000 price  so level your left side and right side business.If your lower side business is equal to 22 Lakh.For getting rank Sliver should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\laptop.png')}}" style=" vertical-align: middle; width: 80px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>3: Gold   </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive china bike so level your left side and right side business.If your lower side business is equal to 40 Lakh.For getting rank Sliver Plus should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\bike.png')}}" style=" vertical-align: middle; width: 90px; height: 90px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>4: Gold Plus  </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive 125 Honda so level your left side and right side business.If your lower side business is equal to 65 Lakh.For getting rank Gold should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\bike125.png')}}" style=" vertical-align: middle; width: 100px; height: 100px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>5: Platinum   </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Umrah so level your left side and right side business.If your lower side business is equal to 1 CR 25 Lakh.For getting rank Gold Plus should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\umrah.png')}}" style=" vertical-align: middle; width: 80px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>6: Platinum plus   </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Iphone latest Model so level your left side and right side business.If your lower side business is equal to  2 CR 50 Lakh.For getting rank Platinum should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\iphone.jpg')}}" style=" vertical-align: middle; width: 80px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>7: Professional   </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive 7 Day Baku Tour so level your left side and right side business.If your lower side business is equal to  5 CR.For getting rank Platinum Plus should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\baku.png')}}" style=" vertical-align: middle; width: 130px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>8: Professional Plus    </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Bolt Bike so level your left side and right side business.If your lower side business is equal to  10 CR.For getting rank Professional should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\bolt.jpg')}}" style=" vertical-align: middle; width: 130px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>9: Manager     </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Car so level your left side and right side business.If your lower side business is equal to  25 CR.For getting rank Professional Plus should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\car.png')}}" style=" vertical-align: middle; width: 130px; height: 130px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>10: General Manager     </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive 40 Lakh cash so level your left side and right side business.If your lower side business is equal to  50 CR.For getting rank Manager should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\cash.jpg')}}" style=" vertical-align: middle; width: 100px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>11: Director   </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive KIA Sportage so level your left side and right side business.If your lower side business is equal to  85 CR.For getting rank General Manager should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\kia.jpg')}}" style=" vertical-align: middle; width: 120px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>12: Diamond    </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive 1.25 CR House so level your left side and right side business.If your lower side business is equal to  115 CR.For getting rank Director should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\house.png')}}" style=" vertical-align: middle; width: 120px; height: 80px;">
                    </div>

                </div>

            </div>
            <br>
            <div class="container">
                <div class="row">
                    <h3>13: Grand Diamond    </h3>

                    <div class="col-sm-6">
                        <p>Hey sir, If you want to achive Fourtuner Car so level your left side and right side business.If your lower side business is equal to  150 CR.For getting rank Diamond should have one in your lesser side. </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{ asset('\images\fourtuner.png')}}" style=" vertical-align: middle; width: 120px; height: 80px;">
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
