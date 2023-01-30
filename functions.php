<?php
/**
 * Zeen Child Theme functions and definitions.
 */
function zeen_child_enqueue_styles() {
wp_enqueue_style( 'zeen-child-style' , get_stylesheet_directory_uri() . '/style.css', array( 'zeen-style' ), ZEEN_VERSION );
}
add_action(  'wp_enqueue_scripts', 'zeen_child_enqueue_styles' );


/**
 * Inclui os scripts de anúncios
 */
require_once 'inc/advertising.php';


// Mostra posts alinhados horizontalmente em 4 colunas
function show_4posts_horizontal( $categoria_slug, $categoria_nome, $qtde ) { ?>   

    <div class="cat-4posts-hor">
        <span class="title-4h c-ed-<?php echo $categoria_slug ?>">
            <a href="<?php echo get_site_url() .'/'. $categoria_slug ?>">
                <?php echo $categoria_nome ?>
            </a>
        </span>
        
        <div class="categoria-quatro-posts-horizontal">
            <?php
            $custom_query = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => $categoria_nome ) ); 
            $aux = 0;
            while($custom_query->have_posts()) : $custom_query->the_post(); 
                $aux = $aux + 1; ?>												
                <div class="cqph-conteudo">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail() ?>
                    </a>
                    <span class="chapeu-default c-ed-<?php echo $categoria_slug ?>" style="margin-top: 10px"><?php echo get_field( "chapeu" ) ?></span>
                    <a href="<?php the_permalink(); ?>"><h2 class="c-subtitulo"><?php the_title() ?></h2></a>
                    <span class="editoria-default c-ed-<?php echo $categoria_slug ?>"><?php echo time_ago() ?></span>
                </div>
                <?php
                if ($aux == $qtde) {
                    break;
                }
            endwhile;
            wp_reset_postdata();
            ?>
        </div>       

    </div>

    <div class="cat-4posts-hor-mob">
        <span class="title-4h c-ed-<?php echo $categoria_slug ?>">
            <a href="<?php echo get_site_url() .'/'. $categoria_slug ?>">
                <?php echo $categoria_nome ?>
            </a>
        </span>
        <div class="categoria-quatro-posts-horizontal-mob">
            <?php
            $custom_query = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => $categoria_nome ) ); 
            $aux = 0;
            while($custom_query->have_posts()) : $custom_query->the_post(); 
                $aux = $aux + 1; ?>												
                <div class="cqph-conteudo">
                    <?php 
                    if ( $aux == 1 ) { ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail() ?>
                        </a>
                        <div style="width: 90%; margin: auto 5%">
                            <span class="chapeu-default c-ed-<?php echo $categoria_slug ?>" style="margin-top: 10px"><?php echo get_field( "chapeu" ) ?></span>
                            <a href="<?php the_permalink(); ?>"><h2 class="c-subtitulo"><?php the_title() ?></h2></a>
                            <span class="editoria-default c-ed-<?php echo $categoria_slug ?>"><?php echo time_ago() ?></span>
                        </div>
                        <div class="line-height-1 mt-22"></div>

                        <style>
                            .cqphc-2 {
                                display: grid;
                                grid-template-columns: 3.5fr 6.5fr;
                                align-items: center;
                                gap: 7.5px;
                                width: 90%;
                                margin: auto
                            }
                            .img-cat-mob {
                                height: 90px !important;
                                width: 100%;
                                border-radius: 5px;
                                display: block;
                            }
                            .cqphc-titulo h2 {
                                font-size: 16px;
                                margin: 0 !important
                            }
                        </style>
                    <?php
                    } else if ( $aux > 1 ) { ?>
                        <div class="cqphc-2">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( '', array( 'class' => 'img-cat-mob' ) ); ?>
                            </a>
                            <div class="cqphc-titulo">
                                <a href="<?php the_permalink(); ?>"><h2 class="c-subtitulo"><?php the_title() ?></h2></a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>						
                </div>
                <?php
                if ($aux == $qtde) {
                    break;
                }
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div class="line-height-20 mt-30"></div>
    </div>
    
    <?php    
}


