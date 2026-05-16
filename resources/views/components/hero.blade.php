<section class="nl-hero" id="home">

  {{-- Background grid lines --}}
  <div class="nl-hero__grid-lines" aria-hidden="true">
    @for($i = 0; $i < 12; $i++)
      <div class="nl-hero__grid-line"></div>
    @endfor
  </div>

  {{-- Background gradient blob --}}
  <div class="nl-hero__blob" aria-hidden="true"></div>

  <div class="container-xl">
    <div class="nl-hero__inner">

      {{-- Badge --}}
      <div class="nl-hero__badge" data-gsap="fade-up">
        <span class="nl-badge-dot"></span>
        AI & Automation Studio
      </div>

      {{-- Headline --}}
      <h1 class="nl-hero__headline" data-gsap="fade-up" data-delay="0.08">
        We Engineer <span class="nl-gradient-text">Intelligent</span><br>
        Systems That Drive<br>
        Real Business Growth.
      </h1>

      {{-- Floating chips --}}
      <div class="nl-hero__chips" aria-hidden="true">
        <div class="nl-chip nl-chip--automation" id="chipAutomation">Automation</div>
        <div class="nl-chip nl-chip--ai" id="chipAI">AI-First</div>
      </div>

      {{-- Sub --}}
      <p class="nl-hero__sub" data-gsap="fade-up" data-delay="0.16">
        From custom AI agents to end-to-end automation, we help ambitious teams turn
        operational complexity into measurable outcomes — faster shipping, leaner ops,
        smarter products.
      </p>

      {{-- CTAs --}}
      <div class="nl-hero__ctas" data-gsap="fade-up" data-delay="0.22">
        <a href="#cta" class="nl-hero-btn nl-hero-btn--primary">
          Start Your Project
          <span class="nl-hero-btn__arrow">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2.5 7h9M8 3.5L11.5 7 8 10.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </a>
        <a href="#case-studies" class="nl-hero-btn nl-hero-btn--outline">
          Explore Our Work
          <span class="nl-hero-btn__arrow nl-hero-btn__arrow--purple">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2.5 7h9M8 3.5L11.5 7 8 10.5" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
        </a>
      </div>

      {{-- Trust strip --}}
      <div class="nl-hero__trust" data-gsap="fade-up" data-delay="0.3">
        <div class="nl-trust__avatars">
          <div class="nl-trust__avatar" style="background:#F97316"></div>
          <div class="nl-trust__avatar" style="background:#14B8A6"></div>
          <div class="nl-trust__avatar" style="background:#22C55E"></div>
          <div class="nl-trust__avatar" style="background:#EC4899"></div>
        </div>
        <p class="nl-trust__text"><strong>120+ teams</strong> shipping with Niduslab</p>
        <div class="nl-trust__divider" aria-hidden="true"></div>
        <div class="nl-trust__rating">
          <div class="nl-trust__stars" aria-label="5 stars">
            @for($i = 0; $i < 5; $i++)
              <svg width="14" height="14" viewBox="0 0 14 14" fill="#F59E0B"><path d="M7 1l1.65 3.35L12.5 5l-2.75 2.68.65 3.78L7 9.5l-3.4 1.96.65-3.78L1.5 5l3.85-.65L7 1z"/></svg>
            @endfor
          </div>
          <span><strong>4.9/5</strong> avg. client rating</span>
        </div>
      </div>

    </div>
  </div>

  {{-- Product showcase slider --}}
  <div class="nl-showcase" aria-label="Product showcase" data-gsap="fade-up" data-delay="0.4">
    <div class="nl-showcase__track" id="showcaseTrack">

      @php
        $cards = [
          [
            'badge'    => 'ENTERPRISE',
            'product'  => 'NidusHR',
            'tagline'  => 'People Ops',
            'bg'       => 'linear-gradient(145deg,#1a1a2e 0%,#16213e 100%)',
            'accent'   => '#5D2EDE',
            'content'  => [
              'greeting' => 'Good morning, Sarah',
              'sub'      => 'Team · 248 people',
              'stats'    => [['248','TOTAL'],['12','ON LEAVE'],['4+','ONBOARDING']],
              'rows'     => [
                ['Maya Singh','Product Designer','ACTIVE','#F97316'],
                ['Daniel Kim','Senior Engineer','REMOTE','#14B8A6'],
              ],
            ],
          ],
          [
            'badge'    => 'LIVE · V2.4',
            'product'  => 'NidusCart',
            'tagline'  => 'AI Commerce',
            'bg'       => 'linear-gradient(145deg,#f8f8fc 0%,#ede8f8 100%)',
            'accent'   => '#5D2EDE',
            'light'    => true,
            'content'  => [
              'greeting' => 'AI Commerce',
              'sub'      => 'Smart recommendations',
              'recommend'=> 'AI RECOMMENDS — Bundle & save 18%',
              'items'    => [
                ['Aurora Tee','$42','#7B4BF0'],
                ['Sun Cap','$28','#F59E0B'],
                ['Mango Bag','#22C55E'],
                ['Rose Kit','#EC4899'],
              ],
            ],
          ],
          [
            'badge'    => 'BETA · 2026',
            'product'  => 'NidusLearn',
            'tagline'  => 'Career College',
            'bg'       => 'linear-gradient(145deg,#4c1d95 0%,#5D2EDE 50%,#7B4BF0 100%)',
            'accent'   => '#B89BFB',
            'content'  => [
              'greeting' => 'Welcome back, Jordan',
              'sub'      => 'Career path · Product Design',
              'course'   => 'Product Design Fundamentals',
              'progress' => 67,
              'streak'   => '12-day streak',
              'meta'     => '8 of 12 modules · 4h 20m left',
            ],
          ],
          [
            'badge'    => 'LIVE · 2026',
            'product'  => 'NidusHire',
            'tagline'  => 'AI Job Search',
            'bg'       => 'linear-gradient(145deg,#f8f8fc 0%,#ede8f8 100%)',
            'accent'   => '#5D2EDE',
            'light'    => true,
            'content'  => [
              'greeting' => 'nidushre.com/jobs',
              'sub'      => 'Senior Product Designer',
              'tag'      => 'AI MATCH',
              'jobs'     => [
                ['L','Senior Product Designer','Linear · Remote · $140k–170k','96%','#5D2EDE'],
                ['D','Design Lead, Platform','Vercel · NYC · $180k','91%','#0B0B14'],
              ],
            ],
          ],
        ];
      @endphp

      @php $doubled = array_merge($cards, $cards); @endphp

      @foreach($doubled as $card)
        <div class="nl-sc-card {{ isset($card['light']) ? 'nl-sc-card--light' : 'nl-sc-card--dark' }}"
             style="background: {{ $card['bg'] }}">

          {{-- Card top: badge --}}
          <div class="nl-sc-card__top">
            <span class="nl-sc-badge {{ isset($card['light']) ? 'nl-sc-badge--dark' : '' }}">
              {{ $card['badge'] }}
            </span>
            @if(isset($card['content']['streak']))
              <span class="nl-sc-streak">🔥 {{ $card['content']['streak'] }}</span>
            @endif
            @if(isset($card['content']['tag']))
              <span class="nl-sc-ai-tag" style="margin-left:auto">{{ $card['content']['tag'] }}</span>
            @endif
          </div>

          {{-- Card body --}}
          <div class="nl-sc-card__body">

            @if($card['product'] === 'NidusHR')
              <p class="nl-sc-greeting">{{ $card['content']['greeting'] }}</p>
              <p class="nl-sc-sub">{{ $card['content']['sub'] }}</p>
              <div class="nl-sc-stats">
                @foreach($card['content']['stats'] as $stat)
                  <div class="nl-sc-stat">
                    <span class="nl-sc-stat__val">{{ $stat[0] }}</span>
                    <span class="nl-sc-stat__lbl">{{ $stat[1] }}</span>
                  </div>
                @endforeach
              </div>
              <div class="nl-sc-rows">
                @foreach($card['content']['rows'] as $row)
                  <div class="nl-sc-row">
                    <div class="nl-sc-row__dot" style="background:{{ $row[3] }}"></div>
                    <div class="nl-sc-row__info">
                      <span class="nl-sc-row__name">{{ $row[0] }}</span>
                      <span class="nl-sc-row__role">{{ $row[1] }}</span>
                    </div>
                    <span class="nl-sc-row__status nl-sc-row__status--{{ strtolower($row[2]) }}">{{ $row[2] }}</span>
                  </div>
                @endforeach
              </div>
            @endif

            @if($card['product'] === 'NidusCart')
              <p class="nl-sc-greeting" style="color:#0B0B14">Smart Shopping</p>
              <div class="nl-sc-phone-mock">
                <div class="nl-sc-phone">
                  <div class="nl-sc-phone__screen">
                    <div class="nl-sc-phone__header">
                      <span style="font-size:.5rem;font-weight:700;color:#5D2EDE">niduscart</span>
                    </div>
                    <div class="nl-sc-phone__grid">
                      @foreach($card['content']['items'] as $item)
                        <div class="nl-sc-phone__item" style="background:{{ $item[2] ?? '#E5E7EB' }}">
                          @if(isset($item[1]))
                            <span class="nl-sc-phone__item-name" style="font-size:.4rem;color:white;font-weight:600">{{ $item[0] }}</span>
                            <span class="nl-sc-phone__item-price" style="font-size:.45rem;color:rgba(255,255,255,.8)">{{ $item[1] }}</span>
                          @endif
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="nl-sc-recommend-badge">
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><circle cx="5" cy="5" r="4" fill="#5D2EDE"/><path d="M3 5l1.5 1.5L7 3.5" stroke="white" stroke-width="1.2" stroke-linecap="round"/></svg>
                  {{ $card['content']['recommend'] }}
                </div>
              </div>
            @endif

            @if($card['product'] === 'NidusLearn')
              <p class="nl-sc-greeting">{{ $card['content']['greeting'] }}</p>
              <p class="nl-sc-sub" style="color:rgba(255,255,255,.65)">{{ $card['content']['sub'] }}</p>
              <div class="nl-sc-course">
                <p class="nl-sc-course__name">{{ $card['content']['course'] }}</p>
                <div class="nl-sc-course__bar-wrap">
                  <div class="nl-sc-course__bar" style="width:{{ $card['content']['progress'] }}%"></div>
                </div>
                <div class="nl-sc-course__meta">
                  <span>{{ $card['content']['progress'] }}%</span>
                  <span>{{ $card['content']['meta'] }}</span>
                </div>
              </div>
            @endif

            @if($card['product'] === 'NidusHire')
              <div class="nl-sc-url-bar">
                <div class="nl-sc-url-dot"></div>
                <span>{{ $card['content']['greeting'] }}</span>
              </div>
              <p class="nl-sc-sub" style="color:#6B6F7B;margin-bottom:.75rem">{{ $card['content']['sub'] }}</p>
              <div class="nl-sc-jobs">
                @foreach($card['content']['jobs'] as $job)
                  <div class="nl-sc-job">
                    <div class="nl-sc-job__logo" style="background:{{ $job[4] }}">{{ $job[0] }}</div>
                    <div class="nl-sc-job__info">
                      <span class="nl-sc-job__title">{{ $job[1] }}</span>
                      <span class="nl-sc-job__meta">{{ $job[2] }}</span>
                    </div>
                    <span class="nl-sc-job__match" style="color:{{ $job[4] }}">{{ $job[3] }}%<br><small>MATCH</small></span>
                  </div>
                @endforeach
              </div>
            @endif

          </div>

          {{-- Card bottom: product name --}}
          <div class="nl-sc-card__footer">
            <div class="nl-sc-card__logo-mark" style="background:{{ $card['accent'] }}">N</div>
            <span class="nl-sc-card__name {{ isset($card['light']) ? 'nl-sc-card__name--dark' : '' }}">
              {{ $card['product'] }}
            </span>
            <span class="nl-sc-card__cat {{ isset($card['light']) ? 'nl-sc-card__cat--dark' : '' }}">
              · {{ $card['tagline'] }}
            </span>
          </div>

        </div>
      @endforeach

    </div>

    {{-- Edge fade masks --}}
    <div class="nl-showcase__fade nl-showcase__fade--left"  aria-hidden="true"></div>
    <div class="nl-showcase__fade nl-showcase__fade--right" aria-hidden="true"></div>
  </div>

</section>
