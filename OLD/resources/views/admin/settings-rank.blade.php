@extends('layouts.admin')
@section('title', 'Rank Setting')

@section('content')



    
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="main-content col-lg-12">
                @include('vendor.notice')
                <div class="content-area card">
                    <div class="card-innr">
                        <div class="card-head">
                            <h4 class="card-title">Rank Settings <a href="#" style="float:right;">Rank Details >></a></h4>
                            
                        </div>
                        <div class="card-text">
                            <p></p>
                            <p class="text-head"><strong></strong></p>
                        </div>
                        <div class="gaps-2x"></div>
                        <div class="card-text ico-setting setting-token-referral">
                            <form action="{{ route('admin.ajax.settings.rankupdate') }}" method="POST" id="rank_setting_form" class="validate-modern">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="input-item input-with-label">
                                            <label class="input-item-label">Rank System</label>
                                            <div class="input-wrap input-wrap-switch">
                                                <input class="input-switch switch-toggle" data-switch="switch-to-referral" name="rank_system" type="checkbox" checked id="referral-system-enable">
                                                <label for="referral-system-enable"><span>Disable</span><span class="over">Enable</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="switch-content switch-to-referral">
                                        <?php 
                                        
                                            
                                        
                                        ?>
                                            <h5 class="card-title-sm text-secondary">Rank User <small class="ucap text-primary">(who referred)</small></h5>
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Rank Bonus Allowed</label>
                                                        <div class="input-wrap">
                                                            <input type="text" class="input-bordered" min="0" name="rank1" value="First Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Offering Type</label>
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Refferal Count</label>
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fstrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'fstrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <label class="input-item-label">Token Amount</label>
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fstrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'fstrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank2" value="Second Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="secrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'secrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="secrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'secrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank3" value="Three Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                  <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="trdrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'trdrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="trdrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'trdrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank4" value="Four Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                 <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fourrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'fourrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fourrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'fourrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank5" value="Five Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fiverank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'fiverank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="fiverank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'fiverank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank6" value="Six Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                  <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="sixrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'sixrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="sixrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'sixrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank7" value="Seven Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                  <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="sevenrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'sevenrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="sevenrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'sevenrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank8" value="Eight Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                 <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="eightrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'eightrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="eightrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'eightrank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank9" value="Nine Rank" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                    </div>
                                                </div>
                                                  <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="ninerank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'ninerank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="ninerank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'ninerank_token')->first();
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
                                                            <input type="text" class="input-bordered" min="0" name="rank10" value="Ten Rank" readonly>
                                                        </div>
                                                        <span class="input-note">Limit with level bonus amount, how much bonus will add into account for invite someone.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap">
                                                            <select class="select select-block select-bordered" name="referral_calc">
                                                                <option {{ get_setting('referral_calc') == 'percent' ? 'selected ' : '' }}value="percent">Fixed/Flat</option>
                                                                <!--<option {{ get_setting('referral_calc') == 'fixed' ? 'selected ' : '' }}value="fixed">Fixed/Flat</option>-->
                                                            </select>
                                                        </div>                                        
                                                        <span class="input-note">Choose whether the level bonus will calculated as percentage.</span>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="tenrank_refferal" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'tenrank_refferal')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div>
                                                         <span class="input-note">Choose whether the level bonus will calculated as percentage.</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-lg-3">
                                                    <div class="input-item input-with-label">
                                                        <div class="input-wrap wide-15">
                                                            <input type="number" class="input-bordered" min="0" name="tenrank_token" value="<?php
                                                            $setting = DB::table('settings')->where('field' , 'tenrank_token')->first();
                                                            echo $setting->value; ?>">
                                                            <span class="input-hint input-hint-lg"><span>&nbsp;&nbsp;</span></span>
                                                        </div><span class="input-note">Choose whether the level bonus will calculated as percentage.</span>
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
