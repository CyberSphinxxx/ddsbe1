<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser_ddsbe1';
        // column sa table
        protected $fillable = ['username', 'password','gender','jobid'];

        //commented because i like that it has a timestamp ~cybersphinxxx
        //public $timestamps = false;
        //protected $primaryKey = 'id';

        // Define relationship with UserJob
        public function userJob()
        {
            return $this->belongsTo(UserJob::class, 'jobid', 'jobid');
        }

        protected $hidden = ['password',];
 }