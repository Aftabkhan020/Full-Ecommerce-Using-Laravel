<?php



Route::get('/', function () {return view('pages.index');});
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
//categories
Route::get('admin/categories', 'Admin\Category\categoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\categoryController@storecategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\Category\categoryController@Deletecategory');
Route::get('edit/category/{id}', 'Admin\Category\categoryController@Editcategory');
Route::post('update/category/{id}', 'Admin\Category\categoryController@Updatecategory');


//Brands

Route::get('admin/brands', 'Admin\Category\BrandController@brand')->name('brands');
Route::post('admin/store/brand', 'Admin\Category\BrandController@storebrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\Category\BrandController@DeleteBrand');
Route::get('edit/brand/{id}', 'Admin\Category\BrandController@EditBrand');
Route::post('update/brand/{id}', 'Admin\Category\BrandController@UpdateBrand');

//Sub category

Route::get('admin/sub/category', 'Admin\Category\SubCategoryController@subcategories')->name('sub.categories');
Route::post('admin/store/subcat', 'Admin\Category\SubCategoryController@storesubcat')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\Category\SubCategoryController@DeleteSubcat');
Route::get('edit/subcategory/{id}', 'Admin\Category\SubCategoryController@EditSubcat');
Route::post('update/subcategory/{id}', 'Admin\Category\SubCategoryController@UpdateSubcat');


//Coupons All
Route::get('admin/sub/coupon', 'Admin\Category\CouponController@Coupon')->name('admin.coupon');
Route::post('admin/store/coupon', 'Admin\Category\CouponController@StoreCoupon')->name('store.coupon');
Route::get('delete/coupon/{id}', 'Admin\Category\couponController@Deletecoupon');
Route::get('edit/coupon/{id}', 'Admin\Category\CouponController@EditCoupon');
Route::post('update/coupon/{id}', 'Admin\Category\CouponController@UpdateCoupon');

//Newslater
Route::get('admin/newslater', 'Admin\Category\CouponController@Newslater')->name('admin.newslater');
Route::get('delete/sub/{id}', 'Admin\Category\CouponController@DeleteSub');

//Show subcategory with Ajax
Route::get('get/subcategory/{category_id}', 'Admin\productController@Getsubcat');






//All product
Route::get('admin/product/all', 'Admin\productController@index')->name('all.product');
Route::get('admin/product/add', 'Admin\productController@create')->name('add.product');
Route::post('admin/store/product', 'Admin\productController@store')->name('store.product');
Route::get('inactive/product/{id}', 'Admin\ProductController@inactive');
Route::get('active/product/{id}', 'Admin\ProductController@active');
Route::get('delete/product/{id}', 'Admin\ProductController@Deleteproduct');
Route::get('view/product/{id}', 'Admin\ProductController@ViewProduct');
Route::get('edit/product/{id}', 'Admin\ProductController@EditProduct');
Route::post('update/product/withoutphoto/{id}', 'Admin\ProductController@UpdateproductWithoutPhoto');
//BLOG
Route::get('blog/category/list', 'Admin\postController@logCatList')->name('add.blog.categorylist');
//Route::get('admin/product/add', 'Admin\productController@create')->name('add.product');
Route::post('admin/store/blog', 'Admin\postController@BlogCatStore')->name('store.blog.category');
Route::get('delete/Blogcategory/{id}', 'Admin\PostController@DeleteBlogCat');
Route::get('edit/blogcategory/{id}', 'Admin\PostController@Editblogcat');
Route::post('update/blog/category/{id}', 'Admin\PostController@UpdateBlogCat');
Route::get('blog/add/post', 'Admin\postController@Create')->name('add.blogpost');
Route::get('blog/all/post', 'Admin\postController@index')->name('all.blogpost');
Route::post('admin/store/post', 'Admin\postController@store')->name('store.post');
Route::get('delete/post/{id}', 'Admin\PostController@DeleteBlogpost');
Route::get('edit/post/{id}', 'Admin\PostController@Editpost');
Route::post('update/post/{id}', 'Admin\PostController@Updatepost');

//Fronted All Routes
Route::post('store/newslater', 'FrontController@StoreNewslater')->name('store.newslater');
Route::get('Essentialoil', 'FrontController@viewEssential')->name('Essentialoil');
Route::get('Hydrosols', 'FrontController@viewHydrosols')->name('Hydrosols');





