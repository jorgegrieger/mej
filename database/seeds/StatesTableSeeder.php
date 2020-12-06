<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table("estados")->insert([
             [
                "id"         => 12,
                "nome"       => "Acre",
                "sigla"       => "AC",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
             ],
            [
                "id"         => 11,
                "nome"       => "Rondônia",
                "sigla"       => "RO",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 13,
                "nome"       => "Amazonas",
                "sigla"       => "AM",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 14,
                "nome"       => "Roraima",
                "sigla"       => "RR",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 15,
                "nome"       => "Pará",
                "sigla"       => "PA",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 16,
                "nome"       => "Amapá",
                "sigla"       => "AP",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 17,
                "nome"       => "Tocantins",
                "sigla"       => "TO",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 21,
                "nome"       => "Maranhão",
                "sigla"       => "MA",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 22,
                "nome"       => "Piauí",
                "sigla"       => "PI",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 23,
                "nome"       => "Ceará",
                "sigla"       => "CE",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 24,
                "nome"       => "Rio Grande do Norte",
                "sigla"       => "RN",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 25,
                "nome"       => "Paraíba",
                "sigla"       => "PB",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 26,
                "nome"       => "Pernambuco",
                "sigla"       => "PE",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 27,
                "nome"       => "Alagoas",
                "sigla"       => "AL",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 28,
                "nome"       => "Sergipe",
                "sigla"       => "SE",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 29,
                "nome"       => "Bahia",
                "sigla"       => "BA",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 31,
                "nome"       => "Minas Gerais",
                "sigla"       => "MG",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 32,
                "nome"       => "Espírito Santo",
                "sigla"       => "ES",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 33,
                "nome"       => "Rio de Janeiro",
                "sigla"       => "RJ",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 35,
                "nome"       => "São Paulo",
                "sigla"       => "SP",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 41,
                "nome"       => "Paraná",
                "sigla"       => "PR",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 42,
                "nome"       => "Santa Catarina",
                "sigla"       => "SC",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 43,
                "nome"       => "Rio Grande do Sul",
                "sigla"       => "RS",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 50,
                "nome"       => "Mato Grosso do Sul",
                "sigla"       => "MS",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 51,
                "nome"       => "Mato Grosso",
                "sigla"       => "MT",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 52,
                "nome"       => "Goiás",
                "sigla"       => "GO",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ], 
            [
                "id"         => 53,
                "nome"       => "Distrito Federal",
                "sigla"       => "DF",
                "pais_id"    => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);

    }

}
