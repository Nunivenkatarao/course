<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Course;

class Task extends Controller
{

    public function show($id)
    {
        $second_array = array();
		$results = [];
		//echo $k;exit;
		$totalRec = 0;
                $totalCount = $id;
		//$second_array[$k++] = $results;
		if(count($results) == 0){
			$results = $this->callCurl($totalRec, $totalCount);
                        $second_array = $results->elements;
                        $totalRecords = $results->paging->total;
		}
                
            $prevVal = $totalCount-100;
            $nextVal = $totalCount+100;
            if($totalRecords < $nextVal){
                $nextVal = '';
            }
            
            if($prevVal<100){
                $prevVal = '';
            }
            
            $data=array('secondaryArr'=>$second_array,'prev'=>$prevVal,'next'=>$nextVal);
            return view('tasks.show')->with('finalRes',$data); 
    }
    
    
    
    function callCurl($totalRec, $totalCount){
		
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://api.coursera.org/api/courses.v1?limit=100&start=$totalRec");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $result = curl_exec($curl);
        curl_close($curl);



        return json_decode($result);
    }
    
    function get_course(Request $request) {
        $courseList = DB::table('course')->select('name', 'course_id', 'coursetype')->paginate(10);
        return view('tasks.course_list')->with('finalRes',$courseList);
    }
    
    public function save(Request $request)
    {//print_r( $request->all()); exit;
           $course = new Course();
           $course->name = $request->name;
           $course->coursetype = $request->coursetype;
           $course->course_id = $request->id;
           $check = $course->checkExist($request->id);
           if(!empty($check)){
                $primaryId = $check[0]['id'];   
                $course->updateData($primaryId,$request->name,$request->id,$request->coursetype);
           }else{
                $course->save();
           }
           return json_encode(array('status'=>true));
    }
}
?>

