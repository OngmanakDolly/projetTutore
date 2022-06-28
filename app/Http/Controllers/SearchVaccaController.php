<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class SearchVaccaController extends Controller
{
    public function search()
    {
        $x = request()->input('search');
        $users = User::where('name','like', "%$x%")
                       ->orWhere('email','like',"%$x%")
                       ->paginate(10);

        return view('organisme.search')->with('users', $users);
    } 
}
