<x-app-layout>
  <x-slot name="header">
      <!--<h2 class="h4 font-weight-bold">
        
      </h2>-->
      @include('botones')
  </x-slot>
 
  <!-- Navbar -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner h-3">
      <div class="carousel-item active">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg" class="d-block w-100" alt="...">
      </div>
      @foreach($producciones as $p)
      <div class="carousel-item">
        <div class="bg-dark p-5">
            <h2 class="text-center p-5 text-white bg-success">Producción de {{$p->cultivo}} en la haceinda {{$p->name}} ubicada en 
              {{$p->estado}}, {{$p->municipio}}, {{$p->parroquia}} {{$p->direccion}}, fecha de cosecha es el {{$p->fechaC}}. contactalos al {{$p->telefono}}.</h2>
        </div>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Carousel wrapper -->
</div>

<div class="row mt-5">
  <div class="col-lg-12">
      <h1 class="text-center">Eventos del ministerio</h1>
  </div>
  <div class="row">
    <div class="col-lg-12 d-flex flex-wrap">
      @foreach ($eventos as $evento)
          @include('livewire.card')
      @endforeach
    </div>
  </div>
</div>

</x-app-layout>
