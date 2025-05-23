<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $table = 'tbluserjob';
    protected $primaryKey = 'jobid';
    
    protected $fillable = [
        'jobid', 'jobname',
    ];
    
    public $timestamps = false;
}
