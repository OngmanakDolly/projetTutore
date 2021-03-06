<?php





function getPublisherName($user_id)
{
    $user=App\Models\User::find($user_id);
    return $user->username;
}


function getAdTitle($annonce_id)
{
    $ad=App\Models\annonce::find($annonce_id);
    return $ad->title;
}

function getPostulerName($user_id)
{
    $user=App\Models\User::find($user_id);
    return $user->username;
}


function getAdCreatedAt($annonce_id)
{
    $ad=App\Models\annonce::find($annonce_id);
    return $ad->created_at;
}


function getPublisherAdName($annonce_id)
{
    $ad=App\Models\annonce::find($annonce_id);
    return getPublisherName($ad->user_id);
}

function getUserEmail($user_id)
{
    $user=App\Models\User::find($user_id);
    return $user->email;
}

function getUserName($user_id)
{
    $user=App\Models\User::find($user_id);
    return $user->name;
}


function verifyPostulation($annonce_id)
{
    
    $tab = Illuminate\Support\Facades\DB::select('select * from postulations where annonce_id = ? and user_id = ?', [$annonce_id, Illuminate\Support\Facades\Auth::user()->id]);
    if(sizeof($tab)==0)
    {
        return true;
    }
    else{
        return false ;
    }
    
}