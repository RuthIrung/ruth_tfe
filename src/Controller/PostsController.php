<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    
    public function index() {
    $this->set('posts', $this->Post->find('all'));
    }
    public function view($id) {
        if (!$id) {
        throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->findById($id);
        if (!$post) {
        throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
    public function add() {
        if ($this->request->is('post')) {
        $this->Post->create();
        if ($this->Post->save($this->request->data)) {
        $this->Flash->success(__('Your post has been saved.'));
        return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Unable to add your post.'));
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
        $this->Flash->success(
        __('Le post avec id : %s a été supprimé.', h($id))
        );
        } else {
        $this->Flash->error(
        __('Le post avec l\'id: %s n\'a pas pu être supprimé.', h($id))
        );
        }
        return $this->redirect(array('action' => 'index'));
    }
         
 }
    