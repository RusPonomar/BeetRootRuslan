<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Blog</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
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
                    <?php foreach ($newsList as $newsItem):?>
                        <div class="post">
                            <h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'];?></a></h2>
                            <p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?></p>
                            <div class="entry">
                                <h4><p><?php echo $newsItem['short_content'];?></p></h4>
                            </div>
                            <div class="entry">
                                <p><?php $string = substr($newsItem['content'], 0, 100); $string = rtrim($string, "!,.-"); echo $string."… ";?><a href='/news/<?php echo $newsItem['id'] ;?>' class="permalink"> read more</a></p>
                            </div>
                        </div>
                    <?php endforeach;?>


                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
            </div>
            <div class="modal-body">
                <form id="create" method="post">
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input type="name" name="name" class="form-control"/>
                        <div class="form-group">
                            <label for="text">publication</label>
                            <input type="text" name="publication" class="form-control"/>
                            </div
                                <button type="submit" class="btn btn-primary">
                            <div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2018 Blogmini.com<p>
</div>
<!-- end #footer -->
</body>
</html>
