<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Plans Controller
 *
 * @property \App\Model\Table\PlansTable $Plans
 * @method \App\Model\Entity\Plan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $plans = $this->Plans->find('all')
            ->all();

        $this->set(compact('plans'));
    }
}
