<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // 電話番号からハイフンを削除して整形
        $tel = str_replace('-', '', $this->faker->phoneNumber);

        // 住所文字列の9文字目以降を取得（先頭部分を省略）
        $address = mb_substr($this->faker->address, 9);
        return [
            'name' => $this->faker->name,
            'kana' => $this->faker->kanaName,
            'tel' => $tel, 
            'address' => $address, 
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'birthday' => $this->faker->dateTime,
            'gender' => $this->faker->numberBetween(0, 2),
            'memo' => $this->faker->realText(50),
        ];
    }
}
