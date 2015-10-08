
<div class="form-group">
    {!! Form::label('descricao', '(*)Descriçao:') !!}
    {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('prioridade', '(*)Prioridade:') !!}
    {!! Form::text('prioridade', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('projeto_id', '(*)Projeto:') !!}
    {!! Form::select('projeto_id', $projetoId, null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::hidden('cancelado', false) !!}
    {!! Form::checkbox('cancelado', true) !!}
<span>Cancelado</span>
</div>




