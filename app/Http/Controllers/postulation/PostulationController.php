<?php

namespace App\Http\Controllers\postulation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\annonce;
use App\Models\postulation;
use Illuminate\Support\Facades\Auth;

class PostulationController extends Controller
{
    public function postuler($id)
    {
        $annonce =annonce::find($id);
        $post =new postulation();
        $post->user_id=auth()->user()->id;
        $post->annonce_id=$annonce->id;
        $post->save();

        return redirect('vacancier/home')->with('success','Votre requete a été envoyée');
        
        
    }


    public function storeVacancier()
    {
        $postulations = DB::select('select * from postulations where user_id = ?', [Auth::user()->id]);
        return view('postulation/vuePostulation', ['postulations' => $postulations]);
    }

    public function storeOrganisme()
    {
        $annonces = DB::select('select * from annonces where user_id = ?', [Auth::user()->id]);
        return view('postulation/vueAnnonce', ['annonces' => $annonces]);
    }

    public function seePostByAd($id)
    {
        $annonce=annonce::find($id);
        $postulations = DB::select('select * from postulations where annonce_id = ?', [$id]);
        return view('postulation/seePostByAd', ['postulations' => $postulations],['annonce' => $annonce]);
    }

    public function accepter($id)
    {
        $postulation=postulation::find($id);
        DB::table('postulations')->where('id', $id)->update(['etat' => 'accord']);
        return view('chat/conversation');
    }

}
