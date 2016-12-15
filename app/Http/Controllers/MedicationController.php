<?php

namespace Project4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Project4;
use Carbon;
use Project4\Medication;

class MedicationController extends Controller
{

    /**
    * Responds to requests to GET /medications
    * @param  int  $medication
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    	$medications = Medication::all();

		# Make sure we have results before trying to print them...
		if(!$medications->isEmpty()) {

		    # Output the medications
		    foreach($medications as $medication) {
		        return view('medication.show')->with('medications', $medications);
		    }
		}
		else {
		    echo 'No books found';
		}
    }
    public function show()
    {
    	$search=$_POST['search'];
    	$type =$_POST['Medication_Type'];
    	if($type=='otc'||$type=='prescription'){
    		if($search==""){
    			$medications = Medication::where('type','LIKE',$type)->get();
    		}
    		else{
    		$medications = Medication::where('type','LIKE',$type)->where('brand_name','LIKE',$search)->get();
    	}
    	}
    	else{
    		$medications = Medication::all();
    	}
		# Make sure we have results before trying to print them...
		if(!$medications->isEmpty()) {
		    # Output the medications
		    foreach($medications as $medication) {
		        return view('medication.show')->with('medications', $medications);
		    }
		}
		else {
		    echo 'No Medications Found';
		}
    }



} # end of class