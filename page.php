<?php

include('header.php');

include('conn.php');

$name = $_GET['name'];
$id = $_GET['id'];

$sql = "select * from product where name='$name' and id='$id'";

$result = $conn ->query($sql);

$row = mysqli_fetch_array($result);

?>

 <section id="article-section" class="line">

         <div class="margin">

            <!-- ARTICLES -->             

            <div class="s-12 l-9">

               <!-- ARTICLE 1 -->               

               <article class="margin-bottom">

                  <div class="post-1 line">

                     <!-- image -->                 

                     <div class="s-12 l-7 post-image">                   

                        <img src="admin/p_img/<?php echo $row['img']; ?>" style="" alt="Fashion">

                     </div>

                  </div>

                  <!-- text -->                 

                  <div class="post-text" >

                     <h1><?php echo $row['name']; ?></h1>

					 <input type="hidden" id="Head_O" value="<?php echo $row['name']; ?>" >

                     <p><?php echo $row['content']; ?></p>

                     <p class="author"><?php echo $row['type']; ?></p>

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

<?php

include('footer.php');

?>

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