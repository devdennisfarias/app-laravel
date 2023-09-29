<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Proposta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PropostaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proposta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => $this->faker->numberBetween(1, 50), 
            'numero_nexus' => $this->faker->unique()->numberBetween(10000, 99999),
            'vendedor' => $this->faker->name(),
            'banco' => Str::random(10),
            'orgao' => Str::random(15),
            'tabela_digitada' => Str::random(5),
            'vigencia_tabela' => Str::random(5),
            'valor_bruto' => $this->faker->numberBetween(100000, 999999),
            'valor_liquido_liberado' => $this->faker->numberBetween(10000000, 99999999),
            'tx_juros' => $this->faker->numberBetween(10, 99),
            'valor_parcela' => $this->faker->numberBetween(1000, 1999),
            'qtd_parcelas' => $this->faker->numberBetween(24, 360),
            'documentos' => Str::random(25),
//            'created_at'=> $this->faker->date(),
        ];
    }
}
