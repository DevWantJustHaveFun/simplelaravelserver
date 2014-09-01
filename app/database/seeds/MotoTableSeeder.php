<?php
 
class MotoTableSeeder extends Seeder {
 
  public function run()
  {
      DB::table('motos')->delete();
	  
	  Moto::create(array(
          'm_name' => 'ZX-6R',
		  'm_marque' => 'KAWAZAKI',
          'm_img' => ''
      ));
	  
	  Moto::create(array(
          'm_name' => 'TL1000S',
		  'm_marque' => 'SUZUKI',
          'm_img' => ''
      ));
	  
	  Moto::create(array(
          'm_name' => 'CB1000R',
		  'm_marque' => 'HONDA',
          'm_img' => ''
      ));
	  
	  Moto::create(array(
          'm_name' => 'GSX-R600',
		  'm_marque' => 'SUZUKI',
          'm_img' => ''
      ));
	  
	  Moto::create(array(
          'm_name' => 'RC8-R',
		  'm_marque' => 'KTM',
          'm_img' => ''
      ));
  }
 
}