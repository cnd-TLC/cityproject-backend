<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'department_name' => 'Mayor\'s Office',
        ]);

        Department::create([
            'department_name' => 'Treasury',
        ]);

        Department::create([
            'department_name' => 'BAC',
        ]);

        Department::create([
            'department_name' => 'Budget',
        ]);

        Department::create([
            'department_name' => 'Accounting',
        ]);

        Department::create([
            'department_name' => 'CGSO',
        ]);
    }
}
