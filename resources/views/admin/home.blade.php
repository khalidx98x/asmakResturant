@include('admin.layout.header')

{{--changes--}}

    @include('admin.layout.sidebar')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        {{--<h1>--}}
            {{--Dashboard--}}
            {{--<small>Control panel</small>--}}
        {{--</h1>--}}
        {{--<ol class="breadcrumb">--}}
        {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
        {{--<li class="active">Dashboard</li>--}}
        {{--</ol>--}}
    </section>

    <!-- Main content -->
    <section class="content">
        @include('admin.layout.message')
        @yield('content')
        @yield('create_menus')
        @yield('pages')
        @yield('contact_massages')
        @yield('college_settings')
    </section>
    <!-- /.content -->
</div>


@include('admin.layout.footer')

