<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states=array(
            array(1, 'القاهرة', 'Cairo',64),
            array(2, 'الجيزة', 'Giza',64),
            array(3, 'الأسكندرية', 'Alexandria',64),
            array(4, 'الدقهلية', 'Dakahlia',64),
            array(5, 'البحر الأحمر', 'Red Sea',64),
            array(6, 'البحيرة', 'Beheira',64),
            array(7, 'الفيوم', 'Fayoum',64),
            array(8, 'الغربية', 'Gharbiya',64),
            array(9, 'الإسماعلية', 'Ismailia',64),
            array(10, 'المنوفية', 'Menofia',64),
            array(11, 'المنيا', 'Minya',64),
            array(12, 'القليوبية', 'Qaliubiya',64),
            array(13, 'الوادي الجديد', 'New Valley',64),
            array(14, 'السويس', 'Suez',64),
            array(15, 'اسوان', 'Aswan',64),
            array(16, 'اسيوط', 'Assiut',64),
            array(17, 'بني سويف', 'Beni Suef',64),
            array(18, 'بورسعيد', 'Port Said',64),
            array(19, 'دمياط', 'Damietta',64),
            array(20, 'الشرقية', 'Sharkia',64),
            array(21, 'جنوب سيناء', 'South Sinai',64),
            array(22, 'كفر الشيخ', 'Kafr Al sheikh',64),
            array(23, 'مطروح', 'Matrouh',64),
            array(24, 'الأقصر', 'Luxor',64),
            array(25, 'قنا', 'Qena',64),
            array(26, 'شمال سيناء', 'North Sinai',64),
            array(27, 'سوهاج', 'Sohag',64)
        );


        foreach($states as $state){
            DB::table("governorates")->insert([
                "id" => $state[0],
                "governorate_name_ar" => $state[1],
                "governorate_name_en" => $state[2],
                "country_id" => $state[3],
            ]);
        }
    }
}
