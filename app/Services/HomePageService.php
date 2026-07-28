<?php

namespace App\Services;

use App\Models\CaseStudy;
use App\Models\CaseStudySectionSetting;
use App\Models\Certificate;
use App\Models\CertificateSection;
use App\Models\ClientMessage;
use App\Models\ClientReview;
use App\Models\ContactSetting;
use App\Models\HeroSection;
use App\Models\HeroSkill;
use App\Models\HomeBelief;
use App\Models\HomeFactItem;
use App\Models\HomeFaq;
use App\Models\HomeSection;
use App\Models\Platform;
use App\Models\SeoSpecialty;
use App\Models\SeoTools;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProcess;
use App\Models\Skill;

class HomePageService
{
    public function getData(): array
    {
        return [
            ...$this->hero(),
            ...$this->headings(),
            ...$this->facts(),
            ...$this->services(),
/*            ...$this->caseStudies(),*/
            ...$this->skills(),
            ...$this->seoTools(),
            ...$this->platforms(),
            ...$this->seoSpecialties(),
            ...$this->certifications(),
            ...$this->philosophy(),
            ...$this->reviews(),
            ...$this->messages(),
            ...$this->faqs(),
            ...$this->contactInformation(),
            ...$this->homeServicesProcess(),

        ];
    }

    private function hero(): array
    {
        return [
            'hero' => HeroSection::first(),

            'heroSkills' => HeroSkill::query()
                ->orderBy('sort_order')
                ->get(),
        ];
    }

    private function headings(): array
    {
        return [
            'sections' => HomeSection::query()
                ->get()
                ->keyBy('section_key'),
        ];
    }

    private function facts(): array
    {
        return [
            'facts' => HomeFactItem::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),
        ];
    }

    private function services(): array
    {
        return [
            'categories' => ServiceCategory::query()
                ->with([
                    'services' => fn ($query) => $query
                        ->where('is_active', true)
                        ->orderBy('sort_order'),
                ])
                ->whereHas(
                    'services',
                    fn ($query) => $query->where('is_active', true)
                )
                ->orderBy('sort_order')
                ->get(),
        ];
    }

/*    private function caseStudies(): array
    {
        return [
            'caseStudies' => CaseStudy::query()
                ->with([
                    'growths' => fn ($query) => $query->orderBy('sort_order'),
                    'improvements' => fn ($query) => $query->orderBy('sort_order'),
                ])
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),
            'settings' => CaseStudySectionSetting::query()
            ->where('is_active', true)->get()

        ];
    }*/

 /*   private function Setting()
    {
        return [
            'setting_cta' => caseS::first(),
        ];
    }*/

    private function skills(): array
    {
        return [
            'skills' => Skill::query()
                ->with([
                    'metrics' => fn ($query) => $query->orderBy('sort_order'),
                    'features' => fn ($query) => $query->orderBy('sort_order'),
                    'tools' => fn ($query) => $query->orderBy('sort_order'),
                ])
                ->orderBy('sort_order')
                ->get(),
        ];
    }

    private function homeServicesProcess()
    {
        return [
            'homeServicesProcess' => ServiceProcess::query()
            ->where('is_active', true)->get()
        ];

    }
    private function seoSpecialties()
    {
        return[
        'seoSpecialties' => SeoSpecialty::query()
        ->with([
            'advantages' => fn ($query) => $query->orderBy('sort_order'),
            'challenges' => fn ($query) => $query->orderBy('sort_order'),
            'comparisons' => fn ($query) => $query->orderBy('sort_order'),
            'faqs' => fn ($query) => $query->orderBy('sort_order'),
            'heroStats' => fn ($query) => $query->orderBy('sort_order'),
            'methodologies' => fn ($query) => $query->orderBy('sort_order'),
            'processes' => fn ($query) => $query->orderBy('sort_order'),
            'services' => fn ($query) => $query->orderBy('sort_order'),
            'statistics' => fn ($query) => $query->orderBy('sort_order'),
        ])
            ->where('is_active', true)
            ->orderBy('sort_order')->get()

        ];
    }

    private function certifications()
    {
        return[
            'certifications' => CertificateSection::query()
            ->with([
                'certificates' => fn ($query) => $query->orderBy('sort_order'),
                'highlights' => fn ($query) => $query->orderBy('sort_order'),
                'stats' => fn ($query) => $query->orderBy('sort_order'),
            ])
            ->where('is_active', true)
            ->orderBy('sort_order')->first()
        ];
    }

    private function philosophy()
    {
        return[
            'beliefs'=>HomeBelief::query()
            ->where('is_active', true)
            ->orderBy('sort_order')->get()
        ];

    }

    private function reviews()
    {
        return[
            'reviews'=> ClientReview::query()
            ->where('is_active', true)
            ->orderBy('sort_order')->get()
        ];
    }
    private function messages()
    {
        return[
            'messages'=> ClientMessage::query()
            ->where('is_active', true)
            ->orderBy('sort_order')->get()
        ];
    }

    private function faqs()
    {
        return[
            'faqs'=>HomeFaq::query()
            ->where('is_active', true)
            ->orderBy('sort_order')->get()
        ];
    }
    private function seoTools(): array
    {
        return [
            'seoTools' => SeoTools::query()->get(),
        ];
    }


    private function platforms(): array
    {
        return [
            'platforms' => Platform::query()->get(),
        ];
    }

    private function contactInformation()
    {
        return[
            'info'=>ContactSetting::query()
            ->where('is_active', true)
            ->first()
        ];
    }

}
