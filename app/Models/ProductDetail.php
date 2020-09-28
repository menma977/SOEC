<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDetail
 * @package App\Models
 * @property string color
 * @property string size
 * @property string material
 */
class ProductDetail extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'color',
    'size',
    'material'
  ];
}
