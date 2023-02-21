<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us10'
        ]);

        $response = $mailchimp->lists->addListMember('5a15357639', [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }
}
