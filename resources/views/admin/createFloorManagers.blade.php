{{-- @section('content')

<div class="col-lg-12">
        <div class="card">
            <div class="card-header">create a Floor manager</div>
            <div class="card-body card-block">
            <form action="{{route('admin.floorManagers.store')}}" method="post" class="">
                @csrf

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">name</div>
                            <input type="text" id="name" name="name" class="form-control">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Email</div>
                            <input type="email" id="email3" name="email" class="form-control">
                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Password</div>
                            <input type="password" id="password" name="password" class="form-control">
                            <div class="input-group-addon">
                                <i class="fa fa-asterisk"></i>
                            </div>
                        </div>
                    </div>

                 
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection  --}}


{{-- @include('base_layout.app') --}}


@extends('admin.home')



@section('content')



<div class="row">
    <div class="col-md-12">

        <div class="box box-info col-md-8 " style="margin-right: 150px">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> تسجيل مدير طابق </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form method="post" action="{{route('admin.floorManagers.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>اسم المدير كامل</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="اسم المدير كامل ...">
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

                        <button type="submit" class="btn btn-primary">تسجيل المدير</button>
                        <button type="reset" class="btn btn-info">الغاء</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
