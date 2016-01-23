<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //
    protected $fillable = ['code','name', 'description', 'videoUrl', 'order', 'topicSummary1' , 'descSummary1' , 'iconSummary1', 'topicSummary2' , 'descSummary2' , 'iconSummary2', 'topicSummary3' , 'descSummary3' , 'iconSummary3'];
}
