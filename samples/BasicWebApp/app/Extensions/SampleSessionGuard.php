<?php

namespace App\Extensions;

use Illuminate\Auth\GuardHelpers;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Authenticatable;

class SampleSessionGuard extends SessionGuard
{
  use GuardHelpers;

  /**
   * Log a user into the application.
   *
   * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
   * @param  bool  $remember
   * @return void
   */
  public function login(Authenticatable $user, $remember = false)
  {
    parent::login($user, $remember);

    // Save the user to Global session
    $loggedInUsers = session('loggedInUsers');
    $loggedInUsers[$user->getAuthIdentifier()] = \serialize($user);
    session(['loggedInUsers' => $loggedInUsers]);
  }

  /**
   * Log the user out of the application.
   *
   * @return void
   */
  public function logout()
  {
    // Remove the user from Global session
    $user = $this->user();
    $loggedInUsers = session('loggedInUsers');
    unset($loggedInUsers[$user->getAuthIdentifier()]);
    session(['loggedInUsers' => $loggedInUsers]);

    parent::logout();
  }
}