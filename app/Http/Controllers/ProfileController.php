<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::find(auth()->user()->id);
        View()->share('users', $users);
        //find blogs of the auth user by descending order with pagination
        $blogs = blog::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(10);
        View()->share('blogs', $blogs);
        return view('users/profile');
    }
    public function applyindex()
    {
        $users = User::find(auth()->user()->id);
        View()->share('users', $users);
        return view('users/specialistapply');
    }

    //update profile
    public function updateprofile(Request $request)
    {
        $request->validate([
            'name' => 'required |string',
            'email' => 'required|email',
            //phone number validation with 11 digits and numeric only and pattern 1st 2 digits 01, 3rd digit 3 to 9 ,4th to 11th digits 0 to 9
            'phone' => 'required|regex:/^01[3-9]\d{8}$/',
            'profile_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $user = User::find(auth()->user()->id);
        if ($request->hasFile('profile_pic')) {
            $originalname = $request->file('profile_pic')->getClientOriginalName();
            $filename =  date('Y-m-d') . '_' . time() . $originalname;
            $profile_pic = $request->file('profile_pic');
            $image_resize = Image::make($profile_pic->getRealPath());
            $image_resize->fit(200, 200);
            $image_resize->save(public_path('storage/images/profile_pics/' . $filename));
            $user->profile_pic = $filename;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();
        return redirect()->back()->with('status', 'Profile Updated Successfully');
    }

    public function certificatestore(Request $request)
    {

        $request->validate([
            'about' => 'nullable|string|max:75',
            //certificate validation pdf or image only max size 2mb
            'certificate' => 'required|mimes:pdf,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find(auth()->user()->id);

        //if file is pdf
        if ($request->file('certificate')->extension() == 'pdf') {
            $originalname = $request->file('certificate')->getClientOriginalName();
            $filename =  date('Y-m-d') . '_' . time() . $originalname;
            $certificate = $request->file('certificate');
            $certificate->move(public_path('storage/images/certificates'), $filename);
        }
        //if file is image store without resizing
        else {
            $originalname = $request->file('certificate')->getClientOriginalName();
            $filename =  date('Y-m-d') . '_' . time() . $originalname;
            $certificate = $request->file('certificate');
            $certificate->move(public_path('storage/images/certificates'), $filename);
        }


        $user->certificate = $filename;
        $user->about = $request->about;
        $user->save();
        return redirect()->route('user.profile')->with('status', 'Certificate Uploaded Successfully');
    }
}
