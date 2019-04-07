<?php 
    
    
    /** A FUNCTION THAT RETURNS ALL EMPLOYEES */
function getAllEmps(){
    global $db;
    $sql = "SELECT * FROM employee";
    // $qry = mysqli_query($db, $sql);

    // $aryEmp = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    $qry = $db->query($sql);
    $aryEmp = $qry->fetchAll();

    //return an array of employees
    return $aryEmp;

}

/** RETURN A SINGLE EMPLOYEE NAME FROM A GIVEN EMPLOYEE ID */
function getAnEmployee($empID){
    global $db;

    $sql = "SELECT * FROM employee WHERE employeeID = $empID";
    // $qry = mysqli_query($db, $sql);
    

    $qry = $db->query($sql);
    $employee = $qry->fetch();

    // $employee = mysqli_fetch_all($qry, MYSQLI_ASSOC);
    return $employee;
}

function editEmployee($empID, $fName, $lName, $photo){
    global $db;

    if (isset($_POST['edited'])){
        //$_FILES

        $name = $_FILES['photo']['name'];
        $tmpName = $_FILES['photo']['tmp_name'];
        $dir = getcwd() . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $name;

        // echo($dir);
        move_uploaded_file($tmpName, $dir);

    }

    $sql = "UPDATE `employee` SET `firstName`='$fName',`lastName`='$lName',`photo`='$name' WHERE `employeeID`='$empID'";
    // echo($sql);
    $qry = $db->query($sql);
}

function deleteById($delID){
    global $db;

    // echo ("<br><h1>Deleting ID $delID</h1>");
    $sql = "DELETE FROM `employee` WHERE `employeeID` = $delID";
    // echo $sql;
    $pdoS = $db->query($sql);
}

function addEmployee($fName, $lName, $photo){
    global $db;

    if (isset($_POST['added'])){
        //$_FILES

        $name = $_FILES['photo']['name'];
        $tmpName = $_FILES['photo']['tmp_name'];
        $dir = getcwd() . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $name;

        // echo($dir);
        move_uploaded_file($tmpName, $dir);

    }

    // echo ("<br><h3 style='width:40%; float:right;'>Added $fName $lName</h3>");
    $sql = "INSERT INTO `employee`(`firstName`, `lastName`, `photo`) VALUES ('$fName','$lName','$name')";
    echo $sql;
    $pdoS = $db->query($sql);
}