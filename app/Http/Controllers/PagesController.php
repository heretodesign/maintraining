<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function getModule() {

    // 	$modules = DB::table('modules')->where('id',1)->get();
    //     $learningoutcomes = DB::table('learning_outcomes')->where('id',1)->get();
    //     $detailsofsubjects = DB::table('details_of_subjects')->where('id',1)->get();
    //     $certifications = DB::table('certifications')->where('id',1)->get();
    //     $trainers = DB::table('trainers')->where('id',1)->get();
    //     $tracks = DB::table('tracks')->where('id',1)->get();
    //     return view('page.module', ['modules'=>$modules, 'learningoutcomes'=>$learningoutcomes, 'detailsofsubjects'=>$detailsofsubjects, 'certifications'=>$certifications, 'trainers'=>$trainers, 'tracks'=>$tracks]);
    //     // return view('page.module', compact('module'));
    // }


    // public function getTrack() {
        
    //     $tracks = DB::table('tracks')->where('id',1)->get();
    //     $scheduleddates = DB::table('scheduled_dates')->where('id',1)->get();

    //     return view('page.track', ['tracks'=>$tracks,'scheduleddates'=>$scheduleddates]);
    // }


    // public function getLearningPath() {
    //     $aeda = Track::where('id', '1')->first();
    //     $ada = Track::where('id', '2')->first();
    //     $ebe = Track::where('id', '3')->first();
    //     $eds = Track::where('id', '4')->first();
    //     $adp = Track::where('id', '5')->first();
    //     return view('page.learningpath', ['adp'=>$adp,'eds'=>$eds]);
    // }

    public function getExcell() {
        return view('pages.excell', compact('excell'));
    }

    public function getExcellContent() {
        return view('pages.excellContent', compact('excellcontent'));
    }

    public function getPowerpoint() {
        return view('pages.powerpoint', compact('powerpoint'));
    }

    public function getPowerpointContent() {
        return view('pages.powerpointContent', compact('powerpointContent'));
    }

    public function getStorytelling() {
        return view('pages.storytelling', compact('storytelling'));
    }

    public function getStorytellingContent() {
        return view('pages.storytellingContent', compact('storytellingContent'));
    }

    public function getPayment() {
        return view('pages.payment', compact('payment'));
    }

    public function getAbout() {
        return view('pages.about', compact('about'));
    }

    public function getContact() {
        return view('pages.contact', compact('contact'));
    }
    
        public function getTraining() {
        return view('pages.training', compact('training'));
    }

     public function getIbd() {
        return view('pages.ibd', compact('ibd'));
    }

     public function getTalent() {
        return view('pages.talent', compact('talent'));
    }

     public function getTrainers() {
        return view('pages.trainers', compact('trainers'));
    }

    public function getDatanalysis() {
        return view('pages.datanalysis', compact('datanalysis'));
    }
    
}



