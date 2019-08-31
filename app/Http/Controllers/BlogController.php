<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response as Response;
use ButterCMS\ButterCMS;

class BlogController extends BaseController {

  private static $apiToken = '36a041a8e14f750c590c8e051551188a184ec784';
  private $client;

  public function __construct() {
    $this->client = new ButterCMS(BlogController::$apiToken);
  }

  public function listAllPosts(int $page = 1) {
    $response = $this->client->fetchPosts([ 
      'page' => $page,
      'page_size' => 10
    ]);
    return view('posts', [
      'posts' => $response->getPosts(),
      'nextPage' => $response->getMeta()['next_page'],
      'previousPage' => $response->getMeta()['previous_page']
    ]);
  }

  public function showPost(string $slug) {
    $response = $this->client->fetchPost($slug);
    $post = $response->getPost();
    return view('post', [
      'post' => $post,
      'published' => date('F j, Y', strtotime($post->getPublished())),
    ]);
  }

}