@extends('admin.home')



@section('content')



<div class="row">
    <div class="col-md-12">

        <div class="box box-info col-md-8 " style="margin-right: 150px">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> تسجيل موظف استقبال </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form method="post" action="{{route('admin.receptionists.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>اسم الموظف كامل</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="اسم موظف استقبال كامل ...">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>بريد المطعم</label>
                            <input type="email" name="email" class="form-control"
                                   placeholder="بريد المطعم ...">
                        </div>

                    </div>

                    <div class="row">                    
                        <div class="form-group col-md-6">
                            <label>كلمة السر</label>
                            <input id="password" type="password" name="password" class="form-control"
                                   placeholder="كلمة السر ...">
                        </div>
                    </div>                        


                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary">تسجيل الموظف</button>
                        <button type="reset" class="btn btn-info">الغاء</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
