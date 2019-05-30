<?php

namespace App\Http\Controllers\CpUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Quotauser;
use App\Quota;
use App\ChangeRequest;

class PersonalInfoController extends Controller
{
    /**
     * Display the personal info and quota.
     * @param  int  $id
     */
    public function personalInfo($id)
    {
    	$user = User::find($id);
    	$quotas = Quota::get();
    	$quota_users = Quotauser::where('user_id',$id)->get();
    	$viewParams = [
    		'personalInfo'=>$user,
    		'quota_user'=>$quota_users,
    		'quota'=>$quotas
    	];
    	return json_encode($viewParams);
        //return view('', $viewParams);
    }
    
    public function newQuotaRequest(Request $request)
    {
    	$changeRequest = new ChangeRequest();
    	$changeRequest->from_id = 1;
    	$changeRequest->to_id = 2;
    	$changeRequest->type = 'newQuota';
    	$changeRequest->key = 'mug';
    	$changeRequest->value = '';
    	$changeRequest->save();
    	/*return json response*/
    }

    public function extendQuotaRequest(Request $request)
    {
    	$changeRequest = new ChangeRequest();
    	$changeRequest->from_id = 1;
    	$changeRequest->to_id = 2;
    	$changeRequest->type = 'extendQuota';
    	$changeRequest->key = 1;
    	$changeRequest->value = 500;
    	$changeRequest->save();
    	/*return json response*/
    }

    public function changePersonalInfoRequest(Request $request)
    {   
    	/*array of change requests*/
    	
    	
    }
    


}
