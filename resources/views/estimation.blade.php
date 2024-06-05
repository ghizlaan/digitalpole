<!DOCTYPE html>
<html>
<head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    
        <title>projet de stage</title>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    
      <!-- fonts style -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    
      <!--owl slider stylesheet -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
    
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
    
        <style>* {
            margin: 0;
            padding: 0;
        }
        
        html {
            height: 100%;
        }
        
        /*Background color*/
        #grad1 {
            background-color: : red;
            background-image: linear-gradient(50deg, rgb(242, 240, 238) , rgb(242, 240, 238));
            height: 100%;
        }
        
        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
         
        }
        
        #msform fieldset .form-card {
            background: rgb(226, 224, 216);
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(236, 105, 17, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
        
            /*stacking fieldsets above each other*/
            position: relative;
        }
        
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            
            margin: 0;
            padding-bottom: 20px;
        
            /*stacking fieldsets above each other*/
            position: relative;
        }
        
        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        
        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }
        
        #msform input, #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }
        
        #msform input:focus, #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }
        
        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: rgb(135, 213, 235);
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        
        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }
        
        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }
        
        #msform .action-button-previous:hover, #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }
        
        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }
        
        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }
        
        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }
        
        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }
        
        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }
        
        #progressbar .active {
            color: #000000;
        }
        
        #progressbar li {
            list-style-type: none;
        font-size: 12px;
        width: calc(100% / 7); /* Réglez le nombre total d'étapes */
        float: left;
        position: relative;
        }
        
        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }
        
        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }
        
        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }
        
        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }
        
        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }
        
        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }
        
        /*Color number of the step and the connector before it*/
        #progressbar li.active:before, #progressbar li.active:after {
            background: skyblue;
        }
        
        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .radio {
            display:inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor:pointer;
            margin: 8px 2px; 
        }
        
        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }
        
        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }
        
    
        /* Styles de base pour toutes les étapes */
        #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: calc(100% / 7); /* Réglez le nombre total d'étapes */
        float: left;
        position: relative;
        text-align: center;
        color: #777; /* Couleur du texte par défaut */
        } 
    
        /* Styles pour les étapes actives */
        #progressbar li.active {
         color: #33bfc9; /* Couleur du texte des étapes actives */
        }
    
        /* Styles pour les étapes complétées */
        #progressbar li.done {
        color: rgb(135, 21, 9); /* Couleur du texte des étapes complétées */
        }
    
        /*Fit image in bootstrap div*/
        .fit-image{
            width: 100%;
            object-fit: cover;
        }</style>
</head>
    
    <style>
        .firma-card{
            width: 1000px;
            background: #fff;
            border: 1px solid;
            border-color: #3ed6db40;
            margin: 1rem auto;
            border-radius: 5px;
            box-shadow: 0 4px 6px -1px rgb(10, 159, 185);
            margin-bottom: 1.6%;
            overflow: hidden;
        }
        .firma-resim{
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            transition: -webkit-transform .2s;
            transition: transform .2s;
            background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
        }
        .firmalar{
            background: white;
            height: 200%;
        }
        @media (max-width: 768px) {
            .firma-logo{
                width: calc(33.66667% - .75rem);
                height: 6.5rem;
                margin: 5px .375rem;
            }
            .firma-resim {
                position: relative;
                z-index: 0;
                height: 200px;
            }
            .img-padding-no{
                padding-right: 0px;
                padding-left: 0px;
            }
        }

        ul, ol {
    list-style-type: none; /* Enlève les puces pour les listes non ordonnées et ordonnées */
    padding: 0; /* Enlève les marges internes */
    margin: 0; /* Enlève les marges externes */
}
#votreSection ul, #votreSection ol {
    list-style-type: none; /* Enlève les puces pour les listes dans la section avec l'ID "votreSection" */
    padding: 0; /* Enlève les marges internes */
    margin: 0; /* Enlève les marges externes */
}



    </style>
</head>
<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid header_top_container">
                <div class="lang_box dropdown">
                <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                            <img src="images/flag-france.png" alt="flag" class=" " title="france"> <i class=" " aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu ">
                    <a href="#" class="dropdown-item">
                    <img src="images/flag-france.png" class="" alt="flag">
                    </a>
                </div>
                <span>
                    Français
                </span>
              </div>
              <div class="contact_nav">
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    téléphone : +(33)0189 480 123
                  </span>
                </a>
                <a href="https://www.google.com/intl/fr/gmail/about/">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    Email : CONTACT@DIGITALPOLE.FR
                  </span>
                </a>
                <a href="https://www.google.com/maps/place/23+Rue+du+D%C3%A9part,+75014+Paris,+France/@48.8424255,2.3231097,19.04z/data=!4m6!3m5!1s0x47e671cc7cea12d3:0xa18549261354a602!8m2!3d48.842216!4d2.3235124!16s%2Fg%2F11b8v4bv_y?entry=ttu">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    localisation : 23 RUE DU DEPART 75014 PARIS 
                  </span>
                </a>
              </div>
              <div class="social_box">
                <a href="https://web.facebook.com/Digitalpole/?_rdc=1&_rdr">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/Digitalpole_UX">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.linkedin.com/company/digitalpole/?originalSubdomain=fr">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/digitalpole_ux/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="header_bottom">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                  <img src="images/logo.png" alt="">
                </a>
                </a>
      
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                </button>
      
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav  ">
                    <li class="nav-item ">
                      <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service">Services</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="about"> A propos</a>
                    </li>
                   
                    <li class="nav-item active">
                        <a class="nav-link" href="projet">Votre estimation</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="equipe">equipe</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="contact">Contact </a>
                    </li>
                    
                    
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>
        <!-- end header section -->
      
      

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
<div class="firmalar">
    <div class="container">
        <h1> Votre estimation est terminée ! 🚀
        </h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="firma-card row">
                    
                    <div class="col-md-5 img-padding-no">
                        <div class="firma-resim">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="firma-aciklama card-body">
                            <h5>Cout</h5><br>
                            <p>Coût estimé : {{ $cout }} €</p>
                            <h6>{{ $project->nom }}</h6>
                            <ul class="">
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>type de projet : {{ $project->type_projet }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Description: {{ $project->description }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Technologies: {{ $project->technologies }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Design: {{ $project->design_preference }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>les pages choisir: {{ $project->pages }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Nombre des pages: {{ $project->additional_pages }}</h6></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="firma-card row">
                    <div class="col-md-5 img-padding-no">
                        <div class="firma-resim">
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="firma-aciklama card-body">
                            <h5>Délais</h5><br>
                            <p>Temps estimé : {{ $temps }} jours</p>
                            <h6>{{ $project->nom }}</h6>
                            <ul class="yacht-info__list space-2">
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>type de projet : {{ $project->type_projet }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Description: {{ $project->description }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Technologies: {{ $project->technologies }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Design: {{ $project->design_preference }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>les pages choisir: {{ $project->pages }}</h6></span></li>
                                <li><i class="search-boat-icon fa search-captain vertical-align-mid"></i><span class="vertical-align-mid"><h6>Nombre des pages: {{ $project->additional_pages }}</h6></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        <!-- Boutons -->
                <div class="btn-container">
                    <a href="{{ route('projet.show')  }}" class="btn btn-primary btn-custom">Nouvelle estimation</a>
                    <a href="{{ route('modifier.estimation', ['id' => $project->id]) }}" class="btn btn-secondary btn-custom">Modifier l'estimation</a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
</body>
</html>
