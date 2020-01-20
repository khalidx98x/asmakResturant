@php
    $angle = \Session::get('lang') == "ar" ? "left" : "right"
@endphp


<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        {{-- <span class="logo-mini"><b>A</b>LT</span> --}}
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Asmak Resturant</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    
    <nav class="navbar navbar-static-top">

    @include('admin.layout.menu')
    <!-- Sidebar toggle button-->
        {{--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >--}}
        {{--<span class="sr-only">Toggle navigation</span>--}}
        {{--</a>--}}
    </nav>
</header>


        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">


                <!-- sidebar menu: : style can be found in sidebar.less -->
               
                <ul class="sidebar-menu tree" data-widget="tree">

                    <li class="treeview" style="height: auto;">
                        <a href="{{route('admin.home')}}">
                            <i class="fa fa-home"></i> <span>الرئيسية</span>
                            {{-- <span class="pull-right-container">
                              <i class="fa fa-angle-right pull-left"></i>
                            </span> --}}
                        </a>
                        {{-- <ul class="treeview-menu" style="display: none;">
                            <li><a href=""><i class="fa fa-circle-o"></i> الرئيسية</a></li>
                            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                        </ul> --}}
                    </li>

                    <li class="treeview" style="height: auto;">
                        <a href="#">
                            <i class="fa fa-gear "></i> <span>موظف الاستقبال </span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{route('admin.receptionists.create')}}"><i class="fa fa-user-plus"></i> إضافة موظف جديد</a></li>
                            <li><a href="{{route('admin.receptionists.index')}}"><i class="fa fa-users"></i> عرض الموظفين</a></li>
                        </ul>
                    </li>


                    <li class="treeview" style="height: auto;">
                        <a href="">
                            <i class="fa fa-gear "></i> <span>إدارة المدراء </span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{route('admin.floorManagers.create')}}"><i class="fa fa-user-plus"></i> إضافة مدير جديد</a></li>
                            <li><a href="{{route('admin.floorManagers.index')}}"><i class="fa fa-users"></i> عرض المدراء</a></li>
                        </ul>
                    </li>


                    <li class="treeview" style="height: auto;">
                        <a href="#">
                            <i class="fa fa-gear "></i> <span>إدارة الطوابق </span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{route('admin.floors.create')}}"><i class="fa fa-plus"></i> إضافة طابق جديد</a></li>
                            <li><a href="{{route('admin.floors.index')}}"><i class="fa fa-table"></i> عرض الطوابق</a></li>
                        </ul>
                    </li>

                    <li class="treeview" style="height: auto;">
                        <a href="#">
                            <i class="fa fa-gear "></i> <span>إدارة الطاولات </span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: none;">
                            <li><a href="{{route('admin.tables.create')}}"><i class="fa fa-plus"></i> إضافة طاولة جديدة</a></li>
                            <li><a href="{{route('admin.tables.index')}}"><i class="fa fa-table"></i> عرض الطاولات</a></li>
                        </ul> 
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>



