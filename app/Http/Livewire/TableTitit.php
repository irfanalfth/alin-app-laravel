<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableTitit extends Component
{
    public function render()
    {
        $data['data'] = [
            [
                'no' => 1,
            'nama' => 'panjang'
            ]
        ];


        return view('livewire.table-titit', $data);
    }
}
