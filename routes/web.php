<?php

use Illuminate\Support\Facades\Route;

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
Route::get('lang/change', [App\Http\Controllers\LangController::class, 'change'])->name('changeLang');
Route::get('home/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('payments/razorpay/createorder', [App\Http\Controllers\RazorPayController::class, 'createOrderid']);
Route::post('payments/getpaytmchecksum', [App\Http\Controllers\PaymentController::class, 'getPaytmChecksum']);
Route::post('payments/validatechecksum', [App\Http\Controllers\PaymentController::class, 'validateChecksum']);
Route::post('payments/initiatepaytmpayment', [App\Http\Controllers\PaymentController::class, 'initiatePaytmPayment']);
Route::get('payments/paytmpaymentcallback', [App\Http\Controllers\PaymentController::class, 'paytmPaymentcallback']);
Route::post('payments/paypalclientid', [App\Http\Controllers\PaymentController::class, 'getPaypalClienttoken']);

Route::post('payments/paypaltransaction', [App\Http\Controllers\PaymentController::class, 'createBraintreePayment']);
Route::post('payments/stripepaymentintent', [App\Http\Controllers\PaymentController::class, 'createStripePaymentIntent']);

Route::get('termsAndConditions', [App\Http\Controllers\TermsAndConditionsController::class, 'index']);
Auth::routes();
/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('welcome');*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/statistics', [App\Http\Controllers\HomeController::class, 'index'])->name('statistics');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurants');
Route::get('/restaurants/edit/{id}', [App\Http\Controllers\RestaurantController::class, 'edit'])->name('restaurants.edit');
Route::get('/restaurants/view/{id}', [App\Http\Controllers\RestaurantController::class, 'view'])->name('restaurants.view');
/*Route::get('/restaurants/payout/{id}', [App\Http\Controllers\RestaurantsPayoutController::class, 'index'])->name('restaurants.payout'); */

Route::get('/coupon/{id}', [App\Http\Controllers\CouponController::class, 'index'])->name('restaurants.coupons');
Route::get('/foods/{id}', [App\Http\Controllers\FoodController::class, 'index'])->name('restaurants.foods');

Route::get('/food/create/{id}', [App\Http\Controllers\FoodController::class, 'create']);
Route::get('/coupon/create/{id}', [App\Http\Controllers\CouponController::class, 'create']);


Route::get('/orders/{id}', [App\Http\Controllers\OrderController::class, 'index'])->name('restaurants.orders');
Route::get('/reviews/{id}', [App\Http\Controllers\OrderReviewController::class, 'index'])->name('restaurants.reviews');
Route::get('/restaurants/promos/{id}', [App\Http\Controllers\RestaurantController::class, 'promos'])->name('restaurants.promos');

Route::get('/restaurantsPayout/{id}', [App\Http\Controllers\RestaurantsPayoutController::class, 'index'])->name('restaurants.payout');
Route::get('/restaurantsPayouts/create/{id}', [App\Http\Controllers\RestaurantsPayoutController::class, 'create']);


Route::get('/coupons/create/{id}', [App\Http\Controllers\CouponController::class, 'create']);

Route::get('/restaurants/create', [App\Http\Controllers\RestaurantController::class, 'create'])->name('restaurants.create');

