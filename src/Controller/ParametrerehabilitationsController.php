<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parametrerehabilitations Controller
 *
 * @property \App\Model\Table\ParametrerehabilitationsTable $Parametrerehabilitations
 *
 * @method \App\Model\Entity\Parametrerehabilitation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParametrerehabilitationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $parametrerehabilitations = $this->paginate($this->Parametrerehabilitations);

        $this->set(compact('parametrerehabilitations'));
    }

    /**
     * View method
     *
     * @param string|null $id Parametrerehabilitation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parametrerehabilitation = $this->Parametrerehabilitations->get($id, [
            'contain' => ['Routeparametrerehabilitations'],
        ]);

        $this->set('parametrerehabilitation', $parametrerehabilitation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parametrerehabilitation = $this->Parametrerehabilitations->newEntity();
        if ($this->request->is('post')) {
            $parametrerehabilitation = $this->Parametrerehabilitations->patchEntity($parametrerehabilitation, $this->request->getData());
            if ($this->Parametrerehabilitations->save($parametrerehabilitation)) {
                $this->Flash->success(__('The parametrerehabilitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parametrerehabilitation could not be saved. Please, try again.'));
        }
        $this->set(compact('parametrerehabilitation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parametrerehabilitation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parametrerehabilitation = $this->Parametrerehabilitations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parametrerehabilitation = $this->Parametrerehabilitations->patchEntity($parametrerehabilitation, $this->request->getData());
            if ($this->Parametrerehabilitations->save($parametrerehabilitation)) {
                $this->Flash->success(__('The parametrerehabilitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parametrerehabilitation could not be saved. Please, try again.'));
        }
        $this->set(compact('parametrerehabilitation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parametrerehabilitation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parametrerehabilitation = $this->Parametrerehabilitations->get($id);
        if ($this->Parametrerehabilitations->delete($parametrerehabilitation)) {
            $this->Flash->success(__('The parametrerehabilitation has been deleted.'));
        } else {
            $this->Flash->error(__('The parametrerehabilitation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
