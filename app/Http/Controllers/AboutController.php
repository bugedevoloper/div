<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $models = About::all();
        return view('index', compact('models'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(StoreAboutRequest $request)
    {
        $requestedData = $request->validated();

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $requestedData['image'] = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('/admin/abouts'), $requestedData['image']);

        }

        About::create($requestedData);

        return redirect('/about')->with('flash', 'You successfully created the blog !');
    }
    public function show(About $about)
    {
        return view('show', ['model' => $about]);
    }
    public function edit(About $about)
    {
        return view('edit', ['model' => $about]);
    }
    public function update(Request $request, About $about)
    {

        $requestedData = $request->all();

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $about->deleteImage();

            $requestedData['image'] = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path(About::IMAGE_PATH), $requestedData['image']);

        }

        $about->update($requestedData);

        return redirect('/about');
    }
    public function destroy(About $about)
    {
        $about->deleteImage();

        $about->delete();

        return redirect('/about')->with('alert', 'You have deleted the blog !');
    }

}
