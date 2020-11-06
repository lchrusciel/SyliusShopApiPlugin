<?php

declare(strict_types=1);

namespace Sylius\ShopApiPlugin\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

final class ProductEligibility extends Constraint
{
    /** @var string */
    public $message = 'sylius.shop_api.product.eligibility';

    /** {@inheritdoc} */
    public function getTargets()
    {
        return self::PROPERTY_CONSTRAINT;
    }

    /** {@inheritdoc} */
    public function validatedBy()
    {
        return 'sylius_shop_api_product_eligibility_validator';
    }
}