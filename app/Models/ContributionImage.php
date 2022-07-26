<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionImage extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function contribution()
  {
    return $this->belongsTo(Contribution::class, 'contribution_id');
  }
}
