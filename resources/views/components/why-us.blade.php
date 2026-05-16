<section class="nl-why" id="why-us">
  <div class="container-xl">

    <div class="nl-section-label" data-gsap="fade-up">Why Choose Us</div>
    <h2 class="nl-section-heading" data-gsap="fade-up" data-delay="0.05">
      Built different.<br>Proven at scale.
    </h2>

    <div class="nl-why__bento" data-gsap="stagger">

      {{-- Cost Effective --}}
      <div class="nl-bento nl-bento--cost">
        <div class="nl-bento__label">Cost-Effective</div>
        <h3 class="nl-bento__heading">Startup speed.<br>Enterprise quality.</h3>
        <p class="nl-bento__desc">Fixed-scope engagements so you know exactly what you're getting before we write a line of code.</p>
      </div>

      {{-- Rating --}}
      <div class="nl-bento nl-bento--rating">
        <div class="nl-bento__stars">
          @for($i = 0; $i < 5; $i++)
            <svg width="18" height="18" viewBox="0 0 18 18" fill="#F59E0B"><path d="M9 1.5l2.12 4.3 4.74.69-3.43 3.34.81 4.71L9 12l-4.24 2.54.81-4.71L2.14 6.49l4.74-.69L9 1.5z"/></svg>
          @endfor
        </div>
        <div class="nl-bento__stat">4.9 / 5.0</div>
        <p class="nl-bento__desc">Average rating across 50+ client engagements</p>
        <div class="nl-bento__avatars">
          <div class="nl-avatar-stack">
            @for($i = 0; $i < 4; $i++)
              <div class="nl-avatar-circle" style="background: hsl({{ $i * 60 }}, 60%, 50%)"></div>
            @endfor
          </div>
          <span>50+ happy clients</span>
        </div>
      </div>

      {{-- Strategic dark card --}}
      <div class="nl-bento nl-bento--dark">
        <h3 class="nl-bento__heading">We think like founders, not vendors.</h3>
        <p class="nl-bento__desc">Every decision we make is weighed against your business outcomes — not billable hours. We've built and shipped our own products, so we know what it takes.</p>
        <a href="#cta" class="btn-primary-sm mt-auto">Let's talk →</a>
      </div>

      {{-- Stack --}}
      <div class="nl-bento nl-bento--stack">
        <div class="nl-bento__label">Modern Stack</div>
        <div class="nl-bento__tech-row">
          @php
            $techs = ['Laravel', 'Next.js', 'React Native', 'Python', 'AWS', 'GCP', 'PostgreSQL', 'Redis'];
          @endphp
          @foreach($techs as $tech)
            <span class="nl-tech-chip">{{ $tech }}</span>
          @endforeach
        </div>
      </div>

      {{-- Reliable --}}
      <div class="nl-bento nl-bento--reliable">
        <div class="nl-bento__big-stat" data-counter="99.9">0</div>
        <div class="nl-bento__unit">% uptime SLA</div>
        <p class="nl-bento__desc">Infrastructure we manage stays up. Always.</p>
      </div>

      {{-- 24/7 --}}
      <div class="nl-bento nl-bento--support">
        <div class="nl-bento__label">Support</div>
        <h3 class="nl-bento__heading">24 / 7</h3>
        <p class="nl-bento__desc">On-call engineering support for production incidents, available around the clock.</p>
      </div>

    </div>
  </div>
</section>
