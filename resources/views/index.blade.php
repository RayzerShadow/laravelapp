@extends('layouts.app')
  @section('logo')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="" src="assets/img/logo1.png" alt="Imperial">
        </div>

        <h1>Witaj w  beautylab</h1>
        <h2>Tutaj eksponujemy <span class="typed" data-typed-items="wewnętrzne piękno, pewność siebie, siłę i niezależność"></span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Strona główna</a>
          <a href="{{ url('/store_image')}}" class="btn-services">Usługi</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  @endsection
  @section('content')
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Kilka słów o nas</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">            Priorytetem naszej pracy jest najwyższa jakość, doświadczenie oraz profesjonalizm.</p>
          </div>
        </div>
      </div>
      <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="assets/img/12.jpg" alt="">
          </div>

          <div class="col-md-6 about-content" style="padding:40px">
            <h2 class="about-title">Z pasją tworzymy Twoje piękno</h2>
<br>
            <p class="about-text">
            BeautyLab tworzymy z myślą o osobach, które pragną dbać o swój piękny i zdrowy wygląd oraz przyjemnie spędzić czas.  Nasze kwalifikacje potwierdzają liczne certyfikaty oraz dyplomy specjalistyczne. Regularnie uczestniczymy w sympozjach, targach, szkoleniach i wykładach podnoszących nasze umiejętności.
            </p>
            <p class="about-text">
            Naszą misją jest pomaganie Klientom odnaleźć swoje piękno, dobre samopoczucie a także promowanie profilaktyki w zachowaniu zdrowia skóry. Stawiamy na rozwój, szkolenia oraz podążanie za potrzebami naszych Klientów.
Nasza praca to nasza pasja, dlatego z pewnością możesz nam zaufać.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-12">
            <h3 class="section-title">Produkty</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">W naszym salonie używamy produktów najwyższej jakości dlatego chcemy abyś poznał marki, z któymi pracujemy </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="service-title"><a href="">Kerastase</a></h4>
            <p class="service-description">Marka Kérastase jest uwielbiana przez miliony klientów na całym świecie. Powstała dzięki połączeniu sił naukowców i fryzjerów. Formuły przygotowywane są z dbałością o szczegóły, dzięki czemu rezultaty stosowania kosmetyków są tak efektowne. Wielość dostępnych linii gwarantuje satysfakcję klienta o każdym rodzaju włosów. Innowacyjność i doświadczenie to drugie imię Kérastase. Zaufaj rozwiązaniom naukowym i ciesz się pięknymi włosami! </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="service-title"><a href="">Loreal</a></h4>
            <p class="service-description">Filozofia L’Oréal Paris jest prosta – oferować klientom możliwie jak najwięcej maksymalnie skutecznych i pomysłowych produktów za przystępne ceny. Wyroby marki L’Oréal Paris powstają z wykorzystaniem najnowszych zdobyczy naukowych i na bazie składników najwyższej jakości. Kosmetyki L’Oréal Paris wyróżniają się bezkompromisową jakością i bogatą ofertą produktów, które towarzyszą kobietom i mężczyznom w codziennym życiu.</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="service-title"><a href="">Estee Lauder</a></h4>
            <p class="service-description"> Brand tworzy kosmetyki, które zadbają o Twoją skórę i pozwolą Ci stworzyć świetny makijaż. Jej założycielką jest urodzona w Nowym Jorku Josephine Esther Mentzer, krewna znanego chemika Johna Schotza. To właśnie dzięki niemu kobieta opanowała sztukę mieszania substancji, z których następnie w domowej kuchni powstawały pachnące kosmetyki, doprowadzając do pojawienia się linii kultowych kremów nadających skórze zdrowy koloryt i blask. </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="service-title"><a href="">Dior</a></h4>
            <p class="service-description">Kiedy Christian Dior otworzył swój Dom Mody w 1946 roku, wyobrażał sobie nową kobiecość, której niczego nie brakuje. Kobiecość, całkowita, kompletna kobiecość. Dzisiaj, od sukienek do akcesoriów, od zapachów do pomadek, aż do najbardziej eksperckiej pielęgnacji skóry, Dom Mody Dior podkreśla piękno kobiet, przywracając im blask i nowoczesność.</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="service-title"><a href="">Clarins</a></h4>
            <p class="service-description">Clarins Paris to marka ekskluzywnych, francuskich kosmetyków, które znajdziesz w Douglas. Odkryj moc ponad 250 naturalnych składników aktywnych połączonych z zaawansowanymi technologiami kosmetologicznymi. Z tego unikalnego połączenia powstają produkty przeznaczone do codziennej pielęgnacji Twojej skóry - bez względu na to, ile masz lat i jaki jest typ Twojej cery.</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="service-title"><a href="">Dr Irena Eris</a></h4>
            <p class="service-description">
Sklep Dr Irena ErisArrow down
Kosmetyki
Dr Irena Eris
Luksusowe kosmetyki Dr Irena Eris zostały stworzone z pasji do pielęgnacji piękna. Przełomowe receptury projektowane są w oparciu o własne zgłoszenia patentowe, nowatorskie technologie czy najlepsze, często trudno dostępne składniki, a dzięki synergii działań grupy ekspertów z różnych dziedzin, kosmetyki od lat wyróżniają się na rynku.</p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Zasubskrybuj nas aby otrzymać powiadomienia o nowościach</h3>
            <p class="subscribe-text">Dołącz do ponad 100 naszych subskrybentów i uzyskaj dostęp do najnowszych promocji, gratisów, zapowiedzi usług i nie tylko!</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="#">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Opinie naszych klientów</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Najważniejsza jest dla nas Twoja pozytywna opinia</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
              <h4>Joanna Patyk</h4>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b> „Zachęcam wszystkich, wspaniałe miejsce, cudowna atmosfera, przemiła obsługa, pełen profesjonalizm. Na pewno tam wrócę” <small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b> To jedyny salon, któremu jestem w stanie zaufać. Zawsze mam 100% pewność, że wyjdę zadowolony i ze świetną stylizacją.<small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="assets/img/client-2.jpg" style="object-fit:cover" alt=""></div>
              <h4>Arek Drozd</h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="assets/img/lient-1.jpg" alt=""></div>
              <h4>Sara Okil</h4>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b> Jestem bardzo zadowolona z obsługi i zabiegów, z których korzystam. W salonie zawsze mogę sobie nieco odpocząć, lubię te chwile relaksu. Dziękuję bardzo i do zobaczenia.<small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Nasz zespół</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Z pasją tworzymy Twoje piękno</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
              <h4>Jan Kowalski</h4>
              <span>Fryzjer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
              <h4>Amanda Sawicka</h4>
              <span>Kosmetyczka</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
              <h4>Paweł Pietrzak</h4>
              <span>Makijażysta</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
              <h4>Ola Stolarska</h4>
              <span>Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Kontakt</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Chcesz dowiedzieć się więcej? Skontaktuj się z nami w najbardziej dogodny dla Ciebie sposób!</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Libelta 13/15<br>Poznań, 60-288</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>beautylab@beautylab.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>589 548 855</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Imię" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Temat" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Wiadomość" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Twoja wiadomość została wysłana. Dziękujemy za kontakt</div>
                </div>
                <div class="text-center"><button type="submit">Wyślij wiadomość</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 @endsection