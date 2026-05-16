<section class="nl-testimonials" id="testimonials">
  <div class="container-xl">

    <div class="nl-testimonials__banner" data-gsap="fade-up">
      <span>Trusted by teams shipping products that matter</span>
    </div>

    <div class="nl-testimonials__grid" data-gsap="stagger">
      @foreach($testimonials as $t)
        <div class="nl-testimonial">
          <div class="nl-testimonial__quote">
            <svg width="24" height="18" viewBox="0 0 24 18" fill="none"><path d="M0 18V10.8C0 4.8 3.6 1.2 10.8 0l1.2 2.4C8.4 3.6 6.6 6 6.6 9.6H10.8V18H0zm13.2 0V10.8C13.2 4.8 16.8 1.2 24 0l1.2 2.4c-3.6 1.2-5.4 3.6-5.4 7.2H24V18H13.2z" fill="#5D2EDE" opacity=".25"/></svg>
          </div>
          <p class="nl-testimonial__text">{{ $t['quote'] }}</p>
          <div class="nl-testimonial__author">
            <div class="nl-testimonial__avatar" style="background: hsl({{ crc32($t['name']) % 360 }}, 55%, 55%)">
              {{ strtoupper(substr($t['name'], 0, 1)) }}
            </div>
            <div>
              <div class="nl-testimonial__name">{{ $t['name'] }}</div>
              <div class="nl-testimonial__role">{{ $t['role'] }}</div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
