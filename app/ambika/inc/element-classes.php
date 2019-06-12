<?php
/**
 * Builds filterable classes throughout the theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'ambika_right_sidebar_class' ) ) {
	/**
	 * Display the classes for the sidebar.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_right_sidebar_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_right_sidebar_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_right_sidebar_class' ) ) {
	/**
	 * Retrieve the classes for the sidebar.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_right_sidebar_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_right_sidebar_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_left_sidebar_class' ) ) {
	/**
	 * Display the classes for the sidebar.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_left_sidebar_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_left_sidebar_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_left_sidebar_class' ) ) {
	/**
	 * Retrieve the classes for the sidebar.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_left_sidebar_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_left_sidebar_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_content_class' ) ) {
	/**
	 * Display the classes for the content.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_content_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_content_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_content_class' ) ) {
	/**
	 * Retrieve the classes for the content.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_content_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_content_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_header_class' ) ) {
	/**
	 * Display the classes for the header.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_header_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_header_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_header_class' ) ) {
	/**
	 * Retrieve the classes for the content.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_header_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_header_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_inside_header_class' ) ) {
	/**
	 * Display the classes for inside the header.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_inside_header_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_inside_header_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_inside_header_class' ) ) {
	/**
	 * Retrieve the classes for inside the header.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_inside_header_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_inside_header_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_container_class' ) ) {
	/**
	 * Display the classes for the container.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_container_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_container_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_container_class' ) ) {
	/**
	 * Retrieve the classes for the content.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_container_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_container_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_navigation_class' ) ) {
	/**
	 * Display the classes for the navigation.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_navigation_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_navigation_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_navigation_class' ) ) {
	/**
	 * Retrieve the classes for the navigation.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_navigation_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_navigation_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_inside_navigation_class' ) ) {
	/**
	 * Display the classes for the inner navigation.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_inside_navigation_class( $class = '' ) {
		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		$return = apply_filters('ambika_inside_navigation_class', $classes, $class);

		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', $return ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_menu_class' ) ) {
	/**
	 * Display the classes for the navigation.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_menu_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_menu_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_menu_class' ) ) {
	/**
	 * Retrieve the classes for the navigation.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_menu_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_menu_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_main_class' ) ) {
	/**
	 * Display the classes for the <main> container.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_main_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_main_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_main_class' ) ) {
	/**
	 * Retrieve the classes for the footer.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_main_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_main_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_footer_class' ) ) {
	/**
	 * Display the classes for the footer.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_footer_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', ambika_get_footer_class( $class ) ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_get_footer_class' ) ) {
	/**
	 * Retrieve the classes for the footer.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 * @return array Array of classes.
	 */
	function ambika_get_footer_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('ambika_footer_class', $classes, $class);
	}
}

if ( ! function_exists( 'ambika_inside_footer_class' ) ) {
	/**
	 * Display the classes for the footer.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_inside_footer_class( $class = '' ) {
		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		$return = apply_filters( 'ambika_inside_footer_class', $classes, $class );

		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', $return ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}

if ( ! function_exists( 'ambika_top_bar_class' ) ) {
	/**
	 * Display the classes for the top bar.
	 *
	 * @param string|array $class One or more classes to add to the class list.
	 */
	function ambika_top_bar_class( $class = '' ) {
		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		$return = apply_filters( 'ambika_top_bar_class', $classes, $class );

		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . join( ' ', $return ) . '"'; // WPCS: XSS ok, sanitization ok.
	}
}
