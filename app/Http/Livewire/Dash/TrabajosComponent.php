<?php

namespace App\Http\Livewire\Dash;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image;

use App\Models\Trabajo;
use App\Models\Categoria;

class TrabajosComponent extends Component{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $categoria;
    public $nombre;
    public $descripcion;

    public $categorias;
    public $moTrabajo;

    public $busqueda;

    public function mount(){
        $this->categorias = Categoria::orderBy('nombre')->get();
    }

    public function updatingBusqueda(){
        $this->resetPage();
    }

    public function estado($trabajo_id){
        $trabajo = Trabajo::find($trabajo_id);
        if($trabajo->estado){
            $trabajo->estado = 0;
        }else{
            $trabajo->estado = 1;
        }
        $trabajo->save();
    }

    public function store(){

        $this->validate([
            'categoria' => 'required',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $trabajo = new Trabajo;
        $trabajo->categoria_id = $this->categoria;
        $trabajo->nombre = $this->nombre;
        $trabajo->descripcion = $this->descripcion;        

        $trabajo->save();

        $this->reset(['categoria', 'nombre', 'descripcion']);
        
    }

    public function edit($trabajo_id){
        $this->moTrabajo = Trabajo::find($trabajo_id);

        $this->categoria = $this->moTrabajo->categoria_id;
        $this->nombre = $this->moTrabajo->nombre;
        $this->desripcion = $this->moTrabajo->descripcion;
    }

    public function update(){

        $this->validate([
            'categoria' => 'required',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $this->moTrabajo->categoria_id = $this->categoria;
        $this->moTrabajo->nombre = $this->nombre;
        $this->moTrabajo->descripcion = $this->descripcion;
        $this->moTrabajo->save();

        
    }

    public function show($trabajo_id){
        $this->moTrabajo = Trabajo::find($trabajo_id);
    }

    public function close(){
        $this->reset(['categoria', 'nombre', 'descripcion', 'moTrabajo']);
        $this->resetValidation();
    }

    public function render(){
        return view('livewire.dash.trabajos-component',[
            'trabajos' => Trabajo::where('nombre', 'like', '%'.$this->busqueda.'%')->orderBy('created_at', 'desc')->paginate(10)
        ])->layout('layouts.dash');
    }

}