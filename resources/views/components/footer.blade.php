<footer class="nl-footer" id="footer">
  <div class="container-xl">

    <div class="nl-footer__grid">

      {{-- Brand col --}}
      <div class="nl-footer__col nl-footer__col--brand">
        <a href="{{ route('home') }}" class="nl-footer__logo" aria-label="Niduslab home">
          <svg width="28" height="28" viewBox="0 0 32 32" fill="none"><rect width="32" height="32" rx="8" fill="#5D2EDE"/><text x="16" y="22" font-family="Inter Tight, sans-serif" font-size="16" font-weight="700" fill="#fff" text-anchor="middle">N</text></svg>
          <span>Niduslab</span>
        </a>
        <p class="nl-footer__tagline">AI & Automation Studio.<br>We build the systems your business runs on.</p>
        <div class="nl-footer__socials">
          <a href="#" aria-label="Twitter/X">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.74l7.73-8.835L1.254 2.25H8.08l4.259 5.622L18.244 2.25zM17.083 19.77h1.833L7.084 4.126H5.117L17.083 19.77z"/></svg>
          </a>
          <a href="#" aria-label="LinkedIn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2" fill="currentColor"/></svg>
          </a>
          <a href="#" aria-label="GitHub">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
          </a>
        </div>
      </div>

      {{-- Products --}}
      <div class="nl-footer__col">
        <h4 class="nl-footer__col-heading">Products</h4>
        <ul class="nl-footer__links" role="list">
          <li><a href="#">Nidus Agents</a></li>
          <li><a href="#">NidusCart</a></li>
          <li><a href="#">NidusHealth</a></li>
          <li><a href="#">NidusRealty</a></li>
          <li><a href="#">NidusTime</a></li>
          <li><a href="#">NidusCloud</a></li>
        </ul>
      </div>

      {{-- Services --}}
      <div class="nl-footer__col">
        <h4 class="nl-footer__col-heading">Services</h4>
        <ul class="nl-footer__links" role="list">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Mobile Apps</a></li>
          <li><a href="#">AI Engineering</a></li>
          <li><a href="#">UX / UI Design</a></li>
          <li><a href="#">Data Engineering</a></li>
          <li><a href="#">Growth & SEO</a></li>
        </ul>
      </div>

      {{-- Company --}}
      <div class="nl-footer__col">
        <h4 class="nl-footer__col-heading">Company</h4>
        <ul class="nl-footer__links" role="list">
          <li><a href="#">About</a></li>
          <li><a href="#">Case Studies</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      {{-- Legal --}}
      <div class="nl-footer__col">
        <h4 class="nl-footer__col-heading">Legal</h4>
        <ul class="nl-footer__links" role="list">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Cookie Policy</a></li>
        </ul>
      </div>

    </div>

    {{-- Large wordmark --}}
    <div class="nl-footer__wordmark" aria-hidden="true">Niduslab</div>

    {{-- Bottom bar --}}
    <div class="nl-footer__bottom">
      <p>&copy; {{ date('Y') }} Niduslab. All rights reserved.</p>
      <p>Built with <span class="nl-heart">♥</span> for ambitious teams.</p>
    </div>

  </div>
</footer>
