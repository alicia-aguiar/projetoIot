<?php

namespace App\Livewire\Sensors;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{

    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function store(){
        Sensor::create([
            'ambiente_id' => $this->ambiente_id,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);

        session()->flash('success', 'Sensor cadastrado!');
        return redirect()->route('sensors.index');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensors.sensor-create', compact ('ambientes'));
    }
}
