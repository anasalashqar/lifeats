<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Meal::insert([
           
                // Breakfast
                [
                    'name' => 'Spinach & Feta Omelette',
                    'description' => 'Fluffy omelette with sautéed spinach and crumbled feta cheese.',
                    'calories' => 310,
                    'protein' => 20,
                    'carbs' => 6,
                    'fats' => 24,
                    'image_url' => 'https://img.freepik.com/free-photo/traditional-azerbaijani-kookoo-herbs-eggs-dish-served-with-yogurt_140725-7102.jpg?t=st=1743596931~exp=1743600531~hmac=6bf595ec70cc338b7d0908228210202052b2b5690ae38cb81350f6efb40f693e&w=740',
                    'category_id' => 1,
                    'subscription_id' => 4
                ],
                [
                    'name' => 'Chia Seed Pudding',
                    'description' => 'Chia seeds soaked in almond milk with a drizzle of honey and berries.',
                    'calories' => 290,
                    'protein' => 10,
                    'carbs' => 25,
                    'fats' => 16,
                    'image_url' => 'https://img.freepik.com/free-photo/front-view-delicious-food-concept_23-2148578402.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 1,
                    'subscription_id' => 5
                ],

                // Lunch
                [
                    'name' => 'Turkey & Avocado Wrap',
                    'description' => 'Whole wheat wrap with turkey breast, avocado, lettuce, and tomato.',
                    'calories' => 430,
                    'protein' => 28,
                    'carbs' => 35,
                    'fats' => 18,
                    'image_url' => 'https://img.freepik.com/free-photo/wrap-salad-roll-with-tuna-corn-salad_1339-6840.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 2,
                    'subscription_id' => 2
                ],
                [
                    'name' => 'Vegan Buddha Bowl',
                    'description' => 'Brown rice, roasted chickpeas, sweet potato, tahini drizzle.',
                    'calories' => 480,
                    'protein' => 20,
                    'carbs' => 55,
                    'fats' => 17,
                    'image_url' => 'https://img.freepik.com/free-photo/salmon-poke-bowl-flat-lay-photography_53876-108183.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 2,
                    'subscription_id' => 5
                ],

                // Dinner
                [
                    'name' => 'Zucchini Noodles with Pesto',
                    'description' => 'Spiralized zucchini tossed in homemade basil pesto.',
                    'calories' => 420,
                    'protein' => 12,
                    'carbs' => 15,
                    'fats' => 30,
                    'image_url' => 'https://img.freepik.com/free-photo/tasty-beautiful-pasta-closeup-with-spinach-cheese-olives-basil-nuts_1220-1185.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 3,
                    'subscription_id' => 4
                ],
                [
                    'name' => 'Stuffed Bell Peppers',
                    'description' => 'Baked bell peppers filled with ground turkey, quinoa, and veggies.',
                    'calories' => 540,
                    'protein' => 32,
                    'carbs' => 40,
                    'fats' => 22,
                    'image_url' => 'https://img.freepik.com/free-photo/top-view-cooked-bell-peppers-grey-surface-food-dolma-vegetable-meal-beef_140725-74493.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 3,
                    'subscription_id' => 1
                ],

                // Snacks
                [
                    'name' => 'Cottage Cheese & Pineapple',
                    'description' => 'Protein-packed cottage cheese served with pineapple chunks.',
                    'calories' => 200,
                    'protein' => 16,
                    'carbs' => 12,
                    'fats' => 9,
                    'image_url' => 'https://img.freepik.com/free-photo/fruit-salad-half-pineapple-spoon_23-2148494801.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 4,
                    'subscription_id' => 2
                ],
                [
                    'name' => 'Almond Date Bars',
                    'description' => 'Homemade almond and date energy bars with no added sugar.',
                    'calories' => 190,
                    'protein' => 5,
                    'carbs' => 20,
                    'fats' => 11,
                    'image_url' => 'https://img.freepik.com/free-photo/top-view-breakfast-cereal-bars-with-nuts_23-2148697610.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 4,
                    'subscription_id' => 3
                ],

                // Salads
                [
                    'name' => 'Thai Peanut Slaw',
                    'description' => 'Cabbage, carrots, red peppers, and peanut-lime dressing.',
                    'calories' => 360,
                    'protein' => 10,
                    'carbs' => 25,
                    'fats' => 22,
                    'image_url' => 'https://img.freepik.com/free-photo/thai-papaya-salad-wooden-plate-with-sticky-rice-dried-shrimp_1150-20260.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 5,
                    'subscription_id' => 4
                ],
                [
                    'name' => 'Classic Garden Salad with Tuna',
                    'description' => 'Mixed greens, cucumber, tomatoes, and tuna with olive oil dressing.',
                    'calories' => 400,
                    'protein' => 30,
                    'carbs' => 12,
                    'fats' => 24,
                    'image_url' => 'https://img.freepik.com/free-photo/tuna-salad-with-lettuce-olives-corn-tomatoes-top-view_114579-8119.jpg?uid=R185485274&ga=GA1.1.304909007.1737273676&semt=ais_hybrid',
                    'category_id' => 5,
                    'subscription_id' => 1
                ],


           
        ]);
    }
}
