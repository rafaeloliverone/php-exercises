<?php


use App\Vacancies;
use Illuminate\Database\Seeder;

class VacanciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = Vacancies::create([
            'name_company' => 'Facebook',
            'address' => '37 E. Victoria St',  
            'office' => 'Developer',   
            'linkedin' => 'https://pt.linkedin.com/company/face',  
        ]);

        $jobs = Vacancies::create([
            'name_company' => 'Google',
            'address' => '37 S. Maria Td',  
            'office' => 'Engineer',   
            'linkedin' => 'https://pt.linkedin.com/company/google'
        ]); 
        
    }
}
