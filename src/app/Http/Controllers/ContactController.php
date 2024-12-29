<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only([
            'category_id', 'first_name', 'last_name', 'gender',
            'tel1', 'tel2', 'tel3','email', 'address', 'building', 'detail'
        ]);
        $tel = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');
        $contact['tel'] = $tel;
        $genderMap = [1 => '男性', 2 => '女性', 3 => 'その他'];
        if (isset($contact['gender'])) {
            $contact['gender_text'] = $genderMap[$contact['gender']];
        }
        $category = Category::find($request->category_id);
        return view('confirm', compact('contact', 'category'));
    }

    public function edit(Request $request)
    {
        $request->session()->put('contact', $request->all());
        return redirect()->route('showEditForm');
    }

    public function showEditForm()
    {
        $contact = session('contact');
        $categories = Category::all();
        return view('index', compact('contact', 'categories'));
    }

    public function thanks(Request $request)
    {
        $contact = $request->only([
            'category_id', 'first_name', 'last_name', 'gender',
            'email', 'tel', 'address', 'building', 'detail'
        ]);
        Contact::create($contact);
        return view('thanks');
    }
}
