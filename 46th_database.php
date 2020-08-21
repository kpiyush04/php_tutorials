<?php
	/*DATA:--
		>>>>IN SIMEPLE WORDS DATA CAN BE FACTS RELATED TO ANY OBLJECT IN CONSIDERATION
		>>>>FOR WXAMOLE YOUR NAME, AGE, HEIGHT, WEIGHT, ETC ARE SOME DATA RELATED TO YOU
		>>>>A PICTURE, IMAGE, FILE, PDF, ETC CAN ALSO BE CONSIDERED DATA

	DATABASE:--
		>>>>>>DATABASE IS A SYSTEMATIC COLLECTION OF DATA. DATABASE SUPPORT STORAGE AND MANIPULATION OF DATA. DATABASE MAKE DATA MANAGEMENT EASY. LET'S DISCUSS FEW 		  EXAMPLES.
		>>>>>AN ONLINE TELEPHONE DIRECTORY WOULD DEFINITELY USE DATABASE TO STORE DTAA PERTAINING TO PEOPLE, PHONE NUMBERS, OTHERS COMNTACT DETAILS, ETC.
		>>>>>LET'S ALSO CONSIDER THE FACEBOOK. IT NEEDS TO STORE MANIPULATE AND PRESENT DATA RELATED TO MEMBERS, THEIR FRIENDS, MEMBERE ACTIVITIES, MESSAGE, 				 ADVERTISEMENT AND LOT MORE.

	DBMS:--
		>>>>>DATABASE MANAGEMENT SYSTEM (DBMS) IS COLLECTION OF PROGRAMS WHICH ENABLES ITS USERS TO ACCESS DATABASE, MANIPULATE DATA, REPORTING/REPRESENTION OF DATA.
		>>>>>UT ALSO HELPS TO CONTROL ACCESS TO THE DATABASE.
		>>>>>INTEGREATED DATA STORE (IDS) IS SAID TO BE THE FIRST DBMS IN HISTORY.

	TYPES OF DBMS:--
		>>>>THERE ARE 4 MAJOR TYPES OF DBMS:

			1) HIERARCHICAL:--  THIS TYPE OF DBMS EMPLOYS THE "PARENT-CHILD" RELATIONSHIP OF STORING DATA. THIS TYPE OF DBMS IS RARELY USED NOWADAYS. ITS STRUCTURE IS 						LIKE A TREE WITH NODES REPERSENTING RECORDS AND BRANCHES REPRESENTING  FIELDS.
				>>>>EXAMPLE:- 	THE WINDOWS REGISTRY IN WINDOWS XP IS AN EXAMPLE OF A HIERARCHICAL DATABSE. CONFIGURATION SETTINGS ARE STORED AS TREE 									  STRUCTURES WITH NODES.
			
			2) NETWORK DBMS:--  THIS TYPE OF DBMS SUPPORTS MANY-TO-MANY RELATIONS. THIS USUALLY RESULTS IN COMPLEX DATABASE STRUCTURES.

				>>>>EXMAPLE- RDM SERVER IS AN EXAMPLE OF A DATABASE MANGAEMENT SYSTEM THAT IMPLEMENTS THE NETWORK MODEL.

			3) RELATIONAL DBMS:-- THIS TYPE OF DBMS DEFINES RELATIONSHIP IN FORMS OF TABLES, ALSO KNOWN AS RELATIONS.
								  UNLIKE NETWORKS DBMS, RDBMS DOES NOT SUPPROT MANT-TO-MANY RELATIONSHIPS.
								  RELATIONAL DBMS USUALLY HAVE PRE-DEFINED DATA TYPES THAT THEY CAN SUPPORT. THIS IS THE MOST POPULAR DBMS TYPE IN THE MARKET.
				>>>>EXAMPLE:--    MYSQL, ORACLE, MICROSOFT SQL SERVER DATABSE.

			4) OBJECT ORIENTED RELATION DBMS:-- THIS TYPE SUPPORTS STORAGE OF NEW DATA TYPES. THE DATA TO BE STORED IN FORM OF OBJECTS.
												THE OBEJCT TO BE STORED IN THE DATABASE HAVE ATTRIBUTES (i.e. GENDER, AGE) AND METHODS THAT DEFINES WHAT TO DO WITH THE DATA.
				>>>>EXAMPLE:--	PostgreSQL IS AN EXAMPLEOF OBJECT ORIENTED RELATIONAL DBMS.


	SQL INTRODUCTION:--
		>>>> STRUCTURED QUERY LANGUAGE (SQL) pronounced as "S-Q-L" OR SOMETIMES AS "SQL-QUEL" IS ACTUALLY THE STANDARD LANGUAGE FOR DEALING WITH THE RELATIONAL DATABSE.

	SQL STATEMENTS:--

	1)  DML:-- a) select
			   b) insert
			   c) delete

	2) DDL:--  a) create
			   b) alter
			   c) drop

	3)  DCL:-- a) GRANT
			   b) REVOKE

	4)  TCL:-- a) begain tran(transation)
			   c) commit tran(transation)
			   d) rollback
	
	Constraints:--
	     Constraints are the rules for the column in a table. Which are used to set or specify limitaion of data server in a data enter in a column. 
	     There are 3 basic constraints which are as follows:

	     >>>> Primary Key:--  Primary key cannot have a null value.
	     					  Each table can have only one primary key.
	     					  Primary key can be ralated to other tables as a foregin key.
	     					  Primary key supports Auto Increment Value.
							  we can't delete primary key value from parent table is used as a foreign key in child table. To delete we first need to delete that primary key value from the child table.

	     >>>> uUnique key:-- Unique constraints may have a null value.
	     					 Each table can have more than one Unique Constraint.
	     					 Unique Constraint cannot be related with another table's Foreign key.

	     >>>>foregin key:-- Foreign key is a field in the table that is Primary Key in another table.
	     					Foreign key can accept multiple null values.
	     					We can have more than one foreign key vlaue from the child table even though that refers to the primary key of the parent table.


?>