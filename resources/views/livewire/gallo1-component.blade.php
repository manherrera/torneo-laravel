<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="text-center">
                <div class="row">
                    <div class="col-12">
                        <select name="participante_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:change="listarG1llos($event.target.value)">
                            <option>--- Seleccionar Equipo ---</option>
                            @foreach($participantes as $participante)
                            <option value="{{$participante->id}}">{{$participante->equipo}}</option>
                            @endforeach
                        </select>
                        &nbsp;
                    <img src="{{ asset('argon') }}/img/brand/vs.png" width=180 height=85>
                        &nbsp;
                        <select name="clonparticipante_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:change="listarG1llos($event.target.value)">
                            <option>--- Seleccionar Equipo ---</option>
                            @foreach($clonparticipantes as $clonparticipante)
                            <option value="{{$clonparticipante->id}}">{{$clonparticipante->equipo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>