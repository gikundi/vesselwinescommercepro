<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(DB::table('cart')->get()->count() == 0){

            DB::table('cart')->insert([

                [
                    'wine_brand' => 'Breidcker',
                    'year' => '13',
                    'bottle_amount' => '17.90',
                    'case_amount' => '204.06',
                    'image' => 'images/09riesling.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'wine_brand' => 'Breidcker',
                    'year' => '15',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/chardonnay_v_1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'wine_brand' => 'Gewurztrammer',
                    'year' => '15',
                    'bottle_amount' => '22.90',
                    'case_amount' => '261.06',
                    'image' => 'images/chardonnay_v_1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'wine_brand' => 'Hukapapa Dessert Riesling (375ml)',
                    'year' => '14',
                    'bottle_amount' => '21.90',
                    'case_amount' => '262.80',
                    'image' => 'images/Hukapapa_v.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'wine_brand' => 'Late Harvest Sauvignon Blanc(375ml)',
                    'year' => '13',
                    'bottle_amount' => '21.90',
                    'case_amount' => '261.06',
                    'image' => 'images/Hunters_Late_Harvest_Sauvignon-Blanc_NV_-_webv.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [
                    'wine_brand' => 'MiruMiru(Tm) Non-Vinatge',
                    'year' => '',
                    'bottle_amount' => '28.90',
                    'case_amount' => '149.40',
                    'image' => 'images/hunters_mirumiru_non_vintage_PNG_v3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'MiruMiru(Tm) Reserve',
                    'year' => '11',
                    'bottle_amount' => '34.00',
                    'case_amount' => '408.00',
                    'image' => 'images/hunters_mirumiru_non_vintage_PNG_v3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'MiruMiru(Tm) Rose',
                    'year' => '11',
                    'bottle_amount' => '34.00',
                    'case_amount' => '408.00',
                    'image' => 'images/hunters_mirumiru_non_vintage_PNG_v3.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                 [   
                    'wine_brand' => 'Pinot Gris',
                    'year' => '16',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/chardonnay_v_1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'Pinot  Noir',
                    'year' => '13',
                    'bottle_amount' => '28.90',
                    'case_amount' => '329.46',
                    'image' => 'images/chardonnay_v_1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                 [   
                    'wine_brand' => 'Riesling ',
                    'year' => '13',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/09riesling_v.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'Riesling ',
                    'year' => '15',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/09riesling_v.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                 [   
                    'wine_brand' => 'Riesling ',
                    'year' => '12',
                    'bottle_amount' => '22.90',
                    'case_amount' => '261.06',
                    'image' => 'images/09riesling_v.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'Riesling ',
                    'year' => '16',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/09riesling_v.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                 [   
                    'wine_brand' => 'Rose',
                    'year' => '16',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/chardonnay_v_1.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'Sauvignon Blanc ',
                    'year' => '15',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/Hunters_Gewurztraminer_NV_-_webv.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

                [   
                    'wine_brand' => 'Sauvignon Blanc',
                    'year' => '16',
                    'bottle_amount' => '18.90',
                    'case_amount' => '215.46',
                    'image' => 'images/Hunters_Gewurztraminer_NV_-_webv.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]


            ]);

        } else 

        { echo "\e[31mTable is not empty, therefore NOT "; }

     }
}
