// ─── Hero: subtle parallax on the floating chips ───
const chips = document.querySelectorAll(".float-chip");
const hero = document.querySelector(".hero");
let heroRaf = null;
hero.addEventListener("mousemove", (e) => {
    if (heroRaf) return;
    heroRaf = requestAnimationFrame(() => {
        const r = hero.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width - 0.5;
        const y = (e.clientY - r.top) / r.height - 0.5;
        chips.forEach((c, i) => {
            const depth = i === 0 ? 14 : 10;
            const baseRot = c.classList.contains("chip-left") ? -6 : 7;
            c.style.transform = `translate(${x * depth}px, ${y * depth}px) rotate(${baseRot}deg)`;
        });
        heroRaf = null;
    });
});

// ─── AI section: workflow simulation ───
(function () {
    const steps = [
        {
            active: ["postgres"],
            status: "querying source · 2.4M rows",
            task: "Pulling churn signals from <mark>production database</mark>",
            progress: 18,
            dots: 1,
        },
        {
            active: ["vector"],
            status: "recalling 12 similar contexts",
            task: "Recalling <mark>related memory</mark> from vector store",
            progress: 38,
            dots: 2,
        },
        {
            active: [],
            status: "reasoning · drafting action plan",
            task: "AI Agent <mark>analysing patterns</mark> and ranking actions",
            progress: 64,
            dots: 3,
            coreEmphasis: true,
        },
        {
            active: ["events", "stripe"],
            status: "emitting events · syncing billing",
            task: "Publishing <mark>real-time events</mark> + flagging at-risk accounts",
            progress: 84,
            dots: 4,
        },
        {
            active: ["slack", "resend"],
            status: "notifying team · sending digest",
            task: "Posting summary to <mark>#leadership</mark> + dispatching emails",
            progress: 100,
            dots: 5,
        },
    ];

    const stepCountEl = document.getElementById("stepCount");
    const stepDotsEl = document.getElementById("stepDots");
    const taskTextEl = document.getElementById("taskText");
    const coreStatus = document.getElementById("coreStatus");
    const progressEl = document.getElementById("progressFill");
    const aiCore = document.querySelector(".ai-core");
    const nodes = document.querySelectorAll(".node");
    const conns = document.querySelectorAll(".conn");

    let idx = 0;

    function applyStep(i) {
        const s = steps[i];

        // step indicator
        stepCountEl.textContent = i + 1;
        [...stepDotsEl.children].forEach((d, k) => {
            d.classList.toggle("on", k <= i);
        });

        // task + core status
        taskTextEl.innerHTML = s.task;
        coreStatus.textContent = s.status;

        // progress
        progressEl.style.width = s.progress + "%";

        // core emphasis (heavier glow during reasoning)
        if (s.coreEmphasis) {
            aiCore.style.boxShadow =
                "0 32px 64px -20px rgba(93,46,222,0.65)," +
                "0 0 0 8px rgba(93,46,222,0.10)," +
                "0 0 0 18px rgba(93,46,222,0.04)";
            aiCore.style.transform = "translate(-50%, -50%) scale(1.04)";
        } else {
            aiCore.style.boxShadow = "";
            aiCore.style.transform = "translate(-50%, -50%) scale(1)";
        }
        aiCore.style.transition =
            "transform 500ms cubic-bezier(.4,1.4,.5,1), box-shadow 500ms ease";

        // active nodes + connectors
        nodes.forEach((n) => {
            n.classList.toggle("active", s.active.includes(n.dataset.node));
        });
        conns.forEach((c) => {
            c.classList.toggle("active", s.active.includes(c.dataset.conn));
        });
    }

    // run loop
    applyStep(0);
    // give each step 1.6s; full loop ~8s
    let timer = setInterval(() => {
        idx = (idx + 1) % steps.length;
        applyStep(idx);
    }, 1800);

    // pause when section is offscreen (performance)
    const sec = document.querySelector(".ai-section");
    const io = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting && !timer) {
                    timer = setInterval(() => {
                        idx = (idx + 1) % steps.length;
                        applyStep(idx);
                    }, 1800);
                } else if (!e.isIntersecting && timer) {
                    clearInterval(timer);
                    timer = null;
                }
            });
        },
        { threshold: 0.1 },
    );
    io.observe(sec);
})();
