<!doctype html>
<html ng-app>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
<div>
    <label>Name:</label>
    <input type="text" ng-model="name" placeholder="Enter a name here">
    <hr>
    <h1>Hello {{name}}!</h1>
</div>
</body>