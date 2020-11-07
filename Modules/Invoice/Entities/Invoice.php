<?php

namespace Modules\Invoice\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User as User;

class Invoice extends Model
{
    protected $fillable = ['invoice_number', 'date', 'total_price', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
