<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/gtfs-realtime.proto3

namespace Google\Transit\Realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An internationalized message containing per-language versions of a snippet of
 * text or a URL.
 * One of the strings from a message will be picked up. The resolution proceeds
 * as follows:
 * 1. If the UI language matches the language code of a translation,
 *    the first matching translation is picked.
 * 2. If a default UI language (e.g., English) matches the language code of a
 *    translation, the first matching translation is picked.
 * 3. If some translation has an unspecified language code, that translation is
 *    picked.
 *
 * Generated from protobuf message <code>Google.Transit.Realtime.TranslatedString</code>
 */
class TranslatedString extends \Google\Protobuf\Internal\Message
{
    /**
     * At least one translation must be provided.
     *
     * Generated from protobuf field <code>repeated .Google.Transit.Realtime.TranslatedString.Translation translation = 1;</code>
     */
    private $translation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Transit\Realtime\TranslatedString\Translation[]|\Google\Protobuf\Internal\RepeatedField $translation
     *           At least one translation must be provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * At least one translation must be provided.
     *
     * Generated from protobuf field <code>repeated .Google.Transit.Realtime.TranslatedString.Translation translation = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * At least one translation must be provided.
     *
     * Generated from protobuf field <code>repeated .Google.Transit.Realtime.TranslatedString.Translation translation = 1;</code>
     * @param \Google\Transit\Realtime\TranslatedString\Translation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranslation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Transit\Realtime\TranslatedString\Translation::class);
        $this->translation = $arr;

        return $this;
    }

}

