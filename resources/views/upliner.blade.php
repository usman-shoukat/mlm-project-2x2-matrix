@extends('layouts.app')

@section('title', ' | Upliner')


<style>
    /*----------------genealogy-scroll----------*/

    .genealogy-scroll::-webkit-scrollbar {
        width: 5px;
        height: 8px;
    }
    .genealogy-scroll::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: #e4e4e4;
    }
    .genealogy-scroll::-webkit-scrollbar-thumb {
        background: #212121;
        border-radius: 10px;
        transition: 0.5s;
    }
    .genealogy-scroll::-webkit-scrollbar-thumb:hover {
        background: #d5b14c;
        transition: 0.5s;
    }


    /*----------------genealogy-tree----------*/
    .genealogy-body{
        white-space: nowrap;
        overflow-y: hidden;
        padding: 50px;
        min-height: 500px;
        padding-top: 10px;
        margin-left: 50px;
    }
    .genealogy-tree ul {
        padding-top: 20px;
        position: relative;
        padding-left: 0px;
        display: flex;
    }
    .genealogy-tree li {
        float: left; text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
        border:2px;
    }
    .genealogy-tree li::before, .genealogy-tree li::after{
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 2px solid #ccc;
        width: 50%;
        height: 18px;
    }
    .genealogy-tree li::after{
        right: auto; left: 50%;
        border-left: 2px solid #ccc;
    }
    .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
        display: none;
    }
    .genealogy-tree li:only-child{
        padding-top: 0;
    }
    .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
        border: 0 none;
    }
    .genealogy-tree li:last-child::before{
        border-right: 2px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }
    .genealogy-tree li:first-child::after{
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }
    .genealogy-tree ul ul::before{
        content: '';
        position: absolute; top: 0; left: 50%;
        border-left: 2px solid #ccc;
        width: 0; height: 20px;
    }
    .genealogy-tree li a{
        text-decoration: none;
        color: #666;
        font-family: arial, verdana, tahoma;
        font-size: 11px;
        display: inline-block;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border:2px;
    }

    .genealogy-tree li a:hover+ul li::after,
    .genealogy-tree li a:hover+ul li::before,
    .genealogy-tree li a:hover+ul::before,
    .genealogy-tree li a:hover+ul ul::before{
        border-color:  #fbba00;
    }

    /*--------------memeber-card-design----------*/
    .member-view-box{
        padding:0px 40px;
        text-align: center;
        border-radius: 4px;
        position: relative;
    }
    .member-image{
        width: 60px;
        position: relative;
    }
    .member-image img{
        width: 60px;
        height: 60px;
        border-radius: 6px;
        background-color :#000;
        z-index: 1;
    }
</style>
@section('content')
    <div class="main-grid">
        <div class="row">
            <div class="col-md-12">
                <br />
                <h3>Click on image and see your employee tree.</h3>
                <br />
            </div>

            <div class="body genealogy-body genealogy-scroll">
                <div class="genealogy-tree">


                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="member-view-box">
                                    <div class="member-image">
                                        <img src="{{ asset('\images\avatar.png')}}" style=" vertical-align: middle; width: 80px; height: 80px;border-radius: 50%;">                                            <div class="member-details" style="text-align: center;"><br>
                                            <p style="text-align: center;"> <h5>
                                                {{ auth()->user()->email }}</h5></p>
{{auth()->user()->referrals->count()}}

                                        </div>
                                    </div>
                                </div>
                            </a>
                            @if(auth()->user()->referrals->count() > 0)
                                {!! \App\Helpers\UserHelper::treeMemberULHelper(auth()->user()) !!}
                            @else
                                <ul>
                                    <li><a href="#">You have not added any member</a></li>
                                </ul>
                            @endif

                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
    </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function () {
            $('.genealogy-tree ul').hide();
            $('.genealogy-tree>ul').show();
            $('.genealogy-tree ul.active').show();
            $('.genealogy-tree li').on('click', function (e) {
                var children = $(this).find('> ul');
                if (children.is(":visible")) children.hide('fast').removeClass('active');
                else children.show('fast').addClass('active');
                e.stopPropagation();
            });
        });
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

        $(function () {
            // $('#create-user-form').validate();
        })

    </script>
@stop
