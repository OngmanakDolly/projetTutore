@extends('layouts.baseOrganisme')

@section('content')
<div class="container">
<form class="user" action="" method="">
							@csrf
                            
                                <div class="form-group mb-4" style="margin-left: 160px;">
                                        <input type="text" name="rechercher" class="" >
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Rechercher
								</button>
                                    </div>    
                                    
                            </form>
@foreach($annonces as $annonce)
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>{{$annonce->title}}</h5></div>
                <div class="card-body">
                        <div class="row mb-3">
                            <h6 class="text-info">Description</h6>
                            <p>{{$annonce->description}}</p>   
                        </div>
                        
                        <div class="row mb-3">
                            <h6 class="text-info">Publié :</h6>
                            <p class="">{{Carbon\Carbon::parse($annonce->created_at)->diffForHumans() }}</p>
                            @role('vacancier')
                            <h6 class="text-info">Par l'entreprise:</h6>
                            <a href="#" style="text-decoration:none; color:black">{{getPublisherName($annonce->user_id)}}</a>   
                            @endrole
                        </div>
                        <a href="#" class="btn btn-primary btn-user btn-block">Voir l'annonce</a>
                        @role('organisme')
                     <a href="{{ route('ViewDeleteAnnonce', ['id' => $annonce->id]) }}" class="btn btn-danger btn-user btn-block">Supprimer</a>
                     @endrole
                     @role('vacancier')
                     <a href="#" class="btn btn-success btn-user btn-block">Contacter l'entreprise</a>
                     @endrole
                </div>
            </div>  
        </div>
    </div>
    @endforeach
</div>
<div class="row justify-content-center">
            {{$annonces->links()}}
</div>

@endsection