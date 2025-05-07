# School Management SaaS 
This is a School Management System (SMS) that is built using Laravel 12.0. This concept was first created on Github in 7th May 2025 by yours truly, Obed Nyakundi Paul. And it is for the love of our Kenyan children, our schools, our communities, and for the future of our country.

> "...In honor of God; for the service of godlike men."

## Why SMS? And why SaaS? And why Laravel? And why Open Source?
I believe in shared success. 
I believe in honesty.
I believe in integrity.
I believe in transparency. 
I believe in the power of technology to transform our world. This is my first attempt to build a SaaS application that will help schools manage their operations more efficiently, and cheaply.

My desire to document and invite collaboration is to make this application accessible to as many people as possible. So that we can be evaluated, critiqued, and improved by people of like mind. By making it open, we allow others to put our code to the test, and suggest improvements.

This application structure and features was conceptualized after the huge feedback I received from the School Fees Management application and the older imperative app I had posted in 2019.

**1. Why SMS?**
- Becauce I am interested in education and school management.

**2. Why SaaS?**
- Because if one volunteers to host, he/she can share with others the resources or sale at a cheaper price.

**3. Why Laravel?**
- Because it is a powerful and flexible framework that is easy to learn and use. Also has a wide support community.

**4. Why Open Source?**
- Because I believe in shared success, honesty, integrity, transparency, and the power of technology to transform our world.

# how to Install.

# Database architecture.
## Objects / Tables
- Schools.
- Academic Years.
- Terms / Sessions.
- Curriculum.
- Clusters / Groupings.
- Subjects.
- Classes.
- Streams.
- Teachers.
- Parents / Guardians.
- Students.
- Grading schemes.
- Exams.
- Fees Structures.
- Fees.
- Fee Payments.
- Ledgers.

## Relationships

- a school has many academic years.
- an academic year belongs to a school.
- an academic year has many terms / sessions.
- a term / session belongs to an academic year.
- a school has many curriculum.
- a curriculum belongs to a school.
- a curriculum has many subject clusters / groupings.
- a subject cluster / grouping belongs to a curriculum.
- a subject cluster / grouping has many subjects.
- a subject belongs to a subject cluster / grouping.
- a school has many classes.
- a class belongs to a school.
- a class has many streams.
- a stream belongs to a class.
- a class has many teachers.
- a teacher belongs to a class.
- parents / guardians have many students.
- a student belongs to a parent / guardian.
- a student belongs to a stream.
- a stream has many students.

- a school has many grading schemes.
- a school has many exams.
- a school has many fees structures.
- a school has many fees.
- a school has many fee payments.
- a school has many ledgers.
- currencies

## Tables
 ### schools
 - name
 - description
 - address
 - phone
 - email
 - website
 - logo
 - banner
 - currency

 ### Academic_years
 - school_id
 - name
 - description
 - start_date
 - end_date
 - status
 
 ### Terms / Sessions
 - academic_year_id
 - name
 - description
 - start_date
 - end_date
 - status
 
 ### Curriculum
 - school_id
 - name
 - description
 - status
 
 ### Subject_clusters / Groupings
 - curriculum_id
 - name
 - description
 - status
 
 ### Subjects
 - subject_cluster_id
 - name
 - description
 
 ### Classes
 - school_id
 - name
 - description
 
 ### Streams
 - class_id
 - name
 - description

 ### Stream_subject_specializations
 - stream_id
 - subject_id
 
 ### Teachers
 - class_id
 - name
 - phone_number
 - email
 - address
 - description
 - subject_specialization
 - status
 
 ### Parents / Guardians
 - student_id
 - name
 - phone_number
 - email
 - address
 
 ### Students
 - stream_id
 - name
 - gender
 - date_of_birth
 - status
 
 ### Grading_schemes
 - school_id
 - name
 - max_score
 - min_score
 - description
 
 ### Exams
 - school_id
 - name
 - description
 - status

 ### Exam_scores
 - exam_id
 - student_id
 - subject_id
 - score
 - description
 - status
 
 ### Fees_structures
 - school_id
 - class_id
 - term_id
 - amount
 - description
 - status

 > To be continued tomorrow.
 
 ### Fees
 - fee_structure_id
 - name
 - description
 - status
 
 ### Fee_payments
 - fee_id
 - name
 - description
 - status
 
 ### Ledgers
 - school_id
 - name
 - description
 - status
 
 ### Currencies
 - name
 - description
 - status
 
 

