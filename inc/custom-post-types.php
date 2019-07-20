<?php
/*
@package Buono-Theme
  This is template is to include all custom post types
*/
/*
  ===========================================
  Register New Post Types ( Testimonials, Team)
  ===========================================
*/
  function buono_custom_posts(){

    // Testimonial Post Type
    $testi_labels = array(
       'name'                  => _x( 'Testimonials', 'Post type general name', 'buonotheme' ),
       'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'buonotheme' ),
       'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'buonotheme' ),
       'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'buonotheme' ),
       'add_new'               => __( 'Add New', 'buonotheme' ),
       'add_new_item'          => __( 'Add New Testimonial', 'buonotheme' ),
       'new_item'              => __( 'New Testimonial', 'buonotheme' ),
       'edit_item'             => __( 'Edit Testimonial', 'buonotheme' ),
       'view_item'             => __( 'View Testimonial', 'buonotheme' ),
       'all_items'             => __( 'All Testimonials', 'buonotheme' ),
       'search_items'          => __( 'Search Testimonials', 'buonotheme' ),
       'parent_item_colon'     => __( 'Parent Testimonials:', 'buonotheme' ),
       'not_found'             => __( 'No Testimonials found.', 'buonotheme' ),
       'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'buonotheme' ),
       'featured_image'        => _x( 'Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buonotheme' ),
       'insert_into_item'      => _x( 'Insert into Testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buonotheme' ),
       'uploaded_to_this_item' => _x( 'Uploaded to this Testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buonotheme' ),
       'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buonotheme' ),
       'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buonotheme' ),
       'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buonotheme' ),
    );
    $testi_args = array(
      'labels' => $testi_labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 9,
      'menu_icon' => 'dashicons-format-quote',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array('title','thumbnail','editor'),
    );
    register_post_type('buono-testimonials', $testi_args);

    // Team Post Type
    $team_labels = array(
       'name'                  => _x( 'Team', 'Post type general name', 'buonotheme' ),
       'singular_name'         => _x( 'Team Member', 'Post type singular name', 'buonotheme' ),
       'menu_name'             => _x( 'Team', 'Admin Menu text', 'buonotheme' ),
       'name_admin_bar'        => _x( 'Team Member', 'Add New on Toolbar', 'buonotheme' ),
       'add_new'               => __( 'Add New', 'buonotheme' ),
       'add_title'               => __( 'Add New', 'buonotheme' ),
       'add_new_item'          => __( 'Add New Team Member', 'buonotheme' ),
       'new_item'              => __( 'New Team Member', 'buonotheme' ),
       'edit_item'             => __( 'Edit Team Member', 'buonotheme' ),
       'view_item'             => __( 'View Team Member', 'buonotheme' ),
       'all_items'             => __( 'All Team Members', 'buonotheme' ),
       'search_items'          => __( 'Search Team', 'buonotheme' ),
       'parent_item_colon'     => __( 'Parent Team:', 'buonotheme' ),
       'not_found'             => __( 'No Team found.', 'buonotheme' ),
       'not_found_in_trash'    => __( 'No Team found in Trash.', 'buonotheme' ),
       'featured_image'        => _x( 'Team Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'buonotheme' ),
       'archives'              => _x( 'Team Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'buonotheme' ),
       'insert_into_item'      => _x( 'Insert into Team Member', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'buonotheme' ),
       'uploaded_to_this_item' => _x( 'Uploaded to this Team Member', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'buonotheme' ),
       'filter_items_list'     => _x( 'Filter Team list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'buonotheme' ),
       'items_list_navigation' => _x( 'Team list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'buonotheme' ),
       'items_list'            => _x( 'Team list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'buonotheme' ),
    );
    $team_args = array(
      'labels' => $team_labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-buddicons-buddypress-logo',
      'capability_type' => 'post',
      'hierarchical' => false,
      'taxonomies' => array(''),
      'supports' => array( 'title', 'thumbnail'),
    );
    register_post_type('buono-team', $team_args);

  }
  add_action( 'init', 'buono_custom_posts');
/*
  ===========================================
  Register Department Taxonomy
  ===========================================
*/
  function buono_department_tax(){

    // Department Taxonomy
    $dept_labels = array(
    		'name'              => _x( 'Departments', 'taxonomy general name', 'buonotheme' ),
    		'singular_name'     => _x( 'Department', 'taxonomy singular name', 'buonotheme' ),
    		'search_items'      => __( 'Search Departments', 'buonotheme' ),
    		'all_items'         => __( 'All Departments', 'buonotheme' ),
    		'parent_item'       => __( 'Parent Department', 'buonotheme' ),
    		'parent_item_colon' => __( 'Parent Department:', 'buonotheme' ),
    		'edit_item'         => __( 'Edit Department', 'buonotheme' ),
    		'update_item'       => __( 'Update Department', 'buonotheme' ),
    		'add_new_item'      => __( 'Add New Department', 'buonotheme' ),
    		'new_item_name'     => __( 'New Department Name', 'buonotheme' ),
    		'menu_name'         => __( 'Departments', 'buonotheme' ),
    );
    $dept_args = array(
    		'hierarchical'      => true,
    		'labels'            => $dept_labels,
    		'show_ui'           => true,
    		'show_admin_column' => true,
    		'query_var'         => true,
    		'rewrite'           => array( 'slug' => 'department' ),
    );
    register_taxonomy( 'department','buono-team', $dept_args);

  }
  add_action( 'init', 'buono_department_tax');

/*
  ===========================================
  Edit View in Dashboard
  ===========================================
*/
  // Testimonials
  // Edit and Add New Columns in Dashboard
  add_filter( 'manage_buono-testimonials_posts_columns', 'buono_manage_testi_columns');
  function buono_manage_testi_columns($columns){
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['message'] = 'Message';
    $newColumns['rate'] = 'Rate';
    $newColumns['date'] = 'Date';
    return $newColumns;
  }

  // Add Content to the new Columns
  add_filter( 'manage_buono-testimonials_posts_custom_column','buono_testi_sutom_column_content',10,2);
  function buono_testi_sutom_column_content($column,$post_id){
    switch ($column) {
      case 'message':
        echo get_the_excerpt();
        break;
      case 'rate':
        $rate_value = get_post_meta($post_id,'_buono_rate_meta',true);
        echo '<span style="color:#0066ff; font-weight: bold">'.$rate_value.'</span>';
        break;
    }
  }


  // Team
  // Edit and Add New Columns in Dashboard
  add_filter( 'manage_buono-team_posts_columns', 'buono_manage_team_columns');
  function buono_manage_team_columns($columns){
    $newColumnsTeam = array();
    $newColumnsTeam['title'] = 'Full Name';
    $newColumnsTeam['responsibility'] = 'Responsibility';
    $newColumnsTeam['bio'] = 'Bio';
    $newColumnsTeam['department'] = 'Department';
    $newColumnsTeam['date'] = 'Date';
    return $newColumnsTeam;
  }

  // Add Content to the new Columns
  add_action('manage_buono-team_posts_custom_column','buono_team_sutom_column_content',10, 2);
  function buono_team_sutom_column_content($column,$post_id){
    switch ($column) {
      case 'responsibility':
        $res_value = get_post_meta( $post_id, '_buono_res_meta',true);
        echo $res_value;
        break;
      case 'bio':
        $bio_value = get_post_meta( $post_id, '_buono_bio_meta',true);
        echo $bio_value;
        break;
      case 'department':
        $dept_value = get_the_term_list( $post_id, 'department','<span>',', ','</span>');
        echo $dept_value;
        break;
    }
  }

/*
  ===========================================
  Add Custom Meta Boxes
  ===========================================
*/
  // Add Meta Boxes
  add_action( 'add_meta_boxes', 'buono_custom_meta_boxes');
  function buono_custom_meta_boxes(){
    add_meta_box( 'buono_res_meta', __('Responsibility'), 'buono_res_meta_box_callback', 'buono-team', 'normal','high');
    add_meta_box( 'buono_bio_meta', __('Bio'), 'buono_bio_meta_box_callback', 'buono-team', 'normal','high');
    add_meta_box( 'buono_facebook', __('Facebook'), 'buono_facebook_meta_box_callback', 'buono-team', 'normal', 'default');
    add_meta_box( 'buono_twitter', __('Twitter'), 'buono_twitter_meta_box_callback', 'buono-team', 'normal', 'default');
    add_meta_box( 'buono_instagram', __('Instagram'), 'buono_instagram_meta_box_callback', 'buono-team', 'normal', 'default');
    add_meta_box( 'buono_github', __('GitHub'), 'buono_github_meta_box_callback', 'buono-team', 'normal', 'default');
    add_meta_box( 'buono_rate', __('Rating'), 'buono_rate_meta_box_callback','buono-testimonials', 'side');
  }

  // Generate Fields
  function buono_res_meta_box_callback($post){
    wp_nonce_field( 'buono_res_save_meta', 'buono_res_meta_nonce');
    $res_value = get_post_meta($post->ID,'_buono_res_meta',true);
    echo '<label class="screen-reader-text" for="buono_res_meta_field">Responsibility</label>';
    echo '<input type="text" style="width:100%;margin:10px 0 5px;" name="buono_res_meta_field" id="buono_res_meta_field" value="'.$res_value.'">';
    echo '<p class="description">The postion of this person in your company.</p>';
  }
  function buono_bio_meta_box_callback($post){
    wp_nonce_field( 'buono_bio_save_meta', 'buono_bio_meta_nonce');
    $bio_meta_value = get_post_meta( $post->ID, '_buono_bio_meta', true);
    echo '<label class="screen-reader-text" for="buono_bio_meta_field">Bio</label>';
    echo '<input type="text" style="width:100%;margin:10px 0 5px;" name="buono_bio_meta_field" id="buono_bio_meta_field" value="'.$bio_meta_value.'">';
    echo '<p class="description">Any small tips about this member.</p>';
  }
  function buono_rate_meta_box_callback($post){
    wp_nonce_field( 'buono_rate_save_meta', 'buono_rate_meta_nonce');
    $rate_value = get_post_meta($post->ID,'_buono_rate_meta',true);
    echo '<label class="screen-reader-text" for="buono_rate_meta_field">Responsibility</label>';
    echo '<input type="number" style="width:100%;margin:10px 0 5px;" name="buono_rate_meta_field" id="buono_rate_meta_field" value="'.$rate_value.'" min="0" max="10" required>';
    echo '<p class="description">Enter rate number between 0 and 10</p>';
  }
  function buono_facebook_meta_box_callback($post){
    wp_nonce_field( 'buono_facebook_save_meta', 'buono_facebook_meta_nonce');
    $facebook_meta_value = get_post_meta( $post->ID, '_buono_facebook_meta', true);
    echo '<label class="screen-reader-text" for="buono_facebook_meta_field">Facebook</label>';
    echo '<input type="text" style="width:100%;margin:10px 0 5px;" name="buono_facebook_meta_field" id="buono_facebook_meta_field" value="'.$facebook_meta_value.'">';
    echo '<p class="description">Enter member\'s Facebook profile url</p>';
  }
  function buono_twitter_meta_box_callback($post){
    wp_nonce_field( 'buono_twitter_save_meta', 'buono_twitter_meta_nonce');
    $twitter_meta_value = get_post_meta( $post->ID, '_buono_twitter_meta', true);
    echo '<label class="screen-reader-text" for="buono_twitter_meta_field">Twitter</label>';
    echo '<input type="text" style="width:100%;margin:10px 0 5px;" name="buono_twitter_meta_field" id="buono_twitter_meta_field" value="'.$twitter_meta_value.'">';
    echo '<p class="description">Enter member\'s Twitter profile url</p>';
  }
  function buono_instagram_meta_box_callback($post){
    wp_nonce_field( 'buono_instagram_save_meta', 'buono_instagram_meta_nonce');
    $instagram_meta_value = get_post_meta( $post->ID, '_buono_instagram_meta', true);
    echo '<label class="screen-reader-text" for="buono_instagram_meta_field">Instagram</label>';
    echo '<input type="text" style="width:100%;margin:10px 0 5px;" name="buono_instagram_meta_field" id="buono_instagram_meta_field" value="'.$instagram_meta_value.'">';
    echo '<p class="description">Enter member\'s Instagram profile url</p>';
  }
  function buono_github_meta_box_callback($post){
    wp_nonce_field( 'buono_github_save_meta', 'buono_github_meta_nonce');
    $github_meta_value = get_post_meta( $post->ID, '_buono_github_meta', true);
    echo '<label class="screen-reader-text" for="buono_github_meta_field">Github</label>';
    echo '<input type="text" style="width:100%;margin:10px 0 5px;" name="buono_github_meta_field" id="buono_github_meta_field" value="'.$github_meta_value.'">';
    echo '<p class="description">Enter member\'s Github profile url</p>';
  }

  // Saving Process
  function buono_res_save_meta($post_id){
    if( !isset($_POST['buono_res_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_res_meta_nonce'], 'buono_res_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_res_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_res_meta_field'] );
    update_post_meta( $post_id, '_buono_res_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_res_save_meta' );
  function buono_bio_save_meta($post_id){
    if( !isset($_POST['buono_bio_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_bio_meta_nonce'], 'buono_bio_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_bio_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_bio_meta_field'] );
    update_post_meta( $post_id, '_buono_bio_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_bio_save_meta' );
  function buono_rate_save_meta($post_id){
    if( !isset($_POST['buono_rate_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_rate_meta_nonce'], 'buono_rate_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_rate_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_rate_meta_field'] );
    update_post_meta( $post_id, '_buono_rate_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_rate_save_meta' );
  function buono_facebook_save_meta($post_id){
    if( !isset($_POST['buono_facebook_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_facebook_meta_nonce'], 'buono_facebook_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_facebook_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_facebook_meta_field'] );
    update_post_meta( $post_id, '_buono_facebook_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_facebook_save_meta' );
  function buono_twitter_save_meta($post_id){
    if( !isset($_POST['buono_twitter_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_twitter_meta_nonce'], 'buono_twitter_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_twitter_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_twitter_meta_field'] );
    update_post_meta( $post_id, '_buono_twitter_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_twitter_save_meta' );
  function buono_instagram_save_meta($post_id){
    if( !isset($_POST['buono_instagram_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_instagram_meta_nonce'], 'buono_instagram_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_instagram_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_instagram_meta_field'] );
    update_post_meta( $post_id, '_buono_instagram_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_instagram_save_meta' );
  function buono_github_save_meta($post_id){
    if( !isset($_POST['buono_github_meta_nonce'])){
      return;
    }
    if( !wp_verify_nonce( $_POST['buono_github_meta_nonce'], 'buono_github_save_meta') ){
      return;
    }
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
      return;
    }
    if( !current_user_can( 'edit_post', $post_id)){
      return;
    }
    if( !isset( $_POST['buono_github_meta_field'] ) ){
      return;
    }
    $meta_data = sanitize_text_field( $_POST['buono_github_meta_field'] );
    update_post_meta( $post_id, '_buono_github_meta', $meta_data);
  }
  add_action( 'save_post', 'buono_github_save_meta' );
