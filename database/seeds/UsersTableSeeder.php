<?php

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
    DB::table('users')->insert([
        'fullname' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin123'),
        'sex' => 'male',
        'age' => '26',
        'contact_no' => '7278755694',
    ]);
  }
}
