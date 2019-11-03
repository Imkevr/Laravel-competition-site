<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : '/profile/E7X4P1Pf8gZFYEB4VrwW4tVAkzeZIXpe7V6RCJGe.png';
        return '/storage/'. $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
