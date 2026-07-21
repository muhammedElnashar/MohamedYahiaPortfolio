<?php

namespace App\Enums;

enum HomeSectionKey: string
{
    case WHY_SEO = 'why_seo';
    case SERVICES = 'services';

    case RESULTS = 'results';

    case REVIEWS = 'reviews';

    case CERTIFICATIONS = 'certifications';
    case VISION = 'vision';
    case MESSAGE = 'message';
    case FAQ = 'faq';

    case TOOLS = 'tools';

    case CONTACT = 'contact';

    public function label(): string
    {
        return match ($this) {
            self::SERVICES => 'Services',
            self::WHY_SEO => 'Why SEO',
            self::RESULTS => 'Results',
            self::REVIEWS => 'Reviews',
            self::CERTIFICATIONS => 'Certifications',
            self::TOOLS => 'Tools',
            self::VISION => 'Vision',
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
