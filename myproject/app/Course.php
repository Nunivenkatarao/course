<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Exception;
use App\CommonModel;
use App\User;


class Course extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'course';
    protected  $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'course_id', 'name', 'coursetype',
    ];

    public function checkExist($courseid){

       $data = Course::where('course_id', '=', $courseid)->get()->toArray();

       return $data;

    }
    
    public function updateData($primaryId,$name,$courseid,$coursetype)
    {
        $save= array(
            'name'=>$name,
            'course_id'=>$courseid,
            'coursetype'=> $coursetype
        );
        $data = Course::find($primaryId)->update($save); 
          
        return $data;            
    }
}
