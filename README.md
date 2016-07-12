# WordPress Image helper class

## General Usage
```php
<?php
use Onvardgmbh\WpImage;

$img = WpImage::find( $post_id );
?>
<img src="<?= $img->size( 'custom_size' ); ?>" alt="<?= $img->alt(); ?>">
```

## API
### `WpImage::find( int|WP_POST|null $post )`
**Returns:** New `WpImage`-object

#### Parameters:
- `$post`: Post ID of an image

### `size( string $size = 'full' )`
**Returns:** URL of the image, scaled and/or cropped to the specified size

#### Parameters:
- `$size`: Image size name; One of the built-in "thumbnail", "small", "medium",
  "full", or custom size registered with [`add_image_size`][1]

### `alt()`
**Returns:** Alt text for the image

### `caption()`
**Returns:** Caption for the image

### `description()`
**Returns:** Description for the image

### `permalink()`
**Returns:** Permalink for the image

### `title()`
**Returns:** Title text for the image


[1]: https://developer.wordpress.org/reference/functions/add_image_size/
