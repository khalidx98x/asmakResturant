
    <script>
        window.console = window.console || function(t) {};
    </script>
        <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
        <script src="{{asset('front-end/')}}/vendor/jquery/jquery-3.2.1.min.js" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script src="{{asset('front-end/')}}/vendor/bootstrap/js/popper.js" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script src="{{asset('front-end/')}}/vendor/bootstrap/js/bootstrap.min.js" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script src="{{asset('front-end/')}}/vendor/select2/select2.min.js" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script src="{{asset('front-end/')}}/vendor/perfect-scrollbar/perfect-scrollbar.min.js" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script type="84eee879571352f3ecae4c76-text/javascript">
            $('.js-pscroll').each(function(){
                var ps = new PerfectScrollbar(this);
    
                $(window).on('resize', function(){
                    ps.update();
                })
            });
    
    
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script type="84eee879571352f3ecae4c76-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>   
        <script src="{{asset('front-end/')}}/js/main.js" type="84eee879571352f3ecae4c76-text/javascript"></script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="84eee879571352f3ecae4c76-|49" defer=""></script>

        
 {{-- Footer --}}
 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <ul class="contact-details">

            <img src="{{ url('')}}/front-end/images/logo.png" width="200" style="border-radius:8px" alt="User Image">
                </ul>
       
        </div>
{{-- 
        <div class="col-12 col-sm-4">
            <div class="footer-title"> عن Asmak Resturant </div>
            <div class="paragraph ml-md-4">
                حجوزات 
                حجوزات 
                حجوزات 
                حجوزات 
                حجوزات 
                حجوزات 
                حجوزات 
                حجوزات 
                حجوزات 
            </div>
        </div> --}}

           
        <div class="col-12 col-sm-4">
            <div class="footer-title">معلومات التواصل</div>
            <ul class="contact-details">
                <li>
                    <a href="tel:00966507276370">
                        <i class="fas fa-phone-alt"></i>00966507276370
                    </a>
                </li>
                <li><a href="mailto:123@ZAMZAMBOOKING.COM"><i
                        class="fas fa-envelope"></i>123@AsmakResturant.COM</a></li>
                <li><i class="fas fa--alt"></i> https://mustbee.net</li>
            </ul>
        </div>

            <div class="col-12 col-sm-4 follow">
                <div class="footer-title">تابعونا على</div>
                <div class="footer-nav" data-height="60">
                    <div class="social text-center text-sm-right">
                        <a class="fb" href="#" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="#" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                        <a class="insta" href="#">
                            <i class="fab fa-instagram"></i></a>
                        <a class="snap" href="#" target="_blank"><i
                            class="fab fa-snapchat-ghost"></i></a>
                    </div>
                </div>
                <div class="footer-copyright">© 2019 جميع الحقوق محفوظة Asmak Resturant</div>
            </div>
        </div>
    </div>
</div>
