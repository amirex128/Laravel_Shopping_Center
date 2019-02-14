<?php
	
	namespace App\Http\Controllers\Admin;
	
	use App\Category;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class CategoryController extends Controller
	{
		
		public function index()
		{
			$categories=Category::all();
			$page_categories=Category::latest()->paginate(15);
			return view('admin.page.category.index' ,compact(['categories','page_categories']) );
		}
		
		public function store(request $request)
		{
			
			$request->validate([
				'name-category' => 'required',
				'sub-categories' => 'required',
			]);
			
			Category::create([
				'title' => $request->input('name-category') ,
				'parent' => $request->input('sub-categories') ,
			]);
			
			return back()->with('success','دسته بندی مورد نظر با موفقیت ایجاد شد');
		}
		
		public function destroy(Category $category)
		{
			$category->delete();
			return back()->with('destroy','دسته بندی مورد نظر با موفقیت حذف شد');
			
		}
		
	}
