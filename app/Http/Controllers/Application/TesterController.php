<?php

namespace App\Http\Controllers\Application;

use App\Base\Controllers\ApplicationController;
use App\Notifications\InboxMessage;
use App\Notifications\SubscribeMessage;
use App\Notifications\JoinMessage;
use Illuminate\Http\Request;
use App\Admin;
use Mail;

class TesterController extends ApplicationController
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('application.tester.index');
    }

    public function mailToAdmin(Request $request, Admin $admin)
	{   
        // send the admin an notification
		$admin->notify(new InboxMessage($request));
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
    }

    public function subscribe(Request $message, Admin $admin)
	{        
        //send the admin an notification
		$admin->notify(new SubscribeMessage($message));
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the contact! You are now subscribed!');
    }
    
    public function jointeam(Request $message, Admin $admin)
	{        
        //send the admin an notification
		$admin->notify(new JoinMessage($message));
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the contact! We will review and get back soon!');
    }
    
}
