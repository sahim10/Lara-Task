<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        return Page::with('children')->whereNull('parent_id')->get();
    }

    public function store(Request $request)
    {
        return Page::create($request->validate([
            'parent_id' => 'nullable|exists:pages,id',
            'slug' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
        ]));
    }

    public function update(Request $request, Page $page)
    {
        $page->update($request->validate([
            'parent_id' => 'nullable|exists:pages,id',
            'slug' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
        ]));
        return $page;
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return response()->json(['message' => 'Page deleted']);
    }

    public function show($path)
    {
        $segments = explode('/', $path);
        $parent = null;
        $page = null;

        foreach ($segments as $slug) {
            $page = Page::where('slug', $slug)
                ->where('parent_id', $parent ? $parent->id : null)
                ->first();

            if (!$page) {
                abort(404);
            }
            $parent = $page;
        }

        return response()->json($page);
    }
}
