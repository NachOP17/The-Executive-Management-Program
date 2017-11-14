<?php 

if ($_POST['formpass'] != "wough9348y3**")
	die("No autorizado"); 

$name = $_POST['name'];
$address = $_POST['address'];
$paddress = $_POST['paddress'];
$coname = $_POST['coname'];
$businessadd = $_POST['businessadd'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$mobile = $_POST['mobile'];
$inst1 = $_POST['institution1'];
$inst2 = $_POST['institution2'];
$inst3 = $_POST['institution3'];
$loc1 = $_POST['location1'];
$loc2 = $_POST['location2'];
$loc3 = $_POST['location3'];
$study1 = $_POST['study1'];
$study2 = $_POST['study2'];
$study3 = $_POST['study3'];
$level1 = $_POST['level1'];
$level2 = $_POST['level2'];
$level3 = $_POST['level3'];
$dates1 = $_POST['dates1'];
$dates2 = $_POST['dates2'];
$dates3 = $_POST['dates3'];

$to = 'manager@topmanagement-ua.com';
$subject = "New Application Form";

$body = '<html>
            <body>
        <table rules="all" style="border-color: #666;" cellpadding="10">
        <tr>
            <th colspan="5" style="background: #ccc;">Personal Information</th>
        </tr>
        <tr>
            <th>
                <br>
            </th>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Name</th>
            <td colspan="4">'.$name.'</td>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Email</th>
            <td colspan="4">'.$email.'
                <td>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Telephone</th>
            <td colspan="4">'.$telephone.'
                <td>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Mobile</th>
            <td colspan="4">'.$mobile.'
                <td>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Address</th>
            <td colspan="4">'.$address.'</td>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Permanent Address</th>
            <td colspan="4">'.$paddress.'</td>
        </tr>
        <tr>
            <th>
                <br>
                <br>
            </th>
        </tr>
        <tr>
            <th colspan="5" style="background: #ccc;">Business Address</th>
        </tr>
        <tr>
            <th>
                <br>
            </th>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Name Of Company</th>
            <td colspan="4">'.$coname.'</td>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Business Address</th>
            <td colspan="4">'.$businessadd.'</td>
        </tr>
        <tr>
            <th>
                <br>
                <br>
            </th>
        </tr>
        <tr>
            <th colspan="5" style="background: #ccc;">Academic Background</th>
        </tr>
        <tr>
            <th>
                <br>
            </th>
        </tr>
        <tr>
            <th width="136" style="background: #eee;">Institution</th>
            <th width="136" style="background: #eee;">Location</th>
            <th width="136" style="background: #eee;">Type of Study</th>
            <th width="136" style="background: #eee;">Level</th>
            <th width="136" style="background: #eee;">Dates (in &amp; out)</th>
        </tr>
        <tr>
            <td>'.$inst1.'</td>
            <td>'.$loc1.'</td>
            <td>'.$study1.'</td>
            <td>'.$level1.'</td>
            <td>'.$dates1.'</td>
        </tr>
        <tr>
            <td>'.$inst2.'</td>
            <td>'.$loc2.'</td>
            <td>'.$study2.'</td>
            <td>'.$level2.'</td>
            <td>'.$dates2.'</td>
        </tr>
        <tr>
            <td>'.$inst3.'</td>
            <td>'.$loc3.'</td>
            <td>'.$study3.'</td>
            <td>'.$level3.'</td>
            <td>'.$dates3.'</td>
        </tr>
    </table>
</body>
</html>';

$message = $body; 
$headers = "From: ".$name."<".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "Return-Path: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset = utf-8";

$send = mail($to, $subject, $body, $headers);
mail('robert75x@hotmail.com', $body, $headers);
mail('services@topmanagement-ua.com', $body, $headers);
	
if ($send) {
    header('Location: registro.html');
    echo "<script type='text/javascript'>alert('The message have been successfuly sent')</script>";
} else
    echo "<script type='text/javascript'>alert('There was an error sendind the message. Try again please.')</script>";
	

?>