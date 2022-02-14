# GUS ChangeLog

## 2.5.2

- Fixed configuration error where configuration dropdowns did not display

## v2.5.1

- Updated Browser Detection
- Enhanced ignore hanlding to be much more efficient
- Increased user_agent storage to 256 characters

## v2.4.3

- Fixed a typo in the language file inclusion

## v2.4.2

- Updated Browser Detection library
- Fixed typo in permission name for uninstall

## 2.4.1

- Improved browser and OS detection
- Improved date handling to now use the system's configured timezone for all date / time references
- Fixed a PHP v5.3 compatibility issue

## 2.4.0

- Removed duplicate link to privacy policy
- Support Privacy Plugin data export
- Allow user to opt-in / opt-out of statistics collection
- Purge user's data on delete
- Fixed size of 'version' column in user agent table
- Fixed size of username column to match glFusion username length

## 2.3.4

- Fixed dependency issue on Bad Behavior plugin

## v2.3.3

- Additional SQL updates to better handle date ranges
- Fixed error where GUS block not removed on uninstall
- GUS block now toggles based on enabling / disabing the plugin
- Fixed issue where unbanning IP did not work from IP view
- Fixed SQL error when generating temporary tables

## v2.3.2

- Improved support for alternate admin directory
- Fixed installation issue due to missing global $_CONF

## v2.3.1

- Utilize uikit styles
- Modify index sizes
- Improved layout of stats block when users have been deleted

## v2.3.0

- Moved to online configuration
- Fixed uninstall error
- Fixed install error where the block was created with a mis-formed title

## v2.2.1

- Had developer mode enabled by accident

## v2.2.0

- Replaced all egreg() calls with preg_match()
- Enhanced browser and OS detection code to support modern browsers
- Integrated with glFusion's BB2 banning functions

## v2.1.8

- Fixed escaped string issue in block title.
- Implemented improved admin menu
- Corrected some direct mysql_() function calls.

## v2.1.7

- Implemented new glFusion admin authentication

## v2.1.6

- Improved support for BAN plugin - leverage Lee's new APIs
- Added Dutch translation

## v2.1.5

## v2.1.4

- Removed link to the now non-existent BAN plugin

## v2.1.3

- Added 'none' option to host_lookup
- Fixed issue where path was not properly added to view page path

## v2.1.2

- Updated to support glFusion v1.1.3

## v2.1.1

- Fixed missing include on autoinstaller

## v2.1.0

- Added new feature to purge history data
- Implemented new installer routines for glFusion v1.1.2+
- Implemented new 404 handling when plugin is disabled
- No longer crash if add stats fails
- Added RFI checks to language files

## v2.0.0

- Fixed several issues with the caching code

## v1.8.0

- Initial port to glFusion CMS
