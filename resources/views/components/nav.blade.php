<nav class="nl-nav" id="nlNav">
  <div class="container-xl">
    <div class="nl-nav__inner">

      {{-- Logo --}}
      <a href="{{ route('home') }}" class="nl-nav__logo" aria-label="Niduslab home">
        <div class="nl-logo-mark">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="10" fill="#5D2EDE"/>
            {{-- Circle outline inside --}}
            <circle cx="18" cy="18" r="9" stroke="white" stroke-width="2" fill="none"/>
            <circle cx="18" cy="18" r="4" fill="white"/>
          </svg>
        </div>
        <span class="nl-logo-text">Niduslab</span>
      </a>

      {{-- Desktop pill menu --}}
      <div class="nl-nav__pill-wrap">
        <ul class="nl-nav__menu" role="list">
          <li><a href="#home" class="nl-nav__link nl-nav__link--active">Home</a></li>
          <li><a href="#about" class="nl-nav__link">About</a></li>
          <li><a href="#services" class="nl-nav__link">Services</a></li>
          <li><a href="#case-studies" class="nl-nav__link">Case Studies</a></li>
          <li><a href="#industries" class="nl-nav__link">Industries</a></li>
          <li><a href="#blog" class="nl-nav__link">Blog</a></li>
        </ul>
      </div>

      {{-- CTA --}}
      <div class="nl-nav__actions">
        <a href="#cta" class="nl-nav__cta">
          Let's Talk
          <span class="nl-nav__cta-arrow">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
              <path d="M2.5 7h9M8 3.5L11.5 7 8 10.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>

        {{-- Mobile burger --}}
        <button class="nl-nav__burger" id="navBurger" aria-label="Open menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>

    </div>
  </div>

  {{-- Mobile drawer --}}
  <div class="nl-nav__drawer" id="navDrawer" aria-hidden="true">
    <ul role="list">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#case-studies">Case Studies</a></li>
      <li><a href="#industries">Industries</a></li>
      <li><a href="#blog">Blog</a></li>
      <li><a href="#cta" class="nl-nav__cta w-100 justify-content-center mt-2">Let's Talk</a></li>
    </ul>
  </div>
</nav>
