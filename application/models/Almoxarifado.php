<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Almoxarifado extends CI_Model
{
    protected $tabela;
    protected $vlPesquisa;

    public function __construct()
    {
        
        parent::__construct();
        $this->tabela = "produtos";
        $this->ordenacao = [
            'itens' => 'asc',
        ];
    }

    //busca de produtos - status (ok)
    public function busca_produtos()
    {
        
        $this->db->select('*')->from($this->tabela);
        $sql = $this->db->get();
        return $sql->result();
    }

    /* 
    public function busca_produtos_data()
    {
        //Bloco de Busca das datas enviadas no formulário
        $query_datas_1 = $this->db->query("

            SELECT * FROM consulta WHERE dt_inicial
        ");
        $resultado_data_1 = $query_datas_1->result();

        $query_datas_2 = $this->db->query("
        
            SELECT * FROM consulta WHERE dt_final
        ");
        $resultado_data_2 = $query_datas_2->result();

        //Injetando os valores da busca nas variáveis
        @$data1 = $resultado_data_1;
        @$data2 = $resultado_data_2;

        //Bloco de Produção
        $query_busca = $this->db->query("

            SELECT * FROM produtos WHERE dt_entrada BETWEEN '$data1' AND '$data2'
        ");
        $resultado = $query_busca->result();

        return $resultado;
    } 
    
    */


    public function busca_produtos_data()
    {
        //Bloco de Testes
        //$var1 = "2018/05/05";
        //$var2 = "2018/05/05";
        //$this->db->where('dt_entrada >=', $var1);
        //$this->db->where('dt_entrada <=', $var2);

        //Organização de Strings
        //Data iniclal do POST
        @$dtInicial = @$_POST["dtInicial"];
        //Data final do POST
        @$dtFinal = @$_POST["dtFinal"];

        //Dados dos campos Iniciais da Busca
        @$dataInicial = explode('/', @$dtInicial);

        @$array = array(@$dataInicial[2], @$dataInicial[1], @$dataInicial[0]);
        @$data1 = implode("-", @$array);

        //Dados dos campos Finais da Busca
        @$dataFinal = explode('/', @$dtFinal);

        @$array = array(@$dataFinal[2], @$dataFinal[1], @$dataFinal[0]);
        @$data2 = implode("-", @$array);

        //Bloco de Produção
        $query = $this->db->query("

            SELECT * FROM produtos WHERE dt_entrada BETWEEN '$data1' AND '$data2'");
        $resultado = $query->result();

        return $resultado;
    }

    /*
    //Retorna Produtos por Data
    public function busca_produtos_data($dataBusca)
    {

        $this->db->select('*');
        $this->db->from('produtos');
        $this->db->where('dt_entrada', $dataBusca);
        $query = $this->db->get();
        return $query->result();
        /*
        $query = "
            SELECT * FROM `produtos`WHERE dt_entrada = '$dataBusca'";
        return $query->result();
        
    }
       */
}