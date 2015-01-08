<?php
/**
 * The template used for displaying work item images
 *
 * @package _s
 */
?>

<?php /* Image */
if ( has_post_thumbnail() ) { ?>
	<div class="col-sm-4">
		<a href="<?php the_permalink(); ?>" class="work">
			<article class="work">
				<header class="work-detail">
					<div class="content">
						<!-- Title -->
						<h4><?php the_title(); ?></h4>

						<?php /* Categories */
						$cats = get_the_terms( $post->ID, 'work_category' );
						if ( !empty( $cats ) ) { ?>
							<div class="cats">
								<?php // set up term list w/separators
								$terms = get_the_term_list( $post->ID, 'work_category', '', ' / ', '' );
								echo $terms; ?>
							</div>
						<?php } ?>
					</div>
				</header>

				<?php /* Image */
				the_post_thumbnail( 'medium' ); ?>
			</article>
		</a>
	</div>
<?php } ?>
