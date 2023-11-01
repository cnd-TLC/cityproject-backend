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
            'department_name' => 'mayor\'s office',
        ]);

        Department::create([
            'department_name' => 'treasury',
        ]);

        Department::create([
            'department_name' => 'bac',
        ]);

        Department::create([
            'department_name' => 'budget',
        ]);

        Department::create([
            'department_name' => 'accounting',
        ]);

        Department::create([
            'department_name' => 'cgso',
        ]);
    }
}
