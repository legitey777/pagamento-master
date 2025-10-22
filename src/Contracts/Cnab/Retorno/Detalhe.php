<?php

namespace Murilo\Pagamento\Contracts\Cnab\Retorno;

use Murilo\Pagamento\Contracts\Pessoa as PessoaContract;
use Murilo\Pagamento\Contracts\Conta as ContaContract;

/**
 * Interface Detalhe
 * @package Murilo\Pagamento\Contracts\Cnab\Retorno
 */
interface Detalhe
{
    const OCORRENCIA_LIQUIDADA = 1;
    const OCORRENCIA_BAIXADA = 2;
    const OCORRENCIA_ENTRADA = 3;
    const OCORRENCIA_ALTERACAO = 4;
    const OCORRENCIA_PROTESTADA = 5;
    const OCORRENCIA_OUTROS = 6;
    const OCORRENCIA_ERRO = 9;

    /**
     * @return PessoaContract
     */
    public function getFavorecido();

    /**
     * @return PessoaContract
     */
    public function getPagador();

    /**
     * @return mixed
     */
    public function getNossoNumero();

    /**
     * @return mixed
     */
    public function getNumeroDocumento();

    /**
     * @return mixed
     */
    public function getOcorrencia();

    /**
     * @return mixed
     */
    public function getOcorrenciaDescricao();

    /**
     * @return mixed
     */
    public function getOcorrenciaTipo();

    /**
     * @param string $format
     *
     * @return mixed
     */
    public function getDataOcorrencia($format = 'd/m/Y');

    /**
     * @param string $format
     *
     * @return mixed
     */
    public function getDataVencimento($format = 'd/m/Y');

    /**
     * @param string $format
     *
     * @return mixed
     */
    public function getDataCredito($format = 'd/m/Y');

    /**
     * @return mixed
     */
    public function getValor();

    /**
     * @return mixed
     */
    public function getValorIOF();

    /**
     * @return mixed
     */
    public function getValorAbatimento();

    /**
     * @return mixed
     */
    public function getValorDesconto();

    /**
     * @return mixed
     */
    public function getValorRecebido();

    /**
     * @return mixed
     */
    public function getValorMora();

    /**
     * @return mixed
     */
    public function getValorMulta();

    /**
     * @return ContaContract
     */
    public function getContaFavorecido();

    /**
     * @return ContaContract
     */
    public function getContaPagador();

    /**
     * @return string
     */
    public function getError();

    /**
     * @return boolean
     */
    public function hasError();

    /**
     * @return boolean
     */
    public function hasOcorrencia();

    /**
     * @return array
     */
    public function toArray();
}
