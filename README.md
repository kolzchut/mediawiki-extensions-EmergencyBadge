# EmergencyBadge

**Temporary extension.** Displays the "שאגת הארי" SVG badge next to the site logo
in the Cassandra skin header on pages whose content area is `מצב חירום`.

## How it works

- A `BeforePageDisplay` hook enqueues the `ext.emergencyBadge` ResourceLoader module on every page.
- A **skip function** (`emergency-badge-skip.js`) causes the browser to skip the module entirely
  when `mw.config.get('wgArticleContentArea') !== 'מצב חירום'`, so there is no overhead on other pages.
- The JS inserts a `<span class="emergency-badge">` immediately after `#p-logo` in the DOM.
  In the RTL flex header this places the badge visually to the left of the logo.
- The SVG is embedded as a base64 data URI via LESS `/* @embed */`, so no extra HTTP request is made.

## Responsive sizes

| Viewport width | Badge size |
|----------------|-----------|
| > 1000 px      | 85 × 50 px |
| 386 – 1000 px  | 68 × 40 px |

## Installation

Add to `LocalSettings.php` (or the appropriate settings file):

```php
wfLoadExtension( 'WikiRights/EmergencyBadge' );
```

## Removal

1. Delete this directory.
2. Remove the `wfLoadExtension` line above.
