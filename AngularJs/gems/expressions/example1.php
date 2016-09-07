<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gems | Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap/dist/css/bootstrap.min.css" >
        <script src="../js/angular.min.js"></script>
        <script src="../js/expression.js"></script>
    </head>
    <body ng-app="expressionExample" >
        <div ng-controller="ExampleController as example" class="expressions">
            <p>{{example.first_name}}</p>
            <p>{{example.last_name}}</p>
            <p>{{example.expr}}</p>
            <input type="text" ng-model="first_name" >
            <input type="text" ng-model="last_name" >
            Expression:
            <input type='text' ng-model="expr" size="80"/>
            <button ng-click="addExp(expr)">Evaluate</button>
            <ul>
                <li ng-repeat="expr in exprs track by $index">
                    [ <a href="" ng-click="removeExp($index)">X</a> ]
                    <code>{{expr}}</code> => <span ng-bind="$parent.$eval(expr)"></span>
                </li>
            </ul>
        </div>
    </body>
</html>
