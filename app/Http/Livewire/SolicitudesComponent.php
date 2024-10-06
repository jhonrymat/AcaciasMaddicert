<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Solicitud;

class SolicitudesComponent extends Component
{


    public $id_solicitante;
    public $numeroIdentificacion;
    public $id_barrio;
    public $direccion;
    public $ubicacion;
    public $evidenciaPDF;
    public $genero_id;

    public $showForm = false; // Control para mostrar/ocultar el formulario

    // variabble para mostrar los datos de user en modal
    public $name;
    public $email;

    protected $listeners = ['view'];

    public function mount()
    {
        if (!auth()->user()->can('versolicitudes')) {
            abort(403, 'No tienes acceso a esta página.');
        }
    }

    // mostrar datos del user en modal
    public function view($id){

        $user = User::find($id);
        // concatenando los nombres
        $this->nombreCompleto = $user->name . ' ' . $user->nombre_2 . ' ' . $user->apellido_1 . ' ' . $user->apellido_2;
        $this->email = $user->email;
        $this->telefonoContacto = $user->telefonoContacto;
        $this->id_tipoSolicitante = $user->id_tipoSolicitante;
        $this->id_tipoDocumento = $user->id_tipoDocumento;
        $this->numeroIdentificacion = $user->numeroIdentificacion;
        $this->ciudadExpedicion = $user->ciudadExpedicion;
        $this->fechaNacimiento = $user->fechaNacimiento;
        $this->id_nivelEstudio = $user->id_nivelEstudio;
        $this->id_genero = $user->id_genero;
        $this->id_ocupacion = $user->id_ocupacion;
        $this->id_poblacion = $user->id_poblacion;
        $this->showForm = true;

    }






    public function render()
    {

        return view('livewire.solicitudes-component');
    }
}
