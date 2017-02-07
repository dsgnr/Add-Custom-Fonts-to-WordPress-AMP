<?php
add_action( 'amp_post_template_head', 'xyz_amp_add_head' );
function xyz_amp_add_head( $amp_template ) {
?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:700">
<?php } ?>
