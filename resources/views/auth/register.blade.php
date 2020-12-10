@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ลงทะเบียน</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('register') }}">
                        @csrf

                        <!-- store name -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">ชื่อร้านค้า</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                
                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">อีเมล</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                
                                @error('email')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">รหัสผ่าน</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">ยืนยันรหัสผ่าน</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                                
                                @error('password_confirmation')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        
                        <!-- Register button -->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>ลงทะเบียน
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection