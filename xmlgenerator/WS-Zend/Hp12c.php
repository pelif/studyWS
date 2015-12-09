<?php
class Hp12c
{
  /**
   *
   * @param float $p capital inicial
   * @param float $i taxa de juros
   * @param integer $n períodos de tempo
   * @param integer $a precisão do resultado
   * @return float montante
   */
  public function calculaMontante($p, $i, $n , $a)
  {
    $m = $p * pow(1 + $i, $n);
    $m = round($m, $a);
    return $m;
  }
}
