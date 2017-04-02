Team membership:  DT (Captain) & JW (Member) & KT (Member) & AB (Member) & JD (Member)
Team conventions: Allman notation, markdown for changelog  

## *Version 2.1*

Release Date: 3/25/17

## New Components
- controllers
    - Roles(DT)
        used to set session roles

## Updated Components


- config
    - constants.php(DT)
        added constant definitions for user roles.
    - autoload.php (DT)
        now loads database and sessions
    - config.php
        removed menubar constants

- core
    - MY_Controller.php(DT)
        'pagetitle' changed from Quotes.cms to RobotFactory.cms
        data for menubar_choices will now vary depending on which role is active during the current session

- db
    - robot.sql(DT)
        database dump updated to include ci_sessions
        ci_sessions used to track session information

- views
    - _menubar.php(DT)
        added a dropdown bar to select roles

## *Version 2.2*

Release Date: 3/27/17

## New Components
- controllers
    - PartDetails(JW)
        used to show details of selected part
        accessible only to certain roles
- views
    - part_details.php(JW)
        displays detailed infomation about a part

## Updated Components
- controllers
    - Assembly(JW)
        added build robot functionality
        checks for empty or invalid inputs before building
        accessible only to certain roles        
    - Parts(JW)        
        accessible only to certain roles
- views
    - assembly.php(JW)
        added ajax funtionality for 'build' feature
        cleaned up javascript
    - parts_row.php(JW)            
        renamed from 'my_row.php'
        links to part details page
- models
    - RobotsModel(JW)
        added build function to build robots from parts
    - PartsModel(JW)
        added delete function to delete parts used
- config
    - routes.php(JW)
        routes subcontroller PartDetails correctly
- css
    - style.css(JW)
        fixed warning box behavior

## *Version 2.3*

Release Date: 3/30/17

## New Components
- controllers
    - Manage.php(DT)
        can currently reboot plant and register new plants
    - Welcom(KT)
        -updated the welcome page to used models Parts, History, and robots
        in order to grab the assembled robots, how many parts in hand, how many bots sold
        -pulled the team balance and added to the dashboard      

- models
    - ApikeyModel.php(DT)
        Creates, Reads and Updates current apikey. Also is able to truncate
        all tables except apikeys table.
    - deleted robotHome as it decided that it was not neccessary to have (KT)
- views
    - _manage.php(DT)
        diplays manage page for bosses
    - homepage.php(KT)
        - added 2 more boxes (torso,bottom) and updated the input to not be hard coded but
        to pull data from the database.


## Updated Components
- db
    - robot.sql(DT)
        datebase dump now includes table for tracking apikeys

## *Version 2.4*

Release Date: 4/1/17

## Updated Components
- controllers
    - Parts(JW)
        added funtionalities to 'build' and 'buy'
        uses API key from the database to retrieve live data from the umbrella server
    - Manage(JW)
        added funtionalities to Sell robots

## *Version 2.5*

		
Release Date: 4/2/17

## New Components

- History View: (AB) 
	- added a form that has two button inputs that will initiate a filtering of database results
	- reads input and calls appropriate functions using form action
	
- History Model (AB)
	- added two functions, so now the 3 functions will implement pagination of the records
	- pagination will yield 20 results per page
	- view will adjust according to buttons pressed on the view.
- History Controller (AB)
	-handles different inputs accordingly following pagination template
	-added commenting to clarify program flow.

## Updated Components

    - Welcome(KT)
        added a new recently built feature to the home page 
        loop through the robot record and find the parts of the last 3 recently built robots
    - Parts(KT)
        added css to the table for the parts view
- View
    - Homepage(KT)
        added the html for the recently built robots

