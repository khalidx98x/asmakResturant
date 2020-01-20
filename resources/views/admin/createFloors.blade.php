@extends('admin.home')



@section('content')



<div class="row">
    <div class="col-md-12">

        <div class="box box-info col-md-8 " style="margin-right: 150px">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> تسجيل طابق </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <form method="post" action="{{route('admin.floors.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label >اسم الطابق</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="اسم الطابق ...">
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
                        <label>مدير الطابق</label>
                        <select name="floor_manager_id" class="form-control">
                            <option selected disabled> اختار مدير </option>

                            @foreach ($managers as $manager)
    
                                    @if(!$manager->floor){
                                      <option value="{{$manager->id}}">{{$manager ->name}}</option>
                                     }    
                                   @endif
                             @endforeach

                        </select>
                      </div>

                    <div class="box-footer">

                        <button type="submit" class="btn btn-primary">تسجيل الطابق</button>
                        <button type="reset" class="btn btn-info">الغاء</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
