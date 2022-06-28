@extends('layouts.baseAdmin')

@section('content')
            <table>
                <tr>
                
                    <th>Nom</th>
                    <th>Identifiant</th>
                    <th>Email</th>
                    <th>Ville</th>
                    <th>Pays</th>
                    
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->ville}}</td>
                    <td>{{$user->pays}}</td>
                    
                </tr>
                @endforeach
            </table>
            @endsection
