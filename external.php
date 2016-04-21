<?php  
function php_feed($limit)
{
    $feer_url='http://www.php.net/feed.atom';
$feed=  simplexml_load_file($feer_url);

$x=1;
foreach ($feed as $items)
 {
     if($x<=$limit)
     {
   
     $title=$items->title;
     $url=$items->id;
     //echo '<li><a href="',$url,'">',$title,'</a></li>';
     
     $output[]=array(
         'title'=>$title,
         'url'=>$url
     );
     }
     $x++;
 }
 return $output;
}
$feed=php_feed(10);

?>
<ul>
    <?php 
    foreach ($feed as $value) {
        echo '<li>',$value['title'],'</li>';
    }
    
    ?>
</ul>