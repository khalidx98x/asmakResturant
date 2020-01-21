@extends('admin.home')


@section('content')

<div class="row">
    <div class="box box-info col-md-10 " style="margin-right: 150px">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> بيانات المدراء </h3>

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
                            style="width: 182px;">اسم المدير
                        </th>
                        <th tabindex="0" aria-controls="example1"
                            rowspan="1" colspan="1"
                            style="width: 224px;">بريد المطعم
                        </th>
                        <th tabindex="0" aria-controls="example1"
                            rowspan="1" colspan="1"
                            style="width: 199px;">الطابق الذي يديره
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
         
                        @foreach ($managers as $key=>$manager)
                        
                        <tr role="row" class="even">
                            <td class="sorting_1">{{$key++}}</td>
                            <td>{{$manager->name}}</td>
                            <td>{{$manager->email}}</td>
                            <td>
                                @if($manager->floor)
                                 {{$manager->floor->name}}
                                @endif
                                
                            </td>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$manager->id}}">
                                 تعديل </button>                                
                            </td>

                            <td>
                                <form action="{{route('admin.floorManagers.destroy',['manager_id'=>$manager->id])}}" method="post"> 
                                    @csrf
                                       <button type="submit" class="btn btn-danger">حذف</button>
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


@foreach ($managers as $manager)
                            
{{-- Edit modal  --}}
<div class="modal fade" id="editModal{{$manager->id}}">
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
                <form class="form-horizontal" action="{{route('admin.floorManagers.update',['manager_id'=>$manager->id])}}" method="POST">
                    @csrf

                  <div class="box-body">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">الإسم</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="inputEmail3"  value="{{$manager->name}}" placeholder="name">
                        </div>
                      </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">بريد المطعم</label>
    
                      <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="inputEmail3" value="{{$manager->email}}" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
    
                      <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
               
                  </div>
                  <!-- /.box-body -->
                  {{-- <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div> --}}
                  <!-- /.box-footer -->
              {{-- </div> --}}
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