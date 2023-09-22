<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
        \App\Models\Static\City::insert([
            [
                 "id" => 1,
                 "name_ar" => "أدرار",
                 "name_en" => "Adrar",
                 "name_fr" => "Adrar"
            ],
            [
                "id" => 2,
                "name_ar" => " الشلف",
                "name_en" => "Chlef",
                "name_fr" => "Chlef"
            ],
            [
                "id" => 3,
                "name_ar" => "الأغواط",
                "name_en" => "Laghouat",
                "name_fr" => "Laghouat"
            ],
            [
                "id" => 4,
                "name_ar" => "أم البواقي",
                "name_en" => "Oum El Bouaghi",
                "name_fr" => "Oum El Bouaghi"
            ],
            [
                "id" => 5,
                "name_ar" => "باتنة",
                "name_en" => "Batna",
                "name_fr" => "Batna"
            ],
            [
                "id" => 6,
                "name_ar" => " بجاية",
                "name_en" => "Béjaïa",
                "name_fr" => "Béjaïa"
            ],
            [
                "id" => 7,
                "name_ar" => "بسكرة",
                "name_en" => "Biskra",
                "name_fr" => "Biskra"
            ],
            [
                "id" => 8,
                "name_ar" => "بشار",
                "name_en" => "Béchar",
                "name_fr" => "Béchar"
            ],
            [
                "id" => 9,
                "name_ar" => "البليدة",
                "name_en" => "Blida",
                "name_fr" => "Blida"
            ],
            [
                "id" => 10,
                "name_ar" => "البويرة",
                "name_en" => "Bouira",
                "name_fr" => "Bouira"
            ],
            [
                "id" => 11,
                "name_ar" => "تمنراست",
                "name_en" => "Tamanrasset",
                "name_fr" => "Tamanrasset"
            ],
            [
                "id" => 12,
                "name_ar" => "تبسة",
                "name_en" => "Tébessa",
                "name_fr" => "Tébessa"
            ],
            [
                "id" => 13,
                "name_ar" => "تلمسان",
                "name_en" => "Tlemcen",
                "name_fr" => "Tlemcen"
            ],
            [
                "id" => 14,
                "name_ar" => "تيارت",
                "name_en" => "Tiaret",
                "name_fr" => "Tiaret"
            ],
            [
                "id" => 15,
                "name_ar" => "تيزي وزو",
                "name_en" => "Tizi Ouzou",
                "name_fr" => "Tizi Ouzou"
            ],
            [
                "id" => 16,
                "name_ar" => "الجزائر",
                "name_en" => "Alger",
                "name_fr" => "Alger"
            ],
            [
                "id" => 17,
                "name_ar" => "الجلفة",
                "name_en" => "Djelfa",
                "name_fr" => "Djelfa"
            ],
            [
                "id" => 18,
                "name_ar" => "جيجل",
                "name_en" => "Jijel",
                "name_fr" => "Jijel"
            ],
            [
                "id" => 19,
                "name_ar" => "سطيف",
                "name_en" => "Sétif",
                "name_fr" => "Sétif"
            ],
            [
                "id" => 20,
                "name_ar" => "سعيدة",
                "name_en" => "Saïda",
                "name_fr" => "Saïda"
            ],
            [
                "id" => 21,
                "name_ar" => "سكيكدة",
                "name_en" => "Skikda",
                "name_fr" => "Skikda"
            ],
            [
                "id" => 22,
                "name_ar" => "سيدي بلعباس",
                "name_en" => "Sidi Bel Abbès",
                "name_fr" => "Sidi Bel Abbès"
            ],
            [
                "id" => 23,
                "name_ar" => "عنابة",
                "name_en" => "Annaba",
                "name_fr" => "Annaba"
            ],
            [
                "id" => 24,
                "name_ar" => "قالمة",
                "name_en" => "Guelma",
                "name_fr" => "Guelma"
            ],
            [
                "id" => 25,
                "name_ar" => "قسنطينة",
                "name_en" => "Constantine",
                "name_fr" => "Constantine"
            ],
            [
                "id" => 26,
                "name_ar" => "المدية",
                "name_en" => "Médéa",
                "name_fr" => "Médéa"
            ],
            [
                "id" => 27,
                "name_ar" => "مستغانم",
                "name_en" => "Mostaganem",
                "name_fr" => "Mostaganem"
            ],
            [
                "id" => 28,
                "name_ar" => "المسيلة",
                "name_en" => "M'Sila",
                "name_fr" => "M'Sila"
            ],
            [
                "id" => 29,
                "name_ar" => "معسكر",
                "name_en" => "Mascara",
                "name_fr" => "Mascara"
            ],
            [
                "id" => 30,
                "name_ar" => "ورقلة",
                "name_en" => "Ouargla",
                "name_fr" => "Ouargla"
            ],
            [
                "id" => 31,
                "name_ar" => "وهران",
                "name_en" => "Oran",
                "name_fr" => "Oran"
            ],
            [
                "id" => 32,
                "name_ar" => "البيض",
                "name_en" => "El Bayadh",
                "name_fr" => "El Bayadh"
            ],
            [
                "id" => 33,
                "name_ar" => "إليزي",
                "name_en" => "Illizi",
                "name_fr" => "Illizi"
            ],
            [
                "id" => 34,
                "name_ar" => "برج بوعريريج",
                "name_en" => "Bordj Bou Arreridj",
                "name_fr" => "Bordj Bou Arreridj"
            ],
            [
                "id" => 35,
                "name_ar" => "بومرداس",
                "name_en" => "Boumerdès",
                "name_fr" => "Boumerdès"
            ],
            [
                "id" => 36,
                "name_ar" => "الطارف",
                "name_en" => "El Tarf",
                "name_fr" => "El Tarf"
            ],
            [
                "id" => 37,
                "name_ar" => "تندوف",
                "name_en" => "Tindouf",
                "name_fr" => "Tindouf"
            ],
            [
                "id" => 38,
                "name_ar" => "تيسمسيلت",
                "name_en" => "Tissemsilt",
                "name_fr" => "Tissemsilt"
            ],
            [
                "id" => 39,
                "name_ar" => "الوادي",
                "name_en" => "El Oued",
                "name_fr" => "El Oued"
            ],
            [
                "id" => 40,
                "name_ar" => "خنشلة",
                "name_en" => "Khenchela",
                "name_fr" => "Khenchela"
            ],
            [
                "id" => 41,
                "name_ar" => "سوق أهراس",
                "name_en" => "Souk Ahras",
                "name_fr" => "Souk Ahras"
            ],
            [
                "id" => 42,
                "name_ar" => "تيبازة",
                "name_en" => "Tipaza",
                "name_fr" => "Tipaza"
            ],
            [
                "id" => 43,
                "name_ar" => "ميلة",
                "name_en" => "Mila",
                "name_fr" => "Mila"
            ],
            [
                "id" => 44,
                "name_ar" => "عين الدفلة",
                "name_en" => "Aïn Defla",
                "name_fr" => "Aïn Defla"
            ],
            [
                "id" => 45,
                "name_ar" => "النعامة",
                "name_en" => "Naâma",
                "name_fr" => "Naâma"
            ],
            [
                "id" => 46,
                "name_ar" => "عين تيموشنت",
                "name_en" => "Aïn Témouchent",
                "name_fr" => "Aïn Témouchent"
            ],
            [
                "id" => 47,
                "name_ar" => "غرداية",
                "name_en" => "Ghardaïa",
                "name_fr" => "Ghardaïa"
            ],
            [
                "id" => 48,
                "name_ar" => "غليزان",
                "name_en" => "Relizane",
                "name_fr" => "Relizane"
                ],
            [
                "id" => 49,
                "name_ar" => "تيميمون",
                "name_en" => "Timimoun",
                "name_fr" => "Timimoun"
            ],
            [
                "id" => 50,
                "name_ar" => "برج باجي مختار",
                "name_en" => "Bordj Badji Mokhtar",
                "name_fr" => "Bordj Badji Mokhtar"
            ],
            [
                "id" => 51,
                "name_ar" => "أولاد جلال",
                "name_en" => "Ouled Djellal",
                "name_fr" => "Ouled Djellal"
            ],
            [
                "id" => 52,
                "name_ar" => "بني عباس",
                "name_en" => "Béni Abbès",
                "name_fr" => "Béni Abbès"
            ],
            [
                "id" => 53,
                "name_ar" => "عين صالح",
                "name_en" => "In Salah",
                "name_fr" => "In Salah"
            ],
            [
                "id" => 54,
                "name_ar" => "عين قزام",
                "name_en" => "In Guezzam",
                "name_fr" => "In Guezzam"
            ],
            [
                "id" => 55,
                "name_ar" => "تقرت",
                "name_en" => "Touggourt",
                "name_fr" => "Touggourt"
            ],
            [
                "id" => 56,
                "name_ar" => "جانت",
                "name_en" => "Djanet",
                "name_fr" => "Djanet"
            ],
            [
                "id" => 57,
                "name_ar" => "المغير",
                "name_en" => "El Meghaier",
                "name_fr" => "El Meghaier"
            ],
            [
                "id" => 58,
                "name_ar" => "المنيعة",
                "name_en" => "El Menia",
                "name_fr" => "El Menia"
            ]
        ]);
    }
}
