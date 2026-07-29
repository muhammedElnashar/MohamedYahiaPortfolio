<?php

namespace App\Services;

use DOMDocument;
use DOMXPath;
use Illuminate\Support\Str;

class BlogTableOfContents
{
    public function generate(string $html): array
    {
        if (blank($html)) {
            return [
                'content' => $html,
                'items' => [],
            ];
        }

        $dom = new DOMDocument();

        libxml_use_internal_errors(true);

        $dom->loadHTML(
            '<?xml encoding="UTF-8">' . $html,
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );

        libxml_clear_errors();

        $xpath = new DOMXPath($dom);

        $headings = $xpath->query('//h2 | //h3');

        $items = [];

        $usedIds = [];

        foreach ($headings as $heading) {

            $text = trim($heading->textContent);

            if ($text === '') {
                continue;
            }

            /*
            |--------------------------------------------------------------------------
            | Existing ID
            |--------------------------------------------------------------------------
            */

            $existingId = trim(
                $heading->getAttribute('id')
            );

            /*
            |--------------------------------------------------------------------------
            | Generate ID
            |--------------------------------------------------------------------------
            */

            $baseId = $existingId ?: Str::slug($text);

            /*
             * مهم مع العناوين العربية.
             */

            if ($baseId === '') {
                $baseId = 'section-' . (count($items) + 1);
            }

            $id = $baseId;

            $counter = 2;

            while (in_array($id, $usedIds, true)) {
                $id = $baseId . '-' . $counter++;
            }

            $usedIds[] = $id;

            /*
            |--------------------------------------------------------------------------
            | Add ID
            |--------------------------------------------------------------------------
            */

            $heading->setAttribute('id', $id);

            /*
            |--------------------------------------------------------------------------
            | TOC
            |--------------------------------------------------------------------------
            */

            $items[] = [
                'id' => $id,
                'text' => $text,
                'level' => (int) substr(
                    strtolower($heading->nodeName),
                    1
                ),
            ];
        }

        return [
            'content' => $dom->saveHTML(),
            'items' => $items,
        ];
    }
}
