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

function editEmployee($empID, $editfName, $editlName, $editPhoto){
    global $db;

    if (isset($_POST['edited'])){
        
        echo("Worked!");
        //$_FILES

        $name = $_FILES['editPhoto']['name'];
        $tmpName = $_FILES['editPhoto']['tmp_name'];
        $dir = getcwd() . DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $name;
        

        echo($dir);
        move_uploaded_file($tmpName, $dir);

    }


    $sql = "UPDATE `employee` SET `firstName`='$editfName',`lastName`='$editlName',`photo`='$name' WHERE `employeeID`='$empID'";
    echo($sql);


    

    $qry = $db->query($sql);

}