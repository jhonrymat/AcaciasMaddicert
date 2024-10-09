<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Poblacion;

class PoblacionComponent extends Component
{
    
    public function mount()
    {
        if (!auth()->user()->can('solicitudes')) {
            abort(403, 'No tienes acceso a esta página.');
        }
    }  

    public $poblacion_id;  // Cambiar $id a $ocupacion_id para evitar conflictos
    public $nombrePoblacion;
    public $showForm = false; // Control para mostrar/ocultar el formulario

    // Validación básica
    protected $rules = [
        'nombrePoblacion' => 'required|string|max:255',
    ];
    
    protected $listeners = ['edit', 'delete'];

    public function save()
    {
        // Validamos los datos
        $this->validate();

        if ($this->id_poblacion) {
            // Si estamos editando ocupacion existente
            $poblacion = Poblacion::find($this->id_poblacion);
            if ($poblacion) {
                $poblacion->update([
                    'nombrepoblacion' => $this->nombrePoblacion
                ]);
            }
        } else {
            // Si no hay poblacion_id, creamos uno nevo
            poblacion::create(['nombrePoblacion' => $this->nombrePoblacion]);
        }

        // Resetear el formulario y ocultarlo después de guardar
        $this->resetFields();
        $this->showForm = false;

        // Emitir el evento para refrescar la tabla
        $this->emit('Updated');
    }

    public function edit($poblacionId)
    {
        $poblacion = Poblacion::find($poblacionId);

        if ($poblacion) {
            $this->poblacion_id = $poblacion->id;    // Mostrar el ID actual en el formulario
            $this->nombrePoblacion = $poblacion->nombrePoblacion;  // Cargar el campo nivelEstudio
            $this->showForm = true;              // Mostrar el formulario al editar
        }
    }

    public function create()
    {
        $this->resetFields();
        $this->showForm = true; // Mostrar el formulario al crear
    }

    public function delete($estudioId)
    {
        $poblacion = Poblacion::find($estudioId);
        if ($poblacion) {
            $poblacion->delete();
            $this->emit('Updated'); // Refrescar la tabla después de eliminar
        }
    }

    public function resetFields()
    {
        $this->poblacion_id = null;
        $this->nombrePoblacion = null;  // Limpiar los campos del formulario
    }



    public function render()
    {
        return view('livewire.ocupacion-component');
    }
}

