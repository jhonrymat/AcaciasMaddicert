<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ocupacion;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class OcupacionDatatable extends DataTableComponent
{
    protected $model = Ocupacion::class;
    protected $listeners = ['Updated' => '$refresh']; // Refrescar la tabla cuando se actualiza un tenant

    public ?int $searchFilterDebounce = 600;
    public array $perPageAccepted = [10, 20, 50, 100];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
        $this->setSingleSortingStatus(false);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Ocupacion", "nombreOcupacion")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Acciones")
                ->label(
                    fn($row) => view('livewire.acciones', ['row' => $row])
                )->collapseOnMobile(),
        ];
    }
}
