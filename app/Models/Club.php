<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $dispatchesEvents = [
        'saving' => \App\Events\ClubSaving::class,
    ];

    public function type()
    {
        return $this->belongsTo(ClubType::class, 'club_type_id', 'id');
    }

    public function metros()
    {
        return $this->belongsToMany(Metro::class, 'club_metro', 'club_id', 'metro_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'club_service', 'club_id', 'service_id');
    }
}
