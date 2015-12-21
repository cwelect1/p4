## CSCI E-15 Dynmaic Web Applications Project P4
## Automation Reporting Tool (ART)

ART is a web based tool that allows users to view results from Automation test runs (currently Selenium WebDriver with TestNG). 

## GitHub Repo
https://github.com/cwelect1/p4

## Live Server
http://p4.corbettweinberg.me/

## Screencast Demonstration


## Sources
###Framework/CSS
 - Bootstrap 3.3.5
 - Laravel 5.1.
 - PHP 

## CSCI E-15 DWA - Goals (http://dwa15.com/Projects/P4)
 - Create a web application called Developer's Best Friend which includes:
    - a Lorem Ipsum Generator
    - a Random User Generator
 - Your landing page should include a description of your app with either links to the two tools, or with the two tools present on the page.
 - The tools should be powered by HTML forms where the user can specify:
    - how many paragraphs they want
    - how many users they want
    - etc...

## Above and Beyond.
 - Used Bootstrap 3 and came up with nice clean look and feel.
 - Added several options to Lorem Ipsum and User Gen pages including:
  - Choice of output format (table vs List)
  - Choice of the type of Lorem Ipsum to output (Sentence, Paragraph, and Words)
 - I ran out of time to add validation, but that's next (after grading).

## Known Bugs
  - Validation not implemented.
    - Heading appears (with no results) when no value entered for Number of/Quantity.
  - Can't see last row of result data (footer overlaps it)
  - Background image stetches as results grow (10 results = no stretch...15+ starts to stretch)
  - Large datasets timeout and crash. Not limiting quantity at this time.