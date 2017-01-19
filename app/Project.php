<?php

namespace App;

use App\Client;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'client_id', 'started_at', 'hours', 'complete'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
