<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Writer extends Model
{
    use HasFactory;

protected $fillable =[
    "nama",
    "contact",
    "tempat",
    "photo"
];
 
// protected $with=['books'];

   protected $table="writer";

   public function books(): HasMany
   {
    return $this->hasMany(Book::class);
   }


}
