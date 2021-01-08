<div>
    <nav class="col-md-12 navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"><img src="{{url('resources/images/logos/celec_bleu.png')}}" alt="Celec-Logo" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" data-aos="fade-up" data-aos-duration="3000">
               <li class="nav-item">
                   <a class="nav-link" href="{{url('/')}}#video" style="color:  #194B73 ;font-size: 18px;padding: 8px 15px;font-weight: 500"> A propos <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/')}}#activite" style="color: #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500"> Activités </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('/')}}#comp" style="color:  #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500"> Membre </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}#inscrire" style="color: #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('events')}}" style="color: #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500"> Evénement </a>
                 </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('gallerie')}}" style="color: #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500"> Gallerie</a>
                </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ url('formation') }}"  style="color:  #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500">
                     Formation
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('learn')}}" style="color: #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500"> Apprendre </a>
                 </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="#contact" style="color:  #194B73;font-size: 18px;padding: 8px 15px;font-weight: 500"> Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    @if(Request::is("learn"))
      <style type="text/css">
        .nav-link {
          color: white !important;
        }
      </style>
    @endif
</div>