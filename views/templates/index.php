<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 16:51
 */

if (!isset($_SESSION['syncronia_csv_is_logged'])) {
    header('Location: ' . ROOT_URL . ROOT_PATH . 'users/login');
}
if ($_SESSION['syncronia_csv_is_logged'] == false) {
    header('Location: ' . ROOT_URL . ROOT_PATH . 'users/login');
}

?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Templates</h2>
        </div>
    </div>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Nuovo Template</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form>
                            <p>Inserisci un nuovo template</p>
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Nome template:</label>
                                <div class="col-lg-10"><input type="text" name="nome" placeholder="Nome del template" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row"><label class="col-lg-2 col-form-label">Intestazioni</label>
                                <div class="col-lg-10"><input type="text" placeholder="Intestazioni separate da virgola es. (Nome, Cognome, Indirizzo ecc...)" class="form-control"></div>
                            </div>
                            <div class="form-group row"><label class="col-lg-2 col-form-label">File CSV</label>
                                <div class="col-lg-10"><input type="file" class="form-control"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-sm btn-success" type="submit">Inserisci</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Templates disponibili</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" data-page-length='10' >
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nome</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elimina Template</th>
                                    <th hidden>Dati</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($viewmodel as $item) :?>
                                        <tr class="gradeX">
                                            <td><?php echo $item['Tipo']?></td>
                                            <td><?php echo $item['Nome']?></td>
                                            <?php $data=date("d/m/Y", strtotime($item["Data"]))?>

                                            <td class="text-center"><?php echo $data?></td>
                                            <td class="text-center"><a href="#" class="btn btn-danger btn-xs">Elimina</a></td>
                                            <td hidden><?php echo $item['Dati']?></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nome</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Elimina Template</th>
                                    <th hidden>Dati</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>








