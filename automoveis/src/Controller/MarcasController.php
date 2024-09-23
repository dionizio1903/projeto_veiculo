<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Marcas Controller
 *
 * @property \App\Model\Table\MarcasTable $Marcas
 * @return \Cake\Http\Response|null|void Renders view
 * 
 **/
class MarcasController extends AppController
{
    /**
     * Index method
     *
     * // 
     */
    public function index()
    {
      $query = $this->Marcas->find();        
      $marcas = $this->paginate($query);
      
        $this->set(compact('marcas'));
    }

    /**
     * View method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marca = $this->Marcas->get($id, contain: ['Veiculos']);
        $this->set(compact('marca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marca = $this->Marcas->newEmptyEntity();
        if ($this->request->is('post')) {
            $marca = $this->Marcas->patchEntity($marca, $this->request->getData());
            if ($this->Marcas->save($marca)) {
                $this->Flash->success(__('Cadastrado com sucesso'));
                return $this->redirect(['action' => "index",]);
            }
            $this->Flash->error(__('Não pode ser Cadastrado. Por favor, tente novamente..'));
        }
        $this->set(compact('marca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marca = $this->Marcas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marca = $this->Marcas->patchEntity($marca, $this->request->getData());
            if ($this->Marcas->save($marca)) {
                $this->Flash->success(__('Alteração realizada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A alteração não pôde ser realizada. Por favor, tente novamente.'));
        }
        $this->set(compact('marca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marca = $this->Marcas->get($id);
        if ($this->Marcas->delete($marca)) {
            $this->Flash->success(__('Apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não pode ser apagado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
