<?php
/**
 * Page Template
 *
 * @package Zeen
 * @since 1.0.0
 * Template Name: Home 
 */

get_header();
$args = zeen_get_hero_design( $post->ID, 'pages_' );
$args['is_page'] = 'pages_';
$post_wrap_class = zeen_post_wrap_class( $post->ID, $args, array( 'page-wrap' ) );
$layout = zeen_get_article_layout( $post->ID );
$builder = get_post_meta( $post->ID, 'tipi_builder_active', true );
?>


<div id="primary" class="content-area">

	<div class="home-wrap">

		<!-- Anúncio 1 -->
		<div class="ads-horizontal-topo">
			<?php echo do_shortcode( '[anuncio_et1_home_horizontal_1]' ) ?>
			<style>.ads-horizontal-topo iframe {margin-bottom: 0 !important}</style>
		</div>

		<!-- Bloco Destaque Principal -->
		<div class="destaque-principal">

			<div class="swiffy-slider slider-item-nogap slider-nav-visible slider-nav-autoplay
			 slider-nav-autopause slider-indicators-round" data-slider-nav-autoplay-interval="7500">

			 	<style>
					.slider-nav {
						top: 150px;
						height: fit-content;
						filter: drop-shadow(2px 2px 1px rgba(0, 0, 0, 1));
					}
					.slider-container {border-radius: 10px;}
				</style>

			 	<ul class="slider-container">
				
					<?php
					$aux = 0;
					$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );			
					while($custom_query->have_posts()) : $custom_query->the_post(); 
						if ( get_field( "destaques_principais" ) == "destaque_1" ) : 
							$aux = $aux + 1;?>
							<li class="dp1 slide-visible">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( '', array( 'class' => 'destaque-img' ) ); ?>
								</a>
								<span class="editoria-badge bg-ed-<?php echo show_category_slug() ?>"><?php echo show_category_name() ?></span>
								<div class="dp1-conteudo">
									<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								</div>
							</li>
							<div class="dp1-mob">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<hr class="block-line-mob">
							</div>
							<?php					
						endif;
						if ($aux == 1) {
							break;
						}
					endwhile;
					wp_reset_postdata();

					$aux = 0;
					$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );			
					while($custom_query->have_posts()) : $custom_query->the_post(); 
						if ( get_field( "destaques_principais" ) == "destaque_2" ) : 
							$aux = $aux + 1;?>
							<li class="dp1 slide-visible">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( '', array( 'class' => 'destaque-img' ) ); ?>
								</a>
								<span class="editoria-badge bg-ed-<?php echo show_category_slug() ?>"><?php echo show_category_name() ?></span>
								<div class="dp1-conteudo">
									<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								</div>
							</li>
							<?php					
						endif;
						if ($aux == 1) {
							break;
						}
					endwhile;
					wp_reset_postdata();

					$aux = 0;
					$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );			
					while($custom_query->have_posts()) : $custom_query->the_post(); 
						if ( get_field( "destaques_principais" ) == "destaque_3" ) : 
							$aux = $aux + 1;?>
							<li class="dp1 slide-visible">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( '', array( 'class' => 'destaque-img' ) ); ?>
								</a>
								<span class="editoria-badge bg-ed-<?php echo show_category_slug() ?>"><?php echo show_category_name() ?></span>
								<div class="dp1-conteudo">
									<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								</div>
							</li>
							<?php					
						endif;
						if ($aux == 1) {
							break;
						}
					endwhile;
					wp_reset_postdata(); ?>

				</ul>

				<button type="button" class="slider-nav"></button>
    			<button type="button" class="slider-nav slider-nav-next"></button>

			</div>
				
			<?php
			$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );
			$aux2 = 0;
			while($custom_query->have_posts()) : $custom_query->the_post();			
			  	if ( get_field( "destaques_principais" ) == "destaque_4" ) : 
					$aux2 = $aux2 + 1;?>
					<div class="dp2">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( '', array( 'class' => 'destaque-img' ) ); ?>
						</a>
						<span class="editoria-badge bg-ed-<?php echo show_category_slug() ?>"><?php echo show_category_name() ?></span>
						<div class="dp2-conteudo">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
					</div>
					<div class="dp2-mob">
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<hr class="block-line-mob-1">
					</div>					
					<?php					
				endif;
				if ($aux2 == 1) {
					break;
				}
			endwhile;
			wp_reset_postdata(); 

			$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );
			$aux3 = 0;
			while($custom_query->have_posts()) : $custom_query->the_post();					
				if ( get_field( "destaques_principais" ) == "destaque_5" ) : 
					$aux3 = $aux3 + 1?>
					<div class="dp2">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail( '', array( 'class' => 'destaque-img' ) ); ?>
						</a>
						<span class="editoria-badge bg-ed-<?php echo show_category_slug() ?>"><?php echo show_category_name() ?></span>
						<div class="dp2-conteudo">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						</div>
					</div>
					<div class="dp2-mob">
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<hr class="block-line-mob-2">
					</div>					
					<?php					
				endif;
				if ($aux3 == 1) {
					break;
				}
			endwhile; 
			wp_reset_postdata(); 
			?>

		</div>
		<hr class="block-line">

		<!-- Destaque mais principal de todos -->
		<div class="destaque-0">

			<?php
			$aux = 0;
			$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );			
			while($custom_query->have_posts()) : $custom_query->the_post(); 
				if ( get_field( "destaques_especiais" ) == "destaque_0" ) : 
					$aux = $aux + 1;?>
					<div class="d0">
						<div class="d0-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( '', array( 'class' => 'destaque-img d0-img' ) ); ?>
							</a>
						</div>
						<div class="d0-conteudo">
							<span class="titulo-secao c-titulo-default"><?php echo get_field( "chapeu" ) ?></span>
							<span class="chapeu-default c-ed-<?php echo show_category_slug() ?>">
								<a href="<?php echo category_link(show_category_name()) ?>">
									<?php echo mb_strtoupper(show_category_name()) ?>
								</a>
							</span>
							<a href="<?php the_permalink(); ?>"><h2 style="color: var(--title)"><?php the_title(); ?></h2></a>
							<span class="linha-fina-default c-subtitulo"><?php echo get_field( "linha_fina" ) ?></span>
							<span class="chapeu-default c-ed-<?php echo show_category_slug() ?>"><?php echo time_ago() ?></span>
						</div>
					</div>
				<?php					
				endif;
				if ($aux == 1) {
					break;
				}
			endwhile;
			wp_reset_postdata(); ?>

			<!-- Anúncio 2 -->
			<div class="d0-ads">
				<?php echo do_shortcode( '[anuncio_et1_home_300x600_1]' ); ?>
			</div>
		</div>
		<hr class="block-line">

		<!-- Anúncio 3 -->
		<div class="ads-horizontal">
			<?php echo do_shortcode( '[anuncio_et1_home_horizontal_2]' ) ?>
			<style>.ads-horizontal iframe {margin-bottom: 0 !important}</style>
		</div>

		<!-- Últimas Notícias -->
		<div class="ultimas-noticias">
			<div class="un-left">
				<span class="titulo-secao c-titulo-default" style="margin-bottom: 20px">
					<a href="<?php echo get_site_url() .'/ultimas-noticias' ?>">Últimas Notícias</a>
				</span>				
				<div class="unl-bloco">					
					<?php 
					$aux = 0;
					$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );
					while($custom_query->have_posts()) : $custom_query->the_post(); 						
						$aux = $aux + 1;
						?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail() ?>
						</a>						
						<div class="unlb-conteudo">
							<span class="chapeu-default c-ed-<?php echo show_category_slug() ?>"><?php echo get_field( "chapeu" ) ?></span>
							<a href="<?php the_permalink(); ?>"><h2 class="c-titulo"><?php the_title() ?></h2></a>
							<span class="linha-fina-default c-subtitulo"><?php echo get_field( "linha_fina" ) ?></span>	
							<span class="editoria-default c-ed-<?php echo show_category_slug() ?>">
								<a href="<?php echo category_link(show_category_name()) ?>">
									<?php echo mb_strtoupper(show_category_name()) ?>
								</a>
							</span>
						</div>
						<div class="unlb-conteudo-mob">
							<span class="chapeu-default c-ed-<?php echo show_category_slug() ?>" style="margin-bottom: 5px"><?php echo get_field( "chapeu" ) ?></span>
							<a href="<?php the_permalink(); ?>"><h2 class="c-titulo"><?php the_title() ?></h2></a>
							<span class="editoria-default c-ed-<?php echo show_category_slug() ?>">
								<a href="<?php echo category_link(show_category_name()) ?>">
									<?php echo mb_strtoupper(show_category_name()) ?>
								</a>
							</span>
						</div>
						<?php
						if ($aux == 3) {
							break;
						}
					endwhile;
					wp_reset_postdata();
					?>
				</div>			
			</div>

			<div class="un-right">
				<!-- Anúncio 4 -->
				<div class="conteudo-especial"><?php echo do_shortcode( '[anuncio_et1_home_300x250_1]' ); ?></div>

				<div class="artic-grid mb-30"> <!-- Últimos Artigos -->
					<div class="artic-top mb-15">
						<span class="titulo-opiniao-main c-titulo">Últimos Artigos</span>
						<span class="ler-mais"><a href="<?php echo category_link('Opinião') ?>">leia mais</a></span>
					</div>
					<?php 
					$custom_query = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => 'opiniao', 'author__not_in' => array( 23, 45 ) ) ); 
					$aux = 0;
					while($custom_query->have_posts()) : $custom_query->the_post(); 
						$aux = $aux + 1; ?>							
						<div class="articulista">			
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
								<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
							</a>					
							<div class="artic-data">
								<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
								<?php echo '<h2>' . get_the_author() . '</h2>'; ?>
							</div>
						</div>
						<?php
						if ($aux == 4) {
							break;
						}
					endwhile;
					wp_reset_postdata();
					?>
				</div>	
			</div>
		</div>
		<hr class="block-line">	

		<!-- Destaque 6 -->
		<div class="destaque-6">
			<div class="d6-left">		
				<div class="d6-bloco">					
					<?php 
					$aux = 0;
					$custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );
					while($custom_query->have_posts()) : $custom_query->the_post(); 		
						if (get_field( "destaques_especiais" ) == "destaque_6")	:		
							$aux = $aux + 1;
							?>
							<div class="d6-thumbnail">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( '', array( 'class' => 'destaque-img d6-img' ) ); ?>
								</a>
							</div>						
							<div class="d6-conteudo">
								<span class="titulo-secao c-titulo-default" style="margin-bottom:7.5px; line-height:1.4;"><?php echo get_field( "chapeu" ) ?></span>
								<span class="editoria-default c-ed-<?php echo show_category_slug() ?>">
									<a href="<?php echo category_link(show_category_name()) ?>">
										<?php echo mb_strtoupper(show_category_name()) ?>
									</a>
								</span>
								<a href="<?php the_permalink(); ?>"><h2 class="c-titulo"><?php the_title() ?></h2></a>
								<span class="linha-fina-default c-subtitulo"><?php echo get_field( "linha_fina" ) ?></span>	
								<span class="editoria-default c-ed-<?php echo show_category_slug() ?>"><?php echo time_ago() ?></span>
							</div>
						<?php
						endif;
						if ($aux == 1) {
							break;
						}
					endwhile;
					wp_reset_postdata();
					?>
				</div>			
			</div>
			
			<div style="align-self:center;"> <!-- Div para ajustar o grid no mobile -->

				<!-- Anúncio 5 -->
				<div style="width:300px; height:250px; margin:auto;">
					<?php echo do_shortcode( '[anuncio_et1_home_300x250_2]' ); ?>
				</div>

				<!-- Linha divisória p/ mobile -->
				<div class="line-height-20 mt-30"></div>
			</div>

		</div>
		<hr class="block-line">

		<!-- Anúncio 6 -->
		<div class="ads-horizontal">
			<?php echo do_shortcode( '[anuncio_et1_home_horizontal_3]' ) ?>
			<style>.ads-horizontal iframe {margin-bottom: 0 !important}</style>
		</div>
		
		<!-- Amazonas -->
		<?php show_4posts_two_columns( 'amazonas', 'Amazonas', 4); ?>
		<hr class="block-line">

		<!-- Polícia -->
		<?php show_4posts_horizontal( 'policia', 'Polícia', 4); ?>	
		<hr class="block-line">	

		<!-- Anúncio 7 -->
		<div class="ads-horizontal">
			<?php echo do_shortcode( '[anuncio_et1_home_horizontal_4]' ) ?>
			<style>.ads-horizontal iframe {margin-bottom: 0 !important}</style>
		</div>

		<!-- Política -->
		<?php show_4posts_horizontal( 'politica', 'Política', 4); ?>
		<hr class="block-line">

		<!-- Economia -->
		<?php show_4posts_horizontal( 'economia', 'Economia', 4 ); ?>
		<hr class="block-line">
		
		<!-- Brasil, Mundo e Mundo Selvagem -->
		<?php show_vertical_posts_3_columns( 'brasil', 'Brasil', 'mundo', 'Mundo', 'mundo-selvagem', 'Mundo Selvagem'); ?>	
		<hr class="block-line">

		<!-- Anúncio 8 -->
		<div class="ads-horizontal">
			<?php echo do_shortcode( '[anuncio_et1_home_horizontal_5]' ) ?>
			<style>.ads-horizontal iframe {margin-bottom: 0 !important}</style>
		</div>

		<!-- Cultura -->
		<?php show_4posts_two_columns( 'cultura', 'Cultura', 4); ?>
		<hr class="block-line">

		<!-- Saúde, Ciência & Educação e Esporte -->
		<?php show_vertical_posts_3_columns( 'saude', 'Saúde', 'ciencia-educacao', 'Ciência & Educação', 'esporte', 'Esporte'); ?>	
		<hr class="block-line">

		<!-- Anúncio 9 -->
		<div class="ads-horizontal">
			<?php echo do_shortcode( '[anuncio_et1_home_horizontal_6]' ) ?>
			<style>.ads-horizontal iframe {margin-bottom: 0 !important}</style>
		</div>

		<!-- Tv e Famosos -->
		<?php show_4posts_two_columns( 'tv-e-famosos', 'Tv e Famosos', 4); ?>	
		<hr class="block-line">

	</div><!-- home-wrap -->	

<?php			
get_footer();