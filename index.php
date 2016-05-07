<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div id="fouc">
    <div class="container">
        <section id="home" class="showreel clearfix">
          <?php
              $query = new WP_query('pagename=home');
              if( $query->have_posts() ){
                  while( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="entry-content clearfix">';
                      the_content();
                      echo '</div>';
                  }
              }
              wp_reset_postdata();
          ?>
        </section>
        <section id="aboutme" class="aboutme clearfix">
          <?php
              $query = new WP_query('pagename=aboutme');
              if( $query->have_posts() ){
                  while( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="entry-content clearfix">';
                      the_content();
                      echo '</div>';
                  }
              }
              wp_reset_postdata();
          ?>
        </section>
        <section id="pricing" class="pricing clearfix">
          <?php
              $query = new WP_query('pagename=services');
              if( $query->have_posts() ){
                  while( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="entry-content clearfix">';
                      the_content();
                      echo '</div>';
                  }
              }
              wp_reset_postdata();
          ?>
        </section>
        <section id="contact" class="contact clearfix">
          <?php
              $query = new WP_query('pagename=contact');
              if( $query->have_posts() ){
                  while( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="entry-content clearfix">';
                      the_content();
                      echo '</div>';
                  }
              }
              wp_reset_postdata();
          ?>
        </section>
    </div>
</div>
<?php get_footer(); ?>
