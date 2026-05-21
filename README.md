# 🐘 Task S1.04. OOP 1 — Level 1

Introduction to Object-Oriented Programming in PHP: classes, objects, inheritance and file inclusion.

---

## 📄 Description

This project introduces the fundamentals of Object-Oriented Programming in PHP. The exercises cover class and object creation, instance methods, inheritance between classes, and the use of PHP file inclusion statements to organise code across multiple files.

---

## 🎯 Learning objectives

- Create and use classes and objects in PHP
- Define attributes and methods within a class
- Apply inheritance and composition as relationship mechanisms between classes and objects
- Use file inclusion statements: `require`, `require_once`, `include` and `include_once`

---

## 🛠 Technologies

- **PHP 8+**

---

## 📁 Project structure

```
S1.04. POO 1 Nivell 1/
├── exercici1/
│   ├── Employee.php
│   └── index.php
├── exercici2/
│   ├── Shape.php
│   ├── Triangle.php
│   ├── Rectangle.php
│   └── index.php
└── README.md
```

---

## 📝 Exercises summary

| Exercise | Description |
|----------|-------------|
| **Exercise 1** | `Employee` class with `name` and `salary` attributes; method to set them and a method that prints whether the employee must pay taxes (salary above 6000) |
| **Exercise 2** | `Shape` base class with `width` and `height`; two subclasses `Triangle` and `Rectangle` that inherit from `Shape` and each calculate their own area |

---

## 🚀 How to run the project

1. Clone the repository:
   ```bashgit
   git clone https://github.com/AlexMartG/TascaS1.04.git
   ```

2. Make sure you have PHP installed:
   ```bash
   php --version
   ```

3. Navigate into an exercise folder and run it:
   ```bash
   cd "S1.04. POO 1 Nivell 1/exercici1"
   php index.php
   ```

---

## ⚠️ Challenges faced

- Understanding the difference between class attributes and method parameters, and when to use each (Exercise 1).
- Correctly implementing inheritance so subclasses reuse the parent constructor while defining their own `area()` method (Exercise 2).
- Choosing between `require`, `require_once`, `include` and `include_once` depending on whether the file is critical and whether it may be loaded more than once.

---

## ✅ Best practices applied

- Each exercise isolated in its own folder
- Classes split into separate files and loaded with `require_once`
- Clear separation between parent and child class responsibilities
- Methods named descriptively to reflect their behaviour
