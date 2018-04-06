<?php

/**

 * Template Name: Home Page

 */



get_header(); ?>







<div id="home-area" class="home-area">

		<?php if ( ! dynamic_sidebar( 'Before Content Area' ) ) : ?>

		 <!--Widgetized 'Before Content Area' for the home page-->

	    <?php endif; ?>

</div>



<!-- PROMOÇÃO POR TEMPO LIMITADO - RETIRAR ESTE BLOCO -->

		<div id="promocao-home">

			<h3><span>Últimas Vagas</span></h3>

			<div class="box-promo">

				<span class="flutua-promo">Garanta já a sua!</span>

				<h4>Aproveite, últimas vagas!</h4>

				<p>Disponibilizamos algumas vagas Promocionais, que incluem os seguintes itens:</p>

				<ul>			

					<li>Hospedagem em suíte tripla;</li>

					<li>Acompanhamento médico diário;</li>

					<li>6 refeições diárias acompanhadas por nutricionista;</li>

					<li>Atividades de Terapia Ocupacional;</li>

					<li>Enfermagem 24 horas;</li>

					<li>Serviços religiosos;</li>

					<li>Visitação diária;</li>

				</ul>

				<div class="center-promo">

					<h4>Conheça nossa bela estrutura!</h4>

					<p>Experiência no cuidado de idosos há mais de 27 anos.</p>

					<p>Ligue e saiba mais: (11) 5678-9000.</p>

				</div>

			</div>

		</div>

<!-- FIM DE BLOCO -->



<div class="vr home-area">

	<div class="grid_11">

		<div class="left-home-area">

		<?php if ( ! dynamic_sidebar( 'Left Home Area' ) ) : ?>

			 <!--Widgetized 'Left Home Area' for the home page-->

		    <?php endif; ?>

		    </div>

	</div>

	<div class="grid_13">

		<?php if ( ! dynamic_sidebar( 'Right Home Area' ) ) : ?>

			 <!--Widgetized 'Right Home Area' for the home page-->

		    <?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>