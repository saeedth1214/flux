<?php

namespace Modules\User\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\User\Entities\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
