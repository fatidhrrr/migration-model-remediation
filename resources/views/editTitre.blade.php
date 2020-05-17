@extends('layouts/master')
@section('content')
    @include('components/navigation')
      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire Titre Edit</h3>
        </div>
        <div class="container">   
            {{-- <section class="form py-5 mt-5 container"> --}}
            <form action="{{route('updateTitre', $titres->id)}}" method="POST" class="contactForm ">
                @csrf
                <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                        <select name="name" id="" class="form-control">
                            @foreach ($albums as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group col-md-6 mx-auto">
                        <input type="titre" class="form-control" name="titre" id="titre" placeholder="titre"
                            data-rule="titre" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="text-center ">
                    <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
                </div>
            </form>
        </div>
    </section>