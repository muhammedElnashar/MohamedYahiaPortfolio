<?php

namespace Database\Seeders;

use App\Models\ServiceProcess;
use Illuminate\Database\Seeder;

class ServiceProcessSeeder extends Seeder
{
    public function run(): void
    {
        $processes = [
            [
                'title' => [
                    'ar' => 'تحليل',
                    'en' => 'Audit',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => [
                    'ar' => 'استراتيجية',
                    'en' => 'Strategy',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => [
                    'ar' => 'تنفيذ',
                    'en' => 'Execute',
                ],
                'sort_order' => 3,
            ],
            [
                'title' => [
                    'ar' => 'قياس',
                    'en' => 'Measure',
                ],
                'sort_order' => 4,
            ],
            [
                'title' => [
                    'ar' => 'تحسين مستمر',
                    'en' => 'Optimize',
                ],
                'sort_order' => 5,
            ],
        ];

        foreach ($processes as $process) {
            ServiceProcess::updateOrCreate(
                [
                    'sort_order' => $process['sort_order'],
                ],
                [
                    'title' => $process['title'],
                    'is_active' => true,
                ]
            );
        }
    }
}
