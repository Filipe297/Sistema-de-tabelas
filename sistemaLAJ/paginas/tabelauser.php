<div class="tabela">
                <h3>Tabela de mesas e cadeiras</h3>
                <table>
                    <tr>
                        <th>Solicitante</th>
                        <th>Cadeira</th>
                        <th>Mesa</th>
                        <th>Data de entrega</th>
                        <th>Data/Evento</th>
                        <th class="tablendere">Endereço</th>
                        <th>Entregue</th>
                    </tr>
                        
                    <?php
                        $sql2 = MySql::conectar()->prepare("SELECT * FROM `dados`");
                        $sql2->execute();
                        $tabela = $sql2->fetchAll();

                        foreach ($tabela as $key => $value){
                            echo'   <tr>
                                        <td>'.$value['Solicitante'].'</td>
                                        <td>'.$value['Cadeiras'].'</td>
                                        <td>'.$value['Mesas'].'</td>
                                        <td>'.$value['Datas'].'</td>
                                        <td>'.$value['Data/Evento'].'</td>
                                        <td class="tablendere">'.$value['Endereco'].'</td>
                                        <td>
                                            <input type="submit" value="'.$value['Entregue'].'">
                                        </td>
                                        <form method="POST">
                                            <td>
                                                <input type="hidden" value="'.$value['id'].'" name="emprimir">
                                                <input type="submit" value="imprimir" name="imprimir">
                                            </td>
                                        </form>
                                    </tr>
                                ';
                        }
                    ?>
                </table> 
            </div> <!--Tabela-->