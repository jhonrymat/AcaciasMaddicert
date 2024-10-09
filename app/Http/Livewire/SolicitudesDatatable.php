<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Solicitud;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class SolicitudesDatatable extends DataTableComponent
{
    protected $model = Solicitud::class;
    protected $listeners = ['Updated' => '$refresh']; // Refrescar la tabla cuando se actualiza un tenant

    public ?int $searchFilterDebounce = 600;
    public array $perPageAccepted = [10, 20, 50, 100];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
        $this->setSingleSortingStatus(false);
    }
    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        $userId = auth()->id(); // Obtén el ID del usuario autenticado
        return Solicitud::query()->where('user_id', $userId); // Filtra las solicitudes solo para el usuario autenticado
    }
    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Usuario", "user_id")
                ->format(fn($value, $row) => $row->user ? $row->user->name : 'Usuario no asignado')
                ->sortable()
                ->searchable(),
            Column::make("# Identificación", "numeroIdentificacion")
                ->sortable()
                ->searchable(),
            Column::make("Barrio", "barrio.nombreBarrio")
                ->sortable()
                ->searchable(),
            Column::make("Direccion", "direccion")
                ->sortable()
                ->searchable(),
            Column::make("Ubicación", "ubicacion")
                ->sortable()
                ->searchable(),
            Column::make("Creado", "created_at")
                ->sortable()
                ->searchable(),
            Column::make("Anexos", "evidenciaPDF")
                ->sortable()
                ->searchable(),
            Column::make("Acciones")
                ->label(
                    fn($row) => view('livewire.view', ['row' => $row])
                )
        ];
    }
}
