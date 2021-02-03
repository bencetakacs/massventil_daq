<img src="http://massventil.org/wp-content/uploads/2020/04/cropped-240x240_transparent.png" align="right" />

# MassVentil V1.0

The MassVentil Project: Designing a Mass Ventilator System for the Treatment of Group Illnesses

We are designing a mass ventilator system, that can ventilate up to 5-10-50 or even more people at once, protect healthcare workers, and can be operated outside of hospitals, in temporary emergency camps.

The mission of the MassVentil project team is developing of a working prototype for a modular mass ventilator system, which, under critical circumstances, can be used to simultaneously ventilate a large number of coronavirus patients in critical condition. Plans and results are available for free for organisations who wish to use it during the COVID-19 outbreak.

One of the main part ov the MassVentil project is the Data Acquisition System which is responsible for data collecting, showing and storing with additional management possibilities like monitoring and fine-tuning ventilation parameters dedicated to 1 or more specific patient by locations. It is also possible to organize the actually ventilated patients by using the patient management module.

# MassVentil Data Acquisition System V1.0 README

This README file provides a basic installation guide to have the MassVentil Data Acquisition System V1.0 up and running on your server.

The basis of this system is the Thingsboard framework which is supported by additional custom widgets and scripts.

## Prerequisites

### Hardware

As for the hardware a decent configuration could be the following:
	- Intel i5 4th generation CPU
	- 16 GB DDR4 RAM
	- 500 GB SSD
	- Gigabit network connection
	- Gigabit capabile WiFi router

### Software

To have the system up and running, the Thingsboard CE version should be installed with additional postgresql database. We are recommending to use Ubuntu 18.04 LTS version.

For further information check the official Thingsboard webpage under ["here"](https://thingsboard.io/docs/user-guide/install/ubuntu/)

# Install

The Thingsboard dashboards and also the solved functionalities are solved via web scripting, thus compiling additional libraries or source files are not necessary.

## Step 1 - Download files

Download this repository.

## Step 2 - Prepare database

Restore database using the ~/database/mv_db_export.psql file. You can find also many example data there. This script contains entries for extending the base database of Thingsboard called "thingsboard". It will not block the Thingsboard, nor occupy, only extends it.

## Step 3 - Prepare webserver

Copy all the contents of the web folder under your main entry point of your webserver.

## Step 4 - Validate installation

Jump to the base log in screen of the Thingsboard. By default it is 127.0.0.1:8080. Log in as tenant user (username: tenant@thingsboard.org, password: tenant). There is also available MassVentil user with restricted rights for testing (username: mvuser).

Click on Dashboards on the left side menu bar and select on the "Patient Summary Screen" on the main tab.

# Get Feedback

Something is not working? Do you have any questions? Would you like to contribute?

Contact us at ["MassVentil webpage"](http://www.massventil.org) 

Send a direct message to the author: Roland Doczi (doczi.roli@gmail.com)

# Contribute

Contributions are welcome!

For further information see ["MassVentil webpage"](http://www.massventil.org)

# License

For further information see ["MassVentil webpage"](http://www.massventil.org) 