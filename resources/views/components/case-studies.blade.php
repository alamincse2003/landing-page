<section class="nl-cases" id="case-studies">
  <div class="container-xl">

    <div class="nl-section-label" data-gsap="fade-up">Case Studies</div>
    <h2 class="nl-section-heading" data-gsap="fade-up" data-delay="0.05">
      Real results.<br>Real products.
    </h2>

    <div class="nl-cases__list">
      @foreach($caseStudies as $i => $case)
        <div class="nl-case {{ $i % 2 === 1 ? 'nl-case--reverse' : '' }}" data-gsap="fade-up">
          <div class="nl-case__content">
            <span class="nl-case__label">{{ $case['label'] }}</span>
            <h3 class="nl-case__title">{{ $case['title'] }}</h3>
            <p class="nl-case__desc">{{ $case['desc'] }}</p>
            <a href="#cta" class="btn-ghost mt-4">Read full case study
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
          </div>
          <div class="nl-case__stats">
            @foreach($case['stats'] as $stat)
              <div class="nl-case__stat">
                <div class="nl-case__stat-val">{{ $stat['val'] }}</div>
                <div class="nl-case__stat-label">{{ $stat['label'] }}</div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
