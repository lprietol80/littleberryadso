@extends('layouts.app')

@section('page-content')
{{-- --crear un boton para agregar nuevos menus-- --}}
<div class="flex justify-end m-4">
  <a href="{{route('menus.create')}}" class="btn btn-outline">Nuevo menu</a>
</div>
<div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6' style="background: rgb(151, 141, 141)">
  @foreach ($menus as $menu)
    <div class="card bg-base-100 w-96 shadow-xl m-8" style="margin:5px; border:1px solid rgb(212, 207, 207)">
      <figure>
        <img
          src="https://th.bing.com/th/id/R.027661e904b8cdd438909ba06270531a?rik=DNddRhwtA1z4Ng&pid=ImgRaw&r=0
          {{-- https://picsum.photos/id/{{$menu->id}}/240 --}}
          " alt="{{$menu->nombre}}"/>
      </figure>
      <div class="card-body">
        <h1 class="card-title">{{$menu -> nombre}}</h1>
        <p>{{$menu -> descripcion}}</p>

        <p class="badge badge-accent badge-outline">$:{{$menu -> precio}}</p>
        <p>Categoria: {{$menu -> categoria}}</p>

        <div class="card-actions justify-center">
          <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary" >Editar</a>  
          <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-warning">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection

