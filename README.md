Requirement:
Need install wampServer, link: https://sourceforge.net/projects/wampserver/

SQL for the mySQL:
- name database: countryDB
- table name: countryDB_table
- number column: 4 (according to the csv)

fill the table, dataype:
~ Name: country
Type : VARCHAR
Length/Values : 300(long name of a country)
index: PRIMARY

~ Name: capital
Type : VARCHAR
Length/Values : 300

~ Name: miles
Type : INT
Length/Values : 4

~ Name: km
Type : INT
Length/Values :

Storage Engine: InoDB
__________________________________________________________________________________________________
IMPORT THE CSV FILE, skip 2 line, Formal: CSV using LOAD DATA
fill that form:
Columns separated with:
,
Columns enclosed with:
"
Columns escaped with:
Lines terminated with:
\n
Column names:

OUTPUT:
LOAD DATA INFILE 'C:\\wamp64\\tmp\\php790E.tmp' INTO TABLE `countrydb_table` FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 2 LINES;