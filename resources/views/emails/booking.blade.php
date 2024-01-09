    <p>Customer name: </b> {{ $customer }}</p>    
    <p>Email : </b> {{ $email_client }}</p>
    <p>phone : </b> {{ $phone }}</p>
    <p>Address: </b> {{ $address }}</p>
    <p>Gender : </b> {{ $gender }}</p>
    <p>Ordered by: </b> {{ $order_by }}</p>
    <p>Quantity: </b> {{ $qty }}</p>
    <p>Structure: </b> {{ $structure }}</p>
    <p><b>Message:</b> <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$msg_client); echo $message; ?></p>
  