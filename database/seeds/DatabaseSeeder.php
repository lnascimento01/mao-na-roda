<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('access_levels')->insert(
          [
            'nome' => 'Cliente',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
          ]
      );

      DB::table('access_levels')->insert(
          [
            'nome' => 'Empresa',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
          ]
      );
    }
}
