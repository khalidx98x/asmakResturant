{{-- @section('content')

<div class="col-lg-12">
        <div class="card">
            <div class="card-header">create a Floor </div>
            <div class="card-body card-block">
            <form action="{{route('admin.tables.store')}}" method="post" class="">
                @csrf

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectSm" class=" form-control-label">assign to a floor </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="floor_id" id="SelectLm" class="form-control-sm form-control">
                            @foreach ($floors as $floor)
                           
                                <option value="{{$floor->id}}">{{$floor->name}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>
                
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="selectSm" class=" form-control-label">select a status </label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="SelectLm" class="form-control-sm form-control">
                                <option value="0">متاح</option>
                                <option value="1">مشغول</option>

                            </select>
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

@endsection 



@include('base_layout.app') --}}



@extends('admin.home')



@section('content')



<div class="row">
    <div class="col-md-12">

        <div class="box box-info col-md-8 " style="margin-right: 150px">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> تسجيل طاولة </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form method="post" action="{{route('admin.tables.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>اسم الطاولة سوف يسجل تلقائيا حسب اسم الطابق</label>
                       
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label>Select</label>
                        <select name="status" class="form-control">
                            <option value="0">متاح</option>
                            <option value="1">مشغول</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                        <label>إضافة إلى طابق</label>
                        <select name="floor_id" class="form-control">
                            <option selected disabled> اختار طابق </option>

    
                            @foreach ($floors as $floor)
                           
                            <option value="{{$floor->id}}">{{$floor->name}}</option>

                             @endforeach


                        </select>
                      </div>

                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary">تسجيل الطاولة</button>
                        <button type="reset" class="btn btn-info">الغاء</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