// Mostra posts alinhados horizontalmente em 2 colunas
function show_4posts_two_columns( $categoria_slug, $categoria_nome, $qtde) { ?>

    <div class="cat-2posts-2cols">
        <div class="categoria-quatro-posts">
            <span class="titulo-secao c-ed-<?php echo $categoria_slug ?>"><a href="https://emtempo1.com.br/<?php echo $categoria_slug ?>"><?php echo $categoria_nome ?></a></span>
            <?php 
            $custom_query = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => $categoria_nome ) ); 
            $aux = 0;
            while($custom_query->have_posts()) : $custom_query->the_post(); 
                $aux = $aux + 1;
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                <?php
                } else { ?>
                    <a href="<?php the_permalink(); ?>">
                        <img src="http://localhost/2023/emtempo1/wp-content/uploads/2022/12/no-image.png" alt="">
                    </a>
                <?php	
                } 
                ?>
                <div class="cqp-conteudo">
                    <span class="chapeu-default c-ed-<?php echo $categoria_slug ?>" style="margin-top: 10px"><?php echo get_field( "chapeu" ) ?></span>
                    <a href="<?php the_permalink(); ?>"><h2 class="c-subtitulo" style="font-size: 20px; margin: 5px 0"><?php the_title() ?></h2></a>
                    <span class="chapeu-default c-ed-<?php echo $categoria_slug ?>" style="margin-top: 7.5px"><?php echo time_ago() ?></span>
                </div>
                <?php
                if ($aux == $qtde) {
                    break;
                }
            endwhile;
            ?>				
        </div>
    </div>
		
    <div class="cat-2posts-2cols-mob">
        <div class="categoria-quatro-posts-mob">
            <span class="title-4posts c-ed-<?php echo $categoria_slug ?>"><a href="https://emtempo1.com.br/<?php echo $categoria_slug ?>"><?php echo $categoria_nome ?></a></span>
            
            <?php 
            $custom_query = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => $categoria_nome ) ); 
            $aux = 0;
            while($custom_query->have_posts()) : $custom_query->the_post(); 
                $aux = $aux + 1;
                if ( has_post_thumbnail() ) { ?>
                    <div class="cqpm">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <div class="cqpm-conteudo">
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        </div>
                    </div>
                <?php
                } 					
                if ($aux == $qtde + 2) {
                    break;
                }
            endwhile;
            wp_reset_postdata();
            ?>
            <?php //show_4posts_two_columns( 'esporte', 'Esporte', 4 ); ?>
        </div>
        <div class="line-height-20 mt-30"></div>			
    </div>

    <?php
}


// Mostra posts verticalmente com 1 em destaque no bloco de 3 colunas
function post_column ( $flag, $slug, $nome ) { ?>

    <div class="cat-col">
        
        <?php 

        if ( $flag == "by_category" ) {
            $custom_query = new WP_Query( array( 'posts_per_page' => -1, 'category_name' => $nome ) );
            ?><span class="titulo-secao c-ed-<?php echo $slug ?>"><a href="https://emtempo1.com.br/<?php echo $slug ?>"><?php echo $nome ?></a></span> <?php
        } else {
            $custom_query = new WP_Query( array( 'posts_per_page' => -1, 'tag' => $slug ) ); 
            ?><span class="titulo-secao c-ed-<?php echo $slug ?>"><a href="https://emtempo1.com.br/tag/<?php echo $slug ?>"><?php echo $nome ?></a></span> <?php
        }
        $aux = 0;
        while($custom_query->have_posts()) : $custom_query->the_post(); 
            $aux = $aux + 1; 
            if ($aux == 1) { ?>
                <div class="cc-thumbnail">
                    <?php 
                    if ( has_post_thumbnail() ) { ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php 
                            if ( $flag == "by_category" ) {
                                the_post_thumbnail( '', array( 'class' => 'destaque-img' ) );
                            } else {
                                the_post_thumbnail( '', array( 'class' => 'destaque-img thumb-position-0' ) );
                            }?>
                        </a>
                    <?php
                    } else { ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="http://localhost/2023/emtempo1/wp-content/uploads/2022/12/no-image.png" alt="">
                        </a>
                    <?php	
                    } 
                    ?>
                    <div class="cc-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title("<h2>", "</h2>") ?></a>
                    </div>
                </div>
            <?php
            } else if ($aux > 1) {  ?>
                <div class="cc-scnd">
                    <div class="ccs-thumb">
                        <?php 
                        if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php
                        } else { ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="http://localhost/2023/emtempo1/wp-content/uploads/2022/12/no-image.png" alt="">
                            </a>
                        <?php	
                        } 
                        ?>	
                    </div>
                    <div class="ccs-title">
                        <span class="chapeu-default c-ed-<?php echo $slug ?>"><?php echo get_field( "chapeu" ) ?></span>
                        <a href="<?php the_permalink(); ?>"><h2 class="c-subtitulo" style="font-size: 17px; margin: 5px 0"><?php the_title() ?></h2></a>
                        <span class="chapeu-default c-ed-<?php echo $slug ?>" style="margin-top: 7.5px"><?php echo time_ago() ?></span>
                    </div>
                </div>
            <?php
            }						
            if ($aux == 3) {
                break;
            }
        endwhile; ?>

        <!-- Linha divisória p/ mobile -->
		<div class="line-height-20 mt-30"></div>

    </div>

<?php
}

function show_vertical_posts_3_columns ( $flag, $slug_1, $nome_1, $slug_2, $nome_2, $slug_3, $nome_3 ){ ?>

    <div class="cat-3cols">
        <?php post_column ( $flag, $slug_1, $nome_1 ) ?>
        <?php post_column ( $flag, $slug_2, $nome_2 ) ?>
        <?php post_column ( $flag, $slug_3, $nome_3 ) ?>
    </div>

<?php
}


