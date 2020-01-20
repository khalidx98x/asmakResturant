
@extends('admin.home')


@section('content')

<div class="col-md-8">
<div class="box box-info">
    <div class="box-header">
        <h3 class="box-title">البيانات الشخصية</h3>
    </div>
    <div class="box-body">
        <!-- Color Picker -->
        <div class="form-group">
            <label>الاسم:</label> <b> {{auth()->user()->name}}</b>
        </div>
        <!-- /.form group -->

        <!-- Color Picker -->
        <div class="form-group">
            <label>بريد المطعم:</label> <b>{{auth()->user()->email}}</b>

            </div>

            <div class="row">
                <div class="col-xs-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <h3 class="box-title"> تعديل البيانات الشخصية </h3>
                    </div>
                    <div class="box-body">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        تعديل   
                     </button>
                    </div>
                  </div>
                </div>
              </div>
    
    
        </div>
    
    </div>
    <!-- /.box-body -->
</div>
</div>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">تعديل البيانات الشخصية</h4>
        </div>
        <div class="modal-body">

            {{-- Body  --}}
            {{-- <div class="box box-info"> --}}
             
                <!-- /.box-header -->
                <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{route('admin.admins.update',['id'=>auth()->user()->id])}}">
                  @csrf
                  <div class="box-body">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">الإسم</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}" id="inputEmail3" placeholder="name">
                        </div>
                      </div>


                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">بريد المطعم</label>
    
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" id="inputEmail3" placeholder="Email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">كلمة المرور</label>
    
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
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
            </form>

            </div>
      
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection

{{-- <!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script> --}}
