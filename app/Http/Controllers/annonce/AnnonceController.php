<?php

namespace App\Http\Controllers\annonce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\annonce;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
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

    


    public function create()
    {   
        return view('organisme/createAnnonce');
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $description = $request->description;
        $duree = $request->duree;
        $dateDeDebut = $request->dateDeDebut;
        $dateDeFin = $request->dateDeFin;
        

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'dateDeDebut' => 'required',
            'dateDeFin' => 'required',
            
        ]);

        $annonce =new annonce();
        $annonce->title=$title;
        $annonce->description=$description;
        $annonce->duree=$duree;
        $annonce->dateDeDebut=$dateDeDebut;
        $annonce->dateDeFin=$dateDeFin;
        $annonce->user_id=auth()->user()->id;
        $annonce->save();

        return redirect('organisme/home')->with('success','L\'organisme a ete modifie avec succes');
        
        
    }

    public function delete($id)
    {
        
        $annonce=annonce::find($id);
        $annonce->delete();
       
        return redirect('/organisme/vue-annonce')->with('success','L\'annonce a ete supprime avec succes');
    }

    
}
