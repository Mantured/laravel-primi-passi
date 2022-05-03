<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>image_of_master_of_puppets</title>

    <style>
        main{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container{
            margin: 3rem auto;
            width: 60vw;
            
        }
        .links{
            margin-top: 3rem; /* margin collpase i know! */
            text-align: center;
        }
        .links > a {
                
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
    </style>

</head>
<body>
    <main>
        <div class="container">
            <img src="https://totally80s.com/sites/totally80s.rock.tools/files/styles/site_width_image/public/2020-03/metallica-master-puppets.jpg?itok=m3C1P0SF" alt="master_of_puppets_cover_image">
            <div class="links">
                <a href="{{ @route('home')}}">Go Home</a>
            </div>
        </div>
        
    </main>
    
</body>
</html>