<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
 
class Product extends Model
{
    use HasFactory;
    protected $table = 'Product';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'name', 'weight', 'category', 'description', 'number', 'photo'];
}