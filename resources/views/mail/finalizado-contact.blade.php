<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dr. Pools</title>

    <style>
        h1{
            color: rgb(6, 35, 97);
            padding: 0px;
            margin: 0px;
        }
        strong{
            color: white;
        }
        a{
            color: white;
        }
        .espacio{
            background: rgb(6, 35, 97);
            color: white;
            width: 100%;
            height: auto;
            padding: 15px;
        }
        .titulo{
            text: rgb(6, 35, 97);
            size: 1.2rem;
            margin-bottom: 3px;
            text-decoration: underline;
        }
        .titulopro{
            text: rgb(6, 35, 97);
            size: 1.4rem;
        }
        .titulo1{
            text: white;
            size: 1.8rem;
        }
        .titulo9{
            text: white;
            size: 2.2rem;
        }
    </style>
</head>
<body>
    <h1 class="titulopro">Hi, We are “Dr.Pools”</h1>
    <p>
        Your contract has ended successfully, we hope you have enjoyed our service , thanks for choosing us.
    </p>
    <br>
    <div>
        <p>
            
            <h1 class="titulo">Costumer</h1>
            <b>Name:</b> {{$contac->name}}
            <br>
            <b>Phone:</b> {{$contac->phone}}
            <br>
            <b>Service:</b> {{$contac->service_name}}
            <br>
            <b>Description:</b> {{$contac->description}}
            <br>
            <b>Request date:</b> {{$contac->created_at}}
            <br>
            <b>Approval date:</b> {{$contac->updated_at}}
            <br>
            <b>Price:</b> ${{$contac->price}}
            <br>
            <b>Finish date:</b> {{$contac->date}}
            <br>
            <b>Observations:</b> {{$contac->observation}}
        </p>
    </div>

        
            <br>
    <div class="espacio">
            <h2 class="titulo9"><strong>Dr. Pools LLC.</strong></h2>
            <p>SERVICE, MAINTENANCE, REPAIR</p>
            
            <p> 
                <b>Phone:</b> <a class="titulo1" href="tel:+ 1 (203) 948-4970">+ 1 (203) 948-4970</a><br>
                <b>E-mail:</b> <a class="titulo1" href="mailto:admin@dr-pools.com">admin@dr-pools.com</a><br>
                <b>Web:</b> <a class="titulo1" href="http://www.dr-pools.com" target="_blank" rel="noopener noreferrer"></a>www.dr-pools.com
            </p>
            
    </div>
    
</body>
</html>