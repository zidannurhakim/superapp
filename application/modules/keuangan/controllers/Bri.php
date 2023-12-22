<?php
defined('BASEPATH') OR exit('No direct script access allowed');

### notes ###
 # info rekening : Inquiry timeout
 # briva update : kolom keterangan tidak bisa menggunakan kata "Update" (0109 : Invalid request parameter)
 # briva get report : hanya bisa mendapatkan data 1 hari dan diambil dari END_DATE (ex: 20230622)
 # next : karena token bisa valid hingga beberapa jam, token bisa disimpan di tabel untuk digunakan beberapa kali hingga invalid. dengan begitu bisa mempersingkat proses karena tidak perlu generate token dari awal

class Bri extends CI_Controller {
	private $module = "keuangan";
	private $page_title = "Bank BRI";

	function __construct() 
    {
        parent::__construct();
        $this->client_id = "lhJsuD0lJnHyNNjjAv6sBBfTTmSaAWbV";
		$this->client_secret = "GsfEXWD5uKQzVL1G";
		$this->sandbox_url = "https://sandbox.partner.api.bri.co.id";
$private_key = "-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAq1fsVnMwjeUNZHoeAGLQt8rdd/T74KI+PZssbY+AqfgFHkf5
L9UacmuojALPsn0u+5PAZeMaGU5IGn6GvuHkqaRDe5zCi9kaB+CapbjDqtx03YgQ
MMDnfjf3yUZChSIb91pyd3EWY0kfVz8/OEMQU3PJ3qDcw2mznwb4ng5sLpaoVybT
rEKUkMsm6KW5UBtSMHF9Bk1z7TBzKbrUuvHq4Ft7oEb5gwtTDNHDZOe3St+2WgJ9
GXF5Qd15K+fDxvm0OwSZQ4m6NTZzR/TEHXNZmfMe6ozJfA7KxUFjS4E2wH+GFpc9
qboXEshviuGTnPToKQCiq6r0Gtk2o2Y4OAaigwIDAQABAoIBAAanXm0pAfywpWl+
eIXJUJOilCEhaVqa0lHwIbSLexKeqAw5/UpHO0SwO5ZcUZZ72AQ7A6CxRgUvjgtB
WJg3C3su/tPhDYkCwEkIBtliqG6NKxijPQW3qAW1xLCTQugKoA1l/MX4pUbrwwTP
VvQnXo3vFCrKEmigRTJqweLZaogQjzbAVicRVMiMPUVVAPJOGUj6I/gf+oeMT65+
7p2b2WCySkcGAVH3r/cyY89O1B4Yicyx4NiR/aLCwKVa07cyNtVlvJRq5rKc/LCM
xoM9n/EG2wUltjaHmsdYijO0C81qGz6pzExcWw1DXb6zU38uirDF91wN3u+MJO7U
cEsRvwkCgYEA9UPcJTQiN3NkM19g8ifV5miy5bIMGhzxPNBnGDSsDDaF6/1wIhyJ
2k1rPUpLtvb5gaOMX4/imuqBIc+D/eDSsQfCbi5Lb0BrcRUNpkIo9yVSslO4ZIHL
96mIXWU0aWezjxImnBes2X8ckpcGDqJJcvPcHBFLneCExv4Y//4+aT8CgYEAstfJ
vE9WzC1+genOjrIS92QEgZM6vyeTFKu/qForA4ZcDT2eLM21ry2cVqf5TjEHgvKl
cEb7/L6Gv8MLP07ffY5VyRfpLr1Mo0n91/ICi6G2C9Jn0n7Bb4efhNGne5837n2L
l8wgaV8fI0ICIDz0TCKrM51d7fmkjrr915vaUb0CgYEAwpEg1Uq0UjTyKmbhq3i6
kVxBf0Jto1GOdmYFQwiV6+Jc/0dAa28kVM/R4P9NbUojyRoLQ8wLQkYCRuYumXp+
6f1z2qBTK2B5W24OM/SMNvOe1OThhKoLOt981Epy96NSqI8HnhCSCMBz1D6GiZlo
lw6pcIKv8ACqlIoDHyF8NVUCgYAgUXRoLiIuRW5eBaVJDg71W8Kgs71i+8DNdHfu
8VRij64kymTCDe5uGJzu3+3iXmPQGw8gagNxWfC5yIJIz3T9mHISI9sEkjq+K0nO
8zHYj8F5A221kShdgjGma8iLQ2t1EoTeSon04LacxXni34D6HS245xApR/qfvFTQ
2J4sNQKBgGyxlS2csHMLIh15GjvVM9ddwP8BClh73qbWNCLeeMhVhV7B2V9YgcMw
jQimqY5PqIRMEYfOLm30O5DRQUyOd3ur/sQZLMOjK5gN1AwnnTntk7BhJUR2zPes
UWN94qMDRGkTzm4uHNx7OysRAVuCbIRlNGQszJAUHvwrj0RVoBBd
-----END RSA PRIVATE KEY-----";
		$this->privatekey=$private_key;
    }

    function index()
    {
        $data['view_file'] = "bri_inquiry";
        $data['page_title'] = $this->page_title;
        $data['module'] = $this->module;
        ### get data ###
        $verb = "GET";
        $path = "/v2/inquiry/888801000157508";
        $timestamp = gmdate('Y-m-d\TH:i:s.000\Z');

        $token = $this->genToken();
        $signature = $this->genSignature($path,$verb,$token,$timestamp);

        $header = array(
            'Authorization: Bearer '.$token,
            'BRI-Timestamp: '.$timestamp,
            'BRI-Signature: '.$signature
        );

        $url = $this->sandbox_url.$path;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLINFO_HEADER_OUT, TRUE);

        $result = curl_exec($curl);
        curl_close($curl);

        $data['result'] = json_decode($result, true);
        $this->load->view('templates/adminkeceh',$data);
    }
    
    function genToken() {
		$url_oauth = $this->sandbox_url."/oauth/client_credential/accesstoken?grant_type=client_credentials";
		$data = "client_id=".$this->client_id."&client_secret=".$this->client_secret;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url_oauth);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$result = curl_exec($ch);
		curl_close($ch);

		$json = json_decode($result, TRUE);
		return $json['access_token'];
		// var_dump($json);
	}

	function genSignature($path,$verb,$token,$timestamp,$body="") {
		$payload = "path=$path&verb=$verb&token=Bearer $token&timestamp=$timestamp&body=$body";

		$signature = hash_hmac('sha256', $payload, $this->client_secret, TRUE);
		return base64_encode($signature);
	}
}