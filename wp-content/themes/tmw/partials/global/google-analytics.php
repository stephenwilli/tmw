<?php
    $gaCode = get_field('ga_code', 'option');
?>

<?php
    if ( $gaCode ) {
    echo esc_html($gaCode);
}
?>
