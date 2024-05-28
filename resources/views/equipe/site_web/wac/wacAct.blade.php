<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="refresh" content="3" /> -->
  <meta name="keywords" content="navbar, responsive, HTML, CSS, JavaScript, nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wydad Casablanca</title>
  <link href="{{ asset('css/homestyle.css') }}" rel="stylesheet">
  <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
  <style>
  
@media screen and (max-width: 768px) {

  #content h1.content-header {
    font-size: 25px;
  }

  #content p.content-para {
    font-size: 13px;
  }
}

@media (max-width: 480px) {
    .logo img {
        height: 40px; /* Ajustez selon votre besoin */
    }

   

    .news-cards {
        flex-direction: column;
        align-items: center;
    }

    .news-card {
        max-width: 90%;
    }


}



#content {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;
  height: 82vh; /* change to 92vh */
  margin-top: -18vh; /* change to -8vh */
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 1px;
}

#content h1 {
  text-transform: uppercase;
  padding: 25px 25px 10px;
  margin: 25px 25px 0;
  font-size: 52px;
}

#content p {
  font-size: 21px;
}



/section3/
  .news-section {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
  }

    .news-section h2 {
        margin-bottom: 20px;
        font-size: 2em;
        color: #BF953F;
    }

    .news-cards {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 20px;
        padding: 30px
    }
.news-card {
  background: linear-gradient(42deg, rgba(104,10,10,1) 0%, rgba(159,20,20,1) 48%, rgba(189, 3, 3, 0.844) 100%);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 300px;
        text-align: center;
        padding: 20px;
    }

    .news-card img {
        max-width: 100px;
        margin-bottom: 15px;
    }

    .news-card h3 {
        margin-bottom: 10px;
        font-size: 1.25em;
        color: white;
    }

.news-card p {
        margin-bottom: 15px;
        color: rgb(209, 235, 217);
    }

    .read-more {
        background-color: #770202;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .read-more:hover {
        background-color: #00796b;
    }


  </style>
</head>

<body>
  <header>
    <nav class="navbar">
    <div class="menu-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="logo">
      <a href="{{ url('/') }}">
        <img src="{{asset('images/wac/wac.png')}}" alt="">
      </a>
      <h3>Wydad Casablanca</h3>
    </div>

    <ul class="nav-links">
      <li><a href="{{ url('/wac') }}">Acceuil</a></li>
      <li><a href="{{ url('/wac/actualites') }}">Actualités</a></li>
      <li><a href="">équipe</a></li>
      <li><a href="">Classement</a></li>
      <li><a href="">Matchs</a></li>
      <li><a href="{{ url('/wac/palmares') }}">Palmarès</a></li>

    </ul>
    </nav>
  </header> 
  <br></br>
  <br></br>
    

  <section>
    <main class="main-content">
      <section class="news-section">
          <div class="news-cards">
              <div class="news-card">
                  <img src="{{asset('images/wac/wac.png')}}" alt="Raja Club Athletic">
                  <h3>Performance en Ligue des Champions CAF :</h3>
                  <p>Wydad Casablanca a récemment été éliminé de la Ligue des Champions de la CAF par Al Ahly, après avoir perdu lors de la finale retour.</p>
                  <p>20-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/wac/wac.png')}}" alt="Raja Club Athletic">
                  <h3>Problèmes juridiques :</h3>
                  <p>Le président du club, Saïd Naciri, a été arrêté pour son implication présumée dans un trafic international de drogues. Cet incident a créé une onde de choc au sein du club et parmi les supporters.</p>
                  <p>10-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/wac/wac.png')}}" alt="Raja Club Athletic">
                  <h3>Mercato et transferts :</h3>
                  <p>Abdellah Haimoud, un jeune talent du Wydad, est en discussions avancées avec le club français Angers SCO pour un éventuel transfert. Ce mouvement pourrait avoir un impact significatif sur l'équipe, étant donné le potentiel du joueur.</p>
                  <p>10-04-2024</p>
              </div>
          </div><br>
          
          <div>
            
          </div>
      </section>
  </main>
  </section>
  <section>
    <main class="main-content">
      <section class="news-section">
 <br></br> 
          <div class="news-cards">
              <div class="news-card">
                  <img src="{{asset('images/wac/wac.png')}}" alt="Raja Club Athletic">
                  <h3>Performance en Ligue des Champions CAF :</h3>
                  <p>Wydad Casablanca a récemment été éliminé de la Ligue des Champions de la CAF par Al Ahly, après avoir perdu lors de la finale retour.</p>
                  <p>20-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/wac/wac.png')}}" alt="Raja Club Athletic">
                  <h3>Problèmes juridiques :</h3>
                  <p>Le président du club, Saïd Naciri, a été arrêté pour son implication présumée dans un trafic international de drogues. Cet incident a créé une onde de choc au sein du club et parmi les supporters.</p>
                  <p>10-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/wac/wac.png')}}" alt="Raja Club Athletic">
                  <h3>Mercato et transferts :</h3>
                  <p>Abdellah Haimoud, un jeune talent du Wydad, est en discussions avancées avec le club français Angers SCO pour un éventuel transfert. Ce mouvement pourrait avoir un impact significatif sur l'équipe, étant donné le potentiel du joueur.</p>
                  <p>10-04-2024</p>
              </div>
          </div><br>
          
          <div>
            
          </div>
      </section>
  </main>
  </section>
  
  <section>
    
  </section>
  <br></br>

  <footer>
    <div class="footer-container">
      <h2 class="footer-title">Principaux partenaires du club</h2>
      <div class="footer-logos">
        <img width="1323" height="1536" src="{{asset('images/wac/or.png')}}">
        <img width="1114" height="769" src="{{asset('images/wac/ingelec.png')}}">
        <img width="1274" height="718" src="{{asset('images/wac/itqan.png')}}">
        <img width="1485" height="965" src="{{asset('images/wac/macron-logo.png')}}">
        <img width="1714" height="377" src="{{asset('images/wac/sama.png')}}">
      </div>
    </div>
  </footer>

  
  <!-- script -->
  
  <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });


    const menuSlide = () => {
      const menuIcon = document.querySelector(".menu-icon");
      const navLinks = document.querySelector(".nav-links");
      const navLinksInner = document.querySelectorAll(".nav-links li");

      menuIcon.addEventListener("click", () => {
        //toggle active class
        navLinks.classList.toggle("menu-active");

        //animate navLinks
        navLinksInner.forEach((li, index) => {
          if (li.style.animation) {
            li.style.animation = "";
          } else {
            li.style.animation = `navLinkAnime 0.5s ease forwards ${
              index / 7 + 0.3
            }s`;
          }
        });

        //toggle for menu-icon animation
        menuIcon.classList.toggle("span-anime");
      });
    };
    menuSlide();
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel > input');
    const totalSlides = slides.length;

    function changeSlide() {
        slides[currentSlide].checked = false;
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].checked = true;
    }

    setInterval(changeSlide, 7000);
  </script>

</body>

</html>