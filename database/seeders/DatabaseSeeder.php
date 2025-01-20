<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ItemSeeder::class,
        ]);

        \App\Models\Customer::factory(1000)->create();
        // 全件取得したものを変数に入れる
        $items = \App\Models\Item::all();
        Purchase::factory(30000)->create()
            // each・・１件ずつ処理するという動きとなる
            ->each(function (Purchase $purchase) use ($items) {
                // attach()とすると、中間テーブルに情報を登録することができる
                $purchase->items()->attach(
                    $items->random(rand(1, 3))->pluck('id')->toArray(),
                    ['quantity' => rand(1, 5)]
                );
            });
    }
}
