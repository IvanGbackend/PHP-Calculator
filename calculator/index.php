
<?
   if (!isset($_GET["num1"]) || !isset($_GET["num2"]) || !isset($_GET["operation"])) {
    echo "Error: Missing parameters";
    exit;
    }

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operation = $_GET["operation"];

    switch ($operation) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            echo $num1 / $num2;
            break;
        default:
            echo "Invalid operation";
            break;
    }
  
