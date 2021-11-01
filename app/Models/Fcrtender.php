<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Fcrtender extends Model
{
  use HasApiTokens, HasFactory, Notifiable;
  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
      'DATE_FROM',
      'DATE_TO',
      'TYPE_OF_RESERVES',
      'PRODUCT',
      'TOTAL_DEMAND',
      'GERMANY_BLOCK_DEMAND',
      'GERMANY_BLOCK_EXPORT_LIMIT',
      'GERMANY_BLOCK_CORE_PORTION',
  ];
  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array
   */
  protected $hidden = [

  ];

  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [

  ];
}
