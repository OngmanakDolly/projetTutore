<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\annonce;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name' => 'vacancier']);
        //Role::create(['name' => 'organisme']);
        //Permission::create(['name' => 'create post']);
        //Permission::create(['name' => 'delete post']);
        //Permission::create(['name' => 'delete user']);
        //$role=Role::findById(3);
        //$permission=Permission::findById(2);
        //$permission1=Permission::findById(3);
        //$role->givePermissionTo($permission);
        //$role->givePermissionTo($permission1);
       
        $annonces = DB::table('annonces')->where('user_id','=', [Auth::user()->id])->orderBy('created_at','DESC')->paginate(10);
        return view('organisme/home', compact('annonces'));
    }
}
