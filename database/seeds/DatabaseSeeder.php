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

    App\Role::create([
            'name' => 'teacher'
        ]);
    App\Role::create([
            'name' => 'Administrator'
        ]);
    App\Role::create([
            'name' => 'Director of Studies'
        ]);
        App\StudentGroup::create(
          [
            'name'=>'OLevel'
          ]
        );
        App\StudentGroup::create(
          [
            'name'=>'Alevel'
          ]
        );
    }

}
