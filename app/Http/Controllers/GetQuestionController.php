<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class GetQuestionController extends Controller
{
    public function getQuestion(Request $request)
    {
        $jobData = Job::where('name', $request->jobName)->get();

        if (count($jobData) != 0) {
            $items = Job::find($jobData[0]->id)->load('Questions');
        } else {
            $items = null;
        }

        if ($items) {
            return response()->json([
                'data' => $items,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
