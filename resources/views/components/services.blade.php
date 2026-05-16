<section class="nl-services" id="services">
  <div class="container-xl">

    <div class="nl-section-label" data-gsap="fade-up">What We Serve</div>
    <h2 class="nl-section-heading" data-gsap="fade-up" data-delay="0.05">
      Every discipline you need.<br>One team that delivers.
    </h2>

    <div class="nl-services__grid" data-gsap="stagger">
      @foreach($services as $service)
        <div class="nl-services__cell">
          <div class="nl-services__icon">
            @switch($service['icon'])
              @case('code')
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><path d="M7 8l-4 3 4 3M15 8l4 3-4 3M13 5l-4 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                @break
              @case('smartphone')
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="6" y="2" width="10" height="18" rx="2" stroke="currentColor" stroke-width="1.6"/><circle cx="11" cy="17" r="1" fill="currentColor"/></svg>
                @break
              @case('cpu')
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="6" y="6" width="10" height="10" rx="1" stroke="currentColor" stroke-width="1.6"/><path d="M9 6V4M13 6V4M9 18v-2M13 18v-2M6 9H4M6 13H4M18 9h-2M18 13h-2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
                @break
              @case('layout')
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="3" y="3" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M3 8h16M10 8v11" stroke="currentColor" stroke-width="1.6"/></svg>
                @break
              @case('database')
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><ellipse cx="11" cy="6" rx="7" ry="3" stroke="currentColor" stroke-width="1.6"/><path d="M4 6v10c0 1.66 3.13 3 7 3s7-1.34 7-3V6" stroke="currentColor" stroke-width="1.6"/><path d="M4 11c0 1.66 3.13 3 7 3s7-1.34 7-3" stroke="currentColor" stroke-width="1.6"/></svg>
                @break
              @default
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/><polyline points="17 6 23 6 23 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
            @endswitch
          </div>
          <h3 class="nl-services__title">{{ $service['title'] }}</h3>
          <p class="nl-services__desc">{{ $service['desc'] }}</p>
        </div>
      @endforeach
    </div>

  </div>
</section>
