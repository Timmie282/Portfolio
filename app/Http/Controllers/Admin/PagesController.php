<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageValidatorRequest;
use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::all();
        return view('admin.pages.index')->with('pages', $pages);
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(PageValidatorRequest $request)
    {
        if ($files = $request->image) {
            $destinationPath = 'images';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }
        else {
            return redirect()->back()->with('warning', 'Mislukt');
        }

        Pages::create([
            'pages_title' => $request->titel,
            'pages_format' => $request->page_format,
            'pages_info' => $request->content_inhoud,
            'pages_img' => $profileImage,
            'pages_slug' => $request->Slug,
            'pages_nav' => $request->nav_format,
        ]);

        return redirect()
            ->route('admin.pages.index');
    }

    public function show($slug)
    {

    }

    public function edit($slug)
    {

    }

    public function update($slug)
    {

    }

    public function delete($slug)
    {

    }
}
