<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    //
    public function index() {
        $price = Price::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard', $price);
    }

    public function download($filename)
    {
        $filePath = storage_path('app/public/download' . $filename);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        abort(404);
    }

    public function sendEmail(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
        ]);

        $data = [
            'name' => $request->name . " | " . $request->company . " | " . $request->phone,
            'email' => $request->email,
            'message' => $request->message
        ];
        $subject = $request->name . " | " . $request->company;

        Mail::to('sales@seansolution.com')->send(new ContactUsEmail($data, $subject));

        Alert::success('Success', 'Berhasil mengirim Email!');
        
        return redirect('/');
    }
}
