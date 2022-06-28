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
                                    <h3><a style="color: #007bff;">{{$annonce->title}}</a></h3>
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
															<li>
																<span>
                                                                <a href="#" class="btn btn-danger btn-user btn-block">Supprimer</a>
																	
																</span>
															</li>
															
														</ul>
													</div>
												
												
											</div>
										</div>
                                        <span>envoyé {{Carbon\Carbon::parse($postulation->created_at)->diffForHumans() }} @role('organisme') par @endrole</span>
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
