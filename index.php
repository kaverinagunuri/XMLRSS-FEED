<?php  
$feer_url='http://www.php.net/feed.atom';
$feed=  simplexml_load_file($feer_url);
$limit=10;
$x=1;


?>
<!DOC TYPE html>
<head>
<titl>
    How to Read XML, RSS and ATOM Feeds
</titl>
</head>
<body>
    <ul>
        <?php
 foreach ($feed as $items)
 {
     if($x<=$limit)
     {
   
     $title=$items->title;
     $url=$items->id;
     echo '<li><a href="',$url,'">',$title,'</a></li>';
     }
     $x++;
 }
?>
    </ul>
</body>


</html>