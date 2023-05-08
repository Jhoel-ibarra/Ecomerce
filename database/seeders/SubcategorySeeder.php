<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'Trajes de baño',
                'slug' => Str::slug('Trajes de baño'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Ropa deportiva',
                'slug' => Str::slug('Ropa deportiva'),
            ],

            [
                'category_id' => 1,
                'name' => 'Pijamas',
                'slug' => Str::slug('Pijamas'),
            ],

            /* TV, audio y video */

            [
                'category_id' => 2,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
            ],
            [
                'category_id' => 2,
                'name' => 'Sombreros',
                'slug' => Str::slug('Sombreros'),
            ],

            [
                'category_id' => 2,
                'name' => 'Cinturones',
                'slug' => Str::slug('Cinturones'),
            ],

            /* Consola y videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('xbos'),
            ],

            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],

            [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC'),
            ],

            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],

            /* Computación */

            [
                'category_id' => 4,
                'name' => 'Maquillajes',
                'slug' => Str::slug('Maquillajes'),
            ],

            [
                'category_id' => 4,
                'name' => 'Cremas',
                'slug' => Str::slug('Cremas'),
            ],

            [
                'category_id' => 4,
                'name' => 'Ceras',
                'slug' => Str::slug('Ceras'),
            ],

            [
                'category_id' => 4,
                'name' => 'Delineadores',
                'slug' => Str::slug('Delineadores'),
            ],

            /* Moda */
            [
                'category_id' => 5,
                'name' => 'Lapiceros',
                'slug' => Str::slug('Lapiceros'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Cuadernos',
                'slug' => Str::slug('Cuadernos'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Libros',
                'slug' => Str::slug('Libros'),
            ],

            [
                'category_id' => 5,
                'name' => 'Marcadores',
                'slug' => Str::slug('Marcadores'),
            ],
        ];

        foreach ($subcategories as $subcategory) {


            Subcategory::create($subcategory);
        }
    }
}
