<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
      DB::table('users')->delete();
 
      User::create(array(
          'username' => 'firstuser',
          'password' => Hash::make('first_password')
      ));
 
      User::create(array(
          'username' => 'seconduser',
          'password' => Hash::make('second_password')
      ));
	  
	  User::create(array(
          'username' => 'test',
          'password' => Hash::make('test')
      ));
	  
	  User::create(array(
          'username' => 'test1',
          'password' => Hash::make('test1')
      ));
	  
	  User::create(array(
          'username' => 'test2',
          'password' => Hash::make('test2')
      ));
	  
	  User::create(array(
          'username' => 'test3',
          'password' => Hash::make('test3')
      ));
	  
	  User::create(array(
          'username' => 'test4',
          'password' => Hash::make('test4')
      ));
	  
	  User::create(array(
          'username' => 'test5',
          'password' => Hash::make('test5')
      ));
	  
	  User::create(array(
          'username' => 'test6',
          'password' => Hash::make('test6')
      ));
	  
	  User::create(array(
          'username' => 'test7',
          'password' => Hash::make('test7')
      ));
	  
	   User::create(array(
          'username' => 'test8',
          'password' => Hash::make('test8')
      ));
	  
	   User::create(array(
          'username' => 'test9',
          'password' => Hash::make('test9')
      ));
	  
	   User::create(array(
          'username' => 'test10',
          'password' => Hash::make('test10')
      ));
  }
 
}