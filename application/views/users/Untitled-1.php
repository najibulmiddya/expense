 <?php if ($users > 0) {
                        foreach ($users as $key => $val) { ?>
                            <tr class="text-center">
                                <td><?= $val->id ?></td>
                                <td><?= $val->name ?></td>
                                <td><?= $val->email ?></td>
                                <td>
                                    <a href="<?= base_url("users/delete/{$val->id}") ?>" class="btn  btn-danger del-record"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                    <?php }
                    } ?>