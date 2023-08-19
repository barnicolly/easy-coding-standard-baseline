<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void
{
    $baselineErrors = [];
    $skipSettings = [];

    foreach ($baselineErrors as $filename => $errors) {
        foreach ($errors as $error) {
            if (isset($skipSettings[$error])) {
                $skipSettings[$error][] = $filename;
            } else {
                $skipSettings[$error] = [$filename];
            }
        }
    }

    $ecsConfig->skip($skipSettings);
};
