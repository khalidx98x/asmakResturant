<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          {{-- khalid --}}
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="{{ url('design/adminlte') }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('design/adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{auth()->user()->name}}
                  <small>{{auth()->user()->email}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              {{-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li> --}}
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                 <a href="{{route('admin.home')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">

                  <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" >
                    {{ csrf_field() }}
                    <button class="btn btn-danger btn-flat">Sign out</button>
                </form>  
                </div>
              </li>
            </ul>
          </li>
          {{-- End khalid --}}
          
        
        </ul>
      </div>