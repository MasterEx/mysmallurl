<?php
/**
 * Controller function
 *
 * Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 *
 * Licensed under the GNU General Public License, version 3 (GPLv3)
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2010-2011, Periklis Ntanasis <pntanasis@gmail.com>
 * @license       GPLv3 License (http://www.opensource.org/licenses/gpl-3.0.html)
 */
	class LinksController extends AppController {
		var $name = 'Links';
		var $layout = 'my_small_url';
		
		function index($newurl = null) {
			// Define where the go function is
			Configure::write('Link.host','http://localhost/cakeroot/links/go/');			
		}
		
		function add() {
			if (!empty($this->data['Link']['url'])) 
			{
				$newentry = array( 'Link' => array(
				'alias' => substr(md5(($this->data['Link']['url']).date("u")),rand(1,20),6),
				'url' => $this->data['Link']['url'],
				'date' => null)
				);
				$fieldlist = array('alias','url');
				$result = $this->Link->find('first', array('conditions' => array('Link.url' => $newentry['Link']['url'])));
				if(empty($result))
				{
					if($this->Link->save($newentry))
					{
						$this->Session->write('Link.newurl',$newentry['Link']['alias']);
						$this->Session->setFlash('Your small url has been created!');
						$this->redirect(array('action' => 'index'));
					}
					$this->Session->setFlash('Please enter a valid url!');
					$this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->write('Link.newurl',$result['Link']['alias']);
					$this->Session->setFlash('Your small url has been created!');
					$this->redirect(array('action' => 'index'));
				}
			}
			else
			{
				$this->Session->setFlash('You have to enter a url');
				$this->redirect(array('action' => 'index'));
			}
		}
		
		function go($alias) {
			if(empty($alias))
			{
				$this->redirect(array('action' => 'index'));
			}
			$result = $this->Link->find('first',array('conditions' => array('Link.alias' => $alias)));
			if(strpos($result['Link']['url'],'http://')===0)			
			{
				$this->redirect($result['Link']['url']);
			}
			else
			{
				$this->redirect('http://'.$result['Link']['url']);
			}
		}
		
	}

?>
