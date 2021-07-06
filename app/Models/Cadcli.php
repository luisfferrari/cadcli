<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Cadcli extends Model{
  use HasFactory;
 
  protected $fillable = [
    'nome', 'endereco', 'bairro','cidade','estado'
  ];
}
 
?>