<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function topicNotification(Request $request)
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
    }
}
