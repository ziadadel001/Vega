<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{

    public function BlogsAction()
    {

        $blogs = blog::all();
        foreach ($blogs as $blog) {
            $postedDate = Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at); // Assuming 'created_at' contains the posted date
            $daysDifference = $postedDate->diffInDays(Carbon::now());
            if ($daysDifference === 0) {
                $postedAgo = 'Posted today';
            } elseif ($daysDifference === 1) {
                $postedAgo = 'Posted 1 day ago';
            } else {
                $postedAgo = 'Posted ' . round($daysDifference) . ' days ago';
            }

            $blog['PostedAgo'] = $postedAgo;
        }
        return view('blogs.Blog', ['blogs' => $blogs]);
    }
    public function ShowOneBlog($blogid)
    {
        $blog = blog::find($blogid);
        return view('blogs.Blogs', ['blog' => $blog]);
    }
}
