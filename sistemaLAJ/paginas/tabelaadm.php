<div class="tabela"> <!--Tabela-admin-->
                <h3>Tabela de mesas e cadeiras</h3>
                <table>
                    <tr>
                        <th class="th">Solicitante</th>
                        <th class="th">Cadeira</th>
                        <th class="th">Mesa</th>
                        <th class="th">Data de entrega</th>
                        <th class="th">Data/Evento</th>
                        <th class="tablendere">Endereço</th>
                        <th class="th">Entregue</th>
                    </tr>
                        
                    <?php
                        
                         if(isset($_POST['remover'])){
                            $id = $_POST['rm'];
                            $sql = MySql::conectar()->prepare("DELETE FROM `dados` WHERE `id` = ?");
                            $sql->execute(array($id));
                        }
                        if(isset($_POST['entregue'])){
                            $valor = $_POST['entregue'];
                            $id1 = $_POST['id1'];
                            if ($valor == "Entregue") {
                                $varentre = 'Aguardando';
                            }else{
                                $varentre = 'Entregue';
                            }
                            $sql = MySql::conectar()->prepare("UPDATE `dados` SET `Entregue` = ? WHERE `dados`.`id` = ?;");
                            $sql->execute(array($varentre,$id1));
                        }
                        if(isset($_POST['editar'])){
                            $solicitante = $_POST['solicitante'];
                            $cadeira = $_POST['cadeiras'];
                            $mesa = $_POST['mesas'];
                            $data = $_POST['datas'];
                            $dataevento = $_POST['dataevento'];
                            $endereco = $_POST['endereco'];
                            $id1 = $_POST['id1'];
                            $sql3 = MySql::conectar()->prepare("UPDATE `dados` SET `Solicitante` = ?, `Mesas` = ?, `Cadeiras` = ?, `Datas` = ?, `Data/Evento` = ?, `Endereco` = ? WHERE `dados`.`id` = ?;");
                            $sql3->execute(array($solicitante,$mesa,$cadeira,$data,$dataevento,$endereco,$id1));
                        }

                        $sql3 = MySql::conectar()->prepare("SELECT * FROM `dados`");
                        $sql3->execute();
                        $tabela = $sql3->fetchAll();
                    

                    ?>
                        <?php  
                            foreach ($tabela as $key => $value){   
                        ?>
                
                            <form action="" method="POST" class="formsele"> 
                                        <tr>
                                            <td><input class="sla" type="text" name="solicitante" value=" <?php echo $value['Solicitante']; ?>"></td>
                                            <td><input class="sla" type="number" name="cadeiras" value="<?php echo $value['Cadeiras'];?>"></td>
                                            <td><input class="sla" type="number" name="mesas" value="<?php echo $value['Mesas'];?>"></td>
                                            <td><?php dataexpirou($value['Datas'], $value['Entregue'], $value['Solicitante']); ?></td>
                                            <td><input class="sla" type="text" name="dataevento" value="<?php echo $value['Data/Evento'];?>"></td>
                                            <td class="tablendere"><input class="sla" type="text" name="endereco" value="<?php echo $value['Endereco'];?>"></td>
                                                <input type="submit" class="sumiu" value=""name="editar"/>
                                            <td>
                                                <input type="submit" value="<?php echo $value['Entregue']; ?>" name="entregue"/>
                                            </td>
                                            
                                            <td>
                                                <input type="hidden" value="<?php echo $value['id']; ?>" name="id1"/>
                                                <input type="submit" value="Editar" name="editar"/>
                                            </td>
                                            <td>
                                                <input type="hidden" value="<?php echo $value['id']; ?>" name="emprimir"/>
                                                <input type="submit" value="imprimir" name="imprimir"/>
                                            </td>
                                            <td>
                                                <input type="hidden" value="<?php echo $value['id']; ?>" name="rm"/>
                                                <input type="submit" value="Remover" name="remover"/>
                                            </td>
                                             
                                        </tr>
                                    </form>
                        <?php } ?>
                </table> 
            </div><!-- Tabela-admin -->