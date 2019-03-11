# User Agent
A desktop/mobile user agent parser for OctoberCMS.

### Documentation
This plugin is a wrapper for [jenssegers/agent](https://github.com/jenssegers/agent) package. It provides a twig markup tag for the Jenssegers\Agent\Agent class.

### Usage
This plugin uses Laravel's package discovery feature to register the Service Provider and Alias for the required jenssegers/agent package. Make sure that `php artisan package:discover` has been run.

#### Magic is-method
```twig
{% if agent('isAndroidOS') %}
{% if agent('isNexus') %}
{% if agent('isSafari') %}
```

#### Mobile detection
```twig
{% if agent('isMobile') %}
{% if agent('isTablet') %}
```

#### Accept languages
```twig
{% if agent('languages') == 'en' %}
```

#### Device name
```twig
{% if agent('device') == 'iPhone' %}
```

#### Operating system name 
```twig
{% if agent('platform') == 'OS X' %}
```

#### Browser name
```twig
{% if agent('browser') == 'Chrome' %}
```

#### Desktop detection
```twig
{% if agent('isDesktop') %}
```

#### Robot detection
```twig
{% if agent('isRobot') %}
````

#### Robot name
```twig
{% if agent('robot') == 'Googlebot' %}
````
