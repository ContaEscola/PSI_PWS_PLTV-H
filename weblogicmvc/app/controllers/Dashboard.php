<?php


class Dashboard extends BaseController
{

    private $auth;
    private $sessionInfo;
    private $idLoggedIn;
    private $empresa;
    private $role;

    public function __construct()
    {
        $this->auth = $this->loadModel('Auth');


        if (!$this->auth->isLoggedIn([null]))
            $this->redirectTo('Dashboard');

        $this->sessionInfo = $this->getSessionInfo();

        $this->idLoggedIn = $this->auth->getID();
        $this->role = $this->auth->getRole();

        // Como é só uma empresa
        $this->empresa = EmpresaFuncionario::first();
    }

    public function index()
    {

        switch ($this->sessionInfo['role']) {

            case 'Cliente':
                $cond = array('conditions' => array('referenciaCliente = ? AND estado = ?', $this->idLoggedIn, 'Em Lançamento'), 'order' => 'data asc');
                $faturas = FaturaCliente::all($cond);
                $this->renderView('loggedIn/asClient/index', ['sessionInfo' => $this->sessionInfo, 'faturas' => $faturas]);
                break;

            case 'Administrador':
            case 'Funcionário':
                $this->renderView('loggedIn/asNotClient/index', ['sessionInfo' => $this->sessionInfo, 'empresa' => $this->empresa]);
                break;
<<<<<<< HEAD
            default:
                $this->redirectTo();
                break;
=======
>>>>>>> development
        }
    }

    public function update($id)
    {
        if ($this->role != 'Funcionário' && $this->role != 'Administrador')
            $this->redirectTo();



        try {
            $empresa = EmpresaFuncionario::find([$id]);

            $newEmpresaData = new EmpresaFuncionario($_POST);
            $newEmpresaData->id = $empresa->id;

            if ($newEmpresaData->is_valid()) {
                $empresa->update_attributes($_POST);

                $this->redirectTo('Dasboard');
            } else {

                $this->renderView('loggedIn/asNotClient/index', ['sessionInfo' => $this->sessionInfo, 'empresa' => $newEmpresaData]);
                return;
            }
        } catch (Exception $ex) {
            $this->redirectTo('Dashboard');
        }
    }
}
