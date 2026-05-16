<section class="nl-ai" id="ai-section">
  <div class="container-xl">
    <div class="nl-ai__layout">

      {{-- ── LEFT: Agent Canvas ───────────────────────────── --}}
      <div class="nl-ai__canvas-wrap" data-gsap="fade-up">
        <div class="nl-ai-canvas-card">

          {{-- Window chrome --}}
          <div class="nl-ai-chrome">
            <div class="nl-chrome-dots">
              <span style="background:#8B5BFA"></span>
              <span style="background:#F97316"></span>
              <span style="background:#EF4444"></span>
            </div>
            <div class="nl-chrome-breadcrumb">
              <span>nidus</span>
              <span class="nl-chrome-sep">/</span>
              <span>agents</span>
              <span class="nl-chrome-sep">/</span>
              <span>churn-watcher</span>
            </div>
            <div class="nl-chrome-live">
              <span class="nl-chrome-live__dot"></span>
              LIVE RUN
            </div>
          </div>

          {{-- Task bar --}}
          <div class="nl-ai-task-bar">
            <div class="nl-ai-task-bar__left">
              <span class="nl-ai-task-bar__label">
                <svg width="11" height="11" viewBox="0 0 13 13" fill="none" style="flex-shrink:0;opacity:.5">
                  <path d="M6.5 1l1.1 2.2 2.4.35-1.75 1.7.41 2.4L6.5 6.55 4.34 7.65l.41-2.4L3 3.55l2.4-.35L6.5 1z" fill="#5D2EDE"/>
                </svg>
                CURRENT TASK
              </span>
              <div class="nl-ai-task-desc">
                <svg width="12" height="12" viewBox="0 0 13 13" fill="none" style="flex-shrink:0">
                  <path d="M6.5 1l1.1 2.2 2.4.35-1.75 1.7.41 2.4L6.5 6.55 4.34 7.65l.41-2.4L3 3.55l2.4-.35L6.5 1z" fill="#5D2EDE"/>
                </svg>
                <span id="aiTaskText">Fetching <strong>user records</strong> from <strong>postgres</strong></span>
              </div>
            </div>
            <div class="nl-ai-task-bar__steps">
              <span class="nl-ai-step-dot" id="dot0"></span>
              <span class="nl-ai-step-dot" id="dot1"></span>
              <span class="nl-ai-step-dot" id="dot2"></span>
              <span class="nl-ai-step-dot" id="dot3"></span>
              <span class="nl-ai-step-dot" id="dot4"></span>
              <span class="nl-ai-step-meta" id="aiStepMeta">step 1 /5</span>
            </div>
          </div>

          {{-- Node canvas: fixed-height grid with absolute pill positions --}}
          <div class="nl-ai-node-canvas" id="aiNodeCanvas">

            {{-- SVG connector overlay --}}
            <svg class="nl-ai-svg" id="aiConnectorsSvg" aria-hidden="true"></svg>

            {{-- Core card: centered --}}
            <div class="nl-ai-core-card" id="aiCoreCard">
              <div class="nl-ai-core-card__label">
                <span class="nl-ai-core-card__dot"></span>
                REASONING CORE
              </div>
              <div class="nl-ai-core-card__title">
                <svg width="18" height="18" viewBox="0 0 17 17" fill="none">
                  <path d="M8.5 1.5l1.6 3.2 3.5.5-2.55 2.48.6 3.52L8.5 9.5 5.85 11.2l.6-3.52L4 4.7l3.5-.5L8.5 1.5z" fill="#5D2EDE"/>
                </svg>
                AI Agent
              </div>
              <p class="nl-ai-core-card__sub">
                <span class="nl-ai-core-card__sub-dot">•</span>
                <span id="aiCoreSubText">reasoning · drafting action plan</span>
              </p>
              <div class="nl-ai-core-card__bar">
                <div class="nl-ai-core-card__bar-fill" id="aiCoreBar"></div>
              </div>
            </div>

            {{-- TOP LEFT: postgres --}}
            <div class="nl-ai-node-pill nl-ai-pill--tl" id="node-postgres" data-node="postgres">
              <div class="nl-ai-node-pill__icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><ellipse cx="7" cy="4" rx="4" ry="2" stroke="#5D2EDE" stroke-width="1.2"/><path d="M3 4v6c0 1.1 1.79 2 4 2s4-.9 4-2V4" stroke="#5D2EDE" stroke-width="1.2"/><path d="M3 7c0 1.1 1.79 2 4 2s4-.9 4-2" stroke="#5D2EDE" stroke-width="1.2"/></svg>
              </div>
              <div class="nl-ai-node-pill__info">
                <span class="nl-ai-node-pill__name">postgres</span>
                <span class="nl-ai-node-pill__meta">SOURCE · 2.4M ROWS</span>
              </div>
              <span class="nl-ai-node-pill__badge nl-ai-node-pill__badge--query">QUERY</span>
            </div>

            {{-- TOP RIGHT: stripe --}}
            <div class="nl-ai-node-pill nl-ai-pill--tr" id="node-stripe" data-node="stripe">
              <div class="nl-ai-node-pill__icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="8" rx="1.5" stroke="#5D2EDE" stroke-width="1.2"/><path d="M1 6h12" stroke="#5D2EDE" stroke-width="1.2"/></svg>
              </div>
              <div class="nl-ai-node-pill__info">
                <span class="nl-ai-node-pill__name">stripe</span>
                <span class="nl-ai-node-pill__meta">TOOL · BILLING</span>
              </div>
              <span class="nl-ai-node-pill__badge nl-ai-node-pill__badge--ready">READY</span>
            </div>

            {{-- MID LEFT: vector --}}
            <div class="nl-ai-node-pill nl-ai-pill--ml" id="node-vector" data-node="vector">
              <div class="nl-ai-node-pill__icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="3" stroke="#5D2EDE" stroke-width="1.2"/><path d="M7 1v2M7 11v2M1 7h2M11 7h2" stroke="#5D2EDE" stroke-width="1.2" stroke-linecap="round"/></svg>
              </div>
              <div class="nl-ai-node-pill__info">
                <span class="nl-ai-node-pill__name">vector</span>
                <span class="nl-ai-node-pill__meta">MEMORY · 412K EMBE…</span>
              </div>
            </div>

            {{-- MID RIGHT: events --}}
            <div class="nl-ai-node-pill nl-ai-pill--mr" id="node-events" data-node="events">
              <div class="nl-ai-node-pill__icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 7h2.5l1.5-4 2.5 8 1.5-4H13" stroke="#5D2EDE" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
              <div class="nl-ai-node-pill__info">
                <span class="nl-ai-node-pill__name">events</span>
                <span class="nl-ai-node-pill__meta">SIGNAL · 1.2K/S</span>
              </div>
              <span class="nl-ai-node-pill__badge nl-ai-node-pill__badge--live">LIVE</span>
            </div>

            {{-- BOT LEFT: resend --}}
            <div class="nl-ai-node-pill nl-ai-pill--bl" id="node-resend" data-node="resend">
              <div class="nl-ai-node-pill__icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="3" width="12" height="8" rx="1.5" stroke="#5D2EDE" stroke-width="1.2"/><path d="M1 5.5l6 3.5 6-3.5" stroke="#5D2EDE" stroke-width="1.2"/></svg>
              </div>
              <div class="nl-ai-node-pill__info">
                <span class="nl-ai-node-pill__name">resend</span>
                <span class="nl-ai-node-pill__meta">ACTION · TRANSACTIONAL</span>
              </div>
              <span class="nl-ai-node-pill__badge nl-ai-node-pill__badge--send">SEND</span>
            </div>

            {{-- BOT RIGHT: slack --}}
            <div class="nl-ai-node-pill nl-ai-pill--br" id="node-slack" data-node="slack">
              <div class="nl-ai-node-pill__icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M5.25 1.75a1.25 1.25 0 100 2.5h1.25V2.99A1.25 1.25 0 005.25 1.75zM5.25 5.5H1.75a1.25 1.25 0 000 2.5h3.5V5.5zM8.75 12.25a1.25 1.25 0 100-2.5H7.5v1.26a1.25 1.25 0 001.25 1.24zM8.75 8.5h3.5a1.25 1.25 0 000-2.5h-3.5V8.5z" stroke="#5D2EDE" stroke-width="1.1" stroke-linejoin="round"/></svg>
              </div>
              <div class="nl-ai-node-pill__info">
                <span class="nl-ai-node-pill__name">slack</span>
                <span class="nl-ai-node-pill__meta">ACTION · #OPS-ALERTS</span>
              </div>
              <span class="nl-ai-node-pill__badge nl-ai-node-pill__badge--post">POST</span>
            </div>

          </div>{{-- /nl-ai-node-canvas --}}
        </div>{{-- /nl-ai-canvas-card --}}
      </div>

      {{-- ── RIGHT: Text + features ───────────────────────── --}}
      <div class="nl-ai__content" data-gsap="fade-up" data-delay="0.12">

        <span class="nl-ai__pill-badge">AI & AUTOMATION</span>

        <h2 class="nl-ai__heading">
          Ship products that<br>
          <span class="nl-gradient-text">think for themselves.</span>
        </h2>

        <p class="nl-ai__sub">
          From custom-trained agents to embedded intelligence, we make AI a
          quiet, compounding advantage inside your product — not a bolted-on feature.
        </p>

        <div class="nl-ai__features">
          <div class="nl-ai__feature">
            <div class="nl-ai__feature-icon">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><rect x="3" y="3" width="12" height="12" rx="3" stroke="#5D2EDE" stroke-width="1.4"/><path d="M6 9h6M9 6v6" stroke="#5D2EDE" stroke-width="1.4" stroke-linecap="round"/></svg>
            </div>
            <div class="nl-ai__feature-text">
              <h3>Custom LLM agents</h3>
              <p>Tailored copilots and chat experiences trained on your data.</p>
            </div>
          </div>
          <div class="nl-ai__feature">
            <div class="nl-ai__feature-icon">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><rect x="2" y="7" width="4" height="4" rx="1" stroke="#5D2EDE" stroke-width="1.4"/><rect x="12" y="7" width="4" height="4" rx="1" stroke="#5D2EDE" stroke-width="1.4"/><rect x="7" y="2" width="4" height="4" rx="1" stroke="#5D2EDE" stroke-width="1.4"/><rect x="7" y="12" width="4" height="4" rx="1" stroke="#5D2EDE" stroke-width="1.4"/><path d="M6 9h1M11 9h1M9 6v1M9 11v1" stroke="#5D2EDE" stroke-width="1.4" stroke-linecap="round"/></svg>
            </div>
            <div class="nl-ai__feature-text">
              <h3>Workflow automation</h3>
              <p>Replace repetitive ops with AI-driven pipelines that scale.</p>
            </div>
          </div>
          <div class="nl-ai__feature">
            <div class="nl-ai__feature-icon">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 2L6 10h3l-1 6 5-8h-4l2-6z" stroke="#5D2EDE" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="nl-ai__feature-text">
              <h3>Real-time intelligence</h3>
              <p>Embedded models that act on signals the moment they happen.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
