<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TableCosto;
use App\Models\Pelicula;

class TableCostos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $gen_nombre, $dir_nombre, $for_nombre, $pel_nombre, $pel_costo, $pel_fecha_estreno;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.peliculas.view', [
            'peliculas' => Pelicula::latest()
						->orWhere('gen_nombre', 'LIKE', $keyWord)
						->orWhere('dir_nombre', 'LIKE', $keyWord)
						->orWhere('for_nombre', 'LIKE', $keyWord)
						->orWhere('pel_nombre', 'LIKE', $keyWord)
						->orWhere('pel_costo', 'LIKE', $keyWord)
						->orWhere('pel_fecha_estreno', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->gen_nombre = null;
		$this->dir_nombre = null;
		$this->for_nombre = null;
		$this->pel_nombre = null;
		$this->pel_costo = null;
		$this->pel_fecha_estreno = null;
    }
}
