@extends('layouts.base')
 
 
 @section('content')


    
                           <div class="col-lg-9">
								<div class="central-meta">
									<div class="messages">
										<h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
										<div class="message-box">
											<ul class="peoples">
												
                                            @foreach($users as $user)
                                                <a class="list-group-item" href="{{ route( 'conversations.show', $user->id) }}">
                                                    <li>
                                                        <figure>
                                                            <img src="{{images(resources/friend-avatar2.jpg)}}" alt="">
                                                            <span class="status f-online"></span>
                                                        </figure>
                                                        <div class="people-name">
                                                            <span>{{ $user->name }}</span>
                                                        </div>
                                                    </li>
                                                </a>
                                            @endforeach
											</ul>
											<div class="peoples-mesg-box">
												<div class="conversation-head">
													<figure><img src="images/resources/friend-avatar.jpg" alt=""></figure>
													<span>{{ $user->username}} <i>online</i></span>
												</div>
<!--=====================================================AFFICHAGE DES MESSAGE=============================================================-->
                                                <ul class="chatting-area">
                                                    @foreach($messages as $message)
                                                        <li class="{{ $message->from->id !== $user->id ? 'me' : 'you' }}">
                                                            <figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
                                                            <p>{!! nl2br(e($message->content)) !!} </p>
                                                            <h6 style="font-size:0.7rem;">{{ $message->created_at->diffForHumans() }}</h6>
                                                        </li>
                                                    @endforeach   
<!--=====================================================FIN DES MESSAGE=============================================================-->
                                                </ul>
												<div class="message-text-container">
													<form method="post">
                                                    {{ csrf_field() }}
														<textarea name="content" placeholder="Ecrivez votre message ici ..." height="100%" ></textarea>
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                @foreach($errors->all() as $error)
                                                                <li>{{ $error}}</li>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <button title="send" type="submit"><i class="fa fa-paper-plane"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>




 @endsection




