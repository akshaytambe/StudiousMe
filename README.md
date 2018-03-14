# Studious Me - An Online Library Management System
![Website Logo](https://s3.amazonaws.com/github-resources-apt/Logo.png)
The project titled Online Library Management System is Library management system for monitoring and controlling the transactions in a library .The project “Online Library Management System” is developed in HTML, CSS, JAVASCRIPT & PHP, which mainly focuses on basic operations in a library like adding new member, new books, and updating new information, searching books and members and facility to borrow and return books.

My website is easy to use for both beginners and advanced users. It features a familiar and well thought-out, an attractive user interface, combined with strong searching insertion and reporting capabilities. The report generation facility of library system helps to get a good idea of which are the books borrowed or returned by the members.

The website is designed keeping the “MINIMALISTIC DESIGN” in mind, such that the interface is like” “METRO UI / MODERN UI” used in latest version of Microsoft Windows. The website is not only for college students in VIT college but also for all users who are from MUMBAI UNIVERSITY, as the website also features extra features like providing all study materials required for preparation of various exams and that too free of cost.

The Website - STUDIOUS ME has four main modules:
* Insertion to Database Module - User friendly input screen
* Extracting from Database module - Attractive Output Screen 
* Report Generation module - borrowed book list & Available book list 
* Search Facility system - search for books and members 

The Website - STUDIOUS ME also features free study resources:
* MUMBAI UNIVERSITY SYLLABUS AND PAPERS
* EBOOKS
* FREE ONLINE TEST

The Website has following facilities:
#### User :
-	Can Issue Books
-	Can Download Various Study Materials
#### Librarian:
-	Can Add/Remove Books
-	Can Remove Users
-	Can Collect Fine
-	Can Receive Books
#### Admin :
-	Can read and write information about any user  or librarian.
-	Can read and write information about any book.

#### FRONTEND PLATFORM : HTML, CSS, JavaScript
#### BACKEND PLATFORM : PHP

## Problem Statement
The database will be designed using PHP and WAMP SERVER and implemented as required including all the features mentioned, both hardware and software.

Will make use of the  HTML, CSS & JAVASCRIPTS languages and MPDF software. Also will make use of the online references available for developing programs in HTML and the scripting languages like, JavaScript.

#### CONSTRAINTS:
- The information of all the users must be stored in a database that is accessible by the Online Library System. 
- The university information security system must be compatible with the Internet applications.
- The Online Library System is connected to the university computer and is running all 24 hours a day. 
- The users access the Online Library System from any computer that has Internet browsing capabilities and an Internet connection. 
- The billing system is connected to the Online Library System and the database used by the billing system must be compatible with the interface of the Online Library System. 
- The users must have their correct usernames and passwords to enter into the Online Library System.

#### ASSUMPTIONS & DEPENDENCIES:
- Users have sufficient knowledge of computers.
- User is assumed to have basic knowledge of using Java.
- User must be completely familiar with the database.
- The Campus computer should have Internet connection and Internet server capabilities.
- Users know the English language, as the user interface will be provided in English.

## State Transition Diagram of the Website
![State Transition Diagram](https://s3.amazonaws.com/github-resources-apt/SM_FlowChart.png)

## Functionality
The Online Library System provides online real time information about the books available in the Library and the user information. The Product functions are more or less the same as described in the product perspective. 
The functions of the system include the system providing different type of services based on the type of users (Member/Librarian). 

* The member should be provided with the updated information about the books catalogue.
hold good.
* The member is given a provision to check his account information and change the account information any time in the given valid period.
* The members are provided with the books available roster and allowed to choose the books, which they want to use in the coming up days.
* The librarian can get the information about the members who have borrowed or returned the books.
* The librarian is provided with interfaces to add/delete the books available in the book catalogue. 
* The members when complete the book borrowing or returning process, the due to be paid by the member must be calculated and the information about the member and the due amount is sent to the university billing system.
* The system uses the University information security requirements to provide the login facility to the users.

## Modules
* Books: Admin has the authority to add, delete or modify the details of the book available to/from the system.
* Library Registration: The first procedure is the registration of the people who arrive to the library. The receptionist has the authority to enter the name, address and contact number of the people who visit the library along with the name of the book they want to read.
* Borrow books: A person can also borrow the book for particular days. All the information will be entered in the system. If the person doesn't return the book before the due date, a fine will be added and the information will be sent to that particular person about the fine.
* Login registration: Admin also has the authority to provide username and password for the librarian.
* Receipts: The E-Receipt of books to be issued is generated automatically as soon user issues a book.
* Study Resources: The Extra facility for students in form of free downloads like 'MUMBAI UNIVERSITY' Syllabus and previous question papers, EBooks and Free Online Tests.

## Website Previews
### INTRO PAGE
![Intro](https://s3.amazonaws.com/github-resources-apt/SM_Intro.png)

### REGISTRATION PAGE
![Register](https://s3.amazonaws.com/github-resources-apt/SM_Register.png)

### STUDENT - LOGIN PAGE
![User Login](https://s3.amazonaws.com/github-resources-apt/SM_User_Login.png)

### STUDENT LANDING HOMEPAGE
![StudentLanding](https://s3.amazonaws.com/github-resources-apt/SM_landing.png)

### STUDENT - VIEW BOOKS PAGE
![ViewBooks](https://s3.amazonaws.com/github-resources-apt/SM_ViewBooks.png)

### STUDENT - MY ISSUE STATUS BOOKS PAGE
![StudentIssueStatus](https://s3.amazonaws.com/github-resources-apt/SM_Issue.png)

### STUDENT - PROFILE PAGE
![StudentProfile](https://s3.amazonaws.com/github-resources-apt/SM_Profile.png)

### ADMIN - LOGIN PAGE
![AdLogin](https://s3.amazonaws.com/github-resources-apt/SM_Login.png)

### ADMIN - HOMEPAGE
![AdHome](https://s3.amazonaws.com/github-resources-apt/SM_Admin.png)

### ADMIN -  BOOK DATABASE PAGE
![AdBookDB](https://s3.amazonaws.com/github-resources-apt/SM_Book_Database.png)

### ADMIN -  ADD NEW BOOK PAGE
![AdNewBook](https://s3.amazonaws.com/github-resources-apt/SM_Add_Book.png)

### ADMIN - ISSUE BOOK PAGE
![AdIssue](https://s3.amazonaws.com/github-resources-apt/SM_Issue_Admin.png)

### ADMIN - RETURN BOOK PAGE
![AdReturnBook](https://s3.amazonaws.com/github-resources-apt/SM_Return_Book_Admin.png)

### ADMIN - MEMBER DATABASE PAGE
![AdMemberDB](https://s3.amazonaws.com/github-resources-apt/SM_Admin_DB.png)

### GUEST HOMEPAGE
![GuestLanding](https://s3.amazonaws.com/github-resources-apt/SM_Guest_Landing.png)

### STUDY RESOURCES - SYLLABUS PAGE
![SRSP](https://s3.amazonaws.com/github-resources-apt/SM_syllabus.png)

### STUDY RESOURCES - EBOOKS PAGE
![Ebooks](https://s3.amazonaws.com/github-resources-apt/SM_Ebook_Sec.png)

### STUDY RESOURCES - FREE ONLINE TEST PAGE
![OnlineTest](https://s3.amazonaws.com/github-resources-apt/SM_Online_Test_Page.png)

## Database Design:
The general theme behind a database is to handle information as an integrated whole. A database is a collection of interrelated data stored with minimum redundancy to serve many users quickly and effectively. After designing input and output, the analyst must concentrate on database design or how data should be organized around user requirements. The general objective is to make information access, easy quick, inexpensive and flexible for other users. During database design the following objectives are concerned:-
- Controlled Redundancy
- Data independence
- Accurate and integrating
- More information at low cost
- Recovery from failure
- Privacy and security
- Performance
- Ease of learning and use

### LIBRARY DB
![LibDB](https://s3.amazonaws.com/github-resources-apt/SM_Lib_DB.png)

### ADMIN TABLE
![ADMIN TABLE](https://s3.amazonaws.com/github-resources-apt/SM_Admin_Tab.png)

### BOOK TABLE
![BookDB](https://s3.amazonaws.com/github-resources-apt/SM_Book_Table.png)

### ISSUE TABLE
![IssueTab](https://s3.amazonaws.com/github-resources-apt/SM_Issue_Tab.png)

### USER TABLE
![UserTab](https://s3.amazonaws.com/github-resources-apt/SM_User_Table.png)

## Benefits by using this Website:
- User friendly interface
- Fast access to database
- Less error
- More Storage Capacity
- Search facility
- Look and Feel Environment
- Quick transaction
- EXTRA feature of Study Resources
- E-Receipt Facility
- Cancellation Facility

## Extensibility: 
This system is extendable in ways that its original developers may not expect. The following principle enhances extensibility like hide data structure, avoid traversing multiple links or methods, avoid case statements on object type and distinguish public and private operations. 

## Reusability: 
Reusability is possible as and when require in this website. We can update it next version. Reusable software reduces design, coding and testing cost by amortizing effort over several designs. Reducing the amount of code also simplifies understanding, which increases the likelihood that the code is correct. We follow up both types of reusability: Sharing of newly written code within a project and reuse of previously written code on new projects.
