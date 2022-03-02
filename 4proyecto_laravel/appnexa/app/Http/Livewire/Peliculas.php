<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

use Livewire\Component;
use App\Models\Pelicula;

class Peliculas extends Component
{

    public $peliculas, $titulo, $imagen, $anio, $clasificacion, $genero, $estado, $user;
    public $modal = 0;

    public function render()
    {
        $this->peliculas = Pelicula::where('user_id',Auth::user()->id)->where('estado',1)->get();
        return view('livewire.peliculas');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiarCampos()
    {
        $this->titulo = '';
        $this->imagen = '';
        $this->anio = '';
        $this->clasificacion = '';
        $this->genero = '';
        $this->id_pelicula = '';

    }

    public function editar($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $this->id_pelicula = $id;
        $this->titulo = $pelicula->titulo;
        $this->anio = $pelicula->anio;
        $this->genero = $pelicula->genero;
        $this->clasificacion = $pelicula->clasificacion;
        $this->imagen = $pelicula->imagen;
        $this->abrirModal();

    }

    public function borrar($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->estado = 0;
        $pelicula->save();

        session()->flash('message','Registro eliminado correctamente');

    }

    public function guardar()
    {
        Pelicula::updateOrCreate(['id' => $this->id_pelicula],
        [
            'titulo' => $this->titulo,
            'anio' => $this->anio,
            'clasificacion' => $this->clasificacion,
            'genero' => $this->genero,
            'imagen' => $this->imagen,
            'estado' => 1,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('message',
        $this->id_pelicula ? 'Actualizacion exitosa' : 'Creación Exitosa');

        $this->cerrarModal();
        $this->limpiarCampos();
    }


    public function buscar()
    {
        $titulo = $this->titulo;

        $url = "http://www.omdbapi.com/?t=".$titulo."&apiKey=4f8b3d5f";


        $response = \Httpful\Request::post($url)
        ->sendsJson()
        ->send();

        $this->titulo = $response->body->Title;
        $this->anio = $response->body->Year;
        $this->genero = $response->body->Genre;
        $this->clasificacion = $response->body->Rated;
        $this->imagen = $response->body->Poster;
        $this->abrirModal();
    }


}

