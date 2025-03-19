<?php

namespace Gloudemans\Shoppingcart\Contracts;

interface Discountable
{
    public function isDiscountable(): bool;
}
