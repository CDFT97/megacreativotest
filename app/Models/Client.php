<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'last_name',
        'address',
        'dni',
        'dni_type',
        'status',
        'email',
        'password'
    ];

    /**
     * Modificar formato de created_at
     *
     * @param $date
     *
     * @return string
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }

    /**
     * Modificar formato de updated_at
     *
     * @param $date
     *
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
    }

    /**
     * Relacion One To Many / Uno a muchos
     * Un cliente puede tener muchos encargos
     */
    public function orders() {
        return $this->hasMany('App\Models\Order', 'user_id');
    }




    use HasFactory;
}
