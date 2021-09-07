<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Jobtask\Structure\Models\Contact;

Route::get('contact', function () {
    // $errors = [];
   return view('contact::contact'); 
})->name('contact');

Route::post('contact', function (Request $request)
{
    $input= $request->all();
    $request->validate([
        'name' => 'required',
        'hobby' => 'required',
        'location' => 'required',
        'gender' => 'required'
    ]);
    $input['hobby'] = implode(',',$input['hobby']);
    Contact::create($input);
    return redirect(route('contact'));
});