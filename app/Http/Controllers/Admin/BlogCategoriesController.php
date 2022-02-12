<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCategory\BulkDestroyBlogCategory;
use App\Http\Requests\Admin\BlogCategory\DestroyBlogCategory;
use App\Http\Requests\Admin\BlogCategory\IndexBlogCategory;
use App\Http\Requests\Admin\BlogCategory\StoreBlogCategory;
use App\Http\Requests\Admin\BlogCategory\UpdateBlogCategory;
use App\Models\BlogCategory;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BlogCategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexBlogCategory $request
     * @return array|Factory|View
     */
    public function index(IndexBlogCategory $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(BlogCategory::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'user_id', 'blog_category_name', 'status'],

            // set columns to searchIn
            ['id', 'user_id', 'blog_category_name', 'status']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.blog-category.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.blog-category.create');

        return view('admin.blog-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlogCategory $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreBlogCategory $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the BlogCategory
        $blogCategory = BlogCategory::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/blog-categories'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/blog-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param BlogCategory $blogCategory
     * @throws AuthorizationException
     * @return void
     */
    public function show(BlogCategory $blogCategory)
    {
        $this->authorize('admin.blog-category.show', $blogCategory);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BlogCategory $blogCategory
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(BlogCategory $blogCategory)
    {
        $this->authorize('admin.blog-category.edit', $blogCategory);


        return view('admin.blog-category.edit', [
            'blogCategory' => $blogCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlogCategory $request
     * @param BlogCategory $blogCategory
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateBlogCategory $request, BlogCategory $blogCategory)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values BlogCategory
        $blogCategory->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/blog-categories'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/blog-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyBlogCategory $request
     * @param BlogCategory $blogCategory
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyBlogCategory $request, BlogCategory $blogCategory)
    {
        $blogCategory->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyBlogCategory $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyBlogCategory $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    BlogCategory::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
