<?php 
/**
 * Render the example-7 block.
 * 
 * @packase vgsblock
 */

 //var_dump( $block );

 // Support for the anchor variable
$anchor = '';
if ( ! empty( $block ['anchor'])) {
    $anchor = 'id="'  . esc_attr( $block['anchor'] ) . '" ' ; 
}

// Support for the class variable
$class_name = 'example7';
if ( ! empty ( $block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if ( !empty($block['align'])) {
    $class_name .= ' align' .$block['align'];
}

// Get acf field to display
$hours = get_field('hours');


?>
<div <?php echo $anchor; ?> class="<?php echo esc_attr ($class_name); ?>">
    <div class="repeater-row">
        <?php

            // Check rows exists.
            if( have_rows('hours') ):

             // Loop through rows.
            while( have_rows('hours') ) : the_row(); 
        ?>
        <div class="sr-col">
            <span>
                <?php  
                    $image = get_sub_field('image');
                    echo wp_get_attachment_image( $image, 'full' ); 
                    ?>
            </span>
            <span>
                <?php  
                    $day = get_sub_field('day');
                    echo esc_attr($day); 
                    ?>
            </span>
            <span>
                <?php 
                    $open_time = get_sub_field('open_time');
                    echo esc_attr($open_time); 
                    ?>
            </span>
            <span>
                <?php $close_time = get_sub_field('close_time'); 
                    echo esc_attr($close_time); 
                    ?>
            </span>
        </div>
        <?php 
    // End loop.
    endwhile;

// No value.
else :
endif; ?>
    </div>
</div>