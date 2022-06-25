<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest; 
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Show blog lists
     * 
     * @return view
     */
    public function showList() {
        $blogs = Blog::all();

        return view('blog.list', ['blogs' => $blogs]);
    }

    /**
     * Show blog detail
     * 
     * @param int $id
     * @return view
     */
    public function showDetail($id) {
        if (filter_var($id, FILTER_VALIDATE_INT) == false) {
            return abort(404);
        }

        $blog = Blog::find($id);

        if (is_null($blog)) {
            \Session::flash('err_msg', 'Data not found.');
            return redirect(route('blogs'));
        }

        return view('blog.detail', ['blog' => $blog]);
    }

    /**
     * Show blog create
     * 
     * @return view
     */
    public function showCreate() {
        return view('blog.form');
    }

    /**
     * Create blog
     * 
     * @return view
     */
    public function exeStore(BlogRequest $request) {
        // Get form data
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Blog::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('success_msg', 'Blog successfully posted.');

        return redirect(route('blogs'));
    }

    /**
     * Show blog edit
     * 
     * @param int $id
     * @return view
     */
    public function showEdit($id) {
        if (filter_var($id, FILTER_VALIDATE_INT) == false) {
            return abort(404);
        }

        $blog = Blog::find($id);

        if (is_null($blog)) {
            \Session::flash('err_msg', 'Data not found.');
            return redirect(route('blogs'));
        }

        return view('blog.edit', ['blog' => $blog]);
    }

    /**
     * Update blog
     * 
     * @return view
     */
    public function exeUpdate(BlogRequest $request) {
        // Get form data
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // Update blog
            $blog = Blog::find($inputs['id']);
            $blog->fill([
                'title'   => $inputs['title'],
                'content' => $inputs['content']
            ]);
            $blog->save();
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('success_msg', 'Blog successfully updated.');

        return redirect(route('blogs'));
    }

    /**
     * Update blog
     * 
     * @return view
     */
    public function exeDelete($id) {
        if (filter_var($id, FILTER_VALIDATE_INT) == false) {
            return abort(404);
        }
        
        /**
        *\DB::beginTransaction();
        *try {
        *    // Update blog
        *    $blog = Blog::find($inputs['id']);
        *    $blog->fill([
        *        'title'   => $inputs['title'],
        *        'content' => $inputs['content']
        *    ]);
        *    $blog->save();
        *    \DB::commit();
        *} catch(\Throwable $e) {
        *    \DB::rollback();
        *    abort(500);
        *}
        *\Session::flash('success_msg', 'Blog successfully deleted.');
        */

        return redirect(route('blogs'));
    }

}
