<?php

namespace App\Http\Controllers;

use App\Mail\QueryEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Nnjeim\World\Models\Country;

class BaseController extends Controller
{

    private $conn;

    public function show()
    {
        $countries = Country::get(['id', 'name']);
        return view('web.contact-us', compact('countries'));
    }

    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Mail::to(config('app.email'))->send(new QueryEmail($request));
        return redirect()->back()->with(['success' => 'Query Sent Successfully']);
    }

    public function getBlog($id)
    {
        $this->conn = DB::connection('mysql_wp');
        if($this->conn && !is_null($id)){
            $query = $this->conn->table('wp_posts');
            $blogQuery = clone $query;
            $imageQuery = clone $query;
            $blog = $blogQuery->find($id);

            $img = $imageQuery->where('post_parent', $id)->where('post_type', 'attachment')->first();

            $relatedBlogs = $this->conn->table('wp_posts')->leftJoin('wp_posts as p1', function($join){
                $join->on('wp_posts.ID', '=', 'p1.post_parent')
                ->where('p1.post_type', '=', 'attachment');
            })->select(['wp_posts.ID','wp_posts.post_type', 'wp_posts.post_status', 'wp_posts.post_date', 'p1.guid', 'wp_posts.post_content', 'wp_posts.post_title'])
            ->where('wp_posts.ID' , '!=', $id)
            ->where('wp_posts.post_status' ,'=', 'publish')->where('wp_posts.post_type', '=', 'post')->limit(5)->get();

            // $popularCars = Car::where('status', '=', 'unsold')->limit(8)->get();

            $comments = $this->getComments($id);
            return view('web.blog-post' ,compact('blog', 'img', 'relatedBlogs', 'comments'));
        }
    }

    public function getComments($id)
    {
        return $this->conn->table('wp_comments')->where('comment_post_ID', $id)->where('comment_approved',  true)->latest('comment_date')->limit(4)->get();
    }
}
