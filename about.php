<?php
include('header.php');
include('conn.php');
$sql = "select * from about order by id DESC";
$res = $conn -> query($sql);
$row = mysqli_fetch_array($res);
?>

<!-- MAIN SECTION -->                  
      <section id="article-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
               <!-- ARTICLE 1 -->               
               <article class="margin-bottom">
                  <!-- text -->                 
                  <div class="post-text">
                     <h1><?php echo $row['title']; ?></h1>
                     <img src="admin/p_img/<?php echo $row['img']; ?>" style="height:300px;width:500px;" alt="Fashion">
					 <br><P><?php echo $row['content']; ?></P>
                  </div>
               </article>
            </div>


<?php
include('footer.php');
?>