<?php
/**
 * Model
 *
 * Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 *
 * Licensed under the GNU General Public License, version 3 (GPLv3)
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 * @license       GPLv3 License (http://www.opensource.org/licenses/gpl-3.0.html)
 */

	class Link extends AppModel {
		/* Overrides the default db configuration */
		var $useDbConfig = 'mysmallurl';
		var $name = 'Link';
		var $validate = array('url' => 'url');
	}

?>
