<?php
/**
 * @link https://github.com/gromver/yii2-cmf.git#readme
 * @copyright Copyright (c) Gayazov Roman, 2014
 * @license https://github.com/gromver/yii2-grom/blob/master/LICENSE
 * @package yii2-cmf
 * @version 1.0.0
 */

namespace gromver\platform\common\interfaces;

/**
 * Interface TranslatableInterface
 * @package yii2-cmf
 * @author Gayazov Roman <gromver5@gmail.com>
 */
interface TranslatableInterface {
    /**
     * @return static[]
     */
    public function getTranslations();

    /**
     * @return string
     */
    public function getLanguage();
}