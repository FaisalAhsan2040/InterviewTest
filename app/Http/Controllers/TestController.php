<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\User;


class TestController extends Controller
{
    public function check()
    {
     $user =  User::with(['department','subject'])->get();
     print_r(json_encode($user));die;
    }
}
