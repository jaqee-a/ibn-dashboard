<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PaginationHelper {


    static function filterAndPaginate(Request $request, Builder $query) {
        if(!$request->query('paginate')) return $query->get();
        $term = $request->query('term');
        $page = $request->query('page');

        self::sortBy($request, $query);

        return self::paginate($request, $query);
    }


    private static function paginate(Request $request, Builder $query) {
        $per_page = 30;
        if($request->has('per_page')) {
            $per_page = $request->query('per_page');
        }
        return $query->paginate($per_page);
    }

    private static function sortBy(Request $request, Builder $query) {
        if($request->has('sort_by')){
            $sort_by = $request->query('sort_by');
            $ascending = $request->query('ascending') == 'true' ? 'asc' : 'desc';

            $query->orderBy($sort_by, $ascending);
        }
    }
}
