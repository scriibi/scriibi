<?php

namespace App\Utils;

use Exception;

class Sanitize
{
    /**
     * Takes in a string value and removes slashes and converts
     * double slashes into single slashes
     * @param $value
     * @return false|string
     */
    public static function stripSlashes($value)
    {
        try
        {
            if(gettype($value) !== 'string')
            {
                throw new Exception('Invalid Data Type');
            }

            return stripslashes($value);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Takes in a string value and removes all null bytes and php
     * and html tags.
     * If there are allowed tags passed in they will be omitted
     * from removal
     * @param $value
     * @param null $allowedTags
     * @return false|string
     */
    public static function stripTags($value, $allowedTags = null)
    {
        try
        {
            $result = false;

            if(gettype($value) !== 'string')
            {
                throw new Exception('Invalid Data Type');
            }

            if(!is_null($allowedTags) && gettype($allowedTags) === 'string')
            {
                $result = strip_tags($value, $allowedTags);
            }
            else
            {
                $result = strip_tags($value);
            }
            return $result;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Takes in a string value and converts special html characters
     * into html entities
     * If a flag is provided its encoded using that or defaults to
     * encoding double and single quotes
     * Encoding type defaults to 'UTF-8' from PHP 5.4 and the default
     * is used here
     * @param $value
     * @param null $flag
     * @return false|string
     */
    public static function htmlSpecialChars($value, $flag = null)
    {
        try
        {
            $result = false;

            if(gettype($value) !== 'string')
            {
                throw new Exception('Invalid Data Type');
            }

            if(!is_null($flag))
            {
                $result = htmlspecialchars($value, $flag);
            }
            else
            {
                $result = htmlspecialchars($value, ENT_QUOTES);
            }
            return $result;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Similar to htmlSpecialChars but will convert all characters
     * which have HTML character entity equivalents
     * @param $value
     * @return false|string
     */
    public static function htmlEntities($value)
    {
        try
        {
            if(gettype($value) !== 'string')
            {
                throw new Exception('Invalid Data Type');
            }

            return htmlentities($value);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Takes in a string value and strips of leading and trailing
     * white spaces if no additional trim characters are passed
     * @param $value
     * @param null $chars
     * @return false|string
     */
    public static function trimChars($value, $chars = null)
    {
        try
        {
            $result = false;

            if(gettype($value) !== 'string')
            {
                throw new Exception('Invalid Data Type');
            }

            if(!is_null($chars) && gettype($chars) === 'string')
            {
                $result = trim($value, $chars);
            }
            else
            {
                $result = trim($value);
            }
            return $result;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Sanitize the value to a compliant email address format
     * @param $value
     * @return false|string
     */
    public static function sanitizeEmail($value)
    {
        try
        {
            return filter_var($value, FILTER_SANITIZE_EMAIL);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Remove all characters except letters, digits and
     * $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
     * @param $value
     * @return false|string
     */
    public static function sanitizeURL($value)
    {
        try
        {
            return filter_var($value, FILTER_SANITIZE_URL);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Equivalent to calling htmlspecialchars() with ENT_QUOTES flag
     * @param $value
     * @param null $options
     * @return false|string
     */
    public static function sanitizeFullSpecialChars($value, $options = null)
    {
        try
        {
            $result = false;

            if(!is_null($options))
            {
                if(gettype($options) === 'array' && !empty($options))
                {
                    $result = filter_var($value, FILTER_SANITIZE_FULL_SPECIAL_CHARS, $options);
                }
            }
            return filter_var($value, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * Strip tags, optionally strip or encode special characters
     * specified through the flags parameter
     * @param $value
     * @param null $options
     * @return false|string
     */
    public static function sanitizeString($value, $options = null)
    {
        try
        {
            $result = false;

            if(!is_null($options))
            {
                if((gettype($options) === 'array' && !empty($options)))
                {
                    $result = filter_var($value, FILTER_SANITIZE_STRING, $options);
                }
            }
            else
            {
                $result = filter_var($value, FILTER_SANITIZE_STRING);
            }
            return $result;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * @param $value
     * @return array|false|mixed
     */
    public static function sanitizeInteger($value)
    {
        try
        {
            return is_array($value) ?
                array_map([__CLASS__, __METHOD__], $value)
                : filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    /**
     * @param $value
     * @return array|false|mixed
     */
    public static function sanitizeFloatWithAllFlags($value)
    {
        try
        {
            return is_array($value) ?
                array_map([__CLASS__, __METHOD__], $value)
                : filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, array(
                    'flags' => FILTER_FLAG_ALLOW_FRACTION | FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_SCIENTIFIC
                ));
        }
        catch (Exception $e)
        {
            return false;
        }
    }
}

?>
