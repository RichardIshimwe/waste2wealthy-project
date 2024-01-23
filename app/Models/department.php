<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class station extends Model
{
    use isCompany;

    protected $fillable = [
        'name',
        'description',
        'photo_path',
        'user_id',
        'company_id',
    ];
}


}
