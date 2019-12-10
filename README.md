Security Headers
=========================

Simple class for applying security headers to website.

Just call `SecurityHeaders::setAllAutoPolicies()` before rendering anything.

## Changelog

### 0.1.1
* Remove env=HTTPS header line, since https://hstspreload.org/ says it is no longer valid

### 0.1.0
* Initial stable release