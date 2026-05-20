# 🐘 Task S1.04. OOP 1 — Level 1

Introduction to Object-Oriented Programming in PHP: classes, objects and inheritance.

---

## 📄 Description

This project introduces the fundamentals of Object-Oriented Programming in PHP. The exercises cover class and object creation, instance methods, and inheritance between classes through a practical approach.

---

## 🎯 Learning objectives

- Create and use classes and objects in PHP
- Define attributes and methods within a class
- Apply inheritance and composition as relationship mechanisms between classes and objects

---

## 🛠 Technologies

- **PHP 8+**

---

## 📁 Project structure

```
├── exercise1.php
├── exercise2.php
└── README.md
```

---

## 📝 Exercises summary

| Exercise | Description |
|----------|-------------|
| **Exercise 1** | `Employee` class with `name` and `salary` attributes; method to set them and a method that prints whether the employee must pay taxes (salary above 6000) |
| **Exercise 2** | `Shape` base class with `width` and `height`; two subclasses `Triangle` and `Rectangle` that inherit from `Shape` and each calculate their area |

---

## 🚀 How to run the project

1. Clone the repository:
   ```bash
   git clone https://github.com/AlexMartG/TascaS1.04.git
   ```

2. Make sure you have PHP installed:
   ```bash
   php --version
   ```

3. Run any exercise from the terminal:
   ```bash
   php exercise1.php
   ```

---

## ⚠️ Challenges faced

- Understanding the difference between class attributes and method parameters, and when to use each (Exercise 1).
- Correctly implementing inheritance so subclasses reuse the parent constructor while defining their own `area()` method (Exercise 2).

---

## ✅ Best practices applied

- Each exercise isolated in its own file
- Clear separation between parent and child class responsibilities
- Methods named descriptively to reflect their behaviour
