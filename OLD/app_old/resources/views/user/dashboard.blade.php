@extends('layouts.user')
@section('title', __('User Dashboard'))
@php
$has_sidebar = false;
$base_currency = base_currency();
@endphp

@section('content')
<div class="content-area user-account-dashboard">
    @include('layouts.messages')
    <div class="row">
        <div class="col-lg-4">
            {!! UserPanel::user_balance_card($contribution, ['vers' => 'side', 'class'=> 'card-full-height']) !!}
        </div>
        <div class="col-lg-4 col-md-6">
            {!! UserPanel::user_token_block('', ['vers' => 'buy']) !!}
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="account-info card card-full-height">
                <div class="card-innr">
                    {!! UserPanel::user_account_status() !!}
                    <div class="gaps-2x"></div>
                    {!! UserPanel::user_account_wallet() !!}
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="token-statistics card card-token card-full-height">
                <div class="card-innr">
                    <div class="token-balance token-balance-with-icon"><div class="token-balance-icon"><img src="https://mlm.pulse-value.com/public/images/token-symbol-light.png" alt=""></div>
                        <div class="token-balance-text"><h6 class="card-sub-title">Rank Status : <span style="color: white; font-size: 18px;"><?php echo $user['rank']; ?></span></h6>
                            Rank Bouns :<span class="lead"> <?php echo $user['rankbouns']; ?> <span>USD</span></span>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="token-statistics card card-token card-full-height">
                <div class="card-innr">
                    <div class="token-balance token-balance-with-icon"><div class="token-balance-icon"><img src="https://mlm.pulse-value.com/public/images/token-symbol-light.png" alt=""></div>
                        <div class="token-balance-text"><h6 class="card-sub-title">Token Bouns</h6>
                            <span class="lead"><?php echo $user['tokenbonus']; ?> <span>ETH, BTC, TLE</span></span>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="token-statistics card card-token card-full-height">
                <div class="card-innr">
                    <div class="token-balance token-balance-with-icon"><div class="token-balance-icon"><img src="https://mlm.pulse-value.com/public/images/token-symbol-light.png" alt=""></div>
                        <div class="token-balance-text"><h6 class="card-sub-title">Dollar Bouns</h6>
                            <span class="lead"><?php echo $user['dollarbonus']; ?>  <span>USD </span></span>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        @if(get_page('home_top', 'status') == 'active')
        <div class="col-12 col-lg-7">
            {!! UserPanel::content_block('welcome', ['image' => 'welcome.png', 'class' => 'card-full-height']) !!}
        </div>
        <div class="col-12 col-lg-5">
            {!! UserPanel::token_sales_progress('',  ['class' => 'card-full-height']) !!}
        </div>
        @endif

    </div>
</div>
@endsection
