<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typedecomptes Controller
 *
 * @property \App\Model\Table\TypedecomptesTable $Typedecomptes
 *
 * @method \App\Model\Entity\Typedecompte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypedecomptesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typedecomptes = $this->paginate($this->Typedecomptes);

        $this->set(compact('typedecomptes'));
    }

    /**
     * View method
     *
     * @param string|null $id Typedecompte id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typedecompte = $this->Typedecomptes->get($id, [
            'contain' => ['Comptes'],
        ]);

        $this->set('typedecompte', $typedecompte);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typedecompte = $this->Typedecomptes->newEntity();
        if ($this->request->is('post')) {
            $typedecompte = $this->Typedecomptes->patchEntity($typedecompte, $this->request->getData());
            if ($this->Typedecomptes->save($typedecompte)) {
                $this->Flash->success(__('le typedecompte enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement, prière de recommencer.'));
        }
        $this->set(compact('typedecompte'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typedecompte id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typedecompte = $this->Typedecomptes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typedecompte = $this->Typedecomptes->patchEntity($typedecompte, $this->request->getData());
            if ($this->Typedecomptes->save($typedecompte)) {
                $this->Flash->success(__('le typedecompte enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement, prière de recommencer.'));
        }
        $this->set(compact('typedecompte'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typedecompte id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typedecompte = $this->Typedecomptes->get($id);
        if ($this->Typedecomptes->delete($typedecompte)) {
            $this->Flash->success(__('le typedecompte supprimé.'));
        } else {
            $this->Flash->error(__('Echec de suppression, prière de recommencer.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
