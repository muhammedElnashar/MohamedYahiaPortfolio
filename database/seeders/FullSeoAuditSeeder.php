<?php

namespace Database\Seeders;

use App\Enums\CardSectionKey;
use App\Enums\CtaTypeEnum;
use App\Enums\ProcessSectionKey;
use App\Enums\ServiceSectionHeadingKey;
use App\Enums\StatisticsSectionKey;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class FullSeoAuditSeeder extends Seeder
{
    public function run(): void
    {
        $service = Service::create([
            'title' => [
                'en' => 'Full SEO Audit',
            ],

            'slug' => 'full-seo-audit',

            'icon' => 'trending-up',

            'category_id' => ServiceCategory::where('slug', 'technical')->first()->id,

            'short_description' => [
                'en' => 'Complete site analysis: technical errors, structure, keywords, and competitors with a clear action plan.',
            ],

            'hero_title' => [
                'en' => 'Full SEO Audit — Precise Diagnosis for Every Site Issue',
            ],

            'hero_description' => [
                'en' => 'Complete analysis: technical errors, structure, keywords, competitors, with a clear action plan to dominate search results.',
            ],

            'meta_title' => [
                'en' => 'Full SEO Audit Service',
            ],

            'meta_description' => [
                'en' => 'Complete SEO audit for technical issues, content, keywords and competitors.',
            ],
        ]);
        $hero = $service->statisticsSections()->create([
            'type' => 'stat',
            'key' => StatisticsSectionKey::HERO,
            'title' =>  'Hero Statistics' ,
        ]);

        $hero->stats()->createMany([
            [
                'value' => '300+',
                'label' => [
                    'en' => 'Sites Audited',
                ],
            ],
            [
                'value' => '48h',
                'label' => [
                    'en' => 'Delivery Time',
                ],
            ],
            [
                'value' => '100%',
                'label' => [
                    'en' => 'Full Transparency',
                ],
            ],
            [
                'value' => '6+',
                'label' => [
                    'en' => 'Years Exp.',
                ],
            ],
        ]);


        // Pain Points
        $service->painPoints()->createMany([
            [
                'icon' => 'search',
                'title' => ['en' =>'Your Google rankings dropped suddenly with no clear reason'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart-2',
                'title' => ['en'=>'Many of your pages are not indexed in Google Search Console'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'file-text',
                'title' => ['en'=>'Your site is slow and failing Core Web Vitals tests'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'trending-down',
                'title' => ['en'=> 'Google Ads performs but organic SEO brings nothing'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'alert-circle',
                'title' => ['en'=>'Competitors rank for keywords that should be yours'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'eye-off',
                'title' => ['en'=>'You launched or rebuilt a site and saw a traffic drop'],
                'sort_order' => 6,
            ],
            [
                'icon' => 'link',
                'title' => ['en' =>'You don\'t know where to start with your site\'s SEO'],
                'sort_order' => 7,
            ],
            [
                'icon' => 'zap',
                'title' => ['en'=>'You received a Google penalty or notice an algorithmic filter'],
                'sort_order' => 8,
            ],
        ]);

        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::SIGNS_YOU_NEED_THIS,
                'eyebrow' => ['en'=>'Why SEO?'],
                'title' => ['en' => 'Without SEO, you don\'t exist online'],
                'content' =>['en' =>'Google processes 8.5 billion searches daily — your clients are searching right now. The question: do they find you?'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::DEEP_Dive,
                'eyebrow' =>['en' => 'Deep Dive'],
                'title' => ['en' =>'Full SEO Audit — Why Your Business Needs It'],
                'content' => ['en'=> 'A Full SEO Audit is the true starting point for any successful strategy.
                 Without an accurate diagnosis of your site current state, any effort you put into content, links, or technical fixes will be blind.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_SERVICE,
                'eyebrow' => ['en'=>'Why This Service?'],
                'title' => ['en'=>'What You Get from SEO Audit'],
                'content' => ['en'=>'Every dollar invested in SEO Audit returns far higher value than paid ads — because organic ranking works 24/7 without additional cost.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::MY_METHODOLOGY,
                'eyebrow' => ['en'=>'My Methodology'],
                'title' => ['en'=>'How I Deliver SEO Audit?'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::DELIVERABLE,
                'title' => ['en'=>'What\'s Included'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::OUR_PROCESS,
                'title' => ['en'=>'Our Process'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_INVEST,
                'eyebrow' => ['en'=>'Why Invest In SEO?'],
                'title' => ['en'=>'SEO Is Not a Cost — It\'s the Best Digital Investment You Can Make'],
                'content' => ['en'=>'While ads stop when spending stops, SEO keeps delivering results for years through sustainable organic visibility.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::KEYWORDS,
                'title' => ['en'=>'Keywords Targeted for SEO Audit'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_COVER,
                'title' => ['en'=>'What the Audit Covers'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_PROCESS_STEP,
                'title' => ['en'=>'Audit Process Steps'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_DELIVERABLE,
                'title' => ['en'=>'Audit Deliverables'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::PROBLEM,
                'eyebrow' => ['en'=>'Why This Matters'],
                'title' => ['en'=>'Common Problems Costing You Rankings & Clients'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_ME,
                'eyebrow' => ['en'=>'Why Me?'],
                'title' => ['en'=>'What Sets Me Apart as an SEO Expert'],
                'content' => ['en'=>'Data-driven SEO methodology backed by years of experience across Saudi Arabia, UAE, Egypt and the Arab world.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::MY_PROCESS,
                'eyebrow' => ['en'=>'My Process'],
                'title' => ['en'=>'How I Deliver a Professional SEO Audit'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::COMPARISON,
                'eyebrow' => ['en'=>'The Comparison'],
                'title' => ['en'=>'SEO Expert vs. Traditional Methods'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::RELATED_SERVICE,
                'title' => ['en'=>'Related Services'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::FAQ,
                'eyebrow' => ['en'=>'FAQ'],
                'title' => ['en'=>'Common SEO Audit Questions'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_CHOOSE,
                'eyebrow' => ['en'=>'Why Choose Mohamed'],
                'title' => ['en'=>'The Difference Between a Real Expert and the Rest'],
            ],
        ]);

        // Benefits - Why This Service?
        $service->benefits()->createMany([
            [
                'icon' => 'check',
                'title' => ['en'=>'Uncovering Hidden Issues'],
                'description' => ['en'=>'Uncovering technical and content issues blocking your rankings'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Clear Roadmap'],
                'description' => ['en'=>'Detailed report with immediately actionable priorities'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Save Time & Money'],
                'description' => ['en'=>'Know what to fix first instead of working randomly'],
                'sort_order' => 3,
            ],
        ]);
        // Methodology
        $myMethodology = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::MY_METHODOLOGY,
            'title' => 'My Methodology',
        ]);

        $myMethodology->processSteps()->createMany([
            [
                'number' => 1,
                'title' => ['en'=>'Full Technical Scan'],
                'description' => ['en'=>'Full crawl with Screaming Frog + Core Web Vitals analysis'],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => ['en'=>'Content & Keyword Analysis'],
                'description' => ['en'=>'Review every page, assess keyword targeting and cannibalization'],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => ['en'=>'Link & Authority Analysis'],
                'description' => ['en'=>'Review backlink profile and identify toxic links'],
                'sort_order' => 3,
            ],
            [
                'number' => 4,
                'title' => ['en'=>'Priority Report'],
                'description' => ['en'=>'Visual report with Quick Wins and long-term priorities'],
                'sort_order' => 4,
            ],
        ]);
        //Deliverables -  What's Included
        $service->deliverables()->createMany([
            [
                'icon' => 'check',
                'title' => ['en'=>'Full technical analysis: Crawl, Indexing, Redirects'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Core Web Vitals and speed analysis'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Keyword research and competitor Gap Analysis'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Site structure and Internal Linking audit'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Backlinks and Toxic Links analysis'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'check',
                'title' => ['en'=>'Detailed PDF report with priority action plan'],
                'sort_order' => 6,
            ],
        ]);
        //Our Process
        $ourProcess = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::OUR_PROCESS,
            'title' => 'Our Process',
        ]);

        $ourProcess->processSteps()->createMany([
            [
                'number' => 1,
                'title' => ['en'=>'Analyze Site'],
                'description' => ['en'=>'Analyze Site'],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => ['en'=>'Find Issues'],
                'description' =>['en'=>'Find Issues'],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => ['en'=>'Prioritize'],
                'description' => ['en'=>'Prioritize'],
                'sort_order' => 3,
            ],
        ]);
        //stats - Invest
        $investment = $service->statisticsSections()->create([
            'type' => 'stat',
            'key' => StatisticsSectionKey::INVESTMENT,
            'title' =>'Investment Statistics' ,
        ]);

        $investment->stats()->createMany([
            [
                'value' => '14x',
                'label' => [
                    'en' => 'Return on Investment',
                ],
                'description' => [
                    'en' => 'SEO ROI vs. average paid ads',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => '68%',
                'label' => [
                    'en' => 'Where Buying Journeys Start',
                ],
                'description' => [
                    'en' => 'of online experiences begin with search',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => '#1',
                'label' => [
                    'en' => 'Click Dominance',
                ],
                'description' => [
                    'en' => 'Position #1 captures 27%+ of all clicks',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => '∞',
                'label' => [
                    'en' => 'Unlimited Sustainable Growth',
                ],
                'description' => [
                    'en' => 'Results don’t stop — works 24/7',
                ],
                'sort_order' => 4,
            ],
        ]);
        // Keywords
        $service->keywords()->createMany([
            ['keyword' => ['en'=>'SEO Audit'],],
            ['keyword' => ['en'=>'سيو تدقيق'],],
            ['keyword' => ['en'=>'فحص موقع'],],
            ['keyword' => ['en'=>'SEO تقرير'],],
            ['keyword' => ['en'=>'تحليل موقع'],],
            ['keyword' => ['en'=>'site audit'],],
            ['keyword' => ['en'=>'كشف مشاكل سيو'],],
            ['keyword' => ['en'=>'تقرير تحسين محركات البحث'],],
        ]);
        $auditCovers = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Cover,
            'title' => 'Audit Covers',
        ]);

        $auditCovers->cards()->createMany([
            [
                'icon' => 'settings',
                'title' => ['en'=>'Technical Audit'],
                'description' => ['en'=>'Comprehensive technical structure review: crawling, indexation, and redirects.'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'file-text',
                'title' => ['en'=>'On-Page Analysis'],
                'description' => ['en'=>'Evaluating keywords, titles, content, and page structure.'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' =>['en'=> 'Off-Page Review'],
                'description' => ['en'=>'Analyzing the Backlink Profile and identifying toxic links.'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'layers',
                'title' => ['en'=>'Content Gaps'],
                'description' => ['en'=>'Comparing current content against competitor coverage.'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'target',
                'title' => ['en'=>'Competitor Analysis'],
                'description' => ['en'=>'Studying top competitor strategies in search results.'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'bar-chart-2',
                'title' => ['en'=>'Performance Metrics'],
                'description' => ['en'=>'Measuring Core Web Vitals, speed, and user experience.'],
                'sort_order' => 6,
            ],
        ]);

        $whyMe = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Why_Me,
            'title' => 'Why Me',
        ]);

        $whyMe->cards()->createMany([
            [
                'icon' => 'award',
                'title' => ['en'=>'40+ Certified Credentials'],
                'description' => ['en'=>'Google, Semrush, Ahrefs & more — documented on LinkedIn'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'briefcase',
                'title' => ['en'=>'6+ Years of Specialist Experience'],
                'description' => ['en'=>'Across Saudi, UAE, Egypt and the Arab world'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'bar-chart',
                'title' => ['en'=>'100% Data-Driven Methodology'],
                'description' =>['en'=>'Every decision backed by GSC, Ahrefs & GA4'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'settings',
                'title' => ['en'=>'Expertise Across Leading Platforms'],
                'description' =>['en'=> 'Salla, Zid, WordPress, Shopify, Magento & Laravel'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'target',
                'title' => ['en'=>'Measurable Results'],
                'description' => ['en'=>'Monthly GSC & Ahrefs reports with clear ROI metrics'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'message-circle',
                'title' =>['en'=> 'Continuous Communication & Full Transparency'],
                'description' => ['en'=>'You track every step — no working in the dark'],
                'sort_order' => 6,
            ],
        ]);

        $auditProcess = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Process,
            'title' => 'Audit Process',
        ]);

        $auditProcess->cards()->createMany([
            [
                'title' => ['en'=>'Crawl & Collect'],
                'description' => ['en'=>'Crawling the site and collecting data from GSC, Ahrefs and Screaming Frog.'],
                'sort_order' => 1,
            ],
            [
                'title' => ['en'=>'Analyze & Diagnose'],
                'description' =>['en'=> 'Analyzing data to identify issues and opportunities.'],
                'sort_order' => 2,
            ],
            [
                'title' => ['en'=>'Prioritize'],
                'description' => ['en'=>'Ranking issues by impact versus implementation effort.'],
                'sort_order' => 3,
            ],
            [
                'title' => ['en'=>'Report & Action Plan'],
                'description' => ['en'=>'Delivering a detailed PDF report with a clear roadmap.'],
                'sort_order' => 4,
            ],
        ]);


        $auditDeliverables = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Deliverables,
            'title' => 'Audit Deliverables',
        ]);

        $auditDeliverables->cards()->createMany([
            [
                'title' => ['en'=>'Full Report'],
                'description' => ['en'=>'Comprehensive PDF report covering all technical and content aspects.'],
                'sort_order' => 1,
            ],
            [
                'title' => ['en'=>'Action Plan'],
                'description' => ['en'=>'Prioritized action list ready for immediate implementation.'],
                'sort_order' => 2,
            ],
            [
                'title' => ['en'=>'Priority Matrix'],
                'description' => ['en'=>'Classifying each issue by impact and difficulty to determine what to fix first.'],
                'sort_order' => 3,
            ],
            [
                'title' => ['en'=>'Competitor Gap'],
                'description' => ['en'=>'Competitor comparison report highlighting the most untapped opportunities.'],
                'sort_order' => 4,
            ],
        ]);


        $service->checklists()->createMany([

            // Problems
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en'=>'Google doesn\'t fully index your pages despite quality content'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en'=>'Your technical report shows hundreds of errors with no fixes'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en'=>'Competitors rank first while you\'re stuck on page 2–3'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' =>['en'=> 'You don\'t know which pages to prioritize for improvement'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en'=>'You lose traffic daily from hidden issues you can’t see'],
            ],

        ]);
        $myProcess = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::MY_PROCESS,
            'title' => 'My Process',
        ]);

        $myProcess->processSteps()->createMany([
            [
                'number' => 1,
                'title' =>['en'=> 'Full crawl & extraction of all technical and content errors'],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => ['en'=>'Site hierarchy analysis & page authority distribution'],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' =>['en'=> 'Core Web Vitals, speed & UX review'],
                'sort_order' => 3,
            ],
            [
                'number' => 4,
                'title' =>['en'=> 'Internal & external link audit including broken links'],
                'sort_order' => 4,
            ],
            [
                'number' => 5,
                'title' => ['en'=>'Full competitor gap analysis (top 3 rivals)'],
                'sort_order' => 5,
            ],
            [
                'number' => 6,
                'title' => ['en'=>'Clear priority report with an immediate action roadmap'],
                'sort_order' => 6,
            ],
        ]);
        $service->comparisons()->createMany([
            [
                'feature' => ['en'=>'Custom 200+ checkpoint audit report'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 1,
            ],
            [
                'feature' => ['en'=>'Direct competitor analysis'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 2,
            ],
            [
                'feature' => ['en'=>'Clear priority implementation roadmap'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 3,
            ],
            [
                'feature' => ['en'=>'Post-audit follow-up support'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 4,
            ],
            [
                'feature' => ['en'=>'Quick win opportunity identification'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 5,
            ],
            [
                'feature' => ['en'=>'Deep search intent understanding'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 6,
            ],
            [
                'feature' => ['en'=>'Technical developer handoff support'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 7,
            ],
        ]);

        // FAQ
        $service->faqs()->createMany([
            [
                'question' => ['en'=>'How many checkpoints does the audit cover?'],
                'answer' => ['en'=>'More than 200 technical and content checkpoints.'],
            ],
            [
                'question' => ['en'=>'Do I need a developer to implement recommendations?'],
                'answer' => ['en'=>'Not always, but technical fixes may require developer support.'],
            ],
            [
                'question' => ['en'=>'Does the audit include competitor analysis?'],
                'answer' => ['en'=>'Yes, competitor gap analysis is included.'],
            ],
            [
                'question' => ['en'=>'How long does the audit take?'],
                'answer' => ['en'=>'Usually between 24 and 48 hours.'],
            ],
        ]);

        $expertApproach = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Expert_Approach,
            'title' => 'Expert Approach',
        ]);

        $expertApproach->cards()->createMany([
            [
                'icon' => 'search',
                'title' => ['en'=>'I use Screaming Frog + Ahrefs + GSC API to extract real data. Every recommendation is backed by numbers and measurable impact priorities. Quick Wins identified within 48 hours.'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'trending-up',
                'title' => ['en'=>'I connect every technical issue to its direct Revenue impact: how much you lose monthly from each un-indexed page, and the expected CTR lift after fixing it.'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'trending-up',
                'title' =>['en'=> 'Post-audit I build a Python-powered monitoring Roadmap to auto-detect recurring issues — ensuring the same problems never resurface.'],
                'sort_order' => 3,
            ],
        ]);
        $service->ctas()->create([
            'section_key' => CtaTypeEnum::EXPERT_CTA,

            'icon' => 'rocket',

            'title' => ['en'=>'Ready to Work with a Real Expert?'],

            'description' => ['en'=>'Stop wasting time with agencies that deliver empty reports — work with an expert who understands the Arab & Gulf market and delivers measurable results.'],

        ]);
        $cta = $service->statisticsSections()->create([
            'type' => 'stat',
            'key' => StatisticsSectionKey::CTA,
            'title' => 'CTA Statistics',
        ]);

        $cta->stats()->createMany([
            [
                'value' => 'shield-check',
                'label' => [
                    'en' => '100% on Mostaql',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => 'star',
                'label' => [
                    'en' => '100% on Mostaql',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => 'award',
                'label' => [
                    'en' => '6+ Years Experience',
                ],
                'sort_order' => 3,
            ],
        ]);
        $regularApproach = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Regular_Approach,
            'title' => 'Regular Approach',
        ]);

        $regularApproach->cards()->createMany([
            [
                'title' => ['en'=>'Superficial manual check or single-tool scan. Generic recommendations without clear priorities.'],
                'sort_order' => 1,
            ],
            [
                'title' => ['en'=>'A long list of errors with no connection to business impact.'],
                'sort_order' => 2,
            ],
            [
                'title' => ['en'=>'Delivers the report and disappears. No follow-up, no monitoring system.'],
                'sort_order' => 3,
            ],
        ]);
        $service->ctas()->create([
            'section_key' => CtaTypeEnum::WHATSAPP_CTA,

            'title' => ['en'=>'Ready to know exactly where your site is failing?'],

            'description' => ['en'=>'Get a comprehensive 200+ point SEO audit with a clear immediate action roadmap.'],

            'button_text' => ['en'=>'Start Now on WhatsApp'],

            'button_url' => 'https://wa.me/201234567890',

        ]);

    }
}
