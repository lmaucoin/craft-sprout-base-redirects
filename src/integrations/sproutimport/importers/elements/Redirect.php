<?php
/**
 * @link      https://sprout.barrelstrengthdesign.com/
 * @copyright Copyright (c) Barrel Strength Design LLC
 * @license   http://sprout.barrelstrengthdesign.com/license
 */

namespace barrelstrength\sproutbaseredirects\integrations\sproutimport\importers\elements;

use barrelstrength\sproutbaseimport\base\ElementImporter;
use barrelstrength\sproutbaseredirects\elements\Redirect as RedirectElement;

class Redirect extends ElementImporter
{
    /**
     * @inheritdoc
     */
    public function getModelName(): string
    {
        return RedirectElement::class;
    }

    /**
     * @param $model
     *
     * @return null
     */
    public function getFieldLayoutId($model)
    {
        return null;
    }
}