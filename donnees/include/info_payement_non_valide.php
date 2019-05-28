

<?php
						$i=0; //pour compter le nombre d'element du tableau
							$s  =   '';
							foreach($userData as $val){
								
								$s++;
								 
									//Debut pour le test de la validation ou pas
									$test  =   '';
									$c=0;
									$a='';
									foreach($userData_2 as $val_2){
											$a++;
									if($val['requestId']==$val_2['requestId']){
										 
										$c=1;
										}					 
									}
									
									if($c==0) {
										$i++; //pour compter le nombre d'element du tableau
										$test="Non Validé";
										//Fin pour le test de la validation ou pas
										?>
										
										<tr > 
											<td><?php echo $i?></td>
											<td><?php echo $val['phone'];?></td>
											<td><?php echo $val['operator'];?></td>
											<td><?php echo $val['cashAmount'];?></td>
											<td><?php echo $test;?> </td>
											<td><?php echo $val['time'];?></td>
								 
										</tr>
							 
							
						<?php }} ?>