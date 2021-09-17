<div class="wrapper">
                <div class="container-fluid section col-md-offset-1 col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Daftar Orders</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Nomor</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Payment Confirmation</th>
                                            <th>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($content as $row) : ?>
                                                <tr>
                                                    <td>
                                                        <strong>#<?= $row->invoice ?></strong>
                                                    </td>
                                                    <td><?= str_replace('-', '/', date('d-m-Y', strtotime($row->date))) ?></td>
                                                    <td>Rp.<?= number_format($row->total, 0, ',', '.') ?>,-</td>
                                                    <td>
                                                        <?php $this->load->view('layouts/_status', ['status' => $row->status]) ?>
                                                    </td>
                                                    <td class="col-md-offset-5">
                                                        <a href="<?= base_url("myorder/detail/$row->invoice") ?>"><button class="btn btn-primary"><i class="fa fa-angle-double-right"></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>