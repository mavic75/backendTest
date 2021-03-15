<?php

namespace App\Http\Controllers;

use App\app\Http\Trouble\Solution1 as TroubleSolution1;
use App\Http\Trouble\Solution1;
use Illuminate\Http\Request;
// use Illuminate\Support\Collection;

class PaddleController extends Controller
{

    protected $solution1;

    public function __construct()
    {
        $this->solution1 = new Solution1();
    }

    public function demo()
    {
        return response()->json(['Hellow Laravel 6']);
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function winner(Request $request)
    {
        $partner = array();
        $partner = $request->partner;
        $partners = array_unique($partner, SORT_REGULAR);  

        $result = $this->solution1->winner($request->data, $request->entry, $partners);

        return response()->json([
            // 'res' => $partners
        ]);

    }

}
