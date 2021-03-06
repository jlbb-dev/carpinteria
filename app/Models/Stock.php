<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Stock
 * @package App\Models
 * @version June 24, 2020, 8:57 pm UTC
 *
 * @property integer cantidad
 * @property integer item_id
 * @property integer deposito_id
 */
class Stock extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    public $table = 'stocks';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cantidad',
        'item_id',
        'deposito_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cantidad' => 'integer',
        'item_id' => 'integer',
        'deposito_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cantidad' => 'required',
        'item_id' => 'required',
        'deposito_id' => 'required'

    ];

     public function deposito (){
     return $this-> belongsTo('App\Models\Deposito');

}

    public function item (){
        return $this-> belongsTo('App\Models\Item');

    }



}
