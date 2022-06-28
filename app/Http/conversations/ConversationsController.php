<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use App\Http\Requests\StoreMessage;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Repository\ConversationsRepository;
use Illuminate\Database\Eloquent\previousPagesUrl;

class ConversationsController extends Controller
{   
    private $repo;
    private $auth;
    
    public function __construct(ConversationsRepository $conversationsRepository, AuthManager $auth)
    {
        $this->repo = $conversationsRepository;
        $this->auth = $auth;
    }


    public function index()
    {
        return view('conversations.index', [
            'users' => $this->repo->getConversations($this->auth->user()->id)
        ]);
    }

    public function show(User $user)
    {
        return view('conversations.show', [
            'users' => $this->repo->getConversations($this->auth->user()->id),
            'user' => $user,
            'messages' => $this->repo->getMessagesFor($this->auth->user()->id, $user->id)->paginate()
            
        ]);
    }

    public function store(User $user, StoreMessage $request)
    {
        $this->repo->createMessage(
            $request->get('content'),
            $this->auth->user()->id, 
            $user->id
        );
        return redirect(url()->previous());
    }
    
}     


