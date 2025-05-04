<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\CommonMark\Parser\Block\ThematicBreakStartParser;

class Post extends Model
{

    use HasFactory;
    protected $fillable = ['Title', 'description', 'posted_by', 'user_id'];
    
    public function user ()
    {
        return $this->belongsTo(User::class);
    }
  
}
