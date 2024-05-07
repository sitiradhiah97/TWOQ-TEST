<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company_details';
    protected $primaryKey = 'id';
    protected $fillable =['company_name', 'email','company_logo','website_url','created_at','update_at'];
}
