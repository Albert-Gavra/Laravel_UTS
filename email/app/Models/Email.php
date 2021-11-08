<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $primaryKey = "id_email";
    protected $keyType = 'integer';

    protected $fillable = ['id_email', 'name_email'];

    protected $table = 'emails';

    public function websites()
    {
        return $this->hasMany(Website::class, 'email', 'name_email');
    }
}
