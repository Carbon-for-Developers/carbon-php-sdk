<?php
/**
 * DataSourceType
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
 * DataSourceType Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class DataSourceType
{
    /**
     * Possible values of this enum
     */
    public const GOOGLE_CLOUD_STORAGE = 'GOOGLE_CLOUD_STORAGE';

    public const GOOGLE_DRIVE = 'GOOGLE_DRIVE';

    public const NOTION = 'NOTION';

    public const NOTION_DATABASE = 'NOTION_DATABASE';

    public const INTERCOM = 'INTERCOM';

    public const DROPBOX = 'DROPBOX';

    public const ONEDRIVE = 'ONEDRIVE';

    public const SHAREPOINT = 'SHAREPOINT';

    public const CONFLUENCE = 'CONFLUENCE';

    public const BOX = 'BOX';

    public const ZENDESK = 'ZENDESK';

    public const ZOTERO = 'ZOTERO';

    public const S3 = 'S3';

    public const AZURE_BLOB_STORAGE = 'AZURE_BLOB_STORAGE';

    public const GMAIL = 'GMAIL';

    public const OUTLOOK = 'OUTLOOK';

    public const SERVICENOW = 'SERVICENOW';

    public const TEXT = 'TEXT';

    public const CSV = 'CSV';

    public const TSV = 'TSV';

    public const PDF = 'PDF';

    public const DOCX = 'DOCX';

    public const PPTX = 'PPTX';

    public const XLSX = 'XLSX';

    public const XLSM = 'XLSM';

    public const MD = 'MD';

    public const RTF = 'RTF';

    public const JSON = 'JSON';

    public const HTML = 'HTML';

    public const RAW_TEXT = 'RAW_TEXT';

    public const WEB_SCRAPE = 'WEB_SCRAPE';

    public const RSS_FEED = 'RSS_FEED';

    public const FRESHDESK = 'FRESHDESK';

    public const GITBOOK = 'GITBOOK';

    public const SALESFORCE = 'SALESFORCE';

    public const GITHUB = 'GITHUB';

    public const SLACK = 'SLACK';

    public const GURU = 'GURU';

    public const GONG = 'GONG';

    public const JPG = 'JPG';

    public const PNG = 'PNG';

    public const JPEG = 'JPEG';

    public const MP3 = 'MP3';

    public const MP2 = 'MP2';

    public const AAC = 'AAC';

    public const WAV = 'WAV';

    public const FLAC = 'FLAC';

    public const PCM = 'PCM';

    public const M4_A = 'M4A';

    public const OGG = 'OGG';

    public const OPUS = 'OPUS';

    public const MPEG = 'MPEG';

    public const MPG = 'MPG';

    public const MP4 = 'MP4';

    public const WMV = 'WMV';

    public const AVI = 'AVI';

    public const MOV = 'MOV';

    public const MKV = 'MKV';

    public const FLV = 'FLV';

    public const WEBM = 'WEBM';

    public const EML = 'EML';

    public const MSG = 'MSG';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GOOGLE_CLOUD_STORAGE,
            self::GOOGLE_DRIVE,
            self::NOTION,
            self::NOTION_DATABASE,
            self::INTERCOM,
            self::DROPBOX,
            self::ONEDRIVE,
            self::SHAREPOINT,
            self::CONFLUENCE,
            self::BOX,
            self::ZENDESK,
            self::ZOTERO,
            self::S3,
            self::AZURE_BLOB_STORAGE,
            self::GMAIL,
            self::OUTLOOK,
            self::SERVICENOW,
            self::TEXT,
            self::CSV,
            self::TSV,
            self::PDF,
            self::DOCX,
            self::PPTX,
            self::XLSX,
            self::XLSM,
            self::MD,
            self::RTF,
            self::JSON,
            self::HTML,
            self::RAW_TEXT,
            self::WEB_SCRAPE,
            self::RSS_FEED,
            self::FRESHDESK,
            self::GITBOOK,
            self::SALESFORCE,
            self::GITHUB,
            self::SLACK,
            self::GURU,
            self::GONG,
            self::JPG,
            self::PNG,
            self::JPEG,
            self::MP3,
            self::MP2,
            self::AAC,
            self::WAV,
            self::FLAC,
            self::PCM,
            self::M4_A,
            self::OGG,
            self::OPUS,
            self::MPEG,
            self::MPG,
            self::MP4,
            self::WMV,
            self::AVI,
            self::MOV,
            self::MKV,
            self::FLV,
            self::WEBM,
            self::EML,
            self::MSG
        ];
    }
}


