@extends('relatorio')
@section('content')

<h4 class="page-header" xmlns="http://www.w3.org/1999/html">Relatório de tarefas por status 
<span class="glyphicon glyphicon-print" onclick="script = window.print();" title="Imprimir relatório"></span>  
</h4>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Status</th>
            <th>ID Tarefa</th>
            <th>Tarefa</th>
            <th>Tempo Estimado(horas)</th>
            <th>Tempo Gasto(horas)</th>
            <th>Data Tarefa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($query as $item)
        <tr>
            <td>{{$item->status}}</td>
            <td>{{$item->codtarefa}}</td>
            <td>{{$item->tarefa}}</td>
            <td>{{$item->tempoestimado}}</td>
            <td>{{$item->tempogasto}}</td>
            <td>{{$item->datacadastro}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop    



