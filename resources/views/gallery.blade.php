@extends("templates.main")
@section("title", "CELEC CLUB - gallerie")
@section("content")
<div class="row " data-aos="fade-up" data-aos-duration="1500">
        <h1 >Gallerie</h1>
        <p>découvrir avec nous les meilleure moment passé par CELEC CLUB.</p>
        <a  href="#timline" class="start"> Commencer</a>
    </div>
      <!--timeline-->
      <div class="timeline" id="timline">
         
        <div class="container left" data-aos="fade-up" data-aos-duration="1500">
          <div class="content">
            <h2>Mai 2019</h2>
           <a ><img style="border-radius:10px;" src="resources/images/robotique.jpg"></a> 
            <p>ainqueur de la première place d'un concours de robotique africaine à Tunis.</p>
          </div>
        </div>
        <div class="container right" data-aos="fade-up" data-aos-duration="1500">
          <div class="content">
            <h2>février 2019</h2>
            <a ><img style="border-radius:10px; height:200px; width: 200px;" src="resources/images/hack-tokyo.jpg"></a> 
            <p>participation à un HACkTHOn internationale à Tokyo et remporte avec la 5eme place.</p>
          </div>
        </div>
        <div class="container left" data-aos="fade-up" data-aos-duration="1500">
          <div class="content">
            <h2>juin 2018</h2>
            <a ><img style="border-radius:10px; " src="resources/images/dzroboot.jpg"></a>
            <p>organisation d'un concour nationale en robotique. </p>
          </div>
        </div>
        <div class="container right" data-aos="fade-up" data-aos-duration="1500">
          <div class="content">
            <h2>Février 2019 </h2>
            <a ><img style="border-radius:10px; " src="resources/images/cisco.jpg"></a>
            <p>Formation CISCO réalisée par le Dr Abderrazak BACHIR BOUIADJRA.</p>
          </div>
        </div>
        <div class="container left" data-aos="fade-down" data-aos-duration="1500">
          <div class="content">
            <h2>août 2019</h2>
            <a ><img style="border-radius:10px; width:200px; height:200px;" src="resources/images/c-tech.jpg"></a>
            <p>Evénement celec de l'année conférences sur les TIC, l'intelligence artificielle et le paiement électronique.</p>
          </div>
        </div>
        <div class="container right" data-aos="fade-up" data-aos-duration="1500">
          <div class="content">
            <h2>Avril 2019 </h2>
            <a ><img style="border-radius:10px; " src="resources/images/roboo.jpg"></a>
            <p>vainqueur du concours de robotique africaine de la 3ème place à Tunis.</p>
          </div>
        </div>
        <div class="container left" data-aos="fade-up" data-aos-duration="1500">
            <div class="content">
              <h2>Mai 2019</h2>
              <a ><img style="border-radius:10px; width:300px; height:200px; " src="resources/images/junction.jpg"></a>
              <p>
              Participation a un Hackathon international a seoul et revient avec la 4éle place.</p>
            </div>
        </div>
          
      </div>
@endsection