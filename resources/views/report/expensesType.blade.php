@extends('layouts.app')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
        }
    </style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading">รายจ่าย: กราฟวงกลมแสดงสัดส่วนประเภทของรายจ่าย</div>

                <div class="panel-body">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>


                @endif
                    <form class="form-horizontal" role="form" method="get" action="{{ route('expensesTypePieChart') }}">
                        @csrf

                <!-- --------------------------------------------search----------------------------------------------------------->
                    <div class="form-group">
                        <form action = "expensesTypePieChart" method = "get">
                            @csrf
                                <label for="month" class="col-md-4 control-label">วันที่จาก : </label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control input-sm" name="from" id="from" required/>
                                    </div>

                                    <br><br>
                                    <label for="month" class="col-md-4 control-label">วันที่ถึง : </label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control input-sm" name="to" id="to" required/>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="btn" name="search" title="search">
                                            <i class="fa fa-btn fa-search"></i>ค้นหา
                                        </button>
                                    </div>
                        </form>

                <!-- --------------------------------------------graph----------------------------------------------------------->
                        <script type="text/javascript">
                            var analytics = <?php echo $expensesType; ?>

                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart()
                            {
                                var data = google.visualization.arrayToDataTable(analytics);
                                var options = {
                                    title : 'สัดส่วนประเภทของรายจ่าย'
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
                                chart.draw(data, options);
                            }
                        </script>


                        <div class="container" style="margin-top: 50px;">
                            <div class="row">
                                <!--<div class="col-md-10 col-md-offset-1">
                                    <div class="panel panel-primary">-->
                                        <div class="panel-body" align="center">
                                            <div id="pie_chart" style="width:600px; height:450px;">

                                            </div>
                                        </div>
                                    <!--</div>
                                </div>-->
                            </div>
                        </div>
                        
                    </div>
                    <a href="/income" class="btn btn-primary">เพิ่มข้อมูล</a>
                    <a href="/salesReport" class="btn btn-success">กลับเมนูแสดงรายการ</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection