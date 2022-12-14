<?php

namespace App\Models;

final class PalpitesModel
{
    #INT
    private int $id;

    #STRING
    private string $selecao_br;

    #INT
    private int $placar_br;

    #STRING
    private string $selecao_adv;

    #INT
    private int $placar_adv;

    #STRING
    private string $nome_jogador;

    // @return int

    public function getId(): int
    {
        return $this -> id;
    }

    // @return string

    public function getSelecaoBR(): string
    {
        return $this -> selecao_br;
    }

    public function setSelecaoBR(string $selecao_br): PalpitesModel
    {
        $this -> selecao_br = $selecao_br;
        return $this;
    }

    // @return int

    public function getPlacarBR(): int
    {
        return $this -> placar_br;
    }

    public function setPlacarBR(int $placar_br): PalpitesModel
    {
        $this -> placar_br = $placar_br;
        return $this;
    }

    // @return string

    public function getSelecaoAdv():string
    {
        return $this -> selecao_adv;
    }

    public function setSelecaoAdv(string $selecao_adv): PalpitesModel
    {
        $this -> selecao_adv = $selecao_adv;
        return $this;
    }

    // @return int

    public function getPlacarAdv(): int
    {
        return $this -> placar_adv;
    }

    public function setPlacarAdv(int $placar_adv): PalpitesModel
    {
        $this -> placar_adv = $placar_adv;
        return $this;
    }

    // @return string

    public function getNomeJogador(): string
    {
        return $this -> nome_jogador;
    }

    public function setNomeJogador(string $nome_jogador): PalpitesModel
    {
        $this -> nome_jogador = $nome_jogador;
        return $this;
    }
}