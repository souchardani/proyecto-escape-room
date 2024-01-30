@extends('layouts.CRUDlayout')
@section('title', 'CRUD Admin - Juego 2 - Nuevo')
@section('content')

<!-- Displays this message if the previous creation was successful -->
@if ($message = Session::get('success'))
    <div>{{$message}}</div>
@endif

<div class="text-2xl shadow-xl">
    <form action="{{route('admin.game2storeNew')}}" method="post">
        @csrf

        <div class="flex flex-col">
            <label for="compound" class="p-3">Compuesto</label>
            <input type="text" name="compound" id="compound" value="{{old('compound')}}" class="shadow-xl border rounded-xl p-2"><br>
            @if ($errors->has('compound'))
                <span>El campo compuesto es obligatorio</span><br>
            @endif

            <label for="category" class="p-3">Categoría</label>
            <select name="category" id="category" class="shadow-xl border rounded-xl p-2">
                <option value=""></option>
                <option value="ANÁLISIS">ANÁLISIS</option>
                <option value="MICROBIOLOGÍA">MICROBIOLOGÍA</option>
                <option value="MEDIDA">MEDIDA</option>
                <option value="BIOTECNOLOGÍA">BIOTECNOLOGÍA</option>
            </select>
            @if ($errors->has('category'))
                <span>El campo categoría es obligatorio</span><br>
            @endif
        </div>

        <div class="flex justify-center p-2 my-3 ">
            <input type="submit" value="Crear" class="shadow-xl border rounded-xl p-2 bg-green-300 mx-2 hover:bg-green-400">
            <a href="{{route('admin.game2')}}" class="shadow-xl border rounded-xl p-2 bg-red-400 hover:bg-red-500">Cancelar</a>
        </div>
    </form>
</div>
@endsection
