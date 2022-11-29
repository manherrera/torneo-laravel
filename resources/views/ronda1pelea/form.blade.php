<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Peleador 1') }}
            {{ Form::select('peleador1', $participante, $ronda1pelea->peleador1, ['class' => 'form-control' . ($errors->has('peleador1') ? ' is-invalid' : ''), 'placeholder' => '--Peleador--']) }}
            {!! $errors->first('peleador1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peleador 2') }}
            {{ Form::select('peleador2', $participante, $ronda1pelea->peleador2, ['class' => 'form-control' . ($errors->has('peleador2') ? ' is-invalid' : ''), 'placeholder' => '--Peleador--']) }}
            {!! $errors->first('peleador1', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>