<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Post;
use App\Models\User;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return "this is controller ".$id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return " this is the id".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){
        
        $people=['kashif','Wasib','M Faraz'];
        return view('contact', compact('people'));
    }

    public function insert($title, $name){
        
        DB::insert('insert into posts(title, content) values(?,?)',[$title,$name]);
    }

    public function read(){
        
        $results = DB::select('select * from posts where id = ?',[1]);

    // $reults = DB::table('posts')->select('*')->get();
        foreach ( $results as $post){
            return $post->title;
        }
    }

    public function updatee($id, $title){
        
        $update = DB::update("update posts set title = '$title' where id = ?",[$id]);
        return $update;

    
    }

    public function deletee($title){
        
        $delete = DB::delete("delete from posts where title = ?",[$title]);
        return $delete;

    
    }

    public function find(){
        
        
       // $posts = Post::where('id',3)->orderBy('id','desc')->take(1)->get();
        $posts =Post::all();


       // foreach($posts as $post){
            //$post->title,$post->content;
           // $postss=[$post->title,$post->content]
           //$k= [$post->title,$post->content];
           
            //dd('hello');
            //return $post->title;
            return view('find', compact('posts'));
        
        

    
    }

    public function binsert (){
        
       
         $post = new Post;
         $post->title='PHP framework?';
         $post->content='Laravel ins the framewokr of PHP';
         $post->Save();

 
 
     }
    

     public function binsert2 ($id){
        
       
        $post = Post::find($id);
        $post->title='PHP framework?';
        $post->content='Laravel ins the framewokr of PHP';
        $post->Save();



    }


    public function createM(){
        
       
        Post::create(['title'=>'create','content'=>'Create and config mass asssigment']);


    }

    public function updateM(){
        
       
        Post::where('id',3)->update(['title'=>'update','content'=>'update and config mass asssigment']);
    
    }

    public function delete1(){
        
       
        Post::destroy(4);
        
        // for deleting multiple rows
        Post::destroy([4,5]);
    
    }

    // public function oneToOne($id){
    //     return User::find($id)->post->content;

    // }
   

    public function show_post($id,$name){
        //return view('posts')->with('id',$id);
        return view('posts',compact('id','name'));
    }
}
