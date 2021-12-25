@extends('layouts.user')
 
@php
($has_sidebar = true)
@endphp

@section('content')
<div class="content-area content-area-mh card user-account-pages">
    <div class="card-innr">
        <div class="card-head">
            <h2 class="card-title card-title-lg">MLM Level</h2>
            
            <p class="large"></p>
            
        </div>
        
        <div class="card-text">
            
        </div>
  

        <div class="gaps-1x"></div>
        <div class="sap sap-gap"></div>
        <div class="card-head">
            <h4 class="card-title card-title-sm">level List</h4>
        </div>
        <table class="data-table dt-init refferal-table" data-items="10">
            <thead>
                <tr class="data-item data-head">
                    <th class="data-col refferal-date"><span>Level Status</span></th>
                    <th class="data-col refferal-date"><span>Level ID</span></th>
                    <th class="data-col refferal-date"><span>Level Name</span></th>
                    <th class="data-col refferal-date"><span>Level Token Bonus</span></th>
                    <th class="data-col refferal-date"><span>Level Dollar Bonus</span></th>
                </tr>
            </thead>
            <tbody>
               <?php 
                
                
                $userid1 = $user['referral'];
                
                if(!empty($userid1)){
                    $level1 = DB::table('users')->where('id', $userid1)->first();
                    $userid2 = $level1->referral;
                    if(!empty($userid2)){
                        $level2 = DB::table('users')->where('id', $userid2)->first();
                        $userid3 = $level2->referral;
                            if(!empty($userid3)){
                                $level3 = DB::table('users')->where('id', $userid3)->first();
                                $userid4 = $level3->referral;
                                    if(!empty($userid4)){
                                        $level4 = DB::table('users')->where('id', $userid4)->first();
                                        $userid5 = $level4->referral;
                                            if(!empty($userid5)){
                                                $level5 = DB::table('users')->where('id', $userid5)->first();
                                                $userid6 = $level5->referral;
                                                     if(!empty($userid6)){
                                                        $level6 = DB::table('users')->where('id', $userid6)->first();
                                                        $userid7 = $level6->referral;
                                                            if(!empty($userid7)){
                                                                $level7 = DB::table('users')->where('id', $userid7)->first();
                                                                $userid8 = $level7->referral;
                                                                    if(!empty($userid8)){
                                                                        $level8 = DB::table('users')->where('id', $userid8)->first();
                                                                        $userid9 = $level8->referral;
                                                                            if(!empty($userid9)){
                                                                                $level9 = DB::table('users')->where('id', $userid9)->first();
                                                                                $userid10 = $level9->referral;
                                                                                    if(!empty($userid10)){
                                                                                        $level10 = DB::table('users')->where('id', $userid10)->first();
                                                                                       // $userid10 = $level9->referral;
                                                                                    }
                                                                            }
                                                                    }
                                                            }
                                                    }
                                            }
                                    }
                            }
                    }
                }
             
               ?>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "1 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level1)){ echo "~"; }else{ echo $level1->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level1)){ echo "~"; }else{ echo $level1->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level1)){ echo "~"; }else{ echo $level1->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level1)){ echo "~"; }else{ echo $level1->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "2 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level2)){ echo "~"; }else{ echo $level2->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level2)){ echo "~"; }else{ echo $level2->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level2)){ echo "~"; }else{ echo $level2->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level2)){ echo "~"; }else{ echo $level2->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "3 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level3)){ echo "~"; }else{ echo $level3->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level3)){ echo "~"; }else{ echo $level3->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level3)){ echo "~"; }else{ echo $level3->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level3)){ echo "~"; }else{ echo $level3->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "4 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level4)){ echo "~"; }else{ echo $level4->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level4)){ echo "~"; }else{ echo $level4->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level4)){ echo "~"; }else{ echo $level4->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level4)){ echo "~"; }else{ echo $level4->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "5 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level5)){ echo "~"; }else{ echo $level5->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level5)){ echo "~"; }else{ echo $level5->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level5)){ echo "~"; }else{ echo $level5->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level5)){ echo "~"; }else{ echo $level5->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "6 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level6)){ echo "~"; }else{ echo $level6->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level6)){ echo "~"; }else{ echo $level6->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level6)){ echo "~"; }else{ echo $level6->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level6)){ echo "~"; }else{ echo $level6->dollarbonus;}  ?></td>
                </tr>
               <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "7 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level7)){ echo "~"; }else{ echo $level7->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level7)){ echo "~"; }else{ echo $level7->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level7)){ echo "~"; }else{ echo $level7->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level7)){ echo "~"; }else{ echo $level7->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "8 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level8)){ echo "~"; }else{ echo $level8->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level8)){ echo "~"; }else{ echo $level8->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level8)){ echo "~"; }else{ echo $level8->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level8)){ echo "~"; }else{ echo $level8->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "9 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level9)){ echo "~"; }else{ echo $level9->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level9)){ echo "~"; }else{ echo $level9->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level9)){ echo "~"; }else{ echo $level9->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level9)){ echo "~"; }else{ echo $level9->dollarbonus;}  ?></td>
                </tr>
                <tr class="data-item">
                    <td class="data-col refferal-date"><?php echo "10 Level" ;  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level10)){ echo "~"; }else{ echo $level10->id;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level10)){ echo "~"; }else{ echo $level10->name;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level10)){ echo "~"; }else{ echo $level10->tokenbonus;}  ?></td>
                    <td class="data-col refferal-date"><?php  if(empty($level10)){ echo "~"; }else{ echo $level10->dollarbonus;}  ?></td>
                </tr>
                <!--<tr class="data-item">-->
                <!--    <td class="data-col"></td>-->
                <!--    <td class="data-col"></td>-->
                <!--    <td class="data-col"></td>-->
                <!--</tr>-->
               
            </tbody>
        </table>
    </div>
</div>
@endsection