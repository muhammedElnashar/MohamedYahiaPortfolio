<?php

namespace Database\Seeders;

use Database\Seeders\CaseStudies\AcademicPlatformCaseStudySeeder;
use Database\Seeders\CaseStudies\B2BServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\CaseStudySectionSettingSeeder;
use Database\Seeders\CaseStudies\ConstructionServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\ConsultingServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\DigitalMarketingAgencyCaseStudySeeder;
use Database\Seeders\CaseStudies\DigitalServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\EcommerceCaseStudySeeder;
use Database\Seeders\CaseStudies\EdTechPlatformCaseStudySeeder;
use Database\Seeders\CaseStudies\FashionEcommerceCaseStudySeeder;
use Database\Seeders\CaseStudies\HealthcareCaseStudySeeder;
use Database\Seeders\CaseStudies\HealthWellnessCaseStudySeeder;
use Database\Seeders\CaseStudies\HospitalityTourismCaseStudySeeder;
use Database\Seeders\CaseStudies\InsulationWaterproofingCaseStudySeeder;
use Database\Seeders\CaseStudies\LawFirmCaseStudySeeder;
use Database\Seeders\CaseStudies\LegalServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\LocalServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\LocalTourismCaseStudySeeder;
use Database\Seeders\CaseStudies\OnlineEducationCaseStudySeeder;
use Database\Seeders\CaseStudies\OnlineRetailCaseStudySeeder;
use Database\Seeders\CaseStudies\ProfessionalServicesCaseStudySeeder;
use Database\Seeders\CaseStudies\RealEstateCaseStudySeeder;
use Database\Seeders\CaseStudies\RetailSectorCaseStudySeeder;
use Database\Seeders\CaseStudies\SpecialtyClinicsCaseStudySeeder;
use Database\Seeders\CaseStudies\TourismCaseStudySeeder;
use Database\Seeders\CaseStudies\WomenHealthCaseStudySeeder;
use Illuminate\Database\Seeder;

class CaseStudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            TourismCaseStudySeeder::class,
            LegalServicesCaseStudySeeder::class,
            LawFirmCaseStudySeeder::class,
            HealthcareCaseStudySeeder::class,
            SpecialtyClinicsCaseStudySeeder::class,
            WomenHealthCaseStudySeeder::class,
            OnlineEducationCaseStudySeeder::class,
            EdTechPlatformCaseStudySeeder::class,
            InsulationWaterproofingCaseStudySeeder::class,
            ConstructionServicesCaseStudySeeder::class,
            HospitalityTourismCaseStudySeeder::class,
            LocalTourismCaseStudySeeder::class,
            EcommerceCaseStudySeeder::class,
            AcademicPlatformCaseStudySeeder::class,
            ProfessionalServicesCaseStudySeeder::class,
            RetailSectorCaseStudySeeder::class,
            B2BServicesCaseStudySeeder::class,
            LocalServicesCaseStudySeeder::class,
            FashionEcommerceCaseStudySeeder::class,
            ConsultingServicesCaseStudySeeder::class,
            RealEstateCaseStudySeeder::class,
            DigitalServicesCaseStudySeeder::class,
            DigitalMarketingAgencyCaseStudySeeder::class,
            OnlineRetailCaseStudySeeder::class,
            HealthWellnessCaseStudySeeder::class,
            CaseStudySectionSettingSeeder::class,

        ]);
    }
}
