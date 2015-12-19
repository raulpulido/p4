# P4: NJEDA - iDMS Incentives Data Management System

## Live URL
<http://p4.arpulido.me>

## Description
 

iDMS is a web application for NJEDA (New Jersey Economic Development Authority) to receive, review and management the Incentives annual report for customers. Each customer (companies) has one or many projects (Incentives programs) and each year they have to submit the Annual Report for each project. The NJEDA officers have assign projects and they have to evaluate that the project is in compliance with the state regulations. 
## Demo video
<http://www.screencast.com/t/M6jMFBKo>
* **Demo Accounts:**
	* **Email:** `Jill@Harvard.edu` **Password:** `helloworld`
	* **Email:** `Jamal@Harvard.edu` **Password:** `helloworld`


## Details of Project

* **Eloquent Models:**
	* "Company"
		* projects(): hasMany('App\Project')
	* "Officer"
	 	* projects(): hasMany('App\Project')
	 	* getOfficerForDropDown()
	* "Year"
	 	* projects(): belongsToMany('App\Project')
	* "Project"
		* company(): belongsTo('App\Company')
		* officer(): belongsTo('App\Officer')
		* years()  : belongsToMany('App\Year')->withTimestamps()
		* getYearListAttribute()
		
* **Database Overview:**
	* "companies" 		- Table containing company information data
	* "officers" 		- Table containing NJEDA officers information data
	* "years" 			- Table containing CPI perceint and Year  data
	* "pojects"			- Table containing project information data
	* "project year" 	- Pivol Table create for the many to many relations between projects and years

* **Server Side Validation - Request:**
	
    *** Note: The system has implementation of view partials and form reuse, in order to reuse the requests for create and update events, I name them with the name of the model only instead of add "Create" or "Update" word. ***
	  
	* "CommpanyRequest" 		- Table containing NJEDA officers information data
	* "OfficerRequest" 			- Table containing CPI perceint and Year  data
	* "ProjectRequest"			- Table containing project information data
	* "Year" 	- Pivol Table create for the many to many relations between projects and years
	
## Outside resources
* **Laravel Packages:**
	* laravelcollective/html
	* barryvdh/laravel-debubar
	* laracasts/flash

* **Other Code:**
	* CSS Animate
	* Jquery
