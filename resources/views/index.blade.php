<!-- This will require the template located in resources/views/templates/main.blade.php -->
@extends("templates.main")

<!-- This will replaced in the main.blade.php -->
@section("title", "CELEC CLUB")
@section("content")
    <!--*******slider*******-->
    <div id="demo" class="carousel slide" >

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="0" class="active"></li>
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="1"></li>
          <li data-target="#demo" style="background-color:#6789EA ;" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner slidershow">
            <div class="carousel-item active ">

                <div class="row s1">
                    <!--ecriture-->
                    <div class="col-sm-6 d-flex flex-column  align-items-center justify-content-center" style="z-index: 1;" data-aos="fade-up" data-aos-duration="3000">
                        <h2>Bienvenue à <span ></span> <br> <span >celec club</span> </h2>
                        <div class="cloud5" data-aos="fade-left" data-aos-duration="1700"></div>
                        <div class="cloud6" data-aos="fade-right" data-aos-duration="1700"></div>
                        <div class="cloud10" data-aos="fade-left" data-aos-duration="1700"></div>
                        <div class="cloud11" data-aos="fade-right" data-aos-duration="1700"></div>
                        
                        <div class="arow">
                            <a href="#video">
                            <img src="resources/images/arrow.svg" >
                           </a>
                        </div>
                    </div>

                    <!--gif-->
                    <div class="col-sm-6 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="3000">
                    <video src="resources/images/gif1.mp4" class="gif1" autoplay loop></video>
          			<div class="cloud1" data-aos="fade-left" data-aos-duration="1700"></div>
          			<div class="cloud2" data-aos="fade-right" data-aos-duration="1700"></div>
          	 		<div class="cloud3" data-aos="fade-left" data-aos-duration="1700"></div>
          			<div class="cloud4" data-aos="fade-right" data-aos-duration="1700"></div>

                    </div>
                </div>
            
         
            </div>
            <div class="carousel-item" >

            <div class="row s2">
                    <div class="col-sm-1"></div>
                    <div  class="col-sm-1 d-flex align-items-center justify-content-center">
                        <div class="line"></div>
                    </div>
                   
                    <!--ecriture-->
                    <div class="col-sm-5 d-flex flex-column  align-items-start justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        <h2>django <br> <span >girls</span> </h2>
                        <button type="button" class="btn btn-warning" style="color: white;">decouvrire</button>
                        
                    </div>

                
                    <!--gif-->
                    <div class="col-sm-5 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                     
                        <video src="{{url('resources/images/django2.mp4')}}" class="gif2" autoplay loop></video>

                    </div>
                </div>
            
            </div>
            <div class="carousel-item">
                <div class="row s3">
                    <div class="col-sm-1"></div>
                    <div  class="col-sm-1 d-flex align-items-center justify-content-center">
                        <div class="line"></div>
                    </div>
                    <!--ecriture-->
                    <div class="col-sm-4 d-flex flex-column  align-items-start justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        <h2>junction <br> <span >algiers</span> </h2>
                        <button type="button" class="btn" style="background-color: #6789EA;color: white;">decouvrire</button>
                        
                    </div>

                
                    <!--gif-->
                    <div class="col-sm-5 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1700">
                        
                        <video src="{{url('resources/images/junction1.mp4')}}" class="gif3" autoplay loop></video>

                    </div>
                </div>
            
            </div>
        </div>

    </div>
    
    <section  class="v-header">
        <div class="fullscreen-video-wrap">
            <div id="video">
                <video id="bgvid" autoplay loop muted playsinline style="max-width: 100%; ">
                    <source src="{{url('resources/images/video-about.mp4')}}" type="video/mp4">
                </video>

            </div>
            <div class="header-overlay">
                
            </div>

            <div class="caption text-center" >
                <h1 data-aos="fade-right" data-aos-duration="2000">A propos de nous</h1>
                <p data-aos="fade-left" data-aos-duration="1900" >CELEC est le club scientifique basé à la faculté d’électronique et <br> d’informatique de l’USTHB depuis 1987, dans le but de promouvoir<br> et de  vulgariser la science en particulier dans l’électronique.</p>
            </div>
            
        </div>
        
    </section>
   
    
    <section id="activite">
        <!--activitéss-->
        <div class="container-fluid" >
            <div class="row" >
                <h2 class="col-sm-12 d-flex align-items-center justify-content-center"  style="margin:4% 0 4% 0; color: white;" data-aos="fade-up" data-aos-duration="1200">Nos activités</h2>
            </div>

            <div class="row">
                <div id="formation"  class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up " data-aos-duration="1200" >
                <img src="{{url('resources/images/formation.svg')}}" alt="formation" style="max-width: 60%;">
                <h1>Formation</h1>
                <p>nous profitons aux jeunes <br> étudiants universitaires avec une <br> approche dynamique par le biais <br> de formations et d’ateliers gérés <br> par de jeunes ingénieurs sur le <br> terrain.</p>
                </div>
                
                <div id="conf" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up " data-aos-duration="1200">
                    <img src="{{url('resources/images/conf.svg')}}" alt="formation"  style="max-width: 60%;">
                    <h1>Conférences</h1>
                    <p>Nous offrons diverses <br> conférences dirigées par les <br> chercheurs les plus brillants dans <br> les domaines technologique <br> et tic.</p>
                
                </div> 
                <div id="sortie" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                    <img src="{{url('resources/images/sortie.svg')}}" alt="formation"  style="max-width: 60%;">
                    <h1 class="text-center">Sorties éducatives</h1>
                    <p>CELEC organise des sorties <br> éducatives au niveau des usines <br> et des établissements <br> informatiques beaucoup <br> d’autres.</p>
                </div>                    
            </div>

            <div class="row">
                <div id="formation"  class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                <img src="{{url('resources/images/projet.svg')}}" alt="formation" style="max-width: 60%;">
                <h1 class="text-center">Réalisation de projets </h1>
                <p>Réalisation de différents projets <br> électroniques ou informatiques <br> pour les IC, les concours ou pour <br> les besoins professionnels.

                </p>
                </div>
                
                <div id="conf" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                    <img id="comp" src="{{url('resources/images/conf.svg')}}" alt="formation"  style="max-width: 60%;">
                    <h1>Compétitions</h1>
                    <p>l’organisation et la participation à <br> des compétitions nationales et <br> internationales pour représenter <br> le club et l’Algérie.
                    </p>                
                </div> 
                <div id="sortie" class="col-sm-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1200">
                    <img src="{{url('resources/images/sortie.svg')}}" alt="formation"  style="max-width: 60%;">
                    <h1>Notre vision</h1>
                    <p>Améliorer la vie quotidienne par <br> l’utilisation des technologies <br> pour cela notre mission est <br> d’accomplir ces activités.
                    </p>
                </div>                    
            </div>
        </div>
        <div id="member">
            <div  data-aos="fade-up" data-aos-duration="1700">
                <h2 class="col-sm-12 d-flex text-center align-items-center justify-content-center" style="padding: 0%; color: white;">Membre du Bureau</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1200">
                <h3 class="col-sm-12 d-flex  text-center align-items-center justify-content-center" style="padding: 0%; color: white;" data-aos="fade-right" data-aos-duration="1700">the administrative members of the celec club for the year 2019/2020</h3>   
            </div>
        </div>
    </section>
    <!--****cards***-->
    <section id="member_photo" >
                    
            <!--hichem-->
            <div class=" cards "  >
                <div data-aos="fade-up" data-aos-duration="1700">
                <div class="card">
                <div class="imgbx">
                    <img src="{{url('resources/images/members/hichem.jpg')}}">
                </div>

                <div class="content">
                    <h2>Berakna Hichem</h2>
                    <p class="job">Vice President of the club</p>
                    <p>master student in Telecom Network.</p>
                </div>
                </div>
                </div>
            <!--imen-->

            <div data-aos="fade-down" data-aos-duration="1700">
                <div class="card">
                    <div class="imgbx">
                    <img src="{{url('resources/images/members/imene.jpg')}}">
                    </div>
                    <div class="content">
                        <h2>Gherbi Imene </h2>
                        <p class="job">Deputy general secretary of the club</p>
                        <p>student in master I embedded system.</p>
                    </div>
                </div>
            </div>
                    <!--ousama-->
            <div data-aos="fade-up" data-aos-duration="1700">
                <div class="card">
                    <div class="imgbx">
                        <img src="{{url('resources/images/members/oussama.jpg')}}">
                    </div>
                    <div class="content">
                        <h2>Slimani Oussama </h2>
                        <p class="job">President of the CELEC club</p>
                        <p>étudiant en Master II des Systéme des Télécoms</p>
                    </div>
                    
                </div>
            </div>
            <!--yahya-->

            <div data-aos="fade-down" data-aos-duration="1700">
                <div class="card">
                    <div class="imgbx">
                        <img src="{{url('resources/images/members/yahia.jpg')}}">
                    </div>
                    <div class="content">
                        <h2>Rahmani Yahia Abdelkrim</h2>
                        <p class="job">Secrétaire générale du club</p>
                        <p>étudiant en master II Réseau des Télécoms</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section >
        <div id="inscrire" class="container-fluid">
            <div class="row ">
                <h2 class="col-sm-12 d-flex align-items-center justify-content-center title" style="margin:5% 0 5% 0; color: #122D42; text-align: center;font-size: 42px;" data-aos="fade-up" data-aos-duration="1700">Vous pouvez nous rejoindre</h2>
            </div>
            <div class="row">
                
                <div id="conf" class="col-sm-6 d-flex flex-column align-items-center " data-aos="fade-up" data-aos-duration="1700">
                    <div class="build" data-aos="fade-down" data-aos-duration="1700">
                        
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_cOIcXb.json"  background="rgba(0, 0, 0, 0)"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
                    </div>
                       <a href="{{url('register')}}"><button type="button" class="btn" style="background-color: #6789EA;color: white; font-size: 14pt;">inscrire</button></a> 

                </div> 

                <div id="inscrire-text" class="col-sm-6 d-flex flex-column align-items-center justify-content-center" >
                    <h2 data-aos="fade-up" data-aos-duration="1700">INSCRIPTIONS POUR <br> REJOINDRE LE CLUB</h2>
                    <p style="text-align: center;" data-aos="fade-down" data-aos-duration="1700" >Vous pouvez bénéficier d’une <br>formation,  de sorties éducatives, <br> d’une participation à des concours <br> et à des conférences</p>

                </div>

            </div>
        </div>
    </section>


    
    <!--sponsors-->
    <div class="partner-area">
        <div class="container-fluid">
            <h2>Nos Partenaires</h2>
            <section class="logo-area slider">
            <div class="slide"><a href="https://www.ieee.org/"> <img src="resources/images/logos/ieee.svg" alt="IEE" width="130" height="60" ></a></div>
            <div class="slide"><a href="https://www.usthb.dz/fr"> <img src="resources/images/logos/usthb.svg" alt="USTHB" width="110" height="100" ></a></div>
            <div class="slide"><a href="https://www.intel.com/content/www/us/en/homepage.html"><img src="resources/images/logos/intel.svg" alt="intel"  width="100" height="90" ></a></div>
            <div class="slide"><a href="https://app.hackjunction.com/events/junction-2020-connected"><img src="resources/images/logos/junction.svg" alt="junction connected"  width="130" ></a></div>
            <div class="slide"><a href="https://github.com/"><img src="resources/images/logos/github.svg" alt="github"  width="120" height="90"></a></div>
            <div class="slide"><a href="https://djangogirls.org/algiers/"><img src="resources/images/logos/django1.svg" alt="djangogirls" width="210" height="90"></a></div>
            <div class="slide"><a href="https://dzhoster.com/"><img src="resources/images/logos/dz_hoster.svg" alt="" width="200" height="90"></a></div>
            <div class="slide"><a href="https://dzhoster.com/"><img src="resources/images/logos/wilaya_alger.svg" alt="dzhoster"  width="100" height="90" ></a></div>
            <div class="slide"><a href="http://www.aagee.dz/"><img src="resources/images/logos/aagee.svg" alt="AAGEE"  width="100" height="90" ></a></div>
            <div class="slide"><a href="https://startup.dz"><img src="resources/images/logos/RebAlger.svg" alt="wilaya_alger"  width="100" height="90"></a></div>
            </section>
           
        </div>
       
    </div>
    
    
@endsection