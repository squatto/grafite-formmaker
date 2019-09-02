<?php

namespace Grafite\FormMaker\Builders;

use Illuminate\Support\Str;

class AssetBuilder
{
    public function asset($paths, $pattern)
    {
        $assets = '';

        if (!empty($paths)) {
            foreach ($paths as $asset) {
                $assets .= str_replace('_asset_', $asset, $pattern);
            }
        }

        return $assets;
    }
}
