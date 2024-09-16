<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function create()
    {
        return view('pages.user.profile.index');
    }

    public function store(Request $request, Profile $profile)
    {

        $request->validate([
            'fullname' => 'required|string|max:255',
            'date_of_birth' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'job_title' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('avatar')) {
            // Delete previous image if exists
            if ($profile->avatar) {
                Storage::delete('public/storage/profile_images/' . $profile->avatar);
            }
            // Upload new image
            $imagePath = $request->file('avatar')->store('profile_images', 'public');
            $profile->avatar = $imagePath;

        }


        Profile::updateOrCreate([
            'user_id' => Auth::id()
        ],
        [
            'fullname' => $request->fullname,
            'date_of_birth' =>  $request->date_of_birth,
            'address' => $request->address,
            'avatar' => $imagePath,
            'job_title'=>$request->job_title,
        ]);

        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
