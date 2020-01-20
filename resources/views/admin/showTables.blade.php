{{-- @section('content')


<div class="row m-t-30">
    <div class="col-md-12">

        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>اسم الطاولة   </th>
                        <th>حالة الطاولة</th>
                        <th>الطابق الخاص بها</th>
                        <th>إدارة</th>
                      
                    </tr>
                </thead>
                <tbody>
                   @foreach ($floors as $floor)
                    @foreach ($floor->table as $item)
                        
                   <tr>
                    <td>
                        {{$item->name}}
                     </td>
                  
                    <td>
                        @if($item->status===1)
                        مشغول
                    @else 
                        متاح
                    @endif               
                      </td>

                      <td> 
                        {{$floor->name}}

                    </td>

                 </tr>
                 @endforeach

                   @endforeach
                  
                </tbody>
            </table>
        </div>

    </div>
</div>


@endsection 



@include('base_layout.app') --}}



@extends('admin.home')


@section('content')

<div class="row">
    <div class="box box-info col-md-10 " style="margin-right: 150px">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user" style="color: #0b97c4"></i> بيانات الطاولات </h3>

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
                            style="width: 182px;">اسم الطاولة
                        </th>
                        <th tabindex="0" aria-controls="example1"
                            rowspan="1" colspan="1"
                            style="width: 224px;">حالة الطاولة
                        </th>

                        <th tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1"
                        style="width: 199px;">الطابق الخاص بها
                         </th>

                        <th tabindex="0" aria-controls="example1"
                            rowspan="1" colspan="1"
                            style="width: 199px;">إدارة
                        </th>

                    </tr>
                    </thead>

                    <tbody>
                     
                    @foreach ($floors as $key=>$floor)
                        @foreach ($floor->table as $item)
                            
                       <tr>
                        <td>
                            {{$key++}}
                         </td>

                        <td>
                            {{$item->name}}
                         </td>
                      
                        <td>
                            @if($item->status===1)
                            مشغول
                        @else 
                            متاح
                        @endif               
                          </td>
    
                          <td> 
                            {{$floor->name}}
    
                        </td>
    
                        <td>
                            <form action="{{route('admin.tables.destroy',['table_id'=>$item->id])}}" method="post"> 
                                @csrf
                                   <button type="submit" class="btn btn-danger">حذف</button>
                               </form>
                        </td>

                        @endforeach

                    @endforeach
                    </tbody>

                </table>


            </div>

        </div>
    </div>
</div>

@endsection

