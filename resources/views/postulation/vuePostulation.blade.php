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
												
											<form >
													<textarea rows="2" placeholder="Description"></textarea>
													<div class="attachments">
														<ul>
															<li>
																<i class="fa fa-image"></i>
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
                                    @foreach($postulations as $postulation)
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
                                            <div class="detail">
													<span style="color: #007bff;"><h4><a href="#">{{getAdTitle($postulation->annonce_id)}}</a></h4></span>
													
													
												</div>
                                            
												
												
												<div class="friend-name">
													<span>posté {{Carbon\Carbon::parse( getAdCreatedAt($postulation->annonce_id) )->diffForHumans() }} @role('vacancier') par @endrole</span>
                                                    @role('vacancier')
													<span><img src="images/resources/friend-avatar10.jpg" alt="" style=" margin: 10px; border-radius: 50px;" ><ins><a style="color: #007bff; font-size: medium; margin: 10px;" href="#" title="">{{getPublisherAdName($postulation->annonce_id)}}</a></ins></span>
                                                    @endrole
                                                    
													
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
                                                @role('organisme')
													<span style="color: #007bff;"><h4><a href="#"  style="text-decoration:none;">{{getPostulerName($postulation->user_id)}}</a></h4></span>
                                                 @endrole
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
