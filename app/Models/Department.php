<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    //protected $guarded =[];

    protected $fillable = ['name'];
    
    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

}
