@extends('layouts.baseAdmin2')

@section('title')
    BetterliDays | tableau De Bord Admin
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Organisme</h1>
                    
                            

                    <!-- DataTales Example organisme-->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des organismes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Identifiant</th>
                                            <th>Email</th>
                                            <th>Ville</th>
                                            <th>Pays</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Identifiant</th>
                                            <th>Email</th>
                                            <th>Ville</th>
                                            <th>Pays</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
									@foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->ville}}</td>
                                            <td>{{$user->pays}}</td>
                                            <td><button class="btn btn-outline-primary"><a class="" href="{{ route('ViewUpdateOrganisme', ['id' => $user->id]) }}">Modifier</a></button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            @endsection
