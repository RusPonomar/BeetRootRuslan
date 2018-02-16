<?php

include_once ROOT. '/models/News.php';

class NewsController
{

    public function actionIndex()
    {
        ;

        $newsList = array();
        $newsList = News::getNewsList();

        require_once(ROOT . '/views/news/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemByID($id);

            require_once(ROOT . '/views/news/view.php');

            /*			echo 'actionView'; */
        }

        return true;
    }

    public function actionCreate()
    {
        $newsCreate = News::getNewsList();
  
        if (isset($_POST['submit'])) {
  
            $options['name'] = $_POST['name'];
            $options['title'] = $_POST['title'];
            $options['date'] = $_POST['date'];
            $options['category_id'] = $_POST['category_id'];
            $options['short_content'] = $_POST['short_content'];
            $options['content'] = $_POST['content'];
            $options['author_name'] = $_POST['author_name'];


            $errors = false;
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {

                $id = News::createNews($options);

            }
        }

        require_once(ROOT . '/views/news/create.php');
        return true;
    }

}