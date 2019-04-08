<?php
//set default value
$message = '';

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action =  'start_app';
}

//process
switch ($action) {
    case 'start_app':

        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        // make sure the user enters both dates
        if ($invoice_date_s == NULL || $due_date_s == NULL){
            $message = 'Enter both dates.';
        }

        // convert date strings to DateTime objects
        // and use a try/catch to make sure the dates are valid
        $valid = FALSE;
        try {
            $invoice_date_o = new DateTime($invoice_date_s);
            $due_date_o = new DateTime($due_date_s);
            date_default_timezone_set('America/Chicago');
            $current_date_o = new DateTime();
            $valid = TRUE;
        } catch (Exception $e) {
            $message = 'Dates are invalid.';
        }

        if ($valid){
            // make sure the due date is after the invoice date
            $time_span = $invoice_date_o->diff($due_date_o); 
            if ($time_span->format('%R') == '-'){
                $message = 'Due date is before invoice date';
            }
            // format both dates
            $invoice_date_f = $invoice_date_o->format('F d, Y');
            $due_date_f = $due_date_o->format('F d, Y');
            
            // get the current date and time and format it
            $current_date_f = $current_date_o->format('F d, Y');
            $current_time_f = $current_date_o->format('g:i:s a');
            
            // get the amount of time between the current date and the due date
            $time_span1 = $current_date_o->diff($due_date_o);
            ;
            // and format the due date message
            if ($time_span1->format('%R') == '-'){
                $due_date_message = $time_span1->format('This invoice is %y years, %m months, and %d days overdue.');
            } else {
                $due_date_message = $time_span1->format('This invoice is due in %y years, %m months, and %d days.');
            }
            

            break;
        }
        
}
include 'date_tester.php';
?>