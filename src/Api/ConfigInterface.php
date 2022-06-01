<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Api;

use Magento\Store\Model\ScopeInterface;

/**
 * Service interface responsible for exposing configuration options.
 * @api
 */
interface ConfigInterface
{
    /**
     * Configuration constants.
     */
    public const XML_PATH_COOKIE_CONSENT_ENABLED = 'cookie_consent/general/enabled';
    public const XML_PATH_COOKIE_CONSENT_USE_TRANSITIONS = 'cookie_consent/general/use_transition';
    public const XML_PATH_COOKIE_CONSENT_POSITION = 'cookie_consent/general/position';
    public const XML_PATH_COOKIE_CONSENT_LAYOUT = 'cookie_consent/general/layout';
    public const XML_PATH_COOKIE_CONSENT_COMPLIANCE_TYPE = 'cookie_consent/general/compliance_type';
    public const XML_PATH_COOKIE_CONSENT_MESSAGE = 'cookie_consent/custom_text/message';
    public const XML_PATH_COOKIE_CONSENT_BUTTON_TEXT = 'cookie_consent/custom_text/button_text';
    public const XML_PATH_COOKIE_CONSENT_INCLUDE_LINK = 'cookie_consent/custom_text/include_link';
    public const XML_PATH_COOKIE_CONSENT_LINK_TEXT = 'cookie_consent/custom_text/link_text';
    public const XML_PATH_COOKIE_CONSENT_CMS_PAGE = 'cookie_consent/custom_text/cms_page';
    public const XML_PATH_COOKIE_CONSENT_COOKIE_NAME = 'cookie_consent/cookie/name';
    public const XML_PATH_COOKIE_CONSENT_COOKIE_PATH = 'cookie_consent/cookie/path';
    public const XML_PATH_COOKIE_CONSENT_COOKIE_DOMAIN = 'cookie_consent/cookie/domain';
    public const XML_PATH_COOKIE_CONSENT_COOKIE_EXPIRY = 'cookie_consent/cookie/expiry';
    public const XML_PATH_COOKIE_CONSENT_COOKIE_SECURE = 'cookie_consent/cookie/secure';
    public const XML_PATH_COOKIE_CONSENT_BANNER_COLOR = 'cookie_consent/theme/banner_color';
    public const XML_PATH_COOKIE_CONSENT_BANNER_TEXT_COLOR = 'cookie_consent/theme/banner_text_color';
    public const XML_PATH_COOKIE_CONSENT_BUTTON_COLOR = 'cookie_consent/theme/button_color';
    public const XML_PATH_COOKIE_CONSENT_BUTTON_TEXT_COLOR = 'cookie_consent/theme/button_text_color';

    /**
     * Retrieves the module's config value for specified field.
     *
     * @param string $field
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return mixed
     */
    public function getConfigValue(
        string $field,
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    );

    /**
     * Retrieves the module's enabled status.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return bool
     */
    public function isEnabled(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool;

    /**
     * Retrieves the module's use transition status.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return bool
     */
    public function hasTransition(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool;

    /**
     * Returns the configured position value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getPosition(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured layout value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getLayout(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured compliance type value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getComplianceType(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured message value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getMessage(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured button text value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getButtonText(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Retrieves the module's show link status.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return bool
     */
    public function showLink(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool;

    /**
     * Returns the configured link text value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getLinkText(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured CMS page ID value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return int|null
     */
    public function getCmsPage(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?int;

    /**
     * Returns the configured cookie name value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getCookieName(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured cookie path value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getCookiePath(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured cookie domain value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string
     */
    public function getCookieDomain(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): string;

    /**
     * Returns the configured cookie expiry in days value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return int
     */
    public function getCookieExpiry(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): int;

    /**
     * Returns the configured cookie secure value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return bool
     */
    public function isCookieSecure(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): bool;

    /**
     * Returns the configured banner color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getBannerColor(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured banner text color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getBannerTextColor(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured button color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getButtonColor(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;

    /**
     * Returns the configured button text color value.
     *
     * @param string $scope
     * @param null|string|\Magento\Store\Model\Store $scopeCode
     * @return string|null
     */
    public function getButtonTextColor(
        string $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string;
}
