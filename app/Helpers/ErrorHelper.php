<?php

namespace App\Helpers;

class ErrorHelper {
    const UNAUTHORIZED               = "UNAUTHORIZED";
    const WRONG_USERNAME_OR_PASSWORD = "WRONG_USERNAME_OR_PASSWORD";
    const UNEXPECTED_ERROR           = "UNEXPECTED_ERROR";
    const ITEM_NOT_FOUND             = "ITEM_NOT_FOUND";
    const BRAND_NOT_FOUND            = "BRAND_NOT_FOUND";
    const VARIANT_NOT_FOUND          = "VARIANT_NOT_FOUND";
    const CATEGORY_NOT_FOUND         = "CATEGORY_NOT_FOUND";
    const IMAGE_NOT_FOUND            = "IMAGE_NOT_FOUND";
    const USER_NOT_FOUND             = "USER_NOT_FOUND";
    const NO_PROUDUCTS_IN_BUNDLE     = "NO_PROUDUCTS_IN_BUNDLE";
    const VALIDATION_ERROR           = "VALIDATION_ERROR";



    public static function getMessage($error): string {
        switch($error) {
            case ErrorHelper::UNAUTHORIZED:
                return "Unauthorized";
            case ErrorHelper::WRONG_USERNAME_OR_PASSWORD:
                return "Wrong username or password";
            case ErrorHelper::UNEXPECTED_ERROR:
                return "Unexpected error";
            case ErrorHelper::ITEM_NOT_FOUND:
                return "Item not found";
            case ErrorHelper::BRAND_NOT_FOUND:
                return "Brand not found";
            case ErrorHelper::IMAGE_NOT_FOUND:
                return "Image not found";
            case ErrorHelper::USER_NOT_FOUND:
                return "User not found";
            case ErrorHelper::NO_PROUDUCTS_IN_BUNDLE:
                return "Bundle should at least contain one product";
            case ErrorHelper::CATEGORY_NOT_FOUND:
                return "Category not found";
            case ErrorHelper::VARIANT_NOT_FOUND:
                return "Variant not found";
        }
        return "Unknown Error";
    }
}
