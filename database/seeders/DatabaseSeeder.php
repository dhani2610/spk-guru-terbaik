<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
           'kode_user' => 'ADM001',
           'nama' => 'Super User',
           'email' => 'superuser@spk.com',
           'password' => bcrypt('superuser'),
        //    'kode_role'=> 1,
           'telepon'=> '085890026519',
       ]);
        // \App\Models\User::factory(10)->create();
    }
}
