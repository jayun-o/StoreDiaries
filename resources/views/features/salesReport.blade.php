@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div> 

                <div class="panel-body">

                    <!--button link to income page-->
                    <form>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-lg btn-block">บันทึกรายรับ</button>
                            </div>
                        </div>    
                    
                    </form>

                    <form>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Monthly Income Report</button>
                            </div>
                        </div>
                    
                    </form>

                    <form >
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Yearly Income Report</button>
                            </div>
                        </div>
                    
                    </form>

                    

                    

                    

                    <!--button link to expenses page-->
                    <form >
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">บันทึกรายจ่าย</button>
                            </div>
                        </div>
                    </form>

                    <form >
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">Monthly Expense Report</button>
                            </div>
                        </div>
                    </form>

                    
                    <form >
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">Yearly Expense Report</button>
                            </div>
                        </div>
                    </form>


                   

                    <!--button link to stock-->
                    <form>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4"> <br>
                                <button type="submit" class="btn btn-warning btn-lg btn-block">รายงานยอดขาย</button>
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