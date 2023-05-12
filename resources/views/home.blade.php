@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')
   <table class="table table-striped">
      <thead>
         <tr class="border">
            <th scope="col">id</th>
            <th scope="col">Codice_Treno</th>
            <th scope="col">Stazione_di_partenza</th>
            <th scope="col">Stazione_di_arrivo</th>
            <th scope="col">Orario_di_partenza</th>
            <th scope="col">Orario_di_arrivo</th>
            <th scope="col">Azienda</th>
            <th scope="col">Numero_Carrozze</th>
            <th scope="col">In_orario</th>
            <th scope="col">Cancellato</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($trains as $train)
            <tr
               @if ($train->In_orario == 0)
                  class="bg-danger" 
               @endif
               @if ($train->Cancellato == 0)
                  class="text-decoration-line-through" 
               @endif>
               <td>{{ $train->id }}</td>
               <td>{{ $train->Codice_Treno }}</td>
               <td>{{ $train->Stazione_di_partenza }}</td>
               <td>{{ $train->Stazione_di_arrivo }}</td>
               <td>{{ $train->Orario_di_partenza }}</td>
               <td>{{ $train->Orario_di_arrivo }}</td>
               <td>{{ $train->Azienda }}</td>
               <td>{{ $train->Numero_Carrozze }}</td>
               <td>{{ $train->In_orario }}</td>
               <td>{{ $train->Cancellato }}</td>
            </tr>
         @endforeach
      </tbody>
   </table>
@endsection