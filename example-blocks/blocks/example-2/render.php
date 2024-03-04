<?php 
/**
 * Render the example-2 block.
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
$class_name = 'example2';
if ( ! empty ( $block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if ( !empty($block['align'])) {
    $class_name .= ' align' .$block['align'];
}

?>
<div <?php echo $anchor; ?> class="<?php echo esc_attr ($class_name); ?>">
    <h2>This block has some style</h2>
    <p>A little more usefull</p>
</div>