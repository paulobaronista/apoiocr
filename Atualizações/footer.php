	    	</div><!--.container-->



	</div>	



</div><!--#main-->



<footer id="footer">



  	<div id="back-top-wrapper">



    	<p id="back-top">



        <a href="#top"><span></span></a>



      </p>



    </div>



		<div class="footer-top">



			<div class="container_24 container clearfix">



			<div class="grid_11" id="copyright">



        <?php $myfooter_text = of_get_option('footer_text'); ?>



          



				<?php if($myfooter_text){?>



          <?php echo of_get_option('footer_text'); ?>



        <?php } else { ?>



          <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a><br />



&copy; <?php echo date('Y'); ?> &nbsp;|&nbsp; TODOS DIREITOS RESERVADOS<br>



<br>



R. Professor Nelson de Senna, 10<br>



Jabaquara - São Paulo/SP<br>



Fone: (11) 5678-9000



        <?php } ?><br />



       



        



      </div>



      	<div class="grid_6">



			<?php if ( ! dynamic_sidebar( '1st Footer Area' ) ) : ?>



			<!--Widgetized Footer-->



		   <?php endif; ?>



	   </div>



	   <div class="grid_4">



			<?php if ( ! dynamic_sidebar( '2nd Footer Area' ) ) : ?>



			<!--Widgetized Footer-->



		   <?php endif; ?>



	   </div>



	   <div class="grid_3">



			<table>



<tr>



<td><?php if ( ! dynamic_sidebar( '3rd Footer Area' ) ) : ?>



			<!--Widgetized Footer-->



		   <?php endif; ?>



</td>



<td valign="bottom">



</td>



</tr>



</table>



	   </div>



		</div><!--.container-->



		</div>



<div style="width:950px; margin: 15px auto; text-align:right">



<a href="http://www.indexnet.com.br" target="_blank"><img src="http://www.apoiocr.com.br/wp-content/uploads/2012/05/DesignByIndexnetWhite.png" title="Indexnet - Publicidade Digital" alt="Indexnet - Publicidade Digital"></a>



</div>



	</footer>



<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->



<?php if(of_get_option('ga_code')) { ?>

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78727380-1', 'auto');
  ga('send', 'pageview');

 </script>

    <!-- Código do Google para tag de remarketing -->
	<!--
	As tags de remarketing não podem ser associadas a informações pessoais de identificação nem inseridas em páginas relacionadas a categorias de confidencialidade. Veja mais informações e instruções sobre como configurar a tag em: http://google.com/ads/remarketingsetup
	-->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 881251743;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/881251743/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	<!-- Código do Google para tag de remarketing -->	



<?php } ?>

</body>

</html>