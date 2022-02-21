<?php

$customers =  $this->get('customers');

foreach ($customers  as $customer) :
    ?>

    <div class="customer">
        <h4 class="name">
            <?php echo $customer['first_name'] . "  " . $customer['last_name'] ?>
        </h4>
        <p> Номер телефону: <?php echo $customer['telephone'] ?></p>
        <p> Електронна адреса: <?php echo $customer['email'] ?></p>
        <p> Назва міста: <?php echo $customer['city'] ?></p>
    </div>
<?php endforeach; ?>