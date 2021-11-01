<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Alltender extends Model
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
        'PRODUCT',
        'OFFERED_CAPACITY_PRICE',
        'ALLOCATED_CAPACITY',
        'COUNTRY',
        'SETTLEMENTCAPACITY_PRICE',
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
