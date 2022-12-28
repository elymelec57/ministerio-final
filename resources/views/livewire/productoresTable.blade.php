<x-jet-action-message on="saved">
  {{ $mensaje }}
</x-jet-action-message>

  <h3 class="display-6 text-center">Productores de venezuela</h3>
  <div class="container" >
    <div class="row">

      <div class="col- col-sm-6 col-md-4 col-lg-3 ">
        <input type="text" placeholder="Filtrar cedula" wire:model="filtrar"  class="form-control">
      </div>

      <div class="col-md-4 col-lg-9">
         <div class="row justify-content-end">
            <div class=" mt-2 col-sm-12 col-lg-2">
              <a class="btn btn-success text-white" href="{{route('pro.pdf')}}" >PDF</a>
            </div>
         </div>
      </div>     
    </div>

    <div class="table-responsive mt-3">
            <table class="table">
              <thead class="bg bg-success text-white">
                  <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th class="text-center">Acciones</th>
                  </tr>
              </thead>
            @if (@count($productores) >= 1)
              <tbody>
                  @foreach ($productores as $productor)
                    <tr>
                        <td>{{$productor->name}}</td>
                        <td>{{$productor->cedula}}</td>
                        <td>{{$productor->telefono}}</td>
                        <td>{{$productor->email}}</td>
                        <td class="text-center">
                          
                          <button  wire:click="listHaciendas({{$productor->id}})" class="btn btn-success text-white btn-sm">Haciendas</button>

                          @if(Auth::user()->rol == '1')
                          <button  wire:click="editar({{$productor->id}})" class="btn btn-success text-white btn-sm"><i class="fas fa-edit"></i></button>
                          <button wire:click="modalProductor({{$productor->id}})" class="btn btn-danger text-white btn-sm"><i class="fas fa-trash"></i></button>
                          @endif
                        </td>
                    </tr>
                  @endforeach
              </tbody>
            @else
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td class="text-center">Ningun dato encotrado</td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            @endif
            </table>
    </div>

    <div class="d-flex">
      {!! $productores->links() !!}
    </div>
           