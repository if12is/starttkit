<?php

namespace App\Providers;

use App\Actions\Fortify\AuthenticateUser;
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
  {
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $request = app(Request::class);
      if ($request->is('admin/register')) {
        Redirect::to('admin/login')->send();
      }
      if ($request->is('admin/*')) {
        config()->set('fortify.guard', 'admin');
        config()->set('fortify.passwords', 'admins');
        config()->set('fortify.prefix', 'admin');
      }

      $this->app->instance(LoginResponse::class, new class implements LoginResponse
      {
        public function toResponse($request): \Illuminate\Http\RedirectResponse
        {
          if ($request->user('admin')) {
            return redirect()->intended('admin/dashboard');
          }
          return redirect()->intended('/home');
        }
      });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      Fortify::createUsersUsing(CreateNewUser::class);
      Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
      Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
      Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

      RateLimiter::for('login', function (Request $request) {
        $email = (string) $request->email;

        return Limit::perMinute(5)->by($email . $request->ip());
      });

      RateLimiter::for('two-factor', function (Request $request) {
        return Limit::perMinute(5)->by($request->session()->get('login.id'));
      });
      if (Config::get('fortify.guard') == 'web') {
        Fortify::viewPrefix('auth.');
      } else {
  //          Fortify::authenticateUsing([new AuthenticateUser(), 'Authenticate']);
        Fortify::viewPrefix('auth.');
      }
    }
  }
