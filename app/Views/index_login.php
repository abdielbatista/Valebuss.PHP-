<?php
//header
echo $this->include('includes/header', array('titulo' => $titulo));

//css da pagina
echo $this->include('includes/style');

//footer padrão
echo $this->include('includes/footer');

?>

<?php $session = session(); ?>
<br>

<!-- Modal -->

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Seus Dados</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <br>

            <form>

                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Nome</th>
                            <td><?php echo $session->get('nome') ?></td>
                            <!--<td><i class="fas fa-edit"></td> -->
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo $session->get('email') ?></td>
                            <!--<td><i class="fas fa-edit"></td> -->
                        </tr>
                        <tr>
                            <th scope="row">Senha</th>
                            <td>************</td>
                            <td><i class="fas fa-edit" href="#" style="cursor:pointer" onClick="abreModal2()"></i></td>
                        </tr>
                    </tbody>
                </table>


                <br>
            </form>
        </div>

    </div>

</div>
</div>
</div>
</div>



<div class="card-group card border border-dark" style="height: 33rem; padding-left:0px; padding-right:0px">
    <div class="card">
        <div class="card-body">


            <h5 class="text-center" style="font-weight:bold">Veja as caronas em aberto ou
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">PUBLIQUE UMA</button>
            </h5>



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastre sua viagem</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="inline" method="post" action="<?php echo base_url("user/publica_carona") ?>" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Endereço de saida</label>
                                    <input type="text" class="form-control" id="endsaida" name="endsaida" aria-describedby="text" placeholder="Rua X, Vila, 20" >
                                    <small id="text" class="form-text text-muted">Rua; Bairro; Numero</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Endereço de destino</label>
                                    <input type="text" class="form-control" id="endchegada" name="endchegada" aria-describedby="text" placeholder="Instituto Federal"  >
                                    <small id="text" class="form-text text-muted">Rua; Bairro; Numero</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" >Estado:</label>
                                    <select name="estado" id="estado" >
                                    <option selected>Abrir menu de seleção</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cidade de saida</label>
                                    <input type="text" class="form-control" id="cidsaida" name="cidsaida" aria-describedby="text" placeholder="Araçuaí" >
                                    <small id="text" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cidade de chegada</label>
                                    <input type="text" class="form-control" id="cidchegada" name="cidchegada" aria-describedby="text" placeholder="Araçuaí" >
                                    <small id="text" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">horario de saida </label>
                                    <input type="time" class="form-control" id="horario" name="horario"   >
                                    <small id="time" class="form-text text-muted"></small>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Observação</label>
                                    <input type="text" class="form-control" id="obs" name="obs" aria-describedby="text" placeholder="Descreva a viagem caso seja nescessario">
                                    <small id="text" class="form-text text-muted"></small>
                                </div>
                                
                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" >Publicar</button>
                        </div>
                    </div>
                </div>
            </div>

<!-- card -->
<div class="card" style="width: 15rem;">
        <img src="foto/perfil.jpg" class="card-img-top" alt="...">
                               <!--if (foto de perfil for "none" coloca uma foto padrao) -->
        <div class="card-body">
          <h5 class="card-title">  </h5>
          <p class="card-text"> viagem de "A" pessoas usando mascara protetora, de cidsaida para cidchegada </p>
          <div class="card-footer text-muted">
            Horario: "horario"
          </div>
          <div class="card-footer text-muted">
            Descriçao:
          </div>
          <a href="#" class="btn btn-primary">Aceitar Viajem</a>
        </div>
      </div>
      <!-- -->
      

            <div class="t">
                <table class="table table-hover ">
                    <thead class="" style="background-color:#ccffb3">
                        <tr>
                            <?php if (isset($urls)) : ?>
                                <th scope="col">ID</th>
                                <th scope="col">URL original</th>
                                <th scope="col">URL encurtada</th>
                                <th scope="col">Acessos</th>
                                <th scope="col">Copiar</th>
                                <th scope="col">Apagar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $c = 1;
                                arsort($urls);
                                foreach ($urls as $url) : ?>

                            <tr>
                                <td style="font-weight:bold"> <?php echo $c ?> </td>
                                <td> <a href="<?php echo $url['url_long'] ?>" target="_blank"> <?php echo $url['url_long'] ?> </a> </td>
                                <td> <a href="<?php echo $urli . $url['url_short'] ?>" target="_blank"> <?php echo $urli . $url['url_short'] ?> </a> </td>

                                <td> <?php echo $url['quant_acessos'] ?></td>

                                <td class="text-primary"><span class="material-icons">
                                        content_copy
                                    </span>

                                </td>
                                <td class="text-primary text"><span class="material-icons">
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal<?= $url['id'] ?>">
                                            <i class="fa fa-trash text-sucesses" aria-hidden="true"></i>
                                        </button>

                                </td>


                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $url['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Opa, Jovem!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza que quer excluir a URL: <a class="text-danger" href="<?php echo $url['url_short'] ?>"> <?php echo $url['url_short'] ?> </a> do seu histórico ?

                                            </div>
                                            <div class="modal-footer">
                                                <form method="post" action="<?php echo base_url('delete/del') ?>">
                                                    <input type="hidden" name="id" value="<?php echo $url['id'] ?>">
                                                    <button type="submit" name="btn-delete" class="btn btn-danger">Confirmar exclusão</button>
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php $c++ ?>

                            </tr>


                        <?php endforeach ?>

                    </tbody>
                <?php endif ?>

                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $(".btn").on("click", function() {
            $.ajax({
                url: <?php base_url('user/historico') ?>,
                success: function(result) {
                    $(table).html(result);
                }
            });
        });
    });
</script>


<script>
    /*$(document).ready(function () {
    setTimeout(function () {
        window.location.reload(1);
    }, 8000); //tempo em milisegundos. Neste caso, o refresh vai acontecer de 5 em 5 segundos.
});*/
</script>