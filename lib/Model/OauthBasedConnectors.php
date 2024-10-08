<?php
/**
 * OauthBasedConnectors
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Carbon
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * Carbon
 *
 * Connect external data to LLMs, no matter the source.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Carbon\Model;
use \Carbon\ObjectSerializer;

/**
 * OauthBasedConnectors Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class OauthBasedConnectors
{
    /**
     * Possible values of this enum
     */
    public const BOX = 'BOX';

    public const CONFLUENCE = 'CONFLUENCE';

    public const DROPBOX = 'DROPBOX';

    public const GMAIL = 'GMAIL';

    public const GOOGLE_DRIVE = 'GOOGLE_DRIVE';

    public const GOOGLE_CLOUD_STORAGE = 'GOOGLE_CLOUD_STORAGE';

    public const INTERCOM = 'INTERCOM';

    public const NOTION = 'NOTION';

    public const ONEDRIVE = 'ONEDRIVE';

    public const OUTLOOK = 'OUTLOOK';

    public const SALESFORCE = 'SALESFORCE';

    public const SHAREPOINT = 'SHAREPOINT';

    public const SLACK = 'SLACK';

    public const ZENDESK = 'ZENDESK';

    public const ZOTERO = 'ZOTERO';

    public const GONG = 'GONG';

    public const SERVICENOW = 'SERVICENOW';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOX,
            self::CONFLUENCE,
            self::DROPBOX,
            self::GMAIL,
            self::GOOGLE_DRIVE,
            self::GOOGLE_CLOUD_STORAGE,
            self::INTERCOM,
            self::NOTION,
            self::ONEDRIVE,
            self::OUTLOOK,
            self::SALESFORCE,
            self::SHAREPOINT,
            self::SLACK,
            self::ZENDESK,
            self::ZOTERO,
            self::GONG,
            self::SERVICENOW
        ];
    }
}


