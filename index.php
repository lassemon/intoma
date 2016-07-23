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
<?php
    $query = new WP_query('pagename=matikkainfo');
    if( $query->have_posts() ){
        while( $query->have_posts() ){
            $query->the_post();
            echo '<div class="remodal" data-remodal-id="modal">';
            echo '<button data-remodal-action="close" class="remodal-close"></button>';
            the_content();
            echo '<button data-remodal-action="confirm" class="remodal-confirm">SULJE</button>';
            echo '</div>';
        }
    }
    wp_reset_postdata();
?>

<div id="fouc" class="remodal-bg">
    <div class="container">
      <div class="colors">
        <ul>
          <li class="selected">1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
        </ul>
      </div>

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 width="100%" height="181px" viewBox="0 0 177.195 94.667" enable-background="new 0 0 177.195 94.667"
 xml:space="preserve">
<path fill="#FF555E" d="M150.311,14.734c0,0,0.342-2.271,2.684-3.305c2.552-1.125,5.631-1.292,8.769,1.7
c2.751,2.628,1.913,5.177,1.913,5.177L150.311,14.734z"/>
<line fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" x1="12.375" y1="53.099" x2="12.375" y2="29.687"/>
<polyline fill="none" stroke="#000000" stroke-width="2.5" stroke-linejoin="bevel" stroke-miterlimit="10" points="22.849,54.18
22.849,29.353 37.749,53.907 37.749,29.403 "/>
<polyline fill="none" stroke="#000000" stroke-width="2.5" stroke-linejoin="bevel" stroke-miterlimit="10" points="93.375,54.581
93.375,29.752 102.592,39.595 "/>
<polyline fill="none" stroke="#000000" stroke-width="2.5" stroke-linejoin="bevel" stroke-miterlimit="10" points="112.266,54.581
112.266,29.752 101.887,40.266 "/>
<line fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" x1="53.47" y1="52.987" x2="53.47" y2="31.346"/>
<line fill="none" stroke="#000000" stroke-width="2.625" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" x1="61.813" y1="29.846" x2="45.313" y2="29.846"/>
<ellipse fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" cx="75.237" cy="41.977" rx="10.863" ry="11.078"/>
<polyline fill="none" stroke="#000000" stroke-width="2.5" stroke-linejoin="bevel" stroke-miterlimit="10" points="118.813,54.812
128.459,29.811 138.313,54.812 "/>
<line fill="none" stroke="#000000" stroke-width="3" stroke-linejoin="bevel" stroke-miterlimit="10" x1="123.202" y1="43.436" x2="133.928" y2="43.436"/>
<path fill="#FFFFFF" stroke="#000000" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" d="
M150.813,17.06c-0.224,2.045-3.506,3.328-3.506,3.328l-12.876,1.961l15.356,1.847c0,0-0.365,6.403-1.751,10.109
c-1.384,3.706-4.055,11.55-2.763,15.226c2.256,6.397,5.201,10.529,5.201,10.529l12.031,16.366c0,0,0.193-11.675,0.436-12.892
c0.241-1.217,0.358-3.055,2.333-7.673c1.577-3.694,2.188-9.924,0.422-14.719c-1.77-4.79-8.868-15.141-6.837-16.044
c2.254-1.002,2.861-0.556,3.679-4.95"/>
<path fill="none" stroke="#231F20" stroke-width="1.1403" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" d="
M150.589,19.105"/>
<line fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel" stroke-miterlimit="10" x1="149.653" y1="59.418" x2="10.969" y2="59.418"/>
<rect x="9.24" y="65.732" fill="none" width="169.881" height="49.184"/>
<text transform="matrix(1 0 0 1 9.2397 77.2583)" fill="#231F20" font-family="'Calibri-Light'" font-size="17">Oivalla, opi ­­&amp; osaa!</text>
</svg>

        <section id="home" class="home clearfix">
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
        <section id="goals" class="goals clearfix">
          <div class="row">
            <div class="entry-content clearfix">
              <div class="three columns step">
                <div class="header"><span class="header-text">tutustu sivuun</span></div>
              </div>
              <div class="three columns step">
                <div class="header scrollBot"><span class="header-text">ota yhteyttä</span></div>
              </div>
              <div class="three columns step">
                <div class="header"><span class="header-text">sovitaan aika</span></div>
              </div>
              <div class="three columns">
                <div class="header"><span class="header-text">asiakkaan tilanteen kartoitus</span></div>
              </div>
            </div>
          </div>
        </section>
        <section id="matikka" class="matikka clearfix">
          <?php
            echo '<div class="entry-content clearfix">';
              $query = new WP_query('pagename=matikka');
              if( $query->have_posts() ){
                  while( $query->have_posts() ){
                      $query->the_post();

                      the_content();
                  }
              }
              wp_reset_postdata();

              $query = new WP_query( array(
                'category_name' => 'koulutus',
                'orderby' => 'date',
	              'order'   => 'ASC'
              ) );
              if( $query->have_posts() ){
                echo '<div class="trainings clearfix">';
                  while( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="training clearfix">';
                      echo '<h5 class="training__header">';
                      the_title();
                      echo '</h5>';
                      echo '<div class="training__text">';
                      the_content();
                      echo '</div>';
                      echo '</div>';
                  }
                echo '</div>';
              }
              wp_reset_postdata();
            echo '</div>';
          ?>
        </section>
        <section id="nepsy" class="nepsy clearfix">
          <?php
            echo '<div class="entry-content clearfix">';
              $query = new WP_query('pagename=nepsy');
              if( $query->have_posts() ){
                  while( $query->have_posts() ){
                      $query->the_post();
                      the_content();
                  }
              }
              wp_reset_postdata();

              $query = new WP_query( array(
                'category_name' => 'nepsy',
                'orderby' => 'date',
	              'order'   => 'ASC'
              ) );
              if( $query->have_posts() ){
                echo '<div class="trainings clearfix">';
                  while( $query->have_posts() ){
                      $query->the_post();
                      echo '<div class="training clearfix">';
                      echo '<h5 class="training__header">';
                      the_title();
                      echo '</h5>';
                      echo '<div class="training__text">';
                      the_content();
                      echo '</div>';
                      echo '</div>';
                  }
                echo '</div>';
              }
              wp_reset_postdata();
            echo '</div>';
          ?>
        </section>
        <section id="yhteystiedot" class="yhteystiedot clearfix">
          <div class="row">
              <?php
                  $query = new WP_query('pagename=yhteystiedot');
                  if( $query->have_posts() ){
                      while( $query->have_posts() ){
                          $query->the_post();
                          echo '<div class="entry-content clearfix">';
                          echo '<div class="one-third column">';
                          echo '  <img class="profile-image" src="wp-content/uploads/2016/06/teija.jpg"/>';
                          echo '</div>';
                          echo '<div class="two-thirds column">';
                          the_content();
                          echo '</div>';
                          echo '</div>';
                      }
                  }
                  wp_reset_postdata();
              ?>
          </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
