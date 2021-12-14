# AWS [AWS](http://3.145.116.148/index.php)

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
