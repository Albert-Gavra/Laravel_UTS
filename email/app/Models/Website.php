<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $primaryKey = "id_website";
    protected $keyType = 'integer';

    protected $fillable = ['id_website', 'email', 'name_website', 'pass_website'];

    protected $table = 'websites';

    public function emails()
    {
        return $this->belongsTo(Email::class, 'email', 'name_email');
    }
}
