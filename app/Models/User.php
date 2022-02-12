<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'department_id',
        'email_verified_at',
        'password',
    
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    
    ];
    
    protected $dates = [
        'email_verified_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/users/'.$this->getKey());
    }

    public function blog()
    {
        return $this->hasMany(Blog::class,'id','user_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'id','department_id');
    }
    
    public function subject()
    {
        return $this->hasMany(Subject::class,'id','user_id');
    }
}
