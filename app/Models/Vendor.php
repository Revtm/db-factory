<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
	
	protected $table = 'vendor';
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $fillable = [
        'id',
        'name',
        'description',
		'address',
		'phone_number'
    ];
	
	public function product()
    {
        return $this->hasMany(Product::class);
    }
}
