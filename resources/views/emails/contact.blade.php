<p>Name: </b> {{ $firstname }} {{$lastname}}</p>    
<p>Email : </b> {{ $email_client }}</p>
<p>Phone : </b> {{ $phone }}</p>
<p>Gender : </b> {{ $gender }}</p>

<p><b>Message:</b> <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$msg_client); echo $message; ?></p>
