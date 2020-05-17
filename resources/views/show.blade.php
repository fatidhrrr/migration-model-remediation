@extends('layouts/master')

@include('components/navigation')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="section-title">Titre</h3>
            <div class="section-title-divider"></div>
        </div>
    </div>
</div>
<section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$titres->id}}</td>
                        <td>{{$titres->titre}}</td>
                    <td>
                        <a href='{{route('editTitre', $titres)}}' class='btn btn-warning'>Edit</a>
                        <a href='{{route('deleteTitre', $titres)}}' class='btn btn-danger'>Delete</a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
