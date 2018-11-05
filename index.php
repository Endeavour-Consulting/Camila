<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">
    <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400i|Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/left-column.css">
    <link rel="stylesheet" href="./css/btn-panel.css">
    <link rel="stylesheet" href="./css/icons-panel.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/media.css">
    <title>Camila De Paula</title>
  </head>
  <body>
    <div id="wrap" class="main row">
      <div class="col half">
        <div class="profile">
          <div class="header">
            <div class="header-image">
              <img
                src="./images/background.jpg"
                alt="Camila De Paula: header image">
            </div>
             <img src="./images/logo.png" alt="Camila De Paula: logo" class="logo">
          </div>
          <div class="content">
            <div class="user-picture">
              <img
                src="./images/profile-picture.png"
                alt="Camila De Paula: profile picture">
            </div>
            <div class="profile_name text-center">
              <span>CAMILA DE PAULA</span>
            </div>
            <div class="profile_description text-center">
              <span>Chief Customer Officer</span>
            </div>
          </div>
        </div>
      </div>
      <div
        class="col half"
        id="rightCol">
        <div class="contact-menu">
          <ul>
            <li>
              <a
                target="_blank"
                href="https://www.anteroz.com/the-brand-en">
                <img
                  src="./images/icons/webpage.svg"
                  alt="Camila De Paula: world wide web"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="tel:+34634594569">
                <img
                  src="./images/icons/phone.svg"
                  alt="Camila De Paula: call"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="sms:+34634594569">
                <img
                  src="./images/icons/sms.svg"
                  alt="Camila De Paula: sms"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="mailto:camila@anteroz.com">
                <img
                  src="./images/icons/mail.svg"
                  alt="Camila De Paula: mail"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="./files/CAMILA-DE-PAULA-business-card.vcf.vcf">
                <img
                  src="./images/icons/download.svg"
                  alt="Camila De Paula: download"
                  class="svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="social-media">
          <ul>
            <li>
              <a
                id="btn-instagram"
                onclick="openModal('instagram')">
                <img
                  src="./images/icons/instagram.svg"
                  alt="Camila De Paula: instagram"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-facebook"
                onclick="openModal('facebook')">
                <img
                  src="./images/icons/facebook.svg"
                  alt="Camila De Paula: facebook"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-google"
                target="_blank"
                href="https://www.google.com.ua/search?q=Anteroz,+Pje.+Lucero,+1,+28047+Madrid,+%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F&ludocid=12181515388131447326#lrd=0xd4188036bf283e3:0xa90d6fb47f87921e,3">
                <img
                  src="./images/icons/google-review.svg"
                  alt="Camila De Paula: google"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-youtube"
                target="_blank"
                href="https://www.youtube.com/watch?v=dVcav3uVNvE">
                <img
                  src="./images/icons/youtube.svg"
                  alt="Camila De Paula: youtube"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-linkedin"
                target="_blank"
                href="https://www.linkedin.com/company/anteroz/">
                <img
                  src="./images/icons/linkedin.svg"
                  alt="Camila De Paula: linkedin"
                  class="svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="btn-panel">
          <a
            class="btn"
            id="btn-shop"
            onClick="openModal('shop')">
            <span>Products</span>
          </a>
          <a
            class="btn"
            id="btn-members"
            onClick="openModal('members')">
            <span>Become member</span>
          </a>
          <a
            class="btn"
            id="btn-subscribe"
            onClick="openModal('subscribe')">
            <span>Subscribe</span>
          </a>
          <a
            class="btn"
            id="btn-about"
            onClick="openModal('about')">
            <span>News</span>
          </a>
          </a>
        </div>
      </div>

    </div>


      <div id="instagram" class="modal">

        <header>
          <div onclick="closeModal('instagram')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <!-- InstaWidget -->
           <a href="https://instawidget.net/v/user/anterozspirits" id="link-c762160e33389b87034bd8b27419e6d054d71783c61edb3ec8d598c11f76b3fd">@anterozspirits</a>
          <script  src="https://instawidget.net/js/instawidget.js?u=c762160e33389b87034bd8b27419e6d054d71783c61edb3ec8d598c11f76b3fd&width=100%"></script>
        </div>
        <iframe width="320" height="440"  data-src="https://instagram.com/p/qbq6fIJMVZ/embed" frameborder="0"></iframe>
      </div>
      <div id="facebook" class="modal">

        <header>
          <div onclick="closeModal('facebook')" class="close-btn"></div>
        </header>
        <div class="modal__modal-content scrollable">
          <script  src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-2757e6fb-98dd-4e4b-a665-16447ad7539e"></div>
        </div>

      </div>

      <div id="shop" class="modal">

        <header>
          <div onclick="closeModal('shop')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <iframe data-src="https://www.anteroz.com/the-collection-en"></iframe>
        </div>

      </div>

      <div id="members" class="modal">

        <header>
          <div onclick="closeModal('members')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <iframe data-src="https://www.anteroz.com/members"></iframe>
        </div>

      </div>

      <div id="about" class="modal">

        <header>
          <div onclick="closeModal('about')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <iframe data-src="https://www.anteroz.com/anteroz-world"></iframe>
        </div>

      </div>

      <div id="subscribe" class="modal">

        <header>
          <div onclick="closeModal('subscribe')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">
          <div style="padding: 30px">
            <iframe
              width="100%"
              height="100%"
              data-src="https://www.youtube.com/embed/dVcav3uVNvE"
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen>
            </iframe>
          </div>
        </div>

      </div>

    <!-- Loader -->
    <div class="loader">
      <div class="loader_inner"></div>
    </div>

    <!-- Scripts -->
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/svg-img.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/tools.js"></script>
    <script src="./js/modal.js"></script>
  </body>
</html>
