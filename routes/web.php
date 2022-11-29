<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\homecontroller;
use App\Http\Controllers\admin\logincontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });



route::get('login',[logincontroller::class,'login']);
route::post('adminlogin',[logincontroller::class,'adminlogin']);
route::get('logout',[logincontroller::class,'logout']);
route::get('forget',[logincontroller::class,'forget']);
route::post('resetlink',[logincontroller::class,'resetlink']);
route::get('reset/{token}',[logincontroller::class,'reset']);
route::post('resendpassword',[logincontroller::class,'resendpassword']);

Route::group(['middleware'=>'admin'],function()
{
route::get('index',[homecontroller::class,'index']);
route::get('apppublishplatform',[homecontroller::class,'apppublishplatform']);
route::get('playstore',[homecontroller::class,'playstore']);
route::get('trashaccountlist',[homecontroller::class,'trashaccountlist']);
route::get('deletepublishplatform',[homecontroller::class,'deletepublishplatform']);
route::get('createaccount',[homecontroller::class,'createaccount']);
route::get('appstore',[homecontroller::class,'appstore']);
route::get('playstorelist',[homecontroller::class,'playstorelist']);
route::get('playstoreedit',[homecontroller::class,'playstoreedit']);
route::get('trashplaystorelist',[homecontroller::class,'trashplaystorelist']);
route::get('createapplication',[homecontroller::class,'createapplication']);
route::get('createapplicationsetup',[homecontroller::class,'createapplicationsetup']);
route::get('viewsetup',[homecontroller::class,'viewsetup']);
route::get('appmonetizeplatform',[homecontroller::class,'appmonetizeplatform']);
route::get('admobaccount',[homecontroller::class,'admobaccount']);

route::get('adduser',[homecontroller::class,'adduser']);
route::post('insertuser',[homecontroller::class,'insertuser']);
route::get('editusers/{id}',[homecontroller::class,'editusers']);
route::post('updateuser',[homecontroller::class,'updateuser']);
route::get('deleteuser/{id}',[homecontroller::class,'deleteuser']);



route::get('adsequence',[homecontroller::class,'adsequence']);
route::get('allapps',[homecontroller::class,'allapps']);
route::get('appcategory',[homecontroller::class,'appcategory']);
route::get('appextrafield',[homecontroller::class,'appextrafield']);
route::get('appssequence',[homecontroller::class,'appssequence']);
route::get('appwisecustomad',[homecontroller::class,'appwisecustomad']);
route::get('appwisecustomadlist',[homecontroller::class,'appwisecustomadlist']);
route::get('appwisecustomadsequence',[homecontroller::class,'appwisecustomadsequence']);
route::get('assignmoreappgroup',[homecontroller::class,'assignmoreappgroup']);
route::get('assigntoapps',[homecontroller::class,'assigntoapps']);
route::get('createadmobaccount',[homecontroller::class,'createadmobaccount']);
route::get('createcustomad',[homecontroller::class,'createcustomad']);
route::get('customadgroup',[homecontroller::class,'customadgroup']);
route::get('customadlist',[homecontroller::class,'customadlist']);
route::get('users',[homecontroller::class,'users']);
route::get('trashappcategory',[homecontroller::class,'trashappcategory']);
route::get('testadid',[homecontroller::class,'testadid']);
route::get('sendnotificationgroupwise',[homecontroller::class,'sendnotificationgroupwise']);
route::get('sendnotification',[homecontroller::class,'sendnotification']);
route::get('othersettings',[homecontroller::class,'othersettings']);
route::get('notificationgroupwise',[homecontroller::class,'notificationgroupwise']);
route::get('notificationappwise',[homecontroller::class,'notificationappwise']);
route::get('moreappgroup',[homecontroller::class,'moreappgroup']);
route::get('locationwiseuser',[homecontroller::class,'locationwiseuser']);
route::get('locationlist',[homecontroller::class,'locationlist']);
route::get('livelinemoreappgroup',[homecontroller::class,'livelinemoreappgroup']);
route::get('ipaddress',[homecontroller::class,'ipaddress']);
route::get('emailsettings',[homecontroller::class,'emailsettings']);
route::get('edituser',[homecontroller::class,'edituser']);
route::get('editnotificationgroupwise',[homecontroller::class,'editnotificationgroupwise']);
route::get('editmoreappgroup',[homecontroller::class,'editmoreappgroup']);
route::get('editipaddress',[homecontroller::class,'editipaddress']);
route::get('editcustomadgroup',[homecontroller::class,'editcustomadgroup']);
route::get('editcreatecustomad',[homecontroller::class,'editcreatecustomad']);
route::get('editappextrafield',[homecontroller::class,'editappextrafield']);
route::get('editappcategory',[homecontroller::class,'editappcategory']);
route::get('profile',[homecontroller::class,'profile']);
route::get('eidtadmobaccount',[homecontroller::class,'eidadmobaccount']);
route::get('editadmobplatform',[homecontroller::class,'editadmobplatform']);
});
