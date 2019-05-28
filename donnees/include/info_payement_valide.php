

<?php
							$i=0; //pour compter le nombre d'element du tableau
							$s  =   '';
							foreach($userData_2 as $val){
								$i++; //pour compter le nombre d'element du tableau
								$s++;
								
								//Debut pour le test de la validation ou pas
									$test  =   'Validé';
									 
								
						?>
							<tr > 
								<td><?php echo $i?></td>
								<td><?php echo $val['phone'];?></td>
								<td><?php echo $val['operator'];?></td>
								<td><?php echo $val['cashAmount'];?></td>
								<td><?php echo $test;?></td>
								<td><?php echo $val['time'];?></td>
								 
							</tr>
						<?php } ?>