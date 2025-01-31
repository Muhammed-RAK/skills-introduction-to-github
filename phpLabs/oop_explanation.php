
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP - Explanation</title>
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
    </style>
</head>
<body>

<h1>Object-Oriented Programming (OOP) in PHP</h1>
<p>Below is a detailed explanation of OOP concepts in PHP, along with code examples.</p>

<!-- Section 1: Classes and Objects -->
<h2>1. Classes and Objects</h2>
<p>
    A <strong>class</strong> is a blueprint for creating objects. An <strong>object</strong> is an instance of a class.
</p>
<pre><code>

class Car {
    public $brand;
    public $model;

    public function startEngine() {
        return &quot;Engine started!&quot;;
    }
}

$myCar = new Car();
$myCar-&gt;brand = &quot;Toyota&quot;;
$myCar-&gt;model = &quot;Corolla&quot;;
echo $myCar-&gt;startEngine(); // Output: Engine started!
</code></pre>

<!-- Section 2: Properties and Methods -->
<h2>2. Properties and Methods</h2>
<p>
    <strong>Properties</strong> are variables inside a class, and <strong>methods</strong> are functions inside a class.
</p>
<pre><code>

class Person {
    public $name;
    private $age;

    public function setAge($age) {
        $this-&gt;age = $age;
    }

    public function getAge() {
        return $this-&gt;age;
    }
}

$person = new Person();
$person-&gt;name = &quot;John&quot;;
$person-&gt;setAge(30);
echo $person-&gt;getAge(); // Output: 30
</code></pre>

<!-- Section 3: Access Modifiers -->
<h2>3. Access Modifiers</h2>
<p>
    Access modifiers control the visibility of properties and methods. They include <code>public</code>, <code>private</code>, and <code>protected</code>.
</p>
<pre><code>

class Example {
    public $publicVar = &quot;Public&quot;;
    private $privateVar = &quot;Private&quot;;
    protected $protectedVar = &quot;Protected&quot;;

    public function showPrivate() {
        return $this-&gt;privateVar;
    }
}

$example = new Example();
echo $example-&gt;publicVar; // Works
// echo $example-&gt;privateVar; // Error: Cannot access private property
echo $example-&gt;showPrivate(); // Output: Private
</code></pre>

<!-- Section 4: Constructor and Destructor -->
<h2>4. Constructor and Destructor</h2>
<p>
    The <strong>constructor</strong> (<code>__construct</code>) is called when an object is created, and the <strong>destructor</strong> (<code>__destruct</code>) is called when an object is destroyed.
</p>
<pre><code>

class Book {
    public $title;

    public function __construct($title) {
        $this-&gt;title = $title;
        echo &quot;Book created: $this-&gt;title\n&quot;;
    }

    public function __destruct() {
        echo &quot;Book destroyed: $this-&gt;title\n&quot;;
    }
}

$book = new Book(&quot;PHP OOP&quot;); // Output: Book created: PHP OOP
// Output (when script ends): Book destroyed: PHP OOP
</code></pre>

<!-- Add more sections as needed -->

</body>
</html>

