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

This project has been repourposed for COMP4711 Assignment1:
http://comp4711.jlparry.com/display/assignment/assignment1

Use cases:
Homepage(Kevin)
Your webapp homepage is meant to be a dashboard of sorts, and eventually the only page that a guest would able to see.
Data to show: # of parts on hand, # assembled bots, $ spent, #earned

Parts page(Johnny)
The parts page (for workers) should show all the parts currently on hand, ordered reasonably (piece type?) in a grid with images. Show the model & line as either a tooltip for the image, or underneath each.

Clicking on a part should show the complete data you have for that part, including CA, date made or acquired, etc. This would suit a subcontoller and secondary page for just one piece.

Assembly page(Dallas, Jimmy)
The assembly page (for supervisors) lets a user select the pieces that they would like combined to make a complete bot, the pieces that they consider unwanted and would like to return, or the assembled bot(s) that they would like to ship to head office.

This could be accommodated by presenting all the parts you have, with a checkbox beside each. The "returning" could then be handled by selecting all unwanted parts and clicking a "return to head office" button. Assembly could be affected by selected one of each type of part, and clicking a "build it" button.

You don't need functionality behind the two action buttons for this assignment, but the upcoming functionality will likely influence your layout.

History page(Alex)
The history page (for bosses) should show a list of your plant's history transactions. Plan for this list being sortable and paginated come assignment 2.

About page(Dallas)
Inform the user that this is an academic project, and not related to, or endorsed by, any similar business from the real world.