Route::get('/restaurantFilters', [App\Http\Controllers\RestaurantFiltersController::class, 'index'])->name('restaurantFilters');
Route::get('/restaurantFilters/create', [App\Http\Controllers\RestaurantFiltersController::class, 'create'])->name('restaurantFilters.create');
Route::get('/restaurantFilters/edit/{id}', [App\Http\Controllers\RestaurantFiltersController::class, 'edit'])->name('restaurantFilters.edit');


Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::get('/users/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('users.profile');
Route::post('/users/profile/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.profile.update');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::get('/users/area_admin', [App\Http\Controllers\UserController::class, 'area_admin_index'])->name('users.area_admin');
Route::get('/users/area_admin/create', [App\Http\Controllers\UserController::class, 'area_admin_create'])->name('users.area_admin.create');
Route::post('/users/area_admin/store', [App\Http\Controllers\UserController::class, 'area_admin_store'])->name('users.area_admin.store');
Route::get('/users/area_admin/edit/{id}', [App\Http\Controllers\UserController::class, 'area_admin_edit'])->name('users.area_admin.edit');
Route::post('/users/area_admin/update/{id}', [App\Http\Controllers\UserController::class, 'area_admin_update'])->name('users.area_admin.update');
Route::get('/users/area_admin/delete/{id}', [App\Http\Controllers\UserController::class, 'area_admin_delete'])->name('users.area_admin.delete');

Route::get('/foods', [App\Http\Controllers\FoodController::class, 'index'])->name('foods');
Route::get('/foods/edit/{id}', [App\Http\Controllers\FoodController::class, 'edit'])->name('foods.edit');
Route::get('/food/create', [App\Http\Controllers\FoodController::class, 'create'])->name('foods.create');

Route::get('/drivers', [App\Http\Controllers\DriverController::class, 'index'])->name('drivers');
Route::get('/drivers/edit/{id}', [App\Http\Controllers\DriverController::class, 'edit'])->name('drivers.edit');
Route::get('/drivers/create', [App\Http\Controllers\DriverController::class, 'create'])->name('drivers.create');

Route::get('/orders/', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/orders/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');

Route::get('/orderReview', [App\Http\Controllers\OrderReviewController::class, 'index'])->name('orderReview');
Route::get('/orderReview/edit/{id}', [App\Http\Controllers\OrderReviewController::class, 'edit'])->name('orderReview.edit');

Route::get('/coupons', [App\Http\Controllers\CouponController::class, 'index'])->name('coupons');
Route::get('/coupons/edit/{id}', [App\Http\Controllers\CouponController::class, 'edit'])->name('coupons.edit');
Route::get('/coupons/create', [App\Http\Controllers\CouponController::class, 'create'])->name('coupons.create');

Route::get('/payments', [App\Http\Controllers\AdminPaymentsController::class, 'index'])->name('payments');

Route::get('driverpayments', [App\Http\Controllers\AdminPaymentsController::class, 'driverIndex'])->name('driver.driverpayments');
Route::get('restaurantsPayouts', [App\Http\Controllers\RestaurantsPayoutController::class, 'index'])->name('restaurantsPayouts');
Route::get('restaurantsPayouts/create', [App\Http\Controllers\RestaurantsPayoutController::class, 'create'])->name('restaurantsPayouts.create');

Route::get('driversPayouts/create', [App\Http\Controllers\DriversPayoutController::class, 'create'])->name('driversPayouts.create');

Route::get('driversPayouts', [App\Http\Controllers\DriversPayoutController::class, 'index'])->name('driversPayouts');

Route::get('walletstransaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('walletstransaction');

Route::get('/walletstransaction/{id}', [App\Http\Controllers\TransactionController::class, 'index'])->name('users.walletstransaction');

Route::post('order-status-notification', [App\Http\Controllers\OrderController::class, 'sendNotification'])->name('order-status-notification');

Route::prefix('settings')->group(function () {

    Route::get('/currencies', [App\Http\Controllers\CurrencyController::class, 'index'])->name('currencies');
    Route::get('/currencies/edit/{id}', [App\Http\Controllers\CurrencyController::class, 'edit'])->name('currencies.edit');
    Route::get('app/globals', [App\Http\Controllers\SettingsController::class, 'globals'])->name('settings.app.globals');
    Route::get('app/adminCommission', [App\Http\Controllers\SettingsController::class, 'adminCommission'])->name('settings.app.adminCommission');
    Route::get('app/radiosConfiguration', [App\Http\Controllers\SettingsController::class, 'radiosConfiguration'])->name('settings.app.radiosConfiguration');
    Route::get('app/bookTable', [App\Http\Controllers\SettingsController::class, 'bookTable'])->name('settings.app.bookTable');
    Route::get('app/vatSetting', [App\Http\Controllers\SettingsController::class, 'vatSetting'])->name('settings.app.vatSetting');
    Route::get('app/deliveryCharge', [App\Http\Controllers\SettingsController::class, 'deliveryCharge'])->name('settings.app.deliveryCharge');

    Route::get('app/notifications', [App\Http\Controllers\SettingsController::class, 'notifications'])->name('settings.app.notifications');
    /* Route::get('app/promotion', [App\Http\Controllers\SettingsController::class, 'promotion'])->name('settings.app.promotion'); */
    Route::get('mobile/globals', [App\Http\Controllers\SettingsController::class, 'mobileGlobals'])->name('settings.mobile.globals');

    Route::get('payment/stripe', [App\Http\Controllers\SettingsController::class, 'stripe'])->name('payment.stripe');
    Route::get('payment/applepay', [App\Http\Controllers\SettingsController::class, 'applepay'])->name('payment.applepay');
    Route::get('payment/razorpay', [App\Http\Controllers\SettingsController::class, 'razorpay'])->name('payment.razorpay');
    Route::get('payment/cod', [App\Http\Controllers\SettingsController::class, 'cod'])->name('payment.cod');
    Route::get('payment/paypal', [App\Http\Controllers\SettingsController::class, 'paypal'])->name('payment.paypal');
    Route::get('payment/paytm', [App\Http\Controllers\SettingsController::class, 'paytm'])->name('payment.paytm');
    Route::get('payment/wallet', [App\Http\Controllers\SettingsController::class, 'wallet'])->name('payment.wallet');
    Route::get('payment/payfast', [App\Http\Controllers\SettingsController::class, 'payfast'])->name('payment.payfast');
    Route::get('payment/paystack', [App\Http\Controllers\SettingsController::class, 'paystack'])->name('payment.paystack');
    Route::get('payment/flutterwave', [App\Http\Controllers\SettingsController::class, 'flutterwave'])->name('payment.flutterwave');

    Route::get('app/languages', [App\Http\Controllers\SettingsController::class, 'languages'])->name('settings.app.languages');
    Route::get('app/languages/create', [App\Http\Controllers\SettingsController::class, 'languagescreate'])->name('settings.app.languages.create');
    Route::get('app/languages/edit/{id}', [App\Http\Controllers\SettingsController::class, 'languagesedit'])->name('settings.app.languages.edit');
});

Route::get('/booktable/{id}', [App\Http\Controllers\BookTableController::class, 'index'])->name('restaurants.booktable');
Route::get('/booktable/edit/{id}', [App\Http\Controllers\BookTableController::class, 'edit'])->name('booktable.edit');
Route::post('/sendnotification', [App\Http\Controllers\BookTableController::class, 'sendnotification'])->name('sendnotification');
Route::get('/notification/send', [App\Http\Controllers\NotificationController::class, 'send'])->name('notification/send');
Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'index'])->name('notification');
Route::post('broadcastnotification', [App\Http\Controllers\NotificationController::class, 'broadcastnotification'])->name('broadcastnotification');

Route::get('/payoutRequests/drivers', [App\Http\Controllers\PayoutRequestController::class, 'index'])->name('payoutRequests.drivers');

Route::get('/payoutRequests/drivers/{id}', [App\Http\Controllers\PayoutRequestController::class, 'index'])->name('payoutRequests.drivers.view');

Route::get('/payoutRequests/restaurants', [App\Http\Controllers\PayoutRequestController::class, 'restaurant'])->name('payoutRequests.restaurants');

Route::get('/payoutRequests/restaurants/{id}', [App\Http\Controllers\PayoutRequestController::class, 'restaurant'])->name('payoutRequests.restaurants.view');

Route::get('order_transactions', [App\Http\Controllers\PaymentController::class, 'index'])->name('order_transactions');

Route::get('/order_transactions/{id}', [App\Http\Controllers\PaymentController::class, 'index'])->name('order_transactions.index');
