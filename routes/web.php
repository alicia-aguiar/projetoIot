<?php

use App\Livewire\Ambientes\AmbienteCreate;
use App\Livewire\Ambientes\AmbienteEdit;
use App\Livewire\Ambientes\AmbienteIndex;
use App\Livewire\Dashboard;
use App\Livewire\Sensors\SensorCreate;
use App\Livewire\Sensors\SensorEdit;
use App\Livewire\Sensors\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard'); 

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente/index', AmbienteIndex::class)->name('ambiente.index');
Route::get('ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');

Route::get('sensors/create', SensorCreate::class)->name('sensors.create');
Route::get('sensors/index', SensorIndex::class)->name('sensors.index');
Route::get('sensors/edit/{id}', SensorEdit::class)->name('sensors.edit');