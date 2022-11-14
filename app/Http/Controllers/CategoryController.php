<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoryController extends AppBaseController
{
    /** @var CategoryRepository $categoryRepository*/
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /*$categories = $this->categoryRepository->all();

        return view('categories.index')->with('categories', $categories);*/
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        return view('categories.create', compact('categories'));
    }

    public function createCategory(Request $request)
    {
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        if($request->method()=='GET')
        {
            return view('create-category', compact('categories'));
        }
        if($request->method()=='POST')
        {
            $validator = $request->validate([
                'name'      => 'required',
                'slug'      => 'required|unique:categories',
                'parent_id' => 'nullable|numeric'
            ]);

            Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'parent_id' =>$request->parent_id
            ]);

            return redirect()->back()->with('success', 'Category has been created successfully.');
        }
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();

        $category = $this->categoryRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/categories.singular')]));

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error(__('messages.not_found', ['model' => __('models/categories.singular')]));

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);
        $categories = Category::where('id', $id)->orderby('id', 'desc')->get();

        if (empty($categories)) {
            Flash::error(__('messages.not_found', ['model' => __('models/categories.singular')]));

            return redirect(route('categories.index'));
        }

        

        //return view('categories.edit')->with('categories', $categories);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified Category in storage.
     *
     * @param int $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error(__('messages.not_found', ['model' => __('models/categories.singular')]));

            return redirect(route('categories.index'));
        }

        $category = $this->categoryRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/categories.singular')]));

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error(__('messages.not_found', ['model' => __('models/categories.singular')]));

            return redirect(route('categories.index'));
        }

        $this->categoryRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/categories.singular')]));

        return redirect(route('categories.index'));
    }
}
