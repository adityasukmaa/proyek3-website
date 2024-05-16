<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $searchResults = Search::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->get();

        return view('search.results', compact('searchResults'));
    }
}
