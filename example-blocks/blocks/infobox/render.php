<?php 
/**
 * Render the example-5 block.
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
$class_name = 'sr-infobox';
if ( ! empty ( $block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if ( ! empty($block['align'])) {
    $class_name .= ' align' .$block['align'];
}

// Get acf field to display
$image = get_field('image');
$title = get_field('title');
$content = get_field('content');
$text_color = get_field('text_color');
$link = get_field('link');
$link_text_color = get_field('link_text_color');
$background_color = get_field('background_color');
?>
<div <?php echo $anchor; ?> class="<?php echo esc_attr ($class_name); ?>"
    style="background-color:<?php echo esc_attr($background_color); ?>">
    <img class="infobox-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <h2 style="color:<?php echo esc_attr($text_color); ?>"><?php echo esc_attr($title); ?></h2>
    <p style="color:<?php echo esc_attr($text_color); ?>"><?php echo esc_attr($content); ?></p>
    <a class="sr-button" href="<?php echo esc_url( $link ); ?>"
        style="color:<?php echo esc_attr($link_text_color); ?>;">Lees meer</a>
</div>