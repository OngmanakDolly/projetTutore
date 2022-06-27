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
												<form method="post">
													
													<textarea rows="2" placeholder="Description"></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-music"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-image"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-video-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<i class="fa fa-camera"></i>
																<label class="fileContainer">
																	<input type="file">
																</label>
															</li>
															<li>
																<button type="submit">Publish</button>
															</li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div><!-- add post new box -->
                                    @foreach($annonces as $annonce)
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
                                            <div class="detail">
													<span style="color: #007bff;"><h4>{{$annonce->title}}</h4></span>
													
													
												</div>
                                            
												
												
												<div class="friend-name">
													<span>publié {{Carbon\Carbon::parse($annonce->created_at )->diffForHumans() }}</span>
                                       
												</div>
                                                <div class="detail">
													<br><br>
													
													
												</div>
                                                
                                                <div class="we-video-info">
														<ul>
															<li>
																<span>
                                                                <a href="{{ route('seePostByAd', ['id' => $annonce->id]) }}" class="btn btn-secondary btn-user btn-block">Voir les postulations</a>
																	
																</span>
															</li>
															
														</ul>
													</div>
												
												
											</div>
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
