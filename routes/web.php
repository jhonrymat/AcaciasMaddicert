<?php

use App\Http\Livewire\RolesComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BarrioComponent;
use App\Http\Livewire\GeneroComponent;
use App\Http\Livewire\NestudioComponent;
use App\Http\Livewire\PermisosComponent;
use App\Http\Livewire\SolicitudComponent;
use App\Http\Livewire\FormularioComponent;
use App\Http\Livewire\TdocumentoComponent;
use App\Http\Livewire\SolicitudesComponent;
use App\Http\Livewire\TipoSolicitanteComponent;
use App\Http\Livewire\OcupacionComponent;
use App\Http\Livewire\PoblacionComponent;
use \App\Http\Livewire\UserRoleComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['can:documento'])->get('documento', TdocumentoComponent::class)->name('documento');
Route::middleware(['can:genero'])->get('genero', GeneroComponent::class)->name('genero');
Route::middleware(['can:nestudio'])->get('nestudio', NestudioComponent::class)->name('nestudio');
Route::middleware(['can:tsolicitante'])->get('tsolicitante', TipoSolicitanteComponent::class)->name('tsolicitante');
Route::middleware(['can:barrio'])->get('barrio', BarrioComponent::class)->name('barrio');
Route::middleware(['can:solicitudes'])->get('solicitudes', SolicitudComponent::class)->name('solicitudes');
Route::middleware(['can:roles'])->get('roles', RolesComponent::class)->name('roles');
Route::middleware(['can:permisos'])->get('permisos', PermisosComponent::class)->name('permisos');
Route::middleware(['can:formulario'])->get('formulario', FormularioComponent::class)->name('formulario');
Route::middleware(['can:ocupacion'])->get('ocupacion', OcupacionComponent::class)->name('ocupacion');
Route::middleware(['can:poblacion'])->get('poblacion', PoblacionComponent::class)->name('poblacion');
Route::middleware(['can:versolicitudes'])->get('versolicitudes', SolicitudesComponent::class)->name('versolicitudes');
Route::middleware(['can:user-roles'])->get('/user-roles', UserRoleComponent::class)->name('user-roles');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
