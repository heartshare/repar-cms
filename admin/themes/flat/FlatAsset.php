<?php
/**
 * @link http://www.56hm.com/repar
 * @copyright Copyright (c) 2014 56hm LLC
 * @license http://www.56hm.com/repar/license
 */

namespace themes\flat;

use yii\web\AssetBundle;

/**
 * 
 *
 * @author Repar <47558328@qq.com>
 * @since  1.0
 */
class FlatAsset extends AssetBundle {

	public $sourcePath = '@themes/flat/dist';

	public $css = [
        
        'css/repar.min.css',
        'css/theme-blue.css'
	];

}