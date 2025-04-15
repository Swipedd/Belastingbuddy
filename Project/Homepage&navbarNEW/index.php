<?php include 'navbar.php'; ?>
<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Belasting Buddy</title>
   </head>
   <body>
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
            <img src="assets/img/home-lines-bg.svg" alt="image" class="home__lines">
            
            <div class="home__container container grid">
               <div class="home__content grid">
                  <div class="home__data">
                     <h1 class="home__title">
                     Ontdek Waar <br>   
                     Jij Recht <br> 
                     Op Hebt
                     </h1>
   
                     <p class="home__description">
                     Controleer snel en eenvoudig of jij recht hebt op huurtoeslag, zorgtoeslag of kinderopvangtoeslag.<br> 
                     Alles op één plek geregeld.
                     </p>
   
                     <div class="home__buttons">   
                        <a href="#toeslagen" class="button__link">
                           <span>View toeslagen</span>
                           <i class="ri-arrow-down-line"></i>
                        </a>
                     </div>
                  </div>

                  <div class="home__info">
                  </div>
               </div>

               <div class="home__images">
                  <img src="assets/img/home-img-1.png" alt="image" class="home__img-1">
                  <img src="assets/img/home-img-2.png" alt="image" class="home__img-2">
               </div>
            </div>
         </section>

         <!--==================== overons ====================-->
         <section class="overons section" id="overons">
            <div class="overons__container container grid">
               <div class="overons__data">
                  <span class="section__subtitle">Over Ons</span>
                  <h2 class="section__title">
                  Eerlijk Inzicht <br> In Jouw Toeslagen
                  </h2>

                  <p class="overons__description">
                  Wij helpen je om zonder gedoe te ontdekken voor welke toeslagen je in aanmerking komt. 
                  Wil je weten wie we zijn en wat ons drijft? 
                  Klik op Lees meer en ontdek het verhaal achter Belasting Buddy.
                  </p>

                  <a href="../Overonspagina/overons.php" class="nav__link button">Lees meer</a>
                  </div>

               <div class="overons__images">
                  <img src="assets/img/overons-img-1.png" alt="image" class="overons__img-1">
                  <img src="assets/img/overons-img-2.png" alt="image" class="overons__img-2">
               </div>
            </div>
         </section>

        
         <!--==================== toeslagen ====================-->
         <section class="toeslagen section" id="toeslagen">
            <span class="section__subtitle">Toeslagen</span>
            <h2 class="section__title">Beschikbare <br> Toeslagen</h2>

            <div class="toeslagen__container container grid">
               <article class="toeslagen__card">
                  <img src="assets/img/toeslagen-img-1.png" alt="image" class="toeslagen__img">

                  <div class="toeslagen__data">
                     <h2 class="toeslagen__title">Huurtoeslag</h2>
                     <hr>
                     <br>
                     <p>
                     Een bijdrage in de huurkosten voor mensen met een lager inkomen. <br><br>
                     Bekijk of jij hier recht op hebt.
                     </p>
                     <br>
                     <a href="../Toeslagen/toeslag.php" class="nav__link button">Vraag Aan</a>
                     </div>
               </article>

               <article class="toeslagen__card">
                  <img src="assets/img/toeslagen-img-2.png" alt="image" class="toeslagen__img">

                  <div class="toeslagen__data">
                     <h2 class="toeslagen__title">Zorgtoeslag</h2>
                     <hr>
                     <br>
                     <p>
                     Zorgtoeslag helpt je bij het betalen van je zorgverzekering. <br><br>
                     Bekijk of jij hier recht op hebt.
                     </p>
                     <br>
                     <a href="../Toeslagen/toeslag.php" class="nav__link button">Vraag Aan</a>
                  </div>
               </article>

               <article class="toeslagen__card">
                  <img src="assets/img/toeslagen-img-3.png" alt="image" class="toeslagen__img">

                  <div class="toeslagen__data">
                     <h2 class="toeslagen__title">Kinderopvangtoeslag</h2>
                     <hr>
                     <br>
                     <p>
                     Deze toeslag helpt met het vergoeden van kinderopvangkosten. <br><br>
                     Bekijk of jij hier recht op hebt.
                     </p>
                     <br>
                     <a href="../Toeslagen/toeslag.php" class="nav__link button">Vraag Aan</a>
                  </div>
               </article>
            </div>
         </section>

         <!--==================== CONTACT ====================-->
         <section class="contact section" id="contact">
            <div class="container">
               <span class="section__subtitle">CONTACT</span>
               <h2 class="section__title">Neem Contact Op</h2>

               <div class="contact__container grid">
                  <img src="assets/img/contact-img.png" alt="image" class="contact__img">

                  <div class="contact__data grid">
                     <div class="contact__card">
                        <div class="contact__icon">
                          <i class="ri-phone-fill"></i>
                        </div>
   
                        <h3 class="contact__title">Binnenland</h3>
                        <address class="contact__info">
                        0800 - 0543 <br>
                        </address>
                     </div>
   
                     <div class="contact__card">
                        <div class="contact__icon">
                          <i class="ri-earth-fill"></i>
                        </div>
   
                        <h3 class="contact__title">Buitenland</h3>
                        <address class="contact__info">
                        +31 555 385 385 <br>
                        </address>
                     </div>
   
                     <div class="contact__card">
                        <div class="contact__icon">
                           <i class="ri-survey-line"></i>
                        </div>
   
                        <h3 class="contact__title">Stuur ons een formulier</h3>
                        <br>
                        <a href="../Contactpagina/contact.php" class="nav__link button">Formulier</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="nav__logo">
                  <img src="assets/img/logo.jpeg" alt="Bedrijfslogo" width="50" height="50">
               </a>

               <p class="footer__description">Eerlijk inzicht in toeslagen<br>snel geregeld</p>
            </div>

            <div class="footer__content grid">
               <div>
                  <h3 class="footer__title">Navigatie</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#overons" class="footer__link">Over Ons</a>
                     </li>
                     <li>
                        <a href="#toeslagen" class="footer__link">Toeslagen</a>
                     </li>
                     <li>
                        <a href="#contact" class="footer__link">Contact</a>
                     </li>
                  </ul>
               </div>
<br>
<br>
<br>
<br>
               <div>
                  <h3 class="footer__title">Klantenservice</h3>

                  <ul class="footer__list">
                     <li>
                        <address class="footer__info">Ma t/m Vr: 08:00 – 17:00</address>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <span class="footer__copy">
            &#169; 2025 Belasting Buddy. Alle rechten voorbehouden.
         </span>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="assets/js/scrollreveal.min.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="assets/js/swiper-bundle.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>