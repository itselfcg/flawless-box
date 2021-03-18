<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'Cryo Rubber™ Masks',
            'description' => "This innovative mask set packs the renewing effect of cryo-therapy in an at-home treatment. This collection includes the Cryo Rubber™ with Soothing Allantoin to support skin's natural healing process and protect from environmental irritants, while tiger grass addresses visible redness and irritation.",
            'photo' => 'images/pictures/products/box/1.jpg',
        ]);

        \DB::table('products')->insert([
            'name' => "Cicapair™ Tiger Grass Camo Drops SPF 35",
            'description' => "A lightweight revitalizing serum and color corrector that neutralize the look of redness and turn on skin's glow.",
            'photo' => 'images/pictures/products/box/2.jpg',
        ]);

        \DB::table('products')->insert([
            'name' => "V7™ Antioxidant Serum",
            'description' => "This daily serum uses a vitamin E infused bubble burst combined with an essential vitamin and antioxidant-rich complex to help brighten and smoothen skin. This serum is also clinically tested to balance natural melanin production, improve skin brightness, and deliver antioxidant effects.",
            'photo' => "images/pictures/products/box/3.jpg",
        ]);
        \DB::table('products')->insert([
            'name' => "Cicapair™ Tiger Grass Color Correcting Treatment SPF 30",
            'description' => "This all-in-one treatment includes a color-changing capsule to cover blemishes and neutralize redness, restoring fatigued skin for a vibrant appearance. The formula features Tiger Grass (Centella Asiatica) to help heal sensitive skin exhibiting inflammation, irritation or discomfort.",
            'photo' => "images/pictures/products/box/4.jpg",
        ]);
        \DB::table('products')->insert([
            'name' => "Focuspot™ Micro Tip™ Patche",
            'description' => "Inspired by micro-needling procedures, Focuspot’s innovative adhesive patches contain small micro tips made of hyaluronic acid that melt in contact with the skin. As they self-dissolve, they deliver actives deep into the skin surface to target and treat stubborn concerns.",
            'photo' => "images/pictures/products/box/5.jpg",
        ]);
        \DB::table('products')->insert([
            'name' => "Every Sun Day™ Sun Fluid SPF 50+",
            'description' => "This formula forms a barrier against UVA and UVB rays and environmental aggressors and has a glide-on texture and an invisible finish. It is moisturizing and refreshing while it cools, hydrates, and guards against future UV damage and dryness.",
            'photo' => "images/pictures/products/box/6.jpg",
        ]);
        \DB::table('products')->insert([
            'name' => "Cicapair™ Tiger Grass Cream",
            'description' => "This soft cream moisturizes and soothes dry, sensitive skin. It is formulated with Jartbiome, Dr. Jart’s proprietary microbiome complex to help strengthen and balance while improving skin’s defenses against dryness. Centella Rx soothes and protects sensitive skin.",
            'photo' => "images/pictures/products/box/7.jpg",
        ]);

    }
}
