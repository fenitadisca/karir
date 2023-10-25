                    <?php $pager->setSurroundCount(2) ?>

                    <!-- begin:: Pagination -->
                    <div class="mt-6">
                        <ul class="pagination pagination-circle">
                            <?php if ($pager->hasPrevious()) : ?>
                                <li class="page-item previous">
                                    <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                                        <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                                    </a>
                                </li>
                                <li class="page-item previous">
                                    <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                                        <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                                    </a>
                                </li>
                            <?php endif ?>

                            <?php foreach ($pager->links() as $link): ?>
                                <li <?= $link['active'] ? 'class="page-item active"' : 'class="page-item"' ?>>
                                    <a class="page-link" href="<?= $link['uri'] ?>">
                                        <?= $link['title'] ?> 
                                    </a>
                                </li>
                            <?php endforeach ?> 
                            
                            <?php if ($pager->hasNext()) : ?>
                                <li class="page-item next">
                                    <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                                        <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                                    </a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                                        <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                                    </a>
                                </li>
                            <?php endif ?>

                        </ul>
                    </div>
                    <!-- end:: Pagination -->