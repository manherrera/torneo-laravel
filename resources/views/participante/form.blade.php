<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Equipo') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('equipo', $participante->equipo, ['class' => 'form-control' . ($errors->has('equipo') ? ' is-invalid' : ''), 'placeholder' => 'Equipo']) }}
                    {!! $errors->first('equipo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="partido" id="partido" value="verde">
                            <label class="form-check-label" for="partido">Verde</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="partido" id="partido" value="rojo">
                            <label class="form-check-label" for="partido">Rojo</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Datos del Gallo 1: ') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('gallo1_anillo', $participante->gallo1_anillo, ['class' => 'form-control' . ($errors->has('gallo1_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Anillo del Gallo 1']) }}
                    {!! $errors->first('gallo1_anillo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('peso1', $participante->peso1, ['class' => 'form-control' . ($errors->has('peso1') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
                    {!! $errors->first('peso1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('puntos1', $participante->puntos1, ['class' => 'form-control' . ($errors->has('puntos1') ? ' is-invalid' : ''), 'placeholder' => 'Puntos']) }}
                    {!! $errors->first('puntos1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('Datos del Gallo 2: ') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('gallo2_anillo', $participante->gallo2_anillo, ['class' => 'form-control' . ($errors->has('gallo2_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Anillo del Gallo 2']) }}
                    {!! $errors->first('gallo2_anillo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('peso2', $participante->peso2, ['class' => 'form-control' . ($errors->has('peso2') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
                    {!! $errors->first('peso2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('puntos2', $participante->puntos2, ['class' => 'form-control' . ($errors->has('puntos2') ? ' is-invalid' : ''), 'placeholder' => 'Puntos']) }}
                    {!! $errors->first('puntos2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        
        <div class="form-group">
            {{ Form::label('Datos del Gallo 3: ') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('gallo3_anillo', $participante->gallo3_anillo, ['class' => 'form-control' . ($errors->has('gallo3_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Anillo del Gallo 3']) }}
                    {!! $errors->first('gallo3_anillo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('peso3', $participante->peso3, ['class' => 'form-control' . ($errors->has('peso3') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
                    {!! $errors->first('peso3', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('puntos3', $participante->puntos3, ['class' => 'form-control' . ($errors->has('puntos3') ? ' is-invalid' : ''), 'placeholder' => 'Puntos']) }}
                    {!! $errors->first('puntos3', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        
        <div class="form-group">
            {{ Form::label('Datos del Gallo 4: ') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('gallo4_anillo', $participante->gallo4_anillo, ['class' => 'form-control' . ($errors->has('gallo4_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Anillo del Gallo 4']) }}
                    {!! $errors->first('gallo4_anillo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('peso4', $participante->peso4, ['class' => 'form-control' . ($errors->has('peso4') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
                    {!! $errors->first('peso4', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('puntos4', $participante->puntos4, ['class' => 'form-control' . ($errors->has('puntos4') ? ' is-invalid' : ''), 'placeholder' => 'Puntos']) }}
                    {!! $errors->first('puntos4', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('Datos del Gallo 5: ') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::text('gallo5_anillo', $participante->gallo5_anillo, ['class' => 'form-control' . ($errors->has('gallo5_anillo') ? ' is-invalid' : ''), 'placeholder' => 'Anillo del Gallo 5']) }}
                    {!! $errors->first('gallo5_anillo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('peso5', $participante->peso5, ['class' => 'form-control' . ($errors->has('peso5') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
                    {!! $errors->first('peso5', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="col">
                    {{ Form::text('puntos5', $participante->puntos5, ['class' => 'form-control' . ($errors->has('puntos5') ? ' is-invalid' : ''), 'placeholder' => 'Puntos']) }}
                    {!! $errors->first('puntos5', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>