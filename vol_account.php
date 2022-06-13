<?php
require_once "functions.php";
$conn = conn();
if($_SERVER['REQUEST_METHOD']=='POST') {
    $query = "SELECT ID_Volonteer FROM user
    left join volonteer v on user.ID_User = v.ID_User
    where Email='".$_COOKIE['user']."'";
    $result = $conn->query($query);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $ID = $rows[0]["ID_Volonteer"];
    $Sec_Name = $_POST["surname"];
    $Name = $_POST["name"];
    $Sex = $_POST["sex"];
    $Patronymic = $_POST["patronymic"];
    $About = $_POST["description"];
    $Book = isset($_POST['book'])?1:0;
    $Driver = isset($_POST['driver'])?1:0;
    $Birth_Date = $_POST["DOB"];
    if($_FILES['image']['name']!=="") {
        $file = $_FILES['image']['tmp_name'];
        $to = "avatars/{$_FILES['image']['name']}";
        $mime = mime_content_type($file);
        if ($mime != 'image/jpeg' && $mime != 'image/png') {
            $errors['image'] = 'Выберите файл формата .png,.jpg,.jpeg';
            $e = 1;
        } else {
            move_uploaded_file($_FILES['image']['tmp_name'], $to);
        }
    }
    else
        $to=null;
    $Address = $_POST["locality"];
    $Employment = $_POST['employment']==0?"NULL":$_POST['employment'];
    $Phone = $_POST["phone"];
    $Size = $_POST['size']==0?"NULL":$_POST['size'];
    $Email = $_POST["email"];
    $query="select ID_Passport from volonteer where ID_Volonteer=$ID";
    $result=$conn->query($query);
    $pass = $result->fetch_array()[0];
    $Series = $_POST["series"];
    $Number = $_POST["number"];
    $SNILS = $_POST["snils"];
    $TIN = $_POST["tin"];
    $TG = $_POST["link_telegram"];
    $VK = $_POST["link_vk"];
    $query = "Update user set Sec_Name='$Sec_Name', Avatar='$to',Name='$Name',Patronymic='$Patronymic',Email='$Email' where Email='$Email'";
    $conn->query($query);
    $query = "UPDATE `volonteer` SET
                       `Sex`='$Sex',
                       `Birth_Date`='$Birth_Date',
                       `Phone`='$Phone',
                       `TIN`='$TIN',
                       `LInk_VK`='$VK',
                       `Link_TG`='$TG',
                       `Driver_License`=$Driver,
                       `Medicat_book`=$Book,
                       `ID_Employment`=$Employment,
                       `ID_Size`=$Size,
                       `SNILS`='$SNILS',
                       `Address`='$Address',
                       `About`='$About' where ID_User=(select ID_User from  user where Email='$Email')";
    $conn->query($query);
    if(is_null($pass))
    $query = "insert into `passport` 
    (ID_Passport, Series, Number, Given_By, Division_Code, Given_Date, Birdth_Place, Registration_Address)
values(null, '$Series','$Number','dfse','985-920','2016-02-02','Москва','$Address')";
    else
        $query = "UPDATE `passport` set
                      `Series`='$Series',
                      `Number`='$Number',
                      `Given_By`='dfse',
                      `Division_Code`='985-920',
                      `Given_Date`='2016-02-02',
                      `Birdth_Place`='Москва',
                      `Registration_Address`='$Address'
                      where ID_Passport = $pass";
    $conn->query($query);
    $query = "Select * from direction";
    $result = $conn->query($query);
    while($row = $result->fetch_array(MYSQLI_ASSOC))
    {
        if(isset($_POST[$row['ID_Direction']]))
        {
            $query = "insert into volonteer_direction (ID_Volonteer, ID_Direction) values ($ID,".$row['ID_Direction'].")";
        }
        else
        {
            $query = "delete from volonteer_direction where ID_Volonteer=$ID and ID_Direction=".$row['ID_Direction'];
        }
        $conn->query($query);
    }
}
$query = "SELECT * FROM volonteer v
    left join user u on v.ID_User = u.ID_User
    left join passport p on p.ID_Passport = v.ID_Passport
    where Email='".$_COOKIE['user']."'";
$result = $conn->query($query);
$rows = $result->fetch_all(MYSQLI_ASSOC);
$query = "SELECT * from size";
$result = $conn->query($query);
$sizes = $result->fetch_all(MYSQLI_ASSOC);
$query = "SELECT * from employment";
$result = $conn->query($query);
$employments = $result->fetch_all(MYSQLI_ASSOC);
$query = "SELECT * from direction";
$result = $conn->query($query);
$directions = $result->fetch_all(MYSQLI_ASSOC);
$query = "SELECT * from volonteer_direction where ID_Volonteer=".$rows[0]["ID_Volonteer"];
$result = $conn->query($query);
$sel_dir = $result->fetch_all();
$ID_Size=$rows[0]["ID_Size"];
$x=['ID_Size' => 0, 'Size' => "Не выбрано"];
foreach ($sizes as $i=>$size)
{
    if($size['ID_Size']==$ID_Size) {
        $x = $size;
        unset($sizes[$i]);
    }
}
$sizes[] = $x;
$sizes = array_reverse($sizes);
$Employment = $rows[0]["ID_Employment"];
$x=['ID_Employment' => 0, 'Employment' => "Не выбрано"];
foreach ($employments as $i=>$employment)
{
    if($employment['ID_Employment']==$Employment) {
        $x = $employment;
        unset($employments[$i]);
    }
}
$employments[] = $x;
$employments = array_reverse($employments);
$main = include_template("vol_account.php",
    [
        "ID"=>$rows[0]["ID_Volonteer"]??"",
        "Sec_Name"=>$rows[0]["Sec_Name"]??"",
        "avatar"=>$rows[0]["Avatar"]??"/avatars/empty.png",
        "Name"=>$rows[0]["Name"]??"",
        "Sex"=>$rows[0]["Sex"]??"",
        "Patronymic"=>$rows[0]["Patronymic"]??"",
        "About"=>$rows[0]["About"]??"",
        "Book"=>$rows[0]['Medicat_book']??"",
        "Driver"=>$rows[0]['Driver_License']??"",
        "Birth_Date"=>$rows[0]["Birth_Date"]??"",
        "Address"=>$rows[0]["Address"]??"",
        "Phone"=>$rows[0]["Phone"]??"",
        "Email"=>$rows[0]["Email"]??"",
        "Series"=>$rows[0]["Series"]??"",
        "Number"=>$rows[0]["Number"]??"",
        "SNILS"=>$rows[0]["SNILS"]??"",
        "TIN"=>$rows[0]["TIN"]??"",
        "TG"=>$rows[0]["TG"]??"",
        "VK"=>$rows[0]["VK"]??"",
        "Sizes"=>$sizes??"",
        "employments"=>$employments,
        "directions"=>$directions,
        "sel_dir"=>$sel_dir
    ]
);
$page = include_template("layout.php", ['main' => $main]);
print_r($page);