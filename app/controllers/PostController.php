<?php
include_once "app/models/PostModel.php";

class PostController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function showAll()
    {
        $posts = $this->postModel->getAll();
        include_once "app/views/post/list.php";
    }

    public function createPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/views/post/create.php";
        } else {
            try {
                $this->postModel->addpost($_REQUEST);
                header("location:index.php?page=post-list");
            } catch (PDOException $e) {
                echo "ERRoR" . $e->getMessage();
                header("location:index.php?page=post-list");
            }
        }
    }

    public function deletePost()
    {
     if (isset($_REQUEST['id'])){
         $this->postModel->delete($_REQUEST['id']);
         header("location:index.php?page=post-list");
     }else {
         header("location:index.php?page=post-list");
     }
    }

    public function editPost()
    {
        if (isset($_REQUEST['id'])){
          $post = $this->postModel->getById($_REQUEST['id']);
          include_once "app/views/post/update.php";
        }
    }

    public function updatePo()
    {
        if (isset($_REQUEST['id'])){
            $this->postModel->updatePost($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    public function detailPost()
    {
        if (isset($_REQUEST['id'])){
           $post = $this->postModel->getById($_REQUEST['id']);
            include_once "app/views/post/detail.php";
        }
    }
}