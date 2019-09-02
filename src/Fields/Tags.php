<?php

namespace Grafite\FormMaker\Fields;

use Grafite\FormMaker\Fields\Field;

class Tags extends Field
{
    protected static function getJavaScriptAssets()
    {
        return [
            url('form-maker-asset/tags.js')
        ];
    }

    protected static function getCssAssets()
    {
        return [
            url('form-maker-asset/tags.css')
        ];
    }

    protected static function getAttributes()
    {
        return [
            'class' => 'formmaker-tags'
        ];
    }

    protected static function getType()
    {
        return 'text';
    }
}
