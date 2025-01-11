<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/cloudquotas/v1beta/resources.proto

namespace Google\Cloud\CloudQuotas\V1beta\QuotaConfig;

use UnexpectedValueException;

/**
 * The enumeration of the origins of quota preference requests.
 *
 * Protobuf type <code>google.api.cloudquotas.v1beta.QuotaConfig.Origin</code>
 */
class Origin
{
    /**
     * The unspecified value.
     *
     * Generated from protobuf enum <code>ORIGIN_UNSPECIFIED = 0;</code>
     */
    const ORIGIN_UNSPECIFIED = 0;
    /**
     * Created through Cloud Console.
     *
     * Generated from protobuf enum <code>CLOUD_CONSOLE = 1;</code>
     */
    const CLOUD_CONSOLE = 1;
    /**
     * Generated by automatic quota adjustment.
     *
     * Generated from protobuf enum <code>AUTO_ADJUSTER = 2;</code>
     */
    const AUTO_ADJUSTER = 2;

    private static $valueToName = [
        self::ORIGIN_UNSPECIFIED => 'ORIGIN_UNSPECIFIED',
        self::CLOUD_CONSOLE => 'CLOUD_CONSOLE',
        self::AUTO_ADJUSTER => 'AUTO_ADJUSTER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


