```php 
php artisan migrate --path=/vendor/ilya_cig/track-session/database/migrations/2024_07_24_123500_create_track_session_table.php
```

```php 
composer require ilya_cig/track-session:dev-master
```

Add the service provider in `config/app.php`:

```php
CIG\TrackSession\Providers\TrackSessionServiceProvider::class,
```

And add the Agent alias to `config/app.php`:

```php
'TrackSession' => CIG\TrackSession\Facades\TrackSessionFacade::class,
```