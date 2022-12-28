<x-jet-action-message on="saved">
   {{ $mensaje }}
</x-jet-action-message>

            <table class="table">
              <thead class="bg bg-success text-white">
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th class="text-center">Acciones</th>
                  </tr>
              </thead>
              @if (@count($observadores) >= 1)
              <tbody>
               @foreach ($observadores as $observador)
                  <tr>
                      <td>{{$observador->name}}</td>
                      <td>{{$observador->email}}</td>
                      <td class="text-center">
                        <button  wire:click="editar({{$observador->id}})" class="btn btn-success text-white btn-sm"><i class="fas fa-edit"></i></button>
                        <button wire:click="abrirModal({{$observador->id}})" class="btn btn-danger text-white btn-sm"><i class="fas fa-trash"></i></button>
                      </td>
                      
                  </tr>
                 @endforeach
              </tbody>
              @else
                <tbody>
                  <tr>
                    <td></td>
                    <td class="text-center">No hay datos</td>
                    <td></td>
                  </tr>
                </tbody>
              @endif
            </table>
        
            {{$observadores->links()}}

  
  
          