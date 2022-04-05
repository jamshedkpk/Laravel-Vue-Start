<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
public function definition()
{
$name=$this->faker->text(20);
$price=$this->faker->numberBetween(1000,10000);
return
[
'name'=>$name,
'slug'=>Str::slug($name),
'description'=>$this->faker->text(50),
'image'=>$this->faker->imageUrl($height=30,$width=30),
'price'=>$this->faker->numberBetween(1000,10000),
'sale_price'=>$price-500,
];
}
}
