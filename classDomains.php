<?php

class Company{
    public $ID;
    public $name;
    public $employeeList; 
    
    public function __construct($name, $employeeList) 
    {
        $this->name = $name;
        $this->employeeList = $employeeList;
    }
}


class Employee {
    public $ID;
    public $name;
    public $job;

    public function __construct($name, $job) 
    {
        $this->name = $name;
        $this->job = $job;
    }
}


class Film {
    public $ID;
    public $label;
    public $title;
    public $company;
    public $creators;
    public $year;
    public $technique;

    public function __construct($ID, $label, $title, $company, $creators, $year, $technique) 
    {
        $this->ID = $ID;
        $this->label = $label;
        $this->title = $title;
        $this->company = $company;
        $this->creators = $creators;
        $this->year = $year;
        $this->technique = $technique;
    }
}




?>





CREATE TABLE companies(
 id SERIAL PRIMARY KEY,
 name VARCHAR NOT NULL
);

CREATE TABLE employees(
 id SERIAL PRIMARY KEY,
 name varchar not null,
 job varchar not null
);

CREATE TABLE films (
  id SERIAL PRIMARY KEY,
  label VARCHAR NOT NULL,
  title VARCHAR NOT NULL,
  company VARCHAR NOT NULL,
  creators VARCHAR NOT NULL,
  year INTEGER NOT NULL,
  technique VARCHAR NOT NULL
);


CREATE TABLE connect_companies_to_employees(
 id SERIAL PRIMARY KEY,
 company_id int not null,
 employee_id int not null,

 CONSTRAINT company_foreignkey
 FOREIGN KEY(company_id)
 REFERENCES companies (id)
 ON DELETE CASCADE,

 CONSTRAINT employee_foreignkey
 FOREIGN KEY(employee_id)
 REFERENCES employees (id)
 ON DELETE CASCADE
);








<!-- 
select * 
from companies, connect_companies_to_employees 
where companies.id = connect_companies_to_employees.id
and employees.id = connect_companies_to_employees.id
;


select 
* 
from 
companies, connect_companies_to_employees, employees 
where 
companies.id = connect_companies_to_employees.company_id 
and 
employees.id = connect_companies_to_employees.employee_id; 


-->