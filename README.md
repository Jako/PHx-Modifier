PHx modifier
================================================================================

A small collection of PHx Modifiers for MODX Evolution


Installation:
================================================================================
Copy the files into `assets/plugins/phx/modifiers` (if the PHx Plugin is 
installed) or insert them as snippet named 'phx:filename' (without '.phx.php') 
in the MODx backend.


Usage:
================================================================================

Modifier | Description
-------- | -----------
ago | Returns a pretty date format in seconds, minutes, weeks or months ago. Takes in unixtime.
aliasid | Returns id from a given alias (should be unique) or a default value. Returns the first id for duplicate aliases.
cdata | Surround not empty string with cdata tag. closing tag has to be replaced by a plugin – otherwise it is detected as closing snippet tag and will be removed by PHx.
countlist | counts the members of a comma separated list.
date_ger | Returns german formatted date.
daterange | Returns daterange by removing equal days and months (and years – by showing only the start date). Takes in two unixtime numbers separated by `-`.
default | Returns a default value if a string is empty.
docfield | Returns a document field (defaults to pagetitle) of a given docid.
doclevel | Returns the doclevel of a given docid.
elsec | Returns the content of a chunk if a phx expression is false – Since PHx surpresses only the output of the then/else branch this modifier could solve issues caused by this behaviour.
elsef | Returns the content of a file if a phx expression is false – Since PHx surpresses only the output of the then/else branch this modifier could solve issues caused by this behaviour.
elses | Returns the result of a snippet call if a phx expression is true – Since PHx surpresses only the output of the then/else branch this modifier could solve issues caused by this behaviour.
fileexists | **(conditional)** Will be set to true if the file exists
firstchild | Returns the id of the first child of a resource with a specified level.
haschilds | **(conditional)** Will be set to true if the id has childs.
hasfirstchild | **(conditional)**  Will be set to true if the id has firstchild with a specified level.
hyperlink | Surrounds not empty string by an a tag.
inlist | **(conditional)** Will be set to true if the string is a members of a comma separated list.
ismanager | **(conditional)** Will be set to true if user is logged into manager.
isnumeric | **(conditional)** Will be set to true if the string is numeric.
isnotnumeric | **(conditional)** Will be set to true if the string is not numeric.
iteration  | Iteration counter for PHx for snippets that have not an iteration counter.
jsonencode | Returns the JSON representation of the string. Outer quotes could be removed by option.
longOptionValue | Retreives the 'long' leftside option value for a select/checkbox/radio template variable.
notinlist | **(conditional)** Will be set to true if the string is not a members of a comma separated list.
multi_and | **(conditional)** Will be set to true if all values in a comma separated list are true (not eqal 0 or empty string).
multi_or | **(conditional)** Will be set to true if one value in a comma separated list is true (not eqal 0 or empty string).
number_format | number format a string.
outer | Surround not empty string with text.
preg_replace | preg_replace a string.
str_replace | Replaces a string by another string.
striphtml | Strip html tags (but no MODX tags).
strptime | Parses a string into unixtime with a format string.
strtotime | Strtotime a string into unixtime.
substr | Returns a substring of a string.
switch | Switch for PHx. The internal select modifier of PHx does not provide a default option.
switchc | Switch chunks for PHx. PHx could only surpress the output of the chunk/snippet call. With this modifier chunks for not valid values are even not evaluated. The internal select modifier of PHx does not provide a default option.
thenc | Returns the content of a chunk if a phx expression is true – Since PHx surpresses only the output of the then/else branch this modifier could solve issues caused by this behaviour.
thenf | Returns the content of a file if a phx expression is true – Since PHx surpresses only the output of the then/else branch this modifier could solve issues caused by this behaviour.
thens | Returns the content of a snippet call if a phx expression is true – Since PHx surpresses only the output of the then/else branch this modifier could solve issues caused by this behaviour.
trim | Trims a string. Stripped characters could be specified in the options of the modifier

A sample usage string and extended description (if nessesary) could be found in the first lines of the code of each modifier file.

Conditional modifier have to be used with then/else.