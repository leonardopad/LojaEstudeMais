<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\LojaSeeder;
use Database\Seeders\VendedorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([LojaSeeder::class],);
        // $this->call([VendedorSeeder::class],);
        $this->call([ProdutoSeeder::class],);
    }
}
