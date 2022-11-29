<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\adduser;
use Illuminate\Http\Request;
use App\Models\add;
use Illuminate\Support\Facades\DB;

class homecontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function apppublishplatform()
    {
        return view('admin.apppublishplatform');
    }
    public function playstore()
    {
        return view('admin.playstore');
    }
    public function appstore()
    {
        return view('admin.appstore');
    }
    public function trashaccountlist()
    {
        return view('admin.trashaccountlist');
    }
    public function deletepublishplatform()
    {
        return view('admin.deletepublishplatform');
    }
    public function createaccount()
    {
        return view('admin.createaccount');
    }
    public function playstorelist()
    {
        return view('admin.playstorelist');
    }
    public function playstoreedit()
    {
        return view('admin.playstoreedit');
    }
    public function trashplaystorelist()
    {
        return view('admin.trashplaystorelist');
    }
    public function createapplication()
    {
        return view('admin.createapplication');
    }
    public function createapplicationsetup()
    {
        return view('admin.createapplicationsetup');
    }
    public function viewsetup()
    {
        return view('admin.viewsetup');
    }
    public function appmonetizeplatform()
    {
        return view('admin.appmonetizeplatform');
    }
    public function admobaccount()
    {
        return view('admin.admobaccount');
    }
    public function adduser()
    {
        return view('admin.adduser');
    }
    public function adsequence()
    {
        return view('admin.adsequence');
    }
    public function allapps()
    {
        return view('admin.allapps');
    }
    public function appcategory()
    {
        return view('admin.appcategory');
    }
    public function appextrafield()
    {
        return view('admin.appextrafield');
    }
    public function appssequence()
    {
        return view('admin.appssequence');
    }
    public function appwisecustomad()
    {
        return view('admin.appwisecustomad');
    }
    public function appwisecustomadlist()
    {
        return view('admin.appwisecustomadlist');
    }
    public function appwisecustomadsequence()
    {
        return view('admin.appwisecustomadsequence');
    }
    public function assignmoreappgroup()
    {
        return view('admin.assignmoreappgroup');
    }
    public function assigntoapps()
    {
        return view('admin.assigntoapps');
    }
    public function createadmobaccount()
    {
        return view('admin.createadmobaccount');
    }
    public function createcustomad()
    {
        return view('admin.createcustomad');
    }
    public function customadgroup()
    {
        return view('admin.customadgroup');
    }
    public function customadlist()
    {
        return view('admin.customadlist');
    }
    public function users()
    {
        $data=DB::table('user')->get();
        return view('admin.users')->with(['data'=>$data]);
    }
    public function trashappcategory()
    {
        return view('admin.trashappcategory');
    }
    public function testadid()
    {
        return view('admin.testadid');
    }
    public function sendnotificationgroupwise()
    {
        return view('admin.sendnotificationgroupwise');
    }
    public function sendnotification()
    {
        return view('admin.sendnotification');
    }
    public function othersettings()
    {
        return view('admin.othersettings');
    }
    public function notificationgroupwise()
    {
        return view('admin.notificationgroupwise');
    }
    public function notificationappwise()
    {
        return view('admin.notificationappwise');
    }
    public function moreappgroup()
    {
        return view('admin.moreappgroup');
    }

    public function locationwiseuser()
    {
        return view('admin.locationwiseuser');
    }
    public function locationlist()
    {
        return view('admin.locationlist');
    }
    public function livelinemoreappgroup()
    {
        return view('admin.livelinemoreappgroup');
    }
    public function ipaddress()
    {
        return view('admin.ipaddress');
    }
    public function emailsettings()
    {
        return view('admin.emailsettings');
    }
    public function edituser()
    {
        return view('admin.edituser');
    }
    public function editnotificationgroupwise()
    {
        return view('admin.editnotificationgroupwise');
    }
    public function editmoreappgroup()
    {
        return view('admin.editmoreappgroup');
    }
    public function editipaddress()
    {
        return view('admin.editipaddress');
    }
    public function editcustomadgroup()
    {
        return view('admin.editcustomadgroup');
    }
    public function editcreatecustomad()
    {
        return view('admin.editcreatecustomad');
    }
    public function editappextrafield()
    {
        return view('admin.editappextrafield');
    }
    public function editappcategory()
    {
        return view('admin.editappcategory');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function eidadmobaccount()
    {
        return view('admin.eidtadmobaccount');
    }
    public function editadmobplatform()
    {
        return view('admin.editadmobplatform');
    }

    public function insertuser(Request $request)
    {
        $product = new adduser();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $product->photo = $filename;
        }
        $product->role = $request->get('role');
        $product->name = $request->get('name');
        $product->email = $request->get('email');
        $product->password = $request->get('password');
        // $product->loginpermission = $request->get('permission');
        $product->loginpermission = implode(",", $request->get('permission'));
        $product->save();

        return redirect()->back()->with('message', 'User added successfully');
    }
    public function editusers($id)
    {
        $data = DB::table('user')->where('id', $id)->first();
        return view('admin.edituser')->with('data', $data);
    }
    public function updateuser(Request $request)
    {
        $product = adduser::find($request->get('id'));

        // $data=$request->all();
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $product->photo = $filename;
        }
        $product->role = $request->get('role');
        $product->name = $request->get('name');
        $product->email = $request->get('email');
        $product->password = $request->get('password');
        $product->loginpermission = implode(",", $request->get('permission'));
        $product->save();
        return redirect('users')->with('message', 'User update succsessfully.....');
    }
    public function deleteuser(Request $request, $id)
    {
        $data = DB::table('user')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }
}
