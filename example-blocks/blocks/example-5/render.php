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
$class_name = 'example5';
if ( ! empty ( $block['className'])) {
    $class_name .= ' ' . $block['className'];
}

if ( !empty($block['align'])) {
    $class_name .= ' align' .$block['align'];
}

// Get acf field to display
$employee_name = get_field('employee_name') ?: 'Employee Name';
$employee_position = get_field('employee_position') ?: 'Employee Postion';
$text_color = get_field('text_color');

?>
<div <?php echo $anchor; ?> class="<?php echo esc_attr ($class_name); ?>">
    <h2 style="color:<?php echo esc_attr($text_color); ?>;"><?php echo esc_attr($employee_name); ?></h2>
    <h3><?php echo esc_attr($employee_position) ; ?></h3>
</div>