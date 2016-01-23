<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lesson;


class LessonController extends Controller
{

    public function getLessonIndex()
    {
        $lessons = Lesson::get();
        for ($i=0; $i < count($lessons); $i++) { 
            if($i%3==0)
            {
                $lessons[$i]->newRow =  True;
            }else{
                $lessons[$i]->newRow =  False;
            }
            
            if($i%3==2)
            {
                $lessons[$i]->endRow =  True;
            }else{
                $lessons[$i]->endRow =  False;
            }

            if($i%2==0)
            {
                $lessons[$i]->grey =  "features-box-gray";
            }else{
                $lessons[$i]->grey =  "";
            }
        }

        return view('lesson.index', compact('lessons'));
    }

    public function getLesson($id)
    {
        $lessons = Lesson::where('id',$id)->get();
        $lesson = $lessons[0];
    	return view('lesson.lesson', compact('lesson'));
    }

    public function getLessonAdminIndex()
    {
        $lessons = Lesson::get();
        for ($i=0; $i < count($lessons); $i++) { 
            if($i%3==0)
            {
                $lessons[$i]->newRow =  True;
            }else{
                $lessons[$i]->newRow =  False;
            }

            if($i%3==2)
            {
                $lessons[$i]->endRow =  True;
            }else{
                $lessons[$i]->endRow =  False;
            }

            if($i%2==0)
            {
                $lessons[$i]->grey =  "features-box-gray";
            }else{
                $lessons[$i]->grey =  "";
            }
        }


        return view('lesson.adminIndex',compact('lessons'));
    }

    public function getLessonInfo($id)
    {
        $lessons = Lesson::where('id',$id)->get();
        $lesson = $lessons[0];
    	return view('lesson.lessonInfo',compact('lesson'));
    }

    public function editLesson($id, Request $request)
    {
        $lessons = Lesson::where('id',$id)->get();
        $lesson = $lessons[0];
        $lesson->code = $request->code;
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->videoUrl = $request->videoUrl;
        $lesson->order = $request->order;
        $lesson->topicSummary1 = $request->topicSummary1;
        $lesson->descSummary1 = $request->descSummary1;
        $lesson->iconSummary1 = $request->iconSummary1;
        $lesson->topicSummary2 = $request->topicSummary2;
        $lesson->descSummary2 = $request->descSummary2;
        $lesson->iconSummary2 = $request->iconSummary2;
        $lesson->topicSummary3 = $request->topicSummary3;
        $lesson->descSummary3 = $request->descSummary3;
        $lesson->iconSummary3 = $request->iconSummary3;
        $lesson->save();
    	return redirect('/lessonAdmin');
    }

    public function createLesson(Request $request)
    {
        $lesson = new Lesson();
        $lesson->code = $request->code;
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->videoUrl = $request->videoUrl;
        $lesson->order = $request->order;
        $lesson->topicSummary1 = $request->topicSummary1;
        $lesson->descSummary1 = $request->descSummary1;
        $lesson->iconSummary1 = $request->iconSummary1;
        $lesson->topicSummary2 = $request->topicSummary2;
        $lesson->descSummary2 = $request->descSummary2;
        $lesson->iconSummary2 = $request->iconSummary2;
        $lesson->topicSummary3 = $request->topicSummary3;
        $lesson->descSummary3 = $request->descSummary3;
        $lesson->iconSummary3 = $request->iconSummary3;
        $lesson->save();
    	return redirect('/lessonAdmin');
    }

    public function deleteLesson($id)
    {
        $lessons = Lesson::where('id',$id)->get();
        $lesson = $lessons[0]->delete();
    	return redirect('/lessonAdmin');
    }
}
