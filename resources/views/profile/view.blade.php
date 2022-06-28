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
									
                                    
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">				
                                            <div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Mon Profil</h5>
                                        
                                        @foreach($profil as $monProfil)
										<form>
                                        <div class="form-group">	
                                            <p></p>
											  <label class="control-label" for="input">Nom</label><br><i class="mtrl-select">{{getUserEmail($monProfil->user_id)}}</i>
											</div>
                                            <div class="form-group">	
                                            <p></p>
											  <label class="control-label" for="input">Email</label><br><i class="mtrl-select">{{getUserName($monProfil->user_id)}}</i>
											</div>
                                            <div class="form-group">	
                                            <p></p>
											  <label class="control-label" for="input">Numero De Telephone</label><br><i class="mtrl-select">{{$monProfil->phone}}</i>
											</div>	
                                            <div class="form-group">	
                                            <p></p>
											  <label class="control-label" for="input">Domaine d'Activité</label><br><i class="mtrl-select">{{$monProfil->domaine_d_activite}}</i>
											</div>
											<div class="form-group">	
											  <p></p>
											  <label class="control-label" for="input">Ville</label><br><i class="mtrl-select">{{$monProfil->ville}}</i>
											</div>
                                            <div class="form-group">	
											  <p></p>
											  <label class="control-label" for="pays">Pays</label><br><i class="mtrl-select">{{$monProfil->pays}}</i>
											</div>
											
											</div>
											<div class="form-group">	
                                            <p></p>
											  <label class="control-label" for="textarea">Compétences</label><br><i class="mtrl-select">{{$monProfil->competence}}</i>
											</div>
											<div class="form-group">	
                                            <p></p>
											  <label class="control-label" for="textarea">Expérience Professionnelle</label><br><div><i class="mtrl-select">{{$monProfil->experience_professionnelle}}</i></div>
											</div>
                                            <br><br><br><br>
											<div class="submit-btns">
												<a href="#" class="mtr-btn"><span>Modifier</span></a>
												
											</div>
										</form>
                                        @endforeach
									</div>
												

														
											</div>
										</div>
									</div>
									
									
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		
			
	
	

@endsection
