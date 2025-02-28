<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    public function run()
    {
        $pizzas = [
            [
                'name' => 'Margarita',
                'description' => 'Salsa de tomate, mozzarella y albahaca fresca.',
                'price' => 8.99,
                'image' => 'https://assets.biggreenegg.eu/app/uploads/2021/04/30120446/topimage-pizza-margherita-2021m05-800x533-1.jpg'
            ],
            [
                'name' => 'Pepperoni',
                'description' => 'Salsa de tomate, mozzarella y pepperoni.',
                'price' => 10.99,
                'image' => 'https://hacermasapizza.com/img/elaboracion-pizza-de-pepperoni-782.webp'
            ],
            [
                'name' => 'Cuatro Quesos',
                'description' => 'Mozzarella, gorgonzola, parmesano y fontina.',
                'price' => 11.99,
                'image' => 'https://assets.unileversolutions.com/recipes-v2/216503.jpg'
            ],
            [
                'name' => 'Hawaiana',
                'description' => 'Salsa de tomate, mozzarella, jamón y piña.',
                'price' => 9.99,
                'image' => 'https://www.cocinadelirante.com/800x600/filters:format(webp):quality(75)/sites/default/files/images/2019/11/como-hacer-pizza-hawaiana.jpg'
            ],
            [
                'name' => 'Vegetariana',
                'description' => 'Salsa de tomate, mozzarella, champiñones, pimientos y cebolla.',
                'price' => 10.49,
                'image' => 'https://cdn.loveandlemons.com/wp-content/uploads/2023/02/vegetarian-pizza.jpg'
            ],
            [
                'name' => 'Carbonara',
                'description' => 'Salsa cremosa, mozzarella, panceta y huevo.',
                'price' => 12.99,
                'image' => 'https://hacermasapizza.com/img/elaboracion-pizza-carbonara-905.webp'
            ],
            [
                'name' => 'BBQ Chicken',
                'description' => 'Salsa BBQ, pollo, cebolla caramelizada y mozzarella.',
                'price' => 13.49,
                'image' => 'https://www.splenda.com/wp-content/uploads/2023/02/grilled-bbq-chicken-pizza-2000x1000.jpg'
            ],
            [
                'name' => 'Mexicana',
                'description' => 'Salsa picante, carne molida, chiles jalapeños y mozzarella.',
                'price' => 11.99,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNlZR3Tx32coKEt6llVl1PD0yG6XsImEldWg&s'
            ],
            [
                'name' => 'Prosciutto e Funghi',
                'description' => 'Salsa de tomate, mozzarella, jamón y champiñones.',
                'price' => 10.99,
                'image' => 'https://caliudefinestrelles.ezzytable.com/storage/images/posts/image_z8dh2sneik.jpg'
            ],
            [
                'name' => 'Suprema',
                'description' => 'Salsa de tomate, mozzarella, pepperoni, champiñones y aceitunas negras.',
                'price' => 14.99,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy4ocpWbTFXm-xV3JopOrSE8mtdVlhQC6Wng&s'
            ],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}
