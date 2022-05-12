<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class IdentityController extends Controller
{
   public function index(){
       $identity=Identity::with(['user'])->get();

       foreach ($identity as $value){
           echo 'Identity ID:'.$value->identity_number . '<br>';
           echo 'Identity ID Name: '. $value->user->name . '<br>';
           echo '---------------------------------------------<br>';
       }
   }
}
