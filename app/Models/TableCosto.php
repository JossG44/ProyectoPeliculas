<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableCosto extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'pelicula';

	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actorPeliculas()
    {
        return $this->hasMany('App\Models\ActorPelicula', 'pel_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alquilers()
    {
        return $this->hasMany('App\Models\Alquiler', 'pel_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function director()
    {
        return $this->hasOne('App\Models\Director', 'id', 'dir_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formato()
    {
        return $this->hasOne('App\Models\Formato', 'id', 'for_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'gen_id');
    }
    
}
