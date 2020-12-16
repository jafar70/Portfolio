<?php
/**
 * Block: M07 - Single Porfolio
 *
 * @used:
 *  - single-portfolio.php
 *
 * @package Jafar
 */

$categories            = get_the_category();
$portfolio_image       = get_field( 'portfolio_image' );
$overview              = get_field( 'portfolio_item_overview' );
$responsibilities      = get_field( 'portfolio_item_responsibilities' );
$outcome               = get_field( 'portfolio_item_outcome' );
$project_link          = get_field( 'project_link' );
$portfolio_github_link = get_field( 'portfolio_github_link' );
$disclaimer            = get_field( 'project_disclaimer' );

?>

<div class="m07">
	<div class="m07__title container">
		<h1 class='banner-title m07__title__text'><?php echo esc_html( the_title() . '.' ); ?></h1>
	</div>

	<div class='m07__meta container'>
		<div class="m07__meta__item">
			<p><a href="<?php echo esc_url( site_url() . '/portfolio' ); ?>" class='arrow-back'><?php echo esc_html( 'Portfolio' ); ?></a><?php echo esc_html( ' / ' . get_the_title() ); ?></p>
		</div>

		<div class="m07__meta__item">
			<p class='categories'>
			<?php
			foreach ( $categories as $category ) {
				$name = $category->name;
				echo esc_html( " $name " );
			}
			?>
			</p>
		</div>
	</div>

	<div class="container">
		<?php if ( ! empty( $portfolio_image ) ) : ?>
			<img data-src="<?php echo esc_url( $portfolio_image['url'] ); ?> " alt="<?php echo esc_attr( $portfolio_image['alt'] ); ?>" class="m07__img mb-40 lazy"/>
		<?php endif; ?>

		<div class='m07__grid'>
			<div class="m07__grid__text">
				<?php if ( $overview ) : ?>
					<h3><?php echo esc_html( 'Overview:' ); ?></h3>
					<?php echo wp_kses_post( $overview ); ?>
				<?php endif; ?>

				<?php if ( $responsibilities ) : ?>
					<h3><?php echo esc_html( 'My Responsibilities:' ); ?></h3>
					<?php echo wp_kses_post( $responsibilities ); ?>
				<?php endif; ?>

				<?php if ( $outcome ) : ?>
					<h3><?php echo esc_html( 'The Outcome:' ); ?></h3>
					<?php echo wp_kses_post( $outcome ); ?>
				<?php endif; ?>
			</div>

			<div class="m07__grid__skills">    
				<?php if ( have_rows( 'technologies_used' ) ) : ?>
					<h3><?php echo esc_html( 'Technologies I Used:' ); ?></h3>
					<ul class="technologies-list">
					<?php
					while ( have_rows( 'technologies_used' ) ) :
						the_row();
						$technology_name = get_sub_field( 'technology_name' );
						?>
						<li> <?php echo esc_html( $technology_name ); ?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>

			<div class="m07__grid__buttons">
				<?php if ( $project_link ) : ?>
					<a class="button" href='<?php echo esc_html( $project_link ); ?>' rel="noopener" target='_blank'><?php echo esc_html( 'View Website' ); ?></a>
				<?php endif; ?>

				<?php if ( $portfolio_github_link ) : ?>
				<?php else : ?>
					<a class="button button--disabled" rel="noopener" target='_blank' type="button" disabled><?php echo esc_html( 'No Source Code' ); ?></a>
				<?php endif; ?>

				<?php if ( $disclaimer ) : ?>
					<p class='m07__grid__buttons__disclaimer'><?php echo esc_html( $disclaimer ); ?></p>
				<?php endif; ?>
			</div>

			<div class="m07__grid__nav">
				<?php
					$prev = get_adjacent_post( false, '', true );
					$next = get_adjacent_post( false, '', false );

				if ( $prev ) {
					$url = get_permalink( $prev->ID );
					echo '<div class="m07__grid__nav__item m07__grid__nav__item--left"><a href="' . esc_url( $url ) . '" title="' . esc_html( $prev->post_title ) . '" class="previous-post-link"><span>&#171;</span><p> Previous project</p></a></div>';
				}

				if ( $next ) {
					$url = get_permalink( $next->ID );
					echo '<div class="m07__grid__nav__item m07__grid__nav__item--right"><a href="' . esc_url( $url ) . '" title="' . esc_html( $next->post_title ) . '" class="next-post-link"><p>Next project </p> <span>&#187;<span></a></div>';
				}
				?>
			</div>
			</div>
		</div>
	</div>
</div>
