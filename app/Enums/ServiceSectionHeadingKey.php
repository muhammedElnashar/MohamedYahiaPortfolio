<?php

namespace App\Enums;

enum ServiceSectionHeadingKey: string
{
    case SIGNS_YOU_NEED_THIS = 'signs_you_need_this';
    case DEEP_Dive = 'deep_dive';
    case WHY_SERVICE = 'why_service';
    case MY_METHODOLOGY = 'my_methodology';
    case DELIVERABLE = 'deliverable';
    case OUR_PROCESS = 'our_process';
    case WHY_INVEST = 'why_invest';
    case KEYWORDS = 'keywords';
    case AUDIT_COVER='audit_cover';
    case AUDIT_PROCESS_STEP='audit_process_step';
    case AUDIT_DELIVERABLE='audit_deliverable';
    case PROBLEM = 'problem';

    case WHY_ME = 'why_me';

    case MY_PROCESS = 'my_process';

    case COMPARISON = 'comparison';
    case RELATED_SERVICE = 'related_service';
    case FAQ = 'faq';

    case WHY_CHOOSE = 'why_choose';

    public function label(): string
    {
        return match ($this) {
            self::SIGNS_YOU_NEED_THIS => 'Signs You Need This',
            self::DEEP_Dive => 'Deep Dive',
            self::WHY_SERVICE => 'Why Service',
            self::MY_METHODOLOGY => 'My Methodology',
            self::DELIVERABLE => 'Deliverable',
            self::OUR_PROCESS => 'Our Process',
            self::WHY_INVEST => 'Why Invest',
            self::KEYWORDS => 'Keywords',
            self::AUDIT_COVER => 'Audit Cover',
            self::AUDIT_PROCESS_STEP => 'Audit Process Step',
            self::AUDIT_DELIVERABLE => 'Audit Deliverable',
            self::PROBLEM => 'Problem',
            self::WHY_ME => 'Why Me',
            self::MY_PROCESS => 'My Process',
            self::COMPARISON => 'Comparison',
            self::RELATED_SERVICE => 'Related Service',
            self::FAQ => 'FAQ',
            self::WHY_CHOOSE => 'Why Choose',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($case) => [
                $case->value => $case->label(),
            ])
            ->toArray();
    }}
