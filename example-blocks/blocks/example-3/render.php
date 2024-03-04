<?php 
/**
 * Render the example-3 block.
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
$class_name = 'example3';
if ( ! empty ( $block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if ( !empty($block['align'])) {
    $class_name .= ' align' .$block['align'];
}

?>
<div <?php echo $anchor; ?> class="<?php echo esc_attr ($class_name); ?>">
    <div class="div1">
        <h2>This is content from Div 1</h2>
    </div>
    <div class="div2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, tempora.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, tempora.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, tempora.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, tempora.
    </div>
</div>