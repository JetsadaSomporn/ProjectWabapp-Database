<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'posers';
    protected $primaryKey = 'idUser'; 

    protected $fillable = [
        'idUser',
        'userOfficeName',
        'userOfficeAddress',
    ];

    public function Users() {
        return $this->belongsTo(User::class,'idUser');
    }

    public function Jobinfos(){
        return $this->hasMany(JobInfo::class);
    }
  
public function tags()
{
    return $this->belongsToMany(Tag::class, 'idUser', 'idTag');
}


}
