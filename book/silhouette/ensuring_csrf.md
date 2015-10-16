```php
    <meta name="csrf-token" content="{{ csrf_token() }}" />
```

```js
    <script>
      jQuery(document).ready(function () {
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      });
    </script>
```