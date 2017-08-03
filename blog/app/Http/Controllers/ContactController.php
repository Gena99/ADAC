<?php

namespace App\Http\Controllers;

use App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactController extends Controller
{
	public function show()
	{
		return view('contact');
	}
	public function mailToAdmin(ContactFormRequest $message, Admin $admin)
	{
		$admin->notify(new InboxMessage($message));
		return redirect()->back()->with('message', 'Merci pour votre message!');
	}


}
