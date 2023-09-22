<?php

namespace App\Helpers;

use App\Models\Core\Brand;
use App\Models\Core\Category;
use App\Models\Core\Image;
use App\Models\Core\Shop;
use App\Models\Core\User;

class AuthorizationHelper {

    public static function isAuthorizedShop(User $user, int $shop_id) {
        $all_shops_id = $user->shop_admins->map(function($item) {
            return $item->shop_id;
        });
        return $all_shops_id->has($shop_id) || $user->isPlatformAdmin;
    }

    public static function getAuthorizedShop(User $user) {
        if($user->isPlatformAdmin) {
            return Shop::query()->where('platform_id', $user->platform_id)->get()->map(function(Shop $shop) {
                return $shop->id;
            });
        }
        $all_shops_id = $user->shop_admins->map(function($item) {
            return $item->shop_id;
        });

        return $all_shops_id;
    }

    public static function isAuthorizedBrand(User $user, int $brand_id): bool {
        $brand = Brand::query()->where([
            ['platform_id', $user->platform_id],
            ['id', $brand_id]
        ])->first();

        return !is_null($brand);
    }

    public static function isAuthorizedCategory(User $user, int $category_id): bool {
        $brand = Category::query()->where([
            ['platform_id', $user->platform_id],
            ['id', $category_id]
        ])->first();

        return !is_null($brand);
    }

    public static function isAuthorizedImage(User $user, int $image_id): bool {
        $image = Image::query()->where([
            ['id', $image_id],
            ['platform_id', $user->platform_id]
        ])->first();

        return !is_null($image);
    }
}
