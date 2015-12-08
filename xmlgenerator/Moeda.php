<?php
class Moeda
{
  public function converterMoeda($valor, $de, $para)
  {
    $taxa = 1;
    if ($de == 'USD')
    {
      switch ($para) {
        case 'EUR':
          $taxa = 0.5;
          break;
        case 'JPY':
          $taxa = 2;
          break;
      }
    }
    if ($de == 'EUR')
    {
      switch ($para) {
        case 'USD':
          $taxa = 2;
          break;
        case 'JPY':
          $taxa = 4;
          break;
      }
    }
    if ($de == 'JPY')
    {
      switch ($para) {
        case 'EUR':
          $taxa = 0.25;
          break;
        case 'USD':
          $taxa = 0.5;
          break;
      }
    }
    return $valor * $taxa;
  }

  /**
   * 
   * @param string $codigoMoeda
   * @return string $codigoMoeda
   */
  
  public function descricaoMoeda($codigoMoeda)
  {
    $moedas = array(
        'USD' => 'dólares norte-americanos',
        'EUR' => 'euros',
        'JPY' => 'ienes'
    );

    return $moedas[$codigoMoeda];
  }
}