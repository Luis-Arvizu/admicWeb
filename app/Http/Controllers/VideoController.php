<?php
/**
 * Created by PhpStorm.
 * User: leonardolirabecerra
 * Date: 01/02/17
 * Time: 3:29 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class VideoController {
    public function index(Request $request) {
        return view('video.index');
    }
}