<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("pais")->insert([
            [
                "id"         => 1,
                "nome"       => "Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);   
    }
}
