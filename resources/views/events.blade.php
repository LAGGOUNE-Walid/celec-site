@extends("templates.main")
@section("title", "CELEC CLUB - events")
@section("content")
	<!--********************* upcoming event ********************* -->
    <div class="container-fluid" style="margin-top: 15%;">
        <div class="row">
            <!--droite phone-->
            <div class="col-md-5 col-12 pictphone" > 
                <img  src="resources/images/sarah.png" style="width: 100%; height: 100%;"> 
            </div>
            <!--gauche-->
            <div class="col-md-7 col-12"> 
                <div class="row">
                    <!-- partie 1 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-12" data-aos="fade-right" data-aos-duration="1900">
                               <p class="P1">OUR UPCOMING</p> 
                            </div>
                            <div class="col-md-2 col-3 droite" style="background-color: #bef7ff;height: 20px;border-radius: 60px;margin-top: 1.5%;">
                            </div>
                        </div>
                     </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2 offset-md-2 web" style="background-color:#bef7ff;height: 20px;border-radius: 60px;margin-top: 1.5%;">
                             </div>
                            <div class="col-md-8 col-12" data-aos="fade-left" data-aos-duration="1900">
                                <p class="P2">ORGANIZED EVENTS</p>
                            </div>
                            <div class="col-md-2 offset-md-2 col-3 phone" style="background-color:#bef7ff;height: 20px;border-radius: 60px;margin-top: 1.5%;">
                            </div>
                        </div>
                     </div>
                    <!--partie 2-->
                    <div class="col-md-9 col-offset-3 col-12 description" data-aos="fade-right" data-aos-duration="1900">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                         
                     </div>
                    <!--partie 3 -->
                    <div class="col-md-12" id="phoneversion" data-aos="fade-left" data-aos-duration="1900">
                        <div class="row">
                            <div class="col-md-2 offset-md-2 " style="background-color:#bef7ff;height: 40px;border-radius: 60px;margin-top: 1.5%;">
                            </div> <div class="col-md-8"></div>
                            <div class="col-md-2 offset-md-9 " style="background-color:#bef7ff;height: 40px;border-radius: 60px;">
                            </div> <div class="col-md-1"></div>
                            <div class="col-md-4 offset-md-4 " style="background-color:#bef7ff;height: 40px;border-radius: 60px;">
                            </div> <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--droite web-->
            <div class="col-md-5 col-12 pictweb" data-aos="fade-down" data-aos-duration="1900"> 
                <img src="resources/images/sarah.png" style="width: 100%; height: 100%;"> 
            </div>
            <!-- Arrow-->
            <div class="arrow" data-aos="fade-down" data-aos-duration="1900">
                <img src="resources/images/arow.png" alt="Scroll-Down" style="width: 60px; height: 60px;" >
             </div>
        </div>
    </div>
    <!--********************* Cards ********************* -->
    <div class="container-fluid" >
        <div class="row cards123" >
            <div class="col-md-3 col-12 offset-1 card1" data-aos="fade-down" data-aos-duration="1900">
                <div class="logo1">Cisco</div>
                <h1>BIG TITLE HERE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna.
                </p>
                <a href="#">LEARN MORE </a>
            </div>
            <div class="col-md-3 col-12 card2" data-aos="fade-up" data-aos-duration="1900">
                <img src="resources/images/django-girls-Logo.png" alt="Django girls logo png" class="logo2">
                <h1>BIG TITLE HERE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna.
                </p>
                <a href="#">LEARN MORE </a>
            </div>
            <div class="col-md-3 col-12 card3" data-aos="fade-down" data-aos-duration="1900">
                <div class="logo1">Ctech</div>
                <h1>BIG TITLE HERE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna.
                </p>
                <a href="#">LEARN MORE </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-12 offset-1 card4" data-aos="fade-up" data-aos-duration="1900">
                <div class="logo1">Cisco</div>
                <h1>BIG TITLE HERE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna.
                </p>
                <a href="#">LEARN MORE </a>
            </div>
            <div class="col-md-3 col-12 offset-1 card5" data-aos="fade-down" data-aos-duration="1900">
                <div class="logo1">Cisco</div>
                <h1>BIG TITLE HERE</h1>
                <p>
                    Lorem ipsum dolor sit amet, consetetur 
                    sadipscing elitr, sed diam nonumy eirmod 
                    tempor invidunt ut labore et dolore magna.
                </p>
                <a href="#">LEARN MORE </a>
            </div>
           
        </div>
    </div>
@endsection