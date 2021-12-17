<?php

namespace Own3d\SocialiteTrovo;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TrovoExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('trovo', __NAMESPACE__ . '\Provider');
    }
}
