<section class="nl-process" id="process">
  <div class="container-xl">

    <div class="nl-section-label" data-gsap="fade-up">Working Process</div>
    <h2 class="nl-section-heading" data-gsap="fade-up" data-delay="0.05">
      From idea to launch.<br>No ambiguity.
    </h2>

    <div class="nl-process__track" data-gsap="stagger">
      @foreach($process as $step)
        <div class="nl-process__card">
          <div class="nl-process__num">{{ $step['num'] }}</div>
          <h3 class="nl-process__title">{{ $step['title'] }}</h3>
          <p class="nl-process__desc">{{ $step['desc'] }}</p>
          <div class="nl-process__line" aria-hidden="true"></div>
        </div>
      @endforeach
    </div>

  </div>
</section>
