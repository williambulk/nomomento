<?php get_header(); ?>

	<div class="header">
		<section id="landing">
			<div class="container">
				<div class="row">
					<div class="col s12 heading">
						<div class="col s12 l8 push-l2 no-padding mg130">
							<h1 class="center white-text heading f30m mg0 hide-on-med-and-down">Enquetes de:</h1>
							<h1 class="center white-text heading f30m mg0 mg10 mb0 hide-on-med-and-down" id="typed"></h1>
							<h2 class="center white-text">Confira as melhores enquetes do momento!<br>Dê a sua opinião sobre o que está acontecendo no Brasil e no mundo.</h2>
						</div>
					</div>
			    </div>
			</div>
		</section>
	</div>
	<!-- MOBILE -->
	<section id="steps" class="hide-on-med-and-up">
		<div class="grey lighten-4 pb30m">
			<div class="container">
        		<div class="row mb0">
                    <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Confira abaixo os últimos posts:</h3>
                        <!-- NOTICIAS -->
                        <div class="col s12 hide-on-med-and-up">
                            <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Notícias</h3>
        					<?php $enquetes = array(
                                'post_type' => 'enquetes',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'order' => 'desc',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categoria',
                                        'field' => 'slug',
                                        'terms' => 'noticias'
                                    )
                                )
                            );
        					$listadeenquetes = new WP_Query( $enquetes );
        					if ( $listadeenquetes->have_posts() ) {
        						while ( $listadeenquetes->have_posts() ) : $listadeenquetes->the_post(); ?>
        							<div class="col s12 m6 l4 ps10" style="margin-bottom: 5%;">
        								<div class="card hoverable z-depth-2s">
        									<div class="card-image">
        										<a href="<?php the_permalink(); ?>">
                                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                    <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
        											<h1 class="center purple-text f18 f16m font2 mg0 p20"><?php the_title(); ?></h1>
        											<hr class="white-text mg0">
        											<p class="center purple-text f14 f14m p20 mg0 font2"><?php echo get_the_date(); ?></p>
        										</a>
        									</div>
        								</div>
        							</div>
        						<?php endwhile; }
        					else { echo "Não há enquetes ainda. Chegou cedo =("; } ?>
        				</div>
                        <!-- DIREITA -->
                        <div class="col s12 hide-on-med-and-up">
                            <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Enquetes de Direita</h3>
                            <?php $enquetes = array(
                                'post_type' => 'enquetes',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'order' => 'desc',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categoria',
                                        'field' => 'slug',
                                        'terms' => 'direita'
                                    )
                                )
                            );
                            $listadeenquetes = new WP_Query( $enquetes );
                            if ( $listadeenquetes->have_posts() ) {
                                while ( $listadeenquetes->have_posts() ) : $listadeenquetes->the_post(); ?>
                                    <div class="col s12 m6 l4 ps10" style="margin-bottom: 5%;">
                                        <div class="card hoverable z-depth-2s">
                                            <div class="card-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                    <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                                    <h1 class="center purple-text f18 f16m font2 mg0 p20"><?php the_title(); ?></h1>
                                                    <hr class="white-text mg0">
                                                    <p class="center purple-text f14 f14m p20 mg0 font2"><?php echo get_the_date(); ?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; }
                            else { echo "Não há enquetes ainda. Chegou cedo =("; } ?>
                        </div>
                        <!-- ESQUERDA -->
                        <div class="col s12 hide-on-med-and-up mb50m">
                            <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Enquetes de Esquerda</h3>
                            <?php $enquetes = array(
                                'post_type' => 'enquetes',
                                'posts_per_page' => -1,
                                'post_status' => 'publish',
                                'order' => 'desc',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categoria',
                                        'field' => 'slug',
                                        'terms' => 'esquerda'
                                    )
                                )
                            );
                            $listadeenquetes = new WP_Query( $enquetes );
                            if ( $listadeenquetes->have_posts() ) {
                                while ( $listadeenquetes->have_posts() ) : $listadeenquetes->the_post(); ?>
                                    <div class="col s12 m6 l4 ps10" style="margin-bottom: 5%;">
                                        <div class="card hoverable z-depth-2s">
                                            <div class="card-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                    <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                                    <h1 class="center purple-text f18 f16m font2 mg0 p20"><?php the_title(); ?></h1>
                                                    <hr class="white-text mg0">
                                                    <p class="center purple-text f14 f14m p20 mg0 font2"><?php echo get_the_date(); ?></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; }
                            else { echo "Não há enquetes ainda. Chegou cedo =("; } ?>
                        </div>
        			</div>
				</div>
			</div>
		</div>
	</section>
	<!-- DESKTOP -->
	<section id="steps" class="hide-on-small-only">
		<div class="grey lighten-4 pb30m">
			<div class="container">
        		<div class="row mb0">
                    <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Confira abaixo os últimos posts:</h3>
                    <!-- NOTICIAS -->
                    <div class="col hide-on-small-only m10 push-m1">
                        <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Notícias</h3>
    					<?php $enquetes = array(
                            'post_type' => 'enquetes',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'desc',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria',
                                    'field' => 'slug',
                                    'terms' => 'noticias'
                                )
                            )
                        );
    					$listadeenquetes = new WP_Query( $enquetes );
    					if ( $listadeenquetes->have_posts() ) {
    						while ( $listadeenquetes->have_posts() ) : $listadeenquetes->the_post(); ?>
    							<div class="col s12 m6 l4 ps10" style="height: 350px;margin-bottom: 2%;">
    								<div class="card hoverable z-depth-2s" style="height: auto">
    									<div class="card-image">
    										<a href="<?php the_permalink(); ?>">
    										    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
    											<img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
    											<h1 class="center purple-text f18 f16m font2 mg0 p20"><?php the_title(); ?></h1>
    										</a>
    									</div>
    								</div>
    							</div>
    						<?php endwhile; }
    					else { echo "Não há enquetes ainda. Chegou cedo =("; } ?>
    				</div>
                    <!-- DIREITA -->
                    <div class="col hide-on-small-only m10 push-m1">
                        <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Enquetes de Direita</h3>
                        <?php $enquetes = array(
                            'post_type' => 'enquetes',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'desc',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria',
                                    'field' => 'slug',
                                    'terms' => 'direita'
                                )
                            )
                        );
                        $listadeenquetes = new WP_Query( $enquetes );
                        if ( $listadeenquetes->have_posts() ) {
                            while ( $listadeenquetes->have_posts() ) : $listadeenquetes->the_post(); ?>
                                <div class="col s12 m6 l4 ps10" style="height: 350px;margin-bottom: 2%;">
                                    <div class="card hoverable z-depth-2s" style="height: auto">
                                        <div class="card-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                                <h1 class="center purple-text f18 f16m font2 mg0 p20"><?php the_title(); ?></h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; }
                        else { echo "Não há enquetes ainda. Chegou cedo =("; } ?>
                    </div>
                    <!-- ESQUERDA -->
                    <div class="col hide-on-small-only m10 push-m1 mb50">
                        <h3 class="center deep-purple-text pt30 pt30m f35 f25m">Enquetes de Esquerda</h3>
                        <?php $enquetes = array(
                            'post_type' => 'enquetes',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'desc',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria',
                                    'field' => 'slug',
                                    'terms' => 'esquerda'
                                )
                            )
                        );
                        $listadeenquetes = new WP_Query( $enquetes );
                        if ( $listadeenquetes->have_posts() ) {
                            while ( $listadeenquetes->have_posts() ) : $listadeenquetes->the_post(); ?>
                                <div class="col s12 m6 l4 ps10" style="height: 350px;margin-bottom: 2%;">
                                    <div class="card hoverable z-depth-2s" style="height: auto">
                                        <div class="card-image">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                                <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                                <h1 class="center purple-text f18 f16m font2 mg0 p20"><?php the_title(); ?></h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; }
                        else { echo "Não há enquetes ainda. Chegou cedo =("; } ?>
                    </div>
				</div>
                <!-- Página inicial -->
			</div>
		</div>
	</section>
	
<?php get_footer('home'); ?>