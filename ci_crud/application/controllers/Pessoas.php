<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pessoas extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pessoas_model', 'model', TRUE);
    }
 
    function index() 
    {
        $this->load->helper('form');
        $data['titulo'] = "CRUD com CodeIgniter | Cadastro de Pessoas";
        $data['pessoas'] = $this->model->listar();
        $this->load->view('pessoas_view.php', $data);
    }
    
    function inserir()
    {
       
        /* Recebe os dados do formulário (visão) */
        $data['nome'] = $this->input->post('nome');
        $data['telefone'] = $this->input->post('telefone');

        /* Chama a função inserir do modelo */
        if ($this->model->inserir($data)) {
            redirect('pessoas');
        } else {
            log_message('error', 'Erro ao inserir a pessoa.');
        }
        
    }
    
    function editar($id) 
    {	
        /* Aqui vamos definir o título da página de edição */
        $data['titulo'] = "CRUD com CodeIgniter | Editar Pessoa";

        /* Busca os dados da pessoa que será editada */
        $data['dados_pessoa'] = $this->model->editar($id);

        /* Carrega a página de edição com os dados da pessoa */
        $this->load->view('pessoas_edit', $data);
    }

    function atualizar()
    {

        $data['id'] = $this->input->post('id');
        $data['nome'] = ucwords($this->input->post('nome'));
        $data['telefone'] = strtolower($this->input->post('telefone'));

        /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
        if ($this->model->atualizar($data)) {
            redirect('pessoas');
        } else {
            log_message('error', 'Erro ao atualizar a pessoa.');
        }
        
    }

    function deletar($id)
    {
        /* Executa a função deletar do modelo passando como parâmetro o id da pessoa */
        if ($this->model->deletar($id)) {
            redirect('pessoas');
        } else {
            log_message('error', 'Erro ao deletar a pessoa.');
        }
    }
}