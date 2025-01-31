<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP - Complete Explanation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        pre {
            background: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow-x: auto;
        }
        code {
            color: #d63384;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Object-Oriented Programming (OOP) in PHP</h1>
<p>Below is a detailed explanation of all major OOP concepts in PHP. Click on the links to view the corresponding code files.</p>

<!-- Section 1: Classes and Objects -->
<h2>1. Classes and Objects</h2>
<p>
    A <strong>class</strong> is a blueprint for creating objects. An <strong>object</strong> is an instance of a class.
</p>
<p><a href="classes_and_objects.php" target="_blank">View Code</a></p>

<!-- Section 2: Properties and Methods -->
<h2>2. Properties and Methods</h2>
<p>
    <strong>Properties</strong> are variables inside a class, and <strong>methods</strong> are functions inside a class.
</p>
<p><a href="properties_and_methods.php" target="_blank">View Code</a></p>

<!-- Section 3: Access Modifiers -->
<h2>3. Access Modifiers</h2>
<p>
    Access modifiers control the visibility of properties and methods. They include <code>public</code>, <code>private</code>, and <code>protected</code>.
</p>
<p><a href="access_modifiers.php" target="_blank">View Code</a></p>

<!-- Section 4: Constructor and Destructor -->
<h2>4. Constructor and Destructor</h2>
<p>
    The <strong>constructor</strong> (<code>__construct</code>) is called when an object is created, and the <strong>destructor</strong> (<code>__destruct</code>) is called when an object is destroyed.
</p>
<p><a href="constructor_destructor.php" target="_blank">View Code</a></p>

<!-- Section 5: Inheritance -->
<h2>5. Inheritance</h2>
<p>
    A class can inherit properties and methods from another class using the <code>extends</code> keyword.
</p>
<p><a href="inheritance.php" target="_blank">View Code</a></p>

<!-- Section 6: Method Overriding -->
<h2>6. Method Overriding</h2>
<p>
    A subclass can override a method from its parent class to provide a specific implementation.
</p>
<p><a href="method_overriding.php" target="_blank">View Code</a></p>

<!-- Section 7: Static Properties and Methods -->
<h2>7. Static Properties and Methods</h2>
<p>
    Static properties and methods belong to the class itself, not an instance of the class. They are accessed using the <code>::</code> operator.
</p>
<p><a href="static_properties_methods.php" target="_blank">View Code</a></p>

<!-- Section 8: Encapsulation -->
<h2>8. Encapsulation</h2>
<p>
    Encapsulation is the bundling of data (properties) and methods that operate on the data into a single unit (class). It is achieved using access modifiers.
</p>
<p><a href="encapsulation.php" target="_blank">View Code</a></p>

<!-- Section 9: Abstraction -->
<h2>9. Abstraction</h2>
<p>
    Abstraction is the concept of hiding complex implementation details and showing only essential features. It is achieved using <strong>abstract classes</strong> and <strong>interfaces</strong>.
</p>
<p><a href="abstraction.php" target="_blank">View Code</a></p>

<!-- Section 10: Polymorphism -->
<h2>10. Polymorphism</h2>
<p>
    Polymorphism allows objects of different classes to be treated as objects of a common superclass. It is achieved through method overriding and interfaces.
</p>
<p><a href="polymorphism.php" target="_blank">View Code</a></p>

<!-- Section 11: Traits -->
<h2>11. Traits</h2>
<p>
    Traits are a mechanism for code reuse in single inheritance languages like PHP. They are included in a class using the <code>use</code> keyword.
</p>
<p><a href="traits.php" target="_blank">View Code</a></p>

<!-- Section 12: Magic Methods -->
<h2>12. Magic Methods</h2>
<p>
    Magic methods are special methods that start with <code>__</code> (double underscore). Examples include <code>__construct</code>, <code>__destruct</code>, <code>__get</code>, <code>__set</code>, etc.
</p>
<p><a href="magic_methods.php" target="_blank">View Code</a></p>

<!-- Section 13: Namespaces -->
<h2>13. Namespaces</h2>
<p>
    Namespaces are used to organize code and avoid naming conflicts. They are declared using the <code>namespace</code> keyword.
</p>
<p><a href="namespaces.php" target="_blank">View Code</a></p>

<!-- Section 14: Autoloading Classes -->
<h2>14. Autoloading Classes</h2>
<p>
    Autoloading automatically loads classes without manually including files. It is achieved using <code>spl_autoload_register</code>.
</p>
<p><a href="autoloading.php" target="_blank">View Code</a></p>

<!-- Section 15: Type Hinting and Return Types -->
<h2>15. Type Hinting and Return Types</h2>
<p>
    Type hinting enforces data types for function parameters, and return types specify the type of value a function will return.
</p>
<p><a href="type_hinting.php" target="_blank">View Code</a></p>

<!-- Section 16: Final Keyword -->
<h2>16. Final Keyword</h2>
<p>
    The <code>final</code> keyword prevents a class from being inherited or a method from being overridden.
</p>
<p><a href="final_keyword.php" target="_blank">View Code</a></p>

<!-- Section 17: Object Cloning -->
<h2>17. Object Cloning</h2>
<p>
    Object cloning creates a copy of an object using the <code>clone</code> keyword.
</p>
<p><a href="object_cloning.php" target="_blank">View Code</a></p>

</body>
</html>