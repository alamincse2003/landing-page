<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = [
            ['name' => 'NidusHire', 'tag' => 'AI Recruitment', 'color' => '#5D2EDE'],
            ['name' => 'NidusHR', 'tag' => 'HR Automation', 'color' => '#7B4BF0'],
            ['name' => 'NidusCart', 'tag' => 'E-Commerce AI', 'color' => '#0B0B14'],
            ['name' => 'NidusLearn', 'tag' => 'EdTech Platform', 'color' => '#1a1a2e'],
        ];

        $services = [
            ['icon' => 'code', 'title' => 'Web Development', 'desc' => 'Scalable web applications built with modern frameworks and clean architecture.'],
            ['icon' => 'smartphone', 'title' => 'Mobile Apps', 'desc' => 'Native and cross-platform mobile experiences that users love.'],
            ['icon' => 'cpu', 'title' => 'AI Engineering', 'desc' => 'Custom AI models, LLM integrations, and intelligent automation pipelines.'],
            ['icon' => 'layout', 'title' => 'UX / UI Design', 'desc' => 'Conversion-focused design systems rooted in user research and data.'],
            ['icon' => 'database', 'title' => 'Data Engineering', 'desc' => 'Robust data pipelines, warehousing, and real-time analytics infrastructure.'],
            ['icon' => 'trending-up', 'title' => 'Growth & SEO', 'desc' => 'Full-funnel growth strategy, technical SEO, and performance marketing.'],
        ];

        $process = [
            ['num' => '01', 'title' => 'Kickoff', 'desc' => 'We align on your goals, constraints, and success metrics in a focused discovery session.'],
            ['num' => '02', 'title' => 'Strategy', 'desc' => 'We map the architecture, choose the right stack, and define the delivery roadmap.'],
            ['num' => '03', 'title' => 'Design & Build', 'desc' => 'Iterative sprints with continuous feedback loops — you see progress every week.'],
            ['num' => '04', 'title' => 'Delivery', 'desc' => 'Staged rollout with thorough QA, performance testing, and zero-downtime deployment.'],
            ['num' => '05', 'title' => 'Measure & Scale', 'desc' => 'Post-launch monitoring, analytics review, and continuous improvement cycles.'],
        ];

        $ecosystem = [
            ['name' => 'Nidus Agents', 'tag' => 'AI Platform', 'featured' => true, 'desc' => 'Autonomous AI agents that reason, plan, and execute complex multi-step workflows across your entire stack.'],
            ['name' => 'NidusCart', 'tag' => 'E-Commerce', 'featured' => false, 'desc' => 'AI-native commerce platform with smart recommendations and dynamic pricing.'],
            ['name' => 'NidusHealth', 'tag' => 'Healthcare', 'featured' => false, 'desc' => 'HIPAA-ready patient management and clinical workflow automation.'],
            ['name' => 'NidusRealty', 'tag' => 'Real Estate', 'featured' => false, 'desc' => 'Intelligent property matching, valuations, and CRM for modern brokerages.'],
            ['name' => 'NidusTime', 'tag' => 'Workforce', 'featured' => false, 'desc' => 'AI-powered scheduling, time tracking, and payroll automation.'],
            ['name' => 'NidusCloud', 'tag' => 'Infrastructure', 'featured' => false, 'desc' => 'Managed cloud infrastructure with auto-scaling and cost optimization.'],
        ];

        $caseStudies = [
            [
                'label' => 'E-Commerce',
                'title' => 'How NidusCart increased checkout conversion by 38%',
                'desc' => 'We replaced a legacy Magento stack with our AI-native commerce engine, introduced dynamic pricing, and rebuilt the checkout UX from scratch.',
                'stats' => [['val' => '38%', 'label' => 'Conversion lift'], ['val' => '2.1×', 'label' => 'Revenue growth'], ['val' => '4 wks', 'label' => 'Time to launch']],
            ],
            [
                'label' => 'HR Tech',
                'title' => 'Cutting time-to-hire from 42 days to 11 with NidusHire',
                'desc' => 'Our AI recruitment platform automated screening, scheduling, and candidate scoring for a 500-seat enterprise client in the financial sector.',
                'stats' => [['val' => '74%', 'label' => 'Faster hiring'], ['val' => '60%', 'label' => 'Cost reduction'], ['val' => '11 days', 'label' => 'Avg time-to-hire']],
            ],
            [
                'label' => 'Healthcare',
                'title' => 'Automating clinical documentation at 3 hospital networks',
                'desc' => 'NidusHealth\'s AI layer integrated with existing EHR systems to auto-generate SOAP notes, reducing admin burden by over 5 hours per physician per week.',
                'stats' => [['val' => '5 hrs', 'label' => 'Saved per physician/wk'], ['val' => '99.2%', 'label' => 'Documentation accuracy'], ['val' => '3 nets', 'label' => 'Hospital networks']],
            ],
        ];

        $industries = [
            ['icon' => 'landmark', 'title' => 'Fintech'],
            ['icon' => 'heart-pulse', 'title' => 'Healthcare'],
            ['icon' => 'shopping-bag', 'title' => 'E-Commerce'],
            ['icon' => 'graduation-cap', 'title' => 'Education'],
            ['icon' => 'plane', 'title' => 'Travel'],
            ['icon' => 'home', 'title' => 'Real Estate'],
            ['icon' => 'brain', 'title' => 'AI & Deep Tech'],
            ['icon' => 'truck', 'title' => 'Logistics'],
        ];

        $testimonials = [
            ['quote' => 'Niduslab didn\'t just build our product — they helped us rethink the entire operation. The AI agents alone saved us 40 hours a week.', 'name' => 'Sarah Chen', 'role' => 'CTO, Veritas Financial'],
            ['quote' => 'Shipping in 4 weeks felt impossible. They made it look routine. Best engineering partner we\'ve worked with.', 'name' => 'Marcus Okafor', 'role' => 'Founder, PulseHR'],
            ['quote' => 'The UX team understood our users better than we did. Conversion went up 38% in the first month after launch.', 'name' => 'Priya Nair', 'role' => 'Head of Product, ShopAxis'],
            ['quote' => 'Data pipelines that used to take our team weeks to build were live in days. Niduslab operates at a different level.', 'name' => 'Tom Bergmann', 'role' => 'VP Engineering, DataLayer'],
        ];

        $faqs = [
            ['q' => 'How long does a typical project take?', 'a' => 'Most projects ship within 4–12 weeks depending on scope. We use iterative sprints so you see working software from week one, not just at the end.'],
            ['q' => 'Do you work with early-stage startups?', 'a' => 'Yes — we love working with founders who are building something new. We can help you move from idea to MVP rapidly, and we structure engagements to fit early-stage budgets.'],
            ['q' => 'What tech stack do you use?', 'a' => 'We\'re stack-agnostic and choose the right tools for each problem. We have deep expertise in Laravel, Next.js, React Native, Python, and cloud infrastructure on AWS and GCP.'],
            ['q' => 'Can you take over an existing codebase?', 'a' => 'Absolutely. We do thorough code reviews and architecture audits before proposing any changes. We\'ve successfully modernised several legacy systems without disrupting live products.'],
            ['q' => 'Do you offer ongoing support after launch?', 'a' => 'Yes — we offer retainer agreements that cover ongoing development, maintenance, monitoring, and support. Many of our clients have been with us for 2+ years.'],
            ['q' => 'How do we get started?', 'a' => 'Book a free 30-minute discovery call. We\'ll learn about your project, share honest recommendations, and send a scoped proposal within 48 hours.'],
        ];

        return view('pages.home', compact(
            'products', 'services', 'process', 'ecosystem',
            'caseStudies', 'industries', 'testimonials', 'faqs'
        ));
    }
}
