<?php
    require_once(ROOT."include/count.php");
    $db = getConnect();
    //检查是否已添加过此文章的统计记录
    $article = checkArticle($db,ARTICLE,ARTICLE_URL);
    $articleId = 0;
    if($article){
        $articleId = $article['id'];
    }else{
        $articleId = insertArticle($db,ARTICLE,ARTICLE_URL);
    }
    //更新点击次数
    addClick($db,$articleId);
    mysqli_close($db);
 ?>
