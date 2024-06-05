<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $grade_id
 * @property string $org_id
 * @property int    $last_used_at
 * @property int    $expires_at
 * @property int    $created_at
 * @property int    $updated_at
 */
class ClassRooms extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'class_rooms';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'grade_id', 'org_id', 'last_used_at', 'expires_at', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string', 'grade_id' => 'string', 'org_id' => 'string', 'last_used_at' => 'timestamp', 'expires_at' => 'timestamp', 'created_at' => 'timestamp', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'last_used_at', 'expires_at', 'created_at', 'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
