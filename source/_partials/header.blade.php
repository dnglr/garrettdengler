<header class="header {{ $page_name == 'home' ? 'is-splash' : '' }}">
  <nav class="header__nav" role="navigation">
    <div class="logo is-hidden">
      <picture class="js-logo">
        <source srcset="/assets/images/logo_lg.png" media="(min-width: 1440px)">
        <source srcset="/assets/images/logo_md.png" media="(min-width: 768px)">
        <img src="/assets/images/logo_sm.png" alt="Garrett Dengler" class="logo__img">
      </picture>
    </div>

    <button type="button" class="header__nav__toggle hamburger hamburger--emphatic">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </button>

    <ul class="header__nav__list">
      <li class="header__nav__item"><a href="#about">About</a></li>
      <li class="header__nav__item"><a href="#blog">Blog</a></li>
      <li class="header__nav__item"><a href="#contact">Contact</a></li>
    </ul>

    <a class="header__start" href="#about">Start</a>
  </nav>
</header>