<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // PatientsTableSeeder::class,
            // DoctorsTableSeeder::class,
            // ClinicsTableSeeder::class,
            // PatientsEvaluationsTableSeeder::class,
            // DoctorsEvaluationsTableSeeder::class,
            // ClinicsEvaluationsTableSeeder::class,
            // AppointmentsTableSeeder::class,]);
            factory(App\Models\Patient::class)->create(),
            factory(App\Models\Doctor::class)->create(),
            factory(App\Models\Clinic::class)->create(),
            factory(App\Models\PatientsEvaluation::class)->create(),
            factory(App\Models\DoctorsEvaluation::class)->create(),
            factory(App\Models\ClinicsEvaluation::class)->create(),
            factory(App\Models\Appointment::class)->create(),
        ]);




    }
}
