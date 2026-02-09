<?php

namespace App\Controller;

class UsersController extends AppController
{
    public function index()
    {
        //on récupère tout le contenu de la table Users
        $list = $this->Users->find();

        //on le passe à la vue
        $this->set(['l' => $list]);

    }

    public function new()
    {
        //on crée une entité vide de User
        $new = $this->Users->newEmptyEntity();

        //si on a chargé la page en 'POST'
        if ($this->request->is('post')):

            //on place les données fournis par le user dans l'entité vide
            $new = $this->Users->patchEntity($new, $this->request->getData());
            //si la sauvegarde a fonctionné
            if ($this->Users->save($new)):

                //message succès
                $this->Flash->success(('Personne ajoutée !'));

                //redirection
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);

                //fin si
            endif;

            //message erreur
            $this->Flash->error(('Impossible de sauvegarder, vérifiez les données'));

        endif;

        //on transmet à la vue

        // $this->set(['new' => $new]);
        $this->set(compact('new'));
    }

    public function details($id = null)
    {
        //on récupère la Personne voulue
        $p = $this->Users->get($id);

        //on transmet à la vue
        $this->set(compact('p'));
    }

    public function edit($id = null)
    {
        $p = $this->Users->get($id);

        if ($this->request->is(['post', 'put'])):
            $p = $this->Users->patchEntity($p, $this->request->getData());
            if ($this->Users->save($p)):
                $this->Flash->success('Personne modifiée !');
                return $this->redirect(['action' => 'details', $id]);
            else:
                $this->Flash->error('Impossible de modifier cette Personne');
            endif;
        endif;

        $this->set(compact('p'));
    }

    public function delete($id = null)
    {
        //on autorise que la méthode DELETE. Sans ça, cela va déclancher une exception
        $this->request->allowMethod(['delete']);

        //on récup ce qu'il faut effacer
        $p = $this->Users->get($id);

        if ($this->Users->delete($p)):
            $this->Flash->success('Personne supprimée !');
            return $this->redirect(['action' => 'index']);
        else:
            $this->Flash->error('Impossible de supprimer cette Personne');
        endif;
        return $this->redirect(['action' => 'index']);
    }
}