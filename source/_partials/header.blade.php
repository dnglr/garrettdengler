<header class="header {{ $page_name == 'home' ? 'header--splash' : '' }}">
  <nav class="header__nav {{ $page_name == 'home' ? '' : 'is-sticky' }}" role="navigation">
    <a class="logo is-hidden" href="/">
      <picture class="js-logo">
        <source srcset="/assets/images/logo_lg.png" media="(min-width: 1440px)">
        <source srcset="/assets/images/logo_md.png" media="(min-width: 768px)">
        <img src="/assets/images/logo_sm.png" alt="Garrett Dengler" class="logo__img">
      </picture>
      {{-- <svg class="logo__triangle" width="457" height="459" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><filter x="-7.5%" y="-7.5%" width="114.9%" height="114.9%" filterUnits="objectBoundingBox" id="a"><feMorphology radius=".5" operator="dilate" in="SourceAlpha" result="shadowSpreadOuter1"/><feOffset in="shadowSpreadOuter1" result="shadowOffsetOuter1"/><feMorphology radius="10.5" in="SourceAlpha" result="shadowInner"/><feOffset in="shadowInner" result="shadowInner"/><feComposite in="shadowOffsetOuter1" in2="shadowInner" operator="out" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="10" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0.847058824 0 0 0 0 0.141176471 0 0 0 0 0.48627451 0 0 0 1 0" in="shadowBlurOuter1"/></filter><path id="b" d="M229 21l210 420H19z"/></defs><g transform="rotate(-180 229 231)" fill="none" fill-rule="evenodd"><use fill="#000" filter="url(#a)" xlink:href="#b"/><path stroke="#D8247C" stroke-width="10" d="M229 32.18L430.91 436H27.09L229 32.18z" stroke-linejoin="square"/></g></svg> --}}
      <svg class="logo__triangle"  viewBox="0 0 420 420" xmlns="http://www.w3.org/2000/svg"><path d="M210 408.82L8.09 5h403.82L210 408.82z" stroke="#D8247C" stroke-width="10" fill="none" fill-rule="evenodd"/></svg>
      <svg class="logo__triangle logo__triangle--glow"  viewBox="0 0 420 420" xmlns="http://www.w3.org/2000/svg"><path d="M210 408.82L8.09 5h403.82L210 408.82z" stroke="#D8247C" stroke-width="10" fill="none" fill-rule="evenodd"/></svg>
    </a>

    <button type="button" class="header__nav__toggle hamburger hamburger--emphatic">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </button>

    <ul class="header__nav__list">
      <li class="header__nav__item"><a href="/#about">About</a></li>
      <li class="header__nav__item"><a href="/blog">Blog</a></li>
      <li class="header__nav__item"><a href="/#contact">Contact</a></li>
    </ul>

    <a class="header__start" href="/#about">Start</a>
  </nav>
</header>