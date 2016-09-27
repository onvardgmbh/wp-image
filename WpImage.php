<?php
namespace Onvardgmbh;

/**
 * Wordpress Image helper class
 */
class WpImage {
	public $image;
	public static function find( $id ) {
		$image = new WpImage();
		$image->image = get_post( $id );
		return $image;
	}

	public function size( $size = 'full' ) {
		if ( $this->image === null ) {
			return '';
		}
		return wp_get_attachment_image_src( $this->image->ID, $size, false )[0];
	}

	public function alt() {
		if ( $this->image === null ) {
			return '';
		}
		return get_post_meta( $this->image->ID, '_wp_attachment_image_alt', true );
	}

	public function caption() {
		if ( $this->image === null ) {
			return '';
		}
		return $this->image->post_excerpt;
	}

	public function description() {
		if ( $this->image === null ) {
			return '';
		}
		return $this->image->post_content;
	}

	public function permalink() {
		if ( $this->image === null ) {
			return '';
		}
		return get_permalink( $this->image->ID );
	}

	public function title() {
		if ( $this->image === null ) {
			return '';
		}
		return $this->image->post_title;
	}
}
