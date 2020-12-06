<?php

use Illuminate\Database\Seeder;

class FornecedorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("fornecedors")->insert([
            [
                "id"         => 1,
                "pessoa_id"  => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);   
    }
}
