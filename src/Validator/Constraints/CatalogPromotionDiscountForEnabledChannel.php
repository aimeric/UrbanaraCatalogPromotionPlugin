<?php

namespace Acme\SyliusCatalogPromotionPlugin\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

final class CatalogPromotionDiscountForEnabledChannel extends Constraint
{
    /**
     * @var string
     */
    public $message = 'acme_sylius_catalog_promotion.catalog_promotion.configuration.discounts.cannot_be_empty_for_enabled_channel';

    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return [self::CLASS_CONSTRAINT];
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'acme_sylius_catalog_promotion_discount_for_enabled_channel_validator';
    }
}