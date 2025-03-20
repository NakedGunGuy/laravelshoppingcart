<?php

namespace Gloudemans\Shoppingcart\Traits;

class CanBeDiscounted
{
    public function isDiscountable(): bool
    {
        return true; // Default behavior, can be overridden in the model
    }
}