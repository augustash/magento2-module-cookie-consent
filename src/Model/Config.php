<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Model;

use Augustash\CookieConsent\Api\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Configuration class.
 */
class Config implements ConfigInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Constructor.
     *
     * Initialize class dependencies.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

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
    ) {
        return $this->scopeConfig->getValue(
            $field,
            $scope,
            $scopeCode
        );
    }

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
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_ENABLED,
            $scope,
            $scopeCode
        );
    }

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
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_USE_TRANSITIONS,
            $scope,
            $scopeCode
        );
    }

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
    ): string {
        $position = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_POSITION,
            $scope,
            $scopeCode
        );

        return $position ?? 'bottom';
    }

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
    ): string {
        $layout = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_LAYOUT,
            $scope,
            $scopeCode
        );

        return $layout ?? 'block';
    }

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
    ): string {
        $type = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COMPLIANCE_TYPE,
            $scope,
            $scopeCode
        );

        return $type ?? 'info';
    }

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
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_MESSAGE,
            $scope,
            $scopeCode
        );
    }

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
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BUTTON_TEXT,
            $scope,
            $scopeCode
        );
    }

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
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_INCLUDE_LINK,
            $scope,
            $scopeCode
        );
    }

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
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_LINK_TEXT,
            $scope,
            $scopeCode
        );
    }

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
    ): ?int {
        $page = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_CMS_PAGE,
            $scope,
            $scopeCode
        );

        return ($page !== null && $page != 0) ? $page : null;
    }

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
    ): string {
        $name = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COOKIE_NAME,
            $scope,
            $scopeCode
        );

        return $name ?? 'cookieconsent_status';
    }

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
    ): string {
        $path = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COOKIE_PATH,
            $scope,
            $scopeCode
        );

        return $path ?? '/';
    }

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
    ): string {
        $domain = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COOKIE_DOMAIN,
            $scope,
            $scopeCode
        );

        return $domain ?? '';
    }

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
    ): int {
        $days = $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COOKIE_EXPIRY,
            $scope,
            $scopeCode
        );

        return ($days !== null && $days != 0) ? (int) $days : 365;
    }

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
    ): bool {
        return (bool) $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_COOKIE_SECURE,
            $scope,
            $scopeCode
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBannerColor(
        $scope = ScopeInterface::SCOPE_STORES,
        $scopeCode = null
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BANNER_COLOR,
            $scope,
            $scopeCode
        );
    }

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
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BANNER_TEXT_COLOR,
            $scope,
            $scopeCode
        );
    }

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
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BUTTON_COLOR,
            $scope,
            $scopeCode
        );
    }

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
    ): ?string {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COOKIE_CONSENT_BUTTON_TEXT_COLOR,
            $scope,
            $scopeCode
        );
    }
}
