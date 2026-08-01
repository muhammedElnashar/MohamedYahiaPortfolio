<?php

namespace App\Support\Seo;

use App\Models\SeoDataPage;
use App\Models\SeoMeta;

class SeoManager
{
    protected SeoMeta|SeoDataPage|null $seo = null;

    public function set(SeoMeta|SeoDataPage|null $seo): self
    {
        $this->seo = $seo;

        return $this;
    }

    public function get(string $field, mixed $default = null): mixed
    {
        if (! $this->seo) {
            return $default;
        }

        if (! isset($this->seo->{$field})) {
            return $default;
        }

        $value = $this->seo->{$field};

        if (blank($value)) {
            return $default;
        }

        /*
        |--------------------------------------------------------------------------
        | Translatable Fields
        |--------------------------------------------------------------------------
        */

        if (is_array($value)) {

            return $value[app()->getLocale()]
                ?? $value['en']
                ?? $value['ar']
                ?? $default;
        }

        return $value;
    }

    public function has(): bool
    {
        return $this->seo !== null;
    }

    public function model(): SeoMeta|SeoDataPage|null
    {
        return $this->seo;
    }

    public function reset(): self
    {
        $this->seo = null;

        return $this;
    }
}
