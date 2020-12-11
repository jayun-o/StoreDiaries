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
                    <form class="form-horizontal" role="form" method="post" action="{{ route('recordIncome') }}">
                        @csrf

                        <!-- Date -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">วัน / เดือน / ปี : </label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date"> 
                                <!--<input type="text" class="form-control" name="date">   -->
                            </div>
                        </div>

                        <!-- ชื่อรายการ -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">ชื่อรายการ : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name"> 
                            </div>
                        </div>


                        <!-- วิธีการรับเงิน-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">วิธีการรับเงิน : </label>

                            <div class="col-md-6">
                                <select type="select" class="form-control" name="method" id="method">
                                <option value="เงินสด">เงินสด</option>
                                <option value="โอนเงินเข้าบัญชี">โอนเงินเข้าบัญชี</option>
                                <option value="เช็ค">เช็ค</option>
                                </select>
                            </div>
                        </div>

                        
                        <!-- ประเภทรายรับ-->
                        <div class="form-group">
                            <label class="col-md-4 control-label">ประเภทรายรับ : </label>

                            <div class="col-md-6">
                                <select type="select" class="form-control" name="type" id="type">
                                <option value="เงินทุน">เงินทุน</option>
                                <option value="จากการกู้ยืม">จากการกู้ยืม</option>
                                <option value="จากการขายสินค้า">จากการขายสินค้า</option>
                                <option value="รายการอื่นๆ">รายการอื่นๆ</option>
                            </select>
                            </div>
                        </div>

                        <!-- รายละเอียดเพิ่มเติม -->
                        <!--<div class="form-group">
                            <label class="col-md-4 control-label">รายละเอียดเพิ่มเติม : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="otherDetail"> 
                            </div>-->
                        <!--</div>-->

                        <!-- จำนวนเงิน -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">จำนวนเงิน(บาท) : </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="amount"> 
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
                        <!--<div class="form-group">-->
                            <!--<label class="col-md-4 control-label">หลักฐาน : </label>

                            <div class="col-md-6">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                เลือกรูปภาพ
                                <input type="file" name="attachment" id="fileToUpload"><br>
                                <input type="submit" value="Upload Image" name="submit">
                            </form>
                            </div>-->
                        <!--</div>  -->                      


                        <!-- Record button -->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    บันทึก
                                </button>
                                <a href="/reportIncome" class="btn btn-warning">ตารางบันทึกรายรับ</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection