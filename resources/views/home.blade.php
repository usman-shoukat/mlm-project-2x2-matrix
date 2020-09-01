@extends('layouts.app')

@section('title', ' | Dashboard')


@section('content')
    <div class="main-grid">

        <div class="social grid">
            <div class="grid-info">
                <div class="col-md-4 top-comment-grid">
                    <div class="comments likes">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info likes-info" style="    text-align: center !important;
    width: 100%  !important;">
                            <h3>{{ $userTotalMembers }}</h3>
                            <a href="#">All Referral User</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div class="col-md-4 top-comment-grid">
                    <div class="comments">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info" style="    text-align: center !important;
    width: 100%  !important;">
                            <h3>{{ $userTotalLeftMembers }}</h3>
                            <a href="#">Left Side User</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 top-comment-grid">
                    <div class="comments tweets">
                        <div class="comments-icon">

                        </div>
                        <div class="comments-info tweets-info" style="    text-align: center !important;
    width: 100%  !important;">
                            <h3>{{ $userTotalRightMembers }}</h3>
                            <a href="#">Right Side User</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>



                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="agile-grids">
            <div class="col-md-4 charts-right">
                <!-- area-chart -->
                <div class="area-grids">
                    <div class="area-grids-heading">
                        <h3>News Update</h3>
                    </div>
 <img src="/images/Banner.jpg"   class="img-fluid" alt="Responsive image"class="rounded" width="300px" height="330px">

                </div>
                <!-- //area-chart -->
            </div>
            <div class="col-md-8 chart-left">
                <!-- updating-data -->
                <div class="agile-Updating-grids">
                    <div class="area-grids-heading">
                        <h3>Updating data</h3>
                    </div>
                    <div id="graph1"></div>
                    <script>
                        var nReloads = 0;
                        function data(offset) {
                            var ret = [];
                            for (var x = 0; x <= 360; x += 10) {
                                var v = (offset + x) % 360;
                                ret.push({
                                    x: x,
                                    y: Math.sin(Math.PI * v / 180).toFixed(4),
                                    z: Math.cos(Math.PI * v / 180).toFixed(4)
                                });
                            }
                            return ret;
                        }
                        var graph = Morris.Line({
                            element: 'graph1',
                            data: data(0),
                            xkey: 'x',
                            ykeys: ['y', 'z'],
                            labels: ['sin()', 'cos()'],
                            parseTime: false,
                            ymin: -1.0,
                            ymax: 1.0,
                            hideHover: true
                        });
                        function update() {
                            nReloads++;
                            graph.setData(data(5 * nReloads));
                            $('#reloadStatus').text(nReloads + ' reloads');
                        }
                        setInterval(update, 100);
                    </script>

                </div>
                <!-- //updating-data -->
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
@stop

@section('css')

@stop

@section('js')

@stop
