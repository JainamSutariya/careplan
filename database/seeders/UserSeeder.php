<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);
        User::factory()->create([
            'name' => 'Assistant1',
            'email' => 'assistant1@gmail.com',
            'role' => 'Assistant',
            'password' => Hash::make('12345678')
        ]);
        User::factory()->create([
            'name' => 'Assistant2',
            'email' => 'assistant2@gmail.com',
            'role' => 'Assistant',
            'password' => Hash::make('12345678')
        ]);
        User::factory()->create([
            'name' => 'Assistant3',
            'email' => 'assistant3@gmail.com',
            'role' => 'Assistant',
            'password' => Hash::make('12345678')
        ]);
        User::factory()->create([
            'name' => 'Assistant4',
            'email' => 'assistant4@gmail.com',
            'role' => 'Assistant',
            'password' => Hash::make('12345678')
        ]);
        User::factory()->create([
            'name' => 'Assistant5',
            'email' => 'assistant5@gmail.com',
            'role' => 'Assistant',
            'password' => Hash::make('12345678')
        ]);
        // User::factory()->create([
        //     'name' => 'Admin7',
        //     'email' => 'admin7@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);
        // User::factory()->create([
        //     'name' => 'Admin8',
        //     'email' => 'admin8@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);
        // User::factory()->create([
        //     'name' => 'Admin9',
        //     'email' => 'admin9@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);
        // User::factory()->create([
        //     'name' => 'Gitishbhai Rathod',
        //     'shop_name' => 'Chamunda Enterprise(Surat)',
        //     'mobile_number' => '9925947468',
        //     'role' => 'Branch',
        //     'password' => Hash::make('ks_9925947468')
        // ]);
    }
}
