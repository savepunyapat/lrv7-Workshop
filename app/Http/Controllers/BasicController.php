<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Model\Employee;


class BasicController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function portfolio(){
        return view('pages.portfolio');
    }
    public function blog(){
        return view('pages.blog');
    }

    public function employees(){

        $employees = DB::table('employees')->paginate(3);
        //dd($employees);

        /*$data_emp = array(
            'fullname' => 'Somkit K',
            'gender' => 'Male',
            'email' => 's@gmail.com',
            'tel' => '0123456789',
            'age' => 20,
            'address' => 'Hà Nội',
            'avatar' => 'avatar.jpg',
            'status' => 1,
        );

        $emp = DB::table('employees')->insert($data_emp);*/

        return view('pages.employee')->with('employees', $employees);
    }

    public function employeeslist(){
        $employees = Employee::paginate(3);
        return view('pages.employeelist')->with('employees', $employees);
    }

}
