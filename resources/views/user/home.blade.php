{{-- @extends('user.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as User!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html>


@include('user.layout.base_layout.header_meta')


{{-- 
<nav class="navbar ">
    <div class="toggle"><i class="ic-menu"></i></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <a class="logo" href="http://www.zamzambooking.com/ar"><img
                        src="http://www.zamzambooking.com/assets/images/logo.png" alt=""></a>
                <ul class="links">
                    <li>
                        <a style="font-family: Cairo,Arial; font-weight: bold; " href="http://www.zamzambooking.com/ar/العروض">العروض المخفضة</a>
                    </li>
                    <li>
                        <a style="font-family: Cairo,Arial; font-weight: bold; " href="http://www.zamzambooking.com/ar/الفنادق">الفنادق</a>
                    </li>
                    <li>
                        <a  style="font-family: Cairo,Arial; font-weight: bold; " href="http://www.zamzambooking.com/ar/من-نحن">من نحن</a>
                    </li>
                    <li>
                        <a style="font-family: Cairo,Arial; font-weight: bold; " href="http://www.zamzambooking.com/ar/اتصل-بنا">اتصل بنا</a>
                    </li>
                    <li>
                        <a style="font-family: Cairo,Arial; font-weight: bold; " href="http://www.zamzambooking.com/ar/عرض-خاص">طلب عرض خاص</a>
                    </li>
                </ul>
            </div>
            <div class="col-auto">
                <div class="menu-sm">
                    <a href="#" class="navbar-btn-circle" id="toggle_user_menu"><i class="ic-user"></i></a>
                    <a href="http://www.zamzambooking.com/en"
                       style="font-family: Cairo,Arial; font-weight: bold; "
                       class="navbar-btn-circle">EN</a>
                </div>
                <ul class="navbar-left">
                    <li><a href="http://www.zamzambooking.com/login" class="btn btn-default">الدخول</a></li>
                    <li><a href="http://www.zamzambooking.com/register"
                           style="font-family: Cairo,Arial; font-weight: bold; "
                           class="btn btn-primary rounded">التسجيل</a></li>
                    <li class="d-none d-md-block"><a
                            style="font-family: Cairo,Arial; font-weight: bold; "
                            href="http://www.zamzambooking.com/en"
                            class="navbar-btn-circle">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}

{{-- Tables --}}


<div class="hero-image2">

    <div class="limiter">
       
        <div class="container-table100 ">
            <div class="wrap-table100 ">

                
                <div class="table100 ver1 m-b-110 rounded">
                    
                    <div class="table100-head ">

                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">رقم الطابق</th>
                                    <th class="cell100 column2">اسم الطابق</th>
                                    <th class="cell100 column3">مدير الطابق</th>
                                    <th class="cell100 column4">حالة الطابق</th>
                                    <th class="cell100 column5">إدارة</th>
                                    <th class="cell100 column5">تسجيل خروج</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                    
                    <div class="table100-body js-pscroll">
                        <table>

                            <tbody>

                             @foreach ($managers as $key=> $manager)
                        
                              <tr class="row100 body">

                                    <td class="cell100 column1"> {{++$key}}</td>
                                    <td class="cell100 column2">
                                        @if($manager->floor)
                                        {{$manager->floor->name}}
                                        @endif
                                    </td>
                                    <td class="cell100 column3">{{$manager->name}}</td>

                                    <td class="cell100 column4">
                                        @if($manager->floor)
                                         @if($manager->floor->status==='0')

                                         <button class="button button2"> طابق بطاولات شاغرة</button>
                                         @else
                                         <button class="button button3">الطابق ممتلئ </button>

                                         @endif
                                        @endif
                                        
                                    </td>
                                    {{-- {{dd(auth()->user()->email)}} --}}
                                    
                                    <td class="cell100 column4">
                                        @if($manager->floor)

                                        {{-- //checking the validity and type for the manager to manage the floor --}}
                                        {{-- check the email and the type --}}
                                        @if(auth()->user()->type==='1')
                                         @if(auth()->user()->email===$manager->email)

                                            <a href="{{route('user.asmak.show', ['floor_id' => $manager->floor->id])}}">
                                            <button class="button button2">إدارة</button></a>
                                         @endif

                                        @elseif( auth()->user()->type==='0')  
                                            <a href="{{route('user.asmak.show', ['floor_id' => $manager->floor->id])}}">
                                            <button class="button button2">إدارة</button></a>
                                        @else

                                            
                                        @endif
                                     @endif

                                    </td>
                                     
                                    <td class="cell100 column5">
                                        
                                        <form id="logout-form" action="{{ url('/user/logout') }}" method="POST" >
                                            {{ csrf_field() }}
                                            <button class="button button3">خروج</button>
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

    </div>

</div>

@include('user.layout.base_layout.footer_meta')
 
  

 </body>
</html>
