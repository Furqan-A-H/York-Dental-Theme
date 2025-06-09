<?php get_header(); ?>
 <main>
    <section class="hero-section">
        <div class="hero-container">

            <div class="pricing-box">
                <div class="price-from"><?php echo esc_html(get_theme_mod('york_dental_hero_price_from', 'From')); ?></div>
                <div class="price-amount"><?php echo esc_html(get_theme_mod('york_dental_hero_price_amount', '£3,000+')); ?></div>
                <svg width="1" height="112" viewBox="0 0 1 112" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.5" y1="-2.18557e-08" x2="0.500005" y2="112" stroke="#D89D81"/>
                </svg>
                <div class="price-installment">
                    <span><?php echo esc_html(get_theme_mod('york_dental_hero_installment_line1', 'or as little')); ?></span>
                    <span><?php echo esc_html(get_theme_mod('york_dental_hero_installment_line2', 'as £9')); ?></span>
                    <span><?php echo esc_html(get_theme_mod('york_dental_hero_installment_line3', 'a day')); ?></span>
                </div>
            </div>

            <div class="row">

                <div class='col-lg-6 col-md-6'>
                    <h1 id='hero_title_style'>
                        <?php echo esc_html(get_theme_mod('york_dental_hero_title', 'Invisalign® clear braces for children (age 6-11) & teens in York')); ?>
                    </h1>

                    <div class='col-lg-6 col-md-6  box-description'>

                        <h5><?php echo esc_html(get_theme_mod('york_dental_hero_desc_heading', 'Free consultation including 3D scan')); ?></h5>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12.5L9.5 18.5L20.5 7.5" stroke="#D89D81" stroke-width="2"/>
                        </svg>
                        <span><?php echo esc_html(get_theme_mod('york_dental_hero_bullet1', 'Over 12 yrs+ experience with Aligners')); ?></span> <br>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12.5L9.5 18.5L20.5 7.5" stroke="#D89D81" stroke-width="2"/>
                        </svg>
                        <span><?php echo esc_html(get_theme_mod('york_dental_hero_bullet2', 'Experience with children and advanced cases')); ?></span><br>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12.5L9.5 18.5L20.5 7.5" stroke="#D89D81" stroke-width="2"/>
                        </svg>
                        <span><?php echo esc_html(get_theme_mod('york_dental_hero_bullet3', 'Finance options available T&C Apply*')); ?></span><br>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12.5L9.5 18.5L20.5 7.5" stroke="#D89D81" stroke-width="2"/>
                        </svg>
                        <span><?php echo esc_html(get_theme_mod('york_dental_hero_bullet4', 'Free initial consultation')); ?></span><br>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12.5L9.5 18.5L20.5 7.5" stroke="#D89D81" stroke-width="2"/>
                        </svg>
                        <span><?php echo esc_html(get_theme_mod('york_dental_hero_bullet5', 'Free set of removable retainers included')); ?></span><br>

                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 12.5L9.5 18.5L20.5 7.5" stroke="#D89D81" stroke-width="2"/>
                        </svg>
                        <span><?php echo esc_html(get_theme_mod('york_dental_hero_bullet6', 'Free 3 month aftercare included')); ?></span><br>

 

                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class='btn_book_free btn'><?php echo esc_html(get_theme_mod('york_dental_hero_button_text', 'Book a free consultation')); ?></button>

                    </div>

                </div>

                <div class='col-lg-6 col-md-6'>
                    <img id='image_desgin' src="<?php echo get_template_directory_uri(); ?>/images/Girl.png" alt="Girl with Invisalign">

                    <div class='col-lg-6 col-md-6 Hero_Rating_Section'>

                        <svg   width="200" height="1" viewBox="0 0 380 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="380" y2="0.5" stroke="#3C3C3B"/>
                        </svg>
                        <span>
                            <svg width="132" height="20" viewBox="0 0 132 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4151_385)">
                                    <path d="M9.93217 0.799988L12.2767 8.01584H19.864L13.7256 12.4756L16.0702 19.6914L9.93183 15.2317L3.79347 19.6914L6.13803 12.4756L0 8.01584H7.58727L9.93217 0.799988Z" fill="#3C3C3B"/>
                                </g>
                                <g clip-path="url(#clip1_4151_385)">
                                    <path d="M37.9322 0.799988L40.2767 8.01584H47.864L41.7256 12.4756L44.0702 19.6914L37.9318 15.2317L31.7935 19.6914L34.138 12.4756L28 8.01584H35.5873L37.9322 0.799988Z" fill="#3C3C3B"/>
                                </g>
                                <g clip-path="url(#clip2_4151_385)">
                                    <path d="M65.9322 0.799988L68.2767 8.01584H75.864L69.7256 12.4756L72.0702 19.6914L65.9318 15.2317L59.7935 19.6914L62.138 12.4756L56 8.01584H63.5873L65.9322 0.799988Z" fill="#3C3C3B"/>
                                </g>
                                <g clip-path="url(#clip3_4151_385)">
                                    <path d="M93.9322 0.799988L96.2767 8.01584H103.864L97.7256 12.4756L100.07 19.6914L93.9318 15.2317L87.7935 19.6914L90.138 12.4756L84 8.01584H91.5873L93.9322 0.799988Z" fill="#3C3C3B"/>
                                </g>
                                <g clip-path="url(#clip4_4151_385)">
                                    <path d="M121.932 0.799988L124.277 8.01584H131.864L125.726 12.4756L128.07 19.6914L121.932 15.2317L115.793 19.6914L118.138 12.4756L112 8.01584H119.587L121.932 0.799988Z" fill="#3C3C3B"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4151_385">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                    <clipPath id="clip1_4151_385">
                                        <rect width="20" height="20" fill="white" transform="translate(28)"/>
                                    </clipPath>
                                    <clipPath id="clip2_4151_385">
                                        <rect width="20" height="20" fill="white" transform="translate(56)"/>
                                    </clipPath>
                                    <clipPath id="clip3_4151_385">
                                        <rect width="20" height="20" fill="white" transform="translate(84)"/>
                                    </clipPath>
                                    <clipPath id="clip4_4151_385">
                                        <rect width="20" height="20" fill="white" transform="translate(112)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>

                        <h5 class='hero_rating_section_text'>Rated <span id="hero_rating_section_digit"><?php echo esc_html(get_theme_mod('york_dental_hero_rating_number', '5.0')); ?></span> <?php echo esc_html(get_theme_mod('york_dental_hero_rating_text', 'Google Reviews')); ?></h5>

                    </div>

                </div>


                
            </div>


        </div>

        
    </section>

   <section class="invisalign-package-section">
        <div class="container">
            <h2 class="invisalign-package-heading">
                <?php echo get_theme_mod( 'invisalign_heading', 'Our Invisalign package' ); ?>
            </h2>
            <p class="invisalign-package-description">
                <?php echo get_theme_mod( 'invisalign_paragraph', 'You get the world\'s most advanced aligner technology and the guidance of our trained Invisalign Dentist, Dr Mafalda Queiroz. But most of all, you get the smile you\'ll want to show off.' ); ?>
            </p>
        </div>
    </section>
    
    




</main>
  
<?php get_footer(); ?>








<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> 
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Contact Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">

            

            <?php echo do_shortcode('[contact-form-7 id="c1e569a" title="Contact form"]'); ?>
          


      </div>


      <div class="modal-footer">
         
      </div>

    </div>
  </div>
</div>

 

 



