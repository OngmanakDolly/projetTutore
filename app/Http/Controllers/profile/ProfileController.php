<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show()
    {
        $profil=DB::select('select * from profiles where user_id = ?', [auth()->user()->id]);
        return view('profile/view', compact('profil'));
    }

    public function edit()
    {
        
        return view('profile/edit');
    }

    public function store(Request $request)
    {
        $domaine_d_activite = $request->domaine_d_activite;
        $competence = $request->competence;
        $experience_professionnelle = $request->experience_professionnelle;
        $date_de_naissance = $request->date_de_naissance;
        $phone = $request->phone;
        $ville = $request->ville;
        $pays = $request->pays;
        

         $request->validate([
            'domaine_d_activite' => 'required',
            'phone' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            
        ]);

        $profil =new Profile();
        $profil->domaine_d_activite=$domaine_d_activite;
        $profil->competence=$competence;
        $profil->experience_professionnelle=$experience_professionnelle;
        $profil->date_de_naissance=$date_de_naissance;
        $profil->phone=$phone;
        $profil->ville=$ville;
        $profil->pays=$pays;
        $profil->user_id=auth()->user()->id;
        $profil->save();

        return redirect('vacancier/show-profile')->with('success','Votre profil a ete modifie avec succes');
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
}
