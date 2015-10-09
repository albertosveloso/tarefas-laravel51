
<div class="form-group">
    {!! Form::label('descricao', '(*)Descriçao:') !!}
    {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('statustarefa_id', '(*)Status:') !!}
    {!! Form::select('statustarefa_id', $statustarefaId, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('user_id', '(*)Responsável:') !!}
    {!! Form::select('user_id', $userId, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipostarefa_id', '(*)Tipo da tarefa:') !!}
    {!! Form::select('tipostarefa_id', $tipostarefaId, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('necessidade_id', '(*)Necessidade:') !!}
    {!! Form::select('necessidade_id', $necessidadeId, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tempoestimado', 'Tempo estimado (Horas):') !!}
    {!! Form::text('tempoestimado', null, ['class'=>'form-control']) !!} 
</div>

<div class="form-group">
    {!! Form::label('tempogasto', 'Tempo gasto (Horas):') !!}
    {!! Form::text('tempogasto', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('cancelado', false) !!}
    {!! Form::checkbox('cancelado', true) !!}
<span>Cancelada</span>
</div>




