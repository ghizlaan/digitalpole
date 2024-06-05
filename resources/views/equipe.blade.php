@extends('header')
@section ('contenu')


<body class="sub_page">

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
                <li class="nav-item">
                  <a class="nav-link" href="about"> A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="projet">Estimez votre projet</a>
                </li>
                <li class="nav-item active">
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
  </div>
  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
         Equipe
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/chef.png" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Chef d’entreprise 
                        </h5>
                        
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Le chef d’entreprise est le premier interlocuteur chez Digitalpole. Il analyse les objectifs du futur projet, il fera ensuite une proposition de projet sur-mesure. Celle-ci est composée d’une solution adaptée aux besoins identifiées.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/div.png" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Développeur
                        </h5>
                        
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Tous les projets de création de site web nécessitent l’intervention d’un développeur. Pour pouvoir répondre à ces demandes spécifiques, Digitalpole compte parmi ses collaborateurs des développeurs web de haut niveau. Ces derniers interviennent sur les projets de nos clients pour doter leur site de fonctionnalités innovantes et procéder à l’assemblage des pages ainsi qu’à l’intégration de contenus (textes, photos, images).
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/red.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Rédacteur web
                        </h5>
                      
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Avoir un contenu rédactionnel irréprochable est essentiel pour avoir une meilleure image en ligne. Pourtant, décrire l’activité de l’entreprise, ses prestations ne s’improvisent pas et certains clients préfèrent déléguer cette tâche à une agence web experte. C’est pour répondre à ce besoin que Digitalpole compte dans son équipe des rédacteurs professionnels. Le rédacteur, après avoir bien étudié le domaine d’activité du client, il va composer des textes uniques, séduisants et engageants.

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/dis.png" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Designer 
                        </h5>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      
                      Le designer, un expert en graphisme et en ergonomie web, c’est lui qui  va mettre en œuvre la  partie graphique de la proposition de projet. En d’autres termes,  il est responsable de la conception de l’identité visuelle de Digitalpole, logo, plaquette, ainsi que le design du site
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
        <!-- Assurez-vous de définir une valeur pour le data-slide-to pour chaque diapositive -->
        <li data-target="#customCarousel2" data-slide-to="3" ></li>
      </ol>
      
    </div>
  </section>
  <!-- end client section -->


   <!-- info section -->
   <section class="info_section ">
  
    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
          téléphone : +(33)0189 480 123
          </span>
        </a>
        <a href="ttps://www.google.com/intl/fr/gmail/about/">
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

      <div class="info_top ">
        <div class="row info_main_row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="info_links">
              <h4>
              Liens Utiles
              </h4>
              <div class="info_links_menu">
                <a class="" href="/">Accueil <span class="sr-only">(current)</span></a>
                <a class="" href="service">Services</a>
                <a class="" href="about"> A propos  </a>
                <a class="" href="projet">estimez votre projet</a>
                <a class="" href="equipe">equipe</a>
                <a class="" href="contact">Contact </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
            <div class="info_post">
              <h5>
              fil d'actualité Instagram
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
                <div class="img-box">
                  <img src="images/instagram.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <h4>
              inscrivez-vous à notre site web
              </h4>
              <form action="">
                <input type="text" placeholder="Entrez votre adresse mail" />
                <button type="submit">
                S'abonner
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-md-2">
            <div class="info_logo">
              <a href="">
                <img src="images/" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
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

      </div>
    </div>
  </section>
  <!-- end info_section -->



@endsection