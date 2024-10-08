<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Barrio;
use App\Models\Genero;
use Livewire\Component;
use App\Models\Nestudio;
use App\Models\Solicitud;
use App\Models\Tdocumento;
use App\Models\Tsolicitante;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class FormularioComponent extends Component
{
    use WithFileUploads;

    public $openModal = false; // Inicializar $openModal como false
    public $tipoViaPrimaria = '';
    public $numeroViaPrincipal = '';
    public $letraViaPrincipal = '';
    public $bis = '';
    public $letraBis = '';
    public $cuadranteViaPrincipal = '';
    public $numeroViaGeneradora = '';
    public $letraViaGeneradora = '';
    public $numeroPlaca = '';
    public $cuadranteViaGeneradora = '';
    public $direccionGenerada = '';
    public $complemento = '';
    public $otro = '';


    public $numeroIdentificacion = '';
    public $id_barrio = '';
    public $direccion = '';
    public $ubicacion = '';
    public $anexos = '';
    public $terminos = '';
    public $observaciones = '';

    //para el campo ubicacion 

    public $paises = [];
    public $ciudades = [];
    public $departamentos = [];
    public $seleccion_pais = null;
    public $seleccion_ciudad = null; 
    public $seleccion_departamento = null;



    protected $rules = [
        'numeroIdentificacion' => 'required|string|min:3',
        'id_barrio' => 'required',
        'direccion' => 'required|string|min:3',
        'ubicacion' => 'required|string',
        'anexos.*' => 'required|file|mimes:pdf,jpeg,png,jpg,doc,docx|max:10240',
        'terminos' => 'required',
        'observaciones' => 'required|string',
    ];
    protected $messages = [
        'numeroIdentificacion.required' => 'El campo número de identificación es obligatorio.',
        'numeroIdentificacion.min' => 'El campo número de identificación debe tener al menos 3 caracteres.',
        'id_barrio.required' => 'El campo barrio es obligatorio.',
        'direccion.required' => 'El campo dirección es obligatorio.',
        'direccion.min' => 'El campo dirección debe tener al menos 3 caracteres.',
        'ubicacion.required' => 'El campo ubicación es obligatorio.',
        'anexos.required' => 'El campo anexos es obligatorio.',
        'anexos.file' => 'El campo anexos debe ser un archivo.',
        'anexos.mimes' => 'El campo anexos debe ser un archivo de tipo: pdf, jpeg, png, jpg, doc, docx.',
        'anexos.max' => 'El campo anexos no debe ser mayor a 10MB.',
        'terminos.required' => 'El campo términos es obligatorio.',
        'observaciones.required' => 'El campo observaciones es obligatorio.',
        'observaciones.string' => 'El campo observaciones debe ser una cadena de texto.',
    ];

    public function mount(){
        // Llama a la API de GeoNames para obtener la lista de países
        $response = Http::get('http://api.geonames.org/countryInfoJSON?username=andres293');

        // Accede al array correcto para obtener los países
        $this->paises = collect($response->json()['geonames']) // Asegurarse de acceder a la clave 'geonames'
        ->sortBy('countryName') // Ordena los países alfabéticamente por su nombre
        ->values() // Reindexa el array después de ordenar
        ->toArray(); // Convierte de nuevo a un array
    }
    
    public function updatedSeleccionPais($countryCode)
{
    // Llama a la API para obtener los departamentos del país seleccionado
    $response = Http::get("http://api.geonames.org/childrenJSON?geonameId=$countryCode&username=andres293");
    $this->departamentos = collect($response->json()['geonames'])
        ->sortBy('name')
        ->values()
        ->toArray();

    $this->seleccion_departamento = null; // Reiniciar la selección de departamento
    $this->ciudades = []; // Limpiar la lista de ciudades
}

public function updatedSeleccionDepartamento($departamentoId)
{
    // Llama a la API para obtener las ciudades del departamento seleccionado
    $response = Http::get("http://api.geonames.org/childrenJSON?geonameId=$departamentoId&username=andres293");
    $this->ciudades = collect($response->json()['geonames'])
        ->sortBy('name')
        ->values()
        ->toArray();

    $this->seleccion_ciudad = null; // Reiniciar la selección de ciudad
}


    public function save()
    {
        // Validate form data
        $validatedData = $this->validate();

        // Si hay archivos adjuntos
        if ($this->anexos) {
            // Crear un array para almacenar las rutas de los archivos
            $anexosPaths = [];

            // Recorrer cada archivo y guardarlo
            foreach ($this->anexos as $anexo) {
                // Guardar el archivo en la carpeta 'anexos' y obtener su ruta
                $path = $anexo->store('anexos', 'public');
                // Almacenar la ruta del archivo
                $anexosPaths[] = $path;
            }
        }
        // Create a new solicitud
        Solicitud::create([
            'user_id' => auth()->id(),
            'numeroIdentificacion' => $this->numeroIdentificacion,
            'id_barrio' => $this->id_barrio, // Assuming barrio is 1 for now, replace with actual value
            'direccion' => $this->direccion,
            'ubicacion' => $this->ubicacion, // Replace with actual data if applicable
            'evidenciaPDF' => json_encode($anexosPaths),  // Guardar las rutas de los archivos en la base de datos
            'observaciones' => $this->observaciones,
            'terminos' => $this->terminos,
        ]);

        // Show success message
        session()->flash('message', 'Solicitud creada exitosamente.');

        // Optionally, reset the form
        $this->reset();
    }



    public function render()
    {
        // Obtener el usuario autenticado
        $user = User::find(auth()->id());
        $barrios = Barrio::all();

        // Asignar el valor de numeroIdentificacion a la propiedad pública del componente
        if (!$this->numeroIdentificacion) {
            $this->numeroIdentificacion = $user->numeroIdentificacion;
        }

        return view('livewire.formulario-component', [
            'user' => $user,
            'barrios' => $barrios,
        ]);

    }
}
