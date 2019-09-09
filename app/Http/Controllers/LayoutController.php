<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index() {        

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:9001/api/programs/1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

        $result = \collect(curl_exec($ch));

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);

        // dd($result);

        return view('layout', ['data' => json_decode($result)]);
    }

    public function search(Request $request)
    {
        return redirect('http://dkbmed.com/programs.html?' . $request->getQueryString());
    }
}
