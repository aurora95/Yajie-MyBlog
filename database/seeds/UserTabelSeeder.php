<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();
    User::create([
      'id'   => 1,
      'name'    => 'admin',
      'email'    => 'yajie_xing@foxmail.com'.$i,
      'password' => 1,
    ]);
  }

}