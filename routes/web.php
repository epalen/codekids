<?php

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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();
/* CoreUI templates */

Route::resource('campanas', 'CampaignController');

Route::get('/', 'LandingController@index');

Route::resource('blog', 'BlogController');

Route::get('blog/{slug}', [
	'as' => 'blog.show', 
	'uses' => 'BlogController@show'
]);

Route::resource('nosotros', 'AboutController');

Route::resource('contacto', 'ContactUsController');

Route::resource('candidatos', 'CandidateController');

//Route::get('candidatos/{id}', 'CandidateController@show');

//Ruta para formulario de donación
Route::get('impulsar/candidato/{id}', [
	'as'			=>	'candidate.edit',
	'uses'			=>	'CandidateController@edit'
]);

//Ruta para formulario de donación
Route::get('impulsar/campana/{id}', [
	'as'			=>	'campaign.edit',
	'uses'			=>	'CampaignController@edit'
]);

// Rutas de donación a Candidatos con Paypal
Route::get('paywithpaypal', array(
    'as' => 'addmoney.paywithpaypal',
    'uses' => 'PaypalCandidateController@payWithPaypal',
));

Route::post('paypal', array(
    'as' => 'addmoney.paypal',
    'uses' => 'PaypalCandidateController@postPaymentWithpaypal',
));

Route::get('paypal', array(
    'as' => 'payment.status',
    'uses' => 'PaypalCandidateController@getPaymentStatus',
));

// Rutas de donación a Campañas con Paypal
Route::get('paycampaignpaypal', array(
    'as' => 'addmoney.paycampaignpaypal',
    'uses' => 'PaypalCampaignController@payCampaignPaypal',
));

Route::post('campaignpaypal', array(
    'as' => 'addmoneycampaign.paypal',
    'uses' => 'PaypalCampaignController@postPaymentWithpaypal',
));

Route::get('campaignpaypal', array(
    'as' => 'paymentcampaign.status',
    'uses' => 'PaypalCampaignController@getPaymentStatus',
));

