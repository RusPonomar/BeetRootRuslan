<?php

include_once ROOT. '/models/Comments.php';

class CommentsController {

    public function actionIndex()
    {

        $comments = array();
        $comments = Comments::getCommentsList();

        require_once(ROOT . '/views/comments/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $commentsItem = Comments::getCommentsItemByID($id);

            require_once(ROOT . '/views/comments/view.php');

            /*			echo 'actionView'; */
        }

        return true;

    }

}

