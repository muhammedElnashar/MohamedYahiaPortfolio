<?php

namespace App\Traits;

use App\Models\Translation;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use InvalidArgumentException;

trait HasTranslations
{
    public function translations(): MorphMany
    {
        return $this->morphMany(
            Translation::class,
            'translatable'
        );
    }

    public function getTranslation(?string $locale = null): ?Translation
    {
        $locale ??= app()->getLocale();

        return $this->translations()
            ->where('locale', $locale)
            ->first();
    }

    public function translate(string $field, ?string $locale = null): mixed
    {
        $locale ??= app()->getLocale();

        if (!in_array($field, $this->getTranslatableFields())) {
            throw new InvalidArgumentException(
                "{$field} is not translatable."
            );
        }

        // اللغة الأساسية
        if ($locale === 'en') {
            return $this->{$field};
        }

        $translation = $this->getTranslation($locale);

        if (!$translation) {
            return $this->{$field};
        }

        return $translation->data[$field] ?? $this->{$field};
    }

    public function setTranslation(string $locale, array $data): Translation
    {
        foreach ($data as $field => $value) {
            if (! in_array($field, $this->getTranslatableFields())) {
                throw new InvalidArgumentException(
                    "{$field} is not translatable."
                );
            }
        }

        $translation = $this->getTranslation($locale);

        $currentData = $translation?->data ?? [];

        return $this->translations()->updateOrCreate(
            [
                'locale' => $locale,
            ],
            [
                'data' => array_merge($currentData, $data),
            ]
        );
    }
    public function deleteTranslation(string $locale): bool
    {
        return (bool)$this->translations()
            ->where('locale', $locale)
            ->delete();
    }
}
