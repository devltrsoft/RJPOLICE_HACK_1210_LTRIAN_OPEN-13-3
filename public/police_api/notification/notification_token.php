<?php
$serverKey = 'AAAAQVF-zgo:APA91bGnrOQ12ffIpVZA68XojiYcZ6dczJYx0gzLsR_5M7eFoTQU_MxxKPU8Xzq3Fx-9H7iXriksupGnS5xfWkag2BFRlxB0IrvQUcAK5KVo-5iF1JfQ8sNiRSuXpXq2E9hLvEtHCWRa';
$targetDeviceToken = 'chfSjSJ9QWednxWHuthZvU:APA91bEUmhUP2a6bJfAKlf8eoUxwipxWUgfXqwup_A9TGhNp4ktQbOwY61g-vphMtuBbmY3NKtA2DHvbbQK76-uwmdbkXCg7MuGZhrks_33VyfRgC0qvTaUcSHm83BtOxEPUv3jqmvWU';

$headers = [
    'Authorization: key=' . $serverKey,
    'Content-Type: application/json',
];

$message = [
    'to' => $targetDeviceToken,
    'notification' => [
        'title' => "hello ",
        'body' => 'testing',
        'sound' => 'default', // Specify the default notification sound
    ],
    'data' => [
        'custom_key' => 'custom_value', // Add any additional custom data
    ],
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));

$result = curl_exec($ch);
curl_close($ch);
?>
