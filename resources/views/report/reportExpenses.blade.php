@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading">ตารางบันทึกรายจ่าย</div>

                <div class="panel-body">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>


                @endif
                    <form class="form-horizontal" role="form" method="post" action="{{ route('reportIncome') }}">
                        @csrf


                <!-- --------------------------------------------search----------------------------------------------------------->
                <div class="form-group">
                        <form action = "search_income" method = "post">
                            @csrf
                                <label for="date" class="col-md-4 control-label">วันที่บันทึกรายจ่ายจาก </label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control input-sm" name="from" id="from" required/>
                                    </div>
                                <br><br>
                                <label for="date" class="col-md-4 control-label">วันที่บันทึกรายจ่ายถึง </label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control input-sm" name="to" id="to" required/>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="btn" name="search" title="search">
                                            <i class="fa fa-btn fa-search"></i>search
                                        </button>
                                    </div>
                        </form>

                        <!-- ตาราง -->
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">วันที่</th>
                            <th scope="col">ชื่อรายการ</th>
                            <th scope="col">วิธีการรับเงิน</th>
                            <th scope="col">ประเภทรายรับ</th>
                            <th scope="col">จำนวนเงิน(บาท)</th>
                            <th scope="col">รายละเอียดเพิ่มเติม</th>
                            <th scope="col">แก้ไข</th>
                            <th scope="col">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                <th scope="row">{{$expense->expensesDate}}</th>
                                <td>{{$expense->expensesName}}</td>
                                <td>{{$expense->expensesMethod}}</td>
                                <td>{{$expense->expensesType}}</td>
                                <td>{{$expense->expensesAmount}}</td>
                                <td>{{$expense->expensesNote}}</td>
                                <td>
                                    <a href="http://" class="btn btn-success">แก้ไข</a>
                                </td>
                                <td>
                                    <!-- <a href="http://" class="btn btn-danger">ลบ</a> -->
                                    <form action="{{ route('destroyexpense', $expense->id) }}" method = "post">
                                        <button type="submit" class="btn btn-danger"> ลบ </button>
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}

                                    </form>
                                </td>

                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <a href="/expenses" class="btn btn-primary">เพิ่มข้อมูล</a>
                    <a href="/salesReport" class="btn btn-success">กลับเมนูแสดงรายการ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection