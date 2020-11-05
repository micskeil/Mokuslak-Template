<body>
      <section class="top-section">
        <div class="container-fluid">
          <div class="container">
            <nav class="navbar" id="nav-desktop">
              <ul class="navbar-nav nav navigation-list">
                <a href="#"><li class="menu-active"><?= NAV_HOME ?></li></a>
                <a href="index.php#services"><li><?= NAV_SERVICES ?></li></a>
                <a href="index.php#pricing"><li><?= NAV_PRICING ?></li></a>
                <a href="properties.php"><li><?= NAV_PROPERTIES ?></li></a>
                <a href="about.php"><li><?= NAV_ABOUT ?></li></a>
                <a href="/blog"><li><?= NAV_BLOG ?></li></a>
                <div class="menu-right">
                  <span class="lang-container lang-open" id="language-select"><img id="en-lang" class="lang-icon" src="img/en.svg" alt="English Language"></span>
                  <div id="languages" class="languages-homepage">
                    <a href="index.php?lang=hu" class="lang-container-opened"><img class="lang-icon lang-icon-inactive" src="img/hu.svg" alt="Hungarian Language"></a>
                    <a href="index.php?lang=ru" class="lang-container-opened"><img class="lang-icon lang-icon-inactive" src="img/ru.svg" alt="Russian Language"></a>
                  </div>
                  <a id="menu-getstarted" href="https://app.bnbnmore.com/registration" target="_blank"><li><?= NAV_GETSTARTED ?></li></a>
                  <a id="menu-ownerlogin" href="https://app.bnbnmore.com/" target="_blank"><li><?= NAV_LOGIN ?></li></a>
                </div>
              </ul>
            </nav>
            <div class="container-fluid">
              <nav class="navbar" id="nav-mobile">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"><?= NAV_SCREENREADER ?></span>
                    <span class="icon-bar fa-toggle"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="navbar-nav nav navigation-list">
                    <a href="index.php"><li class="menu-active"><?= NAV_HOME ?></li></a>
                    <a href="index.php#services"><li><?= NAV_SERVICES ?></li></a>
                    <a href="index.php#pricing"><li><?= NAV_PRICING ?></li></a>
                    <a href="properties.php"><li><?= NAV_PROPERTIES ?></li></a>
                    <a href="about.php"><li><?= NAV_ABOUT ?></li></a>
                    <a href="/blog"><li><?= NAV_BLOG ?></li></a>
                    <a href="https://app.bnbnmore.com/registration" target="_blank"><li class="menu-getstarted subp"><?= NAV_GETSTARTED ?></li></a>
                    <a href="https://app.bnbnmore.com/" target="_blank"><li class="menu-ownerlogin subp"><?= NAV_LOGIN ?></li></a>
                    <div class="mobile-lang-container">
                      <a href="index.php?lang=en"><img class="lang-icon lang-icon-mobile" src="img/en.png" alt="English Language"></a>
                      <a href="index.php?lang=hu"><img class="lang-icon lang-icon-mobile" src="img/hu.png" alt="Hungarian Language"></a>
                      <a href="index.php?lang=ru"><img class="lang-icon lang-icon-mobile" src="img/ru.svg" alt="Russian Language"></a>
                    </div>
                  </ul>
                </div>
              </nav>

            </div>

            <div class="mid-img">
              <img id="mid-logo" src="img/logo.png" alt="bnbnMore – More than hosting!">
              <div class="mid-btn">
                <a href="https://app.bnbnmore.com/registration" target="_blank"><button class="btn-primary mid-btn-orange mid-btn-align"><?= CTA_LISTING ?></button></a>
                <a href="https://app.bnbnmore.com/" target="_blank"><button class="btn-primary mid-btn-blue"><?= CTA_APPLOGIN ?></button></a>
              </div>
            </div>
          </div>
        </div>

      </section>