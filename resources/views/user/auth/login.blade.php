<!DOCTYPE html>
<html lang="en">

@include('base_layout.header_meta')


<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            {{-- <a href="#"> --}}
                            {{-- <img src="images/fish2.png" alt="CoolAdmin"> --}}
                            <h3><b>Asmak resturant (User login)</b></h3>
                            {{-- </a> --}}
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ url('/user/login') }}">
                                
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
        
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email"  value="{{ old('email') }}" autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                      
                                        <label for="password">Password</label>
            
                                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password"  value="{{ old('password') }}">
                                            
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        {{-- </div> --}}
                                    </div>

                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        
                            <div class="register-link">
                            <p>
                            <a href="{{ url('/admin/login') }}"><b>الذهاب الى لوحة التحكم</b> </a>
                            </p>
                            </div>
                     </div>
                    </div>
                </div>

                @include('base_layout.footer_meta')

        </body>
</html>
