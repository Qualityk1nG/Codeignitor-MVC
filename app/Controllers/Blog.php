<?php namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
	public function viewAll(){
		
		$blogModel = new BlogModel();
		
		$posts = $blogModel->findAll(); // SELECT * FROM `posts`;

	
		
		return view('blog', [
			'posts' => $posts
		]);
	
	}
	
	public function view($postId){
		
		$blogModel = new BlogModel();

		// SELECT * FROM `posts` WHERE `id` = '$postId';
		$post = $blogModel->find($postId);

		if(empty($post)){
			throw \CodeIgniter\Exception\PageNotFoundException::forPageNotFound;
		}
		
		return view('blog-post', [

			'post' => $post

		]);

		
	}
} 
