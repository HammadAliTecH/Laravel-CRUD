<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; //Include that db for DB class uses'
use Illuminate\Http\Request;

class Userdata extends Controller
{
     public function trail(){
        $data=DB::table('stu_records')->get();
        echo json_encode($data);
    }
    //CREATE
    public function adduser(Request $request ){    
         $data=DB::table('stu_records')->insert([
          "name" => $request->name,
          "email" => $request->email,
          "class" => $request->class,
          "age" => $request->age ,
          "created_at" => now(),
          "updated_at" => now()
         ]);
         if($data == 1){
            $response='Data Inserted Successfully';
          return view('response',['response' => $response]);

         }else{
             $response='Data not Inserted Successfully';
          return view('response',['response' => $response]);
       
         }
    }
    //FETCH_SINGLE RECORD
    public function readuser_1($name){    
         $data=DB::table('stu_records')
         ->where('name','=',$name)
         ->get();
        return view('single',['data_user' => $data]);
    }
    //FETCH ALL RECORD
    public function readuser(){    
        $user_data=DB::table('stu_records')->orderBy('name')->paginate(3);
        return view('read',['data'=> $user_data]);
    }
    //FETCH FOR UPDATE
    public function updateuser_1(Request $request){    
        $data_f_update=DB::table('stu_records')
        ->where("email",'=',$request->email)
        ->get();

        return view('update_2',["data" =>  $data_f_update]);
    }
    //UPDATE DATA
   public function updateuser_2(Request $request){  
    $data_update=DB::table('stu_records')
    ->where("id",'=',$request->id)
    ->update([
        'name' => $request -> name,
        'email' => $request -> email,
        'class' => $request -> class,
        'age' => $request -> age
    ]);   
       if($data_update == 1){
            $response='Data Updated Successfully';
          return view('response',['response' => $response]);

         }else{
             $response='Data not Updated Successfully';
          return view('response',['response' => $response]);
       
         }
        
     }
     //FETCH FOR DELETION
    public function  deleteuser_1(Request $request){ 
        $fetch_for_delete=DB::table('stu_records')    
        ->where('email','=',$request->email)
        ->get();
        return view('delete_2',['fetch_delete' => $fetch_for_delete]);
    }
    //DELETE DATA
    public function  deleteuser_2(Request $request){
        $data_delete=DB::table('stu_records')
        ->where('id','=',$request->id)
        ->delete();     
        if($data_delete == 1){
            $response='Data DELETED Successfully';
          return view('response',['response' => $response]);

         }else{
             $response='Data not DELETED Successfully';
          return view('response',['response' => $response]);
       
         }
    }

   
}
