<?php

use App\Pessoa;
use Illuminate\Database\Eloquent\FactoryBuilder;
use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pessoa::class, 100)->create();
        
    }
}
