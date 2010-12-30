<?php
/**
 * This file is used to create canned searches for your local setup.  They are
 * defined in this separate file so that are not overwritten when you next
 * upgrade mythweb. Just use the php square bracket syntax to append to the
 * Canned_Searches array.  See the examples included in this file. The
 * canned search names (array keys) are not subject to translate as it's
 * intented for local use and not global distribution.
 * Remove the .default extension to activate
 *
 * @url         $URL: http://svn.mythtv.org/svn/branches/release-0-21-fixes/mythplugins/mythweb/modules/tv/canned_searches.conf.php $
 * @date        $Date: 2007-12-31 21:38:38 +0100 (Mo, 31. Dez 2007) $
 * @version     $Revision: 15274 $
 * @author      $Author: xris $
 * @license     GPL
 *
 * @package     MythWeb
 *
/**/

$Canned_Searches['Movies on Aussie TV (non HD)'] = '( program.category_type like "%movie%" OR program.title like "%movie%" ) AND timediff(program.endtime, program.starttime) > "01:10:00" and callsign not like "%HD%"';

$Canned_Searches['Movies on Aussie TV (HD)'] = '( program.category_type like "%movie%" OR program.title like "%movie%" ) AND timediff(program.endtime, program.starttime) > "01:10:00" and callsign like "%HD%';

?>
