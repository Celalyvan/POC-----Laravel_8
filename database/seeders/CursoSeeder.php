<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('CursoSeeder'); //puedo usar este metodo de la clase padre para hacer que este seeder use el seeder indicado (que es un file distinto)

        /*
        $curso = new Curso();
        $curso->name='laravel';
        $curso->descripcion = 'yikes';
        $curso->categoria='web development';
        $curso->save();
        */

        Curso::factory(50)->create();

    }
}
