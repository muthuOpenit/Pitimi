<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * The PreparedTalk class represents a talk prepared by a speaker.
 *
 * @author Rubens Mariuzzo <rubens@mariuzzo.com>
 */
class PreparedTalk extends Model
{
    // Relationships.

    public function talk()
    {
        return $this->belongsTo('App\Talk');
    }

    public function speaker()
    {
        return $this->belongsTo('App\Speaker');
    }

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\User', 'updated_by');
    }
}