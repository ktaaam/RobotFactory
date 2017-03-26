Team membership:  DT (Captain) & JW (Member) & KT (Member) & AB (Member) & JD (Member)
Team conventions: Allman notation, markdown for changelog  

## *Version 2.1*

Release Date: 3/25/17

## New Components
    -   controllers
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
