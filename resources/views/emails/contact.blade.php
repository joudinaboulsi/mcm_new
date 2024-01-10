<h1>Email from Website</h1>
<p><b>First Name:</b> {{ $firstname }}</p>
<p><b>Last Name:</b> {{ $lastname }}</p>
<p>Email : </b> {{ $email }}</p>
<p>Phone : </b> {{ $phone }}</p>
<p>Gender : </b> {{ $gender }}</p>
<p><b>Message:</b> <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$msg_client); echo $message; ?></p>

