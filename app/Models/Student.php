<?php

    namespace App\Models;

     use Illuminate\Database\Eloquent\Factories\HasFactory;
     use Illuminate\Database\Eloquent\Model;
     use Carbon\Carbon;
     
     class Student extends Model

     {
        use HasFactory;

        protected $table ='Students';
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
     

    protected $appends = ['fullname', 'birthday'];

    public function getfullnameAttribute()
     {
        return $this ->fname.' '.$this->lname;

     }

     public function getBirthdayAttribute()
     {
        $birthdate = $this-> attribute['birthdate'];
        if(birthdate){
            return Carbon::parse($birthdate)->format('F d, Y');
        }
        return '';
     }


    }