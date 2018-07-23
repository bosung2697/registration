<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ_InCommon extends Model
{
    protected $table = 'in_common';
    protected $fillable = ['question', 'answer', 'video_url','classification'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
