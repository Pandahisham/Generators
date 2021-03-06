{
    "name": "socialiteproviders/{{ $nameLowerCase }}",
    "description": "{{ $nameStudlyCase }} {{ $oauthVersion }} Provider for Laravel Socialite",
    "license": "MIT",
    "authors": [{
        "name": "{{ $authorName }}",
        "email": "{{ $authorMail }}"
    }],
    "require": {
        "php": ">=5.5.9",
        "socialiteproviders/manager": "2.*"
    },
    "autoload": {
        "psr-4": {
            "SocialiteProviders\\{{ $nameStudlyCase }}\\": "src/"
        }
    }
}
