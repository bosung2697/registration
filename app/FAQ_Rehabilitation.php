<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ_Rehabilitation extends Model
{
    protected $table = 'faq_rehabilitation';
    protected $fillable = ['question', 'answer', 'video_url','classification'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
