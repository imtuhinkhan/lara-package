<?php 
namespace Tuhin\SendMail\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tuhin\SendMail\Models\Mail;

class SendMailController extends Controller
{
    public function index(){
        return view('contact::form');
    }

    public function send(Request $request){
        Mail::create( $request->all());
        return redirect('/sendmail');
    }
}