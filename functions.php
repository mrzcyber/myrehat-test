<?php
/** MyRehat Test child theme - functions.php */

add_action( 'wp_enqueue_scripts', 'myrehat_test_assets' );
function myrehat_test_assets() {
    wp_enqueue_style( 'myrehat-test-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script(
        'myrehat-test-trails',
        get_stylesheet_directory_uri() . '/trails.js',
        array(),
        '1.0.0',
        true
    );
    // booking.js (A6, A9, A11, A12)
    wp_enqueue_script(
        'myrehat-test-booking',
        get_stylesheet_directory_uri() . '/booking.js',
        array(),
        filemtime( get_stylesheet_directory() . '/booking.js' ),
        true
    );
}

// FIX B1: text-domain ditambahkan.
function myrehat_test_booking_title() {
    return esc_html__( 'Book a guided hike', 'myrehat-test' );
}

// FIX B2: nonce + unslash + sanitasi + validasi format tanggal.
add_action( 'template_redirect', 'myrehat_test_booking_handler' );
function myrehat_test_booking_handler() {
    if ( ! isset( $_POST['trails_booking'] ) ) {
        return;
    }
    if ( ! isset( $_POST['trails_booking_nonce'] )
        || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['trails_booking_nonce'] ) ), 'trails_booking_action' ) ) {
        wp_die( esc_html__( 'Invalid request.', 'myrehat-test' ), '', array( 'response' => 403 ) );
    }
    $date = isset( $_POST['date'] ) ? sanitize_text_field( wp_unslash( $_POST['date'] ) ) : '';
    if ( preg_match( '/^\d{4}-\d{2}-\d{2}$/', $date ) ) {
        set_transient( 'trails_last_booking', $date, HOUR_IN_SECONDS );
    }
}

// FIX B3: accepted_args diubah 1 -> 2 supaya $trail_id dan $count diterima.
add_action( 'myrehat_trail_viewed', 'myrehat_test_count_view', 10, 2 );
function myrehat_test_count_view( $trail_id, $count = 1 ) {
    $trail_id = absint( $trail_id );
    $count    = absint( $count );
    $key      = 'trail_views_' . $trail_id;
    $total    = (int) get_option( $key, 0 );
    update_option( $key, $total + $count );
}
