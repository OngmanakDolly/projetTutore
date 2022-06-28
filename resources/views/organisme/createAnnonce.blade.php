@extends('layouts.base')



@section('content')
<div class="central-meta item" style="margin-left:300px; width: 600px;">
										<div class="user-post">
											<div class="friend-info" >
                                            <div class="detail">deposer une annonce</div>
                    <form method="POST" action="{{ route('CreerAnnonce') }}" >
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Titre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="email"  rows="10" class="form-control @error('description') is-invalid @enderror" name="description" value="" required autocomplete="description"></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="duree" class="col-md-4 col-form-label text-md-end">Duree</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('duree') is-invalid @enderror" name="duree" required autocomplete="duree">

                                @error('duree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateDeDebut" class="col-md-4 col-form-label text-md-end">Date de debut</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="date" class="form-control" name="dateDeDebut" required autocomplete="dateDeDebut">
                            </div>
                            @error('dateDeDebut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="dateDeFin" class="col-md-4 col-form-label text-md-end">Date de fin</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="date" class="form-control" name="dateDeFin" required autocomplete="dateDeFin">
                            </div>
                            @error('dateDeFin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Publier</button>
                                <a href="{{ route ('VueAnnonceOrganisme') }}" class="btn btn-danger">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


            @endsection
