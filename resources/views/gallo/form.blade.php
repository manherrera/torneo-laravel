<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Equipo') }}
            {{ Form::select('equipo_id', $equipo, $gallo->equipo_id, ['class' => 'form-control' . ($errors->has('equipo_id') ? ' is-invalid' : ''), 'placeholder' => '--Equipo--']) }}
            {!! $errors->first('equipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Partido') }}
            {{ Form::text('partido', $gallo->partido, ['class' => 'form-control' . ($errors->has('partido') ? ' is-invalid' : ''), 'placeholder' => 'Partido']) }}
            {!! $errors->first('partido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Peso') }}
            {{ Form::text('peso', $gallo->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Anillo') }}
            {{ Form::text('anillo', $gallo->anillo, ['class' => 'form-control' . ($errors->has('anillo') ? ' is-invalid' : ''), 'placeholder' => 'Anillo']) }}
            {!! $errors->first('anillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>