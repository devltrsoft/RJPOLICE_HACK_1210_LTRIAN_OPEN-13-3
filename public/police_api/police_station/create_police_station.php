<?php
include("../conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $police_station_name = $_POST['police_station_name'];
    
    $country_id = $_POST['country_id'];
    $state_id = $_POST['state_id'];
    $dist_id = $_POST['district_id'];
    $city_id = $_POST['city_id'];

    $station_address = $_POST['station_address'];
    $station_code = $_POST['Station_Code'];
    $postal_code = $_POST['Postal_Code'];
    $phone_number = $_POST['Phone_Number'];
    $fax_number = $_POST['Fax_Number'];
    $email_address = $_POST['Email_Address'];
    $detention_cells = $_POST['Detention_Cells'];
    $interrogation_rooms = $_POST['Interrogation_Rooms'];
    $evidence_storage = $_POST['Evidence_Storage'];
    $vehicle_parking = $_POST['Vehicle_Parking'];
    $conference_meeting_room = $_POST['Conference_Meeting_Room'];
    $operation_24_7 = $_POST['24/7_Operation'];
    $narcotics_division = $_POST['Narcotics_Division'];
    $ybercrime_unit = $_POST['cybercrime_unit'];
    $traffic_enforcement = $_POST['Traffic_Enforcement'];
    $k_9unit = $_POST['K-9_Unit'];
    $SWAT_team = $_POST['SWAT_Team'];
    $other = $_POST['Other'];
        $date_of_registration = $_POST['date_of_registration'];
        $registration_officer = $_POST['Registration_Officer'];
        $additional_information = $_POST['Additional_Information'];
        $acknowledgment = $_POST['Acknowledgment'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];



if($country_id==""){
    $country_id="1";
}
if($state_id==""){
    $state_id="1";
}
if($dist_id==""){
    $dist_id="1";
}
if($city_id==""){
$city_id="1";
}



$sql="INSERT INTO `police_station`(`police_station_name`, `country_id`, `state_id`, `district_id`, `city_id`, `latitude`, `longitude`, `station_address`, `station_code`, `postal_code`, `phone_number`, `fax_number`, `email_address`, `detention_cells`, `interrogation_rooms`, `evidence_storage`, `vehicle_parking`, `conference_meeting_room`, `operation_24_7`, `narcotics_division`, `cybercrime_unit`, `traffic_enforcement`, `k_9unit`, `SWAT_team`, `other`, `date_of _registration`, `registration_officer`, `additional_information`, `acknowledgment`) VALUES ('$police_station_name','$country_id','$state_id','$dist_id','$city_id','$latitude','$longitude','$station_address','$station_code','$postal_code','$phone_number','$fax_number','$email_address','$detention_cells','$interrogation_rooms','$evidence_storage','$vehicle_parking','$conference_meeting_room','$operation_24_7','$narcotics_division','$ybercrime_unit','$traffic_enforcement','$k_9unit','$SWAT_team','$other','$date_of_registration','$registration_officer','$additional_information','$acknowledgment')";
//echo $sql;

if(mysqli_query($conn,$sql)){
echo"success";
}
else{
echo"error";
}

}


?>