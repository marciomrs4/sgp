<?php

namespace system\app;

class Arquivo
{

	public static function includeForm()
	{

		$arquivo = DOCROOT.DS.$_SESSION['projeto'].DS.'forms'.DS.base64_decode($_SESSION['acao']).'.php';

		if($_SESSION['acao'] != '')
		{
			self::validarFile($arquivo);
		}

		self::criarLinha();
	}

	private function validarFile($file)
	{
		if(file_exists($file))
		{
			echo '<br /><br />';
			include_once($file);
		}else
		{
			echo 'Formulário ou Arquivo não encontrado';
		}
	}

	private function criarLinha()
	{
		if(!empty($_SESSION['acao']))
		{
			echo('<hr />');
		}
	}

	

	#Retorna o Binario do arquivo temporario
	/**
	 * 
	 * @return string
	 * @author Márcio Ramos
	 * @version 1.0.1
	 * 
	 */
	public function arquivoBinario()
	{
		set_time_limit(3600);

		$arquivo = file_get_contents($this->dados['tmp_name']);

		return($arquivo);
	}

	#Retorna o Erro do arquivo
	public function error()
	{
		return($this->dados['error']);
	}

	#Retorna o Nome do Arquivo
	public function arquivoNome()
	{
		return($this->dados['name']);
	}

	#Retorna o Tipo de arquivo
	public function arquivoTipo()
	{
		return($this->dados['type']);
	}

	#Retorna o Tamanho de arquivo
	public function arquivoTamanho()
	{
		$tamanho = round((($this->dados['size'] / 1024) /1024),2);

		return($tamanho);
	}

	/**
	 * 
	 * Metodo usado para criar uma pasta na pasta de projetos
	 * da TI
	 * @param unknown_type $nomepasta
	 */
	public static function criarPastaNoServidor($nomepasta)
	{
		/*Abre a conexão ao servidor com IP informado*/
		$conexao = ftp_connect('192.168.31.233');
		/*Faz login com usuário e senha informado*/
		ftp_login($conexao,'ticontrole','ticontrole');
		/*Cria uma pasta no local indicado na conexão FTP*/
		ftp_mkdir($conexao,'/'.$nomepasta);
		/*Fecha a conexão que estava aberta*/
		ftp_close($conexao);	
	}
	

}

?>