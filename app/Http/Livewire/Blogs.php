<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Blogs extends Component
{

    private $conn;
    public $blogs;
    public $categories = [];

    public $activeTab = 0;

    public function mount(){
        $this->conn = DB::connection('mysql_wp');
    }

    public function render()
    {
        $this->getCategories();
        $this->getBlogs();
        return view('livewire.blogs')->layout('layouts.web');
    }

    public function getBlogs()
    {
        if(!$this->conn){
            $this->conn =  DB::connection('mysql_wp');

        }
        $this->blogs  = $this->conn->table('wp_posts')->leftJoin('wp_posts as p1', function($join){
            $join->on('wp_posts.ID', '=', 'p1.post_parent')
            ->where('p1.post_type', '=', 'attachment');
        })
        ->join('wp_term_relationships as wp_tr', 'wp_tr.object_id', '=', 'wp_posts.id')
        ->join('wp_term_taxonomy as wp_tt', 'wp_tt.term_taxonomy_id', '=', 'wp_tr.term_taxonomy_id')
        ->join('wp_terms' , 'wp_terms.term_id', '=', 'wp_tt.term_id')

        ->select(['wp_posts.ID','wp_posts.post_type', 'wp_posts.post_status', 'wp_posts.post_date', 'p1.guid', 'wp_posts.post_content', 'wp_posts.post_title'])
        ->when($this->activeTab != 0, function($query) {
            $query->where('wp_terms.term_id', '=', $this->activeTab);
        })
        ->where('wp_posts.post_status' ,'=', 'publish')->where('wp_posts.post_type', '=', 'post')->get();
        // dd($this->blogs);
    }

    public function getCategories()
    {

        if(!$this->conn){
            $this->conn =  DB::connection('mysql_wp');

        }
        $this->categories = $this->conn->table('wp_terms')->join('wp_term_taxonomy', function($join) {
            $join->on('wp_term_taxonomy.term_id', '=' , 'wp_terms.term_id')
            ->where('wp_term_taxonomy.taxonomy', '=', 'category')
            ->where('wp_term_taxonomy.count', '>', 0);
        })->get();



    }

    public function setTab($index)
    {

        $this->activeTab = $index;
    }
}
