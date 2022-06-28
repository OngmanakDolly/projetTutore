<?php

namespace App\Http\Controllers\organisme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\annonce;
use Illuminate\Support\Facades\Auth;

class HomeOrganismeController extends Controller
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
    public function indexOrganisme()
    {
        
        $annonces = DB::table('annonces')->where('user_id','=', [Auth::user()->id])->orderBy('created_at','DESC')->paginate(10);
        return view('organisme/home', compact('annonces'));
    }

    public function indexVacancier()
    {
        
        $annonces = DB::table('annonces')->orderBy('created_at','DESC')->paginate(10);
        return view('organisme/home', compact('annonces'));
    }
}
