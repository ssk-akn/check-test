<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        $categories = Category::all();
        $contacts = Contact::with('category')->paginate(7);
        return view('admin', compact('contacts', 'categories'));
    }

    public function search(Request $request)
    {
        $contacts = Contact::query()
            ->searchKeyword($request->keyword)
            ->filterGender($request->gender)
            ->filterCategory($request->category_id)
            ->filterDate($request->date)
            ->paginate(7);
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

}
