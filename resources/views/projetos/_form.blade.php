
<div class="form-group">
    {!! Form::label('descricao', '(*)Descriçao:') !!}
    {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('user_list', '(*)Usuário(s):') !!}
    {!! Form::select('user_list[]', $userIds, null, ['class'=>'form-control usuarios', 'multiple']) !!}
</div>

<div class="form-group">
    {{--{!! Form::checkbox('cancelado', 1, null) !!}--}}
    {!! Form::checkbox('cancelado',null,null, array('id'=>'cancelado')) !!}

<span>Cancelado</span>
</div>




