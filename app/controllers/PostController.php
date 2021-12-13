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
        if (isset($_SESSION['user'])) {
            $posts = $this->postModel->getPostData($_SESSION['user']->id);
            include_once "app/views/post/list.php";
        }
    }

    public function createPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "app/views/post/create.php";
        } else {

//            $user_id = $_SESSION["user"]->id;
//            $_REQUEST["user_id"] = $user_id;
            try {
                if (isset($_FILES["fileUpToLoad"])) {
                    $targetFolder = "upload/";
                    $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                    $targetFile = $targetFolder . $nameImage;
                    if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                        echo "upload thanh cong";
                        $_REQUEST["image"] = $nameImage;
                    } else {
                        echo "upload khong thanh cong";
                    }
                    $_REQUEST["image"] = $nameImage;
                }
                $this->postModel->addPost($_REQUEST);
                header("location:index.php?page=post-list");
            } catch (PDOException $e) {
                echo "ERRoR" . $e->getMessage();
                header("location:index.php?page=post-list");
            }
        }
    }

    public function deletePost()
    {
        if (isset($_REQUEST['id'])) {
            $this->postModel->delete($_REQUEST['id']);
            header("location:index.php?page=post-list");
        } else {
            header("location:index.php?page=post-list");
        }
    }

    public function editPost()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postModel->getById($_REQUEST['id']);
            include_once "app/views/post/update.php";
        }
    }

    public function updatePo()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postModel->getById($_REQUEST["id"]);
            $_REQUEST["image"] = $post->image;
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "upload khong thanh cong";
                }
            }
            $this->postModel->updatePost($_REQUEST);
            header("location:index.php?page=post-list");
        }
    }

    public function detailPost()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postModel->getById($_REQUEST['id']);
            include_once "app/views/post/detail.php";
        }
    }
}