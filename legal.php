<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: Courier New, arial, helvetica, sans-serif;
            background-color: white;
            color: black;
        }

        body p {
            text-align: left;
            text-indent: 7ex;
        }

        div.sticky {
            position: sticky;
            top: 0;
            padding: 5px;
            color: aqua;
            background-color: black;
            border: 2px solid aqua;
        }

        /* unvisited link */
        a:link {
            color: black;
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            color: black;
            text-decoration: none;
        }

        /* mouse over link */
        a:hover {
            color: black;
            text-decoration: none;
        }

        /* selected link */
        a:active {
            color: black;
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="icon.png" />
    <link rel="apple-touch-icon" sizes="128x128" href="high_def_icon.png" />
    <link href="" rel="stylesheet" />
    <title>Cooler Math | Legal</title>
</head>

<body>
    <div class="sticky" style="text-align: center">😎Cooler Math Games🤔<div style="text-align: right"><a
                href="login.php">Account |
                <?php echo $user_data['user_name']; ?>
            </a></div>
    </div>
    <h1>
        My
        <a href="https://github.com/Trebo04/Cooler_Math" target="_blank"><span style="cursor: text">code</span></a>
        is my
        <a href="https://github.com/Trebo04/Cooler_Math" target="_blank"><span style="cursor: text">code</span></a>
        , which means the
        <a href="https://github.com/Trebo04/Cooler_Math" target="_blank"><span style="cursor: text">code</span></a>
        is mine, but if you want to borrow some, I'll allow it.
    </h1>
    <hr />
    <br />
    <h1>More legal stuff :D</h1>
    <p style="text-indent: 0ex; text-align: center">TEXAS STATUTE</p>
    <p style="text-indent: 0ex; text-align: center">CIVIL PRACTICE AND REMEDIES CODE</p>
    <p style="text-indent: 0ex; text-align: center">
        TITLE 6. MISCELLANEOUS PROVISIONS
    </p>
    <p style="text-indent: 0ex; text-align: center">
        CHAPTER 143. HARMFUL ACCESS BY COMPUTER
    </p>
    <p>
        Sec. 143.001. CAUSE OF ACTION. (a) A person who is injured or whose property has been injured as a result of a
        violation under Chapter 33, Penal Code, has a civil cause of action if the conduct constituting the violation
        was committed knowingly or intentionally.
    </p>
    <p>
        (b) A person must bring suit for damages under this section before the earlier of the fifth anniversary of the
        date of the last act in the course of the conduct constituting a violation under Chapter 33, Penal Code, or the
        second anniversary of the date the claimant first discovered or had reasonable opportunity to discover the
        violation.
    </p>
    <p style="text-indent: 0ex">
        Added by Acts 1989, 71st Leg., ch. 306, Sec. 5, eff. Sept. 1, 1989.
    </p>
    <br>
    <p>
        Sec. 143.002. DAMAGES. A person who establishes a cause of action under this chapter is entitled to:
    </p>
    <p style="text-indent: 13ex">
        (1) actual damages; and
    </p>
    <p style="text-indent: 13ex">
        (2) reasonable attorney's fees and costs.
    </p>
    <p style="text-indent: 0ex">
        Added by Acts 1989, 71st Leg., ch. 306, Sec. 5, eff. Sept. 1, 1989.
    </p>
    <hr />
    <h1 style="text-align: center">
        <a style="color: aqua" href="home.php">return home</a>
    </h1>
</body>

</html>