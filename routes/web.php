<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * -----------------------------------------------------------------------------------------------------------
 * Customer Routes
 * -----------------------------------------------------------------------------------------------------------
 */

/*===============================
 * Customer Login register Routes
================================*/
Auth::routes(['verify' => true]);

//Social login Routes
Route::get('/login/{provider}', 'Auth\SocialController@redirect')->name('customer.social.login');
Route::get('/login/callback/{provider}', 'Auth\SocialController@callback');

//Customer Password Change Routes
Route::get('/change/password', 'Auth\PasswordController@index')->name('change.password');
Route::post('/password/update', 'Auth\PasswordController@Update')->name('change.password.update');

/*============================
 * Customer Dashboard Routes
=============================*/
Route::prefix('customer')->group(function () {
    Route::get('/dashboard', 'Customer\CustomerController@dashboard')->name('home');
    Route::get('/my-account', 'Customer\CustomerController@account')->name('customer.account');
    Route::get('/billing-address', 'Customer\CustomerController@billing')->name('customer.billing.address');

    //Orders Routes
    Route::get('/orders/all', 'Customer\OrderController@NewOrder')->name('customer.new.order');
    Route::get('/orders/complete', 'Customer\OrderController@CompleteOrder')->name('customer.complete.order');

    //Profile Routes
    Route::get('/profile', 'Customer\CustomerController@show')->name('customer.profile');
    Route::post('/profile/update/{id}', 'Customer\CustomerController@update')->name('customer.profile.update');

    //Single View Order
    Route::get('/order/details/view/{id}', 'Customer\CustomerController@view')->name('customer.order.view');
});

/*
 * -----------------------------------------------------------------------------------------------------------
 * Front-end Routes
 * -----------------------------------------------------------------------------------------------------------
 */

//Homepage Routes
Route::get('/', 'Frontend\HomeController@index')->name('site_url');

//Experience Page Routes
Route::get('/experience', 'Frontend\ShopPageController@index')->name('shop.page');

//Blog page Routes
Route::get('/blog', 'Frontend\BlogPageController@index')->name('blog.page');
Route::get('/blog/{slug}/{rand}', 'Frontend\BlogPageController@view')->name('single.blog.page');
Route::get('/blog/category/{name}/{id}', 'Frontend\BlogPageController@taxonomy')->name('blog.category.page');

//Contact Page Routes
Route::get('/contact', 'Frontend\PagesController@contact')->name('contact.page');
Route::post('/contact', 'Frontend\PagesController@mail')->name('contact.mail');

//About Page Routes
Route::get('/about', 'Frontend\PagesController@about')->name('about.page');

//Single Experience View Routes
Route::get('/experience/{slug}/{ran}', 'Frontend\ShopPageController@view')->name('single.experience.view');

//Newsletters Routes
Route::post('/newsletter/store', 'Frontend\PagesController@store')->name('newsletter.store');

//Winner Page Routes
Route::get('/winners', 'Frontend\WinnerController@index')->name('winner.page');
Route::get('/winners/{slug}/{ran}', 'Frontend\WinnerController@view')->name('single.winner.page');

//terms & conditions Page Route
Route::get('/terms-conditions', 'Frontend\PagesController@terms')->name('terms.page');
//Privacy Policy Page Route
Route::get('/privacy-policy', 'Frontend\PagesController@privacy')->name('privacy.page');
//Roles Page Route
Route::get('/exo-official-roles', 'Frontend\PagesController@roles')->name('roles.page');
//enter without any fee routes
Route::get('/enter-without-any-fee/{rand}/{id}', 'Frontend\PagesController@FreeEnter')->name('enter.without.fee');
Route::post('/enter-without-any-fee/{rand}/{id}', 'Frontend\PagesController@FreeOrder')->name('free.entry.order');

//================
//Cart Page Routes
//================
Route::get('/cart', 'Frontend\CartPageController@index')->name('cart.page');

