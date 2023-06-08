<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        #region seeding Galaxcies
        \App\Models\Galaxcy::create([
            "id"=>'1',
            'title'=>'درب التبانة'
        ]);
        #endregion

        #region seeding Locations Categories
        \App\Models\Lcategory::create([
            "id"=>'1',
            'title'=>'جبلية'
        ]);
        \App\Models\Lcategory::create([
            "id"=>'2',
            'title'=>'تاريخية'
        ]);
        \App\Models\Lcategory::create([
            "id"=>'3',
            'title'=>'ساحلية'
        ]);
        #endregion

        #region seeding Institution Categories
        \App\Models\Icategory::create([
            "id"=>'1',
            'title'=>'فندق'
        ]);
        \App\Models\Icategory::create([
            "id"=>'2',
            'title'=>'شاليه'
        ]);
        #endregion

        #region seeding Users
        \App\Models\User::create([
            "id" => '1',
            "name" => 'علي درويش',
            "email" => 'alidarwish@gmail.com',
            "password" => 'password',
            "suspended" => false,
            "blocked" => false,
            "balance" => 0,
        ]);

        \App\Models\User::create([
            "id" => '2',
            "name" => 'محمد الديري',
            "email" => 'mhdalderi@gmail.com',
            "password" => 'password',
            "suspended" => false,
            "blocked" => false,
            "balance" => 0,
        ]);

        \App\Models\User::create([
            "id" => '3',
            "name" => 'كوران سليمان',
            "email" => 'koransliman@gmail.com',
            "password" => 'password',
            "suspended" => false,
            "blocked" => false,
            "balance" => 0,
        ]);

        \App\Models\User::create([
            "id" => '4',
            "name" => 'سيزر صالح',
            "email" => 'sizarsaleh@gmail.com',
            "password" => 'password',
            "suspended" => false,
            "blocked" => false,
            "balance" => 0,
        ]);

        \App\Models\User::create([
            "id" => '5',
            "name" => 'تاج منعم',
            "email" => 'tagmneem@gmail.com',
            "password" => 'password',
            "suspended" => false,
            "blocked" => false,
            "balance" => 0,
        ]);

        \App\Models\User::create([
            "id" => '6',
            "name" => 'test',
            "email" => 'test@gmail.com',
            "password" => 'password',
            "suspended" => false,
            "blocked" => false,
            "balance" => 0,
        ]);
        #endregion


        #region seeding Planet
        \App\Models\Planet::create([
            "id"=>'1',
            "galaxcy_id"=>"1",
            'title'=>'درب التبانة'
        ]);
        #endregion


        #region seeding Continent
        \App\Models\Contient::create([
            "id"=>'1',
            "planet_id"=>"1",
            'title'=>'آسيا'
        ]);
        #endregion

        #region seeding Coutries
        \App\Models\Country::create([
            "id"=>'1',
            "contient_id"=>"1",
            'title'=>'الجمهورية العربية السورية'
        ]);
        #endregion


        #region seeding Governorate
        \App\Models\Governorate::create([
            "id"=>'1',
            "country_id"=>"1",
            'title'=>'دمشق'
        ]);
        \App\Models\Governorate::create([
            "id"=>'2',
            "country_id"=>"1",
            'title'=>'ريف دمشق'
        ]);
        \App\Models\Governorate::create([
            "id"=>'2',
            "country_id"=>"1",
            'title'=>'ريف دمشق'
        ]);
        \App\Models\Governorate::create([
            "id"=>'3',
            "country_id"=>"1",
            'title'=>'السويداء'
        ]);
        \App\Models\Governorate::create([
            "id"=>'4',
            "country_id"=>"1",
            'title'=>'القنيطرة'
        ]);
        \App\Models\Governorate::create([
            "id"=>'5',
            "country_id"=>"1",
            'title'=>'حمص'
        ]);
        \App\Models\Governorate::create([
            "id"=>'6',
            "country_id"=>"1",
            'title'=>'درعا'
        ]);
        \App\Models\Governorate::create([
            "id"=>'7',
            "country_id"=>"1",
            'title'=>'حماة'
        ]);
        \App\Models\Governorate::create([
            "id"=>'8',
            "country_id"=>"1",
            'title'=>'حلب'
        ]);
        \App\Models\Governorate::create([
            "id"=>'9',
            "country_id"=>"1",
            'title'=>'اللاذقيّة'
        ]);
        \App\Models\Governorate::create([
            "id"=>'10',
            "country_id"=>"1",
            'title'=>'طرطوس'
        ]);
        \App\Models\Governorate::create([
            "id"=>'11',
            "country_id"=>"1",
            'title'=>'الرقة'
        ]);
        \App\Models\Governorate::create([
            "id"=>'12',
            "country_id"=>"1",
            'title'=>'إدلب'
        ]);
        \App\Models\Governorate::create([
            "id"=>'13',
            "country_id"=>"1",
            'title'=>'الحسكة'
        ]);
        \App\Models\Governorate::create([
            "id"=>'14',
            "country_id"=>"1",
            'title'=>'دير الزور'
        ]);
        #endregion


        #region seeding Locations
        #region seeding locations - دير الزور
        \App\Models\Location::create([
            "id"=>'1',
            "governorate_id" => '14', // دير الزور
            'lcategory_id' => '2',
            'title' => 'مملكة ماري',
            'lan' => '34.59034784813779',
            'lat' => '40.88748212742092',
            'descriptoin' => '',
        ]);
        \App\Models\Location::create([
            "id"=>'2',
            "governorate_id" => '14', // دير الزور
            'lcategory_id' => '2', // تاريخي
            'title' => 'حلبية وزلبية',
            'lan' => '35.69002495495575',
            'lat' => '39.822482023642344',
            'descriptoin' => '',
        ]);
        \App\Models\Location::create([
            "id"=>'3',
            "governorate_id" => '14', // دير الزور
            'lcategory_id' => '1',
            'title' => 'جبل البشري',
            'lan' => '35.35220326363798',
            'lat' => '39.326110394993094',
            'descriptoin' => '',
        ]);
        #endregion

        #endregion

        #region seeding institution
        #region seeding institution - دير الزور
        \App\Models\Institution::create([
            "id"=>'1',
            "governorate_id" => '14', // دير الزور
            'icategory_id' => '1', // hotel
            'title' => 'زياد',
            'lan' => '35.35.34395695080307',
            'lat' => '40.14178721119198',
            'rank' => 4.1,
            'descriptoin' => '',
        ]);
        \App\Models\Location::create([
            "id"=>'2',
            "governorate_id" => '14', // دير الزور
            'lcategory_id' => '2', // تاريخي
            'title' => 'البستان',
            'lan' => '35.36158490049268',
            'lat' => '40.11453329969394',
            'rank' => 3.8,
            'descriptoin' => '',
        ]);
        \App\Models\Location::create([
            "id"=>'3',
            "governorate_id" => '14', // دير الزور
            'lcategory_id' => '1',
            'title' => 'فرات الشام بالاس',
            'lan' => '35.365383693010195',
            'lat' => '40.107143346280736',
            'rank' => 4.0,
            'descriptoin' => '',
        ]);
        \App\Models\Location::create([
            "id"=>'3',
            "governorate_id" => '14', // دير الزور
            'lcategory_id' => '1',
            'title' => 'السلامة',
            'lan' => '35.36399932808928',
            'lat' => '40.118061653877156',
            'rank' => 4.3,
            'descriptoin' => '',
        ]);
        #endregion

        #endregion


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
