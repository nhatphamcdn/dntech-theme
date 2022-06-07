<?php

/**
 * Custom walker class.
 */
class MainMenu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
        $classes = array(
            'dropdown-menu m-0',
        );
        $class_names = implode(' ', $classes);

        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // Passed classes.
        $class_names = in_array("current_page_item", $item->classes) || in_array("current_page_parent", $item->classes) ? 'active ' : '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names_item = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );

        // Build HTML.
        $classLi = '';
        if ($args->walker->has_children) {
            $classLi .= ' class="nav-item dropdown"';
        }

        $output .= $indent . '<li' .$classLi.'>';

        // Link attributes.
        $classReset = $class_names . $class_names_item .' ';
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="' . $classReset . ($depth > 0 ? 'dropdown-item' : 'nav-item nav-link') . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );

        // Build HTML.
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
