<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    DB::table('products')->insert([
        [
            'name' => 'Hp 15s',
            'price' => '1000',
            'description' => 'Ryzen 5 ,16 gb ram and 512 ssd',
            'category' => 'Laptop',
            'qty'=>'1',
            'gallery' => 'https://images.rawpixel.com/image_png_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA4L3BmLXM3My0wOC1tb2NrdXAtYS1qb2IxMDc0LnBuZw.png',
        ]
  
       
        // Add more rows as needed
    ]);
}

}
