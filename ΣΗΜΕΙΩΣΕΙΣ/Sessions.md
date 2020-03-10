# Sessions

## What is a PHP Session?

When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one application.


## Start a PHP Session

A session is started with the `session_start()` function.

Session variables are set with the PHP global variable: `$_SESSION`.

Now, let's create a new page called `demo_session1.php`. In this page, we start a new PHP session and set some session variables:

```php
<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
?>
```

*Note:* The session_start() function must be the very first thing in your document. Before any HTML tags.

## Get PHP Session Variable Values

Next, we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").

Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).

Also notice that all session variable values are stored in the global $_SESSION variable:

```php
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html> 
```

## Modify a PHP Session Variable

To change a session variable, just overwrite it:

```php
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<body>

<?php
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
?>

</body>
</html> 
```

## Destroy a PHP Session

To remove all global session variables and destroy the session, use session_unset() and session_destroy():

```php
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<body>

<?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
?>

</body>
</html> 
```

