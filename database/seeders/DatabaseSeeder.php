<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
				[
					'name' => 'Vova',
					'email'  => 'Vova@mail.ru',
					'age'  => '30',
					'salary'  => '5000',
					'created_at'  => '2026-02-12',
					'updated_at'  => '2026-02-13',
				],
				[
					'name' => 'Max',
					'email'  => 'Max@mail.ru',
					'age'  => '15',
					'salary'  => '3000',
					'created_at'  => '2025-12-30',
					'updated_at'  => '2026-01-01',
				],
				[
					'name' => 'Serega',
					'email'  => 'Serega@mail.ru',
					'age'  => '18',
					'salary'  => '15000',
					'created_at'  => '2025-02-15',
					'updated_at'  => '2026-02-15',
				],
				[
					'name' => 'Lesha',
					'email'  => 'Lesha@mail.ru',
					'age'  => '20',
					'salary'  => '20000',
					'created_at'  => '2023-02-12',
					'updated_at'  => '2025-02-13',
				],
				[
					'name' => 'Vlad',
					'email'  => 'Vlad@mail.ru',
					'age'  => '40',
					'salary'  => '55000',
					'created_at'  => '2026-01-01',
					'updated_at'  => '2026-04-01',
				],
				[
					'name' => 'Kirill',
					'email'  => 'Kirill@mail.ru',
					'age'  => '35',
					'salary'  => '125000',
					'created_at'  => '2020-06-12',
					'updated_at'  => '2026-03-30',
				],
				
			]);


    }
}