Route::middleware('auth')->group(function() {
	
	Route::view('/inicio', 'samples.dashboard');
	
	// Rutas administración de usuarios
	Route::get('usuarios', [
		'as'			=>	'usuarios.index',
		'uses'			=>	'Admin\UserController@index'
	]);

	Route::get('crear/usuarios', [
		'as'			=>	'usuarios.create',
		'uses'			=>	'Admin\UserController@create'
	]);

	Route::post('guardar/usuarios', [
		'as'			=>	'usuarios.store',
		'uses'			=>	'Admin\UserController@store'
	]);

	Route::get('detalle/usuario/{id}', [
		'as'			=>	'usuarios.show',
		'uses'			=>	'Admin\UserController@show'
	]);

	Route::get('editar/usuarios/{id}', [
		'as'			=>	'usuarios.edit',
		'uses'			=>	'Admin\UserController@edit'
	]);

	Route::patch('actualizar/usuarios/{id}', [
		'as'			=>	'usuarios.update',
		'uses'			=>	'Admin\UserController@update'
	]);

	Route::get('eliminar/usuario/{id}', [
		'as'			=>	'usuarios.destroy',
		'uses'			=>	'Admin\UserController@destroy'
	]);

	// Rutas administración de campañas
	Route::get('admin/campanas', [
		'as'			=>	'campanas.index',
		'uses'			=>	'Admin\CampaignController@index'
	]);

	Route::get('crear/campanas', [
		'as'			=>	'campanas.create',
		'uses'			=>	'Admin\CampaignController@create'
	]);

	Route::post('guardar/campanas', [
		'as'			=>	'campanas.store',
		'uses'			=>	'Admin\CampaignController@store'
	]);

	Route::get('detalle/campanas/{id}', [
		'as'			=>	'campanas.show',
		'uses'			=>	'Admin\CampaignController@show'
	]);

	Route::get('editar/campanas/{id}', [
		'as'			=>	'campanas.edit',
		'uses'			=>	'Admin\CampaignController@edit'
	]);

	Route::patch('actualizar/campanas/{id}', [
		'as'			=>	'campanas.update',
		'uses'			=>	'Admin\CampaignController@update'
	]);

	Route::get('eliminar/campanas/{id}', [
		'as'			=>	'campanas.destroy',
		'uses'			=>	'Admin\CampaignController@destroy'
	]);

	// Rutas administración de publicaciones
	Route::get('admin/publicacion', [
		'as'			=>	'publicacion.index',
		'uses'			=>	'Admin\PostController@index'
	]);

	Route::get('crear/publicacion', [
		'as'			=>	'publicacion.create',
		'uses'			=>	'Admin\PostController@create'
	]);

	Route::post('guardar/publicacion', [
		'as'			=>	'publicacion.store',
		'uses'			=>	'Admin\PostController@store'
	]);

	Route::get('detalle/publicacion/{id}', [
		'as'			=>	'publicacion.show',
		'uses'			=>	'Admin\PostController@show'
	]);

	Route::get('editar/publicacion/{id}', [
		'as'			=>	'publicacion.edit',
		'uses'			=>	'Admin\PostController@edit'
	]);

	Route::patch('actualizar/publicacion/{id}', [
		'as'			=>	'publicacion.update',
		'uses'			=>	'Admin\PostController@update'
	]);

	Route::get('eliminar/publicacion/{id}', [
		'as'			=>	'publicacion.destroy',
		'uses'			=>	'Admin\PostController@destroy'
	]);

	// Rutas administración de candidatos
	Route::get('admin/candidatos', [
		'as'			=>	'candidatos.index',
		'uses'			=>	'Admin\CandidateController@index'
	]);

	Route::get('crear/candidato', [
		'as'			=>	'candidato.create',
		'uses'			=>	'Admin\CandidateController@create'
	]);

	Route::post('guardar/candidato', [
		'as'			=>	'candidato.store',
		'uses'			=>	'Admin\CandidateController@store'
	]);

	Route::get('detalle/candidato/{id}', [
		'as'			=>	'candidato.show',
		'uses'			=>	'Admin\CandidateController@show'
	]);

	Route::get('editar/candidato/{id}', [
		'as'			=>	'candidato.edit',
		'uses'			=>	'Admin\CandidateController@edit'
	]);

	Route::patch('actualizar/candidato/{id}', [
		'as'			=>	'candidato.update',
		'uses'			=>	'Admin\CandidateController@update'
	]);

	Route::get('eliminar/candidato/{id}', [
		'as'			=>	'candidato.destroy',
		'uses'			=>	'Admin\CandidateController@destroy'
	]);

	// Rutas administración de estudiantes
	Route::get('admin/estudiantes', [
		'as'			=>	'estudiante.index',
		'uses'			=>	'Admin\StudentController@index'
	]);

	Route::get('crear/estudiante', [
		'as'			=>	'estudiante.create',
		'uses'			=>	'Admin\StudentController@create'
	]);

	Route::post('guardar/estudiante', [
		'as'			=>	'estudiante.store',
		'uses'			=>	'Admin\StudentController@store'
	]);

	Route::get('detalle/estudiante/{id}', [
		'as'			=>	'estudiante.show',
		'uses'			=>	'Admin\StudentController@show'
	]);

	Route::get('editar/estudiante/{id}', [
		'as'			=>	'estudiante.edit',
		'uses'			=>	'Admin\StudentController@edit'
	]);

	Route::patch('actualizar/estudiante/{id}', [
		'as'			=>	'estudiante.update',
		'uses'			=>	'Admin\StudentController@update'
	]);

	Route::get('eliminar/estudiante/{id}', [
		'as'			=>	'estudiante.destroy',
		'uses'			=>	'Admin\StudentController@destroy'
	]);

	// Ruta administración roles
	Route::resource('roles','Admin\RoleController');

	// Rutas de administración de donaciones candidatos
	Route::get('donaciones/candidatos', [
		'as'			=>	'donaciones.candidatos.index',
		'uses'			=>	'Admin\CandidatePaymentController@index'
	]);

	Route::get('donacion/candidato/{id}', [
		'as'			=>	'donacion.candidatos.show',
		'uses'			=>	'Admin\CandidatePaymentController@show'
	]);

	// Rutas de administración de donaciones campañas
	Route::get('donaciones/campanas', [
		'as'			=>	'donaciones.campanas.index',
		'uses'			=>	'Admin\CampaignPaymentController@index'
	]);

	Route::get('donacion/campana/{id}', [
		'as'			=>	'donaciones.campanas.show',
		'uses'			=>	'Admin\CampaignPaymentController@show'
	]);

	// Section CoreUI elements
	Route::view('/sample/dashboard','samples.dashboard');
	Route::view('/sample/buttons','samples.buttons');
	Route::view('/sample/social','samples.social');
	Route::view('/sample/cards','samples.cards');
	Route::view('/sample/forms','samples.forms');
	Route::view('/sample/modals','samples.modals');
	Route::view('/sample/switches','samples.switches');
	Route::view('/sample/tables','samples.tables');
	Route::view('/sample/tabs','samples.tabs');
	Route::view('/sample/icons-font-awesome', 'samples.font-awesome-icons');
	Route::view('/sample/icons-simple-line', 'samples.simple-line-icons');
	Route::view('/sample/widgets','samples.widgets');
	Route::view('/sample/charts','samples.charts');

});

// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');