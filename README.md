# Fit-Me : A fitness Website url:http://fitme-env-1.eba-vmgafpbp.us-east-1.elasticbeanstalk.com/

Fit-ME is developed to provide free exercises at home, in order to stay fit in pandemic. User's can choose among different workouts, yoga & meditation or Customize and add their own workout and calculate BMI after logging in.

Web application built using PHP, HTML, CSS and mariadb database

Running The Project on local machine

Pre-requisites :
1.Clone the respository from URL "https://github.com/Abhishek-NCI/Fit-Me.git"
2.Install PHP on your local machine
3.Install Xampp on your machine

Follow below steps tu run application

STEP I   : To run this project,you must have installed XAMPP on your PC.
STEP II  : After Starting Apache and MySQL in XAMPP, follow the steps from step III.
STEP III : Extract the ZIP file 
STEP IV  : Copy the project folder
STEP V   : Paste in xampp/htdocs/
STEP VI  : Import the phpproject01.sql file into phpMyAdmin url:http://localhost/phpmyadmin/
After creating database 
STEP VII : Open a browser and Run using URL "http://localhost/Fit-Me/"

 Deploying web application on AWS cloud.

1.You must have AWS account 
2.You must have git installed on your local machine
3.Clone the respository from URL "https://github.com/Abhishek-NCI/Fit-Me.git"

STEP I    : Create elastic beanstalk environment with sample application using PHP platform
STEP II   : Create RDS instance for Mariadb using standard create and make it publically accessible.Put the endpoint of an instance in 'dbh.inc.php'. Access the database created and run the command source phpproject01.sql to extract the database.
STEP III  : Push the cloned code in your personal respository.(Prefer to use main branch)
STEP IV   : Go to the AWS CodePipeline Service
STEP V    : Connect the pipeline with your GitHub repository
STEP VIII : While Deploying, Select host provider as AWS elastic beanstalk in AWS CodePipeline
STEP IX   : Select the AWS elastic beanstalk environment
STEP X    : Create AWS CodePipeline 
STEP XI   : Click on URL Of elastic beanstalk, and you are ready to host.