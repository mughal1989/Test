<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \App\ActivityLog as ActivityLog;
use \App\User as User;
use \App\OepProfile as OepProfile;

use Carbon\Carbon;
use \Entrust as Entrust;

class ActivityController extends Controller
{
    protected $activity_log;
	
	public function __construct()
	{	
	   $this->middleware('auth');
	}
	
	public function oep_licence_activity_logs1()
	{
		echo "changed";
	}
}
