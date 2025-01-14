<?php

define('MALE_RETIREMENT_AGE', 65); 
define('FEMALE_RETIREMENT_AGE', 62); 


/**
 * Calculating Annual Salary by Salary Monthly
 * 
 * @param float $salaryMonthly person's monthly salary
 * 
 * @return string $annualSalary person's annual salary
 */

function annualSalaryCalculation(float $salaryMonthly): string
{
        $annualSalary = null; 

        if($annualSalary === null){
                $annualSalary = $salaryMonthly * 12;
        }

        return formattingForMonetaryValue($annualSalary);
}

/**
 * Calculating Years for retirement
 * 
 * @param array $peopleData person's data
 * 
 * @return int Years for retirement
 */

function calculateYearsToRetirement(array $peopleData): int
{
        $yearsToRetirement = null; 

        if ($peopleData['gender'] === 'M') {
                $yearsToRetirement = MALE_RETIREMENT_AGE - $peopleData['age'];
        }

        if ($peopleData['gender'] === 'F') {
                $yearsToRetirement = FEMALE_RETIREMENT_AGE - $peopleData['age'] ;
        }

        return $yearsToRetirement;
}


/**
 * formatting of numbers for monetary values
 * 
 * @param float $value value to be formatted
 * 
 * @return string formatted value
 */

function formattingForMonetaryValue(float $value): string
{
       return 'R$ '. number_format($value, 2, ',', '.');
}

/**
 * Checking status job
 * 
 * @param array $peopleData person's data
 * 
 * @return string status job
 */

function checkStatusJob(array $peopleData): string
{
        $statusJob = 'Empregado'; 

        if ($peopleData['jobStatus'] === null) {
                $statusJob = 'Desempregado';
        }

        return $statusJob;
}
