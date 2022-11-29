<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('equipo') }}
            {{ Form::text('equipo', $participante->equipo, ['class' => 'form-control' . ($errors->has('equipo') ? ' is-invalid' : ''), 'placeholder' => 'Equipo']) }}
            {!! $errors->first('equipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gallo 1 anillo') }}
            {{ Form::text('gallo1_anillo', $participante->gallo1_anillo, ['class' => 'form-control' . ($errors->has('gallo1_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Gallo1 Anillo']) }}
            {!! $errors->first('gallo1_anillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso gallo 1') }}
            {{ Form::text('peso1', $participante->peso1, ['class' => 'form-control' . ($errors->has('peso1') ? ' is-invalid' : ''), 'placeholder' => 'Peso1']) }}
            {!! $errors->first('peso1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado de gallo 1') }}
            <br>
            <input type="radio" id="activo" name="estado1" value="activo">
            <label for="inactivo">Activo</label><br>
            <input type="radio" id="inactivo" name="estado1" value="inactivo">
            <label for="activo">Inactivo</label><br>
        </div>
        <div class="form-group">
            {{ Form::label('puntos de gallo 1') }}
            {{ Form::text('puntos1', $participante->puntos1, ['class' => 'form-control' . ($errors->has('puntos1') ? ' is-invalid' : ''), 'placeholder' => 'Puntos1']) }}
            {!! $errors->first('puntos1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gallo 2 anillo') }}
            {{ Form::text('gallo2_anillo', $participante->gallo2_anillo, ['class' => 'form-control' . ($errors->has('gallo2_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Gallo2 Anillo']) }}
            {!! $errors->first('gallo2_anillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso gallo 2') }}
            {{ Form::text('peso2', $participante->peso2, ['class' => 'form-control' . ($errors->has('peso2') ? ' is-invalid' : ''), 'placeholder' => 'Peso2']) }}
            {!! $errors->first('peso2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado de gallo 2') }}
            <br>
            <input type="radio" id="activo" name="estado2" value="activo">
            <label for="inactivo">Activo</label><br>
            <input type="radio" id="inactivo" name="estado2" value="inactivo">
            <label for="activo">Inactivo</label><br>
        </div>
        <div class="form-group">
            {{ Form::label('puntos de gallo 2') }}
            {{ Form::text('puntos2', $participante->puntos2, ['class' => 'form-control' . ($errors->has('puntos2') ? ' is-invalid' : ''), 'placeholder' => 'Puntos2']) }}
            {!! $errors->first('puntos2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gallo 3 anillo') }}
            {{ Form::text('gallo3_anillo', $participante->gallo3_anillo, ['class' => 'form-control' . ($errors->has('gallo3_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Gallo3 Anillo']) }}
            {!! $errors->first('gallo3_anillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso gallo 3') }}
            {{ Form::text('peso3', $participante->peso3, ['class' => 'form-control' . ($errors->has('peso3') ? ' is-invalid' : ''), 'placeholder' => 'Peso3']) }}
            {!! $errors->first('peso3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado de gallo 3') }}
            <br>
            <input type="radio" id="activo" name="estado3" value="activo">
            <label for="inactivo">Activo</label><br>
            <input type="radio" id="inactivo" name="estado3" value="inactivo">
            <label for="activo">Inactivo</label><br>
        </div>
        <div class="form-group">
            {{ Form::label('puntos de gallo 3') }}
            {{ Form::text('puntos3', $participante->puntos3, ['class' => 'form-control' . ($errors->has('puntos3') ? ' is-invalid' : ''), 'placeholder' => 'Puntos3']) }}
            {!! $errors->first('puntos3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gallo 4 anillo') }}
            {{ Form::text('gallo4_anillo', $participante->gallo4_anillo, ['class' => 'form-control' . ($errors->has('gallo4_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Gallo4 Anillo']) }}
            {!! $errors->first('gallo4_anillo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso gallo 4') }}
            {{ Form::text('peso4', $participante->peso4, ['class' => 'form-control' . ($errors->has('peso4') ? ' is-invalid' : ''), 'placeholder' => 'Peso4']) }}
            {!! $errors->first('peso4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado de gallo 4') }}
            <br>
            <input type="radio" id="activo" name="estado4" value="activo">
            <label for="inactivo">Activo</label><br>
            <input type="radio" id="inactivo" name="estado4" value="inactivo">
            <label for="activo">Inactivo</label><br>
        </div>
        <div class="form-group">
            {{ Form::label('puntos de gallo 4') }}
            {{ Form::text('puntos4', $participante->puntos4, ['class' => 'form-control' . ($errors->has('puntos4') ? ' is-invalid' : ''), 'placeholder' => 'Puntos4']) }}
            {!! $errors->first('puntos4', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>