<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Peleador 1') }}
            <div class="row g-3">
                <div class="col">
                    <select name="equipo1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:change="listarG1llos($event.target.value)">
                        <option>--- Seleccionar Equipo ---</option>
                        @foreach($participantes as $participante)
                        <option value="{{$participante->equipo}}">{{$participante->equipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="peleador1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>--- Seleccionar Anillo ---</option>
                        @if ($g1llos)
                            @foreach($g1llos as $g1llo)
                            <option value="{{$g1llo->gallo1_anillo}}">{{$g1llo->gallo1_anillo}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

        </div>
        <div class="form-group">
            {{ Form::label('Peleador 2') }}
            <div class="row g-3">
                <div class="col">
                    <select name="equipo2" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:change="listarG1llos($event.target.value)">
                        <option>--- Seleccionar Equipo ---</option>
                        @foreach($participantes as $participante)
                        <option value="{{$participante->equipo}}">{{$participante->equipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <select name="peleador1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>--- Seleccionar Anillo ---</option>
                        @if ($g1llos)
                            @foreach($g1llos as $g1llo)
                            <option value="{{$g1llo->gallo1_anillo}}">{{$g1llo->gallo1_anillo}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>