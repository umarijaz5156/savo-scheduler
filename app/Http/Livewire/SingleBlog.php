<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SingleBlog extends Component
{
    public $conn;

    public function render()
    {

            // $query = $this->conn->table('wp_posts');
            // $blogQuery = clone $query;
            // $imageQuery = clone $query;
            // $blog = $blogQuery->find($this->id);

            // $img = $imageQuery->where('post_parent', $this->id)->where('post_type', 'attachment')->first();

            // $relatedBlogs = $this->conn->table('wp_posts')->leftJoin('wp_posts as p1', function($join){
            //     $join->on('wp_posts.ID', '=', 'p1.post_parent')
            //     ->where('p1.post_type', '=', 'attachment');
            // })->select(['wp_posts.ID','wp_posts.post_type', 'wp_posts.post_status', 'wp_posts.post_date', 'p1.guid', 'wp_posts.post_content', 'wp_posts.post_title'])
            // ->where('wp_posts.ID' , '!=', $this->id)
            // ->where('wp_posts.post_status' ,'=', 'publish')->where('wp_posts.post_type', '=', 'post')->limit(5)->get();

            // $comments = $this->getComments($this->id);
            // dd($this->blog);


        return view('livewire.single-blog',compact('blog', 'img', 'relatedBlogs', 'popularCars', 'comments'))->layout('layouts.web');;
    }

    public function mount($id)
    {
        dd($id);
        $this->conn = DB::connection('mysql_wp');

    }


    // public function getComments($id)
    // {
    //     return $this->conn->table('wp_comments')->where('comment_post_ID', $id)->where('comment_approved',  true)->latest('comment_date')->limit(4)->get();
    // }

}
