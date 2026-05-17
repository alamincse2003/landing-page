
    <!-- ═══════════════════════════════════════════════════════════
       02 — AI & AUTOMATION
       ═══════════════════════════════════════════════════════════ -->
    <section class="ai-section" data-screen-label="02 AI &amp; Automation">
      <div class="container">
        <div class="ai-grid">
          <!-- LEFT: animated agent canvas -->
          <div class="canvas" data-comment-anchor="ai-canvas">
            <div class="canvas-chrome">
              <div class="chrome-left">
                <span class="dots-row"><i></i><i></i><i></i></span>
                <span class="breadcrumb"
                  >nidus <span>/</span> agents
                  <span>/</span> churn-watcher</span
                >
              </div>
              <span class="live-badge">Live Run</span>
            </div>

            <div class="task-row">
              <div class="task-left">
                <div class="task-icon">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M12 3l2.4 5.6L20 11l-5.6 2.4L12 19l-2.4-5.6L4 11l5.6-2.4z"
                    ></path>
                  </svg>
                </div>
                <div class="task-body">
                  <span class="task-eyebrow">Current Task</span>
                  <span class="task-text" id="taskText"
                    >Summarising daily ops digest for
                    <mark>#leadership</mark></span
                  >
                </div>
              </div>
              <div class="step-pill">
                <span class="step-dots" id="stepDots">
                  <i class="on"></i><i></i><i></i><i></i><i></i>
                </span>
                step <b id="stepCount">1</b>/5
              </div>
            </div>

            <div class="diagram">
              <!-- connector SVG -->
              <svg
                class="connectors"
                viewBox="0 0 600 460"
                preserveAspectRatio="none"
              >
                <defs>
                  <!-- input paths: node → core -->
                  <path
                    id="path-postgres"
                    d="M 100 50 C 180 70, 220 130, 250 180"
                    fill="none"
                    stroke="rgba(93,46,222,0.22)"
                    stroke-width="1.5"
                    stroke-dasharray="4 6"
                    stroke-linecap="round"
                  ></path>
                  <path
                    id="path-vector"
                    d="M 100 240 L 230 240"
                    fill="none"
                    stroke="rgba(93,46,222,0.22)"
                    stroke-width="1.5"
                    stroke-dasharray="4 6"
                    stroke-linecap="round"
                  ></path>
                  <path
                    id="path-resend"
                    d="M 100 410 C 180 390, 220 330, 250 280"
                    fill="none"
                    stroke="rgba(93,46,222,0.22)"
                    stroke-width="1.5"
                    stroke-dasharray="4 6"
                    stroke-linecap="round"
                  ></path>
                  <!-- output paths: core → node -->
                  <path
                    id="path-stripe"
                    d="M 350 180 C 380 130, 420 70, 500 50"
                    fill="none"
                    stroke="rgba(93,46,222,0.22)"
                    stroke-width="1.5"
                    stroke-dasharray="4 6"
                    stroke-linecap="round"
                  ></path>
                  <path
                    id="path-events"
                    d="M 370 240 L 500 240"
                    fill="none"
                    stroke="rgba(93,46,222,0.22)"
                    stroke-width="1.5"
                    stroke-dasharray="4 6"
                    stroke-linecap="round"
                  ></path>
                  <path
                    id="path-slack"
                    d="M 350 280 C 380 330, 420 390, 500 410"
                    fill="none"
                    stroke="rgba(93,46,222,0.22)"
                    stroke-width="1.5"
                    stroke-dasharray="4 6"
                    stroke-linecap="round"
                  ></path>
                </defs>

                <use
                  href="#path-postgres"
                  class="conn"
                  data-conn="postgres"
                ></use>
                <use href="#path-vector" class="conn" data-conn="vector"></use>
                <use href="#path-resend" class="conn" data-conn="resend"></use>
                <use href="#path-stripe" class="conn" data-conn="stripe"></use>
                <use href="#path-events" class="conn" data-conn="events"></use>
                <use href="#path-slack" class="conn" data-conn="slack"></use>

                <!-- traveling dots (one per path, staggered) -->
                <circle r="3.5" class="flow-dot">
                  <animateMotion dur="2.2s" repeatCount="indefinite" begin="0s">
                    <mpath href="#path-postgres"></mpath>
                  </animateMotion>
                </circle>
                <circle r="3.5" class="flow-dot">
                  <animateMotion
                    dur="2.2s"
                    repeatCount="indefinite"
                    begin="0.4s"
                  >
                    <mpath href="#path-vector"></mpath>
                  </animateMotion>
                </circle>
                <circle r="3.5" class="flow-dot">
                  <animateMotion
                    dur="2.2s"
                    repeatCount="indefinite"
                    begin="0.8s"
                  >
                    <mpath href="#path-resend"></mpath>
                  </animateMotion>
                </circle>
                <circle r="3.5" class="flow-dot">
                  <animateMotion
                    dur="2.2s"
                    repeatCount="indefinite"
                    begin="1.2s"
                  >
                    <mpath href="#path-stripe"></mpath>
                  </animateMotion>
                </circle>
                <circle r="3.5" class="flow-dot">
                  <animateMotion
                    dur="2.2s"
                    repeatCount="indefinite"
                    begin="1.6s"
                  >
                    <mpath href="#path-events"></mpath>
                  </animateMotion>
                </circle>
                <circle r="3.5" class="flow-dot">
                  <animateMotion
                    dur="2.2s"
                    repeatCount="indefinite"
                    begin="2.0s"
                  >
                    <mpath href="#path-slack"></mpath>
                  </animateMotion>
                </circle>
              </svg>

              <!-- nodes -->
              <div class="node n-postgres" data-node="postgres">
                <div class="nico">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <ellipse cx="12" cy="5" rx="8" ry="3"></ellipse>
                    <path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5"></path>
                    <path d="M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"></path>
                  </svg>
                </div>
                <div class="ntext">
                  <span class="nname">postgres</span>
                  <span class="nsub">Source · 2.4M rows</span>
                </div>
                <span class="nbadge">Query</span>
              </div>

              <div class="node n-stripe" data-node="stripe">
                <div class="nico">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <circle cx="12" cy="12" r="9"></circle>
                    <path
                      d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"
                    ></path>
                  </svg>
                </div>
                <div class="ntext">
                  <span class="nname">stripe</span>
                  <span class="nsub">Tool · billing</span>
                </div>
                <span class="nbadge">Ready</span>
              </div>

              <div class="node n-vector" data-node="vector">
                <div class="nico">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M14 3H6a2 2 0 00-2 2v14a2 2 0 002 2h12a2 2 0 002-2V9z"
                    ></path>
                    <path d="M14 3v6h6M8 13h8M8 17h5"></path>
                  </svg>
                </div>
                <div class="ntext">
                  <span class="nname">vector</span>
                  <span class="nsub">Memory · 412K embeds</span>
                </div>
                <span class="nbadge">Recall</span>
              </div>

              <div class="node n-events" data-node="events">
                <div class="nico">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M12 3l2.4 5.6L20 11l-5.6 2.4L12 19l-2.4-5.6L4 11l5.6-2.4z"
                    ></path>
                  </svg>
                </div>
                <div class="ntext">
                  <span class="nname">events</span>
                  <span class="nsub">Signal · 1.2K/s</span>
                </div>
                <span class="nbadge">Live</span>
              </div>

              <div class="node n-resend" data-node="resend">
                <div class="nico">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                    <path d="M3 7l9 6 9-6"></path>
                  </svg>
                </div>
                <div class="ntext">
                  <span class="nname">resend</span>
                  <span class="nsub">Action · transactional</span>
                </div>
                <span class="nbadge">Send</span>
              </div>

              <div class="node n-slack" data-node="slack">
                <div class="nico">
                  <svg
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M21 11.5a8.4 8.4 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.4 8.4 0 01-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.4 8.4 0 013.8-.9h.5a8.5 8.5 0 018 8z"
                    ></path>
                  </svg>
                </div>
                <div class="ntext">
                  <span class="nname">slack</span>
                  <span class="nsub">Action · #ops-alerts</span>
                </div>
                <span class="nbadge">Post</span>
              </div>

              <!-- AI core -->
              <div class="ai-core">
                <span class="core-label">Reasoning Core</span>
                <span class="core-name">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M12 3l2 5 5 2-5 2-2 5-2-5-5-2 5-2zM19 14l1 2 2 1-2 1-1 2-1-2-2-1 2-1zM5 14l1 2 2 1-2 1-1 2-1-2-2-1 2-1z"
                    ></path>
                  </svg>
                  AI Agent
                </span>
                <div class="core-status" id="coreStatus">
                  verifying · audit trail
                </div>
                <div class="progress-track">
                  <div class="progress-fill" id="progressFill"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- RIGHT: copy -->
          <div class="ai-copy" data-comment-anchor="ai-copy">
            <span class="ai-eyebrow">AI &amp; Automation</span>
            <h2 class="ai-heading">
              Ship products that<br />
              <span class="alt">think for themselves.</span>
            </h2>
            <p class="ai-lede">
              From custom-trained agents to embedded intelligence, we make AI a
              quiet, compounding advantage inside your product — not a bolted-on
              feature.
            </p>

            <div class="feat-list">
              <div class="feat" data-comment-anchor="feat-llm">
                <div class="fico">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M12 3a4 4 0 00-4 4v0a3 3 0 00-3 3v1a3 3 0 001 2 3 3 0 00-1 2v1a3 3 0 003 3 4 4 0 008 0 3 3 0 003-3v-1a3 3 0 00-1-2 3 3 0 001-2v-1a3 3 0 00-3-3 4 4 0 00-4-4z"
                    ></path>
                    <path d="M12 8v8M9 11h6"></path>
                  </svg>
                </div>
                <div class="feat-body">
                  <h4>Custom LLM agents</h4>
                  <p>
                    Tailored copilots and chat experiences trained on your data.
                  </p>
                </div>
              </div>

              <div class="feat" data-comment-anchor="feat-workflow">
                <div class="fico">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <rect x="5" y="5" width="14" height="14" rx="2"></rect>
                    <rect x="9" y="9" width="6" height="6"></rect>
                    <path
                      d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3"
                    ></path>
                  </svg>
                </div>
                <div class="feat-body">
                  <h4>Workflow automation</h4>
                  <p>
                    Replace repetitive ops with AI-driven pipelines that scale.
                  </p>
                </div>
              </div>

              <div class="feat" data-comment-anchor="feat-realtime">
                <div class="fico">
                  <svg
                    width="22"
                    height="22"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path d="M13 2L4 14h7l-1 8 9-12h-7z"></path>
                  </svg>
                </div>
                <div class="feat-body">
                  <h4>Real-time intelligence</h4>
                  <p>
                    Embedded models that act on signals the moment they happen.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>