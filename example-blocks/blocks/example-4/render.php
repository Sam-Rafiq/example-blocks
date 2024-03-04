<?php 
/**
 * Render the example-4 block.
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
$class_name = 'example4';
if ( ! empty ( $block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if ( !empty($block['align'])) {
    $class_name .= ' align' .$block['align'];
}



?>
<div <?php echo $anchor; ?> class="<?php echo esc_attr ($class_name); ?>">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Libero sunt eius a rerum voluptatibus dolorem ut beatae explicabo qui et!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Libero sunt eius a rerum voluptatibus dolorem ut beatae explicabo qui et!
    </p>
</div>