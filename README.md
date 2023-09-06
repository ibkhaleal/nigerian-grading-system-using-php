# Nigerian Grading System Using PHP

![GitHub](https://img.shields.io/github/license/ibkhaleal/nigerian-grading-system-using-php)
![GitHub stars](https://img.shields.io/github/stars/ibkhaleal/nigerian-grading-system-using-php?style=social)

A simple PHP library for determining grades and remarks based on the Nigerian grading system.

## Overview

This PHP library provides a straightforward way to determine grades and remarks according to the Nigerian grading system. It's a useful tool for educators, students, and anyone dealing with grading and assessments in Nigeria.

## Features

- **Grade Determination**: Determine the grade (e.g., A, B, C) based on a numeric score.
- **Remark Generation**: Generate remarks corresponding to grades for personalized feedback.
- **Easy to Use**: Simple and intuitive functions to make grading and feedback easy.

## How to Use

1. Include the `grading.php` file in your PHP project.

2. Determine Grade:

   ```php
   $score = 75; // Your numeric score
   $grade = determineGrade($score);
``


## Grade Scale
- A (Excellent): 70 - 100
- B (Very Good): 60 - 69
- C (Good): 50 - 59
- D (Pass): 45 - 49
- F (Fail): 0 - 44

#### Examples
- `determineGrade(85)` returns `A (Excellent)`

#### Contribution
Contributions, bug reports, and feature requests are welcome! Feel free to create issues or pull requests to improve this library.

#### License
This project is licensed under the MIT License - see the LICENSE file for details.

