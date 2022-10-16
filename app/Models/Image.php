<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  use HasFactory;

  public function news()
  {
    return $this->belongsTo(News::class, 'news_id');
  }

  public function contribution()
  {
    return $this->belongsTo(Contribution::class, 'contribution_id');
  }
}
