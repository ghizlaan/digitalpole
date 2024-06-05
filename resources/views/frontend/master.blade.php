@extends('main')
@section ('content')

<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">
    <div class="header_top">
      <div class="container-fluid header_top_container">
        <div class="lang_box dropdown">
          <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
            <img src="images/flag-france.png" alt="flag" class=" " title="FRANCE"> <i class=" " aria-hidden="true"></i>
          </a>
          
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
         
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about"> A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="projet">Estimez Votre projet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="equipe">equipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact </a>
              </li>
             
            </ul>
          
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- end header section -->
  <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="detail-box" >
                  <h1>
                  Fournir une estimation <br> précise du projet <br>
                  contribue à définir les priorités <br>
                  et à allouer les efforts <br>de manière efficace
                  </h1>
                  <div class="btn-box">
                    <a href="projet" class="btn1">
                    Estimez votre projet
                    </a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="detail-box">
                  <h1>
                  L'estimation du projet <br> est une étape cruciale <br>
                   dans l'élaboration d'un plan complet <br>
                    pour exécuter le projet <br> avec succès et efficacité
                  </h1>
                  <div class="btn-box">
                    <a href="projet" class="btn1">
                    Estimez votre projet
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="detail-box">
                  <h1>
                  L'estimation du projet <br>
                  est l'une des étapes essentielles <br>
                   du développement d'une stratégie intégrée  <br>
                   pour gérer les projets efficacement
                  </h1>
                  <div class="btn-box">
                    <a href="projet" class="btn1">
                      Estimez votre projet
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
       
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
        
      </ol>
    </div>

  </section>
  <!-- end slider section -->
</div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container">
          <h1>
           Nos Services
          </h1>
         
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box" >
                <h5>
                  Développemment web
                </h5>
                <p>
                 le Développemment web est l'essence meme de notre expertise.
                 ce n'est pas seulement un service que nous proposons , c'est une passion qui nous anime. 
                </p>
              
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                Application Mobile
                </h5>
                <p>
                  Plongez dans le monde dynamique du developpement applications mobiles avec notre agence spécialisée. 
                  Avec notre expertise éprouvée, découvrez comment hisser votre entreprise vers de nouveaux sommets. 
                  Nous concevons des applications mobiles innovantes, robustes et centrées sur une expérience utilisateur exceptionnelle.
                 
                </p>
              
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Stratégie Digitale
                </h5>
                <p>
                  
                Explorez une ère de marketing digital révolutionnaire,
                  où l’intelligence artificielle est le moteur de notre approche.
                   De stratégies innovantes à des campagnes d’envergure, 
                   notre agence digitale façonne une présence en ligne sans compromis. 
                   Dominez votre domaine avec notre expertise inégalée.
                </p>
              
              </div>
            </div>
          </div>
    
    </div>
  </section>
  <!-- end service section -->


  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                À propos de nous
              </h2>
            </div>
            <p>
              Digitalpole est une agence web full service basée à Paris et Marrakech, nous sommes une équipe passionnée d’experts du numérique, spécialisée dans le développement web et mobile.
              Notre mission ? 
              Accompagner nos clients à chaque étape de leur projet, depuis la conceptualisation initiale jusqu'à la concrétisation de solutions digitales innovantes, que ce soit des sites web captivants ou des applications mobiles percutantes
              
              Nos domaines d’expertise sont :
              
                  • Développement web 
                  • Application mobile
                  • Stratégie digitale
              
              
              
              
              
              Notre vision n'est pas que de vendre des services ou des solutions Web. Nous voulons devenir un partenaire d'affaire et de choix à long terme avec nos clients afin d'offrir des solutions Web innovantes aux entreprises. 
              
              Nous nous efforçons constamment à devenir l'agence Web numéro un parmi les différentes solutions Web qui existent sur le marché. Nous prenons le temps d'écouter et de conseiller notre client, afin de lui proposer les solutions digitales adaptées à ses besoins réels.
            </p>
        
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- end about section -->




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

  <!-- why us section -->

  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us?
        </h2>
      </div>
      <div class="why_us_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5> Projet terminé à temps            </h5>
            <p>
              Le projet a été mené à bien dans les délais, grâce à une planification rigoureuse et une exécution méthodique. 
              La gestion efficace des ressources et la coordination entre les membres de l'équipe ont été essentielles pour garantir le succès du projet dans les temps. 
              Cette ponctualité renforce la confiance de nos partenaires et clients dans notre capacité à fournir des résultats fiables et à respecter les échéances.            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Disponible en permanence            </h5>
            <p>
              La disponibilité permanente est essentielle dans tous les domaines, que ce soit pour les professionnels, 
              les services clientèle ou le support technique. Cela témoigne d'une réactivité et d'un engagement envers les besoins des parties prenantes. Être toujours disponible nécessite une organisation,
               une communication efficace et une adaptabilité pour répondre aux demandes à tout moment. C'est crucial pour établir des relations solides et assurer la satisfaction à long terme.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Professionnel et responsable            </h5>
            <p>
              Être professionnel et responsable dans son travail implique d'exhiber un haut niveau de compétence, 
              de respecter les délais et les engagements, de faire preuve d'intégrité, 
              de répondre aux besoins des clients de manière proactive, et de reconnaître l'importance de ses actions et de leurs conséquences.
            </p>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end why us section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contactez-nous
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-5 offset-md-1">
            <div class="form_container">
            <form action="" method="POST">
                <div>
                    <input type="text" name="nomc" placeholder="Votre Nom" />
                </div>
                <div>
                    <input type="text" name="phonec" placeholder="Numéro de téléphone" />
                </div>
                <div>
                    <input type="email" name="emailc" placeholder="Email" />
                </div>
                <div>
                    <input type="text" name="message" class="message-box" placeholder="Message" />
                </div>
                <div class="btn_box">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 px-0">
            <div class="map_container">
              <div class="map">
                <div id="googleMap"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end contact section -->

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

