<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Fcrresult extends Model
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
      'PRODUCT_TYPE',
      'TENDER_NUMBER',
      'PRODUCTNAME',
      'CROSSBORDER_SETTLEMENTCAPACITY_PRICE',
      'DE_DEMAND',
      'DE_SETTLEMENTCAPACITY_PRICE',
      'DE_IMPORT_EXPORT',
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
