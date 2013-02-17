yii-assetism
============

A small addition to CController to auto-include CSS and JS files for called view.

To use just copy **components/CAssetism.php** to **components** directory of your application and update its **Controller.php** to extend ``Controller`` class from ``CAssetism`` one, e.g.:

```php
class Controller extends CAssetism
{
    // class source code
}
```

Licensed under [WTFPL](http://www.wtfpl.net/).
