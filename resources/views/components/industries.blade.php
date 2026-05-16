<section class="nl-industries" id="industries">
  <div class="container-xl">

    <div class="nl-section-label" data-gsap="fade-up">Industries</div>
    <h2 class="nl-section-heading" data-gsap="fade-up" data-delay="0.05">
      Wherever you operate,<br>we've been there.
    </h2>

    <div class="nl-industries__grid" data-gsap="stagger">
      @foreach($industries as $industry)
        <div class="nl-industry-card">
          <div class="nl-industry-card__icon">
            @switch($industry['icon'])
              @case('landmark')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="3" y="18" width="18" height="2" rx="1" fill="currentColor" opacity=".4"/><rect x="2" y="10" width="20" height="2" rx="1" fill="currentColor" opacity=".4"/><path d="M12 3L3 10h18L12 3z" fill="currentColor"/><rect x="5" y="12" width="2" height="6" fill="currentColor" opacity=".6"/><rect x="11" y="12" width="2" height="6" fill="currentColor" opacity=".6"/><rect x="17" y="12" width="2" height="6" fill="currentColor" opacity=".6"/></svg>
                @break
              @case('heart-pulse')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="1.6"/><path d="M8 12h2l1.5-3 2 6 1.5-3H18" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                @break
              @case('shopping-bag')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z" stroke="currentColor" stroke-width="1.6"/><path d="M3 6h18M16 10a4 4 0 01-8 0" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                @break
              @case('graduation-cap')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M22 9L12 4 2 9l10 5 10-5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M6 11.5V17c0 2.21 2.69 4 6 4s6-1.79 6-4v-5.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><path d="M22 9v6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                @break
              @case('plane')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 00-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" fill="currentColor" opacity=".7"/></svg>
                @break
              @case('home')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 12L12 4l9 8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 10v10a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1V10" stroke="currentColor" stroke-width="1.6"/></svg>
                @break
              @case('brain')
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><ellipse cx="9" cy="12" rx="5" ry="7" stroke="currentColor" stroke-width="1.6"/><ellipse cx="15" cy="12" rx="5" ry="7" stroke="currentColor" stroke-width="1.6"/><path d="M9 5c0-1.5 1-3 3-3s3 1.5 3 3" stroke="currentColor" stroke-width="1.4"/><path d="M9 19c0 1.5 1 3 3 3s3-1.5 3-3" stroke="currentColor" stroke-width="1.4"/></svg>
                @break
              @default
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="1" y="3" width="15" height="13" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M16 8l5-3v13l-5-3" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/></svg>
            @endswitch
          </div>
          <span class="nl-industry-card__label">{{ $industry['title'] }}</span>
        </div>
      @endforeach
    </div>

  </div>
</section>
