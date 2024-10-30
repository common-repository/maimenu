<form action="" method="post">
    <?php wp_nonce_field( $namespace . "_ plugin", $namespace . '_update_wpnonce' );
  ?>
    <input type="hidden" name="form_action" value="update_options" />
    <div class="wrap">
        <h2><?php echo $page_title; ?></h2>
        <div class="tool-box">
            <h3 class="title">Your Maimenu code</h3>
			<p>To quickly publish a menu and retrieve your code, log into <a href="http://web.maimenu.it/login.html">Maimenu.it</a>, select the venue whose menu you'd like to publish and click the "Publish" link on the top navigation bar. Follow the instructions for publishing to a website and paste the code generated below.</p>
			<textarea rows="10" cols="70" name="Maimenu_code"><?php echo $this->get_option( 'Maimenu_code' ); ?></textarea>
            
			<h4>Once you have pasted the code snippet and clicked the "Save" button, you can use the [menu] shortcode to insert your Menu into your pages. 
            </h4>
			
        </div>

        <!-- Renamed button to Save due to lack of UI output on activate (if people clicked a button called "activate" they might expect UI feedback) -->
        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>
    </div>
</form>