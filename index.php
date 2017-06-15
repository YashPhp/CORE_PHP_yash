<?php
include('header.php');
include('conn.php');
$sql = "select * from product order by id DESC LIMIT 4";
$query = $conn -> query($sql);
$data_n = array();
$data_id = array();
$data_c = array();
$data_i = array();
$data_t = array();
while($result = mysqli_fetch_array($query)){
   array_push($data_n,$result['name']);
	array_push($data_id,$result['id']);
	array_push($data_c,$result['content']);
	array_push($data_i,$result['img']);
	array_push($data_t,$result['type']);
}
?>



      <!-- MAIN SECTION -->                  
      <section id="home-section" class="line">
         <div class="margin">
            <!-- ARTICLES -->             
            <div class="s-12 l-9">
            
               <!-- ARTICLE 1 -->         
               <article class="post-1 line">
                  <!-- image -->                 
                  <div class="s-12 l-6 post-image">                   
                     <a href="page.php?name=<?php echo $data_n[0]; ?>&id=<?php echo $data_id[0]; ?>">
                     <img src="admin/p_img/<?php echo $data_i[0]; ?>" alt="Fashion 1">
                     </a>                
                  </div>
                  <!-- text -->                 
                  <div class="s-12 l-5 post-text">
                     <a href="page.php?name=<?php echo $data_n[0]; ?>&id=<?php echo $data_id[0]; ?>">
                        <h2><small><?php echo $data_n[0]; ?></small></h2>
                     </a>
                     <p ><?php $data_C_0 = $data_c[0]; echo substr($data_C_0, 0, 100);?></p>
                  </div>
               </article>
               
               <!-- ARTICLE 2 -->            
               <article class="post-2 right-align line">
                  <!-- image -->                 
                  <div class="s-12 l-6 post-image">                   
                     <a href="page.php?name=<?php echo $data_n[1]; ?>&id=<?php echo $data_id[1]; ?>">
                     <img src="admin/p_img/<?php echo $data_i[1]; ?>" alt="Fashion 2">
                     </a>                
                  </div>
                  <!-- text -->                 
                  <div class="s-12 l-5 post-text">
                     <a href="page.php?name=<?php echo $data_n[1]; ?>&id=<?php echo $data_id[1]; ?>">
                        <h2><?php echo $data_n[1]; ?></h2>
                     </a>
                     <p><?php $data_C_1 = $data_c[1]; echo substr($data_C_1, 0, 100); ?></p>
                  </div>
               </article>
               
               <!-- ARTICLE 3 -->              
               <article class="post-3 line">
                  <!-- image -->                 
                  <div class="s-12 l-6 post-image">                   
                     <a href="page.php?name=<?php echo $data_n[2]; ?>&id=<?php echo $data_id[2]; ?>">
                     <img src="admin/p_img/<?php echo $data_i[2]; ?>" alt="Fashion 3">
                     </a>                
                  </div>
                  <!-- text -->                 
                  <div class="s-12 l-5 post-text">
                     <a href="page.php?name=<?php echo $data_n[2]; ?>&id=<?php echo $data_id[2]; ?>">
                        <h2><?php echo $data_n[2]; ?></h2>
                     </a>
                     <p><?php $data_C_2 = $data_c[2]; echo substr($data_C_2, 0, 100); ?></p>
                  </div>
                </article>
               
               <!-- ARTICLE 4 -->           
               <article class="post-4 right-align line">
                  <!-- image -->                 
                  <div class="s-12 l-6 post-image">                   
                     <a href="page.php?name=<?php echo $data_n[3]; ?>&id=<?php echo $data_id[3]; ?>">
                     <img src="admin/p_img/<?php echo $data_i[3]; ?>" alt="Fashion 4">
                     </a>                
                  </div>
                  <!-- text -->                 
                  <div class="s-12 l-5 post-text">
                     <a href="page.php?name=<?php echo $data_n[3]; ?>&id=<?php echo $data_id[3]; ?>">
                        <h2><?php echo $data_n[3]; ?></h2>
                     </a>
                     <p><?php $data_C_3 = $data_c[3]; echo substr($data_C_3, 0, 100); ?></p>                
                  </div>
               </article>
            </div>
			<!-- SIDEBAR -->             
            <div class="s-12 l-3">
               <aside>
                  <div class="aside-block margin-bottom">
                     <h3><small style="color:red;" >Call to Inquries</small> 9724741271</h3>
                  </div>
				  <div id="mail" class="aside-block margin-bottom">
				  <h4>Make Order Online :-</h4>
					<form class="customform" method="post" action="">
                                 <div class="s-12"><input name=""  id="email" placeholder="Mobile Number" title="" type="number" /></div>
                                 <div class="s-12"><input name="" placeholder="Your name" title="Your name" name="name" id="name" type="text" /></div>
                                 <div class="s-12"><textarea placeholder="Your massage" name="mes" id="mes" rows="5"></textarea></div>
                                 <button type="submit" name="submit" id="submit">Submit Button</button>
					</form>
				   </div>
               </aside>
            </div>
         </div>
      </section>
	  
<script src="admin/js/jquery.js" ></script>
<Script>
	$('#submit').click(function(){
		var femail = $('#email').val();
		var fname = $('#name').val();
		var fmes = $('#mes').val();
		var aim  = $('#Head_O').val();
		$.ajax({
			url:"mail_me.php",
			method:"post",
			data:{email:femail,name:fname,mes:fmes,product:aim},
			dataType:"text",
			success:function(data){
				alert(data);
			}
		});
      return false;
	});
</script>
<?php
include('footer.php');
?>
