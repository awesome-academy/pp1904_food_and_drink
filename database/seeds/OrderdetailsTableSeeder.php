<?php

use Illuminate\Database\Seeder;
use App\Models\Orderdetail;

class OrderdetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Orderdetail::class, 3)->create();
    }
}
