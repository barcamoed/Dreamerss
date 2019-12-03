<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\ResponseEmail;
use Illuminate\Support\Facades\View;
use App\Mail\ResponseEmailFrom;
use App\Mail\ResponseEmailXF;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    private $toEmail;
    private $fromName;
    public function insertData(Request $request){

        $addtoContact = new Contact();
        $addtoContact->id = $request->input('id');
        $addtoContact->name = $request->input('name');
        $addtoContact->subject = $request->input('subject');
        $addtoContact->phone = $request->input('phone');
        $addtoContact->email = $request->input('email');
        $addtoContact->message = $request->input('message');

        $addtoContact->save();

        return response()->json(['Data',$addtoContact],201);
    }

    public function apiContact(Request $request)
    {
        $data = $request->all();
        $addtoContact = new Contact();
//        $addtoContact->id = $data['id'];
        $addtoContact->name = $data['name'];
        $addtoContact->subject = $data['subject'];
        $addtoContact->phone = $data['phone'];
        $addtoContact->email =$data['email'];
        $addtoContact->message = $data['message'];

        $addtoContact->save();

        return response()->json(compact('addtoContact'));

    }

    public function sendContactFormDataToAdminPanelAndAdminEmail(Request $request)
    {

        $data = $request->all();
//        $sendTo = $request->get('type');
        $contact_info = new Contact();
//        $contact_info->name = $data['name'];
        $contact_info->email = $data['email'];
        $contact_info->user_id = 47;
        $contact_info->subject= $data['subject'];
//        $contact_info->selected = $request->get('type');
        $contact_info->message = $data['message'];
        $contact_info->save();
        $this->toEmail=$contact_info->email;
//        $this->fromName = $contact_info->name;

            \Mail::send('emails.fromEmailCG', ['title' => $contact_info->subject, 'content' => $contact_info->message], function ($message)
            {
//            $this->fromEmail;
                $message->from($this->toEmail); // jisko auto-response jana hy
                $message->to('rizwan_ashraf786@outlook.com');// jis k pass form wala data aana hy...i.e admin email

            });
            \Mail::to($contact_info->email)->send(new ResponseEmail());

        return response()->json(compact('contact_info'));
    }

        public function showContactsTable()
        {
           $contacts = Contact::with('user')->get();
           return view('admin/contactsTable')->with('contacts',$contacts);
        }
        public function showReplyEmail($id)
        {
            $contact = Contact::find($id);
            return view("admin/replyEmail")->with('contact',$contact);
        }

        public function sendReplyEmail(Request $request)
        {
            $data = $request->all();
//          $to_emailAddress = $data['email'];
            $subject_ofEmail = $data['subject'];
            $texarea_message = $data['message'];
            $this->toEmail = $data['email'];
//          $this->toEmail = $contact_info->email;
//          $this->fromName = $contact_info->name;

            \Mail::send('emails.responseEmailXF', ['title' => $subject_ofEmail, 'content' => $texarea_message], function ($message)
            {
//            $this->fromEmail;
//            $message->from('rizwan_ashraf786@outlook.com'); // admin ki trf sy reply
                $message->to($this->toEmail);// jis k pass form wala data aana hy...i.e admin email
            });
//            \Mail::to($contact_info->email)->send(new ResponseEmail());
            return redirect('/contactsTable');

        }

}
