<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'posts';
  }
  public function showPost()
  {
    $post = Post::find($_GET['mssv']);
    $data = array('post' => $post);
    $this->render('show', $data);
  }
  public function index()
  {
    $posts = Post::all();
    $data = array('danhsachsv' => $posts);
    $this->render('index', $data);
  }
}