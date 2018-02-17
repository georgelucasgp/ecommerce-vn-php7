<?php
/**
 * Created by PhpStorm.
 * User: georgelucas
 * Date: 16/02/18
 * Time: 22:45
 */

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class OrderStatus extends Model
{
   const EM_ABERTO = 1;
   const AGUARDANDO_PAGAMENTO = 2;
   const PAGO = 3;
   const ENTREGUE = 4;

}