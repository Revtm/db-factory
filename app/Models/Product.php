<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
	
	protected $table = 'product';
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $fillable = [
        'id',
        'name',
        'description',
		'vendor_id',
		'stock_total',
		'vendor_price',
		'selling_price'
    ];
	
	
}
