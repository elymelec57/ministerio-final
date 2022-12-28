<div>
    <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <select class="form-select" wire:model="selecEstado">
              <option value="0" selected>Selecciona Estado</option>
              @foreach ($estados as $estado)
                <option value="{{$estado->id}}">{{$estado->name}}</option>
              @endforeach
            </select>
            @if ($e == 1)
                <small style="color:#e3342f;  font-weight: bold">Seleccione estado</small>    
            @endif
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <select class="form-select" wire:model="selecMunicipio">
              <option value="0" selected>Selecciona Municipio</option>
              @if (!is_null($municipios))
                  @foreach ($municipios as $municipio)
                  <option value="{{$municipio->id}}">{{$municipio->name}}</option>
                  @endforeach
              @endif
            </select>
            @if ($m == 1)
                <small style="color:#e3342f;  font-weight: bold">Seleccione municipio</small>    
            @endif
          </div>
        </div>
        <div class="col">
            <div class="form-outline">
              <select class="form-select" wire:model="selecParroquia">
                <option value="0" selected>Selecciona Parroquia</option>
                @if (!is_null($parroquias))
                    @foreach ($parroquias as $parroquia)
                    <option value="{{$parroquia->id}}">{{$parroquia->name}}</option>
                    @endforeach
                @endif
              </select>
              @if ($p == 1)
                <small style="color:#e3342f;  font-weight: bold">Seleccione parroquia</small>    
              @endif
            </div>
          </div>     
        </div>
</div>
