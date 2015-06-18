# wHelper

#Install

	Configure DB with username and password on /application/config/database.php lines 52 and 53

	Import to DB wHelper.sql

#Use
	http://xxx/whelper/public_html/

#Getting Data in JSON format
	First, Login. Make POST with "user" and "pass" http://xxx/whelper/public_html/front
		
	Second, Get full data: http://xxx/whelper/public_html/panel/get/0/json

	/get/0/json (0 get all data. 1 get only childrens of parent 1 etc.)
