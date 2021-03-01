<?php

/**
 * Global app configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // The environment to run BookStack in.
    // Options: production, development, demo, testing
    'env' => env('APP_ENV', 'production'),

    // Enter the application in debug mode.
    // Shows much more verbose error messages. Has potential to show
    // private configuration variables so should remain disabled in public.
    'debug' => env('APP_DEBUG', false),

    // The number of revisions to keep in the database.
    // Once this limit is reached older revisions will be deleted.
    // If set to false then a limit will not be enforced.
    'revision_limit' => env('REVISION_LIMIT', 50),

    // The number of days that content will remain in the recycle bin before
    // being considered for auto-removal. It is not a guarantee that content will
    // be removed after this time.
    // Set to 0 for no recycle bin functionality.
    // Set to -1 for unlimited recycle bin lifetime.
    'recycle_bin_lifetime' => env('RECYCLE_BIN_LIFETIME', 30),

    // Allow <script> tags to entered within page content.
    // <script> tags are escaped by default.
    // Even when overridden the WYSIWYG editor may still escape script content.
    'allow_content_scripts' => env('ALLOW_CONTENT_SCRIPTS', false),

    // Override the default behaviour for allowing crawlers to crawl the instance.
    // May be ignored if view has be overridden or modified.
    // Defaults to null since, if not set, 'app-public' status used instead.
    'allow_robots' => env('ALLOW_ROBOTS', null),

    // Application Base URL, Used by laravel in development commands
    // and used by BookStack in URL generation.
    'url' => env('APP_URL', '') === 'http://bookstack.dev' ? '' : env('APP_URL', ''),

    // A list of hosts that BookStack can be iframed within.
    // Space separated if multiple. BookStack host domain is auto-inferred.
    'iframe_hosts' => env('ALLOWED_IFRAME_HOSTS', null),

    // Application timezone for back-end date functions.
    'timezone' => env('APP_TIMEZONE', 'UTC'),

    // Default locale to use
    'locale' => env('APP_LANG', 'en'),

    // Locales available
    'locales' => ['en', 'ar', 'bg', 'cs', 'da', 'de', 'de_informal', 'es', 'es_AR', 'fa', 'fr', 'he', 'hu', 'it', 'ja', 'ko', 'nl', 'nb', 'pt', 'pt_BR', 'sk', 'sl', 'sv', 'pl',  'ru', 'th', 'tr', 'uk', 'vi', 'zh_CN', 'zh_TW',],

    //  Application Fallback Locale
    'fallback_locale' => 'en',

    // Faker Locale
    'faker_locale' => 'en_GB',

    // Enable right-to-left text control.
    'rtl' => false,

    // Auto-detect the locale for public users
    // For public users their locale can be guessed by headers sent by their
    // browser. This is usually set by users in their browser settings.
    // If not found the default app locale will be used.
    'auto_detect_locale' => env('APP_AUTO_LANG_PUBLIC', true),

    // Encryption key
    'key' => env('APP_KEY', 'AbAZchsay4uBTU33RubBzLKw203yqSqr'),

    // Encryption cipher
    'cipher' => 'AES-256-CBC',

    // Application Services Provides
    'providers' => [

        // Laravel Framework Service Providers...
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        SocialiteProviders\Manager\ServiceProvider::class,

        // Third party service providers
        Intervention\Image\ImageServiceProvider::class,
        Barryvdh\DomPDF\ServiceProvider::class,
        Barryvdh\Snappy\ServiceProvider::class,

        // BookStack replacement service providers (Extends Laravel)
        BookStack\Providers\PaginationServiceProvider::class,
        BookStack\Providers\TranslationServiceProvider::class,

        // BookStack custom service providers
        BookStack\Providers\AuthServiceProvider::class,
        BookStack\Providers\AppServiceProvider::class,
        BookStack\Providers\BroadcastServiceProvider::class,
        BookStack\Providers\EventServiceProvider::class,
        BookStack\Providers\RouteServiceProvider::class,
        BookStack\Providers\CustomFacadeProvider::class,
        BookStack\Providers\CustomValidationServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    // Class aliases, Registered on application start
    'aliases' => [

        // Laravel
        'App'       => Illuminate\Support\Facades\App::class,
        'Arr'       => Illuminate\Support\Arr::class,
        'Artisan'   => Illuminate\Support\Facades\Artisan::class,
        'Auth'      => Illuminate\Support\Facades\Auth::class,
        'Blade'     => Illuminate\Support\Facades\Blade::class,
        'Bus'       => Illuminate\Support\Facades\Bus::class,
        'Cache'     => Illuminate\Support\Facades\Cache::class,
        'Config'    => Illuminate\Support\Facades\Config::class,
        'Cookie'    => Illuminate\Support\Facades\Cookie::class,
        'Crypt'     => Illuminate\Support\Facades\Crypt::class,
        'DB'        => Illuminate\Support\Facades\DB::class,
        'Eloquent'  => Illuminate\Database\Eloquent\Model::class,
        'Event'     => Illuminate\Support\Facades\Event::class,
        'File'      => Illuminate\Support\Facades\File::class,
        'Hash'      => Illuminate\Support\Facades\Hash::class,
        'Input'     => Illuminate\Support\Facades\Input::class,
        'Inspiring' => Illuminate\Foundation\Inspiring::class,
        'Lang'      => Illuminate\Support\Facades\Lang::class,
        'Log'       => Illuminate\Support\Facades\Log::class,
        'Mail'      => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password'  => Illuminate\Support\Facades\Password::class,
        'Queue'     => Illuminate\Support\Facades\Queue::class,
        'Redirect'  => Illuminate\Support\Facades\Redirect::class,
        'Redis'     => Illuminate\Support\Facades\Redis::class,
        'Request'   => Illuminate\Support\Facades\Request::class,
        'Response'  => Illuminate\Support\Facades\Response::class,
        'Route'     => Illuminate\Support\Facades\Route::class,
        'Schema'    => Illuminate\Support\Facades\Schema::class,
        'Session'   => Illuminate\Support\Facades\Session::class,
        'Storage'   => Illuminate\Support\Facades\Storage::class,
        'Str'       => Illuminate\Support\Str::class,
        'URL'       => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View'      => Illuminate\Support\Facades\View::class,
        'Socialite' => Laravel\Socialite\Facades\Socialite::class,

        // Third Party
        'ImageTool' => Intervention\Image\Facades\Image::class,
        'DomPDF' => Barryvdh\DomPDF\Facade::class,
        'SnappyPDF' => Barryvdh\Snappy\Facades\SnappyPdf::class,

        // Custom BookStack
        'Activity' => BookStack\Facades\Activity::class,
        'Views'    => BookStack\Facades\Views::class,
        'Images'   => BookStack\Facades\Images::class,
        'Permissions' => BookStack\Facades\Permissions::class,

    ],

    // Proxy configuration
    'proxies' => env('APP_PROXIES', ''),

];
