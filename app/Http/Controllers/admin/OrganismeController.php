<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class OrganismeController extends Controller
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
        $users = DB::select('select * from users where role = ?', ['organisme']);
 
        return view('admin/organisme', ['users' => $users]);
        
    }

    public function updatePage(Request $request, $id)
    {
        $user = DB::select('select * from users where id = ?', [$id]);
        return view('admin/updateOrganisme', ['user' => $user]);
        
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;
        $username = $request->username;
        $ville = $request->ville;
        $email = $request->email;
        $pays = $request->pays;
        

         $request->validate([
            'name' => 'required',
            'username' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            
        ]);
        
        $user=User::find($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'ville' => $request->ville,
            'pays' => $request->pays,

        ]);
        return redirect('/administrateur/vue-organisme')->with('success','L\'organisme a ete modifie avec succes');
    }



    public function delete($id)
    {
        
        $user=User::find($id);
        $user->delete();
       
        return redirect('/administrateur/vue-vacancier')->with('success','Le vacancier a ete supprime avec succes');
    }

    
}

