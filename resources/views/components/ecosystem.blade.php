<section class="nl-ecosystem" id="ecosystem">
  <div class="container-xl">

    <div class="nl-section-label" data-gsap="fade-up">Our Ecosystem</div>
    <h2 class="nl-section-heading" data-gsap="fade-up" data-delay="0.05">
      A suite of AI-native<br>products, built to integrate.
    </h2>

    <div class="nl-ecosystem__grid" data-gsap="stagger">
      @foreach($ecosystem as $product)
        <div class="nl-ecosystem__card {{ $product['featured'] ? 'nl-ecosystem__card--featured' : '' }}">
          <div class="nl-ecosystem__tag">{{ $product['tag'] }}</div>
          <h3 class="nl-ecosystem__name">{{ $product['name'] }}</h3>
          <p class="nl-ecosystem__desc">{{ $product['desc'] }}</p>
          @if($product['featured'])
            <a href="#cta" class="btn-primary-sm mt-auto">Learn more
              <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2.5 7h9M7.5 3.5L11 7l-3.5 3.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          @else
            <a href="#cta" class="nl-ecosystem__link">Learn more →</a>
          @endif
        </div>
      @endforeach
    </div>

  </div>
</section>
