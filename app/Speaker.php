<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * The Speaker class represents who present a talk.
 * @author Rubens Mariuzzo <rubens@mariuzzo.com>
 * @property integer                                                            $id
 * @property string                                                             $first_name
 * @property string                                                             $last_name
 * @property string                                                             $email
 * @property integer                                                            $congregation_id
 * @property \Carbon\Carbon                                                     $created_at
 * @property \Carbon\Carbon                                                     $updated_at
 * @property integer                                                            $created_by
 * @property integer                                                            $updated_by
 * @property string                                                             $fullName
 * @property-read \App\Congregation                                             $congregation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ScheduledTalk[] $scheduledTalks
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PreparedTalk[]  $preparedTalks
 * @property-read \App\User                                                     $createdBy
 * @property-read \App\User                                                     $updatedBy
 * @property integer                                                            $circuit_id
 * @property-read mixed                                                         $full_name
 * @property-read \App\Circuit                                                  $circuit
 */
class Speaker extends Model
{
    use InCongregation, InCircuit;

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    // Relationships.

    /**
     * The circuit where the speaker belongs to.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function circuit()
    {
        return $this->belongsTo('App\Circuit');
    }

    public function congregation()
    {
        return $this->belongsTo('App\Congregation');
    }

    public function scheduledTalks()
    {
        return $this->hasMany('App\ScheduledTalk');
    }

    public function preparedTalks()
    {
        return $this->hasMany('App\PreparedTalk');
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
