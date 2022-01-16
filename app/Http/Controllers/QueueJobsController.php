<?php

namespace App\Http\Controllers;

use App\Jobs\PractiseJob;
use Illuminate\Http\Request;

class QueueJobsController extends Controller
{
    public function index(){
        //directly calling job so wait sleep time
        //(new PractiseJob())->handle();

        //calling from queue driver and no sleep time
        PractiseJob::dispatch();

        return response('true');
    }
}
