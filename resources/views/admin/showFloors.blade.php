{{-- @section('content')


<div class="row m-t-30">
    <div class="col-md-12">

        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>اسم الطابق  </th>
                        <th>حالة الطابق</th>
                        <th>إدارة</th>
                      
                    </tr>
                </thead>
                <tbody>
                   @foreach ($floors as $key=> $floor)
                   <tr role="row" class="even">
                    <td class="sorting_1">{{$key++}}</td>
                   
                    <td>{{$floor->name}}</td>
                    <td>
                        @if($floor->status==1)
                            مشغول
                        @else 
                            متاح
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                    
                       
                        </div>
                    </td>
                 </tr>
                   @endforeach
                  
                </tbody>
            </table>
        </div>

    </div>
</div> --}}


{{-- @endsection  --}}



{{-- @include('base_layout.app') --}}



@extends('admin.home')


@section('content')

<div class="row">
    <div class="box box-info col-md-10 " style="margin-right: 150px">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> بيانات الطوابق </h3>

        </div>
        <!-- /.box-header -->
        <!-- form start -->
     
        <div class="box-body">


            <div class="row">

                <table id="example1"
                       class="table table-bordered table-striped dataTable"
                       role="grid"
                       aria-describedby="example1_info">
                    <thead>

                    <tr role="row">
                        <th tabindex="0"
                            aria-controls="example1"
                            rowspan="1" colspan="1" aria-sort="ascending"
                            style="width: 10px;">
                        </th>

                        <th tabindex="0"
                            aria-controls="example1"
                            rowspan="1" colspan="1" aria-sort="ascending"
                            style="width: 182px;">اسم الطابق
                        </th>
                        <th tabindex="0" aria-controls="example1"
                            rowspan="1" colspan="1"
                            style="width: 224px;">حالة الطابق
                        </th>
                     
                        <th tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1"
                        style="width: 199px;">تعديل 
                    </th>

                    <th tabindex="0" aria-controls="example1"
                    rowspan="1" colspan="1"
                    style="width: 199px;">حذف
                     </th>

                    </tr>
                    </thead>

                    <tbody>
                     
                     
                        @foreach ($floors as $key=>$floor)

                        <tr role="row" class="even">
                            <td class="sorting_1">{{$key++}}</td>           
                            <td>{{$floor->name}}</td>
                
                         <td>
                             @if($floor->status==1)
                                 مشغول
                             @else 
                                 متاح
                             @endif
                         </td>

                         <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$floor->id}}">
                             تعديل </button>                                
                        </td>

                        <td>
                            <form  action="{{route('admin.floors.destroy',['floor_id'=>$floor->id])}}" method="post"> 
                                @csrf
                                   <button id="floor_delete" onclick="deleteFloor();" type="submit" class="btn btn-danger">حذف</button>
                               </form>
                        </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>


            </div>

        </div>
    </div>
</div>



@foreach ($floors as $floor)
                            
{{-- Edit modal  --}}
<div class="modal fade" id="editModal{{$floor->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">تعديل بيانات المدير</h4>
        </div>
        <div class="modal-body">

            {{-- Body  --}}
            {{-- <div class="box box-info"> --}}
             
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('admin.floors.update',['floor_id'=>$floor->id])}}" method="POST">
                    @csrf

                  <div class="box-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">اسم الطابق</label>
                        
                        <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{$floor->name}}" placeholder="اسم الطابق ...">    
                            </div>
                      </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">حالة الطابق</label>

                      <div class="col-sm-10">

                                <select name="status" class="form-control">
                                    {{-- <option selected disabled>اختر حالة</option> --}}
                                    
                                    @if($floor->status==='0')

                                     <option value="0" selected>متاح</option>
                                     <option value="1" >مشغول</option>

                                    @else
                                    <option value="0" >متاح</option>
                                     <option value="1" selected>مشغول</option>

                                    @endif
                                </select>
                       </div>               
                     </div>

                     <div class="form-group">

                     <label class="col-sm-2 control-label">مدير الطابق</label>
                     <div class="col-sm-10">

                         <select name="floor_manager_id" class="form-control">
                            <option selected disabled>اختار مدير إذا كنت تريد تغييره </option>

                            @foreach ($managers as $manager)
                                    
                                    @if(!$manager->floor)

                                        @if($floor->floor_manager_id===$manager->id)
                                    
                                        <option selected value="{{$manager->id}}">{{$manager ->name}}</option>
                                    
                                        @endif
                                    
                                        <option value="{{$manager->id}}">{{$manager ->name}}</option>
                                         

                                   @endif
                             @endforeach
                         </select>
                    </div>
                </div>
                    
            </div>
                
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">إلغاء</button>
                <button type="submit" class="btn btn-primary">تعديل</button>
              </div>
            </div>
        </form>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

     
@endforeach
 

@endsection

