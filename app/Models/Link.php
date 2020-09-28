<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Link
 * @package App\Models
 * @property integer product_id
 * @property string tokopedia
 * @property double tokopedia_discount
 * @property string shopee
 * @property double shopee_discount
 * @property string bukalapak
 * @property double bukalapak_discount
 * @property string lazada
 * @property double lazada_discount
 * @property string blibli
 * @property double blibli_discount
 */
class Link extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'product_id',
    'tokopedia',
    'tokopedia_discount',
    'shopee',
    'shopee_discount',
    'bukalapak',
    'bukalapak_discount',
    'lazada',
    'lazada_discount',
    'blibli',
    'blibli_discount',
  ];
}
