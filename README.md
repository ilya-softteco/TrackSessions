TrackSession
===

This is a simple Laravel package to track a user's session anywhere in the code.

Installation
------------

Install using composer:

```bash
composer require ilya_cig/track-session:dev-master
```

Run migrations:

```php 
php artisan migrate --path=/vendor/ilya_cig/track-session/database/migrations/2024_07_24_123500_create_track_session_table.php
```


(optional) Add the service provider in `config/app.php`:

```php
CIG\TrackSession\Providers\TrackSessionServiceProvider::class,
```

(optional) And add the Agent alias to `config/app.php`:

```php
'TrackSession' => CIG\TrackSession\Facades\TrackSessionFacade::class,
```

Basic Usage
-----------

If you want track session just use:


```php
use TrackSession;

TrackSession::track();
```
### OR


```php
use CIG\TrackSession\Facades\TrackSessionFacade;

TrackSessionFacade::track();
```

### OR


```php
use CIG\TrackSession\Services\TrackSessionServices;

$trackSession = new TrackSessionServices();
$trackSession->track();
```

### OR
```php
use Illuminate\Support\Facades\App;
$trackSession = App::make('track.session');
$trackSession->track();
```

### OR

```php
use CIG\TrackSession\Jobs\TrackSession;
TrackSession::dispatch();
```

# License

TrackSession is licensed under [The MIT License (MIT)](LICENSE).



# Testing

```bash
vendor/bin/testbench  migrate
```

```bash
./vendor/bin/phpunit --filter test_save_in_table  tests/Feature/TrackSession.php
```