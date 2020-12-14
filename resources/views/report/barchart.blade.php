@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading">กราฟแท่งรายงานรายรับ-รายจ่าย</div>

                <div class="panel-body">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>
                    
                @endif
<!-- --------------------------------------------BarChart----------------------------------------------------------->




<!-- --------------------------------------------End_BarChart----------------------------------------------------------->

                
                <a href="/salesReport" class="btn btn-success">กลับเมนูแสดงรายการ</a>
                
                </div>
            </div>
        </div>
    </div>
</div>
                


                    
@endsection