@extends('layouts.admin')
@section('title', 'Level Setting')

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="main-content col-lg-12">
                @include('vendor.notice')
                <div class="content-area card">
                    <div class="card-innr">
                        <div class="card-head">
                            <h4 class="card-title">Level Settings</h4>
                        </div>
                        <div class="card-text">
                            <p></p>
                            <p class="text-head"><strong></strong></p>
                        </div>
                        <div class="gaps-2x"></div>
                        <div class="card-text ico-setting setting-token-referral">
                            <form action="{{ route('admin.ajax.settings.levelupdate') }}" method="POST" id="level_setting_form" class="validate-modern">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Level System</label>
                                            <div class="input-wrap input-wrap-switch">
                                                <input class="input-switch switch-toggle" data-switch="switch-to-referral" name="level_system" type="checkbox" checked id="referral-system-enable">
                                                <label for="referral-system-enable"><span>Disable</span><span class="over">Enable</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="switch-content switch-to-referral">
                                        <?php 
                                        
                                            $setting = DB::table('settings')->where('field' , 'first_level')->first();
                                        
                                        ?>
                                            <h5 class="card-title-sm text-secondary">Level User <small class="ucap text-primary">(who referred)</small></h5>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Level Bonus Allowed</label>
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level1" value="First Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Offering Type</label>
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Bonus - Offer Amount</label>
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fstlevel_bonus" value="<?php echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level2" value="Second Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="seclevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'sec_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level3" value="Three Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="trdlevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'trd_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level4" value="Four Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fourlevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'four_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level5" value="Five Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fivelevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'five_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level6" value="Six Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="sixlevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'six_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level7" value="Seven Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="sevenlevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'seven_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level8" value="Eight Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="eightlevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'eight_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level9" value="Nine Level" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="ninelevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'nine_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="level10" value="Ten Level" readonly>
                                                        </div>
                                                        <span class="input-note">Limit with level bonus amount, how much bonus will add into account for invite someone.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Percentage</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                        <span class="input-note">Choose whether the level bonus will calculated as percentage.</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="tenlevel_bonus" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'ten_level')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                        <div class="input-note">Specify bonus amount for who leveled.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sap sap-gap mt-3"></div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="gaps-1x"></div>
                                <div class="d-flex">
                                    @csrf
                                    <input type="hidden" name="type" value="referral">
                                    <button class="btn btn-primary save-disabled" type="submit"><i class="ti ti-reload"></i><span>Update</span></button>
                                </div>
                                <div class="gaps-2x"></div>
                                <div class="hint"><em><strong>Note:</strong> Bonus will automatically adjust after each successfull transaction. The token balance add into contributor account who referred (and/or who join).</em></div>
                            </form>
                        </div>
                    </div>{{-- .card-innr --}}
                </div>{{-- .card --}}

            </div>{{-- .col --}}
        </div>{{-- .container --}}
    </div>{{-- .container --}}
</div>{{-- .page-content --}}
@endsection
