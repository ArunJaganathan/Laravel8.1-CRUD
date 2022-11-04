<?php

namespace Database\Factories;

use App\Models\$SCHEMA_FILE;
use Illuminate\Database\Eloquent\Factories\Factory;

class $SCHEMA_FILEFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = $SCHEMA_FILE::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
