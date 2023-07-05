<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Certificate;
use App\Models\User;

class CertificateController extends Controller
{
    public function index()
    { //get all certificates where url not null with user and paginate
        $certificates = Certificate::where('url', '!=', null)->with('user')->paginate(10);
        return view('admin.certificate', compact('certificates'));
    }

    public function certificatestore(Request $request)
    {
        $request->validate([
            'about' => 'required|string|max:75',
            'certificate' => 'required|mimes:pdf,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $certificate = $request->file('certificate');

        // Generate a unique filename
        $filename = date('Y-m-d') . '_' . time() . '_' . $certificate->getClientOriginalName();

        // Move the uploaded file to the desired location
        $certificate->move(public_path('storage/images/certificates'), $filename);

        $certificate = new Certificate();
        $certificate->url = $filename;
        $certificate->about = $request->about;
        $certificate->user_id = auth()->user()->id;
        $certificate->save();

        return redirect()->route('user.profile')->with('status', 'Certificate Uploaded Successfully');
    }

    public function changeStatus(Request $request)
    {

        //get certificates compare to  user_id and request id
        $certificate = Certificate::where('user_id', $request->id)->first();

        //validate
        if ($request->status == 'rejected') {
            $request->validate([
                'message' => 'required|string|max:200',

            ]);
            $certificate->message = $request->message;
        }
        $certificate->status = $request->status;

        if ($request->status == 'approved') {
            $user = User::find($certificate->user_id);
            $user->role = 'certified';
            $user->save();
        }
        $certificate->save();

        return redirect()->route('certificate.request')->with('status', 'Request Updated Successfully');
    }


    public function specialist()
    {
        $specialists = Certificate::where('status', 'approved')->with('user')->paginate(6);

        return view('users.specialist', compact('specialists'));
    }
}
