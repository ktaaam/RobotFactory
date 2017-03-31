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