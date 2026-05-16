<section class="nl-faq" id="faq">
  <div class="container-xl">
    <div class="nl-faq__inner">

      <div class="nl-faq__side" data-gsap="fade-up">
        <div class="nl-section-label">FAQ</div>
        <h2 class="nl-section-heading">Questions<br>answered.</h2>
        <p class="nl-section-sub">Still have questions? <a href="#cta" class="nl-link">Book a free call</a> and we'll walk through anything you need.</p>
      </div>

      <div class="nl-faq__list" data-gsap="fade-up" data-delay="0.1">
        <div class="accordion" id="faqAccordion">
          @foreach($faqs as $i => $faq)
            <div class="nl-faq-item">
              <button
                class="nl-faq-item__btn {{ $i !== 0 ? 'collapsed' : '' }}"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faq-{{ $i }}"
                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                aria-controls="faq-{{ $i }}"
              >
                {{ $faq['q'] }}
                <svg class="nl-faq-item__icon" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M4.5 6.75L9 11.25l4.5-4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
              <div id="faq-{{ $i }}" class="collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                <div class="nl-faq-item__body">{{ $faq['a'] }}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>
