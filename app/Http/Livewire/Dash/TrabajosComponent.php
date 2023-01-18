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
use App\Models\Foto;

class TrabajosComponent extends Component{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $categoria;
    public $nombre;
    public $descripcion;
    public $foto;

    public $categorias;
    public $moTrabajo;

    public $busqueda;

    public function mount(){
        $this->categorias = Categoria::where('estado', 1)->orderBy('orden')->get();
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
        $trabajo->nombre = Str::title($this->nombre);
        $trabajo->descripcion = $this->descripcion;        

        $trabajo->save();

        $this->reset(['categoria', 'nombre', 'descripcion']);
        
    }

    public function edit($trabajo_id){
        $this->moTrabajo = Trabajo::find($trabajo_id);

        $this->categoria = $this->moTrabajo->categoria_id;
        $this->nombre = $this->moTrabajo->nombre;
        $this->descripcion = $this->moTrabajo->descripcion;
    }

    public function update(){

        $this->validate([
            'categoria' => 'required',
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $this->moTrabajo->categoria_id = $this->categoria;
        $this->moTrabajo->nombre = Str::title($this->nombre);
        $this->moTrabajo->descripcion = $this->descripcion;
        $this->moTrabajo->save();

        
    }

    // FOTOS

    public function fotos($trabajo_id){
        $this->moTrabajo = Trabajo::find($trabajo_id);
    }

    public function storeFoto(){

        $this->validate([
            'foto' => 'required|image|max:5120',
        ]);

        $foto = new Foto;
        $foto->trabajo_id = $this->moTrabajo->id;
        $foto->orden = $this->moTrabajo->fotos()->max('orden') + 1;

        // upload imagen
        $path = $this->foto->store('public/trabajos/fotos');
        Image::make('../storage/app/'.$path)->fit(1080, 720)->save(null,50,null);

        $foto->path = $path;            
        $foto->save();

        $this->reset(['foto']);
        $this->moTrabajo->refresh();
        
    }

    public function fotoUp($foto_id){
        if($this->moTrabajo->fotos->count()>1){
            $foto = Foto::find($foto_id);
            $fotoPrev = Foto::where('trabajo_id', $this->moTrabajo->id)->where('orden', ($foto->orden-1))->first();
            $foto->decrement('orden');
            $fotoPrev->increment('orden');
            $this->moTrabajo->refresh();            
        }

    }

    public function fotoDown($foto_id){
        if($this->moTrabajo->fotos->count()>1){
            $foto = Foto::find($foto_id);
            $fotoNext = Foto::where('trabajo_id', $this->moTrabajo->id)->where('orden', ($foto->orden+1))->first();
            $foto->increment('orden');
            $fotoNext->decrement('orden');
            $this->moTrabajo->refresh();
        }
    }

    public function fotoDelete($foto_id){
        $foto = Foto::find($foto_id);
        Storage::delete($foto->path);
        $foto->delete();
        $this->moTrabajo->refresh();
    }

    // FIN FOTOS

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