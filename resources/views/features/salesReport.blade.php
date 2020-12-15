@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sales Report</div> 

                <div class="panel-body">

                    <!--button link to income page-->
                    <form class="form-horizontal" role="form" method="get" action="{{ route('reportIncome') }}">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-lg btn-block">ตารางบันทึกรายรับ</button>
                            </div>
                        </div>    
                    
                    </form>

                    <form class="form-horizontal" role="form" method="get" action="{{ route('incomeTypePieChart') }}">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> 
                                <button type="submit" class="btn btn-success btn-lg btn-block">กราฟวงกลมแสดงสัดส่วนประเภทรายรับ</button>
                            </div>
                        </div>
                    
                    </form>

                    <form class="form-horizontal" role="form" method="get" action="{{ route('incomeMethodPieChart') }}">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> 
                                <button type="submit" class="btn btn-success btn-lg btn-block">กราฟวงกลมแสดงสัดส่วนวิธีการรับเงิน</button>
                            </div>
                        </div>
                    
                    </form>


                    
                    <!--button link to expenses page-->
                    <form class="form-horizontal" role="form" method="get" action="{{ route('reportExpenses') }}">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">ตารางบันทึกรายจ่าย</button>
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal" role="form" method="get" action="{{ route('expensesTypePieChart') }}">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> 
                                <button type="submit" class="btn btn-danger btn-lg btn-block">กราฟวงกลมแสดงสัดส่วนประเภทรายจ่าย</button>
                            </div>
                        </div>
                    
                    </form>

                    <form class="form-horizontal" role="form" method="get" action="{{ route('expensesMethodPieChart') }}">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> 
                                <button type="submit" class="btn btn-danger btn-lg btn-block">กราฟวงกลมแสดงสัดส่วนวิธีการจ่ายเงิน</button>
                            </div>
                        </div>
                    
                    </form>


                   

                    <!--button link to stock-->
                    <!-- <form>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-warning btn-lg btn-block">รายงานยอดขาย</button>
                            </div>
                        </div>
                        <br>
                    </form> -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection