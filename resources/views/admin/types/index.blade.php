@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="table-responsive">
        <h1>Aggiungi/modifica le tipologie dei progetti</h1>
        <form action="{{route('admin.types.store')}}" method="POST">
            @csrf
            <input type="text" name="name">
            <button type="sibmit">Aggiungi</button>

        </form>



        <table class="table">
            <tbody>
                @foreach ($types as $type )
                    <tr>
                        <td>{{$type->name}}</td>
                        <td>Invia</td>
                        <td>Elimina</td>
                    </tr>

                @endforeach
            </tbody>
          </table>
    </div>

</div>
@endsection
