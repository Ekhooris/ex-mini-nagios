<?php
namespace App;
use App\Database;
require '../vendor/autoload.php';

$monPDO = \App\Database::getConnection();
$monRepository = new ServeurRepository($monPDO);
$monTableau =$monRepository->listerTous();

 $this->ServeurRepository;

  listerTous(){
     foreach ( $monTableau as $ser  ) {
         <table>
         <th><?php echo $serveur->$host('hostname');?> </th>
         <th><?php echo $ip('ip');?> </th>
         <th><?php echo $os('os');?> </th>
         </table>

     }

 }


