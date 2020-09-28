<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ListProduct
 * @package App\Models
 * @property integer product_id
 * @property integer category_id
 * @property integer type_id
 * @property boolean sold
 */
class ListProduct extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'product_id',
    'category_id',
    'type_id',
    'sold'
  ];
}
