<?php foreach ($data as $v) { ?>
    <?php $message = $v['message']; ?>
    <?php $request = $v['request']; ?>
    <?php $order = $v['order']; ?>
    <div class="jumbotron">
        <div class="alert alert-danger" role="alert">
            <?php echo '#: ' . $message['id'] . '; '; ?>
            <?php echo 'Скважина: ' . $message['well'] . '; '; ?>
            <?php echo 'Оборудование: ' . $message['equipment'] . '; '; ?>
            <?php echo 'Часть: ' . $message['product'] . '; '; ?>
            <?php echo 'Неисправность: ' . $message['failure'] . '; '; ?>
        </div>
        <?php if (!$message['sent']) { ?>
            <a class="btn btn-primary" href="/index.php?ctrl=Contractor&action=sent&id=<?php echo $message['id']; ?>">Сформировать запрос</a>
        <?php } ?>

        <?php if(!empty($request)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo 'Запрос #: ' . $request['id'] . ' сформирован;'; ?>
            </div>
        <?php } ?>
        <?php if(!empty($order)) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo 'Заказ #: ' . $order['id'] . '; '; ?>
                <?php echo 'Принят: ' . ($order['accepted'] ? 'Да' : 'Нет') . '; '; ?>
                <?php echo 'Дата поставки: ' . ($order['delivery_date'] == '0000-00-00' ? '-' : $order['delivery_date']) . '; '; ?>
            </div>
        <?php } ?>
    </div>

<?php } ?>
