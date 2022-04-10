<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use DB;


class HomeController extends Controller
{

public function home(){
    return view('pages.home') ;
}
public function about(){
    return view('pages.about') ;
}
public function service(){
    return view('pages.service') ;
}
public function contact(){
    return view('pages.contact') ;
}
public function login(){
    return view('pages.login') ;
}


public function employees(){
    $employees = DB::table('employees')->get(); //อ่านทั้งหมด
   // $employees = DB::table('employees')->first(); //อ่านข้อมูลตารางเดียว
    //$employees = DB::table('employees')->first(['fullname','gender','email']); //อ่านข้อมูลตารางเดียวระบุ field
   // $employees = DB::table('employees')->where('id',3)->get();
    //$employees = DB::table('employees')->where('id','>=',2)->get(['id','fullname','email']);
    // $employees = DB::table('employees')
    //             ->where('id',1)
    //             ->where('status',1)
    //             ->where('age',20)
    //             ->first(); //ระบุมากกว่า 1 เงื่อนไข แบบ and 

                // $employees = DB::table('employees')
                // ->where('id',2)
                // ->where('status',1)
                // ->orwhere('age',20)
                // ->first(); //ระบุมากกว่า 1 เงื่อนไข แบบ or
     //$employees = DB::table('employees')->max('age'); //ระบุ ID โดยตรง
     //$employees = DB::table('employees')->count(); //ระบุ ID โดยตรง

     //การเพิ่มข้อมูลในตาราง
    //  $data = array(
    // 'fullname' => 'nija naruto',
    // 'gender' => 'male',
    // 'email' => 'naruto@gmail.com',
    // 'tel' => '8888888',
    // 'age' => '18',
    // 'address' => '99/999',
    // 'avartar' => 'naruto.jpg',
    // 'status' => '1',
    //  );
       
    //  $employees = DB::table('employees')->insert($data);
    //การupdateข้อมูลในตาราง
    //  $data = array(
    // 'email' => 'naruto999@gmail.com',
    // 'tel' => '9999',
    // 'age' => '28',
    //  );
       
     //$employees = DB::table('employees')->where('id',4)->update($data);
    //  $employees = DB::table('employees')->where('id',4)->delete();//ไม่ต้องใส่ตัวแปร

    return $employees; // return = 1
}
    public function employeelist()
    {
        //$employees = Employee::all();//
        //$employees = Employee::all(['fullname']);
        //$employees = Employee::first(['fullname']);
        //$employees = Employee::where('id',2)->get();
        //$employees = Employee::where('age','>',20)->get();
        // $employees = Employee::where('age','>',10)
        // ->orderByDesc('age')
        // ->get();
         //การเพิ่มข้อมูลในตาราง
    //  $data = array(
    // 'fullname' => 'nija naruto',
    // 'gender' => 'male',
    // 'email' => 'naruto@gmail.com',
    // 'tel' => '8888888',
    // 'age' => '18',
    // 'address' => '99/999',
    // 'avartar' => 'naruto.jpg',
    // 'status' => '1',
    //  );
    //  $employees = Employee::create($data);

     //Update
    //    $data = array(
       
    //     'gender' => '11male',
    //     'email' => '11naruto@gmail.com',
    //     'tel' => '11',
        
    //      );
    //      $employees = Employee::where('id',5)->update($data);

    //Delete
    //$employees = Employee::where('id',5)->delete();

    $employees = Employee::where('id','>',0)->paginate(2);

        return view ('pages.employee',compact('employees'));
    }
}
