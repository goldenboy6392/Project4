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
    */
    public function index()
    {
        # Use the QueryBuilder to get all the medications
        $medications = DB::table('medications')->get();

        # Output the results
        return view('medications.index', ['medications' => $medications]);	
    }
    public function show()
    {
    	$medications = Medication::all();

		# Make sure we have results before trying to print them...
		if(!$medications->isEmpty()) {

		    # Output the books
		    foreach($medications as $medication) {
		        echo $medication['brand_name'].'<br>';
		    }
		}
else {
    echo 'No books found';
}
    }



} # end of class