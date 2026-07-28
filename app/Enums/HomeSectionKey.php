<?php

namespace App\Enums;

enum HomeSectionKey: string
{
    case WHY_SEO = 'why_seo';
    case SERVICES = 'services';
    case RESULTS = 'results';
    case TOOLS = 'tools';
    case PLATFORM = 'platform';
    case SEO_TOOLS = 'seo_tools';
    case CERTIFICATIONS = 'certifications';
    case PHILOSOPHY = 'philosophy';
    case REVIEWS = 'reviews';
    case MESSAGE = 'message';

    case FAQ = 'faq';
    case CONTACT = 'contact';

    public function label(): string
    {
        return match ($this) {
            self::SERVICES => 'Services',
            self::WHY_SEO => 'Why SEO',
            self::RESULTS => 'Results',
            self::TOOLS => 'Tools',
            self::PLATFORM => 'Platform',
            self::SEO_TOOLS => 'Seo Tools',
            self::CERTIFICATIONS => 'Certifications',
            self::PHILOSOPHY => 'Philosophy',
            self::REVIEWS => 'Reviews',
            self::MESSAGE => 'Message',
            self::FAQ => 'Faq',
            self::CONTACT => 'Contact',

        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($case) => [
                $case->value => $case->label(),
            ])
            ->toArray();
    }
}
