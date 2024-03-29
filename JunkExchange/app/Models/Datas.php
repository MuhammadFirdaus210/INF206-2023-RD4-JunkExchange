<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Datas extends Model
{
    use HasFactory;
    protected $table = 'Datas';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'name', 'category', 'weight','photo', 'number'];

}