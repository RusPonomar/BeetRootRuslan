<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:H="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Blog</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#">RestAPI </a></h1>
                <p>public mini-blog</p>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'];?></a></h2>
                        <p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
                            &nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Back to HomePage</a></p>
                        <div class="entry">
                            <p><?php echo $newsItem['content'];?></p>
                        </div>
                        <p>&nbsp;&bull;&nbsp; <a href='/news/' class="permalink"> Back to HomePage</a></p>
                        <form method='POST' action='"$comments"'>
                            <input type='hidden' name='id' value='Anonymous'>
                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."''>
                            <textarea name='message'></textarea><br>
                            <button type='submit' name='commentSubmit'>Comment</button>
                        </form>
                <!-- end #content -->
                <div id="sidebar">
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2018 blogmini.com</p>
</div>
<!-- end #footer -->
</body>
</html>