// Retorna o tempo de publicação de um matéria
function time_ago() {
    return human_time_diff(get_the_modified_time('U'), strtotime(wp_date('Y-m-d H:i:s'))) . " " . __('atrás');
}


// Retorna o nome da categoria
function show_category_name() {
    $categories = get_the_category();
    return esc_html( $categories[0]->name );
}


// Retorna o slug da categoria
function show_category_slug() {
    $categories = get_the_category();
    return esc_html( $categories[0]->slug );
}


// Retorna o link da categoria
function category_link($categoria) {
    $category_id = get_cat_ID( $categoria );
    return get_category_link( $category_id );
}


// Inclui código no head 
function my_custom_head_code() {
    // AdSense
    echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7361015084318825"></script>';
    // AdManager
    echo '<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>';
    // Adword
    echo '<script async src="https://www.googletagmanager.com/gtag/js?id=G-597ET5SZXQ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag("js", new Date());

            gtag("config", "G-597ET5SZXQ");
        </script>';

    // Swiffy Slider
    echo '<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>';
    echo '<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">';

    // AdManager
    echo '<script>
      window.googletag = window.googletag || {cmd: []};
      googletag.cmd.push(function() {
        googletag.defineSlot("/22860165856/et1_home_300x250_1", [300, 250], "div-gpt-ad-1671736118587-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_300x250_2", [300, 250], "div-gpt-ad-1671737512675-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_300x600_1", [300, 600], "div-gpt-ad-1671819763493-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_horizontal_1", [[1140, 90], [728, 90], [1140, 140], [1140, 250], [1140, 190], [1140, 410]], "div-gpt-ad-1671821845656-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_horizontal_2", [[1140, 140], [728, 90], [1140, 190], [1140, 410], [1140, 285], [1140, 90]], "div-gpt-ad-1672339218327-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_horizontal_3", [[1140, 190], [1140, 410], [1140, 90], [728, 90], [1140, 285], [1140, 140]], "div-gpt-ad-1672339527255-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_horizontal_4", [[1140, 190], [1140, 410], [728, 90], [1140, 90], [1140, 285], [1140, 140]], "div-gpt-ad-1672339685198-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_horizontal_5", [[1140, 190], [1140, 410], [728, 90], [1140, 90], [1140, 285], [1140, 140]], "div-gpt-ad-1672339843713-0").addService(googletag.pubads());
        googletag.defineSlot("/22860165856/et1_home_horizontal_6", [[1140, 140], [1140, 190], [1140, 410], [1140, 90], [728, 90], [1140, 285]], "div-gpt-ad-1672340150077-0").addService(googletag.pubads());
        
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>';
}
add_action( 'wp_head', 'my_custom_head_code' );



// Inclui código no footer
function my_custom_end_body_code() {

    echo '<script data-cfasync="false" type="text/javascript" id="clever-core">
        /* <![CDATA[ */
        (function (document, window) {
            var a, c = document.createElement("script"), f = window.frameElement;

            c.id = "CleverCoreLoader51216";
            c.src = "https://scripts.cleverwebserver.com/d4ef339c47c42bcb089c1f7437ef2437.js";

            c.async = !0;
            c.type = "text/javascript";
            c.setAttribute("data-target", window.name || (f && f.getAttribute("id")));
            c.setAttribute("data-callback", "put-your-callback-function-here");
            c.setAttribute("data-callback-url-click", "put-your-click-macro-here");
            c.setAttribute("data-callback-url-view", "put-your-view-macro-here");

            try {
                a = parent.document.getElementsByTagName("script")[0] || document.getElementsByTagName("script")[0];
            } catch (e) {
                a = !1;
            }

            a || (a = document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]);
            a.parentNode.insertBefore(c, a);
        })(document, window);
        /* ]]> */
    </script>';
}
add_action( 'wp_footer', 'my_custom_end_body_code' );

// Web Vitals Adjust
add_filter( 'zeen_web_vitals', '__return_true' );

// Personaliza o icone na tela de login 
function custom_login_logo() {
    echo '<style>
        h1 a {border-radius: 30%;}
    </style>';
}
add_action('login_head', 'custom_login_logo');

function custom_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');

//Lógica para não mostrar os destaques nas últimas
//~By BRYAN, Marcos (2023), adepto da POG (Programação Orientada à Gambiarra)
function get_the_destacation ($grupo, $campo){
    $custom_query = new WP_Query( array( 'posts_per_page' => -1 ) );	
    while($custom_query->have_posts()) : $custom_query->the_post(); 
        if ( get_field( $grupo ) == $campo ) : 
            return get_the_title();
        endif;
    endwhile;
}