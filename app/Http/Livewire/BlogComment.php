<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BlogComment extends Component
{

    public $comment;
    public $email;
    public $name;
    public $blog;

    protected $rules = [
        'comment' => 'required',
        // 'email' => 'required|email',
        // 'name' => 'required'
    ];

    public function render()
    {
        return view('livewire.blog-comment');
    }

    public function save()
    {
        if(!auth()->check()){
            return redirect(route('login'));
        }
        $this->validate();

        $conn = DB::connection('mysql_wp');

        if($conn){
            $res = $conn->table('wp_comments')->insert([
                'comment_post_id' => $this->blog,
                'comment_author' => auth()->user()->name,
                'comment_author_email' => auth()->user()->email,
                'comment_date' => date('Y-m-d H:i:s'),
                'comment_content' => $this->comment,
                'user_id' => auth()->check() ? auth()->user()->id : ''
            ]);
            if($res){
                session()->flash('success', 'Comment added successfully!');

            }
        } else{
            session()->flash('error', 'Error occured please try again');
        }
        $this->reset(['name', 'email', 'comment']);
    }
}
