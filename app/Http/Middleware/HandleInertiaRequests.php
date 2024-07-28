<?php

namespace App\Http\Middleware;


use App\Models\Favorite_sub_categorie;
use App\Models\Favorite_tool;
use App\Models\Tool;
use App\Models\Custom_categorie;
use App\Models\Favorite_original_categorie;
use App\Models\Original_categorie;
use App\Models\Recent_tool;
use App\Models\Sub_categorie;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;
use Carbon\Carbon;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => function () use ($request) {
                return [
                    'user' => $request->user() ? [
                        'id' => $request->user()->id,
                        'name' => $request->user()->name,
                        'email' => $request->user()->email,
                        'avatar' => $request->user()->avatar,
                        'sid_img' => $request->user()->sid_img,
                        'filter' => $request->user()->filter,
                        'darkMode' => $request->user()->darkMode,
                        'admin' => $request->user()->admin,
                        'blogs_control' => $request->user()->blogs_control,
                        'projects_control' => $request->user()->projects_control,
                        'about_control' => $request->user()->about_control,
                        'testimonial_control' => $request->user()->testimonial_control,
                        'exp_control' => $request->user()->exp_control,
                        'skils_control' => $request->user()->skils_control,
                        'user_control' => $request->user()->user_control,
                        'service_control' => $request->user()->service_control,
                        'contact_control' => $request->user()->contact_control,
                    ] : null,
                ];
            },
            
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
            'flash' => function () use ($request) {
                return [
                    'favorit_title' => $request->session()->get('favorit_title'),
                    'favorit_description' => $request->session()->get('favorit_description'),
                    'success' => $request->session()->get('success'),
                    'error' => $request->session()->get('error'),
                ];
            },
        ]);
    }
}
