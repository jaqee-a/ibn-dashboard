<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Static\Town::query()->delete();
        \App\Models\Static\Town::insert([
			[
				"id" => 22, 
				"city_id" => 1, 
				"name_en" => "Timekten", 
				"name_fr" => "Timekten", 
				"name_ar" => "تيمقتن" 
			], 
			[
				"id" => 6, 
				"city_id" => 1, 
				"name_en" => "Bouda", 
				"name_fr" => "Bouda", 
				"name_ar" => "بودة" 
			], 
			[
				"id" => 13, 
				"city_id" => 1, 
				"name_en" => "Ouled Ahmed Timmi", 
				"name_fr" => "Ouled Ahmed Timmi", 
				"name_ar" => "أولاد أحمد تيمي" 
			], 
			[
				"id" => 1, 
				"city_id" => 1, 
				"name_en" => "Adrar", 
				"name_fr" => "Adrar", 
				"name_ar" => "أدرار" 
			], 
			[
				"id" => 9, 
				"city_id" => 1, 
				"name_en" => "Fenoughil", 
				"name_fr" => "Fenoughil", 
				"name_ar" => "فنوغيل" 
			], 
			[
				"id" => 10, 
				"city_id" => 1, 
				"name_en" => "In Zghmir", 
				"name_fr" => "In Zghmir", 
				"name_ar" => "إن زغمير" 
			], 
			[
				"id" => 16, 
				"city_id" => 1, 
				"name_en" => "Reggane", 
				"name_fr" => "Reggane", 
				"name_ar" => "رقان" 
			], 
			[
				"id" => 17, 
				"city_id" => 1, 
				"name_en" => "Sali", 
				"name_fr" => "Sali", 
				"name_ar" => "سالي" 
			], 
			[
				"id" => 18, 
				"city_id" => 1, 
				"name_en" => "Sebaa", 
				"name_fr" => "Sebaa", 
				"name_ar" => "السبع" 
			], 
			[
				"id" => 27, 
				"city_id" => 1, 
				"name_en" => "Tsabit", 
				"name_fr" => "Tsabit", 
				"name_ar" => "تسابيت" 
			], 
			[
				"id" => 21, 
				"city_id" => 1, 
				"name_en" => "Tamest", 
				"name_fr" => "Tamest", 
				"name_ar" => "تامست" 
			], 
			[
				"id" => 20, 
				"city_id" => 1, 
				"name_en" => "Tamantit", 
				"name_fr" => "Tamantit", 
				"name_ar" => "تامنطيط" 
			], 
			[
				"id" => 26, 
				"city_id" => 1, 
				"name_en" => "Tit", 
				"name_fr" => "Tit", 
				"name_ar" => "تيت" 
			], 
			[
				"id" => 28, 
				"city_id" => 1, 
				"name_en" => "Zaouiet Kounta", 
				"name_fr" => "Zaouiet Kounta", 
				"name_ar" => "زاوية كنتة" 
			], 
			[
				"id" => 2, 
				"city_id" => 1, 
				"name_en" => "Akabli", 
				"name_fr" => "Akabli", 
				"name_ar" => "اقبلي" 
			], 
			[
				"id" => 4, 
				"city_id" => 1, 
				"name_en" => "Aoulef", 
				"name_fr" => "Aoulef", 
				"name_ar" => "أولف" 
			], 
			[
				"id" => 60, 
				"city_id" => 2, 
				"name_en" => "Talassa", 
				"name_fr" => "Talassa", 
				"name_ar" => "تلعصة" 
			], 
			[
				"id" => 63, 
				"city_id" => 2, 
				"name_en" => "Zeboudja", 
				"name_fr" => "Zeboudja", 
				"name_ar" => "الزبوجة" 
			], 
			[
				"id" => 41, 
				"city_id" => 2, 
				"name_en" => "El Hadjadj", 
				"name_fr" => "El Hadjadj", 
				"name_ar" => "الحجاج" 
			], 
			[
				"id" => 52, 
				"city_id" => 2, 
				"name_en" => "Ouled Ben Abdelkader", 
				"name_fr" => "Ouled Ben Abdelkader", 
				"name_ar" => "أولاد بن عبد القادر" 
			], 
			[
				"id" => 30, 
				"city_id" => 2, 
				"name_en" => "Ain Merane", 
				"name_fr" => "Ain Merane", 
				"name_ar" => "عين مران" 
			], 
			[
				"id" => 37, 
				"city_id" => 2, 
				"name_en" => "Breira", 
				"name_fr" => "Breira", 
				"name_ar" => "بريرة" 
			], 
			[
				"id" => 51, 
				"city_id" => 2, 
				"name_en" => "Ouled Abbes", 
				"name_fr" => "Ouled Abbes", 
				"name_ar" => "أولاد عباس" 
			], 
			[
				"id" => 48, 
				"city_id" => 2, 
				"name_en" => "Oued Fodda", 
				"name_fr" => "Oued Fodda", 
				"name_ar" => "وادي الفضة" 
			], 
			[
				"id" => 34, 
				"city_id" => 2, 
				"name_en" => "Beni Rached", 
				"name_fr" => "Beni Rached", 
				"name_ar" => "بني راشد" 
			], 
			[
				"id" => 45, 
				"city_id" => 2, 
				"name_en" => "Herenfa", 
				"name_fr" => "Herenfa", 
				"name_ar" => "الهرانفة" 
			], 
			[
				"id" => 59, 
				"city_id" => 2, 
				"name_en" => "Tadjena", 
				"name_fr" => "Tadjena", 
				"name_ar" => "تاجنة" 
			], 
			[
				"id" => 43, 
				"city_id" => 2, 
				"name_en" => "El Marsa", 
				"name_fr" => "El Marsa", 
				"name_ar" => "المرسى" 
			], 
			[
				"id" => 39, 
				"city_id" => 2, 
				"name_en" => "Chlef", 
				"name_fr" => "Chlef", 
				"name_ar" => "الشلف" 
			], 
			[
				"id" => 54, 
				"city_id" => 2, 
				"name_en" => "Oum Drou", 
				"name_fr" => "Oum Drou", 
				"name_ar" => "أم الدروع" 
			], 
			[
				"id" => 55, 
				"city_id" => 2, 
				"name_en" => "Sendjas", 
				"name_fr" => "Sendjas", 
				"name_ar" => "سنجاس" 
			], 
			[
				"id" => 56, 
				"city_id" => 2, 
				"name_en" => "Sidi Abderrahmane", 
				"name_fr" => "Sidi Abderrahmane", 
				"name_ar" => "سيدي عبد الرحمن" 
			], 
			[
				"id" => 57, 
				"city_id" => 2, 
				"name_en" => "Sidi Akkacha", 
				"name_fr" => "Sidi Akkacha", 
				"name_ar" => "سيدي عكاشة" 
			], 
			[
				"id" => 62, 
				"city_id" => 2, 
				"name_en" => "Tenes", 
				"name_fr" => "Tenes", 
				"name_ar" => "تنس" 
			], 
			[
				"id" => 32, 
				"city_id" => 2, 
				"name_en" => "Beni  Bouattab", 
				"name_fr" => "Beni  Bouattab", 
				"name_ar" => "بني بوعتاب" 
			], 
			[
				"id" => 42, 
				"city_id" => 2, 
				"name_en" => "El Karimia", 
				"name_fr" => "El Karimia", 
				"name_ar" => "الكريمية" 
			], 
			[
				"id" => 44, 
				"city_id" => 2, 
				"name_en" => "Harchoun", 
				"name_fr" => "Harchoun", 
				"name_ar" => "حرشون" 
			], 
			[
				"id" => 36, 
				"city_id" => 2, 
				"name_en" => "Bouzeghaia", 
				"name_fr" => "Bouzeghaia", 
				"name_ar" => "بوزغاية" 
			], 
			[
				"id" => 61, 
				"city_id" => 2, 
				"name_en" => "Taougrit", 
				"name_fr" => "Taougrit", 
				"name_ar" => "تاوقريت" 
			], 
			[
				"id" => 33, 
				"city_id" => 2, 
				"name_en" => "Beni Haoua", 
				"name_fr" => "Beni Haoua", 
				"name_ar" => "بني حواء" 
			], 
			[
				"id" => 29, 
				"city_id" => 2, 
				"name_en" => "Abou El Hassane", 
				"name_fr" => "Abou El Hassane", 
				"name_ar" => "أبو الحسن" 
			], 
			[
				"id" => 49, 
				"city_id" => 2, 
				"name_en" => "Oued Goussine", 
				"name_fr" => "Oued Goussine", 
				"name_ar" => "وادي قوسين" 
			], 
			[
				"id" => 38, 
				"city_id" => 2, 
				"name_en" => "Chettia", 
				"name_fr" => "Chettia", 
				"name_ar" => "الشطية" 
			], 
			[
				"id" => 47, 
				"city_id" => 2, 
				"name_en" => "Moussadek", 
				"name_fr" => "Moussadek", 
				"name_ar" => "مصدق" 
			], 
			[
				"id" => 53, 
				"city_id" => 2, 
				"name_en" => "Ouled Fares", 
				"name_fr" => "Ouled Fares", 
				"name_ar" => "أولاد فارس" 
			], 
			[
				"id" => 35, 
				"city_id" => 2, 
				"name_en" => "Boukadir", 
				"name_fr" => "Boukadir", 
				"name_ar" => "بوقادير" 
			], 
			[
				"id" => 50, 
				"city_id" => 2, 
				"name_en" => "Oued Sly", 
				"name_fr" => "Oued Sly", 
				"name_ar" => "وادي سلي" 
			], 
			[
				"id" => 58, 
				"city_id" => 2, 
				"name_en" => "Sobha", 
				"name_fr" => "Sobha", 
				"name_ar" => "الصبحة" 
			], 
			[
				"id" => 31, 
				"city_id" => 2, 
				"name_en" => "Benairia", 
				"name_fr" => "Benairia", 
				"name_ar" => "بنايرية" 
			], 
			[
				"id" => 46, 
				"city_id" => 2, 
				"name_en" => "Labiod Medjadja", 
				"name_fr" => "Labiod Medjadja", 
				"name_ar" => "الأبيض مجاجة" 
			], 
			[
				"id" => 40, 
				"city_id" => 2, 
				"name_en" => "Dahra", 
				"name_fr" => "Dahra", 
				"name_ar" => "الظهرة" 
			], 
			[
				"id" => 67, 
				"city_id" => 3, 
				"name_en" => "El Beidha", 
				"name_fr" => "El Beidha", 
				"name_ar" => "البيضاء" 
			], 
			[
				"id" => 73, 
				"city_id" => 3, 
				"name_en" => "Gueltat Sidi Saad", 
				"name_fr" => "Gueltat Sidi Saad", 
				"name_ar" => "قلتة سيدي سعد" 
			], 
			[
				"id" => 69, 
				"city_id" => 3, 
				"name_en" => "Brida", 
				"name_fr" => "Brida", 
				"name_ar" => "بريدة" 
			], 
			[
				"id" => 66, 
				"city_id" => 3, 
				"name_en" => "Ain Sidi Ali", 
				"name_fr" => "Ain Sidi Ali", 
				"name_ar" => "عين سيدي علي" 
			], 
			[
				"id" => 85, 
				"city_id" => 3, 
				"name_en" => "Tadjemout", 
				"name_fr" => "Tadjemout", 
				"name_ar" => "تاجموت" 
			], 
			[
				"id" => 74, 
				"city_id" => 3, 
				"name_en" => "Hadj Mechri", 
				"name_fr" => "Hadj Mechri", 
				"name_ar" => "الحاج مشري" 
			], 
			[
				"id" => 87, 
				"city_id" => 3, 
				"name_en" => "Taouiala", 
				"name_fr" => "Taouiala", 
				"name_ar" => "تاويالة" 
			], 
			[
				"id" => 71, 
				"city_id" => 3, 
				"name_en" => "El Ghicha", 
				"name_fr" => "El Ghicha", 
				"name_ar" => "الغيشة" 
			], 
			[
				"id" => 86, 
				"city_id" => 3, 
				"name_en" => "Tadjrouna", 
				"name_fr" => "Tadjrouna", 
				"name_ar" => "تاجرونة" 
			], 
			[
				"id" => 82, 
				"city_id" => 3, 
				"name_en" => "Sebgag", 
				"name_fr" => "Sebgag", 
				"name_ar" => "سبقاق" 
			], 
			[
				"id" => 83, 
				"city_id" => 3, 
				"name_en" => "Sidi Bouzid", 
				"name_fr" => "Sidi Bouzid", 
				"name_ar" => "سيدي بوزيد" 
			], 
			[
				"id" => 80, 
				"city_id" => 3, 
				"name_en" => "Oued Morra", 
				"name_fr" => "Oued Morra", 
				"name_ar" => "وادي مرة" 
			], 
			[
				"id" => 79, 
				"city_id" => 3, 
				"name_en" => "Laghouat", 
				"name_fr" => "Laghouat", 
				"name_ar" => "الأغواط" 
			], 
			[
				"id" => 81, 
				"city_id" => 3, 
				"name_en" => "Oued M'zi", 
				"name_fr" => "Oued M'zi", 
				"name_ar" => "وادي مزي" 
			], 
			[
				"id" => 78, 
				"city_id" => 3, 
				"name_en" => "Ksar El Hirane", 
				"name_fr" => "Ksar El Hirane", 
				"name_ar" => "قصر الحيران" 
			], 
			[
				"id" => 70, 
				"city_id" => 3, 
				"name_en" => "El Assafia", 
				"name_fr" => "El Assafia", 
				"name_ar" => "العسافية" 
			], 
			[
				"id" => 84, 
				"city_id" => 3, 
				"name_en" => "Sidi Makhlouf", 
				"name_fr" => "Sidi Makhlouf", 
				"name_ar" => "سيدي مخلوف" 
			], 
			[
				"id" => 75, 
				"city_id" => 3, 
				"name_en" => "Hassi Delaa", 
				"name_fr" => "Hassi Delaa", 
				"name_ar" => "حاسي الدلاعة" 
			], 
			[
				"id" => 76, 
				"city_id" => 3, 
				"name_en" => "Hassi R'mel", 
				"name_fr" => "Hassi R'mel", 
				"name_ar" => "حاسي الرمل" 
			], 
			[
				"id" => 65, 
				"city_id" => 3, 
				"name_en" => "Ain Madhi", 
				"name_fr" => "Ain Madhi", 
				"name_ar" => "عين ماضي" 
			], 
			[
				"id" => 72, 
				"city_id" => 3, 
				"name_en" => "El Haouaita", 
				"name_fr" => "El Haouaita", 
				"name_ar" => "الحويطة" 
			], 
			[
				"id" => 77, 
				"city_id" => 3, 
				"name_en" => "Kheneg", 
				"name_fr" => "Kheneg", 
				"name_ar" => "الخنق" 
			], 
			[
				"id" => 68, 
				"city_id" => 3, 
				"name_en" => "Benacer Benchohra", 
				"name_fr" => "Benacer Benchohra", 
				"name_ar" => "بن ناصر بن شهرة" 
			], 
			[
				"id" => 64, 
				"city_id" => 3, 
				"name_en" => "Aflou", 
				"name_fr" => "Aflou", 
				"name_ar" => "أفلو" 
			], 
			[
				"id" => 104, 
				"city_id" => 4, 
				"name_en" => "Fkirina", 
				"name_fr" => "Fkirina", 
				"name_ar" => "فكيرينة" 
			], 
			[
				"id" => 102, 
				"city_id" => 4, 
				"name_en" => "El Fedjoudj Boughrara Sa", 
				"name_fr" => "El Fedjoudj Boughrara Sa", 
				"name_ar" => "الفجوج بوغرارة سعودي" 
			], 
			[
				"id" => 91, 
				"city_id" => 4, 
				"name_en" => "Ain Fekroun", 
				"name_fr" => "Ain Fekroun", 
				"name_ar" => "عين فكرون" 
			], 
			[
				"id" => 113, 
				"city_id" => 4, 
				"name_en" => "Rahia", 
				"name_fr" => "Rahia", 
				"name_ar" => "الرحية" 
			], 
			[
				"id" => 107, 
				"city_id" => 4, 
				"name_en" => "Meskiana", 
				"name_fr" => "Meskiana", 
				"name_ar" => "مسكيانة" 
			], 
			[
				"id" => 100, 
				"city_id" => 4, 
				"name_en" => "El Belala", 
				"name_fr" => "El Belala", 
				"name_ar" => "البلالة" 
			], 
			[
				"id" => 95, 
				"city_id" => 4, 
				"name_en" => "Behir Chergui", 
				"name_fr" => "Behir Chergui", 
				"name_ar" => "بحير الشرقي" 
			], 
			[
				"id" => 106, 
				"city_id" => 4, 
				"name_en" => "Ksar Sbahi", 
				"name_fr" => "Ksar Sbahi", 
				"name_ar" => "قصر الصباحي" 
			], 
			[
				"id" => 115, 
				"city_id" => 4, 
				"name_en" => "Souk Naamane", 
				"name_fr" => "Souk Naamane", 
				"name_ar" => "سوق نعمان" 
			], 
			[
				"id" => 111, 
				"city_id" => 4, 
				"name_en" => "Ouled Zouai", 
				"name_fr" => "Ouled Zouai", 
				"name_ar" => "أولاد زواي" 
			], 
			[
				"id" => 112, 
				"city_id" => 4, 
				"name_en" => "Oum El Bouaghi", 
				"name_fr" => "Oum El Bouaghi", 
				"name_ar" => "أم البواقي" 
			], 
			[
				"id" => 88, 
				"city_id" => 4, 
				"name_en" => "Ain Babouche", 
				"name_fr" => "Ain Babouche", 
				"name_ar" => "عين ببوش" 
			], 
			[
				"id" => 94, 
				"city_id" => 4, 
				"name_en" => "Ain Zitoun", 
				"name_fr" => "Ain Zitoun", 
				"name_ar" => "عين الزيتون" 
			], 
			[
				"id" => 97, 
				"city_id" => 4, 
				"name_en" => "Bir Chouhada", 
				"name_fr" => "Bir Chouhada", 
				"name_ar" => "بئر الشهداء" 
			], 
			[
				"id" => 89, 
				"city_id" => 4, 
				"name_en" => "Ain Beida", 
				"name_fr" => "Ain Beida", 
				"name_ar" => "عين البيضاء" 
			], 
			[
				"id" => 96, 
				"city_id" => 4, 
				"name_en" => "Berriche", 
				"name_fr" => "Berriche", 
				"name_ar" => "بريش" 
			], 
			[
				"id" => 116, 
				"city_id" => 4, 
				"name_en" => "Zorg", 
				"name_fr" => "Zorg", 
				"name_ar" => "الزرق" 
			], 
			[
				"id" => 93, 
				"city_id" => 4, 
				"name_en" => "Ain M'lila", 
				"name_fr" => "Ain M'lila", 
				"name_ar" => "عين مليلة" 
			], 
			[
				"id" => 109, 
				"city_id" => 4, 
				"name_en" => "Ouled Gacem", 
				"name_fr" => "Ouled Gacem", 
				"name_ar" => "أولاد قاسم" 
			], 
			[
				"id" => 110, 
				"city_id" => 4, 
				"name_en" => "Ouled Hamla", 
				"name_fr" => "Ouled Hamla", 
				"name_ar" => "أولاد حملة" 
			], 
			[
				"id" => 99, 
				"city_id" => 4, 
				"name_en" => "El Amiria", 
				"name_fr" => "El Amiria", 
				"name_ar" => "العامرية" 
			], 
			[
				"id" => 114, 
				"city_id" => 4, 
				"name_en" => "Sigus", 
				"name_fr" => "Sigus", 
				"name_ar" => "سيقوس" 
			], 
			[
				"id" => 108, 
				"city_id" => 4, 
				"name_en" => "Oued Nini", 
				"name_fr" => "Oued Nini", 
				"name_ar" => "وادي نيني" 
			], 
			[
				"id" => 90, 
				"city_id" => 4, 
				"name_en" => "Ain Diss", 
				"name_fr" => "Ain Diss", 
				"name_ar" => "عين الديس" 
			], 
			[
				"id" => 98, 
				"city_id" => 4, 
				"name_en" => "Dhalaa", 
				"name_fr" => "Dhalaa", 
				"name_ar" => "الضلعة" 
			], 
			[
				"id" => 101, 
				"city_id" => 4, 
				"name_en" => "El Djazia", 
				"name_fr" => "El Djazia", 
				"name_ar" => "الجازية" 
			], 
			[
				"id" => 92, 
				"city_id" => 4, 
				"name_en" => "Ain Kercha", 
				"name_fr" => "Ain Kercha", 
				"name_ar" => "عين كرشة" 
			], 
			[
				"id" => 103, 
				"city_id" => 4, 
				"name_en" => "El Harmilia", 
				"name_fr" => "El Harmilia", 
				"name_ar" => "الحرملية" 
			], 
			[
				"id" => 105, 
				"city_id" => 4, 
				"name_en" => "Hanchir Toumghani", 
				"name_fr" => "Hanchir Toumghani", 
				"name_ar" => "هنشير تومغني" 
			], 
			[
				"id" => 150, 
				"city_id" => 5, 
				"name_en" => "Maafa", 
				"name_fr" => "Maafa", 
				"name_ar" => "معافة" 
			], 
			[
				"id" => 139, 
				"city_id" => 5, 
				"name_en" => "Gosbat", 
				"name_fr" => "Gosbat", 
				"name_ar" => "القصبات" 
			], 
			[
				"id" => 176, 
				"city_id" => 5, 
				"name_en" => "Timgad", 
				"name_fr" => "Timgad", 
				"name_ar" => "تيمقاد" 
			], 
			[
				"id" => 170, 
				"city_id" => 5, 
				"name_en" => "Taxlent", 
				"name_fr" => "Taxlent", 
				"name_ar" => "تاكسلانت" 
			], 
			[
				"id" => 161, 
				"city_id" => 5, 
				"name_en" => "Ouled Si Slimane", 
				"name_fr" => "Ouled Si Slimane", 
				"name_ar" => "أولاد سي سليمان" 
			], 
			[
				"id" => 148, 
				"city_id" => 5, 
				"name_en" => "Lemcene", 
				"name_fr" => "Lemcene", 
				"name_ar" => "لمسان" 
			], 
			[
				"id" => 169, 
				"city_id" => 5, 
				"name_en" => "Talkhamt", 
				"name_fr" => "Talkhamt", 
				"name_ar" => "تالخمت" 
			], 
			[
				"id" => 164, 
				"city_id" => 5, 
				"name_en" => "Ras El Aioun", 
				"name_fr" => "Ras El Aioun", 
				"name_ar" => "رأس العيون" 
			], 
			[
				"id" => 163, 
				"city_id" => 5, 
				"name_en" => "Rahbat", 
				"name_fr" => "Rahbat", 
				"name_ar" => "الرحبات" 
			], 
			[
				"id" => 160, 
				"city_id" => 5, 
				"name_en" => "Ouled Sellem", 
				"name_fr" => "Ouled Sellem", 
				"name_ar" => "أولاد سلام" 
			], 
			[
				"id" => 140, 
				"city_id" => 5, 
				"name_en" => "Guigba", 
				"name_fr" => "Guigba", 
				"name_ar" => "القيقبة" 
			], 
			[
				"id" => 172, 
				"city_id" => 5, 
				"name_en" => "Teniet El Abed", 
				"name_fr" => "Teniet El Abed", 
				"name_ar" => "ثنية العابد" 
			], 
			[
				"id" => 123, 
				"city_id" => 5, 
				"name_en" => "Batna", 
				"name_fr" => "Batna", 
				"name_ar" => "باتنة" 
			], 
			[
				"id" => 136, 
				"city_id" => 5, 
				"name_en" => "Fesdis", 
				"name_fr" => "Fesdis", 
				"name_ar" => "فسديس" 
			], 
			[
				"id" => 154, 
				"city_id" => 5, 
				"name_en" => "Oued Chaaba", 
				"name_fr" => "Oued Chaaba", 
				"name_ar" => "وادي الشعبة" 
			], 
			[
				"id" => 141, 
				"city_id" => 5, 
				"name_en" => "Hidoussa", 
				"name_fr" => "Hidoussa", 
				"name_ar" => "حيدوسة" 
			], 
			[
				"id" => 145, 
				"city_id" => 5, 
				"name_en" => "Ksar Bellezma", 
				"name_fr" => "Ksar Bellezma", 
				"name_ar" => "قصر بلزمة" 
			], 
			[
				"id" => 152, 
				"city_id" => 5, 
				"name_en" => "Merouana", 
				"name_fr" => "Merouana", 
				"name_ar" => "مروانة" 
			], 
			[
				"id" => 155, 
				"city_id" => 5, 
				"name_en" => "Oued El Ma", 
				"name_fr" => "Oued El Ma", 
				"name_ar" => "وادي الماء" 
			], 
			[
				"id" => 147, 
				"city_id" => 5, 
				"name_en" => "Lazrou", 
				"name_fr" => "Lazrou", 
				"name_ar" => "لازرو" 
			], 
			[
				"id" => 167, 
				"city_id" => 5, 
				"name_en" => "Seriana", 
				"name_fr" => "Seriana", 
				"name_ar" => "سريانة" 
			], 
			[
				"id" => 177, 
				"city_id" => 5, 
				"name_en" => "Zanet El Beida", 
				"name_fr" => "Zanet El Beida", 
				"name_ar" => "زانة البيضاء" 
			], 
			[
				"id" => 151, 
				"city_id" => 5, 
				"name_en" => "Menaa", 
				"name_fr" => "Menaa", 
				"name_ar" => "منعة" 
			], 
			[
				"id" => 174, 
				"city_id" => 5, 
				"name_en" => "Tigharghar", 
				"name_fr" => "Tigharghar", 
				"name_ar" => "تغرغار" 
			], 
			[
				"id" => 119, 
				"city_id" => 5, 
				"name_en" => "Ain Yagout", 
				"name_fr" => "Ain Yagout", 
				"name_ar" => "عين ياقوت" 
			], 
			[
				"id" => 128, 
				"city_id" => 5, 
				"name_en" => "Boumia", 
				"name_fr" => "Boumia", 
				"name_ar" => "بومية" 
			], 
			[
				"id" => 132, 
				"city_id" => 5, 
				"name_en" => "Djerma", 
				"name_fr" => "Djerma", 
				"name_ar" => "جرمة" 
			], 
			[
				"id" => 135, 
				"city_id" => 5, 
				"name_en" => "El Madher", 
				"name_fr" => "El Madher", 
				"name_ar" => "المعذر" 
			], 
			[
				"id" => 162, 
				"city_id" => 5, 
				"name_en" => "Ouyoun El Assafir", 
				"name_fr" => "Ouyoun El Assafir", 
				"name_ar" => "عيون العصافير" 
			], 
			[
				"id" => 171, 
				"city_id" => 5, 
				"name_en" => "Tazoult", 
				"name_fr" => "Tazoult", 
				"name_ar" => "تازولت" 
			], 
			[
				"id" => 127, 
				"city_id" => 5, 
				"name_en" => "Boumagueur", 
				"name_fr" => "Boumagueur", 
				"name_ar" => "بومقر" 
			], 
			[
				"id" => 153, 
				"city_id" => 5, 
				"name_en" => "N Gaous", 
				"name_fr" => "N Gaous", 
				"name_ar" => "نقاوس" 
			], 
			[
				"id" => 165, 
				"city_id" => 5, 
				"name_en" => "Sefiane", 
				"name_fr" => "Sefiane", 
				"name_ar" => "سفيان" 
			], 
			[
				"id" => 120, 
				"city_id" => 5, 
				"name_en" => "Arris", 
				"name_fr" => "Arris", 
				"name_ar" => "أريس" 
			], 
			[
				"id" => 173, 
				"city_id" => 5, 
				"name_en" => "Tighanimine", 
				"name_fr" => "Tighanimine", 
				"name_ar" => "تيغانمين" 
			], 
			[
				"id" => 117, 
				"city_id" => 5, 
				"name_en" => "Ain Djasser", 
				"name_fr" => "Ain Djasser", 
				"name_ar" => "عين جاسر" 
			], 
			[
				"id" => 134, 
				"city_id" => 5, 
				"name_en" => "El Hassi", 
				"name_fr" => "El Hassi", 
				"name_ar" => "الحاسي" 
			], 
			[
				"id" => 166, 
				"city_id" => 5, 
				"name_en" => "Seggana", 
				"name_fr" => "Seggana", 
				"name_ar" => "سقانة" 
			], 
			[
				"id" => 175, 
				"city_id" => 5, 
				"name_en" => "Tilatou", 
				"name_fr" => "Tilatou", 
				"name_ar" => "تيلاطو" 
			], 
			[
				"id" => 137, 
				"city_id" => 5, 
				"name_en" => "Foum Toub", 
				"name_fr" => "Foum Toub", 
				"name_ar" => "فم الطوب" 
			], 
			[
				"id" => 142, 
				"city_id" => 5, 
				"name_en" => "Ichemoul", 
				"name_fr" => "Ichemoul", 
				"name_ar" => "إشمول" 
			], 
			[
				"id" => 143, 
				"city_id" => 5, 
				"name_en" => "Inoughissen", 
				"name_fr" => "Inoughissen", 
				"name_ar" => "إينوغيسن" 
			], 
			[
				"id" => 129, 
				"city_id" => 5, 
				"name_en" => "Bouzina", 
				"name_fr" => "Bouzina", 
				"name_ar" => "بوزينة" 
			], 
			[
				"id" => 146, 
				"city_id" => 5, 
				"name_en" => "Larbaa", 
				"name_fr" => "Larbaa", 
				"name_ar" => "لارباع" 
			], 
			[
				"id" => 126, 
				"city_id" => 5, 
				"name_en" => "Boulhilat", 
				"name_fr" => "Boulhilat", 
				"name_ar" => "بولهيلات" 
			], 
			[
				"id" => 130, 
				"city_id" => 5, 
				"name_en" => "Chemora", 
				"name_fr" => "Chemora", 
				"name_ar" => "الشمرة" 
			], 
			[
				"id" => 122, 
				"city_id" => 5, 
				"name_en" => "Barika", 
				"name_fr" => "Barika", 
				"name_ar" => "بريكة" 
			], 
			[
				"id" => 125, 
				"city_id" => 5, 
				"name_en" => "Bitam", 
				"name_fr" => "Bitam", 
				"name_ar" => "بيطام" 
			], 
			[
				"id" => 149, 
				"city_id" => 5, 
				"name_en" => "M Doukal", 
				"name_fr" => "M Doukal", 
				"name_ar" => "إمدوكل" 
			], 
			[
				"id" => 121, 
				"city_id" => 5, 
				"name_en" => "Azil Abedelkader", 
				"name_fr" => "Azil Abedelkader", 
				"name_ar" => "عزيل عبد القادر" 
			], 
			[
				"id" => 133, 
				"city_id" => 5, 
				"name_en" => "Djezzar", 
				"name_fr" => "Djezzar", 
				"name_ar" => "الجزار" 
			], 
			[
				"id" => 157, 
				"city_id" => 5, 
				"name_en" => "Ouled Ammar", 
				"name_fr" => "Ouled Ammar", 
				"name_ar" => "أولاد عمار" 
			], 
			[
				"id" => 138, 
				"city_id" => 5, 
				"name_en" => "Ghassira", 
				"name_fr" => "Ghassira", 
				"name_ar" => "غسيرة" 
			], 
			[
				"id" => 144, 
				"city_id" => 5, 
				"name_en" => "Kimmel", 
				"name_fr" => "Kimmel", 
				"name_ar" => "كيمل" 
			], 
			[
				"id" => 168, 
				"city_id" => 5, 
				"name_en" => "T Kout", 
				"name_fr" => "T Kout", 
				"name_ar" => "تكوت" 
			], 
			[
				"id" => 118, 
				"city_id" => 5, 
				"name_en" => "Ain Touta", 
				"name_fr" => "Ain Touta", 
				"name_ar" => "عين التوتة" 
			], 
			[
				"id" => 124, 
				"city_id" => 5, 
				"name_en" => "Beni Foudhala El Hakania", 
				"name_fr" => "Beni Foudhala El Hakania", 
				"name_ar" => "بني فضالة الحقانية" 
			], 
			[
				"id" => 159, 
				"city_id" => 5, 
				"name_en" => "Ouled Fadel", 
				"name_fr" => "Ouled Fadel", 
				"name_ar" => "أولاد فاضل" 
			], 
			[
				"id" => 158, 
				"city_id" => 5, 
				"name_en" => "Ouled Aouf", 
				"name_fr" => "Ouled Aouf", 
				"name_ar" => "أولاد عوف" 
			], 
			[
				"id" => 131, 
				"city_id" => 5, 
				"name_en" => "Chir", 
				"name_fr" => "Chir", 
				"name_ar" => "شير" 
			], 
			[
				"id" => 156, 
				"city_id" => 5, 
				"name_en" => "Oued Taga", 
				"name_fr" => "Oued Taga", 
				"name_ar" => "وادي الطاقة" 
			], 
			[
				"id" => 212, 
				"city_id" => 6, 
				"name_en" => "Sidi Ayad", 
				"name_fr" => "Sidi Ayad", 
				"name_ar" => "سيدي عياد" 
			], 
			[
				"id" => 186, 
				"city_id" => 6, 
				"name_en" => "Barbacha", 
				"name_fr" => "Barbacha", 
				"name_ar" => "برباشة" 
			], 
			[
				"id" => 199, 
				"city_id" => 6, 
				"name_en" => "Leflaye", 
				"name_fr" => "Leflaye", 
				"name_ar" => "الفلاي" 
			], 
			[
				"id" => 206, 
				"city_id" => 6, 
				"name_en" => "Kendira", 
				"name_fr" => "Kendira", 
				"name_ar" => "كنديرة" 
			], 
			[
				"id" => 213, 
				"city_id" => 6, 
				"name_en" => "Sidi-Aich", 
				"name_fr" => "Sidi-Aich", 
				"name_ar" => "سيدي عيش" 
			], 
			[
				"id" => 225, 
				"city_id" => 6, 
				"name_en" => "Tifra", 
				"name_fr" => "Tifra", 
				"name_ar" => "تيفرة" 
			], 
			[
				"id" => 227, 
				"city_id" => 6, 
				"name_en" => "Tinebdar", 
				"name_fr" => "Tinebdar", 
				"name_ar" => "تينبدار" 
			], 
			[
				"id" => 200, 
				"city_id" => 6, 
				"name_en" => "El Kseur", 
				"name_fr" => "El Kseur", 
				"name_ar" => "القصر" 
			], 
			[
				"id" => 201, 
				"city_id" => 6, 
				"name_en" => "Fenaia Il Maten", 
				"name_fr" => "Fenaia Il Maten", 
				"name_ar" => "فناية الماثن" 
			], 
			[
				"id" => 229, 
				"city_id" => 6, 
				"name_en" => "Toudja", 
				"name_fr" => "Toudja", 
				"name_ar" => "توجة" 
			], 
			[
				"id" => 198, 
				"city_id" => 6, 
				"name_en" => "Dra El Caid", 
				"name_fr" => "Dra El Caid", 
				"name_ar" => "ذراع القايد" 
			], 
			[
				"id" => 207, 
				"city_id" => 6, 
				"name_en" => "Kherrata", 
				"name_fr" => "Kherrata", 
				"name_ar" => "خراطة" 
			], 
			[
				"id" => 187, 
				"city_id" => 6, 
				"name_en" => "Bejaia", 
				"name_fr" => "Bejaia", 
				"name_ar" => "بجاية" 
			], 
			[
				"id" => 210, 
				"city_id" => 6, 
				"name_en" => "Oued Ghir", 
				"name_fr" => "Oued Ghir", 
				"name_ar" => "وادي غير" 
			], 
			[
				"id" => 191, 
				"city_id" => 6, 
				"name_en" => "Benimaouche", 
				"name_fr" => "Benimaouche", 
				"name_ar" => "بني معوش" 
			], 
			[
				"id" => 188, 
				"city_id" => 6, 
				"name_en" => "Beni Djellil", 
				"name_fr" => "Beni Djellil", 
				"name_ar" => "بني جليل" 
			], 
			[
				"id" => 202, 
				"city_id" => 6, 
				"name_en" => "Feraoun", 
				"name_fr" => "Feraoun", 
				"name_ar" => "فرعون" 
			], 
			[
				"id" => 214, 
				"city_id" => 6, 
				"name_en" => "Smaoun", 
				"name_fr" => "Smaoun", 
				"name_ar" => "سمعون" 
			], 
			[
				"id" => 226, 
				"city_id" => 6, 
				"name_en" => "Timezrit", 
				"name_fr" => "Timezrit", 
				"name_ar" => "تيمزريت" 
			], 
			[
				"id" => 209, 
				"city_id" => 6, 
				"name_en" => "Melbou", 
				"name_fr" => "Melbou", 
				"name_ar" => "مالبو" 
			], 
			[
				"id" => 215, 
				"city_id" => 6, 
				"name_en" => "Souk El Tenine", 
				"name_fr" => "Souk El Tenine", 
				"name_ar" => "سوق لإثنين" 
			], 
			[
				"id" => 219, 
				"city_id" => 6, 
				"name_en" => "Tamridjet", 
				"name_fr" => "Tamridjet", 
				"name_ar" => "تامريجت" 
			], 
			[
				"id" => 194, 
				"city_id" => 6, 
				"name_en" => "Boukhelifa", 
				"name_fr" => "Boukhelifa", 
				"name_ar" => "بوخليفة" 
			], 
			[
				"id" => 217, 
				"city_id" => 6, 
				"name_en" => "Tala Hamza", 
				"name_fr" => "Tala Hamza", 
				"name_ar" => "تالة حمزة" 
			], 
			[
				"id" => 224, 
				"city_id" => 6, 
				"name_en" => "Tichy", 
				"name_fr" => "Tichy", 
				"name_ar" => "تيشي" 
			], 
			[
				"id" => 179, 
				"city_id" => 6, 
				"name_en" => "Ait R'zine", 
				"name_fr" => "Ait R'zine", 
				"name_ar" => "أيت رزين" 
			], 
			[
				"id" => 204, 
				"city_id" => 6, 
				"name_en" => "Ighil-Ali", 
				"name_fr" => "Ighil-Ali", 
				"name_ar" => "إغيل علي" 
			], 
			[
				"id" => 180, 
				"city_id" => 6, 
				"name_en" => "Ait-Smail", 
				"name_fr" => "Ait-Smail", 
				"name_ar" => "أيت إسماعيل" 
			], 
			[
				"id" => 197, 
				"city_id" => 6, 
				"name_en" => "Darguina", 
				"name_fr" => "Darguina", 
				"name_ar" => "درقينة" 
			], 
			[
				"id" => 221, 
				"city_id" => 6, 
				"name_en" => "Taskriout", 
				"name_fr" => "Taskriout", 
				"name_ar" => "تاسكريوت" 
			], 
			[
				"id" => 185, 
				"city_id" => 6, 
				"name_en" => "Aokas", 
				"name_fr" => "Aokas", 
				"name_ar" => "أوقاس" 
			], 
			[
				"id" => 228, 
				"city_id" => 6, 
				"name_en" => "Tizi-N'berber", 
				"name_fr" => "Tizi-N'berber", 
				"name_ar" => "تيزي نبربر" 
			], 
			[
				"id" => 178, 
				"city_id" => 6, 
				"name_en" => "Adekar", 
				"name_fr" => "Adekar", 
				"name_ar" => "أدكار" 
			], 
			[
				"id" => 189, 
				"city_id" => 6, 
				"name_en" => "Beni K'sila", 
				"name_fr" => "Beni K'sila", 
				"name_ar" => "بني كسيلة" 
			], 
			[
				"id" => 220, 
				"city_id" => 6, 
				"name_en" => "Taourit Ighil", 
				"name_fr" => "Taourit Ighil", 
				"name_ar" => "تاوريرت إغيل" 
			], 
			[
				"id" => 181, 
				"city_id" => 6, 
				"name_en" => "Akbou", 
				"name_fr" => "Akbou", 
				"name_ar" => "أقبو" 
			], 
			[
				"id" => 195, 
				"city_id" => 6, 
				"name_en" => "Chellata", 
				"name_fr" => "Chellata", 
				"name_ar" => "شلاطة" 
			], 
			[
				"id" => 205, 
				"city_id" => 6, 
				"name_en" => "Ighram", 
				"name_fr" => "Ighram", 
				"name_ar" => "اغرم" 
			], 
			[
				"id" => 218, 
				"city_id" => 6, 
				"name_en" => "Tamokra", 
				"name_fr" => "Tamokra", 
				"name_ar" => "تامقرة" 
			], 
			[
				"id" => 183, 
				"city_id" => 6, 
				"name_en" => "Amalou", 
				"name_fr" => "Amalou", 
				"name_ar" => "أمالو" 
			], 
			[
				"id" => 193, 
				"city_id" => 6, 
				"name_en" => "Bouhamza", 
				"name_fr" => "Bouhamza", 
				"name_ar" => "بوحمزة" 
			], 
			[
				"id" => 208, 
				"city_id" => 6, 
				"name_en" => "M'cisna", 
				"name_fr" => "M'cisna", 
				"name_ar" => "مسيسنة" 
			], 
			[
				"id" => 211, 
				"city_id" => 6, 
				"name_en" => "Seddouk", 
				"name_fr" => "Seddouk", 
				"name_ar" => "صدوق" 
			], 
			[
				"id" => 190, 
				"city_id" => 6, 
				"name_en" => "Beni-Mallikeche", 
				"name_fr" => "Beni-Mallikeche", 
				"name_ar" => "بني مليكش" 
			], 
			[
				"id" => 192, 
				"city_id" => 6, 
				"name_en" => "Boudjellil", 
				"name_fr" => "Boudjellil", 
				"name_ar" => "بو جليل" 
			], 
			[
				"id" => 222, 
				"city_id" => 6, 
				"name_en" => "Tazmalt", 
				"name_fr" => "Tazmalt", 
				"name_ar" => "تازمالت" 
			], 
			[
				"id" => 182, 
				"city_id" => 6, 
				"name_en" => "Akfadou", 
				"name_fr" => "Akfadou", 
				"name_ar" => "أكفادو" 
			], 
			[
				"id" => 196, 
				"city_id" => 6, 
				"name_en" => "Chemini", 
				"name_fr" => "Chemini", 
				"name_ar" => "شميني" 
			], 
			[
				"id" => 216, 
				"city_id" => 6, 
				"name_en" => "Souk Oufella", 
				"name_fr" => "Souk Oufella", 
				"name_ar" => "سوق اوفلا" 
			], 
			[
				"id" => 223, 
				"city_id" => 6, 
				"name_en" => "Tibane", 
				"name_fr" => "Tibane", 
				"name_ar" => "طيبان" 
			], 
			[
				"id" => 203, 
				"city_id" => 6, 
				"name_en" => "Ouzellaguen", 
				"name_fr" => "Ouzellaguen", 
				"name_ar" => "أوزلاقن" 
			], 
			[
				"id" => 184, 
				"city_id" => 6, 
				"name_en" => "Amizour", 
				"name_fr" => "Amizour", 
				"name_ar" => "أميزور" 
			], 
			[
				"id" => 241, 
				"city_id" => 7, 
				"name_en" => "El Feidh", 
				"name_fr" => "El Feidh", 
				"name_ar" => "الفيض" 
			], 
			[
				"id" => 249, 
				"city_id" => 7, 
				"name_en" => "Lichana", 
				"name_fr" => "Lichana", 
				"name_ar" => "ليشانة" 
			], 
			[
				"id" => 235, 
				"city_id" => 7, 
				"name_en" => "Bouchakroun", 
				"name_fr" => "Bouchakroun", 
				"name_ar" => "بوشقرون" 
			], 
			[
				"id" => 252, 
				"city_id" => 7, 
				"name_en" => "Mekhadma", 
				"name_fr" => "Mekhadma", 
				"name_ar" => "مخادمة" 
			], 
			[
				"id" => 239, 
				"city_id" => 7, 
				"name_en" => "Djemorah", 
				"name_fr" => "Djemorah", 
				"name_ar" => "جمورة" 
			], 
			[
				"id" => 236, 
				"city_id" => 7, 
				"name_en" => "Branis", 
				"name_fr" => "Branis", 
				"name_ar" => "برانيس" 
			], 
			[
				"id" => 246, 
				"city_id" => 7, 
				"name_en" => "El Outaya", 
				"name_fr" => "El Outaya", 
				"name_ar" => "الوطاية" 
			], 
			[
				"id" => 245, 
				"city_id" => 7, 
				"name_en" => "El Kantara", 
				"name_fr" => "El Kantara", 
				"name_ar" => "القنطرة" 
			], 
			[
				"id" => 248, 
				"city_id" => 7, 
				"name_en" => "Khenguet Sidi Nadji", 
				"name_fr" => "Khenguet Sidi Nadji", 
				"name_ar" => "خنقة سيدي ناجي" 
			], 
			[
				"id" => 231, 
				"city_id" => 7, 
				"name_en" => "Ain Zaatout", 
				"name_fr" => "Ain Zaatout", 
				"name_ar" => "عين زعطوط" 
			], 
			[
				"id" => 262, 
				"city_id" => 7, 
				"name_en" => "Zeribet El Oued", 
				"name_fr" => "Zeribet El Oued", 
				"name_ar" => "زريبة الوادي" 
			], 
			[
				"id" => 253, 
				"city_id" => 7, 
				"name_en" => "Meziraa", 
				"name_fr" => "Meziraa", 
				"name_ar" => "المزيرعة" 
			], 
			[
				"id" => 233, 
				"city_id" => 7, 
				"name_en" => "Biskra", 
				"name_fr" => "Biskra", 
				"name_ar" => "بسكرة" 
			], 
			[
				"id" => 243, 
				"city_id" => 7, 
				"name_en" => "El Hadjab", 
				"name_fr" => "El Hadjab", 
				"name_ar" => "الحاجب" 
			], 
			[
				"id" => 254, 
				"city_id" => 7, 
				"name_en" => "M'lili", 
				"name_fr" => "M'lili", 
				"name_ar" => "مليلي" 
			], 
			[
				"id" => 247, 
				"city_id" => 7, 
				"name_en" => "Foughala", 
				"name_fr" => "Foughala", 
				"name_ar" => "فوغالة" 
			], 
			[
				"id" => 242, 
				"city_id" => 7, 
				"name_en" => "El Ghrous", 
				"name_fr" => "El Ghrous", 
				"name_ar" => "الغروس" 
			], 
			[
				"id" => 234, 
				"city_id" => 7, 
				"name_en" => "Bordj Ben Azzouz", 
				"name_fr" => "Bordj Ben Azzouz", 
				"name_ar" => "برج بن عزوز" 
			], 
			[
				"id" => 257, 
				"city_id" => 7, 
				"name_en" => "Ourlal", 
				"name_fr" => "Ourlal", 
				"name_ar" => "أورلال" 
			], 
			[
				"id" => 256, 
				"city_id" => 7, 
				"name_en" => "Oumache", 
				"name_fr" => "Oumache", 
				"name_ar" => "أوماش" 
			], 
			[
				"id" => 230, 
				"city_id" => 7, 
				"name_en" => "Ain Naga", 
				"name_fr" => "Ain Naga", 
				"name_ar" => "عين الناقة" 
			], 
			[
				"id" => 238, 
				"city_id" => 7, 
				"name_en" => "Chetma", 
				"name_fr" => "Chetma", 
				"name_ar" => "شتمة" 
			], 
			[
				"id" => 244, 
				"city_id" => 7, 
				"name_en" => "El Haouch", 
				"name_fr" => "El Haouch", 
				"name_ar" => "الحوش" 
			], 
			[
				"id" => 260, 
				"city_id" => 7, 
				"name_en" => "Sidi Okba", 
				"name_fr" => "Sidi Okba", 
				"name_ar" => "سيدي عقبة" 
			], 
			[
				"id" => 251, 
				"city_id" => 7, 
				"name_en" => "M'chouneche", 
				"name_fr" => "M'chouneche", 
				"name_ar" => "مشونش" 
			], 
			[
				"id" => 250, 
				"city_id" => 7, 
				"name_en" => "Lioua", 
				"name_fr" => "Lioua", 
				"name_ar" => "ليوة" 
			], 
			[
				"id" => 261, 
				"city_id" => 7, 
				"name_en" => "Tolga", 
				"name_fr" => "Tolga", 
				"name_ar" => "طولقة" 
			], 
			[
				"id" => 264, 
				"city_id" => 8, 
				"name_en" => "Bechar", 
				"name_fr" => "Bechar", 
				"name_ar" => "بشار" 
			], 
			[
				"id" => 268, 
				"city_id" => 8, 
				"name_en" => "Boukais", 
				"name_fr" => "Boukais", 
				"name_ar" => "بوكايس" 
			], 
			[
				"id" => 275, 
				"city_id" => 8, 
				"name_en" => "Lahmar", 
				"name_fr" => "Lahmar", 
				"name_ar" => "لحمر" 
			], 
			[
				"id" => 278, 
				"city_id" => 8, 
				"name_en" => "Mogheul", 
				"name_fr" => "Mogheul", 
				"name_ar" => "موغل" 
			], 
			[
				"id" => 277, 
				"city_id" => 8, 
				"name_en" => "Meridja", 
				"name_fr" => "Meridja", 
				"name_ar" => "المريجة" 
			], 
			[
				"id" => 281, 
				"city_id" => 8, 
				"name_en" => "Taghit", 
				"name_fr" => "Taghit", 
				"name_ar" => "تاغيت" 
			], 
			[
				"id" => 263, 
				"city_id" => 8, 
				"name_en" => "Abadla", 
				"name_fr" => "Abadla", 
				"name_ar" => "العبادلة" 
			], 
			[
				"id" => 270, 
				"city_id" => 8, 
				"name_en" => "Erg-Ferradj", 
				"name_fr" => "Erg-Ferradj", 
				"name_ar" => "عرق فراج" 
			], 
			[
				"id" => 276, 
				"city_id" => 8, 
				"name_en" => "Machraa-Houari-Boumediene", 
				"name_fr" => "Machraa-Houari-Boumediene", 
				"name_ar" => "مشرع هواري بومدين" 
			], 
			[
				"id" => 267, 
				"city_id" => 8, 
				"name_en" => "Beni-Ounif", 
				"name_fr" => "Beni-Ounif", 
				"name_ar" => "بني ونيف" 
			], 
			[
				"id" => 280, 
				"city_id" => 8, 
				"name_en" => "Tabelbala", 
				"name_fr" => "Tabelbala", 
				"name_ar" => "تبلبالة" 
			], 
			[
				"id" => 272, 
				"city_id" => 8, 
				"name_en" => "Kenadsa", 
				"name_fr" => "Kenadsa", 
				"name_ar" => "القنادسة" 
			], 
			[
				"id" => 285, 
				"city_id" => 9, 
				"name_en" => "Beni Mered", 
				"name_fr" => "Beni Mered", 
				"name_ar" => "بني مراد" 
			], 
			[
				"id" => 305, 
				"city_id" => 9, 
				"name_en" => "Ouled Slama", 
				"name_fr" => "Ouled Slama", 
				"name_ar" => "اولاد سلامة" 
			], 
			[
				"id" => 302, 
				"city_id" => 9, 
				"name_en" => "Mouzaia", 
				"name_fr" => "Mouzaia", 
				"name_ar" => "موزاية" 
			], 
			[
				"id" => 299, 
				"city_id" => 9, 
				"name_en" => "Hammam Elouane", 
				"name_fr" => "Hammam Elouane", 
				"name_ar" => "حمام ملوان" 
			], 
			[
				"id" => 291, 
				"city_id" => 9, 
				"name_en" => "Bougara", 
				"name_fr" => "Bougara", 
				"name_ar" => "بوقرة" 
			], 
			[
				"id" => 307, 
				"city_id" => 9, 
				"name_en" => "Souhane", 
				"name_fr" => "Souhane", 
				"name_ar" => "صوحان" 
			], 
			[
				"id" => 300, 
				"city_id" => 9, 
				"name_en" => "Larbaa", 
				"name_fr" => "Larbaa", 
				"name_ar" => "الأربعاء" 
			], 
			[
				"id" => 308, 
				"city_id" => 9, 
				"name_en" => "Soumaa", 
				"name_fr" => "Soumaa", 
				"name_ar" => "الصومعة" 
			], 
			[
				"id" => 298, 
				"city_id" => 9, 
				"name_en" => "Guerrouaou", 
				"name_fr" => "Guerrouaou", 
				"name_ar" => "قرواو" 
			], 
			[
				"id" => 290, 
				"city_id" => 9, 
				"name_en" => "Boufarik", 
				"name_fr" => "Boufarik", 
				"name_ar" => "بوفاريك" 
			], 
			[
				"id" => 301, 
				"city_id" => 9, 
				"name_en" => "Meftah", 
				"name_fr" => "Meftah", 
				"name_ar" => "مفتاح" 
			], 
			[
				"id" => 294, 
				"city_id" => 9, 
				"name_en" => "Chiffa", 
				"name_fr" => "Chiffa", 
				"name_ar" => "الشفة" 
			], 
			[
				"id" => 284, 
				"city_id" => 9, 
				"name_en" => "Ain Romana", 
				"name_fr" => "Ain Romana", 
				"name_ar" => "عين الرمانة" 
			], 
			[
				"id" => 303, 
				"city_id" => 9, 
				"name_en" => "Oued  Djer", 
				"name_fr" => "Oued  Djer", 
				"name_ar" => "وادي جر" 
			], 
			[
				"id" => 297, 
				"city_id" => 9, 
				"name_en" => "El-Affroun", 
				"name_fr" => "El-Affroun", 
				"name_ar" => "العفرون" 
			], 
			[
				"id" => 306, 
				"city_id" => 9, 
				"name_en" => "Ouled Yaich", 
				"name_fr" => "Ouled Yaich", 
				"name_ar" => "أولاد يعيش" 
			], 
			[
				"id" => 295, 
				"city_id" => 9, 
				"name_en" => "Chrea", 
				"name_fr" => "Chrea", 
				"name_ar" => "الشريعة" 
			], 
			[
				"id" => 296, 
				"city_id" => 9, 
				"name_en" => "Djebabra", 
				"name_fr" => "Djebabra", 
				"name_ar" => "جبابرة" 
			], 
			[
				"id" => 304, 
				"city_id" => 9, 
				"name_en" => "Oued El Alleug", 
				"name_fr" => "Oued El Alleug", 
				"name_ar" => "وادي العلايق" 
			], 
			[
				"id" => 287, 
				"city_id" => 9, 
				"name_en" => "Benkhelil", 
				"name_fr" => "Benkhelil", 
				"name_ar" => "بن خليل" 
			], 
			[
				"id" => 286, 
				"city_id" => 9, 
				"name_en" => "Beni-Tamou", 
				"name_fr" => "Beni-Tamou", 
				"name_ar" => "بني تامو" 
			], 
			[
				"id" => 293, 
				"city_id" => 9, 
				"name_en" => "Chebli", 
				"name_fr" => "Chebli", 
				"name_ar" => "الشبلي" 
			], 
			[
				"id" => 292, 
				"city_id" => 9, 
				"name_en" => "Bouinan", 
				"name_fr" => "Bouinan", 
				"name_ar" => "بوعينان" 
			], 
			[
				"id" => 289, 
				"city_id" => 9, 
				"name_en" => "Bouarfa", 
				"name_fr" => "Bouarfa", 
				"name_ar" => "بوعرفة" 
			], 
			[
				"id" => 288, 
				"city_id" => 9, 
				"name_en" => "Blida", 
				"name_fr" => "Blida", 
				"name_ar" => "البليدة" 
			], 
			[
				"id" => 312, 
				"city_id" => 10, 
				"name_en" => "Ain Laloui", 
				"name_fr" => "Ain Laloui", 
				"name_ar" => "عين العلوي" 
			], 
			[
				"id" => 334, 
				"city_id" => 10, 
				"name_en" => "Hadjera Zerga", 
				"name_fr" => "Hadjera Zerga", 
				"name_ar" => "الحجرة الزرقاء" 
			], 
			[
				"id" => 342, 
				"city_id" => 10, 
				"name_en" => "Mezdour", 
				"name_fr" => "Mezdour", 
				"name_ar" => "مزدور" 
			], 
			[
				"id" => 351, 
				"city_id" => 10, 
				"name_en" => "Taguedite", 
				"name_fr" => "Taguedite", 
				"name_ar" => "تاقديت" 
			], 
			[
				"id" => 346, 
				"city_id" => 10, 
				"name_en" => "Ridane", 
				"name_fr" => "Ridane", 
				"name_ar" => "ريدان" 
			], 
			[
				"id" => 341, 
				"city_id" => 10, 
				"name_en" => "Maamora", 
				"name_fr" => "Maamora", 
				"name_ar" => "المعمورة" 
			], 
			[
				"id" => 331, 
				"city_id" => 10, 
				"name_en" => "El-Hakimia", 
				"name_fr" => "El-Hakimia", 
				"name_ar" => "الحاكمية" 
			], 
			[
				"id" => 310, 
				"city_id" => 10, 
				"name_en" => "Ahl El Ksar", 
				"name_fr" => "Ahl El Ksar", 
				"name_ar" => "أهل القصر" 
			], 
			[
				"id" => 325, 
				"city_id" => 10, 
				"name_en" => "Dirah", 
				"name_fr" => "Dirah", 
				"name_ar" => "ديرة" 
			], 
			[
				"id" => 324, 
				"city_id" => 10, 
				"name_en" => "Dechmia", 
				"name_fr" => "Dechmia", 
				"name_ar" => "الدشمية" 
			], 
			[
				"id" => 317, 
				"city_id" => 10, 
				"name_en" => "Bechloul", 
				"name_fr" => "Bechloul", 
				"name_ar" => "بشلول" 
			], 
			[
				"id" => 352, 
				"city_id" => 10, 
				"name_en" => "Ath Mansour", 
				"name_fr" => "Ath Mansour", 
				"name_ar" => "آث  منصور" 
			], 
			[
				"id" => 347, 
				"city_id" => 10, 
				"name_en" => "Saharidj", 
				"name_fr" => "Saharidj", 
				"name_ar" => "سحاريج" 
			], 
			[
				"id" => 327, 
				"city_id" => 10, 
				"name_en" => "El Adjiba", 
				"name_fr" => "El Adjiba", 
				"name_ar" => "العجيبة" 
			], 
			[
				"id" => 328, 
				"city_id" => 10, 
				"name_en" => "El Asnam", 
				"name_fr" => "El Asnam", 
				"name_ar" => "الأسنام" 
			], 
			[
				"id" => 339, 
				"city_id" => 10, 
				"name_en" => "M Chedallah", 
				"name_fr" => "M Chedallah", 
				"name_ar" => "أمشدالة" 
			], 
			[
				"id" => 319, 
				"city_id" => 10, 
				"name_en" => "Bordj Okhriss", 
				"name_fr" => "Bordj Okhriss", 
				"name_ar" => "برج أوخريص" 
			], 
			[
				"id" => 349, 
				"city_id" => 10, 
				"name_en" => "Sour El Ghozlane", 
				"name_fr" => "Sour El Ghozlane", 
				"name_ar" => "سور الغزلان" 
			], 
			[
				"id" => 336, 
				"city_id" => 10, 
				"name_en" => "Hanif", 
				"name_fr" => "Hanif", 
				"name_ar" => "حنيف" 
			], 
			[
				"id" => 323, 
				"city_id" => 10, 
				"name_en" => "Chorfa", 
				"name_fr" => "Chorfa", 
				"name_ar" => "شرفة" 
			], 
			[
				"id" => 344, 
				"city_id" => 10, 
				"name_en" => "Ouled Rached", 
				"name_fr" => "Ouled Rached", 
				"name_ar" => "أولاد راشد" 
			], 
			[
				"id" => 311, 
				"city_id" => 10, 
				"name_en" => "Ain El Hadjar", 
				"name_fr" => "Ain El Hadjar", 
				"name_ar" => "عين الحجر" 
			], 
			[
				"id" => 309, 
				"city_id" => 10, 
				"name_en" => "Aghbalou", 
				"name_fr" => "Aghbalou", 
				"name_ar" => "أغبالو" 
			], 
			[
				"id" => 345, 
				"city_id" => 10, 
				"name_en" => "Raouraoua", 
				"name_fr" => "Raouraoua", 
				"name_ar" => "روراوة" 
			], 
			[
				"id" => 330, 
				"city_id" => 10, 
				"name_en" => "El Khabouzia", 
				"name_fr" => "El Khabouzia", 
				"name_ar" => "الخبوزية" 
			], 
			[
				"id" => 318, 
				"city_id" => 10, 
				"name_en" => "Bir Ghbalou", 
				"name_fr" => "Bir Ghbalou", 
				"name_ar" => "بئر غبالو" 
			], 
			[
				"id" => 321, 
				"city_id" => 10, 
				"name_en" => "Bouira", 
				"name_fr" => "Bouira", 
				"name_ar" => "البويرة" 
			], 
			[
				"id" => 313, 
				"city_id" => 10, 
				"name_en" => "Ain Turk", 
				"name_fr" => "Ain Turk", 
				"name_ar" => "عين الترك" 
			], 
			[
				"id" => 315, 
				"city_id" => 10, 
				"name_en" => "Ait Laaziz", 
				"name_fr" => "Ait Laaziz", 
				"name_ar" => "أيت لعزيز" 
			], 
			[
				"id" => 314, 
				"city_id" => 10, 
				"name_en" => "Ain-Bessem", 
				"name_fr" => "Ain-Bessem", 
				"name_ar" => "عين بسام" 
			], 
			[
				"id" => 332, 
				"city_id" => 10, 
				"name_en" => "El-Mokrani", 
				"name_fr" => "El-Mokrani", 
				"name_ar" => "المقراني" 
			], 
			[
				"id" => 348, 
				"city_id" => 10, 
				"name_en" => "Souk El Khemis", 
				"name_fr" => "Souk El Khemis", 
				"name_ar" => "سوق الخميس" 
			], 
			[
				"id" => 316, 
				"city_id" => 10, 
				"name_en" => "Aomar", 
				"name_fr" => "Aomar", 
				"name_ar" => "أعمر" 
			], 
			[
				"id" => 326, 
				"city_id" => 10, 
				"name_en" => "Djebahia", 
				"name_fr" => "Djebahia", 
				"name_ar" => "جباحية" 
			], 
			[
				"id" => 329, 
				"city_id" => 10, 
				"name_en" => "El Hachimia", 
				"name_fr" => "El Hachimia", 
				"name_ar" => "الهاشمية" 
			], 
			[
				"id" => 335, 
				"city_id" => 10, 
				"name_en" => "Haizer", 
				"name_fr" => "Haizer", 
				"name_ar" => "حيزر" 
			], 
			[
				"id" => 350, 
				"city_id" => 10, 
				"name_en" => "Taghzout", 
				"name_fr" => "Taghzout", 
				"name_ar" => "تاغزوت" 
			], 
			[
				"id" => 320, 
				"city_id" => 10, 
				"name_en" => "Bouderbala", 
				"name_fr" => "Bouderbala", 
				"name_ar" => "بودربالة" 
			], 
			[
				"id" => 322, 
				"city_id" => 10, 
				"name_en" => "Boukram", 
				"name_fr" => "Boukram", 
				"name_ar" => "بوكرم" 
			], 
			[
				"id" => 333, 
				"city_id" => 10, 
				"name_en" => "Guerrouma", 
				"name_fr" => "Guerrouma", 
				"name_ar" => "قرومة" 
			], 
			[
				"id" => 338, 
				"city_id" => 10, 
				"name_en" => "Lakhdaria", 
				"name_fr" => "Lakhdaria", 
				"name_ar" => "الأخضرية" 
			], 
			[
				"id" => 340, 
				"city_id" => 10, 
				"name_en" => "Maala", 
				"name_fr" => "Maala", 
				"name_ar" => "معلة" 
			], 
			[
				"id" => 337, 
				"city_id" => 10, 
				"name_en" => "Kadiria", 
				"name_fr" => "Kadiria", 
				"name_ar" => "قادرية" 
			], 
			[
				"id" => 353, 
				"city_id" => 10, 
				"name_en" => "Z'barbar (El Isseri )", 
				"name_fr" => "Z'barbar (El Isseri )", 
				"name_ar" => "زبربر" 
			], 
			[
				"id" => 343, 
				"city_id" => 10, 
				"name_en" => "Oued El Berdi", 
				"name_fr" => "Oued El Berdi", 
				"name_ar" => "وادي البردي" 
			], 
			[
				"id" => 362, 
				"city_id" => 11, 
				"name_en" => "Tazrouk", 
				"name_fr" => "Tazrouk", 
				"name_ar" => "تاظروك" 
			], 
			[
				"id" => 354, 
				"city_id" => 11, 
				"name_en" => "Abelsa", 
				"name_fr" => "Abelsa", 
				"name_ar" => "ابلسة" 
			], 
			[
				"id" => 361, 
				"city_id" => 11, 
				"name_en" => "Tamanrasset", 
				"name_fr" => "Tamanrasset", 
				"name_ar" => "تمنراست" 
			], 
			[
				"id" => 355, 
				"city_id" => 11, 
				"name_en" => "Ain Amguel", 
				"name_fr" => "Ain Amguel", 
				"name_ar" => "عين امقل" 
			], 
			[
				"id" => 359, 
				"city_id" => 11, 
				"name_en" => "Idles", 
				"name_fr" => "Idles", 
				"name_ar" => "أدلس" 
			], 
			[
				"id" => 380, 
				"city_id" => 12, 
				"name_en" => "El-Houidjbet", 
				"name_fr" => "El-Houidjbet", 
				"name_ar" => "الحويجبات" 
			], 
			[
				"id" => 379, 
				"city_id" => 12, 
				"name_en" => "El-Aouinet", 
				"name_fr" => "El-Aouinet", 
				"name_ar" => "العوينات" 
			], 
			[
				"id" => 381, 
				"city_id" => 12, 
				"name_en" => "Ferkane", 
				"name_fr" => "Ferkane", 
				"name_ar" => "فركان" 
			], 
			[
				"id" => 385, 
				"city_id" => 12, 
				"name_en" => "Negrine", 
				"name_fr" => "Negrine", 
				"name_ar" => "نقرين" 
			], 
			[
				"id" => 368, 
				"city_id" => 12, 
				"name_en" => "Bir Mokkadem", 
				"name_fr" => "Bir Mokkadem", 
				"name_ar" => "بئر مقدم" 
			], 
			[
				"id" => 367, 
				"city_id" => 12, 
				"name_en" => "Bir Dheheb", 
				"name_fr" => "Bir Dheheb", 
				"name_ar" => "بئر الذهب" 
			], 
			[
				"id" => 388, 
				"city_id" => 12, 
				"name_en" => "Saf Saf El Ouesra", 
				"name_fr" => "Saf Saf El Ouesra", 
				"name_ar" => "صفصاف الوسرى" 
			], 
			[
				"id" => 382, 
				"city_id" => 12, 
				"name_en" => "Guorriguer", 
				"name_fr" => "Guorriguer", 
				"name_ar" => "قريقر" 
			], 
			[
				"id" => 366, 
				"city_id" => 12, 
				"name_en" => "Bekkaria", 
				"name_fr" => "Bekkaria", 
				"name_ar" => "بكارية" 
			], 
			[
				"id" => 371, 
				"city_id" => 12, 
				"name_en" => "Boulhaf Dyr", 
				"name_fr" => "Boulhaf Dyr", 
				"name_ar" => "بولحاف الدير" 
			], 
			[
				"id" => 387, 
				"city_id" => 12, 
				"name_en" => "Oum Ali", 
				"name_fr" => "Oum Ali", 
				"name_ar" => "أم علي" 
			], 
			[
				"id" => 370, 
				"city_id" => 12, 
				"name_en" => "Boukhadra", 
				"name_fr" => "Boukhadra", 
				"name_ar" => "بوخضرة" 
			], 
			[
				"id" => 374, 
				"city_id" => 12, 
				"name_en" => "El Malabiod", 
				"name_fr" => "El Malabiod", 
				"name_ar" => "الماء الابيض" 
			], 
			[
				"id" => 386, 
				"city_id" => 12, 
				"name_en" => "Ouenza", 
				"name_fr" => "Ouenza", 
				"name_ar" => "الونزة" 
			], 
			[
				"id" => 375, 
				"city_id" => 12, 
				"name_en" => "El Meridj", 
				"name_fr" => "El Meridj", 
				"name_ar" => "المريج" 
			], 
			[
				"id" => 364, 
				"city_id" => 12, 
				"name_en" => "Ain Zerga", 
				"name_fr" => "Ain Zerga", 
				"name_ar" => "عين الزرقاء" 
			], 
			[
				"id" => 389, 
				"city_id" => 12, 
				"name_en" => "Stah Guentis", 
				"name_fr" => "Stah Guentis", 
				"name_ar" => "سطح قنطيس" 
			], 
			[
				"id" => 377, 
				"city_id" => 12, 
				"name_en" => "El Ogla", 
				"name_fr" => "El Ogla", 
				"name_ar" => "العقلة" 
			], 
			[
				"id" => 376, 
				"city_id" => 12, 
				"name_en" => "El Mezeraa", 
				"name_fr" => "El Mezeraa", 
				"name_ar" => "المزرعة" 
			], 
			[
				"id" => 365, 
				"city_id" => 12, 
				"name_en" => "Bedjene", 
				"name_fr" => "Bedjene", 
				"name_ar" => "بجن" 
			], 
			[
				"id" => 384, 
				"city_id" => 12, 
				"name_en" => "Morsott", 
				"name_fr" => "Morsott", 
				"name_ar" => "مرسط" 
			], 
			[
				"id" => 391, 
				"city_id" => 12, 
				"name_en" => "Telidjen", 
				"name_fr" => "Telidjen", 
				"name_ar" => "ثليجان" 
			], 
			[
				"id" => 372, 
				"city_id" => 12, 
				"name_en" => "Cheria", 
				"name_fr" => "Cheria", 
				"name_ar" => "الشريعة" 
			], 
			[
				"id" => 378, 
				"city_id" => 12, 
				"name_en" => "El Ogla El Malha", 
				"name_fr" => "El Ogla El Malha", 
				"name_ar" => "العقلة المالحة" 
			], 
			[
				"id" => 369, 
				"city_id" => 12, 
				"name_en" => "Bir-El-Ater", 
				"name_fr" => "Bir-El-Ater", 
				"name_ar" => "بئر العاتر" 
			], 
			[
				"id" => 390, 
				"city_id" => 12, 
				"name_en" => "Tebessa", 
				"name_fr" => "Tebessa", 
				"name_ar" => "تبسة" 
			], 
			[
				"id" => 383, 
				"city_id" => 12, 
				"name_en" => "Hammamet", 
				"name_fr" => "Hammamet", 
				"name_ar" => "الحمامات" 
			], 
			[
				"id" => 373, 
				"city_id" => 12, 
				"name_en" => "El Kouif", 
				"name_fr" => "El Kouif", 
				"name_ar" => "الكويف" 
			], 
			[
				"id" => 400, 
				"city_id" => 13, 
				"name_en" => "Bab El Assa", 
				"name_fr" => "Bab El Assa", 
				"name_ar" => "باب العسة" 
			], 
			[
				"id" => 441, 
				"city_id" => 13, 
				"name_en" => "Terny Beni Hediel", 
				"name_fr" => "Terny Beni Hediel", 
				"name_ar" => "تيرني بني هديل" 
			], 
			[
				"id" => 424, 
				"city_id" => 13, 
				"name_en" => "Mansourah", 
				"name_fr" => "Mansourah", 
				"name_ar" => "منصورة" 
			], 
			[
				"id" => 404, 
				"city_id" => 13, 
				"name_en" => "Beni Mester", 
				"name_fr" => "Beni Mester", 
				"name_ar" => "بني مستر" 
			], 
			[
				"id" => 394, 
				"city_id" => 13, 
				"name_en" => "Ain Ghoraba", 
				"name_fr" => "Ain Ghoraba", 
				"name_ar" => "عين غرابة" 
			], 
			[
				"id" => 411, 
				"city_id" => 13, 
				"name_en" => "Chetouane", 
				"name_fr" => "Chetouane", 
				"name_ar" => "شتوان" 
			], 
			[
				"id" => 399, 
				"city_id" => 13, 
				"name_en" => "Amieur", 
				"name_fr" => "Amieur", 
				"name_ar" => "عمير" 
			], 
			[
				"id" => 393, 
				"city_id" => 13, 
				"name_en" => "Ain Fezza", 
				"name_fr" => "Ain Fezza", 
				"name_ar" => "عين فزة" 
			], 
			[
				"id" => 422, 
				"city_id" => 13, 
				"name_en" => "Honnaine", 
				"name_fr" => "Honnaine", 
				"name_ar" => "هنين" 
			], 
			[
				"id" => 403, 
				"city_id" => 13, 
				"name_en" => "Beni Khellad", 
				"name_fr" => "Beni Khellad", 
				"name_ar" => "بني خلاد" 
			], 
			[
				"id" => 436, 
				"city_id" => 13, 
				"name_en" => "Sidi Djillali", 
				"name_fr" => "Sidi Djillali", 
				"name_ar" => "سيدي الجيلالي" 
			], 
			[
				"id" => 410, 
				"city_id" => 13, 
				"name_en" => "Bouihi", 
				"name_fr" => "Bouihi", 
				"name_ar" => "البويهي" 
			], 
			[
				"id" => 427, 
				"city_id" => 13, 
				"name_en" => "Nedroma", 
				"name_fr" => "Nedroma", 
				"name_ar" => "ندرومة" 
			], 
			[
				"id" => 426, 
				"city_id" => 13, 
				"name_en" => "M'sirda Fouaga", 
				"name_fr" => "M'sirda Fouaga", 
				"name_ar" => "مسيردة الفواقة" 
			], 
			[
				"id" => 425, 
				"city_id" => 13, 
				"name_en" => "Marsa Ben M'hidi", 
				"name_fr" => "Marsa Ben M'hidi", 
				"name_ar" => "مرسى بن مهيدي" 
			], 
			[
				"id" => 437, 
				"city_id" => 13, 
				"name_en" => "Sidi Medjahed", 
				"name_fr" => "Sidi Medjahed", 
				"name_ar" => "سيدي مجاهد" 
			], 
			[
				"id" => 402, 
				"city_id" => 13, 
				"name_en" => "Beni Boussaid", 
				"name_fr" => "Beni Boussaid", 
				"name_ar" => "بني بوسعيد" 
			], 
			[
				"id" => 434, 
				"city_id" => 13, 
				"name_en" => "Sebdou", 
				"name_fr" => "Sebdou", 
				"name_ar" => "سبدو" 
			], 
			[
				"id" => 417, 
				"city_id" => 13, 
				"name_en" => "El Gor", 
				"name_fr" => "El Gor", 
				"name_ar" => "القور" 
			], 
			[
				"id" => 414, 
				"city_id" => 13, 
				"name_en" => "El Aricha", 
				"name_fr" => "El Aricha", 
				"name_ar" => "العريشة" 
			], 
			[
				"id" => 409, 
				"city_id" => 13, 
				"name_en" => "Bouhlou", 
				"name_fr" => "Bouhlou", 
				"name_ar" => "بوحلو" 
			], 
			[
				"id" => 423, 
				"city_id" => 13, 
				"name_en" => "Maghnia", 
				"name_fr" => "Maghnia", 
				"name_ar" => "مغنية" 
			], 
			[
				"id" => 420, 
				"city_id" => 13, 
				"name_en" => "Hammam Boughrara", 
				"name_fr" => "Hammam Boughrara", 
				"name_ar" => "حمام بوغرارة" 
			], 
			[
				"id" => 444, 
				"city_id" => 13, 
				"name_en" => "Zenata", 
				"name_fr" => "Zenata", 
				"name_ar" => "زناتة" 
			], 
			[
				"id" => 430, 
				"city_id" => 13, 
				"name_en" => "Ouled Riyah", 
				"name_fr" => "Ouled Riyah", 
				"name_ar" => "أولاد رياح" 
			], 
			[
				"id" => 421, 
				"city_id" => 13, 
				"name_en" => "Hennaya", 
				"name_fr" => "Hennaya", 
				"name_ar" => "الحناية" 
			], 
			[
				"id" => 435, 
				"city_id" => 13, 
				"name_en" => "Sidi Abdelli", 
				"name_fr" => "Sidi Abdelli", 
				"name_ar" => "سيدي العبدلي" 
			], 
			[
				"id" => 440, 
				"city_id" => 13, 
				"name_en" => "Souk Tleta", 
				"name_fr" => "Souk Tleta", 
				"name_ar" => "سوق الثلاثاء" 
			], 
			[
				"id" => 408, 
				"city_id" => 13, 
				"name_en" => "Bensekrane", 
				"name_fr" => "Bensekrane", 
				"name_ar" => "بن سكران" 
			], 
			[
				"id" => 418, 
				"city_id" => 13, 
				"name_en" => "Fellaoucene", 
				"name_fr" => "Fellaoucene", 
				"name_ar" => "فلاوسن" 
			], 
			[
				"id" => 395, 
				"city_id" => 13, 
				"name_en" => "Ain Kebira", 
				"name_fr" => "Ain Kebira", 
				"name_ar" => "عين الكبيرة" 
			], 
			[
				"id" => 392, 
				"city_id" => 13, 
				"name_en" => "Ain Fetah", 
				"name_fr" => "Ain Fetah", 
				"name_ar" => "عين فتاح" 
			], 
			[
				"id" => 443, 
				"city_id" => 13, 
				"name_en" => "Tlemcen", 
				"name_fr" => "Tlemcen", 
				"name_ar" => "تلمسان" 
			], 
			[
				"id" => 396, 
				"city_id" => 13, 
				"name_en" => "Ain Nehala", 
				"name_fr" => "Ain Nehala", 
				"name_ar" => "عين النحالة" 
			], 
			[
				"id" => 397, 
				"city_id" => 13, 
				"name_en" => "Ain Tellout", 
				"name_fr" => "Ain Tellout", 
				"name_ar" => "عين تالوت" 
			], 
			[
				"id" => 398, 
				"city_id" => 13, 
				"name_en" => "Ain Youcef", 
				"name_fr" => "Ain Youcef", 
				"name_ar" => "عين يوسف" 
			], 
			[
				"id" => 405, 
				"city_id" => 13, 
				"name_en" => "Beni Ouarsous", 
				"name_fr" => "Beni Ouarsous", 
				"name_ar" => "بني وارسوس" 
			], 
			[
				"id" => 416, 
				"city_id" => 13, 
				"name_en" => "El Fehoul", 
				"name_fr" => "El Fehoul", 
				"name_ar" => "الفحول" 
			], 
			[
				"id" => 431, 
				"city_id" => 13, 
				"name_en" => "Remchi", 
				"name_fr" => "Remchi", 
				"name_ar" => "الرمشي" 
			], 
			[
				"id" => 433, 
				"city_id" => 13, 
				"name_en" => "Sebbaa Chioukh", 
				"name_fr" => "Sebbaa Chioukh", 
				"name_ar" => "سبعة شيوخ" 
			], 
			[
				"id" => 439, 
				"city_id" => 13, 
				"name_en" => "Souani", 
				"name_fr" => "Souani", 
				"name_ar" => "السواني" 
			], 
			[
				"id" => 432, 
				"city_id" => 13, 
				"name_en" => "Sabra", 
				"name_fr" => "Sabra", 
				"name_ar" => "صبرة" 
			], 
			[
				"id" => 412, 
				"city_id" => 13, 
				"name_en" => "Dar Yaghmoracen", 
				"name_fr" => "Dar Yaghmoracen", 
				"name_ar" => "دار يغمراسن" 
			], 
			[
				"id" => 419, 
				"city_id" => 13, 
				"name_en" => "Ghazaouet", 
				"name_fr" => "Ghazaouet", 
				"name_ar" => "الغزوات" 
			], 
			[
				"id" => 438, 
				"city_id" => 13, 
				"name_en" => "Souahlia", 
				"name_fr" => "Souahlia", 
				"name_ar" => "السواحلية" 
			], 
			[
				"id" => 442, 
				"city_id" => 13, 
				"name_en" => "Tianet", 
				"name_fr" => "Tianet", 
				"name_ar" => "تيانت" 
			], 
			[
				"id" => 406, 
				"city_id" => 13, 
				"name_en" => "Beni Smiel", 
				"name_fr" => "Beni Smiel", 
				"name_ar" => "بني صميل" 
			], 
			[
				"id" => 428, 
				"city_id" => 13, 
				"name_en" => "Oued Lakhdar", 
				"name_fr" => "Oued Lakhdar", 
				"name_ar" => "وادي الخضر" 
			], 
			[
				"id" => 429, 
				"city_id" => 13, 
				"name_en" => "Ouled Mimoun", 
				"name_fr" => "Ouled Mimoun", 
				"name_ar" => "أولاد ميمون" 
			], 
			[
				"id" => 401, 
				"city_id" => 13, 
				"name_en" => "Beni Bahdel", 
				"name_fr" => "Beni Bahdel", 
				"name_ar" => "بني بهدل" 
			], 
			[
				"id" => 407, 
				"city_id" => 13, 
				"name_en" => "Beni Snous", 
				"name_fr" => "Beni Snous", 
				"name_ar" => "بني سنوس" 
			], 
			[
				"id" => 415, 
				"city_id" => 13, 
				"name_en" => "Azail", 
				"name_fr" => "Azail", 
				"name_ar" => "العزايل" 
			], 
			[
				"id" => 413, 
				"city_id" => 13, 
				"name_en" => "Djebala", 
				"name_fr" => "Djebala", 
				"name_ar" => "جبالة" 
			], 
			[
				"id" => 461, 
				"city_id" => 14, 
				"name_en" => "Mahdia", 
				"name_fr" => "Mahdia", 
				"name_ar" => "مهدية" 
			], 
			[
				"id" => 447, 
				"city_id" => 14, 
				"name_en" => "Ain Dzarit", 
				"name_fr" => "Ain Dzarit", 
				"name_ar" => "عين دزاريت" 
			], 
			[
				"id" => 472, 
				"city_id" => 14, 
				"name_en" => "Sebaine", 
				"name_fr" => "Sebaine", 
				"name_ar" => "السبعين" 
			], 
			[
				"id" => 455, 
				"city_id" => 14, 
				"name_en" => "Faidja", 
				"name_fr" => "Faidja", 
				"name_ar" => "الفايجة" 
			], 
			[
				"id" => 475, 
				"city_id" => 14, 
				"name_en" => "Si Abdelghani", 
				"name_fr" => "Si Abdelghani", 
				"name_ar" => "سي عبد الغني" 
			], 
			[
				"id" => 480, 
				"city_id" => 14, 
				"name_en" => "Sougueur", 
				"name_fr" => "Sougueur", 
				"name_ar" => "السوقر" 
			], 
			[
				"id" => 485, 
				"city_id" => 14, 
				"name_en" => "Tousnina", 
				"name_fr" => "Tousnina", 
				"name_ar" => "توسنينة" 
			], 
			[
				"id" => 465, 
				"city_id" => 14, 
				"name_en" => "Meghila", 
				"name_fr" => "Meghila", 
				"name_ar" => "مغيلة" 
			], 
			[
				"id" => 473, 
				"city_id" => 14, 
				"name_en" => "Sebt", 
				"name_fr" => "Sebt", 
				"name_ar" => "السبت" 
			], 
			[
				"id" => 479, 
				"city_id" => 14, 
				"name_en" => "Sidi Hosni", 
				"name_fr" => "Sidi Hosni", 
				"name_ar" => "سيدي حسني" 
			], 
			[
				"id" => 448, 
				"city_id" => 14, 
				"name_en" => "Ain El Hadid", 
				"name_fr" => "Ain El Hadid", 
				"name_ar" => "عين الحديد" 
			], 
			[
				"id" => 456, 
				"city_id" => 14, 
				"name_en" => "Frenda", 
				"name_fr" => "Frenda", 
				"name_ar" => "فرندة" 
			], 
			[
				"id" => 482, 
				"city_id" => 14, 
				"name_en" => "Takhemaret", 
				"name_fr" => "Takhemaret", 
				"name_ar" => "تخمرت" 
			], 
			[
				"id" => 449, 
				"city_id" => 14, 
				"name_en" => "Ain Kermes", 
				"name_fr" => "Ain Kermes", 
				"name_ar" => "عين كرمس" 
			], 
			[
				"id" => 453, 
				"city_id" => 14, 
				"name_en" => "Djebilet Rosfa", 
				"name_fr" => "Djebilet Rosfa", 
				"name_ar" => "جبيلات الرصفاء" 
			], 
			[
				"id" => 460, 
				"city_id" => 14, 
				"name_en" => "Madna", 
				"name_fr" => "Madna", 
				"name_ar" => "مادنة" 
			], 
			[
				"id" => 463, 
				"city_id" => 14, 
				"name_en" => "Medrissa", 
				"name_fr" => "Medrissa", 
				"name_ar" => "مدريسة" 
			], 
			[
				"id" => 476, 
				"city_id" => 14, 
				"name_en" => "Sidi Abderrahmane", 
				"name_fr" => "Sidi Abderrahmane", 
				"name_ar" => "سيدي عبد الرحمن" 
			], 
			[
				"id" => 459, 
				"city_id" => 14, 
				"name_en" => "Ksar Chellala", 
				"name_fr" => "Ksar Chellala", 
				"name_ar" => "قصر الشلالة" 
			], 
			[
				"id" => 457, 
				"city_id" => 14, 
				"name_en" => "Guertoufa", 
				"name_fr" => "Guertoufa", 
				"name_ar" => "قرطوفة" 
			], 
			[
				"id" => 474, 
				"city_id" => 14, 
				"name_en" => "Serghine", 
				"name_fr" => "Serghine", 
				"name_ar" => "سرغين" 
			], 
			[
				"id" => 486, 
				"city_id" => 14, 
				"name_en" => "Zmalet El Emir Abdelkade", 
				"name_fr" => "Zmalet El Emir Abdelkade", 
				"name_ar" => "زمالة  الأمير عبد القادر" 
			], 
			[
				"id" => 469, 
				"city_id" => 14, 
				"name_en" => "Oued Lilli", 
				"name_fr" => "Oued Lilli", 
				"name_ar" => "وادي ليلي" 
			], 
			[
				"id" => 477, 
				"city_id" => 14, 
				"name_en" => "Sidi Ali Mellal", 
				"name_fr" => "Sidi Ali Mellal", 
				"name_ar" => "سيدي علي ملال" 
			], 
			[
				"id" => 454, 
				"city_id" => 14, 
				"name_en" => "Djillali Ben Amar", 
				"name_fr" => "Djillali Ben Amar", 
				"name_ar" => "جيلالي بن عمار" 
			], 
			[
				"id" => 462, 
				"city_id" => 14, 
				"name_en" => "Mechraa Safa", 
				"name_fr" => "Mechraa Safa", 
				"name_ar" => "مشرع الصفا" 
			], 
			[
				"id" => 481, 
				"city_id" => 14, 
				"name_en" => "Tagdempt", 
				"name_fr" => "Tagdempt", 
				"name_ar" => "تاقدمت" 
			], 
			[
				"id" => 450, 
				"city_id" => 14, 
				"name_en" => "Bougara", 
				"name_fr" => "Bougara", 
				"name_ar" => "بوقرة" 
			], 
			[
				"id" => 458, 
				"city_id" => 14, 
				"name_en" => "Hamadia", 
				"name_fr" => "Hamadia", 
				"name_ar" => "حمادية" 
			], 
			[
				"id" => 471, 
				"city_id" => 14, 
				"name_en" => "Rechaiga", 
				"name_fr" => "Rechaiga", 
				"name_ar" => "الرشايقة" 
			], 
			[
				"id" => 484, 
				"city_id" => 14, 
				"name_en" => "Tidda", 
				"name_fr" => "Tidda", 
				"name_ar" => "تيدة" 
			], 
			[
				"id" => 467, 
				"city_id" => 14, 
				"name_en" => "Nadorah", 
				"name_fr" => "Nadorah", 
				"name_ar" => "الناظورة" 
			], 
			[
				"id" => 483, 
				"city_id" => 14, 
				"name_en" => "Tiaret", 
				"name_fr" => "Tiaret", 
				"name_ar" => "تيارت" 
			], 
			[
				"id" => 464, 
				"city_id" => 14, 
				"name_en" => "Medroussa", 
				"name_fr" => "Medroussa", 
				"name_ar" => "مدروسة" 
			], 
			[
				"id" => 466, 
				"city_id" => 14, 
				"name_en" => "Mellakou", 
				"name_fr" => "Mellakou", 
				"name_ar" => "ملاكو" 
			], 
			[
				"id" => 478, 
				"city_id" => 14, 
				"name_en" => "Sidi Bakhti", 
				"name_fr" => "Sidi Bakhti", 
				"name_ar" => "سيدي بختي" 
			], 
			[
				"id" => 446, 
				"city_id" => 14, 
				"name_en" => "Ain Deheb", 
				"name_fr" => "Ain Deheb", 
				"name_ar" => "عين الذهب" 
			], 
			[
				"id" => 451, 
				"city_id" => 14, 
				"name_en" => "Chehaima", 
				"name_fr" => "Chehaima", 
				"name_ar" => "شحيمة" 
			], 
			[
				"id" => 468, 
				"city_id" => 14, 
				"name_en" => "Naima", 
				"name_fr" => "Naima", 
				"name_ar" => "النعيمة" 
			], 
			[
				"id" => 445, 
				"city_id" => 14, 
				"name_en" => "Ain Bouchekif", 
				"name_fr" => "Ain Bouchekif", 
				"name_ar" => "عين بوشقيف" 
			], 
			[
				"id" => 452, 
				"city_id" => 14, 
				"name_en" => "Dahmouni", 
				"name_fr" => "Dahmouni", 
				"name_ar" => "دحموني" 
			], 
			[
				"id" => 470, 
				"city_id" => 14, 
				"name_en" => "Rahouia", 
				"name_fr" => "Rahouia", 
				"name_ar" => "الرحوية" 
			], 
			[
				"id" => 535, 
				"city_id" => 15, 
				"name_en" => "Mizrana", 
				"name_fr" => "Mizrana", 
				"name_ar" => "ميزرانـــة" 
			], 
			[
				"id" => 522, 
				"city_id" => 15, 
				"name_en" => "Idjeur", 
				"name_fr" => "Idjeur", 
				"name_ar" => "إيجــار" 
			], 
			[
				"id" => 510, 
				"city_id" => 15, 
				"name_en" => "Beni-Douala", 
				"name_fr" => "Beni-Douala", 
				"name_ar" => "بني دوالة" 
			], 
			[
				"id" => 512, 
				"city_id" => 15, 
				"name_en" => "Beni-Zikki", 
				"name_fr" => "Beni-Zikki", 
				"name_ar" => "بني زيكــي" 
			], 
			[
				"id" => 527, 
				"city_id" => 15, 
				"name_en" => "Illoula Oumalou", 
				"name_fr" => "Illoula Oumalou", 
				"name_ar" => "إيلولة أومـــالو" 
			], 
			[
				"id" => 489, 
				"city_id" => 15, 
				"name_en" => "Agouni-Gueghrane", 
				"name_fr" => "Agouni-Gueghrane", 
				"name_ar" => "أقني قغران" 
			], 
			[
				"id" => 493, 
				"city_id" => 15, 
				"name_en" => "Ait Bouaddou", 
				"name_fr" => "Ait Bouaddou", 
				"name_ar" => "أيت بــوادو" 
			], 
			[
				"id" => 538, 
				"city_id" => 15, 
				"name_en" => "Ouadhias", 
				"name_fr" => "Ouadhias", 
				"name_ar" => "واضية" 
			], 
			[
				"id" => 547, 
				"city_id" => 15, 
				"name_en" => "Tizi N'tleta", 
				"name_fr" => "Tizi N'tleta", 
				"name_ar" => "تيزي نثلاثة" 
			], 
			[
				"id" => 488, 
				"city_id" => 15, 
				"name_en" => "Aghribs", 
				"name_fr" => "Aghribs", 
				"name_ar" => "أغريب" 
			], 
			[
				"id" => 498, 
				"city_id" => 15, 
				"name_en" => "Ait-Chafaa", 
				"name_fr" => "Ait-Chafaa", 
				"name_ar" => "أيت شافع" 
			], 
			[
				"id" => 504, 
				"city_id" => 15, 
				"name_en" => "Akerrou", 
				"name_fr" => "Akerrou", 
				"name_ar" => "أقرو" 
			], 
			[
				"id" => 507, 
				"city_id" => 15, 
				"name_en" => "Azeffoun", 
				"name_fr" => "Azeffoun", 
				"name_ar" => "أزفون" 
			], 
			[
				"id" => 525, 
				"city_id" => 15, 
				"name_en" => "Iflissen", 
				"name_fr" => "Iflissen", 
				"name_ar" => "إفليـــسن" 
			], 
			[
				"id" => 544, 
				"city_id" => 15, 
				"name_en" => "Tigzirt", 
				"name_fr" => "Tigzirt", 
				"name_ar" => "تيقـزيرت" 
			], 
			[
				"id" => 505, 
				"city_id" => 15, 
				"name_en" => "Assi-Youcef", 
				"name_fr" => "Assi-Youcef", 
				"name_ar" => "أسي يوسف" 
			], 
			[
				"id" => 513, 
				"city_id" => 15, 
				"name_en" => "Boghni", 
				"name_fr" => "Boghni", 
				"name_ar" => "بوغني" 
			], 
			[
				"id" => 515, 
				"city_id" => 15, 
				"name_en" => "Bounouh", 
				"name_fr" => "Bounouh", 
				"name_ar" => "بونوح" 
			], 
			[
				"id" => 533, 
				"city_id" => 15, 
				"name_en" => "Mechtras", 
				"name_fr" => "Mechtras", 
				"name_ar" => "مشطراس" 
			], 
			[
				"id" => 517, 
				"city_id" => 15, 
				"name_en" => "Draa-Ben-Khedda", 
				"name_fr" => "Draa-Ben-Khedda", 
				"name_ar" => "ذراع بن خدة" 
			], 
			[
				"id" => 540, 
				"city_id" => 15, 
				"name_en" => "Sidi Namane", 
				"name_fr" => "Sidi Namane", 
				"name_ar" => "سيدي نعمان" 
			], 
			[
				"id" => 543, 
				"city_id" => 15, 
				"name_en" => "Tadmait", 
				"name_fr" => "Tadmait", 
				"name_ar" => "تادمايت" 
			], 
			[
				"id" => 546, 
				"city_id" => 15, 
				"name_en" => "Tirmitine", 
				"name_fr" => "Tirmitine", 
				"name_ar" => "تيرمتين" 
			], 
			[
				"id" => 494, 
				"city_id" => 15, 
				"name_en" => "Ait Boumahdi", 
				"name_fr" => "Ait Boumahdi", 
				"name_ar" => "أيت بومهدي" 
			], 
			[
				"id" => 501, 
				"city_id" => 15, 
				"name_en" => "Ait-Toudert", 
				"name_fr" => "Ait-Toudert", 
				"name_ar" => "أيت تودرت" 
			], 
			[
				"id" => 509, 
				"city_id" => 15, 
				"name_en" => "Beni-Aissi", 
				"name_fr" => "Beni-Aissi", 
				"name_ar" => "بني عيسي" 
			], 
			[
				"id" => 537, 
				"city_id" => 15, 
				"name_en" => "Ouacif", 
				"name_fr" => "Ouacif", 
				"name_ar" => "واسيف" 
			], 
			[
				"id" => 495, 
				"city_id" => 15, 
				"name_en" => "Ait Khellili", 
				"name_fr" => "Ait Khellili", 
				"name_ar" => "أيت خليلي" 
			], 
			[
				"id" => 534, 
				"city_id" => 15, 
				"name_en" => "Mekla", 
				"name_fr" => "Mekla", 
				"name_ar" => "مقــلع" 
			], 
			[
				"id" => 541, 
				"city_id" => 15, 
				"name_en" => "Souama", 
				"name_fr" => "Souama", 
				"name_ar" => "صوامـــع" 
			], 
			[
				"id" => 511, 
				"city_id" => 15, 
				"name_en" => "Beni-Yenni", 
				"name_fr" => "Beni-Yenni", 
				"name_ar" => "بني يني" 
			], 
			[
				"id" => 521, 
				"city_id" => 15, 
				"name_en" => "Iboudrarene", 
				"name_fr" => "Iboudrarene", 
				"name_ar" => "إبودرارن" 
			], 
			[
				"id" => 549, 
				"city_id" => 15, 
				"name_en" => "Tizi-Ouzou", 
				"name_fr" => "Tizi-Ouzou", 
				"name_ar" => "تيزي وزو" 
			], 
			[
				"id" => 487, 
				"city_id" => 15, 
				"name_en" => "Abi-Youcef", 
				"name_fr" => "Abi-Youcef", 
				"name_ar" => "أبي يوسف" 
			], 
			[
				"id" => 490, 
				"city_id" => 15, 
				"name_en" => "Ain-El-Hammam", 
				"name_fr" => "Ain-El-Hammam", 
				"name_ar" => "عين الحمام" 
			], 
			[
				"id" => 502, 
				"city_id" => 15, 
				"name_en" => "Ait-Yahia", 
				"name_fr" => "Ait-Yahia", 
				"name_ar" => "أيت يحيى" 
			], 
			[
				"id" => 503, 
				"city_id" => 15, 
				"name_en" => "Akbil", 
				"name_fr" => "Akbil", 
				"name_ar" => "اقبيل" 
			], 
			[
				"id" => 514, 
				"city_id" => 15, 
				"name_en" => "Boudjima", 
				"name_fr" => "Boudjima", 
				"name_ar" => "بوجيمة" 
			], 
			[
				"id" => 532, 
				"city_id" => 15, 
				"name_en" => "Makouda", 
				"name_fr" => "Makouda", 
				"name_ar" => "ماكودة" 
			], 
			[
				"id" => 491, 
				"city_id" => 15, 
				"name_en" => "Ain-Zaouia", 
				"name_fr" => "Ain-Zaouia", 
				"name_ar" => "عين الزاوية" 
			], 
			[
				"id" => 496, 
				"city_id" => 15, 
				"name_en" => "Ait Yahia Moussa", 
				"name_fr" => "Ait Yahia Moussa", 
				"name_ar" => "أيت يحي موسى" 
			], 
			[
				"id" => 518, 
				"city_id" => 15, 
				"name_en" => "Draa-El-Mizan", 
				"name_fr" => "Draa-El-Mizan", 
				"name_ar" => "ذراع الميزان" 
			], 
			[
				"id" => 520, 
				"city_id" => 15, 
				"name_en" => "Frikat", 
				"name_fr" => "Frikat", 
				"name_ar" => "فريقات" 
			], 
			[
				"id" => 536, 
				"city_id" => 15, 
				"name_en" => "M'kira", 
				"name_fr" => "M'kira", 
				"name_ar" => "مكيرة" 
			], 
			[
				"id" => 548, 
				"city_id" => 15, 
				"name_en" => "Tizi-Gheniff", 
				"name_fr" => "Tizi-Gheniff", 
				"name_ar" => "تيزي غنيف" 
			], 
			[
				"id" => 552, 
				"city_id" => 15, 
				"name_en" => "Yatafene", 
				"name_fr" => "Yatafene", 
				"name_ar" => "يطــافن" 
			], 
			[
				"id" => 526, 
				"city_id" => 15, 
				"name_en" => "Illilten", 
				"name_fr" => "Illilten", 
				"name_ar" => "إيلـيــلتـن" 
			], 
			[
				"id" => 528, 
				"city_id" => 15, 
				"name_en" => "Imsouhal", 
				"name_fr" => "Imsouhal", 
				"name_ar" => "إمســوحال" 
			], 
			[
				"id" => 506, 
				"city_id" => 15, 
				"name_en" => "Azazga", 
				"name_fr" => "Azazga", 
				"name_ar" => "عزازقة" 
			], 
			[
				"id" => 519, 
				"city_id" => 15, 
				"name_en" => "Freha", 
				"name_fr" => "Freha", 
				"name_ar" => "فريحة" 
			], 
			[
				"id" => 524, 
				"city_id" => 15, 
				"name_en" => "Ifigha", 
				"name_fr" => "Ifigha", 
				"name_ar" => "إيفيغاء" 
			], 
			[
				"id" => 551, 
				"city_id" => 15, 
				"name_en" => "Yakourene", 
				"name_fr" => "Yakourene", 
				"name_ar" => "إعــكورن" 
			], 
			[
				"id" => 553, 
				"city_id" => 15, 
				"name_en" => "Zekri", 
				"name_fr" => "Zekri", 
				"name_ar" => "زكري" 
			], 
			[
				"id" => 492, 
				"city_id" => 15, 
				"name_en" => "Ait Aggouacha", 
				"name_fr" => "Ait Aggouacha", 
				"name_ar" => "أيت عقـواشة" 
			], 
			[
				"id" => 529, 
				"city_id" => 15, 
				"name_en" => "Irdjen", 
				"name_fr" => "Irdjen", 
				"name_ar" => "إيرجـــن" 
			], 
			[
				"id" => 530, 
				"city_id" => 15, 
				"name_en" => "Larbaa Nath Irathen", 
				"name_fr" => "Larbaa Nath Irathen", 
				"name_ar" => "الأربعــاء ناث إيراثن" 
			], 
			[
				"id" => 500, 
				"city_id" => 15, 
				"name_en" => "Ait-Oumalou", 
				"name_fr" => "Ait-Oumalou", 
				"name_ar" => "أيت  أومالو" 
			], 
			[
				"id" => 550, 
				"city_id" => 15, 
				"name_en" => "Tizi-Rached", 
				"name_fr" => "Tizi-Rached", 
				"name_ar" => "تيزي راشد" 
			], 
			[
				"id" => 497, 
				"city_id" => 15, 
				"name_en" => "Ait-Aissa-Mimoun", 
				"name_fr" => "Ait-Aissa-Mimoun", 
				"name_ar" => "أيت عيسى ميمون" 
			], 
			[
				"id" => 539, 
				"city_id" => 15, 
				"name_en" => "Ouaguenoun", 
				"name_fr" => "Ouaguenoun", 
				"name_ar" => "واقنون" 
			], 
			[
				"id" => 545, 
				"city_id" => 15, 
				"name_en" => "Timizart", 
				"name_fr" => "Timizart", 
				"name_ar" => "تيمـيزار" 
			], 
			[
				"id" => 531, 
				"city_id" => 15, 
				"name_en" => "Maatkas", 
				"name_fr" => "Maatkas", 
				"name_ar" => "معـــاتقة" 
			], 
			[
				"id" => 542, 
				"city_id" => 15, 
				"name_en" => "Souk-El-Tenine", 
				"name_fr" => "Souk-El-Tenine", 
				"name_ar" => "سوق الإثنين" 
			], 
			[
				"id" => 499, 
				"city_id" => 15, 
				"name_en" => "Ait-Mahmoud", 
				"name_fr" => "Ait-Mahmoud", 
				"name_ar" => "أيت محمود" 
			], 
			[
				"id" => 508, 
				"city_id" => 15, 
				"name_en" => "Beni Zmenzer", 
				"name_fr" => "Beni Zmenzer", 
				"name_ar" => "بنــــي زمنزار" 
			], 
			[
				"id" => 523, 
				"city_id" => 15, 
				"name_en" => "Iferhounene", 
				"name_fr" => "Iferhounene", 
				"name_ar" => "إفــرحــونان" 
			], 
			[
				"id" => 516, 
				"city_id" => 15, 
				"name_en" => "Bouzeguene", 
				"name_fr" => "Bouzeguene", 
				"name_ar" => "بوزقــن" 
			], 
			[
				"id" => 588, 
				"city_id" => 16, 
				"name_en" => "Hussein Dey", 
				"name_fr" => "Hussein Dey", 
				"name_ar" => "حسين داي" 
			], 
			[
				"id" => 592, 
				"city_id" => 16, 
				"name_en" => "Les Eucalyptus", 
				"name_fr" => "Les Eucalyptus", 
				"name_ar" => "الكاليتوس" 
			], 
			[
				"id" => 606, 
				"city_id" => 16, 
				"name_en" => "Sidi Moussa", 
				"name_fr" => "Sidi Moussa", 
				"name_ar" => "سيدي موسى" 
			], 
			[
				"id" => 591, 
				"city_id" => 16, 
				"name_en" => "Kouba", 
				"name_fr" => "Kouba", 
				"name_ar" => "القبة" 
			], 
			[
				"id" => 594, 
				"city_id" => 16, 
				"name_en" => "Mohamed Belouzdad", 
				"name_fr" => "Mohamed Belouzdad", 
				"name_ar" => "محمد بلوزداد" 
			], 
			[
				"id" => 555, 
				"city_id" => 16, 
				"name_en" => "Ain Taya", 
				"name_fr" => "Ain Taya", 
				"name_ar" => "عين طاية" 
			], 
			[
				"id" => 558, 
				"city_id" => 16, 
				"name_en" => "Bab Ezzouar", 
				"name_fr" => "Bab Ezzouar", 
				"name_ar" => "باب الزوار" 
			], 
			[
				"id" => 569, 
				"city_id" => 16, 
				"name_en" => "Bordj El Kiffan", 
				"name_fr" => "Bordj El Kiffan", 
				"name_ar" => "برج الكيفان" 
			], 
			[
				"id" => 574, 
				"city_id" => 16, 
				"name_en" => "Dar El Beida", 
				"name_fr" => "Dar El Beida", 
				"name_ar" => "الدار البيضاء" 
			], 
			[
				"id" => 584, 
				"city_id" => 16, 
				"name_en" => "El Marsa", 
				"name_fr" => "El Marsa", 
				"name_ar" => "المرسى" 
			], 
			[
				"id" => 595, 
				"city_id" => 16, 
				"name_en" => "Mohammadia", 
				"name_fr" => "Mohammadia", 
				"name_ar" => "المحمدية" 
			], 
			[
				"id" => 566, 
				"city_id" => 16, 
				"name_en" => "Bir Touta", 
				"name_fr" => "Bir Touta", 
				"name_ar" => "بئر توتة" 
			], 
			[
				"id" => 598, 
				"city_id" => 16, 
				"name_en" => "Ouled Chebel", 
				"name_fr" => "Ouled Chebel", 
				"name_ar" => "اولاد شبل" 
			], 
			[
				"id" => 609, 
				"city_id" => 16, 
				"name_en" => "Tessala El Merdja", 
				"name_fr" => "Tessala El Merdja", 
				"name_ar" => "تسالة المرجة" 
			], 
			[
				"id" => 587, 
				"city_id" => 16, 
				"name_en" => "Herraoua", 
				"name_fr" => "Herraoua", 
				"name_ar" => "هراوة" 
			], 
			[
				"id" => 602, 
				"city_id" => 16, 
				"name_en" => "Reghaia", 
				"name_fr" => "Reghaia", 
				"name_ar" => "رغاية" 
			], 
			[
				"id" => 603, 
				"city_id" => 16, 
				"name_en" => "Rouiba", 
				"name_fr" => "Rouiba", 
				"name_ar" => "الرويبة" 
			], 
			[
				"id" => 593, 
				"city_id" => 16, 
				"name_en" => "Maalma", 
				"name_fr" => "Maalma", 
				"name_ar" => "المعالمة" 
			], 
			[
				"id" => 600, 
				"city_id" => 16, 
				"name_en" => "Rahmania", 
				"name_fr" => "Rahmania", 
				"name_ar" => "الرحمانية" 
			], 
			[
				"id" => 607, 
				"city_id" => 16, 
				"name_en" => "Souidania", 
				"name_fr" => "Souidania", 
				"name_ar" => "سويدانية" 
			], 
			[
				"id" => 608, 
				"city_id" => 16, 
				"name_en" => "Staoueli", 
				"name_fr" => "Staoueli", 
				"name_ar" => "سطاوالي" 
			], 
			[
				"id" => 610, 
				"city_id" => 16, 
				"name_en" => "Zeralda", 
				"name_fr" => "Zeralda", 
				"name_ar" => "زرالدة" 
			], 
			[
				"id" => 559, 
				"city_id" => 16, 
				"name_en" => "Baba Hassen", 
				"name_fr" => "Baba Hassen", 
				"name_ar" => "بابا حسن" 
			], 
			[
				"id" => 577, 
				"city_id" => 16, 
				"name_en" => "Douira", 
				"name_fr" => "Douira", 
				"name_ar" => "الدويرة" 
			], 
			[
				"id" => 578, 
				"city_id" => 16, 
				"name_en" => "Draria", 
				"name_fr" => "Draria", 
				"name_ar" => "الدرارية" 
			], 
			[
				"id" => 579, 
				"city_id" => 16, 
				"name_en" => "El Achour", 
				"name_fr" => "El Achour", 
				"name_ar" => "العاشور" 
			], 
			[
				"id" => 590, 
				"city_id" => 16, 
				"name_en" => "Khraissia", 
				"name_fr" => "Khraissia", 
				"name_ar" => "الخرايسية" 
			], 
			[
				"id" => 554, 
				"city_id" => 16, 
				"name_en" => "Ain Benian", 
				"name_fr" => "Ain Benian", 
				"name_ar" => "عين بنيان" 
			], 
			[
				"id" => 573, 
				"city_id" => 16, 
				"name_en" => "Cheraga", 
				"name_fr" => "Cheraga", 
				"name_ar" => "الشراقة" 
			], 
			[
				"id" => 575, 
				"city_id" => 16, 
				"name_en" => "Dely Ibrahim", 
				"name_fr" => "Dely Ibrahim", 
				"name_ar" => "دالي ابراهيم" 
			], 
			[
				"id" => 586, 
				"city_id" => 16, 
				"name_en" => "Hammamet", 
				"name_fr" => "Hammamet", 
				"name_ar" => "الحمامات" 
			], 
			[
				"id" => 599, 
				"city_id" => 16, 
				"name_en" => "Ouled Fayet", 
				"name_fr" => "Ouled Fayet", 
				"name_ar" => "اولاد فايت" 
			], 
			[
				"id" => 556, 
				"city_id" => 16, 
				"name_en" => "Alger Centre", 
				"name_fr" => "Alger Centre", 
				"name_ar" => "الجزائر الوسطى" 
			], 
			[
				"id" => 582, 
				"city_id" => 16, 
				"name_en" => "El Madania", 
				"name_fr" => "El Madania", 
				"name_ar" => "المدنية" 
			], 
			[
				"id" => 585, 
				"city_id" => 16, 
				"name_en" => "El Mouradia", 
				"name_fr" => "El Mouradia", 
				"name_ar" => "المرادية" 
			], 
			[
				"id" => 605, 
				"city_id" => 16, 
				"name_en" => "Sidi M'hamed", 
				"name_fr" => "Sidi M'hamed", 
				"name_ar" => "سيدي امحمد" 
			], 
			[
				"id" => 604, 
				"city_id" => 16, 
				"name_en" => "Sehaoula", 
				"name_fr" => "Sehaoula", 
				"name_ar" => "السحاولة" 
			], 
			[
				"id" => 567, 
				"city_id" => 16, 
				"name_en" => "Bologhine Ibnou Ziri", 
				"name_fr" => "Bologhine Ibnou Ziri", 
				"name_ar" => "بولوغين بن زيري" 
			], 
			[
				"id" => 572, 
				"city_id" => 16, 
				"name_en" => "Casbah", 
				"name_fr" => "Casbah", 
				"name_ar" => "القصبة" 
			], 
			[
				"id" => 596, 
				"city_id" => 16, 
				"name_en" => "Oued Koriche", 
				"name_fr" => "Oued Koriche", 
				"name_ar" => "وادي قريش" 
			], 
			[
				"id" => 601, 
				"city_id" => 16, 
				"name_en" => "Rais Hamidou", 
				"name_fr" => "Rais Hamidou", 
				"name_ar" => "الرايس حميدو" 
			], 
			[
				"id" => 564, 
				"city_id" => 16, 
				"name_en" => "Bir Mourad Rais", 
				"name_fr" => "Bir Mourad Rais", 
				"name_ar" => "بئر مراد رايس" 
			], 
			[
				"id" => 565, 
				"city_id" => 16, 
				"name_en" => "Birkhadem", 
				"name_fr" => "Birkhadem", 
				"name_ar" => "بئر خادم" 
			], 
			[
				"id" => 576, 
				"city_id" => 16, 
				"name_en" => "Djasr Kasentina", 
				"name_fr" => "Djasr Kasentina", 
				"name_ar" => "جسر قسنطينة" 
			], 
			[
				"id" => 589, 
				"city_id" => 16, 
				"name_en" => "Hydra", 
				"name_fr" => "Hydra", 
				"name_ar" => "حيدرة" 
			], 
			[
				"id" => 583, 
				"city_id" => 16, 
				"name_en" => "El Magharia", 
				"name_fr" => "El Magharia", 
				"name_ar" => "المغارية" 
			], 
			[
				"id" => 562, 
				"city_id" => 16, 
				"name_en" => "Ben Aknoun", 
				"name_fr" => "Ben Aknoun", 
				"name_ar" => "ابن عكنون" 
			], 
			[
				"id" => 563, 
				"city_id" => 16, 
				"name_en" => "Beni Messous", 
				"name_fr" => "Beni Messous", 
				"name_ar" => "بني مسوس" 
			], 
			[
				"id" => 571, 
				"city_id" => 16, 
				"name_en" => "Bouzareah", 
				"name_fr" => "Bouzareah", 
				"name_ar" => "بوزريعة" 
			], 
			[
				"id" => 580, 
				"city_id" => 16, 
				"name_en" => "El Biar", 
				"name_fr" => "El Biar", 
				"name_ar" => "الابيار" 
			], 
			[
				"id" => 560, 
				"city_id" => 16, 
				"name_en" => "Bachedjerah", 
				"name_fr" => "Bachedjerah", 
				"name_ar" => "باش جراح" 
			], 
			[
				"id" => 570, 
				"city_id" => 16, 
				"name_en" => "Bourouba", 
				"name_fr" => "Bourouba", 
				"name_ar" => "بوروبة" 
			], 
			[
				"id" => 581, 
				"city_id" => 16, 
				"name_en" => "El Harrach", 
				"name_fr" => "El Harrach", 
				"name_ar" => "الحراش" 
			], 
			[
				"id" => 597, 
				"city_id" => 16, 
				"name_en" => "Oued Smar", 
				"name_fr" => "Oued Smar", 
				"name_ar" => "وادي السمار" 
			], 
			[
				"id" => 561, 
				"city_id" => 16, 
				"name_en" => "Baraki", 
				"name_fr" => "Baraki", 
				"name_ar" => "براقي" 
			], 
			[
				"id" => 568, 
				"city_id" => 16, 
				"name_en" => "Bordj El Bahri", 
				"name_fr" => "Bordj El Bahri", 
				"name_ar" => "برج البحري" 
			], 
			[
				"id" => 557, 
				"city_id" => 16, 
				"name_en" => "Bab El Oued", 
				"name_fr" => "Bab El Oued", 
				"name_ar" => "باب الوادي" 
			], 
			[
				"id" => 634, 
				"city_id" => 17, 
				"name_en" => "Hassi El Euch", 
				"name_fr" => "Hassi El Euch", 
				"name_ar" => "حاسي العش" 
			], 
			[
				"id" => 612, 
				"city_id" => 17, 
				"name_en" => "Ain El Ibel", 
				"name_fr" => "Ain El Ibel", 
				"name_ar" => "عين الإبل" 
			], 
			[
				"id" => 626, 
				"city_id" => 17, 
				"name_en" => "El Guedid", 
				"name_fr" => "El Guedid", 
				"name_ar" => "القديد" 
			], 
			[
				"id" => 621, 
				"city_id" => 17, 
				"name_en" => "Charef", 
				"name_fr" => "Charef", 
				"name_ar" => "الشارف" 
			], 
			[
				"id" => 618, 
				"city_id" => 17, 
				"name_en" => "Benyagoub", 
				"name_fr" => "Benyagoub", 
				"name_ar" => "بن يعقوب" 
			], 
			[
				"id" => 642, 
				"city_id" => 17, 
				"name_en" => "Sidi Baizid", 
				"name_fr" => "Sidi Baizid", 
				"name_ar" => "سيدي بايزيد" 
			], 
			[
				"id" => 637, 
				"city_id" => 17, 
				"name_en" => "M'liliha", 
				"name_fr" => "M'liliha", 
				"name_ar" => "مليليحة" 
			], 
			[
				"id" => 622, 
				"city_id" => 17, 
				"name_en" => "Dar Chioukh", 
				"name_fr" => "Dar Chioukh", 
				"name_ar" => "دار الشيوخ" 
			], 
			[
				"id" => 644, 
				"city_id" => 17, 
				"name_en" => "Taadmit", 
				"name_fr" => "Taadmit", 
				"name_ar" => "تعظميت" 
			], 
			[
				"id" => 632, 
				"city_id" => 17, 
				"name_en" => "Had Sahary", 
				"name_fr" => "Had Sahary", 
				"name_ar" => "حد الصحاري" 
			], 
			[
				"id" => 620, 
				"city_id" => 17, 
				"name_en" => "Bouira Lahdab", 
				"name_fr" => "Bouira Lahdab", 
				"name_ar" => "بويرة الأحداب" 
			], 
			[
				"id" => 613, 
				"city_id" => 17, 
				"name_en" => "Ain Fekka", 
				"name_fr" => "Ain Fekka", 
				"name_ar" => "عين فقه" 
			], 
			[
				"id" => 643, 
				"city_id" => 17, 
				"name_en" => "Sidi Laadjel", 
				"name_fr" => "Sidi Laadjel", 
				"name_ar" => "سيدي لعجال" 
			], 
			[
				"id" => 635, 
				"city_id" => 17, 
				"name_en" => "Hassi Fedoul", 
				"name_fr" => "Hassi Fedoul", 
				"name_ar" => "حاسي فدول" 
			], 
			[
				"id" => 628, 
				"city_id" => 17, 
				"name_en" => "El Khemis", 
				"name_fr" => "El Khemis", 
				"name_ar" => "الخميس" 
			], 
			[
				"id" => 641, 
				"city_id" => 17, 
				"name_en" => "Selmana", 
				"name_fr" => "Selmana", 
				"name_ar" => "سلمانة" 
			], 
			[
				"id" => 640, 
				"city_id" => 17, 
				"name_en" => "Sed Rahal", 
				"name_fr" => "Sed Rahal", 
				"name_ar" => "سد الرحال" 
			], 
			[
				"id" => 636, 
				"city_id" => 17, 
				"name_en" => "Messaad", 
				"name_fr" => "Messaad", 
				"name_ar" => "مسعد" 
			], 
			[
				"id" => 631, 
				"city_id" => 17, 
				"name_en" => "Guettara", 
				"name_fr" => "Guettara", 
				"name_ar" => "قطارة" 
			], 
			[
				"id" => 623, 
				"city_id" => 17, 
				"name_en" => "Deldoul", 
				"name_fr" => "Deldoul", 
				"name_ar" => "دلدول" 
			], 
			[
				"id" => 646, 
				"city_id" => 17, 
				"name_en" => "Zaccar", 
				"name_fr" => "Zaccar", 
				"name_ar" => "زكار" 
			], 
			[
				"id" => 625, 
				"city_id" => 17, 
				"name_en" => "Douis", 
				"name_fr" => "Douis", 
				"name_ar" => "دويس" 
			], 
			[
				"id" => 627, 
				"city_id" => 17, 
				"name_en" => "El Idrissia", 
				"name_fr" => "El Idrissia", 
				"name_ar" => "الادريسية" 
			], 
			[
				"id" => 611, 
				"city_id" => 17, 
				"name_en" => "Ain Chouhada", 
				"name_fr" => "Ain Chouhada", 
				"name_ar" => "عين الشهداء" 
			], 
			[
				"id" => 624, 
				"city_id" => 17, 
				"name_en" => "Djelfa", 
				"name_fr" => "Djelfa", 
				"name_ar" => "الجلفة" 
			], 
			[
				"id" => 619, 
				"city_id" => 17, 
				"name_en" => "Birine", 
				"name_fr" => "Birine", 
				"name_ar" => "بيرين" 
			], 
			[
				"id" => 639, 
				"city_id" => 17, 
				"name_en" => "Oum Laadham", 
				"name_fr" => "Oum Laadham", 
				"name_ar" => "أم العظام" 
			], 
			[
				"id" => 629, 
				"city_id" => 17, 
				"name_en" => "Faidh El Botma", 
				"name_fr" => "Faidh El Botma", 
				"name_ar" => "فيض البطمة" 
			], 
			[
				"id" => 616, 
				"city_id" => 17, 
				"name_en" => "Amourah", 
				"name_fr" => "Amourah", 
				"name_ar" => "عمورة" 
			], 
			[
				"id" => 645, 
				"city_id" => 17, 
				"name_en" => "Zaafrane", 
				"name_fr" => "Zaafrane", 
				"name_ar" => "زعفران" 
			], 
			[
				"id" => 630, 
				"city_id" => 17, 
				"name_en" => "Guernini", 
				"name_fr" => "Guernini", 
				"name_ar" => "قرنيني" 
			], 
			[
				"id" => 615, 
				"city_id" => 17, 
				"name_en" => "Ain Oussera", 
				"name_fr" => "Ain Oussera", 
				"name_ar" => "عين وسارة" 
			], 
			[
				"id" => 617, 
				"city_id" => 17, 
				"name_en" => "Benhar", 
				"name_fr" => "Benhar", 
				"name_ar" => "بنهار" 
			], 
			[
				"id" => 614, 
				"city_id" => 17, 
				"name_en" => "Ain Maabed", 
				"name_fr" => "Ain Maabed", 
				"name_ar" => "عين معبد" 
			], 
			[
				"id" => 633, 
				"city_id" => 17, 
				"name_en" => "Hassi Bahbah", 
				"name_fr" => "Hassi Bahbah", 
				"name_ar" => "حاسي بحبح" 
			], 
			[
				"id" => 638, 
				"city_id" => 17, 
				"name_en" => "Moudjebara", 
				"name_fr" => "Moudjebara", 
				"name_ar" => "مجبارة" 
			], 
			[
				"id" => 662, 
				"city_id" => 18, 
				"name_en" => "Jijel", 
				"name_fr" => "Jijel", 
				"name_ar" => "جيجل" 
			], 
			[
				"id" => 656, 
				"city_id" => 18, 
				"name_en" => "El Aouana", 
				"name_fr" => "El Aouana", 
				"name_ar" => "العوانة" 
			], 
			[
				"id" => 668, 
				"city_id" => 18, 
				"name_en" => "Selma Benziada", 
				"name_fr" => "Selma Benziada", 
				"name_ar" => "سلمى بن زيادة" 
			], 
			[
				"id" => 660, 
				"city_id" => 18, 
				"name_en" => "Erraguene Souissi", 
				"name_fr" => "Erraguene Souissi", 
				"name_ar" => "أراقن سويسي" 
			], 
			[
				"id" => 650, 
				"city_id" => 18, 
				"name_en" => "Boussif Ouled Askeur", 
				"name_fr" => "Boussif Ouled Askeur", 
				"name_ar" => "بوسيف أولاد عسكر" 
			], 
			[
				"id" => 674, 
				"city_id" => 18, 
				"name_en" => "Ziama Mansouriah", 
				"name_fr" => "Ziama Mansouriah", 
				"name_ar" => "زيامة منصورية" 
			], 
			[
				"id" => 651, 
				"city_id" => 18, 
				"name_en" => "Chahna", 
				"name_fr" => "Chahna", 
				"name_ar" => "الشحنة" 
			], 
			[
				"id" => 659, 
				"city_id" => 18, 
				"name_en" => "Emir Abdelkader", 
				"name_fr" => "Emir Abdelkader", 
				"name_ar" => "الامير عبد القادر" 
			], 
			[
				"id" => 665, 
				"city_id" => 18, 
				"name_en" => "Oudjana", 
				"name_fr" => "Oudjana", 
				"name_ar" => "وجانة" 
			], 
			[
				"id" => 672, 
				"city_id" => 18, 
				"name_en" => "Taher", 
				"name_fr" => "Taher", 
				"name_ar" => "الطاهير" 
			], 
			[
				"id" => 652, 
				"city_id" => 18, 
				"name_en" => "Chekfa", 
				"name_fr" => "Chekfa", 
				"name_ar" => "الشقفة" 
			], 
			[
				"id" => 657, 
				"city_id" => 18, 
				"name_en" => "El Kennar Nouchfi", 
				"name_fr" => "El Kennar Nouchfi", 
				"name_ar" => "القنار نشفي" 
			], 
			[
				"id" => 670, 
				"city_id" => 18, 
				"name_en" => "Sidi Abdelaziz", 
				"name_fr" => "Sidi Abdelaziz", 
				"name_ar" => "سيدي عبد العزيز" 
			], 
			[
				"id" => 658, 
				"city_id" => 18, 
				"name_en" => "El Milia", 
				"name_fr" => "El Milia", 
				"name_ar" => "الميلية" 
			], 
			[
				"id" => 667, 
				"city_id" => 18, 
				"name_en" => "Ouled Yahia Khadrouch", 
				"name_fr" => "Ouled Yahia Khadrouch", 
				"name_ar" => "أولاد يحيى خدروش" 
			], 
			[
				"id" => 666, 
				"city_id" => 18, 
				"name_en" => "Ouled Rabah", 
				"name_fr" => "Ouled Rabah", 
				"name_ar" => "أولاد رابح" 
			], 
			[
				"id" => 671, 
				"city_id" => 18, 
				"name_en" => "Sidi Marouf", 
				"name_fr" => "Sidi Marouf", 
				"name_ar" => "سيدي معروف" 
			], 
			[
				"id" => 661, 
				"city_id" => 18, 
				"name_en" => "Ghebala", 
				"name_fr" => "Ghebala", 
				"name_ar" => "غبالة" 
			], 
			[
				"id" => 669, 
				"city_id" => 18, 
				"name_en" => "Settara", 
				"name_fr" => "Settara", 
				"name_ar" => "السطارة" 
			], 
			[
				"id" => 649, 
				"city_id" => 18, 
				"name_en" => "Bouraoui Belhadef", 
				"name_fr" => "Bouraoui Belhadef", 
				"name_ar" => "بوراوي بلهادف" 
			], 
			[
				"id" => 655, 
				"city_id" => 18, 
				"name_en" => "El Ancer", 
				"name_fr" => "El Ancer", 
				"name_ar" => "العنصر" 
			], 
			[
				"id" => 664, 
				"city_id" => 18, 
				"name_en" => "Khiri Oued Adjoul", 
				"name_fr" => "Khiri Oued Adjoul", 
				"name_ar" => "خيري واد عجول" 
			], 
			[
				"id" => 654, 
				"city_id" => 18, 
				"name_en" => "Djimla", 
				"name_fr" => "Djimla", 
				"name_ar" => "جيملة" 
			], 
			[
				"id" => 663, 
				"city_id" => 18, 
				"name_en" => "Kaous", 
				"name_fr" => "Kaous", 
				"name_ar" => "قاوس" 
			], 
			[
				"id" => 673, 
				"city_id" => 18, 
				"name_en" => "Texenna", 
				"name_fr" => "Texenna", 
				"name_ar" => "تاكسنة" 
			], 
			[
				"id" => 647, 
				"city_id" => 18, 
				"name_en" => "Bordj T'har", 
				"name_fr" => "Bordj T'har", 
				"name_ar" => "برج الطهر" 
			], 
			[
				"id" => 648, 
				"city_id" => 18, 
				"name_en" => "Boudria Beniyadjis", 
				"name_fr" => "Boudria Beniyadjis", 
				"name_ar" => "بودريعة بني  ياجيس" 
			], 
			[
				"id" => 653, 
				"city_id" => 18, 
				"name_en" => "Djemaa Beni Habibi", 
				"name_fr" => "Djemaa Beni Habibi", 
				"name_ar" => "الجمعة بني حبيبي" 
			], 
			[
				"id" => 726, 
				"city_id" => 19, 
				"name_en" => "Rosfa", 
				"name_fr" => "Rosfa", 
				"name_ar" => "الرصفة" 
			], 
			[
				"id" => 721, 
				"city_id" => 19, 
				"name_en" => "Oued El Bared", 
				"name_fr" => "Oued El Bared", 
				"name_ar" => "واد البارد" 
			], 
			[
				"id" => 734, 
				"city_id" => 19, 
				"name_en" => "Tizi N'bechar", 
				"name_fr" => "Tizi N'bechar", 
				"name_ar" => "تيزي نبشار" 
			], 
			[
				"id" => 720, 
				"city_id" => 19, 
				"name_en" => "Mezloug", 
				"name_fr" => "Mezloug", 
				"name_ar" => "مزلوق" 
			], 
			[
				"id" => 709, 
				"city_id" => 19, 
				"name_en" => "Guellal", 
				"name_fr" => "Guellal", 
				"name_ar" => "قلال" 
			], 
			[
				"id" => 717, 
				"city_id" => 19, 
				"name_en" => "Kasr El Abtal", 
				"name_fr" => "Kasr El Abtal", 
				"name_ar" => "قصر الابطال" 
			], 
			[
				"id" => 724, 
				"city_id" => 19, 
				"name_en" => "Ouled Si Ahmed", 
				"name_fr" => "Ouled Si Ahmed", 
				"name_ar" => "أولاد سي أحمد" 
			], 
			[
				"id" => 684, 
				"city_id" => 19, 
				"name_en" => "Ait Naoual Mezada", 
				"name_fr" => "Ait Naoual Mezada", 
				"name_ar" => "أيت نوال مزادة" 
			], 
			[
				"id" => 685, 
				"city_id" => 19, 
				"name_en" => "Ait-Tizi", 
				"name_fr" => "Ait-Tizi", 
				"name_ar" => "ايت تيزي" 
			], 
			[
				"id" => 699, 
				"city_id" => 19, 
				"name_en" => "Bouandas", 
				"name_fr" => "Bouandas", 
				"name_ar" => "بوعنداس" 
			], 
			[
				"id" => 701, 
				"city_id" => 19, 
				"name_en" => "Bousselam", 
				"name_fr" => "Bousselam", 
				"name_ar" => "بوسلام" 
			], 
			[
				"id" => 713, 
				"city_id" => 19, 
				"name_en" => "Hamam Soukhna", 
				"name_fr" => "Hamam Soukhna", 
				"name_ar" => "حمام السخنة" 
			], 
			[
				"id" => 732, 
				"city_id" => 19, 
				"name_en" => "Taya", 
				"name_fr" => "Taya", 
				"name_ar" => "الطاية" 
			], 
			[
				"id" => 733, 
				"city_id" => 19, 
				"name_en" => "Tella", 
				"name_fr" => "Tella", 
				"name_ar" => "التلة" 
			], 
			[
				"id" => 680, 
				"city_id" => 19, 
				"name_en" => "Ain Oulmene", 
				"name_fr" => "Ain Oulmene", 
				"name_ar" => "عين ولمان" 
			], 
			[
				"id" => 702, 
				"city_id" => 19, 
				"name_en" => "Boutaleb", 
				"name_fr" => "Boutaleb", 
				"name_ar" => "بوطالب" 
			], 
			[
				"id" => 714, 
				"city_id" => 19, 
				"name_en" => "Hamma", 
				"name_fr" => "Hamma", 
				"name_ar" => "الحامة" 
			], 
			[
				"id" => 725, 
				"city_id" => 19, 
				"name_en" => "Ouled Tebben", 
				"name_fr" => "Ouled Tebben", 
				"name_ar" => "أولاد تبان" 
			], 
			[
				"id" => 686, 
				"city_id" => 19, 
				"name_en" => "Amoucha", 
				"name_fr" => "Amoucha", 
				"name_ar" => "عموشة" 
			], 
			[
				"id" => 727, 
				"city_id" => 19, 
				"name_en" => "Salah Bey", 
				"name_fr" => "Salah Bey", 
				"name_ar" => "صالح باي" 
			], 
			[
				"id" => 677, 
				"city_id" => 19, 
				"name_en" => "Ain Azel", 
				"name_fr" => "Ain Azel", 
				"name_ar" => "عين أزال" 
			], 
			[
				"id" => 679, 
				"city_id" => 19, 
				"name_en" => "Ain Lahdjar", 
				"name_fr" => "Ain Lahdjar", 
				"name_ar" => "عين الحجر" 
			], 
			[
				"id" => 689, 
				"city_id" => 19, 
				"name_en" => "Beidha Bordj", 
				"name_fr" => "Beidha Bordj", 
				"name_ar" => "بيضاء برج" 
			], 
			[
				"id" => 697, 
				"city_id" => 19, 
				"name_en" => "Bir Haddada", 
				"name_fr" => "Bir Haddada", 
				"name_ar" => "بئر حدادة" 
			], 
			[
				"id" => 711, 
				"city_id" => 19, 
				"name_en" => "Guenzet", 
				"name_fr" => "Guenzet", 
				"name_ar" => "قنزات" 
			], 
			[
				"id" => 716, 
				"city_id" => 19, 
				"name_en" => "Harbil", 
				"name_fr" => "Harbil", 
				"name_ar" => "حربيل" 
			], 
			[
				"id" => 682, 
				"city_id" => 19, 
				"name_en" => "Ain-Roua", 
				"name_fr" => "Ain-Roua", 
				"name_ar" => "عين الروى" 
			], 
			[
				"id" => 694, 
				"city_id" => 19, 
				"name_en" => "Beni Oussine", 
				"name_fr" => "Beni Oussine", 
				"name_ar" => "بني وسين" 
			], 
			[
				"id" => 707, 
				"city_id" => 19, 
				"name_en" => "El Ouricia", 
				"name_fr" => "El Ouricia", 
				"name_ar" => "أوريسيا" 
			], 
			[
				"id" => 700, 
				"city_id" => 19, 
				"name_en" => "Bougaa", 
				"name_fr" => "Bougaa", 
				"name_ar" => "بوقاعة" 
			], 
			[
				"id" => 705, 
				"city_id" => 19, 
				"name_en" => "Draa-Kebila", 
				"name_fr" => "Draa-Kebila", 
				"name_ar" => "ذراع قبيلة" 
			], 
			[
				"id" => 715, 
				"city_id" => 19, 
				"name_en" => "Hammam Guergour", 
				"name_fr" => "Hammam Guergour", 
				"name_ar" => "حمام قرقور" 
			], 
			[
				"id" => 729, 
				"city_id" => 19, 
				"name_en" => "Setif", 
				"name_fr" => "Setif", 
				"name_ar" => "سطيف" 
			], 
			[
				"id" => 678, 
				"city_id" => 19, 
				"name_en" => "Ain El Kebira", 
				"name_fr" => "Ain El Kebira", 
				"name_ar" => "عين الكبيرة" 
			], 
			[
				"id" => 703, 
				"city_id" => 19, 
				"name_en" => "Dehamcha", 
				"name_fr" => "Dehamcha", 
				"name_ar" => "الدهامشة" 
			], 
			[
				"id" => 722, 
				"city_id" => 19, 
				"name_en" => "Ouled Addouane", 
				"name_fr" => "Ouled Addouane", 
				"name_ar" => "أولاد عدوان" 
			], 
			[
				"id" => 683, 
				"city_id" => 19, 
				"name_en" => "Ain-Sebt", 
				"name_fr" => "Ain-Sebt", 
				"name_ar" => "عين السبت" 
			], 
			[
				"id" => 695, 
				"city_id" => 19, 
				"name_en" => "Beni-Aziz", 
				"name_fr" => "Beni-Aziz", 
				"name_ar" => "بني عزيز" 
			], 
			[
				"id" => 718, 
				"city_id" => 19, 
				"name_en" => "Maaouia", 
				"name_fr" => "Maaouia", 
				"name_ar" => "معاوية" 
			], 
			[
				"id" => 690, 
				"city_id" => 19, 
				"name_en" => "Bellaa", 
				"name_fr" => "Bellaa", 
				"name_ar" => "بلاعة" 
			], 
			[
				"id" => 698, 
				"city_id" => 19, 
				"name_en" => "Bir-El-Arch", 
				"name_fr" => "Bir-El-Arch", 
				"name_ar" => "بئر العرش" 
			], 
			[
				"id" => 708, 
				"city_id" => 19, 
				"name_en" => "El-Ouldja", 
				"name_fr" => "El-Ouldja", 
				"name_ar" => "الولجة" 
			], 
			[
				"id" => 730, 
				"city_id" => 19, 
				"name_en" => "Tachouda", 
				"name_fr" => "Tachouda", 
				"name_ar" => "تاشودة" 
			], 
			[
				"id" => 731, 
				"city_id" => 19, 
				"name_en" => "Tala-Ifacene", 
				"name_fr" => "Tala-Ifacene", 
				"name_ar" => "تالة إيفاسن" 
			], 
			[
				"id" => 728, 
				"city_id" => 19, 
				"name_en" => "Serdj-El-Ghoul", 
				"name_fr" => "Serdj-El-Ghoul", 
				"name_ar" => "سرج الغول" 
			], 
			[
				"id" => 712, 
				"city_id" => 19, 
				"name_en" => "Guidjel", 
				"name_fr" => "Guidjel", 
				"name_ar" => "قجال" 
			], 
			[
				"id" => 723, 
				"city_id" => 19, 
				"name_en" => "Ouled Sabor", 
				"name_fr" => "Ouled Sabor", 
				"name_ar" => "أولاد صابر" 
			], 
			[
				"id" => 688, 
				"city_id" => 19, 
				"name_en" => "Bazer-Sakra", 
				"name_fr" => "Bazer-Sakra", 
				"name_ar" => "بازر سكرة" 
			], 
			[
				"id" => 706, 
				"city_id" => 19, 
				"name_en" => "El Eulma", 
				"name_fr" => "El Eulma", 
				"name_ar" => "العلمة" 
			], 
			[
				"id" => 710, 
				"city_id" => 19, 
				"name_en" => "Guelta Zerka", 
				"name_fr" => "Guelta Zerka", 
				"name_ar" => "قلتة زرقاء" 
			], 
			[
				"id" => 692, 
				"city_id" => 19, 
				"name_en" => "Beni Fouda", 
				"name_fr" => "Beni Fouda", 
				"name_ar" => "بني فودة" 
			], 
			[
				"id" => 704, 
				"city_id" => 19, 
				"name_en" => "Djemila", 
				"name_fr" => "Djemila", 
				"name_ar" => "جميلة" 
			], 
			[
				"id" => 681, 
				"city_id" => 19, 
				"name_en" => "Ain-Legradj", 
				"name_fr" => "Ain-Legradj", 
				"name_ar" => "عين لقراج" 
			], 
			[
				"id" => 691, 
				"city_id" => 19, 
				"name_en" => "Beni Chebana", 
				"name_fr" => "Beni Chebana", 
				"name_ar" => "بني شبانة" 
			], 
			[
				"id" => 693, 
				"city_id" => 19, 
				"name_en" => "Beni Ourtilane", 
				"name_fr" => "Beni Ourtilane", 
				"name_ar" => "بني ورتيلان" 
			], 
			[
				"id" => 696, 
				"city_id" => 19, 
				"name_en" => "Beni-Mouhli", 
				"name_fr" => "Beni-Mouhli", 
				"name_ar" => "بني موحلي" 
			], 
			[
				"id" => 675, 
				"city_id" => 19, 
				"name_en" => "Ain Abessa", 
				"name_fr" => "Ain Abessa", 
				"name_ar" => "عين عباسة" 
			], 
			[
				"id" => 676, 
				"city_id" => 19, 
				"name_en" => "Ain Arnat", 
				"name_fr" => "Ain Arnat", 
				"name_ar" => "عين أرنات" 
			], 
			[
				"id" => 687, 
				"city_id" => 19, 
				"name_en" => "Babor", 
				"name_fr" => "Babor", 
				"name_ar" => "بابور" 
			], 
			[
				"id" => 719, 
				"city_id" => 19, 
				"name_en" => "Maouaklane", 
				"name_fr" => "Maouaklane", 
				"name_ar" => "ماوكلان" 
			], 
			[
				"id" => 745, 
				"city_id" => 20, 
				"name_en" => "Saida", 
				"name_fr" => "Saida", 
				"name_ar" => "سعيدة" 
			], 
			[
				"id" => 749, 
				"city_id" => 20, 
				"name_en" => "Tircine", 
				"name_fr" => "Tircine", 
				"name_ar" => "تيرسين" 
			], 
			[
				"id" => 743, 
				"city_id" => 20, 
				"name_en" => "Ouled Brahim", 
				"name_fr" => "Ouled Brahim", 
				"name_ar" => "أولاد إبراهيم" 
			], 
			[
				"id" => 737, 
				"city_id" => 20, 
				"name_en" => "Ain Soltane", 
				"name_fr" => "Ain Soltane", 
				"name_ar" => "عين السلطان" 
			], 
			[
				"id" => 741, 
				"city_id" => 20, 
				"name_en" => "Maamora", 
				"name_fr" => "Maamora", 
				"name_ar" => "المعمورة" 
			], 
			[
				"id" => 739, 
				"city_id" => 20, 
				"name_en" => "El Hassasna", 
				"name_fr" => "El Hassasna", 
				"name_ar" => "الحساسنة" 
			], 
			[
				"id" => 736, 
				"city_id" => 20, 
				"name_en" => "Ain Sekhouna", 
				"name_fr" => "Ain Sekhouna", 
				"name_ar" => "عين السخونة" 
			], 
			[
				"id" => 748, 
				"city_id" => 20, 
				"name_en" => "Sidi Boubekeur", 
				"name_fr" => "Sidi Boubekeur", 
				"name_ar" => "سيدي بوبكر" 
			], 
			[
				"id" => 744, 
				"city_id" => 20, 
				"name_en" => "Ouled Khaled", 
				"name_fr" => "Ouled Khaled", 
				"name_ar" => "أولاد خالد" 
			], 
			[
				"id" => 740, 
				"city_id" => 20, 
				"name_en" => "Hounet", 
				"name_fr" => "Hounet", 
				"name_ar" => "هونت" 
			], 
			[
				"id" => 750, 
				"city_id" => 20, 
				"name_en" => "Youb", 
				"name_fr" => "Youb", 
				"name_ar" => "يوب" 
			], 
			[
				"id" => 738, 
				"city_id" => 20, 
				"name_en" => "Doui Thabet", 
				"name_fr" => "Doui Thabet", 
				"name_ar" => "دوي ثابت" 
			], 
			[
				"id" => 746, 
				"city_id" => 20, 
				"name_en" => "Sidi Ahmed", 
				"name_fr" => "Sidi Ahmed", 
				"name_ar" => "سيدي احمد" 
			], 
			[
				"id" => 742, 
				"city_id" => 20, 
				"name_en" => "Moulay Larbi", 
				"name_fr" => "Moulay Larbi", 
				"name_ar" => "مولاي العربي" 
			], 
			[
				"id" => 735, 
				"city_id" => 20, 
				"name_en" => "Ain El Hadjar", 
				"name_fr" => "Ain El Hadjar", 
				"name_ar" => "عين الحجر" 
			], 
			[
				"id" => 747, 
				"city_id" => 20, 
				"name_en" => "Sidi Amar", 
				"name_fr" => "Sidi Amar", 
				"name_ar" => "سيدي عمر" 
			], 
			[
				"id" => 751, 
				"city_id" => 21, 
				"name_en" => "Ain Bouziane", 
				"name_fr" => "Ain Bouziane", 
				"name_ar" => "عين بوزيان" 
			], 
			[
				"id" => 783, 
				"city_id" => 21, 
				"name_en" => "Salah Bouchaour", 
				"name_fr" => "Salah Bouchaour", 
				"name_ar" => "صالح بو الشعور" 
			], 
			[
				"id" => 768, 
				"city_id" => 21, 
				"name_en" => "El Hadaiek", 
				"name_fr" => "El Hadaiek", 
				"name_ar" => "الحدائق" 
			], 
			[
				"id" => 787, 
				"city_id" => 21, 
				"name_en" => "Zerdezas", 
				"name_fr" => "Zerdezas", 
				"name_ar" => "زردازة" 
			], 
			[
				"id" => 780, 
				"city_id" => 21, 
				"name_en" => "Ouled Habbaba", 
				"name_fr" => "Ouled Habbaba", 
				"name_ar" => "أولاد حبابة" 
			], 
			[
				"id" => 759, 
				"city_id" => 21, 
				"name_en" => "Beni Oulbane", 
				"name_fr" => "Beni Oulbane", 
				"name_ar" => "بني ولبان" 
			], 
			[
				"id" => 784, 
				"city_id" => 21, 
				"name_en" => "Sidi Mezghiche", 
				"name_fr" => "Sidi Mezghiche", 
				"name_ar" => "سيدي مزغيش" 
			], 
			[
				"id" => 758, 
				"city_id" => 21, 
				"name_en" => "Beni Bechir", 
				"name_fr" => "Beni Bechir", 
				"name_ar" => "بني بشير" 
			], 
			[
				"id" => 782, 
				"city_id" => 21, 
				"name_en" => "Ramdane Djamel", 
				"name_fr" => "Ramdane Djamel", 
				"name_ar" => "رمضان جمال" 
			], 
			[
				"id" => 761, 
				"city_id" => 21, 
				"name_en" => "Bin El Ouiden", 
				"name_fr" => "Bin El Ouiden", 
				"name_ar" => "بين الويدان" 
			], 
			[
				"id" => 770, 
				"city_id" => 21, 
				"name_en" => "Emjez Edchich", 
				"name_fr" => "Emjez Edchich", 
				"name_ar" => "مجاز الدشيش" 
			], 
			[
				"id" => 786, 
				"city_id" => 21, 
				"name_en" => "Tamalous", 
				"name_fr" => "Tamalous", 
				"name_ar" => "تمالوس" 
			], 
			[
				"id" => 753, 
				"city_id" => 21, 
				"name_en" => "Ain Kechra", 
				"name_fr" => "Ain Kechra", 
				"name_ar" => "عين قشرة" 
			], 
			[
				"id" => 778, 
				"city_id" => 21, 
				"name_en" => "Ouldja Boulbalout", 
				"name_fr" => "Ouldja Boulbalout", 
				"name_ar" => "الولجة بولبلوط" 
			], 
			[
				"id" => 781, 
				"city_id" => 21, 
				"name_en" => "Oum Toub", 
				"name_fr" => "Oum Toub", 
				"name_ar" => "أم الطوب" 
			], 
			[
				"id" => 767, 
				"city_id" => 21, 
				"name_en" => "El Ghedir", 
				"name_fr" => "El Ghedir", 
				"name_ar" => "الغدير" 
			], 
			[
				"id" => 775, 
				"city_id" => 21, 
				"name_en" => "Kerkara", 
				"name_fr" => "Kerkara", 
				"name_ar" => "الكركرة" 
			], 
			[
				"id" => 766, 
				"city_id" => 21, 
				"name_en" => "El Arrouch", 
				"name_fr" => "El Arrouch", 
				"name_ar" => "الحروش" 
			], 
			[
				"id" => 788, 
				"city_id" => 21, 
				"name_en" => "Zitouna", 
				"name_fr" => "Zitouna", 
				"name_ar" => "الزيتونة" 
			], 
			[
				"id" => 779, 
				"city_id" => 21, 
				"name_en" => "Ouled Attia", 
				"name_fr" => "Ouled Attia", 
				"name_ar" => "أولاد عطية" 
			], 
			[
				"id" => 777, 
				"city_id" => 21, 
				"name_en" => "Oued Zhour", 
				"name_fr" => "Oued Zhour", 
				"name_ar" => "وادي الزهور" 
			], 
			[
				"id" => 764, 
				"city_id" => 21, 
				"name_en" => "Collo", 
				"name_fr" => "Collo", 
				"name_ar" => "القل" 
			], 
			[
				"id" => 763, 
				"city_id" => 21, 
				"name_en" => "Cheraia", 
				"name_fr" => "Cheraia", 
				"name_ar" => "الشرايع" 
			], 
			[
				"id" => 760, 
				"city_id" => 21, 
				"name_en" => "Beni Zid", 
				"name_fr" => "Beni Zid", 
				"name_ar" => "بني زيد" 
			], 
			[
				"id" => 776, 
				"city_id" => 21, 
				"name_en" => "Khenag Maoune", 
				"name_fr" => "Khenag Maoune", 
				"name_ar" => "خناق مايو" 
			], 
			[
				"id" => 769, 
				"city_id" => 21, 
				"name_en" => "El Marsa", 
				"name_fr" => "El Marsa", 
				"name_ar" => "المرسى" 
			], 
			[
				"id" => 757, 
				"city_id" => 21, 
				"name_en" => "Ben Azzouz", 
				"name_fr" => "Ben Azzouz", 
				"name_ar" => "بن عزوز" 
			], 
			[
				"id" => 756, 
				"city_id" => 21, 
				"name_en" => "Bekkouche Lakhdar", 
				"name_fr" => "Bekkouche Lakhdar", 
				"name_ar" => "بكوش لخضر" 
			], 
			[
				"id" => 771, 
				"city_id" => 21, 
				"name_en" => "Es Sebt", 
				"name_fr" => "Es Sebt", 
				"name_ar" => "السبت" 
			], 
			[
				"id" => 752, 
				"city_id" => 21, 
				"name_en" => "Ain Charchar", 
				"name_fr" => "Ain Charchar", 
				"name_ar" => "عين شرشار" 
			], 
			[
				"id" => 755, 
				"city_id" => 21, 
				"name_en" => "Azzaba", 
				"name_fr" => "Azzaba", 
				"name_ar" => "عزابة" 
			], 
			[
				"id" => 762, 
				"city_id" => 21, 
				"name_en" => "Bouchetata", 
				"name_fr" => "Bouchetata", 
				"name_ar" => "بوشطاطة" 
			], 
			[
				"id" => 772, 
				"city_id" => 21, 
				"name_en" => "Filfila", 
				"name_fr" => "Filfila", 
				"name_ar" => "فلفلة" 
			], 
			[
				"id" => 773, 
				"city_id" => 21, 
				"name_en" => "Hammadi Krouma", 
				"name_fr" => "Hammadi Krouma", 
				"name_ar" => "حمادي كرومة" 
			], 
			[
				"id" => 785, 
				"city_id" => 21, 
				"name_en" => "Skikda", 
				"name_fr" => "Skikda", 
				"name_ar" => "سكيكدة" 
			], 
			[
				"id" => 754, 
				"city_id" => 21, 
				"name_en" => "Ain Zouit", 
				"name_fr" => "Ain Zouit", 
				"name_ar" => "عين زويت" 
			], 
			[
				"id" => 765, 
				"city_id" => 21, 
				"name_en" => "Djendel Saadi Mohamed", 
				"name_fr" => "Djendel Saadi Mohamed", 
				"name_ar" => "جندل سعدي محمد" 
			], 
			[
				"id" => 774, 
				"city_id" => 21, 
				"name_en" => "Kanoua", 
				"name_fr" => "Kanoua", 
				"name_ar" => "قنواع" 
			], 
			[
				"id" => 822, 
				"city_id" => 22, 
				"name_en" => "Sidi Ali Benyoub", 
				"name_fr" => "Sidi Ali Benyoub", 
				"name_ar" => "سيدي علي بن يوب" 
			], 
			[
				"id" => 814, 
				"city_id" => 22, 
				"name_en" => "Moulay Slissen", 
				"name_fr" => "Moulay Slissen", 
				"name_ar" => "مولاي سليسن" 
			], 
			[
				"id" => 804, 
				"city_id" => 22, 
				"name_en" => "El Hacaiba", 
				"name_fr" => "El Hacaiba", 
				"name_ar" => "الحصيبة" 
			], 
			[
				"id" => 792, 
				"city_id" => 22, 
				"name_en" => "Ain Tindamine", 
				"name_fr" => "Ain Tindamine", 
				"name_ar" => "عين تندمين" 
			], 
			[
				"id" => 837, 
				"city_id" => 22, 
				"name_en" => "Tenira", 
				"name_fr" => "Tenira", 
				"name_ar" => "تنيرة" 
			], 
			[
				"id" => 816, 
				"city_id" => 22, 
				"name_en" => "Oued Sefioun", 
				"name_fr" => "Oued Sefioun", 
				"name_ar" => "وادي سفيون" 
			], 
			[
				"id" => 805, 
				"city_id" => 22, 
				"name_en" => "Hassi Dahou", 
				"name_fr" => "Hassi Dahou", 
				"name_ar" => "حاسي دحو" 
			], 
			[
				"id" => 817, 
				"city_id" => 22, 
				"name_en" => "Oued Taourira", 
				"name_fr" => "Oued Taourira", 
				"name_ar" => "وادي تاوريرة" 
			], 
			[
				"id" => 798, 
				"city_id" => 22, 
				"name_en" => "Benachiba Chelia", 
				"name_fr" => "Benachiba Chelia", 
				"name_ar" => "بن عشيبة شلية" 
			], 
			[
				"id" => 831, 
				"city_id" => 22, 
				"name_en" => "Sidi Yacoub", 
				"name_fr" => "Sidi Yacoub", 
				"name_ar" => "سيدي يعقوب" 
			], 
			[
				"id" => 830, 
				"city_id" => 22, 
				"name_en" => "Sidi Lahcene", 
				"name_fr" => "Sidi Lahcene", 
				"name_ar" => "سيدي لحسن" 
			], 
			[
				"id" => 829, 
				"city_id" => 22, 
				"name_en" => "Sidi Khaled", 
				"name_fr" => "Sidi Khaled", 
				"name_ar" => "سيدي خالد" 
			], 
			[
				"id" => 832, 
				"city_id" => 22, 
				"name_en" => "Tabia", 
				"name_fr" => "Tabia", 
				"name_ar" => "طابية" 
			], 
			[
				"id" => 825, 
				"city_id" => 22, 
				"name_en" => "Sidi Brahim", 
				"name_fr" => "Sidi Brahim", 
				"name_ar" => "سيدي ابراهيم" 
			], 
			[
				"id" => 794, 
				"city_id" => 22, 
				"name_en" => "Amarnas", 
				"name_fr" => "Amarnas", 
				"name_ar" => "العمارنة" 
			], 
			[
				"id" => 801, 
				"city_id" => 22, 
				"name_en" => "Boukhanefis", 
				"name_fr" => "Boukhanefis", 
				"name_ar" => "بوخنفيس" 
			], 
			[
				"id" => 806, 
				"city_id" => 22, 
				"name_en" => "Hassi Zahana", 
				"name_fr" => "Hassi Zahana", 
				"name_ar" => "حاسي زهانة" 
			], 
			[
				"id" => 802, 
				"city_id" => 22, 
				"name_en" => "Chetouane Belaila", 
				"name_fr" => "Chetouane Belaila", 
				"name_ar" => "شيطوان البلايلة" 
			], 
			[
				"id" => 797, 
				"city_id" => 22, 
				"name_en" => "Ben Badis", 
				"name_fr" => "Ben Badis", 
				"name_ar" => "بن باديس" 
			], 
			[
				"id" => 795, 
				"city_id" => 22, 
				"name_en" => "Bedrabine El Mokrani", 
				"name_fr" => "Bedrabine El Mokrani", 
				"name_ar" => "بضرابين المقراني" 
			], 
			[
				"id" => 821, 
				"city_id" => 22, 
				"name_en" => "Sfisef", 
				"name_fr" => "Sfisef", 
				"name_ar" => "سفيزف" 
			], 
			[
				"id" => 810, 
				"city_id" => 22, 
				"name_en" => "M'cid", 
				"name_fr" => "M'cid", 
				"name_ar" => "مسيد" 
			], 
			[
				"id" => 800, 
				"city_id" => 22, 
				"name_en" => "Boudjebaa El Bordj", 
				"name_fr" => "Boudjebaa El Bordj", 
				"name_ar" => "بوجبهة البرج" 
			], 
			[
				"id" => 793, 
				"city_id" => 22, 
				"name_en" => "Ain- Adden", 
				"name_fr" => "Ain- Adden", 
				"name_ar" => "عين أدن" 
			], 
			[
				"id" => 828, 
				"city_id" => 22, 
				"name_en" => "Sidi Hamadouche", 
				"name_fr" => "Sidi Hamadouche", 
				"name_ar" => "سيدي حمادوش" 
			], 
			[
				"id" => 826, 
				"city_id" => 22, 
				"name_en" => "Sidi Chaib", 
				"name_fr" => "Sidi Chaib", 
				"name_ar" => "سيدي شعيب" 
			], 
			[
				"id" => 808, 
				"city_id" => 22, 
				"name_en" => "Makedra", 
				"name_fr" => "Makedra", 
				"name_ar" => "مكدرة" 
			], 
			[
				"id" => 789, 
				"city_id" => 22, 
				"name_en" => "Ain El Berd", 
				"name_fr" => "Ain El Berd", 
				"name_ar" => "عين البرد" 
			], 
			[
				"id" => 819, 
				"city_id" => 22, 
				"name_en" => "Redjem Demouche", 
				"name_fr" => "Redjem Demouche", 
				"name_ar" => "رجم دموش" 
			], 
			[
				"id" => 818, 
				"city_id" => 22, 
				"name_en" => "Ras El Ma", 
				"name_fr" => "Ras El Ma", 
				"name_ar" => "راس الماء" 
			], 
			[
				"id" => 815, 
				"city_id" => 22, 
				"name_en" => "Oued Sebaa", 
				"name_fr" => "Oued Sebaa", 
				"name_ar" => "وادي السبع" 
			], 
			[
				"id" => 809, 
				"city_id" => 22, 
				"name_en" => "Marhoum", 
				"name_fr" => "Marhoum", 
				"name_ar" => "مرحوم" 
			], 
			[
				"id" => 824, 
				"city_id" => 22, 
				"name_en" => "Sidi Bel-Abbes", 
				"name_fr" => "Sidi Bel-Abbes", 
				"name_ar" => "سيدي بلعباس" 
			], 
			[
				"id" => 791, 
				"city_id" => 22, 
				"name_en" => "Ain Thrid", 
				"name_fr" => "Ain Thrid", 
				"name_ar" => "عين الثريد" 
			], 
			[
				"id" => 820, 
				"city_id" => 22, 
				"name_en" => "Sehala Thaoura", 
				"name_fr" => "Sehala Thaoura", 
				"name_ar" => "السهالة الثورة" 
			], 
			[
				"id" => 838, 
				"city_id" => 22, 
				"name_en" => "Tessala", 
				"name_fr" => "Tessala", 
				"name_ar" => "تسالة" 
			], 
			[
				"id" => 796, 
				"city_id" => 22, 
				"name_en" => "Belarbi", 
				"name_fr" => "Belarbi", 
				"name_ar" => "بلعربي" 
			], 
			[
				"id" => 813, 
				"city_id" => 22, 
				"name_en" => "Mostefa  Ben Brahim", 
				"name_fr" => "Mostefa  Ben Brahim", 
				"name_ar" => "مصطفى بن ابراهيم" 
			], 
			[
				"id" => 839, 
				"city_id" => 22, 
				"name_en" => "Tilmouni", 
				"name_fr" => "Tilmouni", 
				"name_ar" => "تلموني" 
			], 
			[
				"id" => 840, 
				"city_id" => 22, 
				"name_en" => "Zerouala", 
				"name_fr" => "Zerouala", 
				"name_ar" => "زروالة" 
			], 
			[
				"id" => 803, 
				"city_id" => 22, 
				"name_en" => "Dhaya", 
				"name_fr" => "Dhaya", 
				"name_ar" => "الضاية" 
			], 
			[
				"id" => 812, 
				"city_id" => 22, 
				"name_en" => "Mezaourou", 
				"name_fr" => "Mezaourou", 
				"name_ar" => "مزاورو" 
			], 
			[
				"id" => 835, 
				"city_id" => 22, 
				"name_en" => "Teghalimet", 
				"name_fr" => "Teghalimet", 
				"name_ar" => "تغاليمت" 
			], 
			[
				"id" => 836, 
				"city_id" => 22, 
				"name_en" => "Telagh", 
				"name_fr" => "Telagh", 
				"name_ar" => "تلاغ" 
			], 
			[
				"id" => 790, 
				"city_id" => 22, 
				"name_en" => "Ain Kada", 
				"name_fr" => "Ain Kada", 
				"name_ar" => "عين قادة" 
			], 
			[
				"id" => 807, 
				"city_id" => 22, 
				"name_en" => "Lamtar", 
				"name_fr" => "Lamtar", 
				"name_ar" => "لمطار" 
			], 
			[
				"id" => 823, 
				"city_id" => 22, 
				"name_en" => "Sidi Ali Boussidi", 
				"name_fr" => "Sidi Ali Boussidi", 
				"name_ar" => "سيدي علي بوسيدي" 
			], 
			[
				"id" => 827, 
				"city_id" => 22, 
				"name_en" => "Sidi Dahou Zairs", 
				"name_fr" => "Sidi Dahou Zairs", 
				"name_ar" => "سيدي دحو الزاير" 
			], 
			[
				"id" => 799, 
				"city_id" => 22, 
				"name_en" => "Bir El Hammam", 
				"name_fr" => "Bir El Hammam", 
				"name_ar" => "بئر الحمام" 
			], 
			[
				"id" => 811, 
				"city_id" => 22, 
				"name_en" => "Merine", 
				"name_fr" => "Merine", 
				"name_ar" => "مرين" 
			], 
			[
				"id" => 834, 
				"city_id" => 22, 
				"name_en" => "Tefessour", 
				"name_fr" => "Tefessour", 
				"name_ar" => "تفسور" 
			], 
			[
				"id" => 833, 
				"city_id" => 22, 
				"name_en" => "Taoudmout", 
				"name_fr" => "Taoudmout", 
				"name_ar" => "تاودموت" 
			], 
			[
				"id" => 842, 
				"city_id" => 23, 
				"name_en" => "Annaba", 
				"name_fr" => "Annaba", 
				"name_ar" => "عنابة" 
			], 
			[
				"id" => 850, 
				"city_id" => 23, 
				"name_en" => "Seraidi", 
				"name_fr" => "Seraidi", 
				"name_ar" => "سرايدي" 
			], 
			[
				"id" => 843, 
				"city_id" => 23, 
				"name_en" => "Berrahal", 
				"name_fr" => "Berrahal", 
				"name_ar" => "برحال" 
			], 
			[
				"id" => 849, 
				"city_id" => 23, 
				"name_en" => "Oued El Aneb", 
				"name_fr" => "Oued El Aneb", 
				"name_ar" => "واد العنب" 
			], 
			[
				"id" => 848, 
				"city_id" => 23, 
				"name_en" => "El Hadjar", 
				"name_fr" => "El Hadjar", 
				"name_ar" => "الحجار" 
			], 
			[
				"id" => 851, 
				"city_id" => 23, 
				"name_en" => "Sidi Amar", 
				"name_fr" => "Sidi Amar", 
				"name_ar" => "سيدي عمار" 
			], 
			[
				"id" => 846, 
				"city_id" => 23, 
				"name_en" => "El Bouni", 
				"name_fr" => "El Bouni", 
				"name_ar" => "البوني" 
			], 
			[
				"id" => 841, 
				"city_id" => 23, 
				"name_en" => "Ain El Berda", 
				"name_fr" => "Ain El Berda", 
				"name_ar" => "عين الباردة" 
			], 
			[
				"id" => 845, 
				"city_id" => 23, 
				"name_en" => "Cheurfa", 
				"name_fr" => "Cheurfa", 
				"name_ar" => "الشرفة" 
			], 
			[
				"id" => 847, 
				"city_id" => 23, 
				"name_en" => "El Eulma", 
				"name_fr" => "El Eulma", 
				"name_ar" => "العلمة" 
			], 
			[
				"id" => 852, 
				"city_id" => 23, 
				"name_en" => "Treat", 
				"name_fr" => "Treat", 
				"name_ar" => "التريعات" 
			], 
			[
				"id" => 844, 
				"city_id" => 23, 
				"name_en" => "Chetaibi", 
				"name_fr" => "Chetaibi", 
				"name_ar" => "شطايبي" 
			], 
			[
				"id" => 875, 
				"city_id" => 24, 
				"name_en" => "Nechmaya", 
				"name_fr" => "Nechmaya", 
				"name_ar" => "نشماية" 
			], 
			[
				"id" => 863, 
				"city_id" => 24, 
				"name_en" => "Bou Hamdane", 
				"name_fr" => "Bou Hamdane", 
				"name_ar" => "بوحمدان" 
			], 
			[
				"id" => 872, 
				"city_id" => 24, 
				"name_en" => "Hammam Debagh", 
				"name_fr" => "Hammam Debagh", 
				"name_ar" => "حمام دباغ" 
			], 
			[
				"id" => 884, 
				"city_id" => 24, 
				"name_en" => "Roknia", 
				"name_fr" => "Roknia", 
				"name_ar" => "الركنية" 
			], 
			[
				"id" => 867, 
				"city_id" => 24, 
				"name_en" => "Dahouara", 
				"name_fr" => "Dahouara", 
				"name_ar" => "الدهوارة" 
			], 
			[
				"id" => 873, 
				"city_id" => 24, 
				"name_en" => "Hammam N'bail", 
				"name_fr" => "Hammam N'bail", 
				"name_ar" => "حمام النبايل" 
			], 
			[
				"id" => 871, 
				"city_id" => 24, 
				"name_en" => "Guelma", 
				"name_fr" => "Guelma", 
				"name_ar" => "قالمة" 
			], 
			[
				"id" => 866, 
				"city_id" => 24, 
				"name_en" => "Boumahra Ahmed", 
				"name_fr" => "Boumahra Ahmed", 
				"name_ar" => "بومهرة أحمد" 
			], 
			[
				"id" => 853, 
				"city_id" => 24, 
				"name_en" => "Ain Ben Beida", 
				"name_fr" => "Ain Ben Beida", 
				"name_ar" => "عين بن بيضاء" 
			], 
			[
				"id" => 865, 
				"city_id" => 24, 
				"name_en" => "Bouchegouf", 
				"name_fr" => "Bouchegouf", 
				"name_ar" => "بوشقوف" 
			], 
			[
				"id" => 878, 
				"city_id" => 24, 
				"name_en" => "Medjez Sfa", 
				"name_fr" => "Medjez Sfa", 
				"name_ar" => "مجاز الصفاء" 
			], 
			[
				"id" => 881, 
				"city_id" => 24, 
				"name_en" => "Oued Ferragha", 
				"name_fr" => "Oued Ferragha", 
				"name_ar" => "وادي فراغة" 
			], 
			[
				"id" => 864, 
				"city_id" => 24, 
				"name_en" => "Bouati Mahmoud", 
				"name_fr" => "Bouati Mahmoud", 
				"name_ar" => "بوعاتي محمود" 
			], 
			[
				"id" => 869, 
				"city_id" => 24, 
				"name_en" => "El Fedjoudj", 
				"name_fr" => "El Fedjoudj", 
				"name_ar" => "الفجوج" 
			], 
			[
				"id" => 874, 
				"city_id" => 24, 
				"name_en" => "Heliopolis", 
				"name_fr" => "Heliopolis", 
				"name_ar" => "هيليوبوليس" 
			], 
			[
				"id" => 877, 
				"city_id" => 24, 
				"name_en" => "Medjez Amar", 
				"name_fr" => "Medjez Amar", 
				"name_ar" => "مجاز عمار" 
			], 
			[
				"id" => 879, 
				"city_id" => 24, 
				"name_en" => "Houari Boumedienne", 
				"name_fr" => "Houari Boumedienne", 
				"name_ar" => "هواري بومدين" 
			], 
			[
				"id" => 883, 
				"city_id" => 24, 
				"name_en" => "Ras El Agba", 
				"name_fr" => "Ras El Agba", 
				"name_ar" => "رأس العقبة" 
			], 
			[
				"id" => 885, 
				"city_id" => 24, 
				"name_en" => "Sellaoua Announa", 
				"name_fr" => "Sellaoua Announa", 
				"name_ar" => "سلاوة عنونة" 
			], 
			[
				"id" => 868, 
				"city_id" => 24, 
				"name_en" => "Djeballah Khemissi", 
				"name_fr" => "Djeballah Khemissi", 
				"name_ar" => "جبالة الخميسي" 
			], 
			[
				"id" => 861, 
				"city_id" => 24, 
				"name_en" => "Bordj Sabath", 
				"name_fr" => "Bordj Sabath", 
				"name_ar" => "برج صباط" 
			], 
			[
				"id" => 882, 
				"city_id" => 24, 
				"name_en" => "Oued Zenati", 
				"name_fr" => "Oued Zenati", 
				"name_ar" => "وادي الزناتي" 
			], 
			[
				"id" => 856, 
				"city_id" => 24, 
				"name_en" => "Ain Regada", 
				"name_fr" => "Ain Regada", 
				"name_ar" => "عين رقادة" 
			], 
			[
				"id" => 854, 
				"city_id" => 24, 
				"name_en" => "Ain Larbi", 
				"name_fr" => "Ain Larbi", 
				"name_ar" => "عين العربي" 
			], 
			[
				"id" => 855, 
				"city_id" => 24, 
				"name_en" => "Ain Makhlouf", 
				"name_fr" => "Ain Makhlouf", 
				"name_ar" => "عين مخلوف" 
			], 
			[
				"id" => 886, 
				"city_id" => 24, 
				"name_en" => "Tamlouka", 
				"name_fr" => "Tamlouka", 
				"name_ar" => "تاملوكة" 
			], 
			[
				"id" => 857, 
				"city_id" => 24, 
				"name_en" => "Ain Sandel", 
				"name_fr" => "Ain Sandel", 
				"name_ar" => "عين صندل" 
			], 
			[
				"id" => 862, 
				"city_id" => 24, 
				"name_en" => "Bou Hachana", 
				"name_fr" => "Bou Hachana", 
				"name_ar" => "بوحشانة" 
			], 
			[
				"id" => 876, 
				"city_id" => 24, 
				"name_en" => "Khezaras", 
				"name_fr" => "Khezaras", 
				"name_ar" => "لخزارة" 
			], 
			[
				"id" => 858, 
				"city_id" => 24, 
				"name_en" => "Belkheir", 
				"name_fr" => "Belkheir", 
				"name_ar" => "بلخير" 
			], 
			[
				"id" => 860, 
				"city_id" => 24, 
				"name_en" => "Beni Mezline", 
				"name_fr" => "Beni Mezline", 
				"name_ar" => "بني مزلين" 
			], 
			[
				"id" => 870, 
				"city_id" => 24, 
				"name_en" => "Guelaat Bou Sbaa", 
				"name_fr" => "Guelaat Bou Sbaa", 
				"name_ar" => "قلعة بوصبع" 
			], 
			[
				"id" => 880, 
				"city_id" => 24, 
				"name_en" => "Oued Cheham", 
				"name_fr" => "Oued Cheham", 
				"name_ar" => "وادي الشحم" 
			], 
			[
				"id" => 859, 
				"city_id" => 24, 
				"name_en" => "Bendjarah", 
				"name_fr" => "Bendjarah", 
				"name_ar" => "بن جراح" 
			], 
			[
				"id" => 892, 
				"city_id" => 25, 
				"name_en" => "Didouche Mourad", 
				"name_fr" => "Didouche Mourad", 
				"name_ar" => "ديدوش مراد" 
			], 
			[
				"id" => 894, 
				"city_id" => 25, 
				"name_en" => "Hamma Bouziane", 
				"name_fr" => "Hamma Bouziane", 
				"name_ar" => "حامة بوزيان" 
			], 
			[
				"id" => 890, 
				"city_id" => 25, 
				"name_en" => "Beni Hamidane", 
				"name_fr" => "Beni Hamidane", 
				"name_ar" => "بني حميدان" 
			], 
			[
				"id" => 898, 
				"city_id" => 25, 
				"name_en" => "Zighoud Youcef", 
				"name_fr" => "Zighoud Youcef", 
				"name_ar" => "زيغود يوسف" 
			], 
			[
				"id" => 888, 
				"city_id" => 25, 
				"name_en" => "Ain Smara", 
				"name_fr" => "Ain Smara", 
				"name_ar" => "عين السمارة" 
			], 
			[
				"id" => 893, 
				"city_id" => 25, 
				"name_en" => "El Khroub", 
				"name_fr" => "El Khroub", 
				"name_ar" => "الخروب" 
			], 
			[
				"id" => 897, 
				"city_id" => 25, 
				"name_en" => "Ouled Rahmoun", 
				"name_fr" => "Ouled Rahmoun", 
				"name_ar" => "أولاد رحمون" 
			], 
			[
				"id" => 887, 
				"city_id" => 25, 
				"name_en" => "Ain Abid", 
				"name_fr" => "Ain Abid", 
				"name_ar" => "عين عبيد" 
			], 
			[
				"id" => 889, 
				"city_id" => 25, 
				"name_en" => "Ben Badis", 
				"name_fr" => "Ben Badis", 
				"name_ar" => "أبن باديس الهرية" 
			], 
			[
				"id" => 895, 
				"city_id" => 25, 
				"name_en" => "Ibn Ziad", 
				"name_fr" => "Ibn Ziad", 
				"name_ar" => "ابن زياد" 
			], 
			[
				"id" => 896, 
				"city_id" => 25, 
				"name_en" => "Messaoud Boudjeriou", 
				"name_fr" => "Messaoud Boudjeriou", 
				"name_ar" => "بوجريو مسعود" 
			], 
			[
				"id" => 891, 
				"city_id" => 25, 
				"name_en" => "Constantine", 
				"name_fr" => "Constantine", 
				"name_ar" => "قسنطينة" 
			], 
			[
				"id" => 943, 
				"city_id" => 26, 
				"name_en" => "Ouled Hellal", 
				"name_fr" => "Ouled Hellal", 
				"name_ar" => "أولاد هلال" 
			], 
			[
				"id" => 956, 
				"city_id" => 26, 
				"name_en" => "Souagui", 
				"name_fr" => "Souagui", 
				"name_ar" => "السواقي" 
			], 
			[
				"id" => 929, 
				"city_id" => 26, 
				"name_en" => "Ksar El Boukhari", 
				"name_fr" => "Ksar El Boukhari", 
				"name_ar" => "قصر البخاري" 
			], 
			[
				"id" => 934, 
				"city_id" => 26, 
				"name_en" => "M'fatha", 
				"name_fr" => "M'fatha", 
				"name_ar" => "مفاتحة" 
			], 
			[
				"id" => 947, 
				"city_id" => 26, 
				"name_en" => "Saneg", 
				"name_fr" => "Saneg", 
				"name_ar" => "السانق" 
			], 
			[
				"id" => 920, 
				"city_id" => 26, 
				"name_en" => "El Azizia", 
				"name_fr" => "El Azizia", 
				"name_ar" => "العزيزية" 
			], 
			[
				"id" => 930, 
				"city_id" => 26, 
				"name_en" => "Maghraoua", 
				"name_fr" => "Maghraoua", 
				"name_ar" => "مغراوة" 
			], 
			[
				"id" => 935, 
				"city_id" => 26, 
				"name_en" => "Mihoub", 
				"name_fr" => "Mihoub", 
				"name_ar" => "ميهوب" 
			], 
			[
				"id" => 909, 
				"city_id" => 26, 
				"name_en" => "Bouaiche", 
				"name_fr" => "Bouaiche", 
				"name_ar" => "بوعيش" 
			], 
			[
				"id" => 912, 
				"city_id" => 26, 
				"name_en" => "Boughzoul", 
				"name_fr" => "Boughzoul", 
				"name_ar" => "بوغزول" 
			], 
			[
				"id" => 914, 
				"city_id" => 26, 
				"name_en" => "Chabounia", 
				"name_fr" => "Chabounia", 
				"name_ar" => "الشهبونية" 
			], 
			[
				"id" => 926, 
				"city_id" => 26, 
				"name_en" => "Hannacha", 
				"name_fr" => "Hannacha", 
				"name_ar" => "حناشة" 
			], 
			[
				"id" => 936, 
				"city_id" => 26, 
				"name_en" => "Ouamri", 
				"name_fr" => "Ouamri", 
				"name_ar" => "عوامري" 
			], 
			[
				"id" => 937, 
				"city_id" => 26, 
				"name_en" => "Oued Harbil", 
				"name_fr" => "Oued Harbil", 
				"name_ar" => "وادي حربيل" 
			], 
			[
				"id" => 905, 
				"city_id" => 26, 
				"name_en" => "Beni Slimane", 
				"name_fr" => "Beni Slimane", 
				"name_ar" => "بني سليمان" 
			], 
			[
				"id" => 910, 
				"city_id" => 26, 
				"name_en" => "Bouaichoune", 
				"name_fr" => "Bouaichoune", 
				"name_ar" => "بوعيشون" 
			], 
			[
				"id" => 939, 
				"city_id" => 26, 
				"name_en" => "Ouled Bouachra", 
				"name_fr" => "Ouled Bouachra", 
				"name_ar" => "أولاد بوعشرة" 
			], 
			[
				"id" => 950, 
				"city_id" => 26, 
				"name_en" => "Si Mahdjoub", 
				"name_fr" => "Si Mahdjoub", 
				"name_ar" => "سي المحجوب" 
			], 
			[
				"id" => 913, 
				"city_id" => 26, 
				"name_en" => "Bouskene", 
				"name_fr" => "Bouskene", 
				"name_ar" => "بوسكن" 
			], 
			[
				"id" => 953, 
				"city_id" => 26, 
				"name_en" => "Sidi Rabie", 
				"name_fr" => "Sidi Rabie", 
				"name_ar" => "سيدي الربيع" 
			], 
			[
				"id" => 906, 
				"city_id" => 26, 
				"name_en" => "Berrouaghia", 
				"name_fr" => "Berrouaghia", 
				"name_ar" => "البرواقية" 
			], 
			[
				"id" => 941, 
				"city_id" => 26, 
				"name_en" => "Ouled Deid", 
				"name_fr" => "Ouled Deid", 
				"name_ar" => "أولاد دايد" 
			], 
			[
				"id" => 946, 
				"city_id" => 26, 
				"name_en" => "Rebaia", 
				"name_fr" => "Rebaia", 
				"name_ar" => "الربعية" 
			], 
			[
				"id" => 932, 
				"city_id" => 26, 
				"name_en" => "Medjebar", 
				"name_fr" => "Medjebar", 
				"name_ar" => "مجبر" 
			], 
			[
				"id" => 961, 
				"city_id" => 26, 
				"name_en" => "Tletat Ed Douair", 
				"name_fr" => "Tletat Ed Douair", 
				"name_ar" => "ثلاث دوائر" 
			], 
			[
				"id" => 962, 
				"city_id" => 26, 
				"name_en" => "Zoubiria", 
				"name_fr" => "Zoubiria", 
				"name_ar" => "الزبيرية" 
			], 
			[
				"id" => 901, 
				"city_id" => 26, 
				"name_en" => "Aissaouia", 
				"name_fr" => "Aissaouia", 
				"name_ar" => "العيساوية" 
			], 
			[
				"id" => 923, 
				"city_id" => 26, 
				"name_en" => "El Haoudane", 
				"name_fr" => "El Haoudane", 
				"name_ar" => "الحوضان" 
			], 
			[
				"id" => 933, 
				"city_id" => 26, 
				"name_en" => "Mezerana", 
				"name_fr" => "Mezerana", 
				"name_ar" => "مزغنة" 
			], 
			[
				"id" => 957, 
				"city_id" => 26, 
				"name_en" => "Tablat", 
				"name_fr" => "Tablat", 
				"name_ar" => "تابلاط" 
			], 
			[
				"id" => 908, 
				"city_id" => 26, 
				"name_en" => "Boghar", 
				"name_fr" => "Boghar", 
				"name_ar" => "بوغار" 
			], 
			[
				"id" => 949, 
				"city_id" => 26, 
				"name_en" => "Seghouane", 
				"name_fr" => "Seghouane", 
				"name_ar" => "سغوان" 
			], 
			[
				"id" => 919, 
				"city_id" => 26, 
				"name_en" => "Draa Esmar", 
				"name_fr" => "Draa Esmar", 
				"name_ar" => "ذراع السمار" 
			], 
			[
				"id" => 931, 
				"city_id" => 26, 
				"name_en" => "Medea", 
				"name_fr" => "Medea", 
				"name_ar" => "المدية" 
			], 
			[
				"id" => 959, 
				"city_id" => 26, 
				"name_en" => "Tamesguida", 
				"name_fr" => "Tamesguida", 
				"name_ar" => "تمسقيدة" 
			], 
			[
				"id" => 904, 
				"city_id" => 26, 
				"name_en" => "Ben Chicao", 
				"name_fr" => "Ben Chicao", 
				"name_ar" => "بن شكاو" 
			], 
			[
				"id" => 922, 
				"city_id" => 26, 
				"name_en" => "El Hamdania", 
				"name_fr" => "El Hamdania", 
				"name_ar" => "الحمدانية" 
			], 
			[
				"id" => 945, 
				"city_id" => 26, 
				"name_en" => "Ouzera", 
				"name_fr" => "Ouzera", 
				"name_ar" => "وزرة" 
			], 
			[
				"id" => 960, 
				"city_id" => 26, 
				"name_en" => "Tizi Mahdi", 
				"name_fr" => "Tizi Mahdi", 
				"name_ar" => "تيزي مهدي" 
			], 
			[
				"id" => 899, 
				"city_id" => 26, 
				"name_en" => "Ain Boucif", 
				"name_fr" => "Ain Boucif", 
				"name_ar" => "عين بوسيف" 
			], 
			[
				"id" => 925, 
				"city_id" => 26, 
				"name_en" => "El Ouinet", 
				"name_fr" => "El Ouinet", 
				"name_ar" => "العوينات" 
			], 
			[
				"id" => 927, 
				"city_id" => 26, 
				"name_en" => "Kef Lakhdar", 
				"name_fr" => "Kef Lakhdar", 
				"name_ar" => "الكاف الاخضر" 
			], 
			[
				"id" => 942, 
				"city_id" => 26, 
				"name_en" => "Ouled Emaaraf", 
				"name_fr" => "Ouled Emaaraf", 
				"name_ar" => "أولاد امعرف" 
			], 
			[
				"id" => 951, 
				"city_id" => 26, 
				"name_en" => "Sidi Demed", 
				"name_fr" => "Sidi Demed", 
				"name_ar" => "سيدي دامد" 
			], 
			[
				"id" => 903, 
				"city_id" => 26, 
				"name_en" => "Baata", 
				"name_fr" => "Baata", 
				"name_ar" => "بعطة" 
			], 
			[
				"id" => 924, 
				"city_id" => 26, 
				"name_en" => "El Omaria", 
				"name_fr" => "El Omaria", 
				"name_ar" => "العمارية" 
			], 
			[
				"id" => 940, 
				"city_id" => 26, 
				"name_en" => "Ouled Brahim", 
				"name_fr" => "Ouled Brahim", 
				"name_ar" => "أولاد إبراهيم" 
			], 
			[
				"id" => 907, 
				"city_id" => 26, 
				"name_en" => "Bir Ben Laabed", 
				"name_fr" => "Bir Ben Laabed", 
				"name_ar" => "بئر بن عابد" 
			], 
			[
				"id" => 921, 
				"city_id" => 26, 
				"name_en" => "El Guelbelkebir", 
				"name_fr" => "El Guelbelkebir", 
				"name_ar" => "القلب الكبير" 
			], 
			[
				"id" => 948, 
				"city_id" => 26, 
				"name_en" => "Sedraya", 
				"name_fr" => "Sedraya", 
				"name_ar" => "سدراية" 
			], 
			[
				"id" => 900, 
				"city_id" => 26, 
				"name_en" => "Ain Ouksir", 
				"name_fr" => "Ain Ouksir", 
				"name_ar" => "عين اقصير" 
			], 
			[
				"id" => 915, 
				"city_id" => 26, 
				"name_en" => "Chelalet El Adhaoura", 
				"name_fr" => "Chelalet El Adhaoura", 
				"name_ar" => "شلالة العذاورة" 
			], 
			[
				"id" => 916, 
				"city_id" => 26, 
				"name_en" => "Cheniguel", 
				"name_fr" => "Cheniguel", 
				"name_ar" => "شنيقل" 
			], 
			[
				"id" => 958, 
				"city_id" => 26, 
				"name_en" => "Tafraout", 
				"name_fr" => "Tafraout", 
				"name_ar" => "تفراوت" 
			], 
			[
				"id" => 911, 
				"city_id" => 26, 
				"name_en" => "Bouchrahil", 
				"name_fr" => "Bouchrahil", 
				"name_ar" => "بوشراحيل" 
			], 
			[
				"id" => 928, 
				"city_id" => 26, 
				"name_en" => "Khams Djouamaa", 
				"name_fr" => "Khams Djouamaa", 
				"name_ar" => "خمس جوامع" 
			], 
			[
				"id" => 952, 
				"city_id" => 26, 
				"name_en" => "Sidi Naamane", 
				"name_fr" => "Sidi Naamane", 
				"name_ar" => "سيدي نعمان" 
			], 
			[
				"id" => 902, 
				"city_id" => 26, 
				"name_en" => "Aziz", 
				"name_fr" => "Aziz", 
				"name_ar" => "عزيز" 
			], 
			[
				"id" => 917, 
				"city_id" => 26, 
				"name_en" => "Derrag", 
				"name_fr" => "Derrag", 
				"name_ar" => "دراق" 
			], 
			[
				"id" => 944, 
				"city_id" => 26, 
				"name_en" => "Oum El Djellil", 
				"name_fr" => "Oum El Djellil", 
				"name_ar" => "أم الجليل" 
			], 
			[
				"id" => 918, 
				"city_id" => 26, 
				"name_en" => "Djouab", 
				"name_fr" => "Djouab", 
				"name_ar" => "جواب" 
			], 
			[
				"id" => 954, 
				"city_id" => 26, 
				"name_en" => "Sidi Zahar", 
				"name_fr" => "Sidi Zahar", 
				"name_ar" => "سيدي زهار" 
			], 
			[
				"id" => 955, 
				"city_id" => 26, 
				"name_en" => "Sidi Ziane", 
				"name_fr" => "Sidi Ziane", 
				"name_ar" => "سيدي زيان" 
			], 
			[
				"id" => 938, 
				"city_id" => 26, 
				"name_en" => "Ouled Antar", 
				"name_fr" => "Ouled Antar", 
				"name_ar" => "أولاد عنتر" 
			], 
			[
				"id" => 970, 
				"city_id" => 27, 
				"name_en" => "Fornaka", 
				"name_fr" => "Fornaka", 
				"name_ar" => "فرناقة" 
			], 
			[
				"id" => 981, 
				"city_id" => 27, 
				"name_en" => "Oued El Kheir", 
				"name_fr" => "Oued El Kheir", 
				"name_ar" => "وادي الخير" 
			], 
			[
				"id" => 973, 
				"city_id" => 27, 
				"name_en" => "Hassiane", 
				"name_fr" => "Hassiane", 
				"name_ar" => "الحسيان (بني ياحي" 
			], 
			[
				"id" => 972, 
				"city_id" => 27, 
				"name_en" => "Hassi Mameche", 
				"name_fr" => "Hassi Mameche", 
				"name_ar" => "حاسي ماماش" 
			], 
			[
				"id" => 977, 
				"city_id" => 27, 
				"name_en" => "Mazagran", 
				"name_fr" => "Mazagran", 
				"name_ar" => "مزغران" 
			], 
			[
				"id" => 992, 
				"city_id" => 27, 
				"name_en" => "Stidia", 
				"name_fr" => "Stidia", 
				"name_ar" => "ستيدية" 
			], 
			[
				"id" => 967, 
				"city_id" => 27, 
				"name_en" => "Ain-Tedles", 
				"name_fr" => "Ain-Tedles", 
				"name_ar" => "عين تادلس" 
			], 
			[
				"id" => 987, 
				"city_id" => 27, 
				"name_en" => "Sidi Belaattar", 
				"name_fr" => "Sidi Belaattar", 
				"name_ar" => "سيدي بلعطار" 
			], 
			[
				"id" => 991, 
				"city_id" => 27, 
				"name_en" => "Sour", 
				"name_fr" => "Sour", 
				"name_ar" => "سور" 
			], 
			[
				"id" => 964, 
				"city_id" => 27, 
				"name_en" => "Ain-Boudinar", 
				"name_fr" => "Ain-Boudinar", 
				"name_ar" => "عين بودينار" 
			], 
			[
				"id" => 975, 
				"city_id" => 27, 
				"name_en" => "Kheir-Eddine", 
				"name_fr" => "Kheir-Eddine", 
				"name_ar" => "خير الدين" 
			], 
			[
				"id" => 985, 
				"city_id" => 27, 
				"name_en" => "Sayada", 
				"name_fr" => "Sayada", 
				"name_ar" => "صيادة" 
			], 
			[
				"id" => 986, 
				"city_id" => 27, 
				"name_en" => "Sidi Ali", 
				"name_fr" => "Sidi Ali", 
				"name_ar" => "سيدي علي" 
			], 
			[
				"id" => 993, 
				"city_id" => 27, 
				"name_en" => "Tazgait", 
				"name_fr" => "Tazgait", 
				"name_ar" => "تزقايت" 
			], 
			[
				"id" => 968, 
				"city_id" => 27, 
				"name_en" => "Benabdelmalek Ramdane", 
				"name_fr" => "Benabdelmalek Ramdane", 
				"name_ar" => "بن عبد المالك رمضان" 
			], 
			[
				"id" => 979, 
				"city_id" => 27, 
				"name_en" => "Mostaganem", 
				"name_fr" => "Mostaganem", 
				"name_ar" => "مستغانم" 
			], 
			[
				"id" => 971, 
				"city_id" => 27, 
				"name_en" => "Hadjadj", 
				"name_fr" => "Hadjadj", 
				"name_ar" => "حجاج" 
			], 
			[
				"id" => 988, 
				"city_id" => 27, 
				"name_en" => "Sidi-Lakhdar", 
				"name_fr" => "Sidi-Lakhdar", 
				"name_ar" => "سيدي لخضر" 
			], 
			[
				"id" => 963, 
				"city_id" => 27, 
				"name_en" => "Achaacha", 
				"name_fr" => "Achaacha", 
				"name_ar" => "عشعاشة" 
			], 
			[
				"id" => 974, 
				"city_id" => 27, 
				"name_en" => "Khadra", 
				"name_fr" => "Khadra", 
				"name_ar" => "خضرة" 
			], 
			[
				"id" => 980, 
				"city_id" => 27, 
				"name_en" => "Nekmaria", 
				"name_fr" => "Nekmaria", 
				"name_ar" => "نكمارية" 
			], 
			[
				"id" => 982, 
				"city_id" => 27, 
				"name_en" => "Ouled Boughalem", 
				"name_fr" => "Ouled Boughalem", 
				"name_ar" => "أولاد بوغالم" 
			], 
			[
				"id" => 969, 
				"city_id" => 27, 
				"name_en" => "Bouguirat", 
				"name_fr" => "Bouguirat", 
				"name_ar" => "بوقيراط" 
			], 
			[
				"id" => 984, 
				"city_id" => 27, 
				"name_en" => "Safsaf", 
				"name_fr" => "Safsaf", 
				"name_ar" => "صفصاف" 
			], 
			[
				"id" => 989, 
				"city_id" => 27, 
				"name_en" => "Sirat", 
				"name_fr" => "Sirat", 
				"name_ar" => "سيرات" 
			], 
			[
				"id" => 990, 
				"city_id" => 27, 
				"name_en" => "Souaflia", 
				"name_fr" => "Souaflia", 
				"name_ar" => "السوافلية" 
			], 
			[
				"id" => 966, 
				"city_id" => 27, 
				"name_en" => "Ain-Sidi Cherif", 
				"name_fr" => "Ain-Sidi Cherif", 
				"name_ar" => "عين سيدي الشريف" 
			], 
			[
				"id" => 976, 
				"city_id" => 27, 
				"name_en" => "Mansourah", 
				"name_fr" => "Mansourah", 
				"name_ar" => "منصورة" 
			], 
			[
				"id" => 978, 
				"city_id" => 27, 
				"name_en" => "Mesra", 
				"name_fr" => "Mesra", 
				"name_ar" => "ماسرة" 
			], 
			[
				"id" => 994, 
				"city_id" => 27, 
				"name_en" => "Touahria", 
				"name_fr" => "Touahria", 
				"name_ar" => "الطواهرية" 
			], 
			[
				"id" => 965, 
				"city_id" => 27, 
				"name_en" => "Ain-Nouissy", 
				"name_fr" => "Ain-Nouissy", 
				"name_ar" => "عين نويسي" 
			], 
			[
				"id" => 983, 
				"city_id" => 27, 
				"name_en" => "Ouled-Maalah", 
				"name_fr" => "Ouled-Maalah", 
				"name_ar" => "أولاد مع الله" 
			], 
			[
				"id" => 1008, 
				"city_id" => 28, 
				"name_en" => "Chellal", 
				"name_fr" => "Chellal", 
				"name_ar" => "شلال" 
			], 
			[
				"id" => 1028, 
				"city_id" => 28, 
				"name_en" => "Ouled Madhi", 
				"name_fr" => "Ouled Madhi", 
				"name_ar" => "أولاد ماضي" 
			], 
			[
				"id" => 1014, 
				"city_id" => 28, 
				"name_en" => "Khettouti Sed-El-Jir", 
				"name_fr" => "Khettouti Sed-El-Jir", 
				"name_ar" => "خطوطي سد الجير" 
			], 
			[
				"id" => 1000, 
				"city_id" => 28, 
				"name_en" => "Belaiba", 
				"name_fr" => "Belaiba", 
				"name_ar" => "بلعايبة" 
			], 
			[
				"id" => 1004, 
				"city_id" => 28, 
				"name_en" => "Berhoum", 
				"name_fr" => "Berhoum", 
				"name_ar" => "برهوم" 
			], 
			[
				"id" => 1009, 
				"city_id" => 28, 
				"name_en" => "Dehahna", 
				"name_fr" => "Dehahna", 
				"name_ar" => "دهاهنة" 
			], 
			[
				"id" => 1018, 
				"city_id" => 28, 
				"name_en" => "Magra", 
				"name_fr" => "Magra", 
				"name_ar" => "مقرة" 
			], 
			[
				"id" => 1002, 
				"city_id" => 28, 
				"name_en" => "Beni Ilmane", 
				"name_fr" => "Beni Ilmane", 
				"name_ar" => "بني يلمان" 
			], 
			[
				"id" => 1007, 
				"city_id" => 28, 
				"name_en" => "Bouti Sayeh", 
				"name_fr" => "Bouti Sayeh", 
				"name_ar" => "بوطي السايح" 
			], 
			[
				"id" => 1033, 
				"city_id" => 28, 
				"name_en" => "Sidi Aissa", 
				"name_fr" => "Sidi Aissa", 
				"name_ar" => "سيدي عيسى" 
			], 
			[
				"id" => 995, 
				"city_id" => 28, 
				"name_en" => "Ain El Hadjel", 
				"name_fr" => "Ain El Hadjel", 
				"name_ar" => "عين الحجل" 
			], 
			[
				"id" => 1035, 
				"city_id" => 28, 
				"name_en" => "Sidi Hadjeres", 
				"name_fr" => "Sidi Hadjeres", 
				"name_ar" => "سيدي هجرس" 
			], 
			[
				"id" => 1006, 
				"city_id" => 28, 
				"name_en" => "Bou Saada", 
				"name_fr" => "Bou Saada", 
				"name_ar" => "بوسعادة" 
			], 
			[
				"id" => 1011, 
				"city_id" => 28, 
				"name_en" => "El Hamel", 
				"name_fr" => "El Hamel", 
				"name_ar" => "الهامل" 
			], 
			[
				"id" => 1032, 
				"city_id" => 28, 
				"name_en" => "Oulteme", 
				"name_fr" => "Oulteme", 
				"name_ar" => "ولتام" 
			], 
			[
				"id" => 1003, 
				"city_id" => 28, 
				"name_en" => "Benzouh", 
				"name_fr" => "Benzouh", 
				"name_ar" => "بن زوه" 
			], 
			[
				"id" => 1030, 
				"city_id" => 28, 
				"name_en" => "Ouled Sidi Brahim", 
				"name_fr" => "Ouled Sidi Brahim", 
				"name_ar" => "أولاد سيدي ابراهيم" 
			], 
			[
				"id" => 1034, 
				"city_id" => 28, 
				"name_en" => "Sidi Ameur", 
				"name_fr" => "Sidi Ameur", 
				"name_ar" => "سيدي عامر" 
			], 
			[
				"id" => 1039, 
				"city_id" => 28, 
				"name_en" => "Tamsa", 
				"name_fr" => "Tamsa", 
				"name_ar" => "تامسة" 
			], 
			[
				"id" => 1001, 
				"city_id" => 28, 
				"name_en" => "Ben Srour", 
				"name_fr" => "Ben Srour", 
				"name_ar" => "بن سرور" 
			], 
			[
				"id" => 1022, 
				"city_id" => 28, 
				"name_en" => "Mohamed Boudiaf", 
				"name_fr" => "Mohamed Boudiaf", 
				"name_ar" => "محمد بوضياف" 
			], 
			[
				"id" => 1031, 
				"city_id" => 28, 
				"name_en" => "Ouled Slimane", 
				"name_fr" => "Ouled Slimane", 
				"name_ar" => "أولاد سليمان" 
			], 
			[
				"id" => 1041, 
				"city_id" => 28, 
				"name_en" => "Zarzour", 
				"name_fr" => "Zarzour", 
				"name_ar" => "زرزور" 
			], 
			[
				"id" => 996, 
				"city_id" => 28, 
				"name_en" => "Ain El Melh", 
				"name_fr" => "Ain El Melh", 
				"name_ar" => "عين الملح" 
			], 
			[
				"id" => 997, 
				"city_id" => 28, 
				"name_en" => "Ain Fares", 
				"name_fr" => "Ain Fares", 
				"name_ar" => "عين فارس" 
			], 
			[
				"id" => 999, 
				"city_id" => 28, 
				"name_en" => "Ain Rich", 
				"name_fr" => "Ain Rich", 
				"name_ar" => "عين الريش" 
			], 
			[
				"id" => 1005, 
				"city_id" => 28, 
				"name_en" => "Bir Foda", 
				"name_fr" => "Bir Foda", 
				"name_ar" => "بئر فضة" 
			], 
			[
				"id" => 1036, 
				"city_id" => 28, 
				"name_en" => "Sidi M'hamed", 
				"name_fr" => "Sidi M'hamed", 
				"name_ar" => "سيدي امحمد" 
			], 
			[
				"id" => 1020, 
				"city_id" => 28, 
				"name_en" => "Medjedel", 
				"name_fr" => "Medjedel", 
				"name_ar" => "امجدل" 
			], 
			[
				"id" => 1021, 
				"city_id" => 28, 
				"name_en" => "Menaa", 
				"name_fr" => "Menaa", 
				"name_ar" => "مناعة" 
			], 
			[
				"id" => 1010, 
				"city_id" => 28, 
				"name_en" => "Djebel Messaad", 
				"name_fr" => "Djebel Messaad", 
				"name_ar" => "جبل مساعد" 
			], 
			[
				"id" => 1037, 
				"city_id" => 28, 
				"name_en" => "Slim", 
				"name_fr" => "Slim", 
				"name_ar" => "سليم" 
			], 
			[
				"id" => 1023, 
				"city_id" => 28, 
				"name_en" => "M'sila", 
				"name_fr" => "M'sila", 
				"name_ar" => "المسيلة" 
			], 
			[
				"id" => 1013, 
				"city_id" => 28, 
				"name_en" => "Hammam Dalaa", 
				"name_fr" => "Hammam Dalaa", 
				"name_ar" => "حمام الضلعة" 
			], 
			[
				"id" => 1025, 
				"city_id" => 28, 
				"name_en" => "Ouanougha", 
				"name_fr" => "Ouanougha", 
				"name_ar" => "ونوغة" 
			], 
			[
				"id" => 1029, 
				"city_id" => 28, 
				"name_en" => "Ouled Mansour", 
				"name_fr" => "Ouled Mansour", 
				"name_ar" => "أولاد منصور" 
			], 
			[
				"id" => 1040, 
				"city_id" => 28, 
				"name_en" => "Tarmount", 
				"name_fr" => "Tarmount", 
				"name_ar" => "تارمونت" 
			], 
			[
				"id" => 1016, 
				"city_id" => 28, 
				"name_en" => "Maadid", 
				"name_fr" => "Maadid", 
				"name_ar" => "المعاضيد" 
			], 
			[
				"id" => 1024, 
				"city_id" => 28, 
				"name_en" => "M'tarfa", 
				"name_fr" => "M'tarfa", 
				"name_ar" => "المطارفة" 
			], 
			[
				"id" => 1017, 
				"city_id" => 28, 
				"name_en" => "Maarif", 
				"name_fr" => "Maarif", 
				"name_ar" => "معاريف" 
			], 
			[
				"id" => 1027, 
				"city_id" => 28, 
				"name_en" => "Ouled Derradj", 
				"name_fr" => "Ouled Derradj", 
				"name_ar" => "أولاد دراج" 
			], 
			[
				"id" => 1038, 
				"city_id" => 28, 
				"name_en" => "Souamaa", 
				"name_fr" => "Souamaa", 
				"name_ar" => "السوامع" 
			], 
			[
				"id" => 1012, 
				"city_id" => 28, 
				"name_en" => "El Houamed", 
				"name_fr" => "El Houamed", 
				"name_ar" => "الحوامد" 
			], 
			[
				"id" => 1015, 
				"city_id" => 28, 
				"name_en" => "Khoubana", 
				"name_fr" => "Khoubana", 
				"name_ar" => "خبانة" 
			], 
			[
				"id" => 1019, 
				"city_id" => 28, 
				"name_en" => "M'cif", 
				"name_fr" => "M'cif", 
				"name_ar" => "مسيف" 
			], 
			[
				"id" => 998, 
				"city_id" => 28, 
				"name_en" => "Ain Khadra", 
				"name_fr" => "Ain Khadra", 
				"name_ar" => "عين الخضراء" 
			], 
			[
				"id" => 1026, 
				"city_id" => 28, 
				"name_en" => "Ouled Addi Guebala", 
				"name_fr" => "Ouled Addi Guebala", 
				"name_ar" => "أولاد عدي لقبالة" 
			], 
			[
				"id" => 1075, 
				"city_id" => 29, 
				"name_en" => "Oued El Abtal", 
				"name_fr" => "Oued El Abtal", 
				"name_ar" => "وادي الأبطال" 
			], 
			[
				"id" => 1081, 
				"city_id" => 29, 
				"name_en" => "Sidi Abdelmoumene", 
				"name_fr" => "Sidi Abdelmoumene", 
				"name_ar" => "سيدي عبد المومن" 
			], 
			[
				"id" => 1078, 
				"city_id" => 29, 
				"name_en" => "Sedjerara", 
				"name_fr" => "Sedjerara", 
				"name_ar" => "سجرارة" 
			], 
			[
				"id" => 1072, 
				"city_id" => 29, 
				"name_en" => "Mohammadia", 
				"name_fr" => "Mohammadia", 
				"name_ar" => "المحمدية" 
			], 
			[
				"id" => 1085, 
				"city_id" => 29, 
				"name_en" => "Tighennif", 
				"name_fr" => "Tighennif", 
				"name_ar" => "تيغنيف" 
			], 
			[
				"id" => 1071, 
				"city_id" => 29, 
				"name_en" => "Mocta-Douz", 
				"name_fr" => "Mocta-Douz", 
				"name_ar" => "مقطع الدوز" 
			], 
			[
				"id" => 1060, 
				"city_id" => 29, 
				"name_en" => "Ferraguig", 
				"name_fr" => "Ferraguig", 
				"name_ar" => "فراقيق" 
			], 
			[
				"id" => 1054, 
				"city_id" => 29, 
				"name_en" => "El Ghomri", 
				"name_fr" => "El Ghomri", 
				"name_ar" => "الغمري" 
			], 
			[
				"id" => 1087, 
				"city_id" => 29, 
				"name_en" => "Zahana", 
				"name_fr" => "Zahana", 
				"name_ar" => "زهانة" 
			], 
			[
				"id" => 1053, 
				"city_id" => 29, 
				"name_en" => "El Gaada", 
				"name_fr" => "El Gaada", 
				"name_ar" => "القعدة" 
			], 
			[
				"id" => 1077, 
				"city_id" => 29, 
				"name_en" => "Ras El Ain Amirouche", 
				"name_fr" => "Ras El Ain Amirouche", 
				"name_ar" => "رأس عين عميروش" 
			], 
			[
				"id" => 1074, 
				"city_id" => 29, 
				"name_en" => "Oggaz", 
				"name_fr" => "Oggaz", 
				"name_ar" => "عقاز" 
			], 
			[
				"id" => 1046, 
				"city_id" => 29, 
				"name_en" => "Alaimia", 
				"name_fr" => "Alaimia", 
				"name_ar" => "العلايمية" 
			], 
			[
				"id" => 1084, 
				"city_id" => 29, 
				"name_en" => "Sig", 
				"name_fr" => "Sig", 
				"name_ar" => "سيق" 
			], 
			[
				"id" => 1051, 
				"city_id" => 29, 
				"name_en" => "Chorfa", 
				"name_fr" => "Chorfa", 
				"name_ar" => "الشرفاء" 
			], 
			[
				"id" => 1049, 
				"city_id" => 29, 
				"name_en" => "Bou Henni", 
				"name_fr" => "Bou Henni", 
				"name_ar" => "بوهني" 
			], 
			[
				"id" => 1058, 
				"city_id" => 29, 
				"name_en" => "El Mamounia", 
				"name_fr" => "El Mamounia", 
				"name_ar" => "المأمونية" 
			], 
			[
				"id" => 1055, 
				"city_id" => 29, 
				"name_en" => "El Gueitena", 
				"name_fr" => "El Gueitena", 
				"name_ar" => "القطنة" 
			], 
			[
				"id" => 1042, 
				"city_id" => 29, 
				"name_en" => "Ain Fares", 
				"name_fr" => "Ain Fares", 
				"name_ar" => "عين فارس" 
			], 
			[
				"id" => 1062, 
				"city_id" => 29, 
				"name_en" => "Gharrous", 
				"name_fr" => "Gharrous", 
				"name_ar" => "غروس" 
			], 
			[
				"id" => 1048, 
				"city_id" => 29, 
				"name_en" => "Benian", 
				"name_fr" => "Benian", 
				"name_ar" => "بنيان" 
			], 
			[
				"id" => 1047, 
				"city_id" => 29, 
				"name_en" => "Aouf", 
				"name_fr" => "Aouf", 
				"name_ar" => "عوف" 
			], 
			[
				"id" => 1064, 
				"city_id" => 29, 
				"name_en" => "Guerdjoum", 
				"name_fr" => "Guerdjoum", 
				"name_ar" => "قرجوم" 
			], 
			[
				"id" => 1045, 
				"city_id" => 29, 
				"name_en" => "Ain Frass", 
				"name_fr" => "Ain Frass", 
				"name_ar" => "عين أفرص" 
			], 
			[
				"id" => 1043, 
				"city_id" => 29, 
				"name_en" => "Ain Fekan", 
				"name_fr" => "Ain Fekan", 
				"name_ar" => "عين فكان" 
			], 
			[
				"id" => 1066, 
				"city_id" => 29, 
				"name_en" => "Khalouia", 
				"name_fr" => "Khalouia", 
				"name_ar" => "خلوية" 
			], 
			[
				"id" => 1059, 
				"city_id" => 29, 
				"name_en" => "El Menaouer", 
				"name_fr" => "El Menaouer", 
				"name_ar" => "المنور" 
			], 
			[
				"id" => 1052, 
				"city_id" => 29, 
				"name_en" => "El Bordj", 
				"name_fr" => "El Bordj", 
				"name_ar" => "البرج" 
			], 
			[
				"id" => 1082, 
				"city_id" => 29, 
				"name_en" => "Sidi Boussaid", 
				"name_fr" => "Sidi Boussaid", 
				"name_ar" => "سيدي بوسعيد" 
			], 
			[
				"id" => 1070, 
				"city_id" => 29, 
				"name_en" => "Matemore", 
				"name_fr" => "Matemore", 
				"name_ar" => "المطمور" 
			], 
			[
				"id" => 1083, 
				"city_id" => 29, 
				"name_en" => "Sidi Kada", 
				"name_fr" => "Sidi Kada", 
				"name_ar" => "سيدي قادة" 
			], 
			[
				"id" => 1067, 
				"city_id" => 29, 
				"name_en" => "Makhda", 
				"name_fr" => "Makhda", 
				"name_ar" => "ماقضة" 
			], 
			[
				"id" => 1069, 
				"city_id" => 29, 
				"name_en" => "Mascara", 
				"name_fr" => "Mascara", 
				"name_ar" => "معسكر" 
			], 
			[
				"id" => 1050, 
				"city_id" => 29, 
				"name_en" => "Bouhanifia", 
				"name_fr" => "Bouhanifia", 
				"name_ar" => "بوحنيفية" 
			], 
			[
				"id" => 1063, 
				"city_id" => 29, 
				"name_en" => "Ghriss", 
				"name_fr" => "Ghriss", 
				"name_ar" => "غريس" 
			], 
			[
				"id" => 1065, 
				"city_id" => 29, 
				"name_en" => "Hacine", 
				"name_fr" => "Hacine", 
				"name_ar" => "حسين" 
			], 
			[
				"id" => 1057, 
				"city_id" => 29, 
				"name_en" => "El Keurt", 
				"name_fr" => "El Keurt", 
				"name_ar" => "القرط" 
			], 
			[
				"id" => 1061, 
				"city_id" => 29, 
				"name_en" => "Froha", 
				"name_fr" => "Froha", 
				"name_ar" => "فروحة" 
			], 
			[
				"id" => 1086, 
				"city_id" => 29, 
				"name_en" => "Tizi", 
				"name_fr" => "Tizi", 
				"name_ar" => "تيزي" 
			], 
			[
				"id" => 1079, 
				"city_id" => 29, 
				"name_en" => "Sehailia", 
				"name_fr" => "Sehailia", 
				"name_ar" => "السهايلية" 
			], 
			[
				"id" => 1068, 
				"city_id" => 29, 
				"name_en" => "Maoussa", 
				"name_fr" => "Maoussa", 
				"name_ar" => "ماوسة" 
			], 
			[
				"id" => 1080, 
				"city_id" => 29, 
				"name_en" => "Sidi Abdeldjebar", 
				"name_fr" => "Sidi Abdeldjebar", 
				"name_ar" => "سيدي عبد الجبار" 
			], 
			[
				"id" => 1056, 
				"city_id" => 29, 
				"name_en" => "El Hachem", 
				"name_fr" => "El Hachem", 
				"name_ar" => "الحشم" 
			], 
			[
				"id" => 1073, 
				"city_id" => 29, 
				"name_en" => "Nesmot", 
				"name_fr" => "Nesmot", 
				"name_ar" => "نسمط" 
			], 
			[
				"id" => 1088, 
				"city_id" => 29, 
				"name_en" => "Zelamta", 
				"name_fr" => "Zelamta", 
				"name_ar" => "زلامطة" 
			], 
			[
				"id" => 1044, 
				"city_id" => 29, 
				"name_en" => "Ain Ferah", 
				"name_fr" => "Ain Ferah", 
				"name_ar" => "عين فراح" 
			], 
			[
				"id" => 1076, 
				"city_id" => 29, 
				"name_en" => "Oued Taria", 
				"name_fr" => "Oued Taria", 
				"name_ar" => "وادي التاغية" 
			], 
			[
				"id" => 1101, 
				"city_id" => 30, 
				"name_en" => "Ouargla", 
				"name_fr" => "Ouargla", 
				"name_ar" => "ورقلة" 
			], 
			[
				"id" => 1096, 
				"city_id" => 30, 
				"name_en" => "Hassi Messaoud", 
				"name_fr" => "Hassi Messaoud", 
				"name_ar" => "حاسي مسعود" 
			], 
			[
				"id" => 1089, 
				"city_id" => 30, 
				"name_en" => "Ain Beida", 
				"name_fr" => "Ain Beida", 
				"name_ar" => "عين البيضاء" 
			], 
			[
				"id" => 1095, 
				"city_id" => 30, 
				"name_en" => "Hassi Ben Abdellah", 
				"name_fr" => "Hassi Ben Abdellah", 
				"name_ar" => "حاسي بن عبد الله" 
			], 
			[
				"id" => 1103, 
				"city_id" => 30, 
				"name_en" => "Sidi Khouiled", 
				"name_fr" => "Sidi Khouiled", 
				"name_ar" => "سيدي خويلد" 
			], 
			[
				"id" => 1093, 
				"city_id" => 30, 
				"name_en" => "El Borma", 
				"name_fr" => "El Borma", 
				"name_ar" => "البرمة" 
			], 
			[
				"id" => 1102, 
				"city_id" => 30, 
				"name_en" => "Rouissat", 
				"name_fr" => "Rouissat", 
				"name_ar" => "الرويسات" 
			], 
			[
				"id" => 1100, 
				"city_id" => 30, 
				"name_en" => "N'goussa", 
				"name_fr" => "N'goussa", 
				"name_ar" => "انقوسة" 
			], 
			[
				"id" => 1134, 
				"city_id" => 31, 
				"name_en" => "Sidi Chami", 
				"name_fr" => "Sidi Chami", 
				"name_ar" => "سيدي الشحمي" 
			], 
			[
				"id" => 1127, 
				"city_id" => 31, 
				"name_en" => "Hassi Mefsoukh", 
				"name_fr" => "Hassi Mefsoukh", 
				"name_ar" => "حاسي مفسوخ" 
			], 
			[
				"id" => 1116, 
				"city_id" => 31, 
				"name_en" => "Bir El Djir", 
				"name_fr" => "Bir El Djir", 
				"name_ar" => "بئر الجير" 
			], 
			[
				"id" => 1125, 
				"city_id" => 31, 
				"name_en" => "Hassi Ben Okba", 
				"name_fr" => "Hassi Ben Okba", 
				"name_ar" => "حاسي بن عقبة" 
			], 
			[
				"id" => 1124, 
				"city_id" => 31, 
				"name_en" => "Gdyel", 
				"name_fr" => "Gdyel", 
				"name_ar" => "قديل" 
			], 
			[
				"id" => 1126, 
				"city_id" => 31, 
				"name_en" => "Hassi Bounif", 
				"name_fr" => "Hassi Bounif", 
				"name_ar" => "حاسي بونيف" 
			], 
			[
				"id" => 1122, 
				"city_id" => 31, 
				"name_en" => "El Kerma", 
				"name_fr" => "El Kerma", 
				"name_ar" => "الكرمة" 
			], 
			[
				"id" => 1123, 
				"city_id" => 31, 
				"name_en" => "Es Senia", 
				"name_fr" => "Es Senia", 
				"name_ar" => "السانية" 
			], 
			[
				"id" => 1114, 
				"city_id" => 31, 
				"name_en" => "Ben Freha", 
				"name_fr" => "Ben Freha", 
				"name_ar" => "بن فريحة" 
			], 
			[
				"id" => 1113, 
				"city_id" => 31, 
				"name_en" => "Arzew", 
				"name_fr" => "Arzew", 
				"name_ar" => "أرزيو" 
			], 
			[
				"id" => 1133, 
				"city_id" => 31, 
				"name_en" => "Sidi Ben Yebka", 
				"name_fr" => "Sidi Ben Yebka", 
				"name_ar" => "سيدي بن يبقى" 
			], 
			[
				"id" => 1110, 
				"city_id" => 31, 
				"name_en" => "Ain Biya", 
				"name_fr" => "Ain Biya", 
				"name_ar" => "عين البية" 
			], 
			[
				"id" => 1115, 
				"city_id" => 31, 
				"name_en" => "Bethioua", 
				"name_fr" => "Bethioua", 
				"name_ar" => "بطيوة" 
			], 
			[
				"id" => 1128, 
				"city_id" => 31, 
				"name_en" => "Marsat El Hadjadj", 
				"name_fr" => "Marsat El Hadjadj", 
				"name_ar" => "مرسى الحجاج" 
			], 
			[
				"id" => 1112, 
				"city_id" => 31, 
				"name_en" => "Ain Turk", 
				"name_fr" => "Ain Turk", 
				"name_ar" => "عين الترك" 
			], 
			[
				"id" => 1131, 
				"city_id" => 31, 
				"name_en" => "Oran", 
				"name_fr" => "Oran", 
				"name_ar" => "وهران" 
			], 
			[
				"id" => 1120, 
				"city_id" => 31, 
				"name_en" => "El Ancor", 
				"name_fr" => "El Ancor", 
				"name_ar" => "العنصر" 
			], 
			[
				"id" => 1129, 
				"city_id" => 31, 
				"name_en" => "Mers El Kebir", 
				"name_fr" => "Mers El Kebir", 
				"name_ar" => "المرسى الكبير" 
			], 
			[
				"id" => 1117, 
				"city_id" => 31, 
				"name_en" => "Boufatis", 
				"name_fr" => "Boufatis", 
				"name_ar" => "بوفاتيس" 
			], 
			[
				"id" => 1121, 
				"city_id" => 31, 
				"name_en" => "El Braya", 
				"name_fr" => "El Braya", 
				"name_ar" => "البراية" 
			], 
			[
				"id" => 1132, 
				"city_id" => 31, 
				"name_en" => "Oued Tlelat", 
				"name_fr" => "Oued Tlelat", 
				"name_ar" => "وادي تليلات" 
			], 
			[
				"id" => 1111, 
				"city_id" => 31, 
				"name_en" => "Ain Kerma", 
				"name_fr" => "Ain Kerma", 
				"name_ar" => "عين الكرمة" 
			], 
			[
				"id" => 1119, 
				"city_id" => 31, 
				"name_en" => "Boutlelis", 
				"name_fr" => "Boutlelis", 
				"name_ar" => "بوتليليس" 
			], 
			[
				"id" => 1130, 
				"city_id" => 31, 
				"name_en" => "Messerghin", 
				"name_fr" => "Messerghin", 
				"name_ar" => "مسرغين" 
			], 
			[
				"id" => 1118, 
				"city_id" => 31, 
				"name_en" => "Bousfer", 
				"name_fr" => "Bousfer", 
				"name_ar" => "بوسفر" 
			], 
			[
				"id" => 1135, 
				"city_id" => 31, 
				"name_en" => "Tafraoui", 
				"name_fr" => "Tafraoui", 
				"name_ar" => "طفراوي" 
			], 
			[
				"id" => 1136, 
				"city_id" => 32, 
				"name_en" => "Ain El Orak", 
				"name_fr" => "Ain El Orak", 
				"name_ar" => "عين العراك" 
			], 
			[
				"id" => 1151, 
				"city_id" => 32, 
				"name_en" => "Krakda", 
				"name_fr" => "Krakda", 
				"name_ar" => "كراكدة" 
			], 
			[
				"id" => 1154, 
				"city_id" => 32, 
				"name_en" => "Sidi Slimane", 
				"name_fr" => "Sidi Slimane", 
				"name_ar" => "سيدي سليمان" 
			], 
			[
				"id" => 1153, 
				"city_id" => 32, 
				"name_en" => "Sidi Ameur", 
				"name_fr" => "Sidi Ameur", 
				"name_ar" => "سيدي عامر" 
			], 
			[
				"id" => 1138, 
				"city_id" => 32, 
				"name_en" => "Boualem", 
				"name_fr" => "Boualem", 
				"name_ar" => "بوعلام" 
			], 
			[
				"id" => 1146, 
				"city_id" => 32, 
				"name_en" => "El Bnoud", 
				"name_fr" => "El Bnoud", 
				"name_ar" => "البنود" 
			], 
			[
				"id" => 1139, 
				"city_id" => 32, 
				"name_en" => "Bougtoub", 
				"name_fr" => "Bougtoub", 
				"name_ar" => "بوقطب" 
			], 
			[
				"id" => 1147, 
				"city_id" => 32, 
				"name_en" => "El Kheiter", 
				"name_fr" => "El Kheiter", 
				"name_ar" => "الخيثر" 
			], 
			[
				"id" => 1157, 
				"city_id" => 32, 
				"name_en" => "Tousmouline", 
				"name_fr" => "Tousmouline", 
				"name_ar" => "توسمولين" 
			], 
			[
				"id" => 1155, 
				"city_id" => 32, 
				"name_en" => "Sidi Tiffour", 
				"name_fr" => "Sidi Tiffour", 
				"name_ar" => "سيدي طيفور" 
			], 
			[
				"id" => 1156, 
				"city_id" => 32, 
				"name_en" => "Stitten", 
				"name_fr" => "Stitten", 
				"name_ar" => "ستيتن" 
			], 
			[
				"id" => 1144, 
				"city_id" => 32, 
				"name_en" => "El Bayadh", 
				"name_fr" => "El Bayadh", 
				"name_ar" => "البيض" 
			], 
			[
				"id" => 1152, 
				"city_id" => 32, 
				"name_en" => "Rogassa", 
				"name_fr" => "Rogassa", 
				"name_ar" => "رقاصة" 
			], 
			[
				"id" => 1148, 
				"city_id" => 32, 
				"name_en" => "El Mehara", 
				"name_fr" => "El Mehara", 
				"name_ar" => "المحرة" 
			], 
			[
				"id" => 1150, 
				"city_id" => 32, 
				"name_en" => "Kef El Ahmar", 
				"name_fr" => "Kef El Ahmar", 
				"name_ar" => "الكاف الأحمر" 
			], 
			[
				"id" => 1141, 
				"city_id" => 32, 
				"name_en" => "Brezina", 
				"name_fr" => "Brezina", 
				"name_ar" => "بريزينة" 
			], 
			[
				"id" => 1149, 
				"city_id" => 32, 
				"name_en" => "Ghassoul", 
				"name_fr" => "Ghassoul", 
				"name_ar" => "الغاسول" 
			], 
			[
				"id" => 1145, 
				"city_id" => 32, 
				"name_en" => "Labiodh Sidi Cheikh", 
				"name_fr" => "Labiodh Sidi Cheikh", 
				"name_ar" => "الأبيض سيدي الشيخ" 
			], 
			[
				"id" => 1140, 
				"city_id" => 32, 
				"name_en" => "Boussemghoun", 
				"name_fr" => "Boussemghoun", 
				"name_ar" => "بوسمغون" 
			], 
			[
				"id" => 1142, 
				"city_id" => 32, 
				"name_en" => "Cheguig", 
				"name_fr" => "Cheguig", 
				"name_ar" => "الشقيق" 
			], 
			[
				"id" => 1143, 
				"city_id" => 32, 
				"name_en" => "Chellala", 
				"name_fr" => "Chellala", 
				"name_ar" => "شلالة" 
			], 
			[
				"id" => 1137, 
				"city_id" => 32, 
				"name_en" => "Arbaouat", 
				"name_fr" => "Arbaouat", 
				"name_ar" => "اربوات" 
			], 
			[
				"id" => 1159, 
				"city_id" => 33, 
				"name_en" => "Bordj Omar Driss", 
				"name_fr" => "Bordj Omar Driss", 
				"name_ar" => "برج عمر إدريس" 
			], 
			[
				"id" => 1160, 
				"city_id" => 33, 
				"name_en" => "Debdeb", 
				"name_fr" => "Debdeb", 
				"name_ar" => "دبداب" 
			], 
			[
				"id" => 1163, 
				"city_id" => 33, 
				"name_en" => "In Amenas", 
				"name_fr" => "In Amenas", 
				"name_ar" => "إن أمناس" 
			], 
			[
				"id" => 1162, 
				"city_id" => 33, 
				"name_en" => "Illizi", 
				"name_fr" => "Illizi", 
				"name_ar" => "إيليزي" 
			], 
			[
				"id" => 1177, 
				"city_id" => 34, 
				"name_en" => "Elhammadia", 
				"name_fr" => "Elhammadia", 
				"name_ar" => "الحمادية" 
			], 
			[
				"id" => 1189, 
				"city_id" => 34, 
				"name_en" => "Ouled Sidi-Brahim", 
				"name_fr" => "Ouled Sidi-Brahim", 
				"name_ar" => "أولاد سيدي ابراهيم" 
			], 
			[
				"id" => 1164, 
				"city_id" => 34, 
				"name_en" => "Ain Taghrout", 
				"name_fr" => "Ain Taghrout", 
				"name_ar" => "عين تاغروت" 
			], 
			[
				"id" => 1197, 
				"city_id" => 34, 
				"name_en" => "Tixter", 
				"name_fr" => "Tixter", 
				"name_ar" => "تيكستار" 
			], 
			[
				"id" => 1167, 
				"city_id" => 34, 
				"name_en" => "Belimour", 
				"name_fr" => "Belimour", 
				"name_ar" => "بليمور" 
			], 
			[
				"id" => 1176, 
				"city_id" => 34, 
				"name_en" => "El Annasseur", 
				"name_fr" => "El Annasseur", 
				"name_ar" => "العناصر" 
			], 
			[
				"id" => 1180, 
				"city_id" => 34, 
				"name_en" => "Ghailasa", 
				"name_fr" => "Ghailasa", 
				"name_ar" => "غيلاسة" 
			], 
			[
				"id" => 1194, 
				"city_id" => 34, 
				"name_en" => "Taglait", 
				"name_fr" => "Taglait", 
				"name_ar" => "تقلعيت" 
			], 
			[
				"id" => 1170, 
				"city_id" => 34, 
				"name_en" => "Bordj Ghedir", 
				"name_fr" => "Bordj Ghedir", 
				"name_ar" => "برج الغدير" 
			], 
			[
				"id" => 1174, 
				"city_id" => 34, 
				"name_en" => "El Euch", 
				"name_fr" => "El Euch", 
				"name_ar" => "العش" 
			], 
			[
				"id" => 1192, 
				"city_id" => 34, 
				"name_en" => "Sidi-Embarek", 
				"name_fr" => "Sidi-Embarek", 
				"name_ar" => "سيدي أمبارك" 
			], 
			[
				"id" => 1183, 
				"city_id" => 34, 
				"name_en" => "Khelil", 
				"name_fr" => "Khelil", 
				"name_ar" => "خليل" 
			], 
			[
				"id" => 1169, 
				"city_id" => 34, 
				"name_en" => "Bir Kasdali", 
				"name_fr" => "Bir Kasdali", 
				"name_ar" => "بئر قاصد علي" 
			], 
			[
				"id" => 1193, 
				"city_id" => 34, 
				"name_en" => "Tefreg", 
				"name_fr" => "Tefreg", 
				"name_ar" => "تفرق" 
			], 
			[
				"id" => 1178, 
				"city_id" => 34, 
				"name_en" => "El Main", 
				"name_fr" => "El Main", 
				"name_ar" => "الماين" 
			], 
			[
				"id" => 1173, 
				"city_id" => 34, 
				"name_en" => "Djaafra", 
				"name_fr" => "Djaafra", 
				"name_ar" => "جعافرة" 
			], 
			[
				"id" => 1172, 
				"city_id" => 34, 
				"name_en" => "Colla", 
				"name_fr" => "Colla", 
				"name_ar" => "القلة" 
			], 
			[
				"id" => 1196, 
				"city_id" => 34, 
				"name_en" => "Teniet En Nasr", 
				"name_fr" => "Teniet En Nasr", 
				"name_ar" => "ثنية النصر" 
			], 
			[
				"id" => 1179, 
				"city_id" => 34, 
				"name_en" => "El M'hir", 
				"name_fr" => "El M'hir", 
				"name_ar" => "المهير" 
			], 
			[
				"id" => 1184, 
				"city_id" => 34, 
				"name_en" => "Ksour", 
				"name_fr" => "Ksour", 
				"name_ar" => "القصور" 
			], 
			[
				"id" => 1185, 
				"city_id" => 34, 
				"name_en" => "Mansoura", 
				"name_fr" => "Mansoura", 
				"name_ar" => "المنصورة" 
			], 
			[
				"id" => 1181, 
				"city_id" => 34, 
				"name_en" => "Haraza", 
				"name_fr" => "Haraza", 
				"name_ar" => "حرازة" 
			], 
			[
				"id" => 1190, 
				"city_id" => 34, 
				"name_en" => "Rabta", 
				"name_fr" => "Rabta", 
				"name_ar" => "الرابطة" 
			], 
			[
				"id" => 1175, 
				"city_id" => 34, 
				"name_en" => "El Achir", 
				"name_fr" => "El Achir", 
				"name_ar" => "الياشير" 
			], 
			[
				"id" => 1182, 
				"city_id" => 34, 
				"name_en" => "Hasnaoua", 
				"name_fr" => "Hasnaoua", 
				"name_ar" => "حسناوة" 
			], 
			[
				"id" => 1186, 
				"city_id" => 34, 
				"name_en" => "Medjana", 
				"name_fr" => "Medjana", 
				"name_ar" => "مجانة" 
			], 
			[
				"id" => 1165, 
				"city_id" => 34, 
				"name_en" => "Ain Tesra", 
				"name_fr" => "Ain Tesra", 
				"name_ar" => "عين تسرة" 
			], 
			[
				"id" => 1187, 
				"city_id" => 34, 
				"name_en" => "Ouled Brahem", 
				"name_fr" => "Ouled Brahem", 
				"name_ar" => "أولاد أبراهم" 
			], 
			[
				"id" => 1191, 
				"city_id" => 34, 
				"name_en" => "Ras El Oued", 
				"name_fr" => "Ras El Oued", 
				"name_ar" => "رأس الوادي" 
			], 
			[
				"id" => 1171, 
				"city_id" => 34, 
				"name_en" => "Bordj Zemmoura", 
				"name_fr" => "Bordj Zemmoura", 
				"name_ar" => "برج زمورة" 
			], 
			[
				"id" => 1188, 
				"city_id" => 34, 
				"name_en" => "Ouled Dahmane", 
				"name_fr" => "Ouled Dahmane", 
				"name_ar" => "أولاد دحمان" 
			], 
			[
				"id" => 1195, 
				"city_id" => 34, 
				"name_en" => "Tassamert", 
				"name_fr" => "Tassamert", 
				"name_ar" => "تسامرت" 
			], 
			[
				"id" => 1166, 
				"city_id" => 34, 
				"name_en" => "B. B. Arreridj", 
				"name_fr" => "B. B. Arreridj", 
				"name_ar" => "برج بوعريرج" 
			], 
			[
				"id" => 1168, 
				"city_id" => 34, 
				"name_en" => "Ben Daoud", 
				"name_fr" => "Ben Daoud", 
				"name_ar" => "بن داود" 
			], 
			[
				"id" => 1212, 
				"city_id" => 35, 
				"name_en" => "El Kharrouba", 
				"name_fr" => "El Kharrouba", 
				"name_ar" => "الخروبة" 
			], 
			[
				"id" => 1210, 
				"city_id" => 35, 
				"name_en" => "Dellys", 
				"name_fr" => "Dellys", 
				"name_ar" => "دلس" 
			], 
			[
				"id" => 1201, 
				"city_id" => 35, 
				"name_en" => "Ben Choud", 
				"name_fr" => "Ben Choud", 
				"name_ar" => "بن شود" 
			], 
			[
				"id" => 1198, 
				"city_id" => 35, 
				"name_en" => "Afir", 
				"name_fr" => "Afir", 
				"name_ar" => "أعفير" 
			], 
			[
				"id" => 1226, 
				"city_id" => 35, 
				"name_en" => "Thenia", 
				"name_fr" => "Thenia", 
				"name_ar" => "الثنية" 
			], 
			[
				"id" => 1202, 
				"city_id" => 35, 
				"name_en" => "Beni Amrane", 
				"name_fr" => "Beni Amrane", 
				"name_ar" => "بني عمران" 
			], 
			[
				"id" => 1215, 
				"city_id" => 35, 
				"name_en" => "Khemis El Khechna", 
				"name_fr" => "Khemis El Khechna", 
				"name_ar" => "خميس الخشنة" 
			], 
			[
				"id" => 1199, 
				"city_id" => 35, 
				"name_en" => "Ammal", 
				"name_fr" => "Ammal", 
				"name_ar" => "عمال" 
			], 
			[
				"id" => 1228, 
				"city_id" => 35, 
				"name_en" => "Timezrit", 
				"name_fr" => "Timezrit", 
				"name_ar" => "تيمزريت" 
			], 
			[
				"id" => 1229, 
				"city_id" => 35, 
				"name_en" => "Zemmouri", 
				"name_fr" => "Zemmouri", 
				"name_ar" => "زموري" 
			], 
			[
				"id" => 1216, 
				"city_id" => 35, 
				"name_en" => "Larbatache", 
				"name_fr" => "Larbatache", 
				"name_ar" => "الاربعطاش" 
			], 
			[
				"id" => 1214, 
				"city_id" => 35, 
				"name_en" => "Isser", 
				"name_fr" => "Isser", 
				"name_ar" => "يسر" 
			], 
			[
				"id" => 1208, 
				"city_id" => 35, 
				"name_en" => "Chabet El Ameur", 
				"name_fr" => "Chabet El Ameur", 
				"name_ar" => "شعبة العامر" 
			], 
			[
				"id" => 1219, 
				"city_id" => 35, 
				"name_en" => "Ouled Aissa", 
				"name_fr" => "Ouled Aissa", 
				"name_ar" => "أولاد عيسى" 
			], 
			[
				"id" => 1218, 
				"city_id" => 35, 
				"name_en" => "Naciria", 
				"name_fr" => "Naciria", 
				"name_ar" => "الناصرية" 
			], 
			[
				"id" => 1207, 
				"city_id" => 35, 
				"name_en" => "Bouzegza Keddara", 
				"name_fr" => "Bouzegza Keddara", 
				"name_ar" => "بوزقزة قدارة" 
			], 
			[
				"id" => 1224, 
				"city_id" => 35, 
				"name_en" => "Souk El Had", 
				"name_fr" => "Souk El Had", 
				"name_ar" => "سوق الحد" 
			], 
			[
				"id" => 1223, 
				"city_id" => 35, 
				"name_en" => "Sidi Daoud", 
				"name_fr" => "Sidi Daoud", 
				"name_ar" => "سيدي داود" 
			], 
			[
				"id" => 1200, 
				"city_id" => 35, 
				"name_en" => "Baghlia", 
				"name_fr" => "Baghlia", 
				"name_ar" => "بغلية" 
			], 
			[
				"id" => 1217, 
				"city_id" => 35, 
				"name_en" => "Leghata", 
				"name_fr" => "Leghata", 
				"name_ar" => "لقاطة" 
			], 
			[
				"id" => 1211, 
				"city_id" => 35, 
				"name_en" => "Djinet", 
				"name_fr" => "Djinet", 
				"name_ar" => "جنات" 
			], 
			[
				"id" => 1227, 
				"city_id" => 35, 
				"name_en" => "Tidjelabine", 
				"name_fr" => "Tidjelabine", 
				"name_ar" => "تيجلابين" 
			], 
			[
				"id" => 1222, 
				"city_id" => 35, 
				"name_en" => "Si Mustapha", 
				"name_fr" => "Si Mustapha", 
				"name_ar" => "سي مصطفى" 
			], 
			[
				"id" => 1220, 
				"city_id" => 35, 
				"name_en" => "Ouled Hedadj", 
				"name_fr" => "Ouled Hedadj", 
				"name_ar" => "أولاد هداج" 
			], 
			[
				"id" => 1221, 
				"city_id" => 35, 
				"name_en" => "Ouled Moussa", 
				"name_fr" => "Ouled Moussa", 
				"name_ar" => "أولاد موسى" 
			], 
			[
				"id" => 1206, 
				"city_id" => 35, 
				"name_en" => "Boumerdes", 
				"name_fr" => "Boumerdes", 
				"name_ar" => "بومرداس" 
			], 
			[
				"id" => 1209, 
				"city_id" => 35, 
				"name_en" => "Corso", 
				"name_fr" => "Corso", 
				"name_ar" => "قورصو" 
			], 
			[
				"id" => 1203, 
				"city_id" => 35, 
				"name_en" => "Bordj Menaiel", 
				"name_fr" => "Bordj Menaiel", 
				"name_ar" => "برج منايل" 
			], 
			[
				"id" => 1204, 
				"city_id" => 35, 
				"name_en" => "Boudouaou", 
				"name_fr" => "Boudouaou", 
				"name_ar" => "بودواو" 
			], 
			[
				"id" => 1205, 
				"city_id" => 35, 
				"name_en" => "Boudouaou El Bahri", 
				"name_fr" => "Boudouaou El Bahri", 
				"name_ar" => "بودواو البحري" 
			], 
			[
				"id" => 1225, 
				"city_id" => 35, 
				"name_en" => "Taourga", 
				"name_fr" => "Taourga", 
				"name_ar" => "تاورقة" 
			], 
			[
				"id" => 1213, 
				"city_id" => 35, 
				"name_en" => "Hammedi", 
				"name_fr" => "Hammedi", 
				"name_ar" => "حمادي" 
			], 
			[
				"id" => 1230, 
				"city_id" => 36, 
				"name_en" => "Ain El Assel", 
				"name_fr" => "Ain El Assel", 
				"name_ar" => "عين العسل" 
			], 
			[
				"id" => 1236, 
				"city_id" => 36, 
				"name_en" => "Bougous", 
				"name_fr" => "Bougous", 
				"name_ar" => "بوقوس" 
			], 
			[
				"id" => 1246, 
				"city_id" => 36, 
				"name_en" => "El Tarf", 
				"name_fr" => "El Tarf", 
				"name_ar" => "الطارف" 
			], 
			[
				"id" => 1253, 
				"city_id" => 36, 
				"name_en" => "Zitouna", 
				"name_fr" => "Zitouna", 
				"name_ar" => "الزيتونة" 
			], 
			[
				"id" => 1235, 
				"city_id" => 36, 
				"name_en" => "Besbes", 
				"name_fr" => "Besbes", 
				"name_ar" => "البسباس" 
			], 
			[
				"id" => 1231, 
				"city_id" => 36, 
				"name_en" => "Ain Kerma", 
				"name_fr" => "Ain Kerma", 
				"name_ar" => "عين الكرمة" 
			], 
			[
				"id" => 1237, 
				"city_id" => 36, 
				"name_en" => "Bouhadjar", 
				"name_fr" => "Bouhadjar", 
				"name_ar" => "بوحجار" 
			], 
			[
				"id" => 1247, 
				"city_id" => 36, 
				"name_en" => "Hammam Beni Salah", 
				"name_fr" => "Hammam Beni Salah", 
				"name_ar" => "حمام بني صالح" 
			], 
			[
				"id" => 1249, 
				"city_id" => 36, 
				"name_en" => "Oued Zitoun", 
				"name_fr" => "Oued Zitoun", 
				"name_ar" => "وادي الزيتون" 
			], 
			[
				"id" => 1233, 
				"city_id" => 36, 
				"name_en" => "Ben M Hidi", 
				"name_fr" => "Ben M Hidi", 
				"name_ar" => "بن مهيدي" 
			], 
			[
				"id" => 1234, 
				"city_id" => 36, 
				"name_en" => "Berrihane", 
				"name_fr" => "Berrihane", 
				"name_ar" => "بريحان" 
			], 
			[
				"id" => 1239, 
				"city_id" => 36, 
				"name_en" => "Chebaita Mokhtar", 
				"name_fr" => "Chebaita Mokhtar", 
				"name_ar" => "شبيطة مختار" 
			], 
			[
				"id" => 1243, 
				"city_id" => 36, 
				"name_en" => "Echatt", 
				"name_fr" => "Echatt", 
				"name_ar" => "الشط" 
			], 
			[
				"id" => 1244, 
				"city_id" => 36, 
				"name_en" => "El Aioun", 
				"name_fr" => "El Aioun", 
				"name_ar" => "العيون" 
			], 
			[
				"id" => 1245, 
				"city_id" => 36, 
				"name_en" => "El Kala", 
				"name_fr" => "El Kala", 
				"name_ar" => "القالة" 
			], 
			[
				"id" => 1251, 
				"city_id" => 36, 
				"name_en" => "Souarekh", 
				"name_fr" => "Souarekh", 
				"name_ar" => "السوارخ" 
			], 
			[
				"id" => 1252, 
				"city_id" => 36, 
				"name_en" => "Zerizer", 
				"name_fr" => "Zerizer", 
				"name_ar" => "زريزر" 
			], 
			[
				"id" => 1238, 
				"city_id" => 36, 
				"name_en" => "Bouteldja", 
				"name_fr" => "Bouteldja", 
				"name_ar" => "بوثلجة" 
			], 
			[
				"id" => 1240, 
				"city_id" => 36, 
				"name_en" => "Chefia", 
				"name_fr" => "Chefia", 
				"name_ar" => "الشافية" 
			], 
			[
				"id" => 1248, 
				"city_id" => 36, 
				"name_en" => "Lac Des Oiseaux", 
				"name_fr" => "Lac Des Oiseaux", 
				"name_ar" => "بحيرة الطيور" 
			], 
			[
				"id" => 1241, 
				"city_id" => 36, 
				"name_en" => "Chihani", 
				"name_fr" => "Chihani", 
				"name_ar" => "شحاني" 
			], 
			[
				"id" => 1250, 
				"city_id" => 36, 
				"name_en" => "Raml Souk", 
				"name_fr" => "Raml Souk", 
				"name_ar" => "رمل السوق" 
			], 
			[
				"id" => 1232, 
				"city_id" => 36, 
				"name_en" => "Asfour", 
				"name_fr" => "Asfour", 
				"name_ar" => "عصفور" 
			], 
			[
				"id" => 1242, 
				"city_id" => 36, 
				"name_en" => "Drean", 
				"name_fr" => "Drean", 
				"name_ar" => "الذرعـان" 
			], 
			[
				"id" => 1255, 
				"city_id" => 37, 
				"name_en" => "Tindouf", 
				"name_fr" => "Tindouf", 
				"name_ar" => "تندوف" 
			], 
			[
				"id" => 1254, 
				"city_id" => 37, 
				"name_en" => "Oum El Assel", 
				"name_fr" => "Oum El Assel", 
				"name_ar" => "أم العسل" 
			], 
			[
				"id" => 1262, 
				"city_id" => 38, 
				"name_en" => "Khemisti", 
				"name_fr" => "Khemisti", 
				"name_ar" => "خميستي" 
			], 
			[
				"id" => 1275, 
				"city_id" => 38, 
				"name_en" => "Theniet El Had", 
				"name_fr" => "Theniet El Had", 
				"name_ar" => "ثنية الاحد" 
			], 
			[
				"id" => 1269, 
				"city_id" => 38, 
				"name_en" => "Ouled Bessam", 
				"name_fr" => "Ouled Bessam", 
				"name_ar" => "أولاد بسام" 
			], 
			[
				"id" => 1271, 
				"city_id" => 38, 
				"name_en" => "Sidi Boutouchent", 
				"name_fr" => "Sidi Boutouchent", 
				"name_ar" => "سيدي بوتوشنت" 
			], 
			[
				"id" => 1276, 
				"city_id" => 38, 
				"name_en" => "Tissemsilt", 
				"name_fr" => "Tissemsilt", 
				"name_ar" => "تيسمسيلت" 
			], 
			[
				"id" => 1272, 
				"city_id" => 38, 
				"name_en" => "Sidi Lantri", 
				"name_fr" => "Sidi Lantri", 
				"name_ar" => "سيدي العنتري" 
			], 
			[
				"id" => 1257, 
				"city_id" => 38, 
				"name_en" => "Beni Chaib", 
				"name_fr" => "Beni Chaib", 
				"name_ar" => "بني شعيب" 
			], 
			[
				"id" => 1258, 
				"city_id" => 38, 
				"name_en" => "Beni Lahcene", 
				"name_fr" => "Beni Lahcene", 
				"name_ar" => "بني لحسن" 
			], 
			[
				"id" => 1270, 
				"city_id" => 38, 
				"name_en" => "Sidi Abed", 
				"name_fr" => "Sidi Abed", 
				"name_ar" => "سيدي عابد" 
			], 
			[
				"id" => 1273, 
				"city_id" => 38, 
				"name_en" => "Sidi Slimane", 
				"name_fr" => "Sidi Slimane", 
				"name_ar" => "سيدي سليمان" 
			], 
			[
				"id" => 1261, 
				"city_id" => 38, 
				"name_en" => "Boucaid", 
				"name_fr" => "Boucaid", 
				"name_ar" => "بوقائد" 
			], 
			[
				"id" => 1263, 
				"city_id" => 38, 
				"name_en" => "Larbaa", 
				"name_fr" => "Larbaa", 
				"name_ar" => "الأربعاء" 
			], 
			[
				"id" => 1266, 
				"city_id" => 38, 
				"name_en" => "Lazharia", 
				"name_fr" => "Lazharia", 
				"name_ar" => "الأزهرية" 
			], 
			[
				"id" => 1264, 
				"city_id" => 38, 
				"name_en" => "Lardjem", 
				"name_fr" => "Lardjem", 
				"name_ar" => "لرجام" 
			], 
			[
				"id" => 1268, 
				"city_id" => 38, 
				"name_en" => "Melaab", 
				"name_fr" => "Melaab", 
				"name_ar" => "الملعب" 
			], 
			[
				"id" => 1265, 
				"city_id" => 38, 
				"name_en" => "Layoune", 
				"name_fr" => "Layoune", 
				"name_ar" => "العيون" 
			], 
			[
				"id" => 1274, 
				"city_id" => 38, 
				"name_en" => "Tamellahet", 
				"name_fr" => "Tamellahet", 
				"name_ar" => "تملاحت" 
			], 
			[
				"id" => 1277, 
				"city_id" => 38, 
				"name_en" => "Youssoufia", 
				"name_fr" => "Youssoufia", 
				"name_ar" => "اليوسفية" 
			], 
			[
				"id" => 1260, 
				"city_id" => 38, 
				"name_en" => "Bordj El Emir Abdelkader", 
				"name_fr" => "Bordj El Emir Abdelkader", 
				"name_ar" => "برج الأمير عبد القادر" 
			], 
			[
				"id" => 1256, 
				"city_id" => 38, 
				"name_en" => "Ammari", 
				"name_fr" => "Ammari", 
				"name_ar" => "عماري" 
			], 
			[
				"id" => 1267, 
				"city_id" => 38, 
				"name_en" => "Maacem", 
				"name_fr" => "Maacem", 
				"name_ar" => "المعاصم" 
			], 
			[
				"id" => 1259, 
				"city_id" => 38, 
				"name_en" => "Bordj Bounaama", 
				"name_fr" => "Bordj Bounaama", 
				"name_ar" => "برج بونعامة" 
			], 
			[
				"id" => 1282, 
				"city_id" => 39, 
				"name_en" => "Douar El Maa", 
				"name_fr" => "Douar El Maa", 
				"name_ar" => "دوار الماء" 
			], 
			[
				"id" => 1283, 
				"city_id" => 39, 
				"name_en" => "El Ogla", 
				"name_fr" => "El Ogla", 
				"name_ar" => "العقلة" 
			], 
			[
				"id" => 1291, 
				"city_id" => 39, 
				"name_en" => "Magrane", 
				"name_fr" => "Magrane", 
				"name_ar" => "المقرن" 
			], 
			[
				"id" => 1301, 
				"city_id" => 39, 
				"name_en" => "Sidi Aoun", 
				"name_fr" => "Sidi Aoun", 
				"name_ar" => "سيدي عون" 
			], 
			[
				"id" => 1292, 
				"city_id" => 39, 
				"name_en" => "Mih Ouansa", 
				"name_fr" => "Mih Ouansa", 
				"name_ar" => "اميه وانسة" 
			], 
			[
				"id" => 1290, 
				"city_id" => 39, 
				"name_en" => "Kouinine", 
				"name_fr" => "Kouinine", 
				"name_ar" => "كوينين" 
			], 
			[
				"id" => 1278, 
				"city_id" => 39, 
				"name_en" => "Bayadha", 
				"name_fr" => "Bayadha", 
				"name_ar" => "البياضة" 
			], 
			[
				"id" => 1294, 
				"city_id" => 39, 
				"name_en" => "Nakhla", 
				"name_fr" => "Nakhla", 
				"name_ar" => "النخلة" 
			], 
			[
				"id" => 1299, 
				"city_id" => 39, 
				"name_en" => "Robbah", 
				"name_fr" => "Robbah", 
				"name_ar" => "الرباح" 
			], 
			[
				"id" => 1286, 
				"city_id" => 39, 
				"name_en" => "Guemar", 
				"name_fr" => "Guemar", 
				"name_ar" => "قمار" 
			], 
			[
				"id" => 1279, 
				"city_id" => 39, 
				"name_en" => "Ben Guecha", 
				"name_fr" => "Ben Guecha", 
				"name_ar" => "بن  قشة" 
			], 
			[
				"id" => 1297, 
				"city_id" => 39, 
				"name_en" => "Ourmes", 
				"name_fr" => "Ourmes", 
				"name_ar" => "ورماس" 
			], 
			[
				"id" => 1304, 
				"city_id" => 39, 
				"name_en" => "Taghzout", 
				"name_fr" => "Taghzout", 
				"name_ar" => "تغزوت" 
			], 
			[
				"id" => 1287, 
				"city_id" => 39, 
				"name_en" => "Hamraia", 
				"name_fr" => "Hamraia", 
				"name_ar" => "الحمراية" 
			], 
			[
				"id" => 1298, 
				"city_id" => 39, 
				"name_en" => "Reguiba", 
				"name_fr" => "Reguiba", 
				"name_ar" => "الرقيبة" 
			], 
			[
				"id" => 1280, 
				"city_id" => 39, 
				"name_en" => "Debila", 
				"name_fr" => "Debila", 
				"name_ar" => "الدبيلة" 
			], 
			[
				"id" => 1288, 
				"city_id" => 39, 
				"name_en" => "Hassani Abdelkrim", 
				"name_fr" => "Hassani Abdelkrim", 
				"name_ar" => "حساني عبد الكريم" 
			], 
			[
				"id" => 1289, 
				"city_id" => 39, 
				"name_en" => "Hassi Khalifa", 
				"name_fr" => "Hassi Khalifa", 
				"name_ar" => "حاسي خليفة" 
			], 
			[
				"id" => 1307, 
				"city_id" => 39, 
				"name_en" => "Trifaoui", 
				"name_fr" => "Trifaoui", 
				"name_ar" => "الطريفاوي" 
			], 
			[
				"id" => 1305, 
				"city_id" => 39, 
				"name_en" => "Taleb Larbi", 
				"name_fr" => "Taleb Larbi", 
				"name_ar" => "الطالب العربي" 
			], 
			[
				"id" => 1295, 
				"city_id" => 39, 
				"name_en" => "Oued El Alenda", 
				"name_fr" => "Oued El Alenda", 
				"name_ar" => "وادي العلندة" 
			], 
			[
				"id" => 1285, 
				"city_id" => 39, 
				"name_en" => "El-Oued", 
				"name_fr" => "El-Oued", 
				"name_ar" => "الوادي" 
			], 
			[
				"id" => 1321, 
				"city_id" => 40, 
				"name_en" => "Khirane", 
				"name_fr" => "Khirane", 
				"name_ar" => "خيران" 
			], 
			[
				"id" => 1309, 
				"city_id" => 40, 
				"name_en" => "Babar", 
				"name_fr" => "Babar", 
				"name_ar" => "بابار" 
			], 
			[
				"id" => 1316, 
				"city_id" => 40, 
				"name_en" => "El Mahmal", 
				"name_fr" => "El Mahmal", 
				"name_ar" => "المحمل" 
			], 
			[
				"id" => 1324, 
				"city_id" => 40, 
				"name_en" => "Ouled Rechache", 
				"name_fr" => "Ouled Rechache", 
				"name_ar" => "أولاد رشاش" 
			], 
			[
				"id" => 1314, 
				"city_id" => 40, 
				"name_en" => "Djellal", 
				"name_fr" => "Djellal", 
				"name_ar" => "جلال" 
			], 
			[
				"id" => 1328, 
				"city_id" => 40, 
				"name_en" => "Yabous", 
				"name_fr" => "Yabous", 
				"name_ar" => "يابوس" 
			], 
			[
				"id" => 1320, 
				"city_id" => 40, 
				"name_en" => "Khenchela", 
				"name_fr" => "Khenchela", 
				"name_ar" => "خنشلة" 
			], 
			[
				"id" => 1319, 
				"city_id" => 40, 
				"name_en" => "Kais", 
				"name_fr" => "Kais", 
				"name_ar" => "قايس" 
			], 
			[
				"id" => 1313, 
				"city_id" => 40, 
				"name_en" => "Chelia", 
				"name_fr" => "Chelia", 
				"name_ar" => "شلية" 
			], 
			[
				"id" => 1325, 
				"city_id" => 40, 
				"name_en" => "Remila", 
				"name_fr" => "Remila", 
				"name_ar" => "الرميلة" 
			], 
			[
				"id" => 1327, 
				"city_id" => 40, 
				"name_en" => "Taouzianat", 
				"name_fr" => "Taouzianat", 
				"name_ar" => "تاوزيانت" 
			], 
			[
				"id" => 1310, 
				"city_id" => 40, 
				"name_en" => "Baghai", 
				"name_fr" => "Baghai", 
				"name_ar" => "بغاي" 
			], 
			[
				"id" => 1315, 
				"city_id" => 40, 
				"name_en" => "El Hamma", 
				"name_fr" => "El Hamma", 
				"name_ar" => "الحامة" 
			], 
			[
				"id" => 1318, 
				"city_id" => 40, 
				"name_en" => "Ensigha", 
				"name_fr" => "Ensigha", 
				"name_ar" => "انسيغة" 
			], 
			[
				"id" => 1326, 
				"city_id" => 40, 
				"name_en" => "Tamza", 
				"name_fr" => "Tamza", 
				"name_ar" => "طامزة" 
			], 
			[
				"id" => 1308, 
				"city_id" => 40, 
				"name_en" => "Ain Touila", 
				"name_fr" => "Ain Touila", 
				"name_ar" => "عين الطويلة" 
			], 
			[
				"id" => 1323, 
				"city_id" => 40, 
				"name_en" => "M'toussa", 
				"name_fr" => "M'toussa", 
				"name_ar" => "متوسة" 
			], 
			[
				"id" => 1311, 
				"city_id" => 40, 
				"name_en" => "Bouhmama", 
				"name_fr" => "Bouhmama", 
				"name_ar" => "بوحمامة" 
			], 
			[
				"id" => 1317, 
				"city_id" => 40, 
				"name_en" => "El Oueldja", 
				"name_fr" => "El Oueldja", 
				"name_ar" => "الولجة" 
			], 
			[
				"id" => 1322, 
				"city_id" => 40, 
				"name_en" => "M'sara", 
				"name_fr" => "M'sara", 
				"name_ar" => "مصارة" 
			], 
			[
				"id" => 1312, 
				"city_id" => 40, 
				"name_en" => "Chechar", 
				"name_fr" => "Chechar", 
				"name_ar" => "ششار" 
			], 
			[
				"id" => 1349, 
				"city_id" => 41, 
				"name_en" => "Souk Ahras", 
				"name_fr" => "Souk Ahras", 
				"name_ar" => "سوق أهراس" 
			], 
			[
				"id" => 1329, 
				"city_id" => 41, 
				"name_en" => "Ain Soltane", 
				"name_fr" => "Ain Soltane", 
				"name_ar" => "عين سلطان" 
			], 
			[
				"id" => 1347, 
				"city_id" => 41, 
				"name_en" => "Sedrata", 
				"name_fr" => "Sedrata", 
				"name_ar" => "سدراتة" 
			], 
			[
				"id" => 1334, 
				"city_id" => 41, 
				"name_en" => "Hanencha", 
				"name_fr" => "Hanencha", 
				"name_ar" => "الحنانشة" 
			], 
			[
				"id" => 1337, 
				"city_id" => 41, 
				"name_en" => "Machroha", 
				"name_fr" => "Machroha", 
				"name_ar" => "المشروحة" 
			], 
			[
				"id" => 1330, 
				"city_id" => 41, 
				"name_en" => "Ain Zana", 
				"name_fr" => "Ain Zana", 
				"name_ar" => "عين الزانة" 
			], 
			[
				"id" => 1341, 
				"city_id" => 41, 
				"name_en" => "Ouled Driss", 
				"name_fr" => "Ouled Driss", 
				"name_ar" => "أولاد إدريس" 
			], 
			[
				"id" => 1351, 
				"city_id" => 41, 
				"name_en" => "Terraguelt", 
				"name_fr" => "Terraguelt", 
				"name_ar" => "ترقالت" 
			], 
			[
				"id" => 1343, 
				"city_id" => 41, 
				"name_en" => "Oum El Adhaim", 
				"name_fr" => "Oum El Adhaim", 
				"name_ar" => "أم العظايم" 
			], 
			[
				"id" => 1340, 
				"city_id" => 41, 
				"name_en" => "Oued Kebrit", 
				"name_fr" => "Oued Kebrit", 
				"name_ar" => "وادي الكبريت" 
			], 
			[
				"id" => 1352, 
				"city_id" => 41, 
				"name_en" => "Tiffech", 
				"name_fr" => "Tiffech", 
				"name_ar" => "تيفاش" 
			], 
			[
				"id" => 1345, 
				"city_id" => 41, 
				"name_en" => "Ragouba", 
				"name_fr" => "Ragouba", 
				"name_ar" => "الراقوبة" 
			], 
			[
				"id" => 1332, 
				"city_id" => 41, 
				"name_en" => "Drea", 
				"name_fr" => "Drea", 
				"name_ar" => "الدريعة" 
			], 
			[
				"id" => 1350, 
				"city_id" => 41, 
				"name_en" => "Taoura", 
				"name_fr" => "Taoura", 
				"name_ar" => "تاورة" 
			], 
			[
				"id" => 1353, 
				"city_id" => 41, 
				"name_en" => "Zaarouria", 
				"name_fr" => "Zaarouria", 
				"name_ar" => "الزعرورية" 
			], 
			[
				"id" => 1333, 
				"city_id" => 41, 
				"name_en" => "Haddada", 
				"name_fr" => "Haddada", 
				"name_ar" => "الحدادة" 
			], 
			[
				"id" => 1335, 
				"city_id" => 41, 
				"name_en" => "Khedara", 
				"name_fr" => "Khedara", 
				"name_ar" => "الخضارة" 
			], 
			[
				"id" => 1342, 
				"city_id" => 41, 
				"name_en" => "Ouled Moumen", 
				"name_fr" => "Ouled Moumen", 
				"name_ar" => "أولاد مومن" 
			], 
			[
				"id" => 1339, 
				"city_id" => 41, 
				"name_en" => "Merahna", 
				"name_fr" => "Merahna", 
				"name_ar" => "المراهنة" 
			], 
			[
				"id" => 1344, 
				"city_id" => 41, 
				"name_en" => "Ouillen", 
				"name_fr" => "Ouillen", 
				"name_ar" => "ويلان" 
			], 
			[
				"id" => 1348, 
				"city_id" => 41, 
				"name_en" => "Sidi Fredj", 
				"name_fr" => "Sidi Fredj", 
				"name_ar" => "سيدي فرج" 
			], 
			[
				"id" => 1331, 
				"city_id" => 41, 
				"name_en" => "Bir Bouhouche", 
				"name_fr" => "Bir Bouhouche", 
				"name_ar" => "بئر بوحوش" 
			], 
			[
				"id" => 1346, 
				"city_id" => 41, 
				"name_en" => "Safel El Ouiden", 
				"name_fr" => "Safel El Ouiden", 
				"name_ar" => "سافل الويدان" 
			], 
			[
				"id" => 1336, 
				"city_id" => 41, 
				"name_en" => "Khemissa", 
				"name_fr" => "Khemissa", 
				"name_ar" => "خميسة" 
			], 
			[
				"id" => 1338, 
				"city_id" => 41, 
				"name_en" => "M'daourouche", 
				"name_fr" => "M'daourouche", 
				"name_ar" => "مداوروش" 
			], 
			[
				"id" => 1354, 
				"city_id" => 41, 
				"name_en" => "Zouabi", 
				"name_fr" => "Zouabi", 
				"name_ar" => "الزوابي" 
			], 
			[
				"id" => 1369, 
				"city_id" => 42, 
				"name_en" => "Hadjout", 
				"name_fr" => "Hadjout", 
				"name_ar" => "حجوط" 
			], 
			[
				"id" => 1375, 
				"city_id" => 42, 
				"name_en" => "Merad", 
				"name_fr" => "Merad", 
				"name_ar" => "مراد" 
			], 
			[
				"id" => 1374, 
				"city_id" => 42, 
				"name_en" => "Menaceur", 
				"name_fr" => "Menaceur", 
				"name_ar" => "مناصر" 
			], 
			[
				"id" => 1355, 
				"city_id" => 42, 
				"name_en" => "Aghbal", 
				"name_fr" => "Aghbal", 
				"name_ar" => "أغبال" 
			], 
			[
				"id" => 1377, 
				"city_id" => 42, 
				"name_en" => "Nador", 
				"name_fr" => "Nador", 
				"name_ar" => "الناظور" 
			], 
			[
				"id" => 1381, 
				"city_id" => 42, 
				"name_en" => "Sidi-Amar", 
				"name_fr" => "Sidi-Amar", 
				"name_ar" => "سيدي عامر" 
			], 
			[
				"id" => 1368, 
				"city_id" => 42, 
				"name_en" => "Gouraya", 
				"name_fr" => "Gouraya", 
				"name_ar" => "قوراية" 
			], 
			[
				"id" => 1376, 
				"city_id" => 42, 
				"name_en" => "Messelmoun", 
				"name_fr" => "Messelmoun", 
				"name_ar" => "مسلمون" 
			], 
			[
				"id" => 1364, 
				"city_id" => 42, 
				"name_en" => "Cherchell", 
				"name_fr" => "Cherchell", 
				"name_ar" => "شرشال" 
			], 
			[
				"id" => 1370, 
				"city_id" => 42, 
				"name_en" => "Hadjret Ennous", 
				"name_fr" => "Hadjret Ennous", 
				"name_ar" => "حجرة النص" 
			], 
			[
				"id" => 1378, 
				"city_id" => 42, 
				"name_en" => "Sidi Ghiles", 
				"name_fr" => "Sidi Ghiles", 
				"name_ar" => "سيدي غيلاس" 
			], 
			[
				"id" => 1365, 
				"city_id" => 42, 
				"name_en" => "Damous", 
				"name_fr" => "Damous", 
				"name_ar" => "الداموس" 
			], 
			[
				"id" => 1373, 
				"city_id" => 42, 
				"name_en" => "Larhat", 
				"name_fr" => "Larhat", 
				"name_ar" => "الأرهاط" 
			], 
			[
				"id" => 1367, 
				"city_id" => 42, 
				"name_en" => "Fouka", 
				"name_fr" => "Fouka", 
				"name_ar" => "فوكة" 
			], 
			[
				"id" => 1357, 
				"city_id" => 42, 
				"name_en" => "Ain Tagourait", 
				"name_fr" => "Ain Tagourait", 
				"name_ar" => "عين تاقورايت" 
			], 
			[
				"id" => 1360, 
				"city_id" => 42, 
				"name_en" => "Bou Haroun", 
				"name_fr" => "Bou Haroun", 
				"name_ar" => "بوهارون" 
			], 
			[
				"id" => 1361, 
				"city_id" => 42, 
				"name_en" => "Bou Ismail", 
				"name_fr" => "Bou Ismail", 
				"name_ar" => "بواسماعيل" 
			], 
			[
				"id" => 1371, 
				"city_id" => 42, 
				"name_en" => "Khemisti", 
				"name_fr" => "Khemisti", 
				"name_ar" => "خميستي" 
			], 
			[
				"id" => 1356, 
				"city_id" => 42, 
				"name_en" => "Ahmer El Ain", 
				"name_fr" => "Ahmer El Ain", 
				"name_ar" => "أحمر العين" 
			], 
			[
				"id" => 1362, 
				"city_id" => 42, 
				"name_en" => "Bourkika", 
				"name_fr" => "Bourkika", 
				"name_ar" => "بورقيقة" 
			], 
			[
				"id" => 1366, 
				"city_id" => 42, 
				"name_en" => "Douaouda", 
				"name_fr" => "Douaouda", 
				"name_ar" => "دواودة" 
			], 
			[
				"id" => 1379, 
				"city_id" => 42, 
				"name_en" => "Sidi Rached", 
				"name_fr" => "Sidi Rached", 
				"name_ar" => "سيدي راشد" 
			], 
			[
				"id" => 1358, 
				"city_id" => 42, 
				"name_en" => "Attatba", 
				"name_fr" => "Attatba", 
				"name_ar" => "الحطاطبة" 
			], 
			[
				"id" => 1363, 
				"city_id" => 42, 
				"name_en" => "Chaiba", 
				"name_fr" => "Chaiba", 
				"name_ar" => "الشعيبة" 
			], 
			[
				"id" => 1372, 
				"city_id" => 42, 
				"name_en" => "Kolea", 
				"name_fr" => "Kolea", 
				"name_ar" => "القليعة" 
			], 
			[
				"id" => 1380, 
				"city_id" => 42, 
				"name_en" => "Sidi Semiane", 
				"name_fr" => "Sidi Semiane", 
				"name_ar" => "سيدي سميان" 
			], 
			[
				"id" => 1382, 
				"city_id" => 42, 
				"name_en" => "Tipaza", 
				"name_fr" => "Tipaza", 
				"name_ar" => "تيبازة" 
			], 
			[
				"id" => 1359, 
				"city_id" => 42, 
				"name_en" => "Beni Mileuk", 
				"name_fr" => "Beni Mileuk", 
				"name_ar" => "بني ميلك" 
			], 
			[
				"id" => 1394, 
				"city_id" => 43, 
				"name_en" => "El Mechira", 
				"name_fr" => "El Mechira", 
				"name_ar" => "مشيرة" 
			], 
			[
				"id" => 1393, 
				"city_id" => 43, 
				"name_en" => "El Ayadi Barbes", 
				"name_fr" => "El Ayadi Barbes", 
				"name_ar" => "العياضي برباس" 
			], 
			[
				"id" => 1384, 
				"city_id" => 43, 
				"name_en" => "Ain Beida Harriche", 
				"name_fr" => "Ain Beida Harriche", 
				"name_ar" => " عين البيضاء أحريش" 
			], 
			[
				"id" => 1411, 
				"city_id" => 43, 
				"name_en" => "Tassala Lematai", 
				"name_fr" => "Tassala Lematai", 
				"name_ar" => "تسالة لمطاعي" 
			], 
			[
				"id" => 1410, 
				"city_id" => 43, 
				"name_en" => "Terrai Bainen", 
				"name_fr" => "Terrai Bainen", 
				"name_ar" => "ترعي باينان" 
			], 
			[
				"id" => 1387, 
				"city_id" => 43, 
				"name_en" => "Amira Arres", 
				"name_fr" => "Amira Arres", 
				"name_ar" => "اعميرة اراس" 
			], 
			[
				"id" => 1408, 
				"city_id" => 43, 
				"name_en" => "Tassadane Haddada", 
				"name_fr" => "Tassadane Haddada", 
				"name_ar" => "تسدان حدادة" 
			], 
			[
				"id" => 1399, 
				"city_id" => 43, 
				"name_en" => "Minar Zarza", 
				"name_fr" => "Minar Zarza", 
				"name_ar" => "مينار زارزة" 
			], 
			[
				"id" => 1406, 
				"city_id" => 43, 
				"name_en" => "Sidi Merouane", 
				"name_fr" => "Sidi Merouane", 
				"name_ar" => "سيدي مروان" 
			], 
			[
				"id" => 1391, 
				"city_id" => 43, 
				"name_en" => "Chigara", 
				"name_fr" => "Chigara", 
				"name_ar" => "الشيقارة" 
			], 
			[
				"id" => 1397, 
				"city_id" => 43, 
				"name_en" => "Hamala", 
				"name_fr" => "Hamala", 
				"name_ar" => "حمالة" 
			], 
			[
				"id" => 1396, 
				"city_id" => 43, 
				"name_en" => "Grarem Gouga", 
				"name_fr" => "Grarem Gouga", 
				"name_ar" => "القرارم قوقة" 
			], 
			[
				"id" => 1412, 
				"city_id" => 43, 
				"name_en" => "Tiberguent", 
				"name_fr" => "Tiberguent", 
				"name_ar" => "تيبرقنت" 
			], 
			[
				"id" => 1404, 
				"city_id" => 43, 
				"name_en" => "Rouached", 
				"name_fr" => "Rouached", 
				"name_ar" => "الرواشد" 
			], 
			[
				"id" => 1392, 
				"city_id" => 43, 
				"name_en" => "Derrahi Bousselah", 
				"name_fr" => "Derrahi Bousselah", 
				"name_ar" => "دراحي بوصلاح" 
			], 
			[
				"id" => 1414, 
				"city_id" => 43, 
				"name_en" => "Zeghaia", 
				"name_fr" => "Zeghaia", 
				"name_ar" => "زغاية" 
			], 
			[
				"id" => 1401, 
				"city_id" => 43, 
				"name_en" => "Oued Endja", 
				"name_fr" => "Oued Endja", 
				"name_ar" => "وادي النجاء" 
			], 
			[
				"id" => 1383, 
				"city_id" => 43, 
				"name_en" => "Ahmed Rachedi", 
				"name_fr" => "Ahmed Rachedi", 
				"name_ar" => "أحمد راشدي" 
			], 
			[
				"id" => 1407, 
				"city_id" => 43, 
				"name_en" => "Tadjenanet", 
				"name_fr" => "Tadjenanet", 
				"name_ar" => "تاجنانت" 
			], 
			[
				"id" => 1385, 
				"city_id" => 43, 
				"name_en" => "Ain Mellouk", 
				"name_fr" => "Ain Mellouk", 
				"name_ar" => "عين الملوك" 
			], 
			[
				"id" => 1403, 
				"city_id" => 43, 
				"name_en" => "Ouled Khalouf", 
				"name_fr" => "Ouled Khalouf", 
				"name_ar" => "أولاد اخلوف" 
			], 
			[
				"id" => 1388, 
				"city_id" => 43, 
				"name_en" => "Benyahia Abderrahmane", 
				"name_fr" => "Benyahia Abderrahmane", 
				"name_ar" => "بن يحي عبد الرحمن" 
			], 
			[
				"id" => 1409, 
				"city_id" => 43, 
				"name_en" => "Teleghma", 
				"name_fr" => "Teleghma", 
				"name_ar" => "التلاغمة" 
			], 
			[
				"id" => 1402, 
				"city_id" => 43, 
				"name_en" => "Oued Seguen", 
				"name_fr" => "Oued Seguen", 
				"name_ar" => "وادي سقان" 
			], 
			[
				"id" => 1400, 
				"city_id" => 43, 
				"name_en" => "Oued Athmenia", 
				"name_fr" => "Oued Athmenia", 
				"name_ar" => "وادي العثمانية" 
			], 
			[
				"id" => 1386, 
				"city_id" => 43, 
				"name_en" => "Ain Tine", 
				"name_fr" => "Ain Tine", 
				"name_ar" => "عين التين" 
			], 
			[
				"id" => 1390, 
				"city_id" => 43, 
				"name_en" => "Chelghoum Laid", 
				"name_fr" => "Chelghoum Laid", 
				"name_ar" => "شلغوم العيد" 
			], 
			[
				"id" => 1413, 
				"city_id" => 43, 
				"name_en" => "Yahia Beniguecha", 
				"name_fr" => "Yahia Beniguecha", 
				"name_ar" => "يحي بني قشة" 
			], 
			[
				"id" => 1395, 
				"city_id" => 43, 
				"name_en" => "Ferdjioua", 
				"name_fr" => "Ferdjioua", 
				"name_ar" => "فرجيوة" 
			], 
			[
				"id" => 1405, 
				"city_id" => 43, 
				"name_en" => "Sidi Khelifa", 
				"name_fr" => "Sidi Khelifa", 
				"name_ar" => "سيدي خليفة" 
			], 
			[
				"id" => 1398, 
				"city_id" => 43, 
				"name_en" => "Mila", 
				"name_fr" => "Mila", 
				"name_ar" => "ميلة" 
			], 
			[
				"id" => 1389, 
				"city_id" => 43, 
				"name_en" => "Bouhatem", 
				"name_fr" => "Bouhatem", 
				"name_ar" => "بوحاتم" 
			], 
			[
				"id" => 1440, 
				"city_id" => 44, 
				"name_en" => "Khemis-Miliana", 
				"name_fr" => "Khemis-Miliana", 
				"name_ar" => "خميس مليانة" 
			], 
			[
				"id" => 1446, 
				"city_id" => 44, 
				"name_en" => "Sidi-Lakhdar", 
				"name_fr" => "Sidi-Lakhdar", 
				"name_ar" => "سيدي الأخضر" 
			], 
			[
				"id" => 1415, 
				"city_id" => 44, 
				"name_en" => "Ain-Benian", 
				"name_fr" => "Ain-Benian", 
				"name_ar" => "عين البنيان" 
			], 
			[
				"id" => 1420, 
				"city_id" => 44, 
				"name_en" => "Ain-Torki", 
				"name_fr" => "Ain-Torki", 
				"name_ar" => "عين التركي" 
			], 
			[
				"id" => 1437, 
				"city_id" => 44, 
				"name_en" => "Hammam-Righa", 
				"name_fr" => "Hammam-Righa", 
				"name_ar" => "حمام ريغة" 
			], 
			[
				"id" => 1429, 
				"city_id" => 44, 
				"name_en" => "Bourached", 
				"name_fr" => "Bourached", 
				"name_ar" => "بوراشد" 
			], 
			[
				"id" => 1439, 
				"city_id" => 44, 
				"name_en" => "Hoceinia", 
				"name_fr" => "Hoceinia", 
				"name_ar" => "الحسينية" 
			], 
			[
				"id" => 1430, 
				"city_id" => 44, 
				"name_en" => "Djelida", 
				"name_fr" => "Djelida", 
				"name_ar" => "جليدة" 
			], 
			[
				"id" => 1421, 
				"city_id" => 44, 
				"name_en" => "Arib", 
				"name_fr" => "Arib", 
				"name_ar" => "عريب" 
			], 
			[
				"id" => 1431, 
				"city_id" => 44, 
				"name_en" => "Djemaa Ouled Cheikh", 
				"name_fr" => "Djemaa Ouled Cheikh", 
				"name_ar" => "جمعة أولاد الشيخ" 
			], 
			[
				"id" => 1434, 
				"city_id" => 44, 
				"name_en" => "El-Amra", 
				"name_fr" => "El-Amra", 
				"name_ar" => "العامرة" 
			], 
			[
				"id" => 1435, 
				"city_id" => 44, 
				"name_en" => "El-Attaf", 
				"name_fr" => "El-Attaf", 
				"name_ar" => "العطاف" 
			], 
			[
				"id" => 1449, 
				"city_id" => 44, 
				"name_en" => "Tiberkanine", 
				"name_fr" => "Tiberkanine", 
				"name_ar" => "تبركانين" 
			], 
			[
				"id" => 1416, 
				"city_id" => 44, 
				"name_en" => "Ain-Bouyahia", 
				"name_fr" => "Ain-Bouyahia", 
				"name_ar" => "عين بويحيى" 
			], 
			[
				"id" => 1433, 
				"city_id" => 44, 
				"name_en" => "El-Abadia", 
				"name_fr" => "El-Abadia", 
				"name_ar" => "العبادية" 
			], 
			[
				"id" => 1447, 
				"city_id" => 44, 
				"name_en" => "Tacheta Zegagha", 
				"name_fr" => "Tacheta Zegagha", 
				"name_ar" => "تاشتة زقاغة" 
			], 
			[
				"id" => 1422, 
				"city_id" => 44, 
				"name_en" => "Birbouche", 
				"name_fr" => "Birbouche", 
				"name_ar" => "بربوش" 
			], 
			[
				"id" => 1432, 
				"city_id" => 44, 
				"name_en" => "Djendel", 
				"name_fr" => "Djendel", 
				"name_ar" => "جندل" 
			], 
			[
				"id" => 1425, 
				"city_id" => 44, 
				"name_en" => "Ben Allal", 
				"name_fr" => "Ben Allal", 
				"name_ar" => "بن علال" 
			], 
			[
				"id" => 1443, 
				"city_id" => 44, 
				"name_en" => "Oued Chorfa", 
				"name_fr" => "Oued Chorfa", 
				"name_ar" => "وادي الشرفاء" 
			], 
			[
				"id" => 1428, 
				"city_id" => 44, 
				"name_en" => "Boumedfaa", 
				"name_fr" => "Boumedfaa", 
				"name_ar" => "بومدفع" 
			], 
			[
				"id" => 1418, 
				"city_id" => 44, 
				"name_en" => "Ain-Lechiakh", 
				"name_fr" => "Ain-Lechiakh", 
				"name_ar" => "عين الاشياخ" 
			], 
			[
				"id" => 1419, 
				"city_id" => 44, 
				"name_en" => "Ain-Soltane", 
				"name_fr" => "Ain-Soltane", 
				"name_ar" => "عين السلطان" 
			], 
			[
				"id" => 1444, 
				"city_id" => 44, 
				"name_en" => "Oued Djemaa", 
				"name_fr" => "Oued Djemaa", 
				"name_ar" => "واد الجمعة" 
			], 
			[
				"id" => 1436, 
				"city_id" => 44, 
				"name_en" => "El-Maine", 
				"name_fr" => "El-Maine", 
				"name_ar" => "الماين" 
			], 
			[
				"id" => 1445, 
				"city_id" => 44, 
				"name_en" => "Rouina", 
				"name_fr" => "Rouina", 
				"name_ar" => "الروينة" 
			], 
			[
				"id" => 1450, 
				"city_id" => 44, 
				"name_en" => "Zeddine", 
				"name_fr" => "Zeddine", 
				"name_ar" => "زدين" 
			], 
			[
				"id" => 1426, 
				"city_id" => 44, 
				"name_en" => "Bir-Ould-Khelifa", 
				"name_fr" => "Bir-Ould-Khelifa", 
				"name_ar" => "بئر ولد خليفة" 
			], 
			[
				"id" => 1427, 
				"city_id" => 44, 
				"name_en" => "Bordj-Emir-Khaled", 
				"name_fr" => "Bordj-Emir-Khaled", 
				"name_ar" => "برج الأمير خالد" 
			], 
			[
				"id" => 1448, 
				"city_id" => 44, 
				"name_en" => "Tarik-Ibn-Ziad", 
				"name_fr" => "Tarik-Ibn-Ziad", 
				"name_ar" => "طارق بن زياد" 
			], 
			[
				"id" => 1423, 
				"city_id" => 44, 
				"name_en" => "Bathia", 
				"name_fr" => "Bathia", 
				"name_ar" => "بطحية" 
			], 
			[
				"id" => 1424, 
				"city_id" => 44, 
				"name_en" => "Belaas", 
				"name_fr" => "Belaas", 
				"name_ar" => "بلعاص" 
			], 
			[
				"id" => 1438, 
				"city_id" => 44, 
				"name_en" => "Hassania", 
				"name_fr" => "Hassania", 
				"name_ar" => "الحسانية" 
			], 
			[
				"id" => 1417, 
				"city_id" => 44, 
				"name_en" => "Ain-Defla", 
				"name_fr" => "Ain-Defla", 
				"name_ar" => "عين الدفلى" 
			], 
			[
				"id" => 1442, 
				"city_id" => 44, 
				"name_en" => "Miliana", 
				"name_fr" => "Miliana", 
				"name_ar" => "مليانة" 
			], 
			[
				"id" => 1441, 
				"city_id" => 44, 
				"name_en" => "Mekhatria", 
				"name_fr" => "Mekhatria", 
				"name_ar" => "المخاطرية" 
			], 
			[
				"id" => 1462, 
				"city_id" => 45, 
				"name_en" => "Tiout", 
				"name_fr" => "Tiout", 
				"name_ar" => "تيوت" 
			], 
			[
				"id" => 1459, 
				"city_id" => 45, 
				"name_en" => "Moghrar", 
				"name_fr" => "Moghrar", 
				"name_ar" => "مغرار" 
			], 
			[
				"id" => 1453, 
				"city_id" => 45, 
				"name_en" => "Asla", 
				"name_fr" => "Asla", 
				"name_ar" => "عسلة" 
			], 
			[
				"id" => 1456, 
				"city_id" => 45, 
				"name_en" => "Kasdir", 
				"name_fr" => "Kasdir", 
				"name_ar" => "القصدير" 
			], 
			[
				"id" => 1457, 
				"city_id" => 45, 
				"name_en" => "Makmen Ben Amar", 
				"name_fr" => "Makmen Ben Amar", 
				"name_ar" => "مكمن بن عمار" 
			], 
			[
				"id" => 1452, 
				"city_id" => 45, 
				"name_en" => "Ain Sefra", 
				"name_fr" => "Ain Sefra", 
				"name_ar" => "عين الصفراء" 
			], 
			[
				"id" => 1458, 
				"city_id" => 45, 
				"name_en" => "Mecheria", 
				"name_fr" => "Mecheria", 
				"name_ar" => "المشرية" 
			], 
			[
				"id" => 1455, 
				"city_id" => 45, 
				"name_en" => "El Biodh", 
				"name_fr" => "El Biodh", 
				"name_ar" => "البيوض" 
			], 
			[
				"id" => 1451, 
				"city_id" => 45, 
				"name_en" => "Ain Ben Khelil", 
				"name_fr" => "Ain Ben Khelil", 
				"name_ar" => "عين بن خليل" 
			], 
			[
				"id" => 1460, 
				"city_id" => 45, 
				"name_en" => "Naama", 
				"name_fr" => "Naama", 
				"name_ar" => "النعامة" 
			], 
			[
				"id" => 1454, 
				"city_id" => 45, 
				"name_en" => "Djenienne Bourezg", 
				"name_fr" => "Djenienne Bourezg", 
				"name_ar" => "جنين بورزق" 
			], 
			[
				"id" => 1461, 
				"city_id" => 45, 
				"name_en" => "Sfissifa", 
				"name_fr" => "Sfissifa", 
				"name_ar" => "سفيسيفة" 
			], 
			[
				"id" => 1486, 
				"city_id" => 46, 
				"name_en" => "Sidi Boumediene", 
				"name_fr" => "Sidi Boumediene", 
				"name_ar" => "سيدي بومدين" 
			], 
			[
				"id" => 1489, 
				"city_id" => 46, 
				"name_en" => "Tamzoura", 
				"name_fr" => "Tamzoura", 
				"name_ar" => "تامزورة" 
			], 
			[
				"id" => 1471, 
				"city_id" => 46, 
				"name_en" => "Chaabat El Ham", 
				"name_fr" => "Chaabat El Ham", 
				"name_ar" => "شعبة اللحم" 
			], 
			[
				"id" => 1474, 
				"city_id" => 46, 
				"name_en" => "El Maleh", 
				"name_fr" => "El Maleh", 
				"name_ar" => "المالح" 
			], 
			[
				"id" => 1483, 
				"city_id" => 46, 
				"name_en" => "Ouled Kihal", 
				"name_fr" => "Ouled Kihal", 
				"name_ar" => "أولاد الكيحل" 
			], 
			[
				"id" => 1472, 
				"city_id" => 46, 
				"name_en" => "Chentouf", 
				"name_fr" => "Chentouf", 
				"name_ar" => "شنتوف" 
			], 
			[
				"id" => 1490, 
				"city_id" => 46, 
				"name_en" => "Terga", 
				"name_fr" => "Terga", 
				"name_ar" => "تارقة" 
			], 
			[
				"id" => 1481, 
				"city_id" => 46, 
				"name_en" => "Oued Sebbah", 
				"name_fr" => "Oued Sebbah", 
				"name_ar" => "وادي الصباح" 
			], 
			[
				"id" => 1473, 
				"city_id" => 46, 
				"name_en" => "El Amria", 
				"name_fr" => "El Amria", 
				"name_ar" => "العامرية" 
			], 
			[
				"id" => 1479, 
				"city_id" => 46, 
				"name_en" => "Hassi El Ghella", 
				"name_fr" => "Hassi El Ghella", 
				"name_ar" => "حاسي الغلة" 
			], 
			[
				"id" => 1482, 
				"city_id" => 46, 
				"name_en" => "Ouled Boudjemaa", 
				"name_fr" => "Ouled Boudjemaa", 
				"name_ar" => "أولاد بوجمعة" 
			], 
			[
				"id" => 1463, 
				"city_id" => 46, 
				"name_en" => "Aghlal", 
				"name_fr" => "Aghlal", 
				"name_ar" => "أغلال" 
			], 
			[
				"id" => 1465, 
				"city_id" => 46, 
				"name_en" => "Ain Kihal", 
				"name_fr" => "Ain Kihal", 
				"name_ar" => "عين الكيحل" 
			], 
			[
				"id" => 1467, 
				"city_id" => 46, 
				"name_en" => "Ain Tolba", 
				"name_fr" => "Ain Tolba", 
				"name_ar" => "عين الطلبة" 
			], 
			[
				"id" => 1468, 
				"city_id" => 46, 
				"name_en" => "Aoubellil", 
				"name_fr" => "Aoubellil", 
				"name_ar" => "عقب الليل" 
			], 
			[
				"id" => 1469, 
				"city_id" => 46, 
				"name_en" => "Beni Saf", 
				"name_fr" => "Beni Saf", 
				"name_ar" => "بني صاف" 
			], 
			[
				"id" => 1478, 
				"city_id" => 46, 
				"name_en" => "Hassasna", 
				"name_fr" => "Hassasna", 
				"name_ar" => "الحساسنة" 
			], 
			[
				"id" => 1476, 
				"city_id" => 46, 
				"name_en" => "Emir Abdelkader", 
				"name_fr" => "Emir Abdelkader", 
				"name_ar" => "الأمير عبد القادر" 
			], 
			[
				"id" => 1488, 
				"city_id" => 46, 
				"name_en" => "Sidi Safi", 
				"name_fr" => "Sidi Safi", 
				"name_ar" => "سيدي صافي" 
			], 
			[
				"id" => 1484, 
				"city_id" => 46, 
				"name_en" => "Oulhaca El Gheraba", 
				"name_fr" => "Oulhaca El Gheraba", 
				"name_ar" => "ولهاصة الغرابة" 
			], 
			[
				"id" => 1487, 
				"city_id" => 46, 
				"name_en" => "Sidi Ouriache", 
				"name_fr" => "Sidi Ouriache", 
				"name_ar" => "سيدي ورياش" 
			], 
			[
				"id" => 1464, 
				"city_id" => 46, 
				"name_en" => "Ain El Arbaa", 
				"name_fr" => "Ain El Arbaa", 
				"name_ar" => "عين الأربعاء" 
			], 
			[
				"id" => 1475, 
				"city_id" => 46, 
				"name_en" => "El Messaid", 
				"name_fr" => "El Messaid", 
				"name_ar" => "المساعيد" 
			], 
			[
				"id" => 1480, 
				"city_id" => 46, 
				"name_en" => "Oued Berkeche", 
				"name_fr" => "Oued Berkeche", 
				"name_ar" => "وادي برقش" 
			], 
			[
				"id" => 1485, 
				"city_id" => 46, 
				"name_en" => "Sidi Ben Adda", 
				"name_fr" => "Sidi Ben Adda", 
				"name_ar" => "سيدي بن عدة" 
			], 
			[
				"id" => 1466, 
				"city_id" => 46, 
				"name_en" => "Ain Temouchent", 
				"name_fr" => "Ain Temouchent", 
				"name_ar" => "عين تموشنت" 
			], 
			[
				"id" => 1470, 
				"city_id" => 46, 
				"name_en" => "Bouzedjar", 
				"name_fr" => "Bouzedjar", 
				"name_ar" => "بوزجار" 
			], 
			[
				"id" => 1477, 
				"city_id" => 46, 
				"name_en" => "Hammam Bou Hadjar", 
				"name_fr" => "Hammam Bou Hadjar", 
				"name_ar" => "حمام بوحجر" 
			], 
			[
				"id" => 1493, 
				"city_id" => 47, 
				"name_en" => "Dhayet Bendhahoua", 
				"name_fr" => "Dhayet Bendhahoua", 
				"name_ar" => "ضاية بن ضحوة" 
			], 
			[
				"id" => 1500, 
				"city_id" => 47, 
				"name_en" => "Mansoura", 
				"name_fr" => "Mansoura", 
				"name_ar" => "المنصورة" 
			], 
			[
				"id" => 1494, 
				"city_id" => 47, 
				"name_en" => "El Atteuf", 
				"name_fr" => "El Atteuf", 
				"name_ar" => "العطف" 
			], 
			[
				"id" => 1492, 
				"city_id" => 47, 
				"name_en" => "Bounoura", 
				"name_fr" => "Bounoura", 
				"name_ar" => "بونورة" 
			], 
			[
				"id" => 1503, 
				"city_id" => 47, 
				"name_en" => "Zelfana", 
				"name_fr" => "Zelfana", 
				"name_ar" => "زلفانة" 
			], 
			[
				"id" => 1497, 
				"city_id" => 47, 
				"name_en" => "El Guerrara", 
				"name_fr" => "El Guerrara", 
				"name_ar" => "القرارة" 
			], 
			[
				"id" => 1502, 
				"city_id" => 47, 
				"name_en" => "Sebseb", 
				"name_fr" => "Sebseb", 
				"name_ar" => "سبسب" 
			], 
			[
				"id" => 1501, 
				"city_id" => 47, 
				"name_en" => "Metlili", 
				"name_fr" => "Metlili", 
				"name_ar" => "متليلي" 
			], 
			[
				"id" => 1491, 
				"city_id" => 47, 
				"name_en" => "Berriane", 
				"name_fr" => "Berriane", 
				"name_ar" => "بريان" 
			], 
			[
				"id" => 1496, 
				"city_id" => 47, 
				"name_en" => "Ghardaia", 
				"name_fr" => "Ghardaia", 
				"name_ar" => "غرداية" 
			], 
			[
				"id" => 1516, 
				"city_id" => 48, 
				"name_en" => "El-Guettar", 
				"name_fr" => "El-Guettar", 
				"name_ar" => "القطار" 
			], 
			[
				"id" => 1530, 
				"city_id" => 48, 
				"name_en" => "Ouled Aiche", 
				"name_fr" => "Ouled Aiche", 
				"name_ar" => "أولاد يعيش" 
			], 
			[
				"id" => 1509, 
				"city_id" => 48, 
				"name_en" => "Beni Dergoun", 
				"name_fr" => "Beni Dergoun", 
				"name_ar" => "بني درقن" 
			], 
			[
				"id" => 1511, 
				"city_id" => 48, 
				"name_en" => "Dar Ben Abdelah", 
				"name_fr" => "Dar Ben Abdelah", 
				"name_ar" => "دار بن عبد الله" 
			], 
			[
				"id" => 1541, 
				"city_id" => 48, 
				"name_en" => "Zemmoura", 
				"name_fr" => "Zemmoura", 
				"name_ar" => "زمورة" 
			], 
			[
				"id" => 1512, 
				"city_id" => 48, 
				"name_en" => "Djidiouia", 
				"name_fr" => "Djidiouia", 
				"name_ar" => "جديوية" 
			], 
			[
				"id" => 1519, 
				"city_id" => 48, 
				"name_en" => "Hamri", 
				"name_fr" => "Hamri", 
				"name_ar" => "حمري" 
			], 
			[
				"id" => 1507, 
				"city_id" => 48, 
				"name_en" => "Belaassel Bouzagza", 
				"name_fr" => "Belaassel Bouzagza", 
				"name_ar" => "بلعسل بوزقزة" 
			], 
			[
				"id" => 1517, 
				"city_id" => 48, 
				"name_en" => "El-Matmar", 
				"name_fr" => "El-Matmar", 
				"name_ar" => "المطمر" 
			], 
			[
				"id" => 1534, 
				"city_id" => 48, 
				"name_en" => "Sidi Khettab", 
				"name_fr" => "Sidi Khettab", 
				"name_ar" => "سيدي  خطاب" 
			], 
			[
				"id" => 1537, 
				"city_id" => 48, 
				"name_en" => "Sidi M'hamed Benaouda", 
				"name_fr" => "Sidi M'hamed Benaouda", 
				"name_ar" => "سيدي امحمد بن عودة" 
			], 
			[
				"id" => 1505, 
				"city_id" => 48, 
				"name_en" => "Ain-Tarek", 
				"name_fr" => "Ain-Tarek", 
				"name_ar" => "عين طارق" 
			], 
			[
				"id" => 1518, 
				"city_id" => 48, 
				"name_en" => "Had Echkalla", 
				"name_fr" => "Had Echkalla", 
				"name_ar" => "حد الشكالة" 
			], 
			[
				"id" => 1515, 
				"city_id" => 48, 
				"name_en" => "El Ouldja", 
				"name_fr" => "El Ouldja", 
				"name_ar" => "الولجة" 
			], 
			[
				"id" => 1522, 
				"city_id" => 48, 
				"name_en" => "Mazouna", 
				"name_fr" => "Mazouna", 
				"name_ar" => "مازونة" 
			], 
			[
				"id" => 1504, 
				"city_id" => 48, 
				"name_en" => "Ain Rahma", 
				"name_fr" => "Ain Rahma", 
				"name_ar" => "عين الرحمة" 
			], 
			[
				"id" => 1520, 
				"city_id" => 48, 
				"name_en" => "Kalaa", 
				"name_fr" => "Kalaa", 
				"name_ar" => "القلعة" 
			], 
			[
				"id" => 1538, 
				"city_id" => 48, 
				"name_en" => "Sidi Saada", 
				"name_fr" => "Sidi Saada", 
				"name_ar" => "سيدي سعادة" 
			], 
			[
				"id" => 1540, 
				"city_id" => 48, 
				"name_en" => "Yellel", 
				"name_fr" => "Yellel", 
				"name_ar" => "يلل" 
			], 
			[
				"id" => 1539, 
				"city_id" => 48, 
				"name_en" => "Souk El Had", 
				"name_fr" => "Souk El Had", 
				"name_ar" => "سوق الحد" 
			], 
			[
				"id" => 1524, 
				"city_id" => 48, 
				"name_en" => "Mendes", 
				"name_fr" => "Mendes", 
				"name_ar" => "منداس" 
			], 
			[
				"id" => 1528, 
				"city_id" => 48, 
				"name_en" => "Oued Essalem", 
				"name_fr" => "Oued Essalem", 
				"name_ar" => "وادي السلام" 
			], 
			[
				"id" => 1535, 
				"city_id" => 48, 
				"name_en" => "Sidi Lazreg", 
				"name_fr" => "Sidi Lazreg", 
				"name_ar" => "سيدي لزرق" 
			], 
			[
				"id" => 1506, 
				"city_id" => 48, 
				"name_en" => "Ammi Moussa", 
				"name_fr" => "Ammi Moussa", 
				"name_ar" => "عمي موسى" 
			], 
			[
				"id" => 1526, 
				"city_id" => 48, 
				"name_en" => "Ouarizane", 
				"name_fr" => "Ouarizane", 
				"name_ar" => "واريزان" 
			], 
			[
				"id" => 1525, 
				"city_id" => 48, 
				"name_en" => "Merdja Sidi Abed", 
				"name_fr" => "Merdja Sidi Abed", 
				"name_ar" => "مرجة سيدي عابد" 
			], 
			[
				"id" => 1531, 
				"city_id" => 48, 
				"name_en" => "Ouled Sidi Mihoub", 
				"name_fr" => "Ouled Sidi Mihoub", 
				"name_ar" => "أولاد سيدي الميهوب" 
			], 
			[
				"id" => 1508, 
				"city_id" => 48, 
				"name_en" => "Bendaoud", 
				"name_fr" => "Bendaoud", 
				"name_ar" => "بن داود" 
			], 
			[
				"id" => 1529, 
				"city_id" => 48, 
				"name_en" => "Oued-Rhiou", 
				"name_fr" => "Oued-Rhiou", 
				"name_ar" => "وادي رهيو" 
			], 
			[
				"id" => 1513, 
				"city_id" => 48, 
				"name_en" => "El Hassi", 
				"name_fr" => "El Hassi", 
				"name_ar" => "الحاسي" 
			], 
			[
				"id" => 1536, 
				"city_id" => 48, 
				"name_en" => "Sidi M'hamed Benali", 
				"name_fr" => "Sidi M'hamed Benali", 
				"name_ar" => "سيدي أمحمد بن علي" 
			], 
			[
				"id" => 1523, 
				"city_id" => 48, 
				"name_en" => "Mediouna", 
				"name_fr" => "Mediouna", 
				"name_ar" => "مديونة" 
			], 
			[
				"id" => 1510, 
				"city_id" => 48, 
				"name_en" => "Beni Zentis", 
				"name_fr" => "Beni Zentis", 
				"name_ar" => "بني زنطيس" 
			], 
			[
				"id" => 1527, 
				"city_id" => 48, 
				"name_en" => "Oued El Djemaa", 
				"name_fr" => "Oued El Djemaa", 
				"name_ar" => "وادي الجمعة" 
			], 
			[
				"id" => 1521, 
				"city_id" => 48, 
				"name_en" => "Lahlef", 
				"name_fr" => "Lahlef", 
				"name_ar" => "لحلاف" 
			], 
			[
				"id" => 1533, 
				"city_id" => 48, 
				"name_en" => "Relizane", 
				"name_fr" => "Relizane", 
				"name_ar" => "غليزان" 
			], 
			[
				"id" => 1514, 
				"city_id" => 48, 
				"name_en" => "El H'madna", 
				"name_fr" => "El H'madna", 
				"name_ar" => "الحمادنة" 
			], 
			[
				"id" => 1532, 
				"city_id" => 48, 
				"name_en" => "Ramka", 
				"name_fr" => "Ramka", 
				"name_ar" => "الرمكة" 
			], 
			[
				"id" => 25, 
				"city_id" => 49, 
				"name_en" => "Tinerkouk", 
				"name_fr" => "Tinerkouk", 
				"name_ar" => "تنركوك" 
			], 
			[
				"id" => 24, 
				"city_id" => 49, 
				"name_en" => "Timimoun", 
				"name_fr" => "Timimoun", 
				"name_ar" => "تيميمون" 
			], 
			[
				"id" => 15, 
				"city_id" => 49, 
				"name_en" => "Ouled Said", 
				"name_fr" => "Ouled Said", 
				"name_ar" => "أولاد السعيد" 
			], 
			[
				"id" => 12, 
				"city_id" => 49, 
				"name_en" => "Metarfa", 
				"name_fr" => "Metarfa", 
				"name_ar" => "المطارفة" 
			], 
			[
				"id" => 19, 
				"city_id" => 49, 
				"name_en" => "Talmine", 
				"name_fr" => "Talmine", 
				"name_ar" => "طالمين" 
			], 
			[
				"id" => 14, 
				"city_id" => 49, 
				"name_en" => "Ouled Aissa", 
				"name_fr" => "Ouled Aissa", 
				"name_ar" => "أولاد عيسى" 
			], 
			[
				"id" => 7, 
				"city_id" => 49, 
				"name_en" => "Charouine", 
				"name_fr" => "Charouine", 
				"name_ar" => "شروين" 
			], 
			[
				"id" => 3, 
				"city_id" => 49, 
				"name_en" => "Aougrout", 
				"name_fr" => "Aougrout", 
				"name_ar" => "أوقروت" 
			], 
			[
				"id" => 8, 
				"city_id" => 49, 
				"name_en" => "Deldoul", 
				"name_fr" => "Deldoul", 
				"name_ar" => "دلدول" 
			], 
			[
				"id" => 11, 
				"city_id" => 49, 
				"name_en" => "Ksar Kaddour", 
				"name_fr" => "Ksar Kaddour", 
				"name_ar" => "قصر قدور" 
			], 
			[
				"id" => 23, 
				"city_id" => 50, 
				"name_en" => "Timiaouine", 
				"name_fr" => "Timiaouine", 
				"name_ar" => "تيمياوين" 
			], 
			[
				"id" => 5, 
				"city_id" => 50, 
				"name_en" => "Bordj Badji Mokhtar", 
				"name_fr" => "Bordj Badji Mokhtar", 
				"name_ar" => "برج باجي مختار" 
			], 
			[
				"id" => 258, 
				"city_id" => 51, 
				"name_en" => "Ras El Miad", 
				"name_fr" => "Ras El Miad", 
				"name_ar" => "رأس الميعاد" 
			], 
			[
				"id" => 232, 
				"city_id" => 51, 
				"name_en" => "Besbes", 
				"name_fr" => "Besbes", 
				"name_ar" => "بسباس" 
			], 
			[
				"id" => 259, 
				"city_id" => 51, 
				"name_en" => "Sidi Khaled", 
				"name_fr" => "Sidi Khaled", 
				"name_ar" => "سيدي  خالد" 
			], 
			[
				"id" => 240, 
				"city_id" => 51, 
				"name_en" => "Doucen", 
				"name_fr" => "Doucen", 
				"name_ar" => "الدوسن" 
			], 
			[
				"id" => 237, 
				"city_id" => 51, 
				"name_en" => "Chaiba", 
				"name_fr" => "Chaiba", 
				"name_ar" => "الشعيبة" 
			], 
			[
				"id" => 255, 
				"city_id" => 51, 
				"name_en" => "Ouled Djellal", 
				"name_fr" => "Ouled Djellal", 
				"name_ar" => "أولاد جلال" 
			], 
			[
				"id" => 265, 
				"city_id" => 52, 
				"name_en" => "Beni-Abbes", 
				"name_fr" => "Beni-Abbes", 
				"name_ar" => "بني عباس" 
			], 
			[
				"id" => 282, 
				"city_id" => 52, 
				"name_en" => "Tamtert", 
				"name_fr" => "Tamtert", 
				"name_ar" => "تامترت" 
			], 
			[
				"id" => 271, 
				"city_id" => 52, 
				"name_en" => "Igli", 
				"name_fr" => "Igli", 
				"name_ar" => "إقلي" 
			], 
			[
				"id" => 269, 
				"city_id" => 52, 
				"name_en" => "El Ouata", 
				"name_fr" => "El Ouata", 
				"name_ar" => "الواتة" 
			], 
			[
				"id" => 279, 
				"city_id" => 52, 
				"name_en" => "Ouled-Khodeir", 
				"name_fr" => "Ouled-Khodeir", 
				"name_ar" => "أولاد خضير" 
			], 
			[
				"id" => 273, 
				"city_id" => 52, 
				"name_en" => "Kerzaz", 
				"name_fr" => "Kerzaz", 
				"name_ar" => "كرزاز" 
			], 
			[
				"id" => 283, 
				"city_id" => 52, 
				"name_en" => "Timoudi", 
				"name_fr" => "Timoudi", 
				"name_ar" => "تيمودي" 
			], 
			[
				"id" => 274, 
				"city_id" => 52, 
				"name_en" => "Ksabi", 
				"name_fr" => "Ksabi", 
				"name_ar" => "القصابي" 
			], 
			[
				"id" => 266, 
				"city_id" => 52, 
				"name_en" => "Beni-Ikhlef", 
				"name_fr" => "Beni-Ikhlef", 
				"name_ar" => "بن يخلف" 
			], 
			[
				"id" => 360, 
				"city_id" => 53, 
				"name_en" => "Inghar", 
				"name_fr" => "Inghar", 
				"name_ar" => "إينغر" 
			], 
			[
				"id" => 357, 
				"city_id" => 53, 
				"name_en" => "Ain Salah", 
				"name_fr" => "Ain Salah", 
				"name_ar" => "عين صالح" 
			], 
			[
				"id" => 358, 
				"city_id" => 53, 
				"name_en" => "Foggaret Ezzoua", 
				"name_fr" => "Foggaret Ezzoua", 
				"name_ar" => "فقارة الزوى" 
			], 
			[
				"id" => 363, 
				"city_id" => 54, 
				"name_en" => "Tin Zouatine", 
				"name_fr" => "Tin Zouatine", 
				"name_ar" => "تين زواتين" 
			], 
			[
				"id" => 356, 
				"city_id" => 54, 
				"name_en" => "Ain Guezzam", 
				"name_fr" => "Ain Guezzam", 
				"name_ar" => "عين قزام" 
			], 
			[
				"id" => 1107, 
				"city_id" => 55, 
				"name_en" => "Temacine", 
				"name_fr" => "Temacine", 
				"name_ar" => "تماسين" 
			], 
			[
				"id" => 1104, 
				"city_id" => 55, 
				"name_en" => "Sidi Slimane", 
				"name_fr" => "Sidi Slimane", 
				"name_ar" => "سيدي سليمان" 
			], 
			[
				"id" => 1097, 
				"city_id" => 55, 
				"name_en" => "Megarine", 
				"name_fr" => "Megarine", 
				"name_ar" => "المقارين" 
			], 
			[
				"id" => 1099, 
				"city_id" => 55, 
				"name_en" => "Nezla", 
				"name_fr" => "Nezla", 
				"name_ar" => "النزلة" 
			], 
			[
				"id" => 1091, 
				"city_id" => 55, 
				"name_en" => "Blidet Amor", 
				"name_fr" => "Blidet Amor", 
				"name_ar" => "بلدة اعمر" 
			], 
			[
				"id" => 1106, 
				"city_id" => 55, 
				"name_en" => "Tebesbest", 
				"name_fr" => "Tebesbest", 
				"name_ar" => "تبسبست" 
			], 
			[
				"id" => 1108, 
				"city_id" => 55, 
				"name_en" => "Touggourt", 
				"name_fr" => "Touggourt", 
				"name_ar" => "تقرت" 
			], 
			[
				"id" => 1105, 
				"city_id" => 55, 
				"name_en" => "Taibet", 
				"name_fr" => "Taibet", 
				"name_ar" => "الطيبات" 
			], 
			[
				"id" => 1092, 
				"city_id" => 55, 
				"name_en" => "El Alia", 
				"name_fr" => "El Alia", 
				"name_ar" => "العالية" 
			], 
			[
				"id" => 1094, 
				"city_id" => 55, 
				"name_en" => "El-Hadjira", 
				"name_fr" => "El-Hadjira", 
				"name_ar" => "الحجيرة" 
			], 
			[
				"id" => 1090, 
				"city_id" => 55, 
				"name_en" => "Benaceur", 
				"name_fr" => "Benaceur", 
				"name_ar" => "بن ناصر" 
			], 
			[
				"id" => 1098, 
				"city_id" => 55, 
				"name_en" => "M'naguer", 
				"name_fr" => "M'naguer", 
				"name_ar" => "المنقر" 
			], 
			[
				"id" => 1109, 
				"city_id" => 55, 
				"name_en" => "Zaouia El Abidia", 
				"name_fr" => "Zaouia El Abidia", 
				"name_ar" => "الزاوية العابدية" 
			], 
			[
				"id" => 1161, 
				"city_id" => 56, 
				"name_en" => "Djanet", 
				"name_fr" => "Djanet", 
				"name_ar" => "جانت" 
			], 
			[
				"id" => 1158, 
				"city_id" => 56, 
				"name_en" => "Bordj El Haouass", 
				"name_fr" => "Bordj El Haouass", 
				"name_ar" => "برج الحواس" 
			], 
			[
				"id" => 1296, 
				"city_id" => 57, 
				"name_en" => "Oum Touyour", 
				"name_fr" => "Oum Touyour", 
				"name_ar" => "أم الطيور" 
			], 
			[
				"id" => 1300, 
				"city_id" => 57, 
				"name_en" => "Sidi Amrane", 
				"name_fr" => "Sidi Amrane", 
				"name_ar" => "سيدي عمران" 
			], 
			[
				"id" => 1293, 
				"city_id" => 57, 
				"name_en" => "M'rara", 
				"name_fr" => "M'rara", 
				"name_ar" => "المرارة" 
			], 
			[
				"id" => 1281, 
				"city_id" => 57, 
				"name_en" => "Djamaa", 
				"name_fr" => "Djamaa", 
				"name_ar" => "جامعة" 
			], 
			[
				"id" => 1306, 
				"city_id" => 57, 
				"name_en" => "Tenedla", 
				"name_fr" => "Tenedla", 
				"name_ar" => "تندلة" 
			], 
			[
				"id" => 1284, 
				"city_id" => 57, 
				"name_en" => "El-M'ghaier", 
				"name_fr" => "El-M'ghaier", 
				"name_ar" => "المغير" 
			], 
			[
				"id" => 1303, 
				"city_id" => 57, 
				"name_en" => "Still", 
				"name_fr" => "Still", 
				"name_ar" => "سطيل" 
			], 
			[
				"id" => 1302, 
				"city_id" => 57, 
				"name_en" => "Sidi Khelil", 
				"name_fr" => "Sidi Khelil", 
				"name_ar" => "سيدي خليل" 
			], 
			[
				"id" => 1495, 
				"city_id" => 58, 
				"name_en" => "El Meniaa", 
				"name_fr" => "El Meniaa", 
				"name_ar" => "المنيعة" 
			], 
			[
				"id" => 1499, 
				"city_id" => 58, 
				"name_en" => "Hassi Gara", 
				"name_fr" => "Hassi Gara", 
				"name_ar" => "حاسي القارة" 
			], 
			[
				"id" => 1498, 
				"city_id" => 58, 
				"name_en" => "Hassi Fehal", 
				"name_fr" => "Hassi Fehal", 
				"name_ar" => "حاسي الفحل" 
            ] 
        ]);
    }
}
