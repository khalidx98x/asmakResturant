<!DOCTYPE html>
<html>


@include('user.layout.base_layout.header_meta')



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
                                    <th class="cell100 column1">     
                                       اسم الطاولة  
                                        <br>
                                        <span style="font-size: 13px; padding-left: 5px">  اسم الطابق : {{$floor->name}}</span>                                       
                                    </th>
                                    {{-- <th class="cell100 column1">{{$floor->name}}: اسم الطابق </th> --}}
                                    {{-- <th class="cell100 column2">{{$floor->floorManager->name}} : مدير الطابق </th> --}}
                                    <th class="cell100 column2">
                                        حالة الطاولة
                                        <br>
                                        <span style="font-size: 12px; padding-left: 5px"> مدير الطابق : {{$floor->floorManager->name}}  </span>   
                                    </th>
                                    <th class="cell100 column3">حجز / انهاء </th>
                                    <th class="cell100 column4">إدارة </th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                    
                    <div class="table100-body js-pscroll">
                        <table>
                         
                            <tbody>

                             @foreach ($tables as $table)
                                                               
                                <tr class="row100 body">

                                    <td class="cell100 column1">   
                                        @if($table->status==='0')
                                        <i class="fas fa-concierge-bell fa-7x"></i>
                                        <p>{{$table->name}}</p>
                                        @else
                                        <i class="fas fa-concierge-bell fa-7x" style="color:red"></i>
                                        <h3 style="color:red">{{$table->name}}</h3>
                                        @endif
                                    </td>
                                    
                                    <td class="cell100 column2">   
                                        @if($table->status==='0')
                                        <button class="button button2">الطاولة شاغرة </button>
                                        @else
                                        <button class="button button3"> الطاولة محجوزة</button>
                                        @endif
                                    </td>


                                    <td class="cell100 column3">
                                        @if($table->status==='0')

                                        <form method="post" action="{{route('user.asmak.book',[
                                            'floor'=>$floor,
                                            'table'=>$table 
                                            ])}}">
                                            @csrf
                                        <button class="button button2">احجز الطاولة </button>
                                        
                                        </form>
                                        
                                        @else

                                        <form method="post" action="{{route('user.asmak.endBook',[
                                            'floor'=>$floor,
                                            'table'=>$table 
                                            ])}}">
                                            @csrf
                                        <button class="button button3"> انهاء الحجز</button>
                                    
                                        </form>

                                        @endif

                                    </td>

                                    <td class="cell100 column4">
                                        @if($table->status==='1')
                                            <form method="post" action="{{route('user.asmak.cancelBook',[
                                            'floor'=>$floor,
                                            'table'=>$table 
                                            ])}}">
                                            @csrf
                                        <button class="button button2">إلغاء الحجز  </button>
                                    </form>

                                        @endif
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
