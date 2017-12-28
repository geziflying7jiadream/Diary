
/*
             *中发白 顺子 +1 -1 开始
             */
            foreach($players as $i => $uid){
//                $mjlst = $allMjs[$uid];
                //蹲庄
                if($game->canZhuang == true){
                    //蹲庄
                    if($type == 1){//自摸
                        if($huUid == $game->zhuang){
                            if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//胡家有中发白
                                if($uid == $huUid){//胡家+1
                                    $fanData[$uid] +=1*$hufan * 3 * $dunZhuang;
                                    $fanInfos[$uid][0] +=1*$hufan *3* $dunZhuang;
                                }else{//不是胡家-1
                                    $fanData[$uid] -=1*$hufan* $dunZhuang;
                                    $fanInfos[$uid][0] -=1*$hufan* $dunZhuang;
                                }
                            }
                            if($uid != $huUid && MaJiangConstant::isShunZi($allMjs[$uid]) == true){//另三家有中发白
                                $fanData[$huUid] -=1;
                                $fanInfos[$huUid][0] -=1;
                                $fanData[$uid] +=1;
                                $fanInfos[$uid][0] +=1;
                            }
                        }else{
                            if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//胡家有中发白
                                if($uid == $huUid){//胡家+1
                                    $fanData[$uid] +=1*$hufan * (2 + $dunZhuang);
                                    $fanInfos[$uid][0] +=1*$hufan * (2 + $dunZhuang);
                                }else{//不是胡家-1
                                    if($uid == $game->zhuang){
                                        $fanData[$uid] -=1*$hufan* $dunZhuang;
                                        $fanInfos[$uid][0] -=1*$hufan* $dunZhuang;
                                    }else{
                                        $fanData[$uid] -=1*$hufan;
                                        $fanInfos[$uid][0] -=1*$hufan;
                                    }
                                }
                            }
                            if($uid != $huUid && MaJiangConstant::isShunZi($allMjs[$uid]) == true){//另三家有中发白
                                $fanData[$huUid] -=1;
                                $fanInfos[$huUid][0] -=1;
                                $fanData[$uid] +=1;
                                $fanInfos[$uid][0] +=1;
                            }
                        }
                    }else{//点炮
                        if($huUid == $game->zhuang){
                            if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//点炮：胡家有中发白
                                if($uid == $huUid) {//胡家+1
                                    $fanData[$uid] +=1*$dunZhuang;
                                    $fanInfos[$uid][0] +=1*$dunZhuang;
                                }else if($uid == $game->pao){
                                    $fanData[$uid] -=1*$dunZhuang;
                                    $fanInfos[$uid][0] -=1*$dunZhuang;
                                }
                            }
                        }else{
                            if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//点炮：胡家有中发白
                                if($game->pao == $game->zhuang){
                                    if($uid == $huUid) {//胡家+1
                                        $fanData[$uid] +=1*$dunZhuang;
                                        $fanInfos[$uid][0] +=1*$dunZhuang;
                                    }else if($uid == $game->pao){
                                        $fanData[$uid] -=1*$dunZhuang;
                                        $fanInfos[$uid][0] -=1*$dunZhuang;
                                    }
                                }else{
                                    if($uid == $huUid) {//胡家+1
                                        $fanData[$uid] +=1;
                                        $fanInfos[$uid][0] +=1;
                                    }else if($uid == $game->pao){
                                        $fanData[$uid] -=1;
                                        $fanInfos[$uid][0] -=1;
                                    }
                                }
                            }
                        }
                        if(MaJiangConstant::isShunZi($allMjs[$game->pao]) == true){//点炮家有中发白
                            if($uid == $huUid) {//胡家+1
                                $fanData[$uid] -=1;
                                $fanInfos[$uid][0] -=1;
                            }else if($uid == $game->pao){
                                $fanData[$uid] +=1;
                                $fanInfos[$uid][0] +=1;
                                echo "点炮中发白".$fanInfos[$uid][0]."\n";
                            }
                        }
                    }
                }

                if($game->canZhuang != true){
                    //不蹲庄
                    if($type == 1){//自摸
                        if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//胡家有中发白
                            if($uid == $huUid){//胡家+1
                                $fanData[$uid] +=1*$hufan * 3;
                                $fanInfos[$uid][0] +=1*$hufan *3;
                            }else{//不是胡家-1
                                $fanData[$uid] -=1*$hufan;
                                $fanInfos[$uid][0] -=1*$hufan;
                            }
                        }
                        if($uid != $huUid && MaJiangConstant::isShunZi($allMjs[$uid]) == true){//另三家有中发白
                            $fanData[$huUid] -=1;
                            $fanInfos[$huUid][0] -=1;
                            $fanData[$uid] +=1;
                            $fanInfos[$uid][0] +=1;
                        }
                    }else{//点炮
                        if(MaJiangConstant::isShunZi($allMjs[$huUid]) == true){//点炮：胡家有中发白
                            if($uid == $huUid) {//胡家+1
                                $fanData[$uid] +=1;
                                $fanInfos[$uid][0] +=1;
                            }else if($uid == $game->pao){
                                $fanData[$uid] -=1;
                                $fanInfos[$uid][0] -=1;
                            }
                        }
                        if(MaJiangConstant::isShunZi($allMjs[$game->pao]) == true){//点炮家有中发白
                            if($uid == $huUid) {//胡家+1
                                $fanData[$uid] -=1;
                                $fanInfos[$uid][0] -=1;
                            }else if($uid == $game->pao){
                                $fanData[$uid] +=1;
                                $fanInfos[$uid][0] +=1;
                            }
                        }
                    }
                }
            }
            /*
            *中发白 顺子 +1 -1 结束
            */

