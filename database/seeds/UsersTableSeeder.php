<?php

use App\User;
use App\Package;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'test@melhorenvio.com.br',
            'password' => bcrypt('123456'),
        ])->each(function ($user) {
            factory(Package::class, 50)->create([
                'user_id' => $user->id
            ]);
        });

        if (App::isLocal()) {
            factory(User::class, 20)->create(['password' => bcrypt('123456')])->each(function ($user) {
                factory(Package::class, 50)->create([
                    'user_id' => $user->id
                ]);
            });
        }
    }
}
