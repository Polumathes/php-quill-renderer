<?php
declare(strict_types=1);

namespace DBlackborough\Quill;

/**
 * Custom settings for the parser
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/php-quill-renderer/blob/master/LICENSE
 */
class Settings
{
    private static $ignored_attributes = [];

    /**
     * Set any attributes which you would like the parser to ignore, specifically
     * the compound delta
     *
     * @param array $attributes
     */
    static public function setIgnoredAttributes(array $attributes)
    {
        self::$ignored_attributes = $attributes;
    }

    /**
     * Return the ignore attributes
     *
     * @return array
     */
    static public function ignoredAttributes(): array
    {
        return self::$ignored_attributes;
    }
}
