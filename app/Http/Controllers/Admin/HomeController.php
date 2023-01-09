<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Member;
use App\Models\Merchandise;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $admins = User::all()->count();

        $blogs = Blog::all()->count();

        $events = Event::all()->count();

        $members = Member::all()->count();

        $albums = Album::all()->count();

        $merchandise = Merchandise::all()->count();

        return view('admin.home',compact('admins','blogs','events','members','albums','merchandise'));
    }
}
