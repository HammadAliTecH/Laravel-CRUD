<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File; //include to read data from external file...
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stu_record;
class Stu_recordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $data=collect([
        [
            "name" => "Hammad Ali",
            "email" => "hammadmughal7979@gmail.com",
            "class" => "10TH",
            "age" => 24
        ],
        [
            "name" => "Zunaira Nadeem",
            "email" => "zohaibmughal979@gmail.com",
            "class" => "10TH",
            "age" => 22
        ],
          [
            "name" => "Imran ALi",
            "email" => "imranmughal911@gmail.com",
            "class" => "11TH",
            "age" => 23
        ],
            [
            "name" => "Farina CH",
            "email" => "naeemmughal925@gmail.com",
            "class" => "09TH",
            "age" => 21
        ],    [
            "name" => "Zulqarnan ALi",
            "email" => "zulqarnan922@gmail.com",
            "class" => "12TH",
            "age" => 23
        ]
    ]);    


    $data->each(function($value){
        Stu_record::create([
          'name' => $value['name'],
            'email' =>  $value['email'],
            'class' =>  $value['class'],
            'age' =>  $value['age'],          
        ]);
    });





    //  Stu_record::factory(50)->create();
    // Stu_record::create([
    //       //Data for seeding
    // ]);
    //IMPORT DATA FROM JSON FFILE BELOW
        // $data=File::get(path:'database/raw_data/new.json');
        // $array=collect(json_decode($data));
        // $array->each(function($val){
        //      Stu_record::create([
        //         'name' => $val->name,
        //         'email' => $val->email,
        //         'class' => $val->class,
        //         'age' => $val->age,
        //      ]);
        // });
       
    }
}
