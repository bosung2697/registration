<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ_Bankruptcy extends Model
{
    protected $table = 'faq_bankruptcy';
    protected $fillable = ['question', 'answer', 'video_url','classification'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
