<?php

namespace Freee\Accounting\Laravel\Concerns;

trait RefreshToken
{
    /**
     * @param  string  $refresh_token
     *
     * @return array
     */
    public function refreshToken(string $refresh_token)
    {
        $url = 'https://accounts.secure.freee.co.jp/public_api/token';

        $response = $this->httpClient()->post($url, [
            'json' => [
                'grant_type'    => 'refresh_token',
                'client_id'     => $this->client_id,
                'client_secret' => $this->client_secret,
                'refresh_token' => $refresh_token,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
