## v2.3.3
  - Fixed issue where unbanning IP did not work from IP view

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