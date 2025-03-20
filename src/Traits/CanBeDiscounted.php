<?php

namespace Gloudemans\Shoppingcart\Traits;

class CanBeDiscounted
{
    public function isDiscountable(): bool
    {
        return $this->getAttribute('is_discountable');
    }
}