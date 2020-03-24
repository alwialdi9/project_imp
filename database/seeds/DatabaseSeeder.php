<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(m_akunSeeder::class);
        $this->call(kategori_suratSeeder::class);
<<<<<<< HEAD
=======
        $this->call(AccountSeeder::class);
        $this->call(userSeeder::class);
>>>>>>> 78cf913ddb234f8df07571e1e64f2d9c1a58d7d8
    }
}
