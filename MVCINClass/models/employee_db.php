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

function editEmployee($editID){
    global $db;
    $sql = "UPDATE `employee` SET `firstName`=[value-1],`lastName`=[value-2],`photo`=[value-3],`employeeID`=[value-4] WHERE `employeeID`";
    

    $qry = $db->query($sql);
    // $employee = $qry->fetch();

    return $employee;
}