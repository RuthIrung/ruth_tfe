<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Travauxs Controller
 *
 * @property \App\Model\Table\TravauxsTable $Travauxs
 *
 * @method \App\Model\Entity\Travaux[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TravauxsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Routes', 'Typetravauxs'],
        ];
        $travauxs = $this->paginate($this->Travauxs);

        $this->set(compact('travauxs'));
    }

    /**
     * View method
     *
     * @param string|null $id Travaux id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $travaux = $this->Travauxs->get($id, [
            'contain' => ['Routes', 'Typetravauxs'],
        ]);

        $this->set('travaux', $travaux);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $travaux = $this->Travauxs->newEntity();
        if ($this->request->is('post')) {
            $travaux = $this->Travauxs->patchEntity($travaux, $this->request->getData());
            if ($this->Travauxs->save($travaux)) {
                $this->Flash->success(__('Travail enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement. Prière de recommencer.'));
        }
        $routes = $this->Travauxs->Routes->find('list', ['limit' => 200]);
        $typetravauxs = $this->Travauxs->Typetravauxs->find('list', ['limit' => 200]);
        $this->set(compact('travaux', 'routes', 'typetravauxs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Travaux id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $travaux = $this->Travauxs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $travaux = $this->Travauxs->patchEntity($travaux, $this->request->getData());
            if ($this->Travauxs->save($travaux)) {
                $this->Flash->success(__('Travail enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement, prière de recommencer.'));
        }
        $routes = $this->Travauxs->Routes->find('list', ['limit' => 200]);
        $typetravauxs = $this->Travauxs->Typetravauxs->find('list', ['limit' => 200]);
        $this->set(compact('travaux', 'routes', 'typetravauxs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Travaux id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $travaux = $this->Travauxs->get($id);
        if ($this->Travauxs->delete($travaux)) {
            $this->Flash->success(__('Travail supprimé.'));
        } else {
            $this->Flash->error(__('Echec de la suppression, prière de recommencer.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
