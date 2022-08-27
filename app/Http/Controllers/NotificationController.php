<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function topicNotification(Request $request)
    {
        //$request->data sent from POSTMAN should bejson_encode($request->data)
        $response['topic'] = $request->topic;
        $response['data'] = $request->data; // if coming from POSTMAN should be json_encode($request->data)

        /*
        //Uncomment this block to save notification in DB...make sure the DB is set to the Publisher DB
        $notification = new Notification();
        $notification->topic = $response['topic'];
        $notification->message = $response['data'];
        $notification->save();
        */
        

        return response($response, 200);
    }
}
