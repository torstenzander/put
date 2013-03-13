<?php
namespace Put\Framework;

use Put\Framework\AssertionFailedException;
use Put\Framework\TypeCast;

class Assert
{
    /**
     * @param string $message
     * @throws AssertionFailedException
     */
    public static function fail($message)
    {
        throw new AssertionFailedException($message);
    }

    /**
     * @param string $expectedObject
     * @param string $expectedValue
     * @throws AssertionFailedException
     */
    public static function assertEquals($expected, $actual, $message = null)
    {
        if ($expected == $actual) {
            return;
        }
        self::failNotEquals($expected, $actual, $message);
    }

    /**
     * @param string $expectedObject
     * @param string $expectedValue
     * @param null $message
     */
    public static function failNotEquals($expected, $actual, $message = null)
    {
        /**
         * @todo DI-symfony Framework. How to inject. Or just static.
         */
        $typeCast = new TypeCast();
        self::fail(self::format($typeCast->castToString($expected), $typeCast->castToString($actual), $message));
    }

    /**
     * @param string $expectedObject
     * @param string $expectedValue
     * @param null $message
     * @return string
     */
    public static function format($expectedObject, $expectedValue, $message = null)
    {
        $formattedString = "";
        if (!is_null($message)) {
            $formattedString = $message . " ";
        }
        return $formattedString . 'expected: <' . $expectedObject . "> but was <" . $expectedValue . ">";
    }
}
