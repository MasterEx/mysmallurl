<!-- File: /app/views/links/index.ctp -->

<?php
/**
 * View template
 *
 * Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 *
 * Licensed under the GNU General Public License, version 3 (GPLv3)
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 * @license       GPLv3 License (http://www.opensource.org/licenses/gpl-3.0.html)
 */
echo $this->Form->create('Link',array('action' => 'add'));
echo $this->Form->input('Link.url',array('type' => 'text', 'label' => false));
echo $this->Form->end('Create Small Url');
if($this->Session->check('Link.newurl'))
{
	echo "The new url is:<br /><input type='text' value='".Configure::read('Link.host').$this->Session->read('Link.newurl')."'></input>";
	$this->Session->delete('Link.newurl');
}
?>
