<?php
namespace app\Http\Controllers;

use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    
    public function demo() {
        Log::debug('Joeeeeeeeeee');
    }
    
}

