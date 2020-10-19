@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">

                    <!--button link to income page-->
                    <form class="form-horizontal" role="form" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block">บันทึกรายรับ</button>
                            </div>
                        </div>
                    </form>

                    <!--button link to expenses page-->
                    <form class="form-horizontal" role="form" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">บันทึกรายจ่าย</button>
                            </div>
                        </div>
                    </form>

                    <!--button link to stock page-->
                    <form class="form-horizontal" role="form" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Stock</button>
                            </div>
                        </div>
                    </form>

                    <!--button link to sales report page-->
                    <form class="form-horizontal" role="form" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-warning btn-lg btn-block">Sales Report</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection