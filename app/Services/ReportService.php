<?php

namespace app\Services;

use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ReportService
{
    public function getReport($range)
    {

        $returning_subscribers = DB::table('subscriptions')
            ->join('users', 'users.id', '=', 'subscriptions.user_id')
            ->where('first_subscription', false)
            ->where('is_active', true)
            ->where('subscriptions.created_at', '>=', $range)
            ->count('users.id');

        $first_time_subscribers = DB::table('subscriptions')
            // ->join('users', 'users.id', '=', 'subscriptions.user_id')
            ->where('first_subscription', true)
            ->where('is_active', true)
            //   ->where('subscriptions.created_at', '>=', $date)
            ->count('first_subscription');
        $first_time_naira_profits = DB::table('subscriptions')
            ->where('first_subscription', true)
            ->join('subscription_transactions', 'subscriptions.id', '=', 'subscription_transactions.subscription_id')
            ->where('subscriptions.created_at', '>=', $range)
            ->where('subscription_transactions.currency', '=', 'NGN')
            ->sum('subscription_transactions.selar_profit');
        // dd($first_time_naira_profits);

        $first_time_dollar_profits = DB::table('subscriptions')
            ->where('first_subscription', true)
            ->join('subscription_transactions', 'subscriptions.id', '=', 'subscription_transactions.subscription_id')
            ->where('subscriptions.created_at', '>=', $range)
            ->where('subscription_transactions.currency', '=', 'USD')
            ->sum('subscription_transactions.selar_profit');

        $returning_dollar_profits = DB::table('subscriptions')
            ->where('first_subscription', false)
            ->join('subscription_transactions', 'subscriptions.id', '=', 'subscription_transactions.subscription_id')
             ->where('subscriptions.created_at', '>=', $range)
            ->where('subscription_transactions.currency', '=', 'USD')
            ->sum('subscription_transactions.selar_profit');

        $returning_naira_profits = DB::table('subscriptions')
            ->where('first_subscription', false)
            ->join('subscription_transactions', 'subscriptions.id', '=', 'subscription_transactions.subscription_id')
              ->where('subscriptions.created_at', '>=', $range)
            ->where('subscription_transactions.currency', '=', 'NGN')
            ->sum('subscription_transactions.selar_profit');
        $active_subscribers = DB::table('subscriptions')->where('created_at', '>=', $range)
            ->where('is_active', true)
            ->count('is_active');

        $total_users = DB::table('users')
            ->count('id');

        $reports =  compact(
            'returning_subscribers',
            'first_time_subscribers',
            'first_time_dollar_profits',
            'first_time_naira_profits',
            'returning_dollar_profits',
            'returning_naira_profits',
            'active_subscribers',
            'total_users'
        );

        return $reports;
    }
}
