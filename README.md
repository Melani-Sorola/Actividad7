# Robotics School Project

## Project Description
This project is a simple Laravel application to manage robotics courses, kits, users, and groups. 
It demonstrates basic CRUD operations, database seeding, and relationships between models.

## Database Structure (ER Diagram)
- Users: id, name, email, password, role
- RoboticsKits: id, name
- Courses: id, course_key, title, cover, content, robotics_kit_id
- Groups: id, name
- group_course: group_id, course_id (pivot table)

Relationships:
- Users can be admin, teacher, or student
- Courses belong to a RoboticsKit
- Courses can belong to multiple groups (many-to-many)

## Seeded Data
- Users:
  - Admon (admin)
  - Tecmilenio (teacher)
  - Student (student)
- Robotics Kits:
  - StarterKit
  - Educational Robotics Kit
  - Kit5
- Courses: 100 fake courses generated using FakerPHP