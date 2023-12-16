<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Async\Pool;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'admin',
            'admin_id' => 1,
            'email' => 'admin@admin.com',
            'password' => '123456',
            'phone' => '123456',
            'role_id' => '1',
        ]);




    }
}
