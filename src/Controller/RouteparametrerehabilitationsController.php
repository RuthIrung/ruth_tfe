<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Routeparametrerehabilitations Controller
 *
 * @property \App\Model\Table\RouteparametrerehabilitationsTable $Routeparametrerehabilitations
 *
 * @method \App\Model\Entity\Routeparametrerehabilitation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RouteparametrerehabilitationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Routes', 'Parametrerehabilitations'],
        ];
        $routeparametrerehabilitations = $this->paginate($this->Routeparametrerehabilitations);

        $this->set(compact('routeparametrerehabilitations'));
    }

    /**
     * View method
     *
     * @param string|null $id Routeparametrerehabilitation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $routeparametrerehabilitation = $this->Routeparametrerehabilitations->get($id, [
            'contain' => ['Routes', 'Parametrerehabilitations'],
        ]);

        $this->set('routeparametrerehabilitation', $routeparametrerehabilitation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $routeparametrerehabilitation = $this->Routeparametrerehabilitations->newEntity();
        if ($this->request->is('post')) {
            $routeparametrerehabilitation = $this->Routeparametrerehabilitations->patchEntity($routeparametrerehabilitation, $this->request->getData());
            if ($this->Routeparametrerehabilitations->save($routeparametrerehabilitation)) {
                $this->Flash->success(__('la routeparametrerehabilitation est enregistrée.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('la routeparametrerehabilitation n est pas enregistrée. Prière de recommencer.'));
        }
        $routes = $this->Routeparametrerehabilitations->Routes->find('list', ['limit' => 200]);
        $parametrerehabilitations = $this->Routeparametrerehabilitations->Parametrerehabilitations->find('list', ['limit' => 200]);
        $this->set(compact('routeparametrerehabilitation', 'routes', 'parametrerehabilitations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Routeparametrerehabilitation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $routeparametrerehabilitation = $this->Routeparametrerehabilitations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $routeparametrerehabilitation = $this->Routeparametrerehabilitations->patchEntity($routeparametrerehabilitation, $this->request->getData());
            if ($this->Routeparametrerehabilitations->save($routeparametrerehabilitation)) {
                $this->Flash->success(__('la routeparametrerehabilitation est enregistrée.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('la routeparametrerehabilitation n est pas enregistée. Prière de recommencer'));
        }
        $routes = $this->Routeparametrerehabilitations->Routes->find('list', ['limit' => 200]);
        $parametrerehabilitations = $this->Routeparametrerehabilitations->Parametrerehabilitations->find('list', ['limit' => 200]);
        $this->set(compact('routeparametrerehabilitation', 'routes', 'parametrerehabilitations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Routeparametrerehabilitation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $routeparametrerehabilitation = $this->Routeparametrerehabilitations->get($id);
        if ($this->Routeparametrerehabilitations->delete($routeparametrerehabilitation)) {
            $this->Flash->success(__('la routeparametrerehabilitation est supprimée.'));
        } else {
            $this->Flash->error(__('la routeparametrerehabilitation n est pas supprimée. Prière de recommencer.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
