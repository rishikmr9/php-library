## Usage

### Download
Download the code and place it anywhere in your project.





### Create your component
Require the *Component* class in your component's file. Create a class for your component (e.g Card) that extends the *Component* class.

Define any dynamic values (e.g title) as properties of the class


```php
// myComponents/Card.php

require "php-library/component/Component.php";

class Card extends Component{
    public string $title;

    public function __construct($props): void{
        $this->title = $props["title"];
    }

}

```





### Define template/html
Below the *Card* class assign the $temp (template) property a function. Inside the function, break the php block and add your html/template. Use $this keyword to access properties (e.g title) and output their values.

This keeps your component's html seperate (at the end of the file)


```php
// myComponents/Card.php

<?php Card::$temp = function() { ?>

    <div class="card">
        <h2><?= $this->title ?></h2>
    </div>

<?php } ?>
```


This is what your complete card component's file (Card.php) will look like.


```php
// myComponents/Card.php
<?php
require "php-library/component/Component.php";

class Card extends Component{
    public string $title;

    public function __construct($props): void{
        $this->title = $props["title"];
    }

}

// html/template
Card::$temp = function() { ?>

    <div class="card">
        <h2><?= $this->title ?></h2>
    </div>

<?php }

```




### Render the template
Require your card component and create an object of the *Card* class and pass in any props that you defined in the class.

Finally to output the html/template, use render() method


```php
<?php

require "myComponents/Card.php";

$card = new Card(["title"=>"card title"]);

?>

<div>
    <?= $card->render(); ?>
</div>


```