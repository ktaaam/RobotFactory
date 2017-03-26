This starter builds on [CodeIgniter3.1-starter2](https://github.com/jedi-academy/CodeIgniter3.1-starter2),
adding a Quotes model and tailoring the homepage view to suit this.

**controllers/Welcome.php** has been modified to provide a table of quotations,
and the view template has been modified to use Bootstrap.

The **application/config/autoload.php** configuration has been modified
to preload the template parser library, the url helper, and the Quotes model.

The **application/config/config.php** configuration has been modified
to specify menu navbar choices.

The **application/views** folder holds the master template, as well as some relevant view
fragments.

## Coding standards:
Javascript(JQuery)
CSS(Bootstrap)
pHp 7.1.1

This project has been repurposed for COMP4711 Assignment1:
http://comp4711.jlparry.com/display/assignment/assignment1

## **Use cases:**
## Homepage(Kevin)
Your webapp homepage is meant to be a dashboard of sorts, and eventually the only page that a guest would able to see.
Data to show: # of parts on hand, # assembled bots, $ spent, #earned

## Parts page(Johnny)
The parts page (for workers) should show all the parts currently on hand, ordered reasonably (piece type?) in a grid with images. Show the model & line as either a tooltip for the image, or underneath each.

Clicking on a part should show the complete data you have for that part, including CA, date made or acquired, etc. This would suit a subcontoller and secondary page for just one piece.

## Assembly page(Dallas, Jimmy)
The assembly page (for supervisors) lets a user select the pieces that they would like combined to make a complete bot, the pieces that they consider unwanted and would like to return, or the assembled bot(s) that they would like to ship to head office.

This could be accommodated by presenting all the parts you have, with a checkbox beside each. The "returning" could then be handled by selecting all unwanted parts and clicking a "return to head office" button. Assembly could be affected by selected one of each type of part, and clicking a "build it" button.

You don't need functionality behind the two action buttons for this assignment, but the upcoming functionality will likely influence your layout.

## History page(Alex)
The history page (for bosses) should show a list of your plant's history transactions. Plan for this list being sortable and paginated come assignment 2.

## About page(Dallas)
Inform the user that this is an academic project, and not related to, or endorsed by, any similar business from the real world.

## ***Tasks part2:***

## **Homepage(kevin)**
Homepage was all hardcoded. Refactor the homepage so that the data is being pulled from the model by the controller.

## **Your Data(Jimmy)**
You have provided mock data for assignment 1. Put this into appropriate tables in a MySQL database for assignment 2.
It is up to you how you wish to track "history" - that could be one table, or it could be separate history tables for each kind of activity.
The "live" data to use will be retrieved from the Umbrella server, per directions that follow.
The SQL dump in your repository should be a known starting point, suitable for test data. The mock data from assignment 1 could be good for this.

## **User Roles(Dallas)**
I suggest a menu dropdown to switch between user roles, as with labs 5-7.
You do not need authentication for this assignment.

## **Parts page(Johnny, Jimmy, Kevin)**
Previous: The parts page (for the "Worker" role) should show all the parts currently on hand, ordered reasonably (piece type?) in a grid with images. Show the model & line as either a tooltip for the image, or underneath each.

Clicking on a part should show the complete data you have for that part, including CA, date made or acquired, etc. This would suit a subcontoller and secondary page for just one piece.

Add a "Build more parts" button or link to the page, which would be handled by:

request any newly built parts for this factory, from the Panda Research center's /api/build endpoint. That service will return an array of parts certificates, in JSON format
add each of these to your parts table
Update the appropriate history table(s)
Service being tested.
Add a "Buy parts" button or link to the page, which would be handled by:

request a box of random parts for you to use, from the Panda Research center's /api/box endpoint. That service will return an array of parts certificates, in JSON format
PRC will deduct the purchase price from your cash balance
add each of these to your parts table
Update the appropriate history table(s)

## **History page(Alex)**
Previous: The history page (for bosses) should show a list of your plant's history transactions.
This list should now be paginated. You can use 20/25 records per page, or provide for that being something the "Boss" can configure.
The history list should provide for flexible ordering, by date/time or by robot model. I suggest a dropdown for this, although links could work just as well.
The list should be filterable, by robot series or robot model. You could use a dropdown for these, or provide radio buttons or checkboxes to select the output. A dropdown would result in a "cleaner" UI.

## **Manage page(Dallas, Alex)**
This is for the "Boss" role :)
There are several features appropriate for this page, handled by tabs or perhaps by separate panels:

Provide a button or link to "Reboot" your plant. 
It should send a message to the Panda Research Center's /rebootme, and get an Ok response or a self-explanatory error message. On successful "reboot", empty your inventory & history - you are starting from scratch again, with the appropriate starting balance for a new plant.

Provide a mini-form for registering with the PRC. You will need your plant name, which can be saved as a configuration setting inside your app, and your secret token, which should not be stored anywhere inside your app or repo. Send a message to PRC's /registerme/team/token endpoint; it will return an appropriate message. Substitute your team name and token, of course.
This will establish a session on PRC. If yours closes, you will need to re-register.
If you use a control table to save key/value pairs for configuring or managing your app, provide a way to display/edit these. 
For instance, this could include settings that influence any AI you have for suggesting bots to build, or it could include the base URL for the PRC, to avoid hard-coding it.

Finally, here is where you can sell assembled bot to the PRC. 
Present a list of the ones you have built, with suitable links to sell them to the PRC one at a time, namely /buyme/part1/part2/part3, where parts 1 through 3 are the tokens for the three parts that make up your bot. 
The server will respond with Ok or Nak with a self-explanatory error message. 
If "Ok", you can remove the bot from your database. The PRC will automatically credit your account balance.