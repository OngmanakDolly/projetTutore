<?php

namespace App\Repository;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ConversationsRepository
{
    private $user;
    private $message;

    public function __construct(User $user, Message $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

     public function getConversations(int $userId)
     { 
    //     $idAnnonce = DB::select("SELECT id from annonces where user_id = ?", [Auth::user()->id]);
    //     foreach ($idAnnonce as $val)
    //     {
    //         $idU = DB::select("SELECT user_id from postulations where annonce_id = $val and etat = accord");
    //         $idU->
    //     }

    //     dd($idU);

       return $this->user->newQuery()
        ->select('username','id')
        ->where('id','=!', $userId)
        ->get();
    }
    
    public function createMessage($content, $from, $to )
    {
        
        return $this->message->newQuery()->create([
            'content' => $content,
            'from_id' => $from,
            'to_id' => $to,
            'created_at' => Carbon::now()
        ]);
    }
    
    public function getMessagesFor( $from, $to ): Builder
    {
        return $this->message->newQuery()
            ->whereRaw("(from_id = $from AND to_id = $to) OR (from_id = $to AND to_id = $from)")
            ->orderBy('created_at', 'asc');
    }

    public function unreadCount( $userId )
    {
        return $this->message->newQuery()
            ->where('to_id', $userId)
            ->groupBy('from_id')
            ->selectRaw('from_id, COUNT(id) as count')
            ->whereRaw('read_at IS NULL')
            ->get()
            ->pluck('count','from_id');

    }

}