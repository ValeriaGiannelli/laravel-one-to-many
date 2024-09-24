@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="table-responsive">
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
