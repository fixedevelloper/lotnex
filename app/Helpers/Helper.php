<?php


namespace App\Helpers;


use App\Models\User;
use Carbon\Carbon;

class Helper
{

    public static function calculMemberIn24Hour($id){
        $start=Carbon::today()->setTime(1,00,00)->format("Y-m-d h:i:s");
        $user=User::query()->firstWhere(['id_contract'=>$id]);
        $end=Carbon::today()->addDays(1)->format("Y-m-d h:i:s");
        $totalUp=User::query()->where(['address_parent'=>$user->address_parent])->whereBetween("created_at",[$start,$end])
          ->count();
        $users=User::all();

    }
    public static function calculTeam($user,$visited=[]){
        if (in_array($user->id,$visited)){
            return 0;
        }
        logger($user);
        $teams=User::query()->where(['address_parent'=>$user->address_parent])->get();
        $team_total=User::query()->where(['address_parent'=>$user->address_parent])->sum('direct_patner_count');
        foreach ($teams as $team){
            $team_total+=self::calculTeam($team);
        }
        return $team_total;
}
}