# WordPress Image helper class

## Usage
```php
<?php
use Onvardgmbh\WpImage;

$img = WpImage::find( $post_id );
?>
<img src="<?= $img->size( 'custom_size' ); ?>" alt="<?= $img->alt(); ?>">
```
