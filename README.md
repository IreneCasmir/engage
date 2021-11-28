# engage

A web app using LAMP stack.The webapp supports student and teacher login.
Before logging in ,one needs to register to the system.Only those users can register already have their details in the database.

To set up:

* Set up LAMP and clone the repo
* Set the environment variables as:
    * $DB_SERVER = "localhost"
    * $DB_USERNAME = username(developed with root as username)
    * $DB_PASSWORD = database password
    * $DB_DBNAME = mysql database name
in the configuration files of apache(if not using apache via CLI) or else in the operating system ENV variables.
** Configure the file /etc/apache2/sites-available/000-default.conf as follows(or the necessary apache confi files to set the environment variables)
![alt text](/engage/images/config.png)

The index(or the first page to be opened is) ***index.php(or engage/index.php)***


The student names already there in the database are shown in ***student*** table and the students already registered who can directly login without registering are as shown in ***student_login*** table:
![alt text](/engage/images/student.png)

The teacher names already there in the database are shown in ***teacher*** table.The teachers already registered who can directly login without registering are as shown in ***teacher_login*** table:
![alt text](/engage/images/teacher.png)

The passwords for already registered students and teachers is their name itself.