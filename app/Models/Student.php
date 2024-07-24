<?php

    namespace App\Models;

     use Illuminate\Database\Eloquent\Factories\HasFactory;
     use Illuminate\Database\Eloquent\Factories\Model;


     class Student extends Model
     {
        use HasFactory;

        protected $table ='student';
        protected $fillable = [
            'fname',
            'lname',
            'email',
            'phone',
            'address',
            'city',
            'province',
            'zip',
            'birthdate'

        ];
     

    protected $appends = ['fullname'];
    public function getfullnameAttribute()
     {
        return $this ->fname.' '.$this->lname;
     }


    }