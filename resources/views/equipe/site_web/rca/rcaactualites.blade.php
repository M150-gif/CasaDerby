<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="refresh" content="3" /> -->
  <meta name="keywords" content="navbar, responsive, HTML, CSS, JavaScript, nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Raja Casablanca</title>
  <link href="{{ asset('css/homestyle2.css') }}" rel="stylesheet">
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

    .read-more {
        padding: 8px 15px;
    }

    .news-cards {
        flex-direction: column;
        align-items: center;
    }

    .news-card {
        max-width: 90%;
    }

    .trophies-grid {
        grid-template-columns: repeat(2, 1fr);
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



/*section3*/
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
  background-color: #004d40;border-radius: 10px;
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
        background-color: #004d40;
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

/**/
.main-content {
    flex: 1;
    
}

.trophies-section {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    
}

.trophies-section h2 {
    margin-bottom: 20px;
    font-size: 2em;
    color: #BF953F;
}

.trophies-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    padding-top: 30px;
}

.trophy-card {
  background-color: #004d40;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 20px;
    text-align: center;
    
}

.trophy-card img {
    max-width: 50px; /* Ajustez selon votre besoin */
    margin-bottom: 15px;
}

.trophy-card h3 {
    margin-bottom: 10px;
    font-size: 1.25em;
    color: white;
}

.trophy-card p {
    margin-bottom: 15px;
    color: white;
}




.trophies-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: auto;
    gap: 20px;
}

.trophy-card {
  background-color: #004d40;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 20px;
    text-align: center;
}

.trophy-card h3 {
    margin-bottom: 10px;
    font-size: 1.25em;
    color: white;
}

.trophy-card p {
    margin-bottom: 15px;
    color: wheat;
}

