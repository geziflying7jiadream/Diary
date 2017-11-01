<?php
if($type == 1){//自摸
            if($huUid == $game->zhuang){
                if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//胡家有中发白
                        if($uid == $huUid){//胡家+1
                            $fanData[$uid] +=1 * 3 * $dunZhuang;
                            $fanInfos[$uid][0] +=1 *3* $dunZhuang;
                        }else{//不是胡家-1
                            $fanData[$uid] -=1* $dunZhuang;
                            $fanInfos[$uid][0] -=1* $dunZhuang;
                        }
                }else if($uid != $huUid && MaJiangConstant::isShunZi($allMjs[$uid]) == true){//另三家有中发白
                            $fanData[$huUid] -=1;
                            $fanInfos[$huUid][0] -=1;
                            $fanData[$uid] +=1;
                            $fanInfos[$uid][0] +=1;
               }
            }else{
              if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//胡家有中发白
                        if($uid == $huUid){//胡家+1
                            $fanData[$uid] +=1 * (2 + $dunZhuang);
                            $fanInfos[$uid][0] +=1 * (2 + $dunZhuang);
                        }else{//不是胡家-1
                            if($uid == $game->zhuang){
                              $fanData[$uid] -=1* $dunZhuang;
                              $fanInfos[$uid][0] -=1* $dunZhuang;
                            }else{
                              $fanData[$uid] -=1;
                              $fanInfos[$uid][0] -=1;
                            }
                        }
                }else if($uid != $huUid && MaJiangConstant::isShunZi($allMjs[$uid]) == true){//另三家有中发白
                            $fanData[$huUid] -=1;
                            $fanInfos[$huUid][0] -=1;
                            $fanData[$uid] +=1;
                            $fanInfos[$uid][0] +=1;
               }
            }
            
            
            /**
            *
                    if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//胡家有中发白
                        if($uid == $huUid){//胡家+1
                            $fanData[$uid] +=1 * 3;
                            $fanInfos[$uid][0] +=1 *3;
                        }else{//不是胡家-1
                            $fanData[$uid] -=1;
                            $fanInfos[$uid][0] -=1;
                        }
                    }else if($uid != $huUid && MaJiangConstant::isShunZi($allMjs[$uid]) == true){//另三家有中发白
                            $fanData[$huUid] -=1;
                            $fanInfos[$huUid][0] -=1;
                            $fanData[$uid] +=1;
                            $fanInfos[$uid][0] +=1;
                    }
            */
                }else{//点炮
                
                /**
                *
                    if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//点炮：胡家有中发白
                        if($uid == $huUid) {//胡家+1
                            $fanData[$uid] +=1;
                            $fanInfos[$uid][0] +=1;
                        }else if($uid == $game->pao){
                            $fanData[$uid] -=1;
                            $fanInfos[$uid][0] -=1;
                        }
                    }else if(MaJiangConstant::isShunZi($allMjs[$game->pao]) == true){//点炮家有中发白
                        if($uid == $huUid) {//胡家+1
                            $fanData[$uid] -=1;
                            $fanInfos[$uid][0] -=1;
                        }else if($uid == $game->pao){
                            $fanData[$uid] +=1;
                            $fanInfos[$uid][0] +=1;
                        }
                    }
                */
                }

?>
