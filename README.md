# [AWS](http://3.145.116.148/index.php)

### 1. Describe basic aspects of AWS Elastic Compute Cloud.

Amazon Elastic Compute Cloud (Amazon EC2) is a web-based service that basically allows businesses to run application programs/processes in the public cloud (AWS). Using AWS EC2 anyone can run/create a virtual machine with required computing/storage capacity for any of their applications or projects, which run directly on global AWS data center

Users can Increase/Decrease  instance capacity or the computing power that comes with VM so as to meet their needs as per situation. AWS EC2 can scale automatically, based on different scenarios depending whether more storage or computing power what is needed.

People can host Websites/Application/Processes, run test jobs and so on using EC2 instantaneous power.

There are different kind of instances or VM's traditionally usually coming with different sets of configuration the CPU power, RAM and STORAGE, and also with different flavors of LINUX OS or MAC OS or WINDOWS.

### 2. How to create a virtual machine instance in AWS EC2.

To be able to create a EC2 instance in AWS you basically need to have a AWS account and respective permissions by your admin/organization to be able to create any instance.
Once you are logged in into AWS Console, you can follow this series of steps
1. In top left corner you'll get a search bar, there you can search EC2
2. a drop down list will appear choose EC2 from services category
   ( you can also find ec2 through services dashboard which is left to the search bar)
3. Then you'll be greeted with a webpage from where you can create a instance(choose launch instance).
4. Now, you can select the VM image either linux, mac os or windows.
5. Once selected, you can select type of instance you want basically this is specs of your VM. CPUS, RAM and its Network Efficiency
6. Next you need to select no. of instances or they should be auto-scaled, and also you need to select appropriate Subnets,  Network and other configuration.
7. Next you can add storage to your VM, how much storage you require.
8. Next you can add any Tags if you want.
9. You can select a security group for your instance so as to set rules for it, basically who'll access the EC2 and from where all   the restrictions. And download the key pair for you instances.
10. And finally after reviewing the configurations you choose you can create the instance it'll be ready within few mins.

![Instance](https://user-images.githubusercontent.com/32818733/146018520-a6ff066f-1888-4705-8e44-4518ea5de2c3.png)


### 3. How to install an Apache webserver on AWS EC2 Instance.

To install Apache server on EC2 instance.

You need to login into your EC2 instance, you can use AWS cloudshell or linux terminal or Putty in Windows.
You can do SSH into your instance with the helps of key pair generated during the creation of EC2 instance, and when you have successfully logged in you can execute these series of commands to install server

*Installation of Apache webserver*

> ***sudo yum install -y httpd***

*Startig the webserver*

> ***sudo systemctl start httpd***

*Configuring to start server whenever system boots up*

> ***sudo systemctl enable httpd***


### 4. How we can connect an AWS EC2 instance to a MySQL server database.

You can connect your EC2 instance to Server database,

First is, you can keep your instance as well as RDS DB on same VPC and configure the subnets for the same.
You need to set the appropriate inbound/outbound rules basically the security group should be well configured to be able to establish a connection between ec2 and server database.
Now you can SSH into your EC2 instance and using the endpoint and port and credentials of the database you can work on you database.

Other one is, you can install Apache server, PHP on you EC2 instance, and use PHP to connect to the MySql database server, you just need to create a configuration file dbinfo.inc so as to specify the details of database you want to connect, you need to include Endpoint, port no. and credentials to be able to connect the EC2 with your Database.

### 5. How to connect a domain to your website using Route 53.

> -Get your current DNS configuration of your domain from DNS provider.
> -You need to create hosted zone and also create records(website.com or www.website.com)
> -You need to setup the name server with route 53 name servers
> -Transfer domain registration to Route 53  

### 6. Demonstrate the hosted website

Basically the website at `http://3.145.116.148` will let you add the student records to RDS DB, it is hosted on AWS EC2.
Once you fill the records and hit the update button, it'll greet you with the Successfully Added data page, and Mainpage is the one which stores the code related to adding records into the Database it is stored in EC2 /var/www/html
Database info is stored in a individual file located at /var/www/inc in a file named dbinfo.inc


![WEBSITE](https://user-images.githubusercontent.com/32818733/146018109-83654862-1bb7-4910-9762-2216c10baac4.png)


### 7. What are the key factors to keep in mind during the process?

- Apache server should be properly installed to be able to host the Website
- Security groups for EC2 instance and RDS DB should be setup properly in order to only allow limited access to required personnel.
- You need to keep safe your EC2 instance Key Pair which is used to do SSH into Instance.
- Inbound/Outbound rules should be properly setup so the outer world has access to website and don't have access to RDB DB
- You need to ensure that you only build that instance which is of most use to you and not under utilize  or waste any computing power, causing you extra money.
- Maintenance and backups should be scheduled period-wise to ensure efficiency of Website.

### 8. Clean up the project environment and avoid future costs.

As soon as your work is done or the instance is not needed you can terminate the instance to avoid any future costs.
