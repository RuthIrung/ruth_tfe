<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typetravauxs Controller
 *
 * @property \App\Model\Table\TypetravauxsTable $Typetravauxs
 *
 * @method \App\Model\Entity\Typetravaux[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypetravauxsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typetravauxs = $this->paginate($this->Typetravauxs);

        $this->set(compact('typetravauxs'));
    }

    /**
     * View method
     *
     * @param string|null $id Typetravaux id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typetravaux = $this->Typetravauxs->get($id, [
            'contain' => ['Travauxs'],
        ]);

        $this->set('typetravaux', $typetravaux);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typetravaux = $this->Typetravauxs->newEntity();
        if ($this->request->is('post')) {
            $typetravaux = $this->Typetravauxs->patchEntity($typetravaux, $this->request->getData());
            if ($this->Typetravauxs->save($typetravaux)) {
                $this->Flash->success(__('le typetravaux enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement, prière de recommencer.'));
        }
        $this->set(compact('typetravaux'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typetravaux id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typetravaux = $this->Typetravauxs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typetravaux = $this->Typetravauxs->patchEntity($typetravaux, $this->request->getData());
            if ($this->Typetravauxs->save($typetravaux)) {
                $this->Flash->success(__('le typetravaux enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement, prière de recommencer.'));
        }
        $this->set(compact('typetravaux'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typetravaux id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typetravaux = $this->Typetravauxs->get($id);
        if ($this->Typetravauxs->delete($typetravaux)) {
            $this->Flash->success(__('le typetravaux est supprimé.'));
        } else {
            $this->Flash->error(__('Echec de suppression, prière de recommencer.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
