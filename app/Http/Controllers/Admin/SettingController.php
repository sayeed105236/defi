<?php

namespace App\Http\Controllers\Admin;
/**
 * Settings Controller
 *
 * @package TokenLite
 * @author Softnio
 * @version 1.1.0
 */
use Validator;
use IcoHandler;
use App\Models\Setting;
use App\Models\GlobalMeta;
use Illuminate\Http\Request;
use App\Helpers\ReferralHelper;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    /**
     * Display the settings page
     *
     * @return \Illuminate\Http\Response
     * @version 1.0.0
     * @since 1.0
     * @return void
     */
    public function index() {
        $timezones = IcoHandler::get_timezones();
        return view('admin.settings', compact('timezones'));
    }

    /**
     * Display the API settings page
     *
     * @return \Illuminate\Http\Response
     * @version 1.0.0
     * @since 1.0.6
     * @return void
     */
    public function api_setting() {
        return view('admin.restapi');
    }


    /**
     * Display the Referral page
     *
     * @return \Illuminate\Http\Response
     * @version 1.0.0
     * @since 1.0.6
     * @return void
     */
    public function referral_setting() {
        $general = ReferralHelper::general_option();
        $advanced = ReferralHelper::advanced_option();
        return view('admin.settings-referral', compact('general', 'advanced'));
    }
    public function level_setting() {
       
        return view('admin.settings-level');
    }
    
    public function rank_setting() {
       
        return view('admin.settings-rank');
    }
    /**
     * Update the settings Data
     *
     * @return \Illuminate\Http\Response
     * @version 1.0.2
     * @since 1.0
     * @return void
     */
     
    public function levelupdate()
    {
        if($_POST['fstlevel_bonus'] != NULL){
            Setting::where('field', "first_level")->update(['value' =>  $_POST['fstlevel_bonus'] ]);
        }
        if($_POST['seclevel_bonus'] != NULL){
            Setting::where('field', "sec_level")->update(['value' =>  $_POST['seclevel_bonus'] ]);
        }
        if($_POST['trdlevel_bonus'] != NULL){
            Setting::where('field', "trd_level")->update(['value' =>  $_POST['trdlevel_bonus'] ]);
        }
        if($_POST['fourlevel_bonus'] != NULL){
            Setting::where('field', "four_level")->update(['value' =>  $_POST['fourlevel_bonus'] ]);
        }
        if($_POST['fivelevel_bonus'] != NULL){
            Setting::where('field', "five_level")->update(['value' =>  $_POST['fivelevel_bonus'] ]);
        }
        if($_POST['sixlevel_bonus'] != NULL){
            Setting::where('field', "six_level")->update(['value' =>  $_POST['sixlevel_bonus'] ]);
        }
        if($_POST['sevenlevel_bonus'] != NULL){
            Setting::where('field', "seven_level")->update(['value' =>  $_POST['sevenlevel_bonus'] ]);
        }
        if($_POST['eightlevel_bonus'] != NULL){
            Setting::where('field', "eight_level")->update(['value' =>  $_POST['eightlevel_bonus'] ]);
        }
        if($_POST['ninelevel_bonus'] != NULL){
            Setting::where('field', "nine_level")->update(['value' =>  $_POST['ninelevel_bonus'] ]);
        }
        if($_POST['tenlevel_bonus'] != NULL){
            Setting::where('field', "ten_level")->update(['value' =>  $_POST['tenlevel_bonus'] ]);
        }
        
        return back();
        // return redirect()->away('https://mlm.pulse-value.com/public/admin/settings/level');
    
    }
    
    
    public function rankupdate()
    {
        if($_POST['fstrank_refferal'] != NULL){
            Setting::where('field', "fstrank_refferal")->update(['value' =>  $_POST['fstrank_refferal'] ]);
        }
        if($_POST['fstrank_token'] != NULL){
            Setting::where('field', "fstrank_token")->update(['value' =>  $_POST['fstrank_token'] ]);
        }
        if($_POST['secrank_refferal'] != NULL){
            Setting::where('field', "secrank_refferal")->update(['value' =>  $_POST['secrank_refferal'] ]);
        }
        if($_POST['secrank_token'] != NULL){
            Setting::where('field', "secrank_token")->update(['value' =>  $_POST['secrank_token'] ]);
        }
        if($_POST['trdrank_refferal'] != NULL){
            Setting::where('field', "trdrank_refferal")->update(['value' =>  $_POST['trdrank_refferal'] ]);
        }
        if($_POST['trdrank_token'] != NULL){
            Setting::where('field', "trdrank_token")->update(['value' =>  $_POST['trdrank_token'] ]);
        }
        if($_POST['fourrank_refferal'] != NULL){
            Setting::where('field', "fourrank_refferal")->update(['value' =>  $_POST['fourrank_refferal'] ]);
        }
        if($_POST['fourrank_token'] != NULL){
            Setting::where('field', "fourrank_token")->update(['value' =>  $_POST['fourrank_token'] ]);
        }
        if($_POST['fiverank_refferal'] != NULL){
            Setting::where('field', "fiverank_refferal")->update(['value' =>  $_POST['fiverank_refferal'] ]);
        }
        if($_POST['fiverank_token'] != NULL){
            Setting::where('field', "fiverank_token")->update(['value' =>  $_POST['fiverank_token'] ]);
        }
        if($_POST['sixrank_refferal'] != NULL){
            Setting::where('field', "sixrank_refferal")->update(['value' =>  $_POST['sixrank_refferal'] ]);
        }
        if($_POST['sixrank_token'] != NULL){
            Setting::where('field', "sixrank_token")->update(['value' =>  $_POST['sixrank_token'] ]);
        }
        if($_POST['sevenrank_refferal'] != NULL){
            Setting::where('field', "sevenrank_refferal")->update(['value' =>  $_POST['sevenrank_refferal'] ]);
        }
        if($_POST['sevenrank_token'] != NULL){
            Setting::where('field', "sevenrank_token")->update(['value' =>  $_POST['sevenrank_token'] ]);
        }
        if($_POST['eightrank_refferal'] != NULL){
            Setting::where('field', "eightrank_refferal")->update(['value' =>  $_POST['eightrank_refferal'] ]);
        }
        if($_POST['eightrank_token'] != NULL){
            Setting::where('field', "eightrank_token")->update(['value' =>  $_POST['eightrank_token'] ]);
        }
        if($_POST['ninerank_refferal'] != NULL){
            Setting::where('field', "ninerank_refferal")->update(['value' =>  $_POST['ninerank_refferal'] ]);
        }
        if($_POST['ninerank_token'] != NULL){
            Setting::where('field', "ninerank_token")->update(['value' =>  $_POST['ninerank_token'] ]);
        }
        if($_POST['tenrank_refferal'] != NULL){
            Setting::where('field', "tenrank_refferal")->update(['value' =>  $_POST['tenrank_refferal'] ]);
        }
        if($_POST['tenrank_token'] != NULL){
            Setting::where('field', "tenrank_token")->update(['value' =>  $_POST['tenrank_token'] ]);
        }
        
        
        return back();
        // return redirect()->away('https://mlm.pulse-value.com/public/admin/settings/rank');
    
    }
    public function update(Request $request) {
        $type = $request->input('type');
        $ret['msg'] = 'info';
        $ret['message'] = __('messages.nothing');

        if ($type == 'api_settings') {
            $setting = Setting::updateValue('site_api_key', str_random(24));
            $ret['msg'] = 'success';
            $ret['message'] = __('messages.update.success', ['what' => 'New API Key']);
        }

        if ($type == 'site_info') {
            $validator = Validator::make($request->all(), [
                'site_name' => 'required|min:4',
                'site_email' => 'required|email'
            ]);

            if ($validator->fails()) {
                $msg = '';
                if ($validator->errors()->hasAny(['site_name', 'site_email'])) {
                    $msg = $validator->errors()->first();
                } else {
                    $msg = __('messages.form.wrong');
                }

                $ret['msg'] = 'warning';
                $ret['message'] = $msg;
                return response()->json($ret);
            } else {
                $ret['msg'] = 'warning';
                $ret['message'] = __('messages.update.failed', ['what' => 'Settings']);
                Setting::updateValue(Setting::SITE_NAME, $request->input('site_name'));
                Setting::updateValue(Setting::SITE_EMAIL, $request->input('site_email'));
                Setting::updateValue('site_copyright', $request->input('site_copyright'));
                Setting::updateValue('site_support_address', $request->input('site_support_address'));
                Setting::updateValue('site_support_phone', $request->input('site_support_phone'));
                Setting::updateValue('site_support_email', $request->input('site_support_email'));
                Setting::updateValue('main_website_url', $request->input('main_website_url'));


                $ret['msg'] = 'success';
                $ret['message'] = __('messages.update.success', ['what' => 'Settings']);
            }
        }elseif ($type == 'social_links') {
            $ret['msg'] = 'warning';
            $ret['message'] = __('messages.update.failed', ['what' => 'Social Links']);

            $links = json_encode($request->input('social'));
            Setting::updateValue('site_social_links', $links);
            $ret['msg'] = 'success';
            $ret['message'] = __('messages.update.success', ['what' => 'Social Links']);
        }elseif ($type == 'general') {
            $ret['msg'] = 'warning';
            $ret['message'] = __('messages.update.failed', ['what' => 'General Settings']);

            Setting::updateValue('site_maintenance', (isset($request->site_maintenance) ? 1 : 0));
            Setting::updateValue('site_maintenance_text', $request->input('site_maintenance_text'));
            Setting::updateValue('site_date_format', $request->input('site_date_format'));
            Setting::updateValue('site_time_format', $request->input('site_time_format'));
            Setting::updateValue('site_timezone', $request->input('site_timezone'));
            Setting::updateValue('theme_custom', isset($request->theme_custom));
            if ($request->input('theme_user') || $request->input('theme_admin')) {
                Setting::updateValue('theme_user', $request->input('theme_user'));
                Setting::updateValue('theme_admin', $request->input('theme_admin'));
                \Artisan::call('config:clear');
            }
            Setting::updateValue('theme_auth_layout', $request->input('theme_auth_layout'));

            $ret['msg'] = 'success';
            $ret['message'] = __('messages.update.success', ['what' => 'General Settings']);
        }elseif ($type == 'api_credetial') {
            $ret['msg'] = 'warning';
            $ret['message'] = __('messages.update.failed', ['what' => 'API Credentials']);

            Setting::updateValue('site_api_fb_id', $request->input('api_fb_id'));
            Setting::updateValue('site_api_fb_secret', $request->input('api_fb_secret'));
            Setting::updateValue('site_api_google_id', $request->input('api_google_id'));
            Setting::updateValue('site_api_google_secret', $request->input('api_google_secret'));
            Setting::updateValue('recaptcha_site_key', $request->input('recaptcha_site_key'));
            Setting::updateValue('recaptcha_secret_key', $request->input('recaptcha_secret_key'));

            $ret['msg'] = 'success';
            $ret['message'] = __('messages.update.success', ['what' => 'API Credentials']);
        }elseif ($type == 'custom_code') {
            $ret['msg'] = 'warning';
            $ret['message'] = __('messages.update.failed', ['what' => 'Custom Code ']);

            Setting::updateValue('site_header_code', $request->input('site_header_code'));
            Setting::updateValue('site_footer_code', $request->input('site_footer_code'));

            $ret['msg'] = 'success';
            $ret['message'] = __('messages.update.success', ['what' => 'Header & Footer Custom Code']);
        }elseif($type == 'referral') {
            $validator = Validator::make($request->all(), [
                'referral_bonus' => 'integer|gte:0',
                'referral_bonus_join' => 'integer|gte:0'
            ]);

            if ($validator->fails()) {
                $msg = '';
                if ($validator->errors()->hasAny(['referral_bonus', 'referral_bonus_join'])) {
                    $msg = $validator->errors()->first();
                } else {
                    $msg = __('messages.update.failed', ['what' => 'Referral Settings']);
                }

                $ret['msg'] = 'warning';
                $ret['message'] = $msg;
            } else {
                if(nio_feature() && !empty($request->input('referral_extend_bonus'))) {
                    $extend_bonus = json_encode($request->input('referral_extend_bonus'));
                    Setting::updateValue('referral_extend_bonus', $extend_bonus);
                }
                Setting::updateValue('referral_system', (isset($request->referral_system) ? 1 : 0));
                Setting::updateValue('referral_allow', $request->input('referral_allow'));
                Setting::updateValue('referral_calc', $request->input('referral_calc'));
                Setting::updateValue('referral_bonus', $request->input('referral_bonus'));
                Setting::updateValue('referral_allow_join', $request->input('referral_allow_join'));
                Setting::updateValue('referral_calc_join', $request->input('referral_calc_join'));
                Setting::updateValue('referral_bonus_join', $request->input('referral_bonus_join'));
                Setting::updateValue('referral_info_show', (isset($request->referral_info_show) ? 1 : 0));

                $ret['msg'] = 'success';
                $ret['message'] = __('messages.update.success', ['what' => 'Referral Settings']);
            }
        }



        if ($request->ajax()) {
            return response()->json($ret);
        }
        return back()->with([$ret['msg'] => $ret['message']]);
    }

    /**
     * Update meta data for settings
     *
     * @return \Illuminate\Http\Response
     * @version 1.0
     * @since 1.1.0
     * @return void
     */
    public function update_meta(Request $request)
    {
        $type = $request->input('type');
        $ret['msg'] = 'info';
        $ret['message'] = __('messages.nothing');
        $auth_id = auth()->id();
        $is_saved = false;

        $type_key = 'default'; $is_page_meta = false;
        if($type == 'tnx_page_meta' || $type == 'kyc_page_meta' || $type == 'user_page_meta') {
            $type_key = str_replace('_page_meta', '', $type);
            $is_page_meta = true;
        }

        if ($is_page_meta==true) {
            $meta_name = $this->meta_key_val($request->meta, 'key');
            $meta_val = $this->meta_key_val($request->meta, 'value');
            $ret['msg'] = 'error';
            $ret['message'] = __('messages.update.failed', ['what' => 'Options']);

            if($meta_name=='perpage') {
                $meta_by_name = $type_key.'_per_page';
                $result = GlobalMeta::save_meta($meta_by_name, $meta_val, $auth_id);
                $is_saved = true;
            } elseif($meta_name=='ordered') {
                $meta_by_name = $type_key.'_ordered';
                $result = GlobalMeta::save_meta($meta_by_name, $meta_val, $auth_id);
                $is_saved = true;
            } elseif($meta_name=='orderby') {
                $meta_by_name = $type_key.'_order_by';
                $result = GlobalMeta::save_meta($meta_by_name, $meta_val, $auth_id);
                $is_saved = true;
            } else {
                $meta_by_name = $type_key.'_'.$meta_name;
                $result = GlobalMeta::save_meta($meta_by_name, $meta_val, $auth_id);
                $is_saved = true;
            }
            if($is_saved) {
                $ret['msg'] = 'success';
                $ret['message'] = __('messages.update.success', ['what' => 'Options']);
            }
        }

        if ($request->ajax()) {
            return response()->json($ret);
        }
        return back()->with([$ret['msg'] => $ret['message']]);
    }

    private function meta_key_val($value, $output=null)
    {
        $value = explode('=', $value);
        $return = array('key' => $value[0], 'value'=> $value[1]);
        return (empty($output)) ? $return : (isset($return[$output]) ? $return[$output] : '');
    }
}
