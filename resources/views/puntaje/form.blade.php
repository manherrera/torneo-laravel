<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('equipo_id') }}
            {{ Form::text('equipo_id', $puntaje->equipo_id, ['class' => 'form-control' . ($errors->has('equipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipo Id']) }}
            {!! $errors->first('equipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntos1') }}
            {{ Form::text('puntos1', $puntaje->puntos1, ['class' => 'form-control' . ($errors->has('puntos1') ? ' is-invalid' : ''), 'placeholder' => 'Puntos1']) }}
            {!! $errors->first('puntos1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntos2') }}
            {{ Form::text('puntos2', $puntaje->puntos2, ['class' => 'form-control' . ($errors->has('puntos2') ? ' is-invalid' : ''), 'placeholder' => 'Puntos2']) }}
            {!! $errors->first('puntos2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntos3') }}
            {{ Form::text('puntos3', $puntaje->puntos3, ['class' => 'form-control' . ($errors->has('puntos3') ? ' is-invalid' : ''), 'placeholder' => 'Puntos3']) }}
            {!! $errors->first('puntos3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntos4') }}
            {{ Form::text('puntos4', $puntaje->puntos4, ['class' => 'form-control' . ($errors->has('puntos4') ? ' is-invalid' : ''), 'placeholder' => 'Puntos4']) }}
            {!! $errors->first('puntos4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puntos5') }}
            {{ Form::text('puntos5', $puntaje->puntos5, ['class' => 'form-control' . ($errors->has('puntos5') ? ' is-invalid' : ''), 'placeholder' => 'Puntos5']) }}
            {!! $errors->first('puntos5', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>