<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Utilisateurs Controller
 *
 * @property \App\Model\Table\UtilisateursTable $Utilisateurs
 *
 * @method \App\Model\Entity\Utilisateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UtilisateursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    
    public function index()
    {
        $utilisateurs = $this->paginate($this->Utilisateurs);

        $this->set(compact('utilisateurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilisateur = $this->Utilisateurs->get($id, [
            'contain' => ['Comptes'],
        ]);

        $this->set('utilisateur', $utilisateur);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utilisateur = $this->Utilisateurs->newEntity();
        if ($this->request->is('post')) {
            $utilisateur = $this->Utilisateurs->patchEntity($utilisateur, $this->request->getData());
            if ($this->Utilisateurs->save($utilisateur)) {
                $this->Flash->success(__('L utilisateur est enregistré avec succès.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('l utilisateur n est pas enregistré. Prière de recommencer.'));
        }
        $this->set(compact('utilisateur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilisateur = $this->Utilisateurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilisateur = $this->Utilisateurs->patchEntity($utilisateur, $this->request->getData());
            if ($this->Utilisateurs->save($utilisateur)) {
                $this->Flash->success(__('L utilisateur enregistré.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Echec d enregistrement, prière de recommencer.'));
        }
        $this->set(compact('utilisateur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilisateur = $this->Utilisateurs->get($id);
        if ($this->Utilisateurs->delete($utilisateur)) {
            $this->Flash->success(__('Utilisateur supprimé.'));
        } else {
            $this->Flash->error(__('Echec de suppression, prière de recommencer.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login()
    {
        if ($this->request->is('post')){
            $Utilisateur = $this->Auth->identity();
            if ($Utilisateur){
                $this->Auth->setUtilisateur($Utilisateur); 
                return $this->redirect(['controller'=>'Utilisateurs','action'=>'index']); 
            }
            $this->Flash->error('Votre username ou mot de passe incorrect');
        }
    }
    public function logout(){
        $this->flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
    
}
