<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    >
    <title>Secret Santa</title>
</head>
<body>

<div id="app">
    <main>
        <h1>Тайный Санта</h1>
        <santa-table></santa-table>
        <santa-form></santa-form>
    </main>
</div>

<script src="./js/app.js"></script>
<style scoped>
    main {
        padding: 32px;
    }
</style>
</body>
</html>
