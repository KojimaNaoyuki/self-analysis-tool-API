<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Job;

class PostQuestionController extends Controller
{
    public function postQuestion(Request $request)
    {
        //質問を追加
        $jobId = job::where('name', $request->jobName)->first();

        $question = new Question();
        $question->text = $request->text;
        $question->job_id = $jobId->id;
        $status = $question->save();

        if ($status) {
            return response()->json([
                'message' => 'OK',
            ], 200);
        } else {
            return response()->json([
                'message' => 'error',
            ], 200);
        }
    }
    public function updateQuestion(Request $request)
    {
        //質問を更新する
        $jobId = job::where('name', $request->jobName)->first();

        $question = Question::find($request->id);
        $question->text = $request->text;
        $question->job_id = $jobId->id;

        $status = $question->save();

        if ($status) {
            return response()->json([
                'message' => 'OK',
            ], 200);
        } else {
            return response()->json([
                'message' => 'error',
            ], 200);
        }
    }
}
