<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'orders';
    protected $fillable = [
        'client_id',
        'reference',
        'discount',
        'sub_amount',
        'tax_amount',
        'discount',
        'amount',
        'status',
        'fecha'
    ];
    const STATUS = [
        'pagada'     => 'Pagada',
        'pendiente'       => 'Pendiente'
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
     * relacion de muchos a uno con clientes
     * Ya que muchos encargos/orders pueden pertenecer a un mismo cliente
     *
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }





    use HasFactory;
}
