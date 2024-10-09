<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Solicitud;

class SolicitudesComponent extends Component
{
    public $nombreCompleto;
    public $email;
    public $telefonoContacto;
    public $id_tipoSolicitante;
    public $id_tipoDocumento;
    public $numeroIdentificacion;
    public $ciudadExpedicion;
    public $fechaNacimiento;
    public $id_nivelEstudio;
    public $id_genero;
    public $id_ocupacion;
    public $id_poblacion;

    public $showForm = false; // Control para mostrar/ocultar el modal
    // variabble para mostrar los datos de user en modal
    public $name;
    

    protected $listeners = ['view'];

    public function mount()
    {
        if (!auth()->user()->can('versolicitudes')) {
            abort(403, 'No tienes acceso a esta página.');
        }
        
    }

    // Método para mostrar los datos del usuario en el modal
    public function view($id)
    {
        $userId = auth()->id();
        $user = User::find($userId);

        // Concatenando los nombres
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
        $solicitudes = Solicitud::with('user')->get();

        return view('livewire.solicitudes-component', [
            'solicitudes' => $solicitudes
        ]);
    }
}
