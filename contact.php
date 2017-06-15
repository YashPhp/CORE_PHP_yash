<?php
include('header.php');
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
                     <h1>Contact Me</h1>
                     <div class="line">
                        <div class="margin">
                           <div class="s-12 l-6">
                              <address>
                                 <h4><i class="icon-home icon"></i>
								 Hasanwadi - 4 , Nr Payal Studio , <br> Rajkot
								 </h4>
                                 <p><i class="icon-mail icon"></i> Sanatharayash43@gmail.com</p>
                              </address>
                              <br />
                           </div>
                           <div class="s-12 l-6">
                              <h4>Contact Us  :</h4>
                              <form class="customform" method="post" action="">
                                 <div class="s-12"><input name="" name="email" id="email" placeholder="Your e-mail" title="Your e-mail" type="text" /></div>
                                 <div class="s-12"><input name="" placeholder="Your name" title="Your name" name="name" id="name" type="text" /></div>
                                 <div class="s-12"><textarea placeholder="Your massage" name="mes" id="mes" rows="5"></textarea></div>
                                 <button type="submit" name="submit" id="submit">Submit Button</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
               
            </div>
<?php
include('footer.php');
?>
<Script src="admin/js/jquery.js"></script>
<Script>
	$('#submit').click(function(){
		var email = $('#email').val();
		var name = $('#name').val();
		var mes = $('#mes').val();
		
		$.ajax({
			url:"mail_me.php",
			method:"post",
			data:{email:email,name:name,mes:mes},
			dataType:"text",
			success:function(){
				alert("Thanks For Support");
			}
		});
		
	});
</script>