//Add to cart routes
Route::get('/experience/add/cart/{id}', 'Frontend\CartPageController@Cart')->name('products.add.cart');
//cart remove routes
Route::get('/cart/remove/{id}', 'Frontend\CartPageController@Delete')->name('cart.remove');
Route::get('/cart/remove/all', 'Frontend\CartPageController@AllDelete')->name('all.cart.remove');

//====================
//Checkout Page Routes
//====================
Route::get('/checkout', 'Frontend\CheckoutController@show')->name('checkout.page');
Route::post('/checkout/order', 'Frontend\CheckoutController@Order')->name('order.page');
Route::get('/checkout/payment', 'Frontend\CheckoutController@PaymentShow')->name('order.payment.page');
Route::post('/checkout/payment', 'Frontend\CheckoutController@Payment')->name('order.payment');
//Stripe Routes
Route::get('/checkout/stripe/payment', 'Frontend\PaymentController@getStripeCheckout')->name('stripe.payment.page');
Route::post('/checkout/stripe/payment', 'Frontend\PaymentController@getStripeSuccess')->name('stripe.payment.success');
//Paypal routes
Route::get('/checkout/paypal/payment', 'Frontend\PaymentController@getExpressCheckout')->name('paypal.payment.page');
Route::get('/checkout/payment/success', 'Frontend\PaymentController@getExpressCheckoutSuccess')->name('paypal.payment.success');
Route::get('/checkout/payment-cancel', 'Frontend\PaymentController@getExpressCheckoutCancel')->name('paypal.payment.cancel');
//Coupon Routes
Route::post('/apply/coupon', 'Frontend\CouponController@Coupon')->name('apply.coupon');
Route::get('/remove/coupon', 'Frontend\CouponController@Remove')->name('remove.coupon');

//OrderConfirm Page Route
Route::get('/order/confirm/'.md5('confirm-your-order'), 'Frontend\CheckoutController@Confirm')->name('order.confirm.page');
Route::get('/order/confirm/free/'.md5('confirm-your-order-free'), 'Frontend\PagesController@ConfirmFree')->name('free.order.confirm.page');

//====================
//Taxonomy Page Routes
//====================
Route::get('/experience/{slug}', 'Frontend\TaxonomyController@Category')->name('category.taxonomy');


/*
 * ----------------------------------------------------------------------------------------------------------
 * admin Routes
 * ----------------------------------------------------------------------------------------------------------
 */

