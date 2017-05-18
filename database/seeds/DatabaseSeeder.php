<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('typepets')->insert([
            [
                'description' => 'cão',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'description' => 'gato',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'description' => 'ave',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'description' => 'hamster',
                'created_at' => Carbon\Carbon::now(),
            ],
            [
                'description' => 'rato',
                'created_at' => Carbon\Carbon::now(),
            ]
        ]);

        DB::table('petshops')->insert([
            'cnpj' => '1',
            'email' => 'teste@email.com',
            'password' => bcrypt('123456'),
            'socialName' => 'PetShop 1',
            'realName' => 'PetShop Teste',
            'telNumber' => '9',
        ]);
    }
}
