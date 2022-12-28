<?php

namespace App\Http\Livewire\Componentes;

use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use Livewire\Component;
use Illuminate\Support\Collection;

class SelectDinamicosEstados extends Component
{
    // propiedades para usar los select para registrar hacienda
    public $selecEstado = null, $selecMunicipio = null, $selecParroquia = null;
    public $municipios = null, $parroquias = null;
    public $estados = '', $municipio = '', $parroquia = '';
    public $e = 0;
    public $m = 0;
    public $p = 0;
    // ========================
    public $n = 1;

    protected $listeners = ['selectDinamicos'];

    public function mount(){
        $this->estados = Estado::all();
    }

    public function render()
    {
        return view('livewire.componentes.select-dinamicos-estados');
    }

     // metodos para los select dinamicos de los municipio y parroquias 
     public function updatedselecEstado($estado_id){
        $this->municipios = Municipio::where('estado_id', $estado_id)->get();
         // esta linea es para guardar el nombre del estado en la base de datos
         $this->estado = Estado::find($estado_id);
         $this->e = 0;
         $this->emit('estado',$this->estado);
    }

    public function updatedselecMunicipio($municipio_id){
        $this->parroquias = Parroquia::where('municipio_id', $municipio_id)->get();
         // esta linea es para guardar el nombre del municipio en la base de datos
         $this->municipio = Municipio::find($municipio_id);
         $this->m = 0;
         $this->emit('municipio',$this->municipio);
    }

    public function updatedselecParroquia($parroquia_id){
         // esta linea es para guardar el nombre de la parroquia en la base de datos
         $this->parroquia = Parroquia::find($parroquia_id);
         $this->p = 0;
         $this->emit('parroquia',$this->parroquia);
    }
    // fin de los select

    public function selectDinamicos(){
        $this->n++;
        if ($this->n++ > 1) {
            if ($this->selecEstado == '' || $this->selecEstado == 0) {
                $this->e = 1;
            }
            if ($this->selecMunicipio == '' || $this->selecMunicipio == 0) {
                $this->m = 1;
            }
            if ($this->selecParroquia == '' || $this->selecParroquia == 0) {
                $this->p = 1;
            }
        }
    }

}