Route::prefix('admin')->group(function (){
    Route::get('/', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login.form');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login');

    //Admin Logout
    Route::get('/logout', 'Admin\AdminController@logout')->name('admin.logout');

    //Password Reset Route
    Route::get('/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');


    Route::get('/password/confirm', 'Admin\Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
    Route::post('/password/confirm', 'Admin\Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm.post');

    //Change Password Route
    Route::get('/change/password', 'Admin\Auth\PasswordController@index')->name('admin.change.password');
    Route::post('/password/update', 'Admin\Auth\PasswordController@Update')->name('admin.change.password.update');

    //your-profile routes
    Route::get('/user/profile/edit', 'Admin\Auth\ProfileController@edit')->name('admin.profile.edit');
    Route::post('/user/profile/update', 'Admin\Auth\ProfileController@update')->name('admin.profile.update');

    /*====================================================================================
     * Admin Dashboard Page Routes
     =====================================================================================*/
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');


    /*===================================
     * Winner Page Routes start
     ====================================*/
    Route::get('/winners/all', 'Admin\Winner\WinnerController@index')->name('admin.winner');
    Route::get('/winners/add-new', 'Admin\Winner\WinnerController@show')->name('admin.winner.add.new');
    Route::post('/winner/store', 'Admin\Winner\WinnerController@store')->name('admin.winner.store');
    Route::get('/winner/edit/{id}', 'Admin\Winner\WinnerController@edit')->name('admin.winner.edit');
    Route::post('/winner/update/{id}', 'Admin\Winner\WinnerController@update')->name('admin.winner.update');
    Route::get('/winner/delete/{id}', 'Admin\Winner\WinnerController@delete')->name('admin.winner.delete');

    /*===============================
     * E-commerce Page Routes start
     ===============================*/
    //e-commerce dashboard Routes
    Route::get('/ecommerce/dashboard', 'Admin\Ecommerce\DashboardController@show')->name('admin.ecommerce.dashboard');

    /*===============================
     * E-commerce Orders Routes start
     ===============================*/
    Route::get('/ecommerce/orders', 'Admin\Order\OrderController@AllOrders')->name('admin.all.orders');

    Route::get('/orders/processing', 'Admin\Order\OrderController@ProcessingOrders')->name('admin.processing.orders');

    Route::get('/orders/free/all', 'Admin\Order\OrderController@FreeOrders')->name('admin.free.orders');
    Route::get('/orders/approve/{id}', 'Admin\Order\OrderController@ApproveOrder')->name('admin.approve.order');
    Route::get('/orders/free/edit/{id}', 'Admin\Order\OrderController@EditFree')->name('admin.free.edit.order');

    Route::get('/orders/complete', 'Admin\Order\OrderController@CompleteOrders')->name('admin.complete.orders');

    Route::get('/orders/on-hold', 'Admin\Order\OrderController@HoldOrders')->name('admin.hold.orders');
    Route::get('/orders/on-hold/{id}', 'Admin\Order\OrderController@HoldOrder')->name('admin.hold.order');

    Route::get('/orders/edit/{id}', 'Admin\Order\OrderController@EditOrder')->name('admin.edit.orders');
    Route::get('/orders/delete/{id}', 'Admin\Order\OrderController@DeleteOrder')->name('admin.delete.order');

    /*==============================
     * Admin Experience Routes start
     ==============================*/

    //Experience Category Routes
    Route::get('/experience/category', 'Admin\Experience\CategoryController@index')->name('admin.category');
    Route::post('/experience/category/store', 'Admin\Experience\CategoryController@store')->name('admin.category.store');
    Route::get('/experience/category/edit/{id}', 'Admin\Experience\CategoryController@edit')->name('admin.category.edit');
    Route::post('/experience/category/update/{id}', 'Admin\Experience\CategoryController@update')->name('admin.category.update');
    Route::get('/experience/category/delete/{id}', 'Admin\Experience\CategoryController@delete')->name('admin.category.delete');

    //Experience Charity Routes
    Route::get('/experience/charity', 'Admin\Experience\CharityController@index')->name('admin.charity');
    Route::post('/experience/charity/store', 'Admin\Experience\CharityController@store')->name('admin.charity.store');
    Route::get('/experience/charity/edit/{id}', 'Admin\Experience\CharityController@edit')->name('admin.charity.edit');
    Route::post('/experience/charity/update/{id}', 'Admin\Experience\CharityController@update')->name('admin.charity.update');
    Route::get('/experience/charity/delete/{id}', 'Admin\Experience\CharityController@delete')->name('admin.charity.delete');

    //Experience Entry Coupon Routes
    Route::get('/coupon', 'Admin\Coupon\CouponController@index')->name('admin.coupon');
    Route::post('/coupon/store', 'Admin\Coupon\CouponController@store')->name('admin.coupon.store');
    Route::get('/coupon/edit/{id}', 'Admin\Coupon\CouponController@edit')->name('admin.coupon.edit');
    Route::post('/coupon/update/{id}', 'Admin\Coupon\CouponController@update')->name('admin.coupon.update');
    Route::get('/coupon/delete/{id}', 'Admin\Coupon\CouponController@delete')->name('admin.coupon.delete');

    //Experience Routes
    Route::get('/experience', 'Admin\Experience\ProductController@index')->name('admin.experience');
    Route::get('/experience/add-new', 'Admin\Experience\ProductController@showForm')->name('admin.experience.add.new');
    Route::post('/experience/store', 'Admin\Experience\ProductController@store')->name('admin.experience.store');
    Route::get('/experience/edit/{id}', 'Admin\Experience\ProductController@edit')->name('admin.experience.edit');
    Route::post('/experience/update/{id}', 'Admin\Experience\ProductController@update')->name('admin.experience.update');
    Route::get('/experience/view/{id}', 'Admin\Experience\ProductController@view')->name('admin.experience.view');
    Route::get('/experience/delete/{id}', 'Admin\Experience\ProductController@delete')->name('admin.experience.delete');

    //Experience Active-Inactive Routes
    Route::get('/experience/active/{id}', 'Admin\Experience\ProductController@Active')->name('admin.experience.active');
    Route::get('/experience/inactive/{id}', 'Admin\Experience\ProductController@Inactive')->name('admin.experience.inactive');

    //Entry Level Routes
    Route::get('/entry/level', 'Admin\Experience\EntryController@index')->name('admin.entry');
    Route::get('/entry/level/add-new', 'Admin\Experience\EntryController@show')->name('admin.entry.add.new');
    Route::post('/entry/level/store', 'Admin\Experience\EntryController@store')->name('admin.entry.store');
    Route::get('/entry/level/edit/{id}', 'Admin\Experience\EntryController@edit')->name('admin.entry.edit');
    Route::post('/entry/level/edit/{id}', 'Admin\Experience\EntryController@update')->name('admin.entry.update');
    Route::get('/entry/level/delete/{id}', 'Admin\Experience\EntryController@delete')->name('admin.entry.delete');
    //Entry Active-Inactive Routes
    Route::get('/entry/active/{id}', 'Admin\Experience\EntryController@Active')->name('admin.entry.active');
    Route::get('/entry/inactive/{id}', 'Admin\Experience\EntryController@Inactive')->name('admin.entry.inactive');

    /*==============================
     * Drawn Page Routes start
     ===============================*/
    Route::get('/drawn/pending', 'Admin\Drawn\DrawnController@pending')->name('admin.drawn.pending');
    Route::get('/drawn/complete', 'Admin\Drawn\DrawnController@complete')->name('admin.drawn.complete');
    Route::get('/drawn/invoice/{id}', 'Admin\Drawn\DrawnController@invoice')->name('admin.drawn.invoice');
    Route::get('/drawn/winner/view/{id}', 'Admin\Drawn\DrawnController@view')->name('admin.drawn.winner');
    Route::get('/drawn/result/{id}', 'Admin\Drawn\DrawnController@result')->name('admin.drawn.result');

    /*=============================
     * Admin Blog post Routes start
     =============================*/

    //Post Category Routes
    Route::get('/blog/category', 'Admin\Post\PostCategoryController@index')->name('admin.post.category');
    Route::post('/blog/category/store', 'Admin\Post\PostCategoryController@store')->name('admin.post.category.store');
    Route::get('/blog/category/edit/{id}', 'Admin\Post\PostCategoryController@edit')->name('admin.post.category.edit');
    Route::post('/blog/category/update/{id}', 'Admin\Post\PostCategoryController@update')->name('admin.post.category.update');
    Route::get('/blog/category/delete/{id}', 'Admin\Post\PostCategoryController@delete')->name('admin.post.category.delete');


    //Post Tags Routes
    Route::get('/blog/tags', 'Admin\Post\PostTagController@index')->name('admin.post.tag');
    Route::post('/blog/tags/store', 'Admin\Post\PostTagController@store')->name('admin.post.tag.store');
    Route::get('/blog/tags/edit/{id}', 'Admin\Post\PostTagController@edit')->name('admin.post.tag.edit');
    Route::post('/blog/tags/update/{id}', 'Admin\Post\PostTagController@update')->name('admin.post.tag.update');
    Route::get('/blog/tags/delete/{id}', 'Admin\Post\PostTagController@delete')->name('admin.post.tag.delete');

    //Blog Post Routes
    Route::get('/blog', 'Admin\Post\PostController@index')->name('admin.post');
    Route::get('/blog/add-new', 'Admin\Post\PostController@showProductForm')->name('admin.post.add.new');
    Route::post('/blog/store', 'Admin\Post\PostController@store')->name('admin.post.store');
    Route::get('/blog/edit/{id}', 'Admin\Post\PostController@edit')->name('admin.post.edit');
    Route::post('/blog/update/{id}', 'Admin\Post\PostController@update')->name('admin.post.update');
    Route::get('/blog/delete/{id}', 'Admin\Post\PostController@delete')->name('admin.post.delete');

    //Blog Post Active-Inactive Routes
    Route::get('/blog/active/{id}', 'Admin\Post\PostController@Active')->name('admin.post.active');
    Route::get('/blog/inactive/{id}', 'Admin\Post\PostController@Inactive')->name('admin.post.inactive');


    /*==============================
     * Theme Panel Page Routes start
     ===============================*/
    //Header panel route
    Route::get('/theme/panel/header', 'Admin\Settings\ThemePanelController@HeaderShow')->name('admin.theme.header');
    Route::post('/theme/panel/header/update/{id}', 'Admin\Settings\ThemePanelController@HeaderUpdate')->name('admin.theme.header.update');
    //Footer panel route
    Route::get('/theme/panel/footer', 'Admin\Settings\ThemePanelController@FooterShow')->name('admin.theme.footer');
    Route::post('/theme/panel/footer/update/{id}', 'Admin\Settings\ThemePanelController@FooterUpdate')->name('admin.theme.footer.update');
    //Banner panel route
    Route::get('/theme/panel/banner', 'Admin\Settings\ThemePanelController@index')->name('admin.theme.banner');
    Route::get('/theme/panel/banner/add-new', 'Admin\Settings\ThemePanelController@BannerForm')->name('admin.theme.banner.add.new');
    Route::post('/theme/panel/banner/store', 'Admin\Settings\ThemePanelController@store')->name('admin.theme.banner.store');
    Route::get('/theme/panel/banner/edit/{id}', 'Admin\Settings\ThemePanelController@edit')->name('admin.theme.banner.edit');
    Route::post('/theme/panel/banner/update/{id}', 'Admin\Settings\ThemePanelController@update')->name('admin.theme.banner.update');
    Route::get('/theme/panel/banner/active/{id}', 'Admin\Settings\ThemePanelController@active')->name('admin.theme.banner.active');
    Route::get('/theme/panel/banner/deactivate/{id}', 'Admin\Settings\ThemePanelController@deactivate')->name('admin.theme.banner.deactivate');
    Route::get('/theme/panel/banner/delete/{id}', 'Admin\Settings\ThemePanelController@delete')->name('admin.theme.banner.delete');
    Route::get('/theme/panel/menu', 'Admin\Settings\ThemePanelController@menu')->name('admin.theme.menu');
    Route::get('/theme/panel/menu-link', 'Admin\Settings\ThemePanelController@menuLink')->name('admin.theme.menu.link');
    Route::post('/theme/panel/header/menu/{id}', 'Admin\Settings\ThemePanelController@HeaderMenu')->name('admin.header.menu');
    Route::post('/theme/panel/menu-link/{id}', 'Admin\Settings\ThemePanelController@MenuLinkUpdate')->name('admin.menu.link');
    Route::post('/theme/panel/footer/menu/{id}', 'Admin\Settings\ThemePanelController@FooterMenu')->name('admin.footer.menu');

    /*==================================
     * Theme Panel All Page Routes start
     ===================================*/
    //Homepage panel routes
    Route::get('/pages/panel/home', 'Admin\Pages\PagesController@Homepage')->name('admin.page.home');
    Route::post('/pages/panel/offer/update/{id}', 'Admin\Pages\PagesController@OfferUpdate')->name('admin.page.offer.update');
    Route::post('/pages/panel/experience/update/{id}', 'Admin\Pages\PagesController@ExpUpdate')->name('admin.page.exp.update');
    Route::post('/pages/panel/why-us/update/{id}', 'Admin\Pages\PagesController@WhyUpdate')->name('admin.page.whyus.update');
    Route::post('/pages/panel/work/update/{id}', 'Admin\Pages\PagesController@WorkUpdate')->name('admin.page.work.update');
    Route::post('/pages/panel/winner/update/{id}', 'Admin\Pages\PagesController@WinnerUpdate')->name('admin.page.winner.update');
    //Contact panel routes
    Route::get('/pages/panel/contact', 'Admin\Pages\PagesController@Contact')->name('admin.page.contact');
    Route::post('/pages/panel/contact/update/{id}', 'Admin\Pages\PagesController@ContactUpdate')->name('admin.page.contact.update');
    //About panel routes
    Route::get('/pages/panel/about', 'Admin\Pages\PagesController@About')->name('admin.page.about');
    Route::post('/pages/panel/about/update/{id}', 'Admin\Pages\PagesController@AboutUpdate')->name('admin.page.about.update');
    //Privacy panel routes
    Route::get('/pages/panel/privacy', 'Admin\Pages\PagesController@privacy')->name('admin.page.privacy');
    Route::post('/pages/panel/privacy/{id}', 'Admin\Pages\PagesController@privacyupdate')->name('admin.page.privacy.update');

    //Roles panel routes
    Route::get('/pages/panel/roles', 'Admin\Pages\PagesController@roles')->name('admin.page.roles');
    Route::post('/pages/panel/roles/{id}', 'Admin\Pages\PagesController@rolesupdate')->name('admin.page.roles.update');
    //Terms & Conditions panel routes
    Route::get('/pages/panel/terms', 'Admin\Pages\PagesController@terms')->name('admin.page.terms');
    Route::post('/pages/panel/terms/{id}', 'Admin\Pages\PagesController@termsupdate')->name('admin.page.terms.update');

    /*====================================
     * Admin Add and Show Page Routes start
     =====================================*/
    Route::get('/user/all', 'Admin\Auth\AdminManageController@show')->name('admin.user');
    Route::get('/user/add-new', 'Admin\Auth\AdminManageController@showAdminForm')->name('admin.user.add.new');
    Route::post('/user/store', 'Admin\Auth\AdminManageController@store')->name('admin.user.store');
    Route::get('/user/edit/{id}', 'Admin\Auth\AdminManageController@edit')->name('admin.user.edit');
    Route::post('/user/update/{id}/{r_id}', 'Admin\Auth\AdminManageController@update')->name('admin.user.update');
    Route::get('/user/delete/{id}/{r_id}', 'Admin\Auth\AdminManageController@delete')->name('admin.user.delete');


    /*=============================
     * Settings Routes start
     =============================*/
    //SEO Meta Data Routes
    Route::get('/settings/seo', 'Admin\Tools\SeoController@show')->name('admin.tools.seo');
    Route::post('/settings/seo/update/{id}', 'Admin\Tools\SeoController@update')->name('admin.tools.seo.update');

    //Newsletters Routes
    Route::get('/settings/newsletters', 'Admin\Newsletter\NewslettersController@index')->name('admin.newsletters');
    Route::get('/settings/newsletters/delete/{id}', 'Admin\Newsletter\NewslettersController@delete')->name('admin.newsletter.delete');
    Route::get('settings/newsletters/export', 'Admin\Newsletter\NewslettersController@Export')->name('admin.newsletter.export');

    //cache clear route
    Route::get('settings/cache-clear', 'Admin\Tools\SeoController@cacheClear')->name('admin.cache.clear');


    /*=============================
     * Settings Routes start
     =============================*/

    /*
     * -----------------------------
     * File manager Routes
     * -----------------------------
     */

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth:admin']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});
