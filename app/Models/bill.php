<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    // use HasFactory;
   use HasApiTokens, HasFactory, Notifiable;
   
   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'customer_id',
        'date_order',
        'total_price',
        'payment',
        
        
        
    ];
}
