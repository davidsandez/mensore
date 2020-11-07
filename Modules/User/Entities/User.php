<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Invoice\Entities\Invoice as Invoice;

class User extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'password'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function invoices(){
        return $this->hasMany(Invoice::class);
     }
}
