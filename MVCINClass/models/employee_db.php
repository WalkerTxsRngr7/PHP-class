<?php 
    
    
    
    /** A FUNCTION THAT RETURNS ALL EMPLOYEES */
function getAllEmps(){
    global $db;
    $sql = "SELECT * FROM employee";
    $qry = mysqli_query($db, $sql);

    $aryEmp = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    //return an array of employees
    return $aryEmp;

}

/** RETURN A SINGLE EMPLOYEE NAME FROM A GIVEN EMPLOYEE ID */
function getAnEmployee($empID){
    global $db;

    $sql = "SELECT * FROM employee WHERE employeeID = $empID";
    $qry = mysqli_query($db, $sql);

    $employee = mysqli_fetch_all($qry, MYSQLI_ASSOC);
    return $employee;
}