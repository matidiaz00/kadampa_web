		<footer>
			<div class="wrapper">
				<div>
					<h3><?php echo get_option('title_first_col', 'Descarga un libro gratis');?></h3>
					<a target="_blank" href="<?php echo get_option('link_first_col','http://www.budismomoderno.com/');?>"><img src="<?php echo get_option('image_first_col', bloginfo('template_directory').'/img/budismo_moderno.jpg');?>"></a>
					<p><?php echo get_option('text_first_col', 'Descarga este libro gratis a tu computadora o celular (esta en formato .pdf y hay una version para ebook).');?></p>
					<a target="_blank" class="btn" href="<?php echo get_option('link_first_col', 'http://www.budismomoderno.com/');?>">Haz click aquí</a>
				</div>
				<div id="footer_center">
					<h3><?php echo get_theme_mod('title_second_col','Conocé a un Guía Espiritual');?></h3>
					<a target="_blank" href="<?php echo get_theme_mod('link_second_col','http://kadampa.org/es/buddhism/gueshe-kelsang-gyatso/');?>"><img src="<?php echo get_theme_mod('image_second_col', bloginfo('template_directory').'/img/gueshe_kelsang.jpg');?>"></a>
					<p><?php echo get_theme_mod('text_second_col','Gueshe-la, como afectuosamente lo llaman sus estudiantes, es el responsable de la difusión a nivel mundial del budismo kadampa en la actualidad.');?></p>
					<a target="_blank" class="btn" href="<?php echo get_theme_mod('link_second_col','http://kadampa.org/es/buddhism/gueshe-kelsang-gyatso/');?>">Haz click aquí</a>
				</div>
				<div>
					<h3><?php echo get_theme_mod('title_third_col','Informacion de derechos');?></h3>
					<a target="_blank" href="<?php echo get_theme_mod('link_third_col','http://www.kadampa.org/');?>"><img src="<?php echo get_theme_mod('image_third_col', bloginfo('template_directory').'/img/ntk.jpg');?>"></a>
					<p><?php echo get_theme_mod('text_third_col','©2015 Nueva Tradición Kadampa (NKT) Todos los derechos reservados mundialmente. Miembro de la Nueva Tradición Kadampa - Unión Internacional de Budismo Kadampa (NKT-IKBU).');?></p>
					<a target="_blank" class="btn" href="<?php echo get_theme_mod('link_third_col','http://www.kadampa.org/');?>">Haz click aquí</a>
				</div>
			</div>
		</footer>
		<p id="info_footer"><?php echo get_theme_mod('footer_info','Meditación y Budismo Moderno de la Nueva Tradición Kadampa');?></p>
		<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<?php wp_footer(); ?>
    </body>
</html>