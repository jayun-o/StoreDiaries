@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">บันทึกรายจ่าย</div>

                <div class="panel-body">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>


                @endif
                    <form class="form-horizontal" role="form" method="post" action="{{ route('recordExpenses') }}">
                        @csrf

                        <!-- Date -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">วัน / เดือน / ปี : </label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date">
                                @error('date')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror  
                            </div>
                        </div>

                        <!-- ชื่อรายการ -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">ชื่อรายการ : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>


                        <!-- วิธีการจ่ายเงิน-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">วิธีการจ่ายเงิน : </label>

                            <div class="col-md-6">
                                <select type="select" class="form-control" name="method" id="method">
                                <option value="เงินสด">เงินสด</option>
                                <option value="โอนเงินเข้าบัญชี">โอนเงินเข้าบัญชี</option>
                                <option value="เช็ค">เช็ค</option>
                                <option value="เครดิต">เครดิต</option>
                            </select>
                            </div>
                        </div>

                        
                        <!-- ประเภทรายจ่าย-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">ประเภทรายจ่าย : </label>

                            <div class="col-md-6">
                                <select type="select" class="form-control" name="type" id="type">
                                <option value="stock">ซื้อสินค้า</option>
                                <option value="wages">ค่าจ้างพนักงาน</option>
                                <option value="tax">ภาษี</option>
                                <option value="other">รายการอื่นๆ</option>
                            </select>
                            </div>
                        </div>

                        <!-- รายละเอียดเพิ่มเติม -->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">รายละเอียดเพิ่มเติม : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="otherDetail"> 
                            </div>
                        </div> -->

                        <!-- จำนวนเงิน -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">จำนวนเงิน(บาท) : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="amount">
                                @error('amount')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror 
                            </div>
                        </div>

                        <!-- หมายเหตุ -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">หมายเหตุ : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="note">
                            </div>
                        </div>

                        <!-- หลักฐาน -->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">หลักฐาน : </label>

                            <div class="col-md-6">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                เลือกรูปภาพ
                                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                                <input type="submit" value="Upload Image" name="submit">
                            </form>
                            </div>
                        </div>                         -->


                        <!-- Record button -->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    บันทึก
                                </button>

                                <a href="/reportExpenses" class="btn btn-warning">ตารางบันทึกรายจ่าย</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection