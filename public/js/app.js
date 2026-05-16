/* =========================================================
   Niduslab — app.js
   GSAP ScrollTrigger animations + interactive behaviours
   ========================================================= */

(function () {
  'use strict';

  /* ── GSAP setup ──────────────────────────────────────── */
  gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

  /* ── Navbar scroll state ─────────────────────────────── */
  const nav = document.getElementById('nlNav');
  if (nav) {
    ScrollTrigger.create({
      start: 'top -60',
      onUpdate: (self) => nav.classList.toggle('scrolled', self.scroll() > 60),
    });
  }

  /* ── Nav active link on scroll ──────────────────────── */
  const navLinks = document.querySelectorAll('.nl-nav__link');
  const sections = ['home', 'services', 'case-studies', 'industries', 'ecosystem', 'ai-section'];
  sections.forEach(id => {
    const el = document.getElementById(id);
    if (!el) return;
    ScrollTrigger.create({
      trigger: el,
      start: 'top 60%',
      end: 'bottom 60%',
      onToggle: ({ isActive }) => {
        if (!isActive) return;
        navLinks.forEach(a => {
          const href = a.getAttribute('href');
          const match = href === '#' + id || (id === 'home' && href === '#home');
          a.classList.toggle('nl-nav__link--active', match);
        });
      },
    });
  });

  /* ── Mobile nav burger ───────────────────────────────── */
  const burger  = document.getElementById('navBurger');
  const drawer  = document.getElementById('navDrawer');
  if (burger && drawer) {
    burger.addEventListener('click', () => {
      const open = drawer.classList.toggle('open');
      burger.setAttribute('aria-expanded', String(open));
      drawer.setAttribute('aria-hidden', String(!open));
    });
    drawer.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        drawer.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
        drawer.setAttribute('aria-hidden', 'true');
      });
    });
  }

  /* ── Scroll-triggered fade-up ────────────────────────── */
  document.querySelectorAll('[data-gsap="fade-up"]').forEach(el => {
    const delay = parseFloat(el.dataset.delay || 0);
    gsap.to(el, {
      opacity: 1,
      y: 0,
      duration: 0.7,
      delay,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: el,
        start: 'top 88%',
        toggleActions: 'play none none none',
      },
    });
  });

  /* ── Stagger children ────────────────────────────────── */
  document.querySelectorAll('[data-gsap="stagger"]').forEach(wrapper => {
    const children = Array.from(wrapper.children);
    gsap.to(children, {
      opacity: 1,
      y: 0,
      duration: 0.6,
      stagger: 0.08,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: wrapper,
        start: 'top 86%',
        toggleActions: 'play none none none',
      },
    });
  });

  /* ── Hero chip entrance + parallax ──────────────────── */
  const chipA = document.getElementById('chipAutomation');
  const chipB = document.getElementById('chipAI');
  if (chipA && chipB) {
    // entrance
    gsap.fromTo(chipA,
      { opacity: 0, x: -20, y: 10 },
      { opacity: 1, x: 0, y: 0, duration: 0.8, delay: 0.5, ease: 'power3.out' }
    );
    gsap.fromTo(chipB,
      { opacity: 0, x: 20, y: -10 },
      { opacity: 1, x: 0, y: 0, duration: 0.8, delay: 0.65, ease: 'power3.out' }
    );
    // parallax
    document.addEventListener('mousemove', (e) => {
      const cx = window.innerWidth  / 2;
      const cy = window.innerHeight / 2;
      const dx = (e.clientX - cx) / cx;
      const dy = (e.clientY - cy) / cy;
      gsap.to(chipA, { x: dx * -16, y: dy * -10, duration: 0.7, ease: 'power2.out' });
      gsap.to(chipB, { x: dx *  12, y: dy *  14, duration: 0.7, ease: 'power2.out' });
    });
  }

  /* ── Product showcase — slide-in + pause on hover ───── */
  const showcase = document.querySelector('.nl-showcase');
  const track    = document.getElementById('showcaseTrack');
  if (showcase && track) {
    // Animate showcase in when hero scrolls to it
    gsap.fromTo(showcase,
      { opacity: 0, y: 40 },
      {
        opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', delay: 0.45,
        scrollTrigger: { trigger: showcase, start: 'top 92%', toggleActions: 'play none none none' }
      }
    );
    // Pause CSS animation on hover via inline style
    showcase.addEventListener('mouseenter', () => track.style.animationPlayState = 'paused');
    showcase.addEventListener('mouseleave', () => track.style.animationPlayState = 'running');
  }

  /* ── Numeric counter animation ───────────────────────── */
  document.querySelectorAll('[data-counter]').forEach(el => {
    const target = parseFloat(el.dataset.counter);
    const isDecimal = String(target).includes('.');
    ScrollTrigger.create({
      trigger: el,
      start: 'top 85%',
      once: true,
      onEnter: () => {
        gsap.to({ val: 0 }, {
          val: target,
          duration: 1.8,
          ease: 'power2.out',
          onUpdate: function () {
            el.textContent = isDecimal
              ? this.targets()[0].val.toFixed(1)
              : Math.round(this.targets()[0].val);
          },
        });
      },
    });
  });

  /* ── AI Section — workflow simulation ───────────────── */
  (function () {
    const card      = document.querySelector('.nl-ai-canvas-card');
    const canvas    = document.getElementById('aiNodeCanvas');
    const svgEl     = document.getElementById('aiConnectorsSvg');
    const coreCard  = document.getElementById('aiCoreCard');
    const bar       = document.getElementById('aiCoreBar');
    const coreSubTx = document.getElementById('aiCoreSubText');
    const taskText  = document.getElementById('aiTaskText');
    const stepMeta  = document.getElementById('aiStepMeta');
    const dots      = [0,1,2,3,4].map(i => document.getElementById('dot' + i));
    const nodeIds   = ['postgres','stripe','vector','events','resend','slack'];

    if (!card || !bar || !svgEl || !canvas || !coreCard) return;

    /* Workflow steps — match Figma task bar texts exactly */
    const steps = [
      {
        node: 'postgres', stepN: 1,
        sub:  'querying 2.4M rows',
        task: 'Fetching <strong>user records</strong> from <strong>postgres</strong>',
      },
      {
        node: 'vector',   stepN: 2,
        sub:  'recalling 12 similar contexts',
        task: 'Recalling <strong>related memory</strong> from <strong>vector store</strong>',
      },
      {
        node: 'events',   stepN: 3,
        sub:  'reasoning · drafting action plan',
        task: 'AI Agent <strong>analysing patterns</strong> and <strong>ranking actions</strong>',
      },
      {
        node: 'stripe',   stepN: 4,
        sub:  'emitting events · syncing billing',
        task: 'Publishing <strong>real-time events</strong> + <strong>flagging at-risk accounts</strong>',
      },
      {
        node: 'resend',   stepN: 5,
        sub:  'dispatching churn alerts',
        task: 'Sending <strong>churn alerts</strong> via <strong>resend</strong>',
      },
    ];

    /* ── Helper: rect of el relative to canvas ── */
    function relRect(el) {
      const er = el.getBoundingClientRect();
      const cr = canvas.getBoundingClientRect();
      return {
        x:  er.left - cr.left,
        y:  er.top  - cr.top,
        cx: er.left - cr.left + er.width  / 2,
        cy: er.top  - cr.top  + er.height / 2,
        w:  er.width,
        h:  er.height,
        r:  er.right  - cr.left,
        b:  er.bottom - cr.top,
      };
    }

    /* Nearest edge point of a rect toward a target point */
    function edgePoint(rect, tx, ty) {
      const cx = rect.cx, cy = rect.cy;
      const dx = tx - cx, dy = ty - cy;
      const hw = rect.w / 2, hh = rect.h / 2;
      if (dx === 0 && dy === 0) return { x: cx, y: cy };
      const sx = dx === 0 ? 0 : (dx > 0 ? 1 : -1);
      const sy = dy === 0 ? 0 : (dy > 0 ? 1 : -1);
      const tx1 = dx === 0 ? Infinity : hw / Math.abs(dx);
      const ty1 = dy === 0 ? Infinity : hh / Math.abs(dy);
      const t   = Math.min(tx1, ty1);
      return { x: cx + dx * t, y: cy + dy * t };
    }

    /* ── Draw all 6 connector lines ── */
    const lineMap   = {}; /* nodeId → <line> */
    const travelDot = {}; /* nodeId → <circle> */
    let   travelAnim = {};

    function drawConnectors() {
      svgEl.innerHTML = '';
      const core = relRect(coreCard);

      nodeIds.forEach(id => {
        const pill = document.getElementById('node-' + id);
        if (!pill) return;
        const pr   = relRect(pill);
        const pEnd = edgePoint(pr,   core.cx, core.cy);
        const cEnd = edgePoint(core, pr.cx,   pr.cy);

        /* dashed line */
        const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
        line.setAttribute('x1', pEnd.x); line.setAttribute('y1', pEnd.y);
        line.setAttribute('x2', cEnd.x); line.setAttribute('y2', cEnd.y);
        line.setAttribute('class', 'nl-ai-conn');
        line.setAttribute('data-node', id);
        svgEl.appendChild(line);
        lineMap[id] = line;

        /* travelling dot (hidden until activated) */
        const dot = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
        dot.setAttribute('r', '3.5');
        dot.setAttribute('fill', '#5D2EDE');
        dot.setAttribute('opacity', '0');
        dot.setAttribute('data-node', id);
        svgEl.appendChild(dot);
        travelDot[id] = { el: dot, x1: pEnd.x, y1: pEnd.y, x2: cEnd.x, y2: cEnd.y };
      });
    }

    /* ── Animate a dot from pill edge → core edge ── */
    function animateTravelDot(id) {
      const td = travelDot[id];
      if (!td) return;
      if (travelAnim[id]) travelAnim[id].kill();
      td.el.setAttribute('opacity', '1');
      td.el.setAttribute('cx', td.x1);
      td.el.setAttribute('cy', td.y1);
      travelAnim[id] = gsap.to(td.el, {
        attr: { cx: td.x2, cy: td.y2 },
        duration: 1.0,
        ease: 'power1.inOut',
        repeat: -1,
        repeatDelay: 0.8,
        onRepeat: () => {
          td.el.setAttribute('cx', td.x1);
          td.el.setAttribute('cy', td.y1);
        },
      });
    }

    function stopAllDots() {
      Object.keys(travelAnim).forEach(id => {
        if (travelAnim[id]) travelAnim[id].kill();
        if (travelDot[id]) travelDot[id].el.setAttribute('opacity', '0');
      });
    }

    /* ── Highlight active line ── */
    function setActiveLine(nodeId) {
      Object.keys(lineMap).forEach(id => {
        const active = id === nodeId;
        lineMap[id].setAttribute('stroke',       active ? '#5D2EDE' : '#c4b5fd');
        lineMap[id].setAttribute('stroke-width', active ? '1.8'     : '1.3');
        lineMap[id].setAttribute('opacity',      active ? '1'       : '0.5');
        lineMap[id].setAttribute('stroke-dasharray', active ? '0' : '4 4');
      });
    }

    /* ── Step dots ── */
    function setStepDots(n) {
      dots.forEach((d, i) => {
        if (!d) return;
        d.className = 'nl-ai-step-dot' +
          (i <  n ? ' nl-ai-step-dot--done'   :
           i === n ? ' nl-ai-step-dot--active' : '');
      });
      if (stepMeta) stepMeta.textContent = 'step ' + (n + 1) + ' /5';
    }

    /* ── Progress bar ── */
    function runBar(duration, onDone) {
      gsap.fromTo(bar,
        { width: '0%' },
        { width: '100%', duration, ease: 'none', onComplete: onDone }
      );
    }

    /* ── GSAP fade-swap text with a quick opacity flicker ── */
    function swapText(el, html) {
      if (!el) return;
      gsap.to(el, { opacity: 0, duration: 0.18, onComplete: () => {
        el.innerHTML = html;
        gsap.to(el, { opacity: 1, duration: 0.22 });
      }});
    }

    /* ── Main step loop ── */
    let stepIdx = 0;
    function runStep() {
      const s = steps[stepIdx % steps.length];

      /* deactivate all pills */
      document.querySelectorAll('.nl-ai-node-pill').forEach(p => p.classList.remove('active'));
      const pill = document.getElementById('node-' + s.node);
      if (pill) pill.classList.add('active');

      setActiveLine(s.node);
      stopAllDots();
      animateTravelDot(s.node);
      setStepDots(s.stepN - 1);

      swapText(taskText,   s.task);
      swapText(coreSubTx, s.sub);

      runBar(2.6, () => {
        stepIdx++;
        setTimeout(runStep, 400);
      });
    }

    /* ── Boot when canvas enters viewport ── */
    ScrollTrigger.create({
      trigger: card,
      start: 'top 80%',
      once: true,
      onEnter: () => {
        // slight delay so layout is fully painted
        setTimeout(() => {
          drawConnectors();
          runStep();
        }, 350);
      },
    });

    /* Redraw on resize (layout reflow changes positions) */
    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        stopAllDots();
        drawConnectors();
      }, 200);
    });
  })();

  /* ── Smooth scroll for anchor links ─────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 72;
      gsap.to(window, {
        duration: 0.8,
        scrollTo: { y: target, offsetY: offset },
        ease: 'power3.inOut',
      });
    });
  });

})();
