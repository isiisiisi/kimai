<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Export\Package\CellFormatter;

final class TimeFormatter implements CellFormatterInterface
{
    public function formatValue(mixed $value): mixed
    {
        if ($value instanceof \DateTimeInterface) {
            return $value->format('H:i');
        }

        if ($value === null) {
            return null;
        }

        throw new \InvalidArgumentException('Only DateTimeInterface can be formatted');
    }
}
