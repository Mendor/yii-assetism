<?php
/**
 * CAssetism class file.
 * Overrides beforeRender() method to register CSS and JS files for called view automatically.
 *
 * @author Mendor <mendor@yuuzukiyo.net>
 * @link https://github.com/Mendor/yii-assetism/
 * @copyright Copyright &copy; 2013 Mendor
 * @license http://www.wtfpl.net/
 */

class CAssetism extends CController
{

	protected $extensionCss = '.css';
	protected $extensionJs  = '.js';

	protected function beforeRender($view)
	{
		$viewBasename = $this->viewPath . DIRECTORY_SEPARATOR . $view;
		$fileCss = $viewBasename . $this->extensionCss;
		$fileJs  = $viewBasename . $this->extensionJs;
		$cs = Yii::app()->getClientScript();
		if (is_file($fileCss))
		{
			$assetUrl = Yii::app()->getAssetManager()->publish($fileCss);
			$cs->registerCssFile($assetUrl);
		}
		if (is_file($fileJs))
		{
			$assetUrl = Yii::app()->getAssetManager()->publish($fileJs);
		 	$cs->registerScriptFile($assetUrl);
		}
		return true;
	}
}
