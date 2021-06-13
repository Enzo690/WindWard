<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Subject;
use App\Models\User;
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
        $this->call([
            SubjectTableSeeder::class,
            RoleTableSeeder::class,
            UsersTableSeeder::class,
            ArticleTableSeeder::class,
            ContactTableSeeder::class
        ]);
    }
}
