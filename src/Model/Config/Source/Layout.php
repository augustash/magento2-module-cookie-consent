<?php

/**
 * Cookie Consent Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

namespace Augustash\CookieConsent\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Banner layout class.
 * @api
 */
class Layout implements OptionSourceInterface
{
    /**
     * Return array of options as value-label pairs.
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'block',
                'label' => __('Block')
            ],
            [
                'value' => 'classic',
                'label' => __('Classic')
            ],
            [
                'value' => 'edgeless',
                'label' => __('Edgeless')
            ],
        ];
    }

    /**
     * Get options in "key-value" format.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'block' => __('Block'),
            'classic' => __('Classic'),
            'edgeless' => __('Edgeless'),
        ];
    }
}
