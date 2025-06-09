<?php
/**
 * Footer template
 */
?>
 
     <!-- <section class='Image-section'>
        <div >
          <img id='image_desgin' src="<?php echo get_template_directory_uri(); ?>/images/secion.png" alt="Image">
        </div>
    </section>
     -->

 <footer id="colophon" class="site-footer">

    <!-- <div class="footer-content"> -->

        <div class='row'>
            <div class='col-lg-8 col-md-8 footer-left'>

                <!-- <div class="">  -->

                    <?php
                        $middle_footer_logo_id = get_theme_mod('york_dental_footer_middle_logo');
                        $middle_logo_url = $middle_footer_logo_id ? wp_get_attachment_image_url($middle_footer_logo_id, 'full') : get_template_directory_uri() . '/images/Middle.png';
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <img src="<?php echo esc_url($middle_logo_url); ?>" alt="<?php bloginfo('name'); ?> Middle Logo">
                    </a>

                    <svg width="1" height="106" viewBox="0 0 1 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.5" y1="2.18557e-08" x2="0.499995" y2="106" stroke="#D89D81"/>
                    </svg>


                    <?php
                        $left_footer_logo_id = get_theme_mod('york_dental_footer_left_logo');
                        $left_logo_url = $left_footer_logo_id ? wp_get_attachment_image_url($left_footer_logo_id, 'full') : get_template_directory_uri() . '/images/Invisalign-logo.png';
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <img src="<?php echo esc_url($left_logo_url); ?>" alt="<?php bloginfo('name'); ?> Left Logo">
                    </a>

                    <svg width="1" height="106" viewBox="0 0 1 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0.5" y1="2.18557e-08" x2="0.499995" y2="106" stroke="#D89D81"/>
                    </svg>

                    <?php
                        $right_footer_logo_id = get_theme_mod('york_dental_footer_right_logo');
                        $right_middle_logo_url = $right_footer_logo_id ? wp_get_attachment_image_url($right_footer_logo_id, 'full') : get_template_directory_uri() . '/images/doctify.png';
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <img src="<?php echo esc_url($right_middle_logo_url); ?>" alt="<?php bloginfo('name'); ?> Right Logo">
                    </a>

                <!-- </div> -->

            </div>

            <div class='col-lg-4 col-md-4 social-icons'>
                <!-- <div class="">  -->
                    <?php
                            // Get the Twitter URL from the Customizer
                            $twitter_url = get_theme_mod( 'yourtheme_twitter_url' );

                            // Determine the href. If URL is empty, use '#' (or a placeholder)
                            $twitter_href = ! empty( $twitter_url ) ? esc_url( $twitter_url ) : '#';
                        ?>
                        <a  href="<?php echo $twitter_href; ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M36 16.3086C35.1177 16.7006 34.1681 16.9646 33.1722 17.0838C34.1889 16.4742 34.9697 15.5095 35.3368 14.36C34.3865 14.9247 33.3314 15.3335 32.2107 15.5551C31.3123 14.5984 30.0316 14 28.6165 14C25.8975 14 23.6928 16.2047 23.6928 18.9237C23.6928 19.3092 23.7368 19.6852 23.8208 20.046C19.7283 19.8412 16.1005 17.8805 13.6719 14.9015C13.2479 15.6287 13.0055 16.4742 13.0055 17.3766C13.0055 19.0845 13.8735 20.5916 15.1958 21.4747C14.3878 21.4491 13.6295 21.2275 12.9647 20.8587V20.9203C12.9647 23.3066 14.663 25.296 16.9141 25.7496C16.5013 25.8616 16.0661 25.9224 15.6174 25.9224C15.2998 25.9224 14.991 25.8912 14.6902 25.8336C15.3166 27.7895 17.1357 29.2134 19.2899 29.2534C17.6052 30.5733 15.4822 31.3612 13.1751 31.3612C12.7767 31.3612 12.3848 31.338 12 31.2916C14.1791 32.6884 16.7669 33.5043 19.5475 33.5043C28.6037 33.5043 33.5562 26.0016 33.5562 19.4956C33.5562 19.282 33.5522 19.0693 33.5418 18.8589C34.5049 18.1629 35.34 17.2958 36 16.3086Z" fill="white"/>
                            </svg>

                        </a>
                
                        <?php
                            // Repeat the pattern for other social media icons (Instagram, Facebook, etc.)
                            $instagram_url = get_theme_mod( 'yourtheme_instagram_url' );
                            $instagram_href = ! empty( $instagram_url ) ? esc_url( $instagram_url ) : '#';
                            ?>
                            <a href="<?php echo $instagram_href; ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 14.1622C27.2041 14.1622 27.5837 14.1744 28.849 14.2321C30.019 14.2855 30.6544 14.481 31.0773 14.6453C31.6374 14.863 32.0371 15.123 32.457 15.5429C32.877 15.9629 33.137 16.3626 33.3547 16.9227C33.519 17.3456 33.7145 17.981 33.7679 19.1509C33.8256 20.4163 33.8378 20.7958 33.8378 23.9999C33.8378 27.2041 33.8256 27.5836 33.7679 28.849C33.7145 30.019 33.519 30.6543 33.3547 31.0772C33.137 31.6373 32.877 32.0371 32.4571 32.457C32.0371 32.8769 31.6374 33.1369 31.0773 33.3546C30.6544 33.519 30.019 33.7144 28.849 33.7678C27.5839 33.8255 27.2044 33.8378 24 33.8378C20.7956 33.8378 20.4162 33.8255 19.151 33.7678C17.981 33.7144 17.3456 33.519 16.9227 33.3546C16.3626 33.1369 15.9629 32.8769 15.543 32.457C15.1231 32.0371 14.863 31.6373 14.6453 31.0772C14.481 30.6543 14.2855 30.019 14.2321 28.849C14.1744 27.5836 14.1622 27.2041 14.1622 23.9999C14.1622 20.7958 14.1744 20.4163 14.2321 19.1509C14.2855 17.981 14.481 17.3456 14.6453 16.9227C14.863 16.3626 15.123 15.9629 15.543 15.543C15.9629 15.123 16.3626 14.863 16.9227 14.6453C17.3456 14.481 17.981 14.2855 19.151 14.2321C20.4163 14.1744 20.7959 14.1622 24 14.1622ZM24 12C20.741 12 20.3323 12.0138 19.0524 12.0722C17.7752 12.1305 16.9028 12.3333 16.1395 12.63C15.3504 12.9366 14.6812 13.3469 14.0141 14.0141C13.3469 14.6812 12.9366 15.3504 12.63 16.1395C12.3333 16.9028 12.1305 17.7751 12.0722 19.0524C12.0138 20.3323 12 20.741 12 23.9999C12 27.259 12.0138 27.6676 12.0722 28.9475C12.1305 30.2248 12.3333 31.0971 12.63 31.8604C12.9366 32.6495 13.3469 33.3187 14.0141 33.9859C14.6812 34.653 15.3504 35.0633 16.1395 35.3699C16.9028 35.6666 17.7752 35.8694 19.0524 35.9277C20.3323 35.9861 20.741 35.9999 24 35.9999C27.259 35.9999 27.6677 35.9861 28.9476 35.9277C30.2248 35.8694 31.0972 35.6666 31.8605 35.3699C32.6496 35.0633 33.3188 34.653 33.9859 33.9859C34.653 33.3187 35.0634 32.6495 35.37 31.8604C35.6667 31.0971 35.8695 30.2248 35.9278 28.9475C35.9862 27.6676 36 27.259 36 23.9999C36 20.741 35.9862 20.3323 35.9278 19.0524C35.8695 17.7751 35.6667 16.9028 35.37 16.1395C35.0634 15.3504 34.653 14.6812 33.9859 14.0141C33.3188 13.3469 32.6496 12.9366 31.8605 12.63C31.0972 12.3333 30.2248 12.1305 28.9476 12.0722C27.6677 12.0138 27.259 12 24 12Z" fill="white"/>
                                <path d="M24.0056 17.8434C20.6023 17.8434 17.8434 20.6023 17.8434 24.0055C17.8434 27.4088 20.6023 30.1677 24.0056 30.1677C27.4088 30.1677 30.1677 27.4088 30.1677 24.0055C30.1677 20.6023 27.4088 17.8434 24.0056 17.8434ZM24.0056 28.0055C21.7964 28.0055 20.0056 26.2147 20.0056 24.0055C20.0056 21.7964 21.7964 20.0056 24.0056 20.0056C26.2147 20.0056 28.0056 21.7964 28.0056 24.0055C28.0056 26.2147 26.2147 28.0055 24.0056 28.0055Z" fill="white"/>
                                <path d="M31.8508 17.5961C31.8508 18.3914 31.2061 19.0361 30.4108 19.0361C29.6155 19.0361 28.9708 18.3914 28.9708 17.5961C28.9708 16.8008 29.6155 16.1561 30.4108 16.1561C31.2061 16.1561 31.8508 16.8008 31.8508 17.5961Z" fill="white"/>
                                </svg>

                            </a>

                            <?php
                                $facebook_url = get_theme_mod( 'yourtheme_facebook_url' );
                                $facebook_href = ! empty( $facebook_url ) ? esc_url( $facebook_url ) : '#';
                            ?>
                            <a href="<?php echo $facebook_href; ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.315 16.9578C28.6917 16.8331 27.8498 16.74 27.3204 16.74C25.8867 16.74 25.7936 17.3633 25.7936 18.3607V20.1361H29.3774L29.065 23.8137H25.7936V35H21.3063V23.8137H19V20.1361H21.3063V17.8613C21.3063 14.7453 22.7708 13 26.4477 13C27.7252 13 28.6602 13.187 29.8753 13.4363L29.315 16.9578Z" fill="white"/>
                                </svg>

                            </a>

                <!-- </div> -->
            </div>
        </div>

       

        

       

    <!-- </div> -->




    <div class="footer-bottom-text">
        <p>
            © <?php echo date( 'Y' ); ?> The York Dental Suite. All rights reserved.
            <br>
            Full details of how we handle your data and how you can change your contact preferences can be found in our
              <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacy-policy' ) ) ); ?>">privacy policy</a>
            <!--?php
            $privacy_policy_id = get_theme_mod( 'yourtheme_privacy_policy_page' );
            if ( $privacy_policy_id ) :
                $privacy_policy_link = get_permalink( $privacy_policy_id );
                if ( $privacy_policy_link ) :
                    ?>
                  
                    <a href="<!?php echo esc_url( $privacy_policy_link ); ?>">privacy policy</a>
                    <!?php
                endif;
            endif;
            ?-->
        </p>
    </div>



</footer>

<?php wp_footer(); ?>


</body>
</html>