.history-section {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    margin: 0 auto;
    max-width: 1200px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.history-content {
    flex: 1;
}

.history-content h2 {
    margin-bottom: 20px;
    font-size: 2.5em;
    background-color: #004d40;
    font-family: 'Georgia', serif;
}

.history-content p {
    margin-bottom: 15px;
    line-height: 1.8;
    font-size: 1.1em;
}

.history-image {
    flex: 0 0 300px;
    text-align: center;
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.history-image img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}

.history-image p {
    font-size: 0.9em;
    color: #666;
}

/* Responsive Design */
@media (max-width: 768px) {
    .history-section {
        flex-direction: column;
        align-items: center;
        padding: 10px;
    }

    .history-image {
        max-width: 100%;
    }

    .history-content h2 {
        font-size: 2em;
    }
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
        <img src="{{asset('images/rca/rca.png')}}" alt="">
      </a>
      <h3>Raja Casablanca</h3>
    </div>

    <ul class="nav-links">
      <li><a href="{{ url('/rca') }}">Acceuil</a></li>
      <li><a  href="{{ url('/rca/actualites') }}">Actualités</a></li>
      <li><a href="">équipe</a></li>
      <li><a href="">Classement</a></li>
      <li><a href="">Matchs</a></li>
      <li><a href="{{ url('/rca/palmares') }}">Palmarès</a></li>

    </ul>
    </nav>
  </header> 
  <br></br>

  <section>
    <main class="main-content">
      <section class="news-section">
          <h2>Actualités du club</h2>
          <div class="news-cards">
              <div class="news-card">
                  <img src="{{asset('images/rca/rca.png')}}" alt="Raja Club Athletic">
                  <h3>Raja Club émet des billets</h3>
                  <p>Raja Athletic Club émet des billets virtuels pour son match dans le cadre de la visite de retour des matches du tournoi professionnel, et dans le contexte des circonstances générales</p>
                  <p>20-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/rca/rca.png')}}" alt="Raja Club Athletic">
                  <h3>Raja Club félicite Soufiane</h3>
                  <p>Le Raja Sports Club adresse ses plus chaleureuses félicitations au fils du club et l'un des modèles authentiques de la qualité de la formation sportive et pédagogique dans les murs du Raja Sports Club.</p>
                  <p>10-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/rca/rca.png')}}" alt="Raja Club Athletic">
                  <h3>Dans des circonstances financières difficiles</h3>
                  <p>Face à la situation financière difficile du Raja Athletic Club, la campagne de tickets virtuels lance un don pour clôturer les dossiers de Mohamed Adhardour et du vieil intrus financier.</p>
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
          <div class="news-cards">
              <div class="news-card">
                  <img src="{{asset('images/rca/rca.png')}}" alt="Raja Club Athletic">
                  <h3>Raja Club émet des billets</h3>
                  <p>Raja Athletic Club émet des billets virtuels pour son match dans le cadre de la visite de retour des matches du tournoi professionnel, et dans le contexte des circonstances générales</p>
                  <p>20-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/rca/rca.png')}}" alt="Raja Club Athletic">
                  <h3>Raja Club félicite Soufiane</h3>
                  <p>Le Raja Sports Club adresse ses plus chaleureuses félicitations au fils du club et l'un des modèles authentiques de la qualité de la formation sportive et pédagogique dans les murs du Raja Sports Club.</p>
                  <p>10-05-2024</p>
              </div>
              <div class="news-card">
                  <img src="{{asset('images/rca/rca.png')}}" alt="Raja Club Athletic">
                  <h3>Dans des circonstances financières difficiles</h3>
                  <p>Face à la situation financière difficile du Raja Athletic Club, la campagne de tickets virtuels lance un don pour clôturer les dossiers de Mohamed Adhardour et du vieil intrus financier.</p>
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
        <img width="1323" height="1536" src="https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1.png" class="attachment-full size-full wp-image-2457" alt="" srcset="https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1.png 1323w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-258x300.png 258w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-882x1024.png 882w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-768x892.png 768w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-110x128.png 110w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-28x32.png 28w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-500x580.png 500w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-800x929.png 800w, https://rajacasablanca.com/wp-content/uploads/logo-blanc-1323x1536-1-1280x1486.png 1280w" sizes="(max-width: 1323px) 100vw, 1323px">
        <img width="1114" height="769" src="https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x.png" class="attachment-full size-full wp-image-2086" alt="" srcset="https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x.png 1114w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-300x207.png 300w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-1024x707.png 1024w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-768x530.png 768w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-128x88.png 128w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-32x22.png 32w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-500x345.png 500w, https://rajacasablanca.com/wp-content/uploads/Nor-dar@2x-800x552.png 800w" sizes="(max-width: 1114px) 100vw, 1114px">
        <img width="1274" height="718" src="https://rajacasablanca.com/wp-content/uploads/ANP@2x.png" class="attachment-full size-full wp-image-2453" alt="" srcset="https://rajacasablanca.com/wp-content/uploads/ANP@2x.png 1274w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-300x169.png 300w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-1024x577.png 1024w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-768x433.png 768w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-128x72.png 128w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-32x18.png 32w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-500x282.png 500w, https://rajacasablanca.com/wp-content/uploads/ANP@2x-800x451.png 800w" sizes="(max-width: 1274px) 100vw, 1274px">
        <img width="1375" height="567" src="https://rajacasablanca.com/wp-content/uploads/Marsa@2x.png" class="attachment-full size-full wp-image-2089" alt="" srcset="https://rajacasablanca.com/wp-content/uploads/Marsa@2x.png 1375w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-300x124.png 300w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-1024x422.png 1024w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-768x317.png 768w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-128x53.png 128w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-32x13.png 32w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-500x206.png 500w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-800x330.png 800w, https://rajacasablanca.com/wp-content/uploads/Marsa@2x-1280x528.png 1280w" sizes="(max-width: 1375px) 100vw, 1375px">
        <img width="1485" height="965" src="https://rajacasablanca.com/wp-content/uploads/Umbro@2x.png" class="attachment-full size-full wp-image-2088" alt="" srcset="https://rajacasablanca.com/wp-content/uploads/Umbro@2x.png 1485w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-300x195.png 300w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-1024x665.png 1024w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-768x499.png 768w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-128x83.png 128w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-32x21.png 32w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-500x325.png 500w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-800x520.png 800w, https://rajacasablanca.com/wp-content/uploads/Umbro@2x-1280x832.png 1280w" sizes="(max-width: 1485px) 100vw, 1485px">	
        <img width="1714" height="377" src="https://rajacasablanca.com/wp-content/uploads/1xbet-@2x.png" class="attachment-full size-full wp-image-2087" alt="" srcset="https://rajacasablanca.com/wp-content/uploads/1xbet-@2x.png 1714w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-300x66.png 300w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-1024x225.png 1024w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-768x169.png 768w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-1536x338.png 1536w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-128x28.png 128w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-32x7.png 32w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-500x110.png 500w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-800x176.png 800w, https://rajacasablanca.com/wp-content/uploads/1xbet-@2x-1280x282.png 1280w" sizes="(max-width: 1714px) 100vw, 1714px">	
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