@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading">บันทึกรายรับ</div>

                <div class="panel-body">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>


                @endif
                    <form class="form-horizontal" role="form" method="post" action="{{ route('reportIncome') }}">
                        @csrf


                    <div class="form-group">
                        <label class="col-md-4 control-label">เดือน : </label>
                        <div class="col-md-6">
                            <select type="select" class="form-control" name="method" id="method">
                            <option value="01">มกราคม</option>
                            <option value="02">กุมภาพันธ์</option>
                            <option value="03">มีนาคม</option>
                            <option value="04">เมษายน</option>
                            <option value="05">พฤษภาคม</option>
                            <option value="06">มิถุนายน</option>
                            <option value="07">กรกฎาคม</option>
                            <option value="08">สิงหาคม</option>
                            <option value="09">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>
                            </select>
                        </div>

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
                            @foreach($incomes ?? '' as $row)
                                <tr>
                                <th scope="row">{{$row->incomeDate}}</th>
                                <td>{{$row->incomeName}}</td>
                                <td>{{$row->incomeMethod}}</td>
                                <td>{{$row->incomeType}}</td>
                                <td>{{$row->incomeAmount}}</td>
                                <td>{{$row->incomeNote}}</td>
                                <td>
                                    <a href="http://" class="btn btn-success">แก้ไข</a>
                                </td>
                                <td>
                                    <a href="http://" class="btn btn-danger">ลบ</a>
                                </td>

                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <a href="/income" class="btn btn-primary">เพิ่มข้อมูล</a>
                    <a href="/salesReport" class="btn btn-success">กลับเมนูแสดงรายการ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection