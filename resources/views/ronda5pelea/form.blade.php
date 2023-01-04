<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Peleador 1') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::select('equipo1', $equipo, $ronda5pelea->equipo1, ['class' => 'form-control' . ($errors->has('equipo1') ? ' is-invalid' : ''), 'placeholder' => '-- Equipo 1 --']) }}
                    {!! $errors->first('equipo1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('Peleador 2') }}
            <div class="row g-3">
                <div class="col">
                    {{ Form::select('equipo2', $equipo, $ronda5pelea->equipo2, ['class' => 'form-control' . ($errors->has('equipo2') ? ' is-invalid' : ''), 'placeholder' => '-- Equipo 2 --']) }}
                    {!! $errors->first('equipo2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>