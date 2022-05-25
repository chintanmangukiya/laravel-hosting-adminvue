<?php
function csvToArray($csvFile)
{
    $file_to_read = fopen($csvFile, 'r');

    while (!feof($file_to_read)) {
        $lines[] = fgetcsv($file_to_read, 1000, ',');
    }

    fclose($file_to_read);
    return $lines;
}
//read the csv file into an array
$employee_data = 'employee_data.csv';
$employee_salary = 'employee_salary.csv';
$emp = csvToArray($employee_data);
$emp_salary = csvToArray($employee_salary);

//render the array with print_r
echo '<pre>';
print_r($emp);
echo '</pre>';
?>
