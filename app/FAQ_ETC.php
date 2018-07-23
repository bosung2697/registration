<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ_ETC extends Model
{
    protected $table = 'faq_etc';
    protected $fillable = ['question', 'answer', 'video_url','classification'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
