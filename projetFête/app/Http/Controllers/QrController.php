<?php

namespace App\Http\Controllers;
//use App\Models\Commit;

class commitCtrl extends Controller
{
   public static function showAccueil(){
      return view('commit');
   }
   public static function displayCommits(){
      //$commits = Commit::displayAll();
      //return view('commits', ['commits' => $commits]);
   }

   public static function displayRepository($id){
      //return Commit::getRepository($id);
   }
}
