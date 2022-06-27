@extends('layouts.base')

@section('title')
BetterliDays | Accueil
@endsection

@section('content')



	
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row merged20" id="page-contents">
							<div class="col-lg-3">
								
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="loadMore">
									<div class="central-meta new-pst item">
										<div class="new-postbox">
											<figure>
												<img src="images/resources/admin2.jpg" alt="">
											</figure>
											<div class="newpst-input">
											<h4><a style="color: #007bff;text-align:justify">{{$annonce->title}}</a></h4>
												
											</div>
										</div>
									</div><!-- add post new box -->
                                    
                                    @foreach($postulations as $postulation)
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
                                            <div class="detail">	
												</div>
												<div class="friend-name">
                                                <span style="color: #56585a;"><h6><a href="#"  style="text-decoration:none;">{{getPostulerName($postulation->user_id)}}</a></h6></span>
                                                </div>
                                                <div class="detail">
													<br><br>	
												</div>
                                                
                                                <div class="we-video-info">
														<ul>
															@if($postulation->etat=='accord')
															<li>
																<span>
                                                                <a href="{{route('chat')}}" class="btn btn-primary btn-user btn-block">Contacter</a>
																	
																</span>
															</li>
															@else
															<li>
																<span>
                                                                <a href="{{route('accepter',['id'=> $postulation->id])}}" class="btn btn-success btn-user btn-block">Accepter</a>
																	
																</span>
															</li>
															@endif
															
														</ul>
													</div>
												
												
											</div>
										</div>
                                        <span>envoyé {{Carbon\Carbon::parse($postulation->created_at)->diffForHumans() }} </span>
												<div class="detail">
                                                
													
                                                 
												</div>
									</div>
									@endforeach
									
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		
			
	
	

@endsection
