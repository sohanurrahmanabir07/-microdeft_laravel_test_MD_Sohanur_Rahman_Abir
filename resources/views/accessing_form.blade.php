<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Insert Asset</h1>
    <form action={{route('asset')}} method="POST">

        <input type="text" name="name" id="">
        <input type="text" name="name" id="">
        <select value="">
            <option name="Mouse" id="">Mouse</option>
            <option name="Keyboard" id="">Mouse</option>
            <option name="Monitor" id="">Monitor</option>
            <option name="CPU" id="">CPU</option>
            <option name="Water Bottle" id="">Water Bottle</option>
            <option name="Tissue paper" id="">Tissue paper</option>
        </select>
        <button>submmit</button>
    </form>
    <h1>Insert Requisition </h1>
    <form action={{route('requisition')}} method="POST">
        <input type="text" name="name" id="">
        <input type="text" name="email" id="">
        <input type="text" name="phone" id="">
        <input type="integer" name="asset_id" id="">
        <input type="text" name="designation" id="">

        <button>Submit</button>

    </form>

</body>
</html>