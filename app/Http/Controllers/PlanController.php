<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use APP\Http\AuthController;

class PlanController extends Controller
{
    public function plans_page()
    {
        $plans = Plan::get();
        return view('front.plans.plans', compact("plans"));
    }

    public function show(Plan $plan, Request $request)

    {
        $user = Auth::user();
        $intent = $user->createSetupIntent();
        return view("front.plans.subscription", compact("plan", "intent"));
    }

    public function subscription(Request $request)

    {
        
        $plan = Plan::find($request->plan);
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)->create($request->token);
        return view("front.plans.plans");
    }

    
}